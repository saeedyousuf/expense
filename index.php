<?php

require 'vendor/autoload.php';
use RedBean_Facade as R;

$app = new \Slim\Slim(
    array(
        'templates.path' => './public/templates'
    )
);

R::setup('mysql:host=localhost;
        dbname=chores','root','admin123');

$app->get('/', function() use ($app) {
    $app->render('expenses_listing.php', array(
        'page_title' => 'Welcome to Chores Management'
    ));
});

$app->post('/create_expense', function() use ($app) {
    $form = $app->request()->params();
    $expense = R::dispense('expenses');
    $expense->desc = $form['desc'];
    $expense->amount = $form['amt'];
    $expense->created_on = time();
    $id = R::store($expense);
    if ( $id ) {
        $app->flash('success', 'Your expense has been created successfully!');
        $app->redirect('/');
    } else {
        $app->flash('error', 'Something went wrong..');
        $app->redirect('/');
    }
//    echo "<pre>"; print_r($form); exit;
});

$app->run();


//echo "<pre>"; print_r($app); exit;
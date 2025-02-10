<?php

namespace migue\proyectoFinalTimetrack\Controllers;

class ViewController
{
    public static function view($view, $data = [])
    {
        self::viewHeader();
        //self::viewNavbar();
        //self::viewSidebar();
        require_once $view;
        //self::viewChat();
        self::viewFooter();

    }

    public static function viewHeader()
    {
        include_once 'views/layout/header.php';
    }

    public static function viewFooter()
    {
        include_once 'views/layout/footer.php';
    }

    public static function viewChat() {
        include_once 'views/layout/chat/chat.php';
    }

    public static function viewSidebar() {
        include_once 'views/layout/sidebar.php';
    }

    public static function viewNavbar() {
        include_once 'views/layout/navbar.php';
    }

    public static function viewError($message)
    {
        self::viewHeader();
        echo '<p style="color: white;">' . $message. '</p>';
        self::viewFooter();
    }
}
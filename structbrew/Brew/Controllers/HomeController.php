<?php
declare(strict_types=1);

namespace Brew\Controllers;

use Brew\Core\Controller;
use Brew\Core\Request;
use Brew\Core\Response;
use Throwable;

final class HomeController extends Controller
{
    /**
     * Home page
     * @throws Throwable
     */
    public function index(Request $req): Response
    {
        $features = [
            'Zero-dependency Core Architecture',
            'Simple Routing & Controllers',
            'Clean View Engine with dot-notation',
            'Built-in Request / Response abstraction',
            'Fast JSON API Support',
            'Human-readable Logs & Structure',
        ];

        return $this->view('home.index', [
            'appName'     => 'Structbrew Framework',
            'title'       => 'Structbrew Framework',
            'message'     => 'Welcome to your Structbrew environment!',
            'method'      => $req->method(),
            'currentTime' => date('H:i:s'),
            'features'    => $features,
        ]);
    }

    /**
     * About page
     * @throws Throwable
     */
    public function about(): Response
    {
        return $this->view('home.about', [
            'title'   => 'About Structbrew',
            'message' => 'Structbrew is a living PHP framework focused on automation, structure, and simplicity.',
        ]);
    }
    /**
     * Contact page
     * @throws Throwable
     */
    public function contact(): Response
    {
        return $this->view('home.contact', [
            'title'   => 'Contact',
            'message' => 'Get in touch with us.',
        ]);
    }

    public function api(Request $req): Response
    {
        return $this->json([
            'status'     => 'ok',
            'framework'  => 'Structbrew',
            'path'       => $req->path(),
            'timestamp'  => time(),
        ]);
    }
    public function redirectHome(): Response
    {
        return $this->redirect('/');
    }
}

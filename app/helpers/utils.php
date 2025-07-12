<?php

if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

function flash(string $key, string $message = null, string $type = 'info')
{
    if ($message !== null) {
        $_SESSION['flash'][$key] = [
            'message' => $message,
            'type'    => $type,
        ];
    } else {
        if (isset($_SESSION['flash'][$key])) {
            $flash = $_SESSION['flash'][$key];
            unset($_SESSION['flash'][$key]);
            return $flash;
        }
    }

    return null;
}

function base_url($path = ''): string
{
    return '/projetophp_rennova' . $path;
}

function asset_url($path = ''): string
{
    return base_url('/assets/' . $path);
}

function redirect($url): void
{
    header("Location: " . base_url($url));
    exit();
}
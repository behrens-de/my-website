<?
namespace Html;

class Head{

    function __construct($title, $lang) {
        $this->title = $title;
        $this->land = $lang;
    }

    private function css() : string{
        return '<link rel="stylesheet" href="style.css">';
    }

    function render() : string {
        return '
        <!DOCTYPE html>
        <html lang="'.$this->lang.'">
        <head>
            <meta charset="UTF-8">
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <meta name="theme-color" content="#416462">
            <title>'.$this->title.'</title>
            '.$this->css().'
        </head>';
    }
}
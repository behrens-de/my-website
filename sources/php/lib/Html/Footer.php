<?
namespace Html;

class Footer{
    function __construct()
    {
        
    }

    private function jsScripts(){
        return '<script src="./js/main.js" defer></script>';
    }

    function render() : string {
        return 
        $this->jsScripts().'
        </body>
        </html>';
    }    
}
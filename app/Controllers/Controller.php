<?php

namespace App\Controllers;
use Database\DBConnection;

class Controller {

    protected DBConnection $db;

    /**
     * Controller constructor.
     * @param DBConnection $db
     */
    public function __construct(DBConnection $db)
    {
        $this->db = $db;
    }


    public function view(string $path, array $params = null)
    {
        ob_clean();
        $path = str_replace('.', DIRECTORY_SEPARATOR, $path);
        require VIEWS.$path.'.php';
        $content = ob_get_clean();
        require VIEWS.'layout.php';

    }

}

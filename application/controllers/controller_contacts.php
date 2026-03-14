<?php
class Controller_Contacts extends Controller {
    function action_index() {
        $data = ["email" => "info@mysite.ru", "phone" => "+7 (000) 000-00-00"];
        $this->view->generate('contacts_view.php', 'template_view.php', $data);
    }
}
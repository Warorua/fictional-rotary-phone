<?php
class UserInputController extends Controller
{
    public function actionIndex()
    {
        if (isset($_GET['data'])) {
            $serializedData = $_GET['data'];
            $result = unserialize($serializedData);
            $result->getAnything();
            echo "Unserialized Data:<br>";
            echo "<pre>";
            print_r($result);
            echo "</pre>";
        } else {
            echo "No data provided.";
        }
    }
}

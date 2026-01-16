<?php
class UserInputController extends Controller
{
    public function actionIndex()
    {
        if (isset($_GET['data'])) {
            $serializedData = $_GET['data'];
            $result = unserialize($serializedData);

            echo "Unserialized Data:<br>";
            echo "<pre>";
            print_r($result);
            echo "</pre>";
            try {
                $result->anyMethodName();
            } catch (Exception $e) {
                // It will fail because the URL isn't a real SOAP server, 
                // but the HTTP request HAS ALREADY been sent.
            }
        } else {
            echo "No data provided.";
        }
    }
}

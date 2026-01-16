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
            //print_r($result);
            echo "</pre>";
            // 1. Check if the class was actually created or if it's "Incomplete"
            echo "Class Type: " . get_class($result) . "<br>";

            // 2. Check if the SOAP extension is even active
            if (!extension_loaded('soap')) {
                echo "ERROR: SOAP extension is NOT loaded. The attack cannot fire.<br>";
            }

            // 3. See the error message when you call the method
            try {
                $result->anyMethodName();
            } catch (\Throwable $e) { // Use Throwable to catch both Errors and Exceptions
                echo "Caught: " . $e->getMessage();
            }
        } else {
            echo "No data provided.";
        }
    }
}

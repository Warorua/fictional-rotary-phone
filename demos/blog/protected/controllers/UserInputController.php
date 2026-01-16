<?php
class UserInputController extends Controller
{
    public function actionIndex()
    {
        if (isset($_GET['data'])) {
            $serializedData = $_GET['data'];
            $result = unserialize($serializedData);
        } else {
            echo "No data provided.";
        }
    }
}

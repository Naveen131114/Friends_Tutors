<?php

function alertMessage($status, $message)
{
    if ($status === 'Success') {
        $imgPath = '../src/icons/verified.png';
    } elseif($status === 'Error') {
        $imgPath = '../src/icons/wrong.png';
    } 

    echo ("
        <div id='overlay'></div>
        <div id='alert-message-modal'>
            <div id='alert-header'>
                <div id='alert-header-title'>" . $status . "</div>
                <button id='close-modal' class='close-modal'>&times;</button>
            </div>
            <div id='alert-body'>
                <img src='$imgPath' alt=''>
                <p>".$message."</p>
            </div>
            <script>
                alertModal();
                clearFormData();
                </script>
        </div>
        ");
}
?>
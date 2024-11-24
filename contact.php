<?php include $_SERVER['DOCUMENT_ROOT']."/Geometry/includes/header.php"; ?>
<?php include $_SERVER['DOCUMENT_ROOT']."/Geometry/includes/navigation.php"; ?>
<head>
    <title><?php echo $label_contact; ?></title>
</head>
<body>
    <?php if (!empty($message)) {echo '<div class="alert alert-light" role="alert">'.$message.'</div>';}?>
    <div class="container" style="overflow: auto; display: inline-block;">
        <div class="row justify-content-md-center" style="padding:20px;">
            <h2 text-align="center"><?php echo $Lang['contact_information'];?></h2>
        </div>
        <div class="row justify-content-md-center" style="padding:10px;padding-top:20px">
            <div class="col-md-3 text-right" style="justify-content: center;">
            <address style="justify-content: center; word-wrap: break-word; overflow-wrap: break-word; max-width: 100%;">
    <strong><?php echo $Lang['address1'];?></strong><br>
    <?php echo $Lang['address2'];?><br>
    <a><?php echo $Lang['phone_contact'];?></a>
</address>
<address style="word-wrap: break-word; overflow-wrap: break-word; max-width: 100%;">
    <a><?php echo $Lang['email_contact'];?></a>
</address>              
            </div>
            <div class="col-md-9" style="padding:10px;">
                <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d2436.3128982308527!2d84.2625072!3d49.7259022!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x2c039f205a6f5f2e!2s%D0%A8%D0%BA%D0%BE%D0%BB%D0%B0%20%E2%84%9611!5e0!3m2!1sen!2sru!4v1620157812715!5m2!1sen!2sru" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
            </div>
        </div>
    </div> <!-- /container -->
</body>
<?php include $_SERVER['DOCUMENT_ROOT']."/Geometry/includes/footer.php"; ?>

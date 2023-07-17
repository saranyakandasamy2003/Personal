<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <mete name="viewport"content="width=device-width,initial-scale=1.0">
            <meta http-equiv="X-UA-Compatible"content="ie=edge">
            <link rel="stylesheet"href="bootstrap.css">
            <title>Contact Us Form In Php</title>
</head>
<body>
      <div class="container">
        <div class="row">
            <div class="col-lg-6 m-auto">
                <div class="card">
                    <div class="card-title">
                        <h2 class="text-center py-2">Contact Us</h2>
                        <hr>
</div>
<div class="card-body">
    <form action="process.Php"method="post">
        <input type="text"name="UName"placeholder="UName"class="form-control  mb-2">
        <input type="text"name="Email"placeholder="Email"class="form-control  mb-2">
        <input type="text"name="Subject"placeholder="Subject"class="form-control  mb-2">
        <textarea name="msg" class="form-control" placeholder="Write The Message"></textarea>
        <button class="btn btn-success" name="send">Send</button>

    </form>
</div>
</div>
</div>
</div>
</div>
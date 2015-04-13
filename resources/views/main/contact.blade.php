@extends('welcome') @section('content')
<section class="content">
    <h1>Contact Us</h1>
    <hr>
    <form id="login" action="login" method="post" class="form-horizontal">
        <div class="form-group">
            <label for="inputName" class="col-sm-2 control-label">Name</label>
            <div class="col-sm-8">
                <input type="text" name="name" id="inputName" class="form-control" placeholder="Name" required autofocus autocomplete="off">
            </div>
        </div><div class="form-group">
            <label for="inputEmail" class="col-sm-2 control-label">Email address</label>
            <div class="col-sm-8">
                <input type="email" name="email" id="inputEmail" class="form-control" placeholder="Email Address" required autocomplete="off">
            </div>
        </div>
        <div class="form-group">
            <label for="inputMsg" class="col-sm-2 control-label">Message</label>
            <div class="col-sm-8">
                <textarea name="question" name="message" id="inputMsg" class="form-control" columns="3" placeholder="Your message" autocomplete="off" required></textarea>
            </div>
        </div>
        <div class="form-group">
            <div class="col-sm-offset-2 col-sm-10">
                <button type="submit" value="submit" name="submit" class="btn btn-success">Send</button>
            </div>
        </div>
    </form>
    @endsection
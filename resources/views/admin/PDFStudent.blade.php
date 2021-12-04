<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <title>Hello, world!</title>
</head>
<style>
    .container {
        width: 100%;
    }

    .row {
        background: rgb(218, 214, 214);
        text-align: center;
        padding: 8px;
    }

    .name,
    .gender {
        margin: 30px 10px;
    }

    label {
        font-size: 17px;
        margin: 0 10px;
    }

    .name>input[type="text"] {
        height: 25px;
        border: none;
        border-bottom: 1px solid black;
        width: 400px;
        font-size: 20px;
        padding: 2px;
    }

    .gender>input[type="text"] {
        height: 25px;
        border: none;
        border-bottom: 1px solid black;
        width: 400px;
        font-size: 20px;
        padding: 2px;
    }

    .language>input[type="text"] {
        height: 25px;
        border: none;
        border-bottom: 1px solid black;
        width: 150px;
        font-size: 20px;
        padding: 2px;
    }

    .address>input[type="text"] {
        height: 25px;
        border: none;
        border-bottom: 1px solid black;
        width: 150px;
        font-size: 20px;
        padding: 2px;
        margin-top: 15px;
    }

    span {
        display: inline-block;
        margin-top: 20px;
        margin-left: 28px;
        font-size: 20px;
    }

    .right {
        margin-left: 300px;
    }

    .first>.right-align {
        margin-left: 140px;
    }

    .first>.left-align {
        margin-left: 40px;
    }

    .second>.right-align {
        margin-left: 150px;
    }

    .second>.left-align {
        margin-left: 40px;
    }

    .third>.right-align {
        margin-left: 130px;
    }

    .third>.left-align {
        margin-left: 40px;
    }

    .first {
        margin-top: 20px;
    }

    .first>input[type="text"] {
        height: 25px;
        border: none;
        border-bottom: 1px solid black;
        width: 220px;
        font-size: 20px;
        padding: 2px;
        margin-top: 25px;
    }

    .second>input[type="text"] {
        height: 25px;
        border: none;
        border-bottom: 1px solid black;
        width: 220px;
        font-size: 20px;
        padding: 2px;
        margin-top: 25px;
    }

    .third>input[type="text"] {
        height: 25px;
        border: none;
        border-bottom: 1px solid black;
        width: 180px;
        font-size: 20px;
        padding: 2px;
        margin-top: 25px;
    }

    #momCellPhone {
        height: 25px;
        border: none;
        border-bottom: 1px solid black;
        width: 220px;
        font-size: 20px;
        padding: 2px;
        margin-top: 25px;
    }

    .g-right {
        margin-left: 370px;
    }

    .g-first>input[type="text"] {
        height: 25px;
        border: none;
        border-bottom: 1px solid black;
        width: 220px;
        font-size: 20px;
        padding: 2px;
        margin-top: 25px;
    }

    .g-second>input[type="text"] {
        height: 25px;
        border: none;
        border-bottom: 1px solid black;
        width: 220px;
        font-size: 20px;
        padding: 2px;
        margin-top: 25px;
    }

    .g-third>input[type="text"] {
        height: 25px;
        border: none;
        border-bottom: 1px solid black;
        width: 180px;
        font-size: 20px;
        padding: 2px;
        margin-top: 25px;
    }

    .g-first>.right-align {
        margin-left: 140px;
    }

    .g-first>.left-align {
        margin-left: 40px;
    }

    .g-second>.right-align {
        margin-left: 90px;
    }

    .g-second>.left-align {
        margin-left: 40px;
    }

    .g-third>.right-align {
        margin-left: 130px;
    }

    .g-third>.left-align {
        margin-left: 40px;
    }

    #otherChildren {
        height: 25px;
        border: none;
        border-bottom: 1px solid black;
        width: 80%;
        font-size: 20px;
        padding: 2px;
        margin-top: 25px;
    }

    #msg {
        margin-left: 200px;
    }

</style>

<body>
    <div class="container">
        <h3>Registration Date: 12/12/2021</h3>
        <div class="row">
            <h1>The smart education system</h1>
            <p>Celebrating academic excellance since 1990</p>
            <h1>Student Application Form</h1>
        </div>
        <div class="name">
            <label>Child Name:</label>
            <input type="text" value="Himayat Jalil">
        </div>
        <div class="gender">
            <label class="left-align">Male</label><input type="checkbox" name="gender">
            <label>Male</label><input type="checkbox" name="gender">
            <label style="margin-left:70px;">Birth Date:</label><input type="text" value="02-12-1998">
        </div>
        <div class="language">
            <label style="margin-left:28px;">Place of Birth:</label><input type="text" value="Chitral">
            <label style="margin-left:40px;">Primary language spoken at Home:</label>
            <input type="text" value="Urdu">
        </div>
        <br>
        <span><ins>Home Address</ins></span><span class="right"><ins>Telephone Number</ins></span><br>
        <div class="first">
            <label class="left-align">Street:</label>
            <input type="text" value="Alipur Farash">
            <label class="right-align">Home Phone:</label>
            <input type="text" value="03449601020">
        </div>
        <div class="second">
            <label class="left-align">City:</label>
            <input type="text" value="Islamabad">
            <label class="right-align">Dad's Phone:</label>
            <input type="text" value="0349293845">
        </div>
        <div class="third">
            <label class="left-align">Postal Code:</label>
            <input type="text" value="2345">
            <label class="right-align">Mom's Phone:</label>
            <input type="text" value="03406534543" id="momCellPhone">
        </div>
        <div class="name">
            <label>Email Address:</label>
            <input type="text" value="himayatjalil313@gmail.com">
        </div>
        <h5 id="msg">"All contact information must be kept current throughout the school year"</h5>
        <span><ins>Father</ins></span><span class="g-right"><ins>Mother</ins></span><br>
        <div class="g-first">
            <label class="left-align">Name:</label>
            <input type="text" value="Himayat Jalil">
            <label class="right-align">Name:</label>
            <input type="text" value="">
        </div>
        <div class="g-second">
            <label class="left-align">Work Place:</label>
            <input type="text" value="IT Technology">
            <label class="right-align">Work Place:</label>
            <input type="text" value="">
        </div>
        <div class="g-third">
            <label class="left-align">Occupation:</label>
            <input type="text" value="Laravel Developer">
            <label class="right-align">Occupation:</label>
            <input type="text" value="" id="momCellPhone">
        </div>
        <div class="g-third">
            <label class="left-align">Work Phone:</label>
            <input type="text" value="03425586333">
            <label class="right-align">Work Phone:</label>
            <input type="text" value="" id="momCellPhone">
        </div>
        <div class="name">
            <label>Class:</label>
            <input type="text" value="Fsc">
        </div>
        <span>Name of other children in your home:</span>
        <input type="text" value="" id="otherChildren">
    </div>
</body>

</html>

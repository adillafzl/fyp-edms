<form action="<?php echo site_url('Prints/printpdf');?>" method="post">

    <h2> Blank Template </h2>
    <h3> Please fill in the form below : </h3>

    </br></br></br>
    Name :&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    <input type="text" name="namerec" placeholder="Insert receiver's name" autofocus/>
    </br></br>
    Address :&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    <input type="text" name="addrecr" placeholder="Insert receiver's address"/>
    </br></br>
    <label for="date"> Date : </label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    <input type="date" id="date" name="date">
    </br> </br>
    Title :&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    <input type="text" name="title" placeholder="Insert title of letter" autofocus/>
    </br></br>
    Content :</br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
    <textarea name="content" rows="10" cols="50">
    Type your content of letter here.
    </textarea>
    </br></br>
    <div class="form-group">
            <button type="submit" class="btn btn-success">Save</button>
    </div>




</form>
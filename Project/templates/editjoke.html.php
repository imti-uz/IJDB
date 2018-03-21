<form action="" method="post">
    
    <input type="hidden" name="jokeID" value=<?=$joke['id'];?>>
    
    <label for="joketext">Edit your joke here:</label>
    
    <textarea id="joketext" name="joketext" rows="3" cols="40">
        <?=$joke['joketext']?>
    </textarea>
    
    <input type="submit" value="SAVE">

</form>
<div class="container text-center">
    <button type="button" class="btn btn-secondary" data-toggle="collapse" data-target="#addGameForm">Add a Game</button>
    <div id="addGameForm" class="collapse m-2">
    <form method="POST" action="add_game.php">
      <div class="form-group">
        <label>Game Name:</label>
        <input type="text" name="game_name">
      </div>

    <div class="form-check">
      <input class="form-check-input" type="radio" name="consoles" id="exampleRadios1" value="Xbox One" checked>
      <label class="form-check-label" for="exampleRadios1">
        Xbox One
      </label>
    </div>
    <div class="form-check">
      <input class="form-check-input" type="radio" name="consoles" id="exampleRadios2" value="PlayStation 4">
      <label class="form-check-label" for="exampleRadios2">
        PlayStation 4
      </label>
    </div>
    <div class="form-check">
      <input class="form-check-input" type="radio" name="consoles" id="exampleRadios3" value="Nintendo Switch">
      <label class="form-check-label" for="exampleRadios3">
        Nintendo Switch
      </label>
    </div>
    <div class="form-group">
      <label for="game_description">Enter Game Description</label>
      <textarea class="form-control" id="game_description" name="game_description" rows="3" required></textarea>
    </div>

       <button type="submit" class="btn btn-secondary mb-2">Submit</button>
    </form>
    </div>
  </div>
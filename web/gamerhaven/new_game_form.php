<div class="container">
    <button type="button" class="btn btn-secondary" data-toggle="collapse" data-target="#addGameForm">Add a Game</button>
    <div id="addGameForm" class="collapse my-4">
    <form method="POST" action="add_game.php">
      <div class="form-group">
        <label>Game Name:</label><br/>
        <input type="text" name="game_name">
      </div>
    <br/>
    <div class="form-check">
      <input class="form-check-input" type="checkbox" name="consoles[]" id="xbobxone" value="1" checked>
      <label class="form-check-label" for="xboxone">
        Xbox One
      </label>
    </div>
    <div class="form-check">
      <input class="form-check-input" type="checkbox" name="consoles[]" id="playstaytion4" value="2">
      <label class="form-check-label" for="playstation4">
        PlayStation 4
      </label>
    </div>
    <div class="form-check">
      <input class="form-check-input" type="checkbox" name="consoles[]" id="nintendoswitch" value="3">
      <label class="form-check-label" for="nintendoswitch">
        Nintendo Switch
      </label>
    </div>
    <br/>
    <div class="form-group">
      <label for="game_description">Enter Game Description</label>
      <textarea class="form-control" id="game_description" name="game_description" rows="3" required></textarea>
    </div>
    <br/>

      <button type="submit" class="btn btn-secondary mb-2">Submit</button>
    </form>
    </div>
  </div>
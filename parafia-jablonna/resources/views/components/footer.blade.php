<div class="footer-basic">
    <footer>
        <div class="social"><a href="https://www.instagram.com/parafia_jablonna/" target="_blank"><i class="icon ion-social-instagram"></i></a><a href="https://www.facebook.com/parafiajablonna" target="_blank"><i class="icon ion-social-facebook"></i></a></div>
        <ul class="list-inline">
            <li class="list-inline-item"><a href="{{ url('/strona-glowna') }}">Strona Główna</a></li>
            <li class="list-inline-item"><a href="{{ url('/aktualnosci') }}">Aktualności</a></li>
            <li class="list-inline-item"><a href="{{ url('/ogloszenia-parafialne') }}">Ogłoszenia</a></li>
            <li class="list-inline-item"><a href="{{ url('/intencje-mszalne') }}">Intencje mszalne</a></li>
            <li class="list-inline-item"><a class="contact" href="{{ url('/kancelaria#contact') }}">Kontakt</a></li>
        </ul>
        <p class="copyright">© 2023 Parafia Jabłonna | Realizacja: <a id="copyright-gx" class="copyright" onClick="countClicks();" style="cursor: pointer;">GalaxyCode</a></p>
    </footer>
</div> 

<!-- Burtek tu był <3 -->
<script>
    var pattern = ['ArrowUp', 'ArrowUp', 'ArrowDown', 'ArrowDown', 'ArrowLeft', 'ArrowRight', 'ArrowLeft', 'ArrowRight', 'b', 'a'];
    var current = 0;
    var keyHandler = function (event) {
        if (pattern.indexOf(event.key) < 0 || event.key !== pattern[current]) {
            current = 0;
            return;
        }
        current++;
        if (pattern.length === current) {
            current = 0;
            alert("[INFO] Odblokowano $#%*(^#$%*.")
        }
    };
    document.addEventListener('keydown', keyHandler, false);
</script>







<div class="modal fade" id="snakeGame" tabindex="-1" role="dialog" aria-labelledby="Snake" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="snake">🐍 Snake - <span id="score">0</span></h5>
      </div>
      <div class="modal-body" style="display: flex; justify-content: center; align-items: center;">
        <canvas id="gameCanvas" style="background-color: #F4F4F4; border: 3px solid #000000;" width="400" height="400"><canvas>
      </div>
      <div class="modal-footer">
        <a class="btn btn-success" id="startBtn" onClick="game_start();">START!</a>
      </div>
    </div>
  </div>
</div>

<script>
    let clicks = 0;
    function countClicks() {
        clicks++;
        if (clicks > 9) {
            clicks = 0;
            $('#snakeGame').modal('show');
        }
        setTimeout(() => {
            clicks = 0;
        }, 7500);
    }
</script>
<script>
    const board_border = 'black';
    const board_background = "white";
    const snake_col = 'lightblue';
    const snake_border = 'darkblue';
    
    let snake = [
      {x: 200, y: 200},
      {x: 190, y: 200},
      {x: 180, y: 200},
      {x: 170, y: 200},
      {x: 160, y: 200}
    ]

    let score = 0;
    // True if changing direction
    let changing_direction = false;
    // Horizontal velocity
    let food_x;
    let food_y;
    let dx = 10;
    // Vertical velocity
    let dy = 0;
    
    
    // Get the canvas element
    const snakeboard = document.getElementById("gameCanvas");
    // Return a two dimensional drawing context
    const snakeboard_ctx = snakeboard.getContext("2d");
    // Start game
    function game_start() {
        score = 0;
        document.getElementById('score').innerHTML = 0;
        changing_direction = false;
        food_x = null;
        food_y = null;
        dx = 10;
        dy = 0;
        snake = [
            {x: 200, y: 200},
            {x: 190, y: 200},
            {x: 180, y: 200},
            {x: 170, y: 200},
            {x: 160, y: 200}
        ]
        clear_board();

        document.getElementById("startBtn").style.visibility = 'hidden';
        main();
        gen_food();
    
        document.addEventListener("keydown", change_direction);
    }
    // main function called repeatedly to keep the game running
    function main() {

        if (has_game_ended()) {
            document.getElementById("startBtn").style.visibility = 'visible';
            return;
        }

        changing_direction = false;
        setTimeout(function onTick() {
        clear_board();
        drawFood();
        move_snake();
        drawSnake();
        // Repeat
        main();
      }, 100)
    }
    
    // draw a border around the canvas
    function clear_board() {
      //  Select the colour to fill the drawing
      snakeboard_ctx.fillStyle = board_background;
      //  Select the colour for the border of the canvas
      snakeboard_ctx.strokestyle = board_border;
      // Draw a "filled" rectangle to cover the entire canvas
      snakeboard_ctx.fillRect(0, 0, snakeboard.width, snakeboard.height);
      // Draw a "border" around the entire canvas
      snakeboard_ctx.strokeRect(0, 0, snakeboard.width, snakeboard.height);
    }
    
    // Draw the snake on the canvas
    function drawSnake() {
      // Draw each part
      snake.forEach(drawSnakePart)
    }

    function drawFood() {
      snakeboard_ctx.fillStyle = 'lightgreen';
      snakeboard_ctx.strokestyle = 'darkgreen';
      snakeboard_ctx.fillRect(food_x, food_y, 10, 10);
      snakeboard_ctx.strokeRect(food_x, food_y, 10, 10);
    }
    
    // Draw one snake part
    function drawSnakePart(snakePart) {

      // Set the colour of the snake part
      snakeboard_ctx.fillStyle = snake_col;
      // Set the border colour of the snake part
      snakeboard_ctx.strokestyle = snake_border;
      // Draw a "filled" rectangle to represent the snake part at the coordinates
      // the part is located
      snakeboard_ctx.fillRect(snakePart.x, snakePart.y, 10, 10);
      // Draw a border around the snake part
      snakeboard_ctx.strokeRect(snakePart.x, snakePart.y, 10, 10);
    }

    function has_game_ended() {
      for (let i = 4; i < snake.length; i++) {
        if (snake[i].x === snake[0].x && snake[i].y === snake[0].y) return true
      }
      const hitLeftWall = snake[0].x < 0;
      const hitRightWall = snake[0].x > snakeboard.width - 10;
      const hitToptWall = snake[0].y < 0;
      const hitBottomWall = snake[0].y > snakeboard.height - 10;
      return hitLeftWall || hitRightWall || hitToptWall || hitBottomWall
    }

    function random_food(min, max) {
      return Math.round((Math.random() * (max-min) + min) / 10) * 10;
    }

    function gen_food() {
      // Generate a random number the food x-coordinate
      food_x = random_food(0, snakeboard.width - 10);
      // Generate a random number for the food y-coordinate
      food_y = random_food(0, snakeboard.height - 10);
      // if the new food location is where the snake currently is, generate a new food location
      snake.forEach(function has_snake_eaten_food(part) {
        const has_eaten = part.x == food_x && part.y == food_y;
        if (has_eaten) gen_food();
      });
    }

    function change_direction(event) {
      const LEFT_KEY = 37;
      const RIGHT_KEY = 39;
      const UP_KEY = 38;
      const DOWN_KEY = 40;
      
    // Prevent the snake from reversing
    
      if (changing_direction) return;
      changing_direction = true;
      const keyPressed = event.keyCode;
      const goingUp = dy === -10;
      const goingDown = dy === 10;
      const goingRight = dx === 10;
      const goingLeft = dx === -10;
      if (keyPressed === LEFT_KEY && !goingRight) {
        dx = -10;
        dy = 0;
      }
      if (keyPressed === UP_KEY && !goingDown) {
        dx = 0;
        dy = -10;
      }
      if (keyPressed === RIGHT_KEY && !goingLeft) {
        dx = 10;
        dy = 0;
      }
      if (keyPressed === DOWN_KEY && !goingUp) {
        dx = 0;
        dy = 10;
      }
    }

    function move_snake() {
      // Create the new Snake's head
      const head = {x: snake[0].x + dx, y: snake[0].y + dy};
      // Add the new head to the beginning of snake body
      snake.unshift(head);
      const has_eaten_food = snake[0].x === food_x && snake[0].y === food_y;
      if (has_eaten_food) {
        // Increase score
        score += 1;
        // Display score on screen
        document.getElementById('score').innerHTML = score;
        // Generate new food location
        gen_food();
      } else {
        // Remove the last part of snake body
        snake.pop();
      }
    }
    
  </script>
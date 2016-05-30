<?php
Yii::app()->getClientScript()->registerCoreScript( 'jquery' );
Yii::app()->getClientScript()->registerCoreScript( 'jquery.ui' );

// Подключаем объявление класса игры.
session_start();

// Получаем из сессии текущую игру.
// Если игры еще нет, создаём новую.
$game = isset($_SESSION['game'])? $_SESSION['game']: null;
if(!$game || !is_object($game)) {
    $game = new TicTacGame();
}

// Обрабатываем запрос пользователя, выполняя нужное действие.
$params = $_GET + $_POST;
if(isset($params['action'])) {
    $action = $params['action'];

    if($action == 'move') {
        // Обрабатываем ход пользователя.
        $game->makeMove((int)$params['x'], (int)$params['y']);

    } else if($action == 'newGame') {
        // Пользователь решил начать новую игру.
        $game = new TicTacGame();
    }
}
// Добавляем вновь созданную игру в сессию.
$_SESSION['game'] = $game;


// Отображаем текущее состояние игры в виде HTML страницы.
$width = $game->getFieldWidth();
$height = $game->getFieldHeight();
$field = $game->getField();
$winnerCells = $game->getWinnerCells();

?>

<!-- Отображаем состояние игры и игровое поле. -->
<?php if($game->getCurrentPlayer()) { ?>
    <!-- Отображаем приглашение сделать ход. -->
    Крестики-нулики. Ваш ход!
<?php } else { ?>
    Игра окончена!
<?php } ?>
<br><br>

<!-- Рисуем игровое поле, отображая сделанные ходы
и подсвечивая победившую комбинацию. -->
<div class="ticTacField">
    <?php for($y=0; $y < $height; $y++) { ?>
        <div class="ticTacRow">
            <?php for($x=0; $x < $width; $x++) {
                // $player - игрок, сходивший в эту клетку :), или null, если клетка свободна.
                // $winner - флаг, означающий, что эта клетка должна быть подсвечена при победе.
                $player = isset($field[$x][$y])? $field[$x][$y]: null;
                $winner = isset($winnerCells[$x][$y]);
                $class = ($player? ' player' . $player: '') . ($winner? ' winner': '');
                ?>
                <div class="ticTacCell<?php echo $class ?>">
                    <?php if(!$player) { ?>
                        <!-- Клетка свободна. Отображаем здесь ссылку,
                        на которую нужно кликнуть для совершения хода. -->
                        <a href="?action=move&amp;x=<?php echo $x ?>&amp;y=<?php echo $y ?>"></a>
                    <?php } ?>
                </div>
            <?php } ?>
        </div>
    <?php } ?>
</div>
<br>
<a href="?action=newGame">Начать новую игру</a>
<br><br>
<?php if($game->getWinner()) { ?>

    <!-- Отображаем сообщение о победителе -->
    <!-- Победил пользователь -->
    <?php if ( $game->getWinner() == 1 ) { ?>
        <div id="dialog" data-result="win" title="Вы победили! Хотите сохранить Ваши результаты?" style="display: none;">
            <b class="resart">Результаты:</b>
            <div id="resultsview">
                <?php $this->renderPartial('_resultsblock'); ?>
            </div>
                <div style="clear: both"></div>
                <br>
                <form id="result" name="result">
                    <div class="row">
                        <label for="username">Введите Ваше Имя:</label>
                        <input type="text" id="username" name="username" class="reg-input tiny" autocomplete="off" tabindex="1">
                    </div>
                </form>
            <br>
            <input id="usertime" type="hidden" value="<?php echo $game->getPlayTime() ?>" >
            Время игры: <?php echo $game->getPlayTime() ?> сек.<br><br>
        </div>
    <?php } ?>

    <!-- Победил компьютер -->
    <div id="dialog" data-result="loose" title="Вы проиграли!" style="display: none;">
        <b class="resart">Результаты:</b>
        <div id="resultsview">
            <?php $this->renderPartial('_resultsblock'); ?>
        </div>
            <div style="clear: both"></div>
            <br>
            <b class="resart">Победил компьютер!</b>
        <br>
        Время игры: <?php echo $game->getPlayTime() ?> сек.<br><br>

    </div>
<?php } ?>





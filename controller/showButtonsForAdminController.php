<?php



class ShowButtonsEditForAdminC {																					// контроллер показа кнопок редактирования постов для админа

	public function showBtns() {
		if($_SESSION['login'] == 'admin') {                                   // только для админа показываем кнопки удалить и опубликовать
			echo(" <form method=" . "post" . "> ");
				echo(" <button type=" . "submit" . " name=" . "delbtn" . ">Удалить</button>  ");
				echo(" <button type=" . "submit" . " name=" . "aprbtn" . ">Допустить к публикации</button> ");
			echo("</form>");
		}

	}	


}
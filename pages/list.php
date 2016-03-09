<script src="js/list.js"></script>

<div id="mainContainer">
	<ul id="todoList">
		<?php
			$todoListsObj = new todoLists($DBH); //Lets pass through our DB connection

			$listid = $_GET['id']; //Set our list ID
			$listItems = $todoListsObj->getListItems($listid); //Call the getListItems function

			foreach ($listItems as $key => $value) { //Loop over returned items
				echo "<li>".$value['item_name']." <span data-itemid=\"".$value['item_id']."\" class=\"glyphicon glyphicon-remove deleteItem\"></span></li>";
			}
		?>
	</ul>

	<form class="form-inline">
		<div class="form-group">
			<input type="text" class="form-control" id="product" placeholder="Milk">
		</div>
		<input type="hidden" class="form-control" id="listid" value="<?php echo $_GET['id']; ?>">
		<button type="button" class="btn btn-primary" id="addproduct"><span class="glyphicon glyphicon-plus" aria-hidden="true"></span></button>
	</form>
</div>
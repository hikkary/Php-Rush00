<div id='dep'>
			<form  action='mod.php' method="post">
				<input class="radio" type="radio" name="ref" value="Pokemon"> Pokemon <br/>
				<input class="radio" type="radio" name="ref" value="Pokeball"> Pokeball<br/>

				<input type="text" name="name" value='{$p[name]}' placeholder="Name">
				<input type="text" name="newname" placeholder="New Name">
				<input type="number" name="price" placeholder="Price">
					<br/>

			    <label for="type">Select Types :</label><br />
					  <input type="checkbox" name="None">None</input>
					  <input type="checkbox" name="Fire">Fire</input>
					  <input type="checkbox" name="Plant">Plant</input>
					  <input type="checkbox" name="Water">Water</input>
					  <input type="checkbox" name="Rock">Rock</input>
					  <input type="checkbox" name="Poison">Poison</input>
				</select>
				<br/>
					<br/>

				<input type="url" name="image" placeholder="url de l\'image">

				<input type="text" name="description" placeholder="Describe the product">
				<input type="submit" name="submit" value="OK"/>
			</form>
		</div>
	</div>"
	?>

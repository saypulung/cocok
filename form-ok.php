<form action="" method="post">
<table>
	<tr>
		<th>Kode Ruang</th>
		<th>Hari</th>
		<th>Jam Mulai</th>
		<th>Sks Jadwal</th>
	</tr>
	<tr>
		<td><select name="ruang[]">
				<option value="a1">A1</option>
				<option value="a2">A2</option>
			</select>
		</td>
		<td><select name="hari[]">
				<option value="senin">Senin</option>
				<option value="selasa">Selasa</option>
			</select>
		</td>
		<td><select name="jam[]">
				<option value="07:00:00">07:00:00</option>
				<option value="08:00:00">08:00:00</option>
			</select>
		</td>
		<td><input type="text" name="sks[]" value="2" readonly="readonly" /></td>
	</tr>
	<tr>
		<td><select name="ruang[]">
				<option value="a1">A1</option>
				<option value="a2">A2</option>
			</select>
		</td>
		<td><select name="hari[]">
				<option value="senin">Senin</option>
				<option value="selasa">Selasa</option>
			</select>
		</td>
		<td><select name="jam[]">
				<option value="07:00:00">07:00:00</option>
				<option value="08:00:00">08:00:00</option>
			</select>
		</td>
		<td><input type="text" name="sks[]" value="2" readonly="readonly" /></td>
	</tr>
</table>
<button type="submit" name="simpan">Simpan</button>
</form>
<?php
	print_r($_POST);
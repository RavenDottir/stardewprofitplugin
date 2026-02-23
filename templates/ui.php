<div>
</div>
	<div class="sdv-calculator">
		<div class="graph">
			<div id="sdv-graph-title" class="sdv-graph-title"></div>
		</div>

		<div class="options">
		<table cellspacing="2" style="height: 0;">

			<tr>
				<td>Season:</td>
				<td>
					<select id="select_season" onChange="rebuild()">
						<option value="0" id="season_0" selected="true">Spring</option>
						<option value="1" id="season_1">Summer</option>
						<option value="2" id="season_2">Fall</option>
						<option value="3" id="season_3">Winter</option>
						<option value="4" id="season_4">Greenhouse</option>
					</select>
				</td>
			</tr>

            <tr id="cross_season_row">
                <td>Cross-Season:</td>
                <td><label for="cross_season" class="sdv-checkbox-row"><input type="checkbox" id="cross_season" onChange="refresh()" /><span>Enable</span></label></td>
            </tr>

			<tr id="current_day_row">
				<td>Current Day:</td>
				<td><input type="number" id="current_day" value="1" onChange="refresh()"/></td>
			</tr>

            <tr id="number_days_row">
                <td>Number of Days:</td>
                <td><input type="number" id="number_days" value="28" onChange="refresh()"/></td>
            </tr>

            <tr>
                <td>Crops Tiles:</td>
                <td><input type="number" id="number_planted" value="1" onChange="refresh()"/></td>
            </tr>

			<tr>
				<td>Produce Type:</td>
				<td>
					<select id="select_produce" onChange="refresh()">
						<option value="0" selected="true">Raw</option>
						<option value="1">Jar</option>
						<option value="2">Keg</option>
                        <option value="3">Seeds</option>
						<option value="4">Dehydrator</option>
						<option value="5">Mill</option>
					</select>
				</td>
			</tr>

            <tr>
                <td colspan="2" class="sub">
                    <table cellspacing="2" class="subt">
                        <tr id="tr_equipment">
                            <td>Equipment:</td>
                            <td><input type="number" id="equipment" value="0" onChange="refresh()"/></td>
                        </tr>
                        <tr id="tr_check_sellRaw">
                            <td>No Artisan Good:</td>
                            <td><label for="check_sellRaw" class="sdv-checkbox-row"><input type="checkbox" id="check_sellRaw" onChange="refresh()"/><span>Sell Raw</span></label></td>
                        </tr>
                        <tr id="tr_check_sellExcess">
                            <td>Excess:</td>
                            <td><label for="check_sellExcess" class="sdv-checkbox-row"><input type="checkbox" id="check_sellExcess" onChange="refresh()"/><span>Sell Raw</span></label></td>
                        </tr>
                        <tr id="tr_check_byHarvest">
                            <td>By Harvest:</td>
                            <td><label for="check_byHarvest" class="sdv-checkbox-row"><input type="checkbox" id="check_byHarvest" onChange="refresh()"/><span>Enable</span></label></td>
                        </tr>
                        <tr id="tr_select_aging">
                            <td>Aging:</td>
                            <td >
                                <select id="select_aging" onChange="refresh()">
                                    <option value="0" selected="true">None</option>
                                    <option value="1">Silver</option>
                                    <option value="2">Gold</option>
                                    <option value="3">Iridium</option>
                                </select>
                            </td>
                        </tr>
                    </table>
                </td>
            </tr>

		</table>

		<table cellspacing="2">

            <tr>
                <td>Profit Display:</td>
                <td>
                    <select id="select_profit_display" onChange="refresh()">
                        <option value="0" id="display_0" selected="true">Total Profit</option>
                        <option value="1" id="display_1">Daily Profit</option>
                        <option value="2" id="display_2">Total ROI</option>
                        <option value="3" id="display_3">Daily ROI</option>
                    </select>
                </td>
            </tr>

            <tr>
                <td>Max Seed Money:</td>
                <td><input type="number" id="max_seed_money" value="0" onChange="refresh()"/></td>
            </tr>

			<tr>
				<td>Seed Sources:</td>
				<td>
					<label for="check_seedsPierre" class="sdv-checkbox-row"><input type="checkbox" id="check_seedsPierre" onChange="rebuild()" checked="true" /><span>Pierre</span></label>
					<label for="check_seedsJoja" class="sdv-checkbox-row"><input type="checkbox" id="check_seedsJoja" onChange="rebuild()" checked="true" /><span>Joja</span></label>
					<label for="check_seedsPierre" class="sdv-checkbox-row"><input type="checkbox" id="check_seedsPierre" onChange="rebuild()" checked="true" /><span>Pierre</span></label><br />
					<label for="check_seedsJoja" class="sdv-checkbox-row"><input type="checkbox" id="check_seedsJoja" onChange="rebuild()" checked="true" /><span>Joja</span></label><br />
					<label for="check_seedsSpecial" class="sdv-checkbox-row"><input type="checkbox" id="check_seedsSpecial" onChange="rebuild()" checked="true" /><span>Special</span></label>
				</td>
			</tr>

			<tr>
				<td>Pay For Seeds:</td>
				<td><label for="check_buySeed" class="sdv-checkbox-row"><input type="checkbox" id="check_buySeed" onChange="refresh()" /><span>Enable</span></label></td>
			</tr>

            <tr>
                <td>Process & Replant:</td>
                <td><label for="check_replant" class="sdv-checkbox-row"><input type="checkbox" id="check_replant" onChange="refresh()" /><span>(Forces even crops)</span></label></td>
            </tr>

            <tr>
                <td>Use Next Year:</td>
                <td><label for="check_nextyear" class="sdv-checkbox-row"><input type="checkbox" id="check_nextyear" onChange="refresh()" /><span>Enable</span></label></td>
            </tr>

			<tr>
				<td>Fertilizer:</td>
				<td>
					<select id="select_fertilizer" onChange="refresh()">
						<option value="0" selected="true">None</option>
						<option value="1">Basic Fertilizer</option>
						<option value="2">Quality Fertilizer</option>
						<option value="5">Deluxe Fertilizer</option>
						<option value="3">Speed-Gro</option>
						<option value="4">Deluxe Speed-Gro</option>
						<option value="6">Hyper Speed-Gro</option>
					</select>
				</td>
			</tr>

			<tr>
				<td>Pay For Fertilizer:</td>
				<td><label for="check_buyFert" class="sdv-checkbox-row"><input type="checkbox" id="check_buyFert" onChange="refresh()" /><span>Enable</span></label></td>
			</tr>
			<tr id = "deluxe_speed_input">
				<td>Speed-Gro Source:</td>
				<td>
					<select id="speed_gro_source" onChange="refresh()">
						<option value="0" selected="true">Pierre</option>
						<option value="1">Sandy</option>
					</select>
				</td>
			</tr>
		</table>

		<table cellspacing="2">

			<tr>
				<td>Farming Level:</td>
				<td><input type="number" id="farming_level" value="0" onChange="refresh()"/></td>
			</tr>

			<tr>
				<td colspan="2" class="sub">
                    <table cellspacing="2" class="subt">
                        <tr>
                            <td>Level 5 Skill:</td>
                            <td><label for="check_skillsTill" class="sdv-checkbox-row"><input type="checkbox" id="check_skillsTill" onChange="refresh()" /><span>Tiller</span></label></td>
                        </tr>
                        <tr>
                            <td>Level 10 Skill:</td>
                            <td >
                                <select id="select_skills" onChange="refresh()">
                                    <option value="0" selected="true">None</option>
                                    <option value="1">Agriculturist</option>
                                    <option value="2">Artisan</option>
                                </select>
                            </td>
                        </tr>
                    </table>
				</td>
			</tr>

            <tr>
                <td colspan="2" class="sub">
                    <table class="subt">
                    </table>
                </td>
            </tr>

            <tr>
                <td>Foraging Level:</td>
                <td ><input type="number" id="foraging_level" value="0" onChange="refresh()"/></td>
            </tr>

            <tr>
                <td colspan="2" class="sub">
                    <table cellspacing="2" class="subt">
                        <tr>
                            <td>Level 5 skill:</td>
                            <td><label for="check_skillsGatherer" class="sdv-checkbox-row"><input type="checkbox" id="check_skillsGatherer" onChange="refresh()" /><span>Gatherer</span></label></td>
                        </tr>
                        <tr>
                            <td>Level 10 skill:</td>
                            <td><label for="check_skillsBotanist" class="sdv-checkbox-row"><input type="checkbox" id="check_skillsBotanist" onChange="refresh()" /><span>Botanist</span></label></td>
                        </tr>
                    </table>
                </td>
            </tr>

			<tr>
				<td>Farming Food Buff:</td>
				<td>
					<select id="select_food" onChange="refresh()">
						<option value="0" selected="true">None</option>
						<option value="1">Maple Bar</option>
						<option value="1">Hashbrowns</option>
						<option value="2">Complete Breakfast</option>
						<option value="2">Pepper Poppers</option>
						<option value="2">Tom Kha Soup</option>
						<option value="3">Farmer's Lunch</option>
					</select>
				</td>
			</tr>

			<tr>
				<td>Show Extra Info:</td>
				<td><label for="check_extra" class="sdv-checkbox-row"><input type="checkbox" id="check_extra" onChange="refresh()" checked="true" /><span>Enable</span></label></td>
			</tr>

			<tr>
				<td>Disable Crop Links:</td>
				<td><label for="disable_links" class="sdv-checkbox-row"><input type="checkbox" id="disable_links" onChange="refresh()" /><span>Enable</span></label></td>
			</tr>

			<tr>
				<td>Use Prediction Model:</td>
				<td><label for="predictionModel" class="sdv-checkbox-row"><input type="checkbox" id="predictionModel" onChange="refresh()" /><span>Enable</span></label>
				<button type="button" onClick="refresh()" >Recalculate</button></td>
			</tr>
			
		</table>
		</div>
	</div>

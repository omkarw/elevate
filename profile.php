<!DOCTYPE html>
<html>
<head>
	<title>
		Job Page (Title Can Be Retrived from Database with actual Job Posting )
	</title>
	<link rel="stylesheet" type="text/css" href="css/normalize.css">
	<link rel="stylesheet" type="text/css" href="css/styles.css">
</head>
<body>
<div id="wrap">
<header>	

<div id="brand">
	elevate
	</div>
	<div id="nav">
		&nbsp;
	</div>

	</header>

<div id="cover">

</div>

<div id="profile">
&nbsp;
</div>
<div class="brand-name">
Company Name
</div>
<div class="brand-slogan">
Write anything which makes you proud about yourself! Don't brag make it to 140 characters.
</div>

<div id="container">
<form>
<label>Company information: </label>
<br/>
<br/>
	<input type="text" placeholder="Company Name" class="profiletextinput"required /><br/>

	<textarea placeholder="Yor company description" class="profiletextareainput" required></textarea>
<br/>

	<hr/>
	<br/>

<label>Please fill this basic company information: </label>
<br/>
<br/>
<input type="text" placeholder="Location" class="profiletextinput2" />

<select name="indtype" class="profiletextinput2">
                    <option selected="selected" value="-1">- Select an Industry -</option>
                    <option value="2">Accessories/Apparel/Fashion Design</option><option value="3">Accounting/Consulting/Taxation</option><option value="4">Advertising/Event Management/PR</option><option value="5">Agriculture/Dairy Technology</option><option value="6">Airlines/Hotel/Hospitality/Travel/Tourism/Restaurants</option><option value="40">Animation / Gaming</option><option value="7">Architectural Services/ Interior Designing</option><option value="8">Auto Ancillary/Automobiles/Components</option><option value="9">Banking/Financial Services/Stockbroking/Securities</option><option value="41">Banking/FinancialServices/Broking</option><option value="10">Biotechnology/Pharmaceutical/Clinical Research</option><option value="43">Brewery/Distillery</option><option value="11">Cement/Construction/Engineering/Metals/Steel/Iron</option><option value="44">Ceramics/Sanitaryware</option><option value="12">Chemicals/Petro Chemicals/Plastics</option><option value="22">Computer Hardware/Networking</option><option value="13">Consumer FMCG/Foods/Beverages</option><option value="14">Consumer Goods - Durables</option><option value="15">Courier/Freight/Transportation/Warehousing</option><option value="16">CRM/ IT Enabled Services/BPO</option><option value="17">Education/Training/Teaching</option><option value="46">Electricals/Switchgears</option><option value="18">Employment Firms/Recruitment Services Firms</option><option value="19">Entertainment/Media/Publishing/Dotcom</option><option value="20">Export Houses/Textiles/Merchandise</option><option value="48">FacilityManagement</option><option value="49">Fertilizers/Pesticides</option><option value="50">FoodProcessing</option><option value="21">Gems and Jewellery</option><option value="51">Glass</option><option value="45">Government/Defence</option><option value="23">Healthcare/Medicine</option><option value="52">HeatVentilation/AirConditioning</option><option value="24">Insurance</option><option value="53">KPO/Research/Analytics</option><option value="25">Law/Legal Firms</option><option value="26">Machinery/Equipment Manufacturing/Industrial Products</option><option value="54">Mining</option><option value="27">NGO/Social Services</option><option value="28">Office Automation</option><option value="37">Others/Engg. Services/Service Providers</option><option value="29">Petroleum/Oil and Gas/Projects/Infrastructure/Power/Non-conventional Energy</option><option value="30">Printing/Packaging</option><option value="55">Publishing</option><option value="31">Real Estate</option><option value="32">Retailing</option><option value="33">Security/Law Enforcement</option><option value="38">Shipping/Marine</option><option value="34">Software Services</option><option value="56">Steel</option><option value="57">Strategy/ManagementConsultingFirms</option><option value="35">Telecom Equipment/Electronics/Electronic Devices/RF/Mobile Network/Semi-conductor</option><option value="36">Telecom/ISP</option><option value="58">Tyres</option><option value="59">WaterTreatment/WasteManagement</option><option value="60">Wellness/Fitness/Sports</option>
                </select>

<select>
                    <option selected="selected" value="-1">- No of Employees -</option>
	<option>1-10</option>
	<option>11-50</option>
	<option>51-100</option>
	<option>101-500</option>
	<option>501-1000</option>

</select>
<input type="date" class="profiletextinput2">
<input type="website" placeholder="Website" class="profiletextinput2" />
<br/>
<br/>
<hr/>
<br/>
<label>Upload Pictures</label>
<br/>
<br/>
<input type="file"  value="Upload Pictures">
<br/>
<br/>
<hr/>
<br/>
<label>Post New Job Opening</label>
<br/>
<br/>
<form>
	<input type="text" placeholder="Job Title" class="profiletextinput3" /> 
	<input type="text" placeholder="Job Video URL" class="profiletextinput3" />
	<input type="text" placeholder="Job Location" class="profiletextinput3" />
	<input type="text" placeholder="Add Tags" class="profiletextinput3" />
	<input type="text" placeholder="Add Skills" class="profiletextinput3" /><br/>
<input type="button" class="button" id="jobbutton" value="Post new job">
</form>
<br/>
<br/>
<label>Current Job Opening</label>
<br/>
<br/>
<table>
	<tr>
		<td>Job Id</td>
		<td>Job Title</td>
		<td>Job Location</td>
		<td>Tags</td>
		<td>Views</td>
	</tr>

</table>

<br/>
<br/>
<hr/>
</form>
</div>

<footer>&nbsp;</footer>
</div>
</body>
</html>
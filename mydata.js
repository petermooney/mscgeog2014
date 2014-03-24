	var INTEL = L.polygon([
		[53.37471631332996, -6.529539110488258],
		[53.37268087414204, -6.519110681838356],
		[53.37009482997908, -6.5080599806969985],
		[53.37287290086236, -6.506171705550514],
		[53.37603481636035, -6.517115118331276],
		[53.3774812824388, -6.516407015151344],
		[53.378543699679156, -6.520548345870338],
		[53.378850899724235, -6.529024126357399],
		[53.37471631332996, -6.529539110488258],
	]).addTo(map);
	
	INTEL.bindPopup("<h1>This is the world famous INTEL Campus at Leixlip</h1>. This polygon shows an outline of the campus area");	
	
	var NorthCampus = L.polygon([
	[53.38784823667833, -6.606409549713135],
	[53.3830106009008, -6.6043925285339355],
	[53.38253704616908, -6.608362197875977],
	[53.38178190745818, -6.608598232269287],
	[53.38225547058848, -6.599006652832031],
	[53.38270343086418, -6.595659255981445],
	[53.384917565293634, -6.59778356552124],
	[53.38583902083523, -6.59604549407959],
	[53.38583902083523, -6.59604549407959],
	[53.38784823667833, -6.606409549713135]
	]).addTo(map);
	
	NorthCampus.bindPopup("<h2>This is the north campus of NUIM</h2>");
	


	var RandomPlace1 = L.polygon([
	[53.38784823667833, 6.606409549713135],
	[53.3830106009008, 6.6043925285339355],
	[53.38253704616908, 6.608362197875977],
	[53.38178190745818, 6.608598232269287],
	[53.38225547058848, 6.599006652832031],
	[53.38270343086418, 6.595659255981445],
	[53.384917565293634, 6.59778356552124],
	[53.38583902083523, 6.59604549407959],
	[53.38583902083523, 6.59604549407959],
	[53.38784823667833, 6.606409549713135]
	]).addTo(map);
	
	RandomPlace1.bindPopup("<h2>A random place in Europe</h2> - this is just for example");
	
	
	var museum = L.marker([53.34792828641171, -6.287013771361671]).addTo(map);
	var smithfield = L.marker([ 53.34715972457336, -6.2779479048913345]).addTo(map);
	var fourcourts = L.marker([ 53.34690353421498, -6.273699285811745]).addTo(map);	
	var jervis = L.marker([53.34772333794288, -6.265341522521339]).addTo(map);	  
	
	
	museum.bindPopup("<b>This is the Museum Luas Stop</b>");
	smithfield.bindPopup("<b>This is the Smithfield Luas Stop</b>");
	fourcourts.bindPopup("<b>This is the Four Courts Luas Stop</b>");	
	jervis.bindPopup("<b>This is the Luas stop at Jervis</b>: Get off here for shopping");	
	
	
	var m1 = L.marker([53.34792828641171, 6.287013771361671]).addTo(map);
	var s1 = L.marker([ 53.34715972457336, 6.2779479048913345]).addTo(map);
	var f1 = L.marker([ 53.34690353421498, 6.273699285811745]).addTo(map);	
	var j1 = L.marker([53.34772333794288, 6.265341522521339]).addTo(map);	  
	
	
	m1.bindPopup("<b>Random location 1</b>");
	s1.bindPopup("<b>Random location 2</b>");
	f1.bindPopup("<b>Random location 3p</b>");	
	j1.bindPopup("<b>Random location 4</b>");		
	
	
		
	
	
	
	

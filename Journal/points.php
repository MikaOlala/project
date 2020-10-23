<?php
		$groups = array();
		$groups[0]['id'] = 26355;
		$groups[0]['group'] = "CSSE-1803";
		$groups[0]['name'] = "Tanko Tyan";
		$groups[0]['pic'] = "files/ava4.png";
		$groups[0]['age'] = 20;
		$groups[0]['avg'] = 78;

		$groups[1]['id'] = 26533;
		$groups[1]['group'] = "CSSE-1806";
		$groups[1]['name'] = "Mika Tyan";
		$groups[1]['pic'] = "files/ava1.png";
		$groups[1]['age'] = 20;
		$groups[1]['avg'] = 78;

		$groups[2]['id'] = 26531;
		$groups[2]['group'] = "CSSE-1806";
		$groups[2]['name'] = "Dimash Orazaly";
		$groups[2]['pic'] = "files/ava2.png";
		$groups[2]['age'] = 20;
		$groups[2]['avg'] = 78;

		$groups[3]['id'] = 26521;
		$groups[3]['group'] = "CSSE-1806";
		$groups[3]['name'] = "Tracer Oxton";
		$groups[3]['pic'] = "files/ava3.png";
		$groups[3]['age'] = 20;
		$groups[3]['avg'] = 78;


		$mark = array();

		$mark[0]['st_id'] = 26533;
		$mark[0]['java'] = 100;
		$mark[0]['python'] = 60;
		$mark[0]['c'] = 80;
		$mark[0]['web'] = 80;
		$mark[0]['kazakh'] = 0;

		$mark[1]['st_id'] = 26531;
		$mark[1]['java'] = 94;
		$mark[1]['python'] = 79;
		$mark[1]['c'] = 79;
		$mark[1]['web'] = 80;
		$mark[1]['kazakh'] = 100;

		$mark[2]['st_id'] = 26521;
		$mark[2]['java'] = 75;
		$mark[2]['python'] = 80;
		$mark[2]['c'] = 65;
		$mark[2]['web'] = 70;
		$mark[2]['kazakh'] = 50;

		$mark[3]['st_id'] = 26355;
		$mark[3]['java'] = 100;
		$mark[3]['python'] = 100;
		$mark[3]['c'] = 100;
		$mark[3]['web'] = 100;
		$mark[3]['kazakh'] = 70;


		$java = array();
		$java[0]['st_id'] = 26533;
		$java[0]['lab'] = "Task 1";
		$java[0]['mark'] = 100;
		$java[0]['deadline1'] = "in time";
		$java[1]['st_id'] = 26533;
		$java[1]['lab'] = "Task 2";
		$java[1]['mark'] = 100;
		$java[1]['deadline1'] = "in time";
		$java[2]['st_id'] = 26533;
		$java[2]['lab'] = "Task 3";
		$java[2]['mark'] = 100;
		$java[2]['deadline1'] = "in time";

		$java[6]['st_id'] = 26531;
		$java[6]['lab'] = "Task 1";
		$java[6]['mark'] = 94;
		$java[6]['deadline1'] = "in time";
		$java[7]['st_id'] = 26531;
		$java[7]['lab'] = "Task 2";
		$java[7]['mark'] = 93;
		$java[7]['deadline1'] = "in time";
		$java[8]['st_id'] = 26531;
		$java[8]['lab'] = "Task 3";
		$java[8]['mark'] = 95;
		$java[8]['deadline1'] = "in time";

		$java[3]['st_id'] = 26521;
		$java[3]['lab'] = "Task 1";
		$java[3]['mark'] = 75;
		$java[3]['deadline1'] = "in time";
		$java[4]['st_id'] = 26521;
		$java[4]['lab'] = "Task 2";
		$java[4]['mark'] = 80;
		$java[4]['deadline1'] = "in time";
		$java[5]['st_id'] = 26521;
		$java[5]['lab'] = "Task 3";
		$java[5]['mark'] = 70;
		$java[5]['deadline1'] = "expired";

		$python = array();
		$python[0]['st_id'] = 26533;
		$python[0]['lab'] = "Task 1";
		$python[0]['mark'] = 60;
		$python[0]['deadline1'] = "expired";
		$python[1]['st_id'] = 26533;
		$python[1]['lab'] = "Task 2";
		$python[1]['mark'] = 50;
		$python[1]['deadline1'] = "expired";
		$python[2]['st_id'] = 26533;
		$python[2]['lab'] = "Task 3";
		$python[2]['mark'] = 70;
		$python[2]['deadline1'] = "in time";

		$python[6]['st_id'] = 26531;
		$python[6]['lab'] = "Task 1";
		$python[6]['mark'] = 79;
		$python[6]['deadline1'] = "in time";
		$python[7]['st_id'] = 26531;
		$python[7]['lab'] = "Task 2";
		$python[7]['mark'] = 80;
		$python[7]['deadline1'] = "in time";
		$python[8]['st_id'] = 26531;
		$python[8]['lab'] = "Task 3";
		$python[8]['mark'] = 78;
		$python[8]['deadline1'] = "expired";

		$python[3]['st_id'] = 26521;
		$python[3]['lab'] = "Task 1";
		$python[3]['mark'] = 80;
		$python[3]['deadline1'] = "in time";
		$python[4]['st_id'] = 26521;
		$python[4]['lab'] = "Task 2";
		$python[4]['mark'] = 100;
		$python[4]['deadline1'] = "in time";
		$python[5]['st_id'] = 26521;
		$python[5]['lab'] = "Task 3";
		$python[5]['mark'] = 60;
		$python[5]['deadline1'] = "expired";

		$c = array();
		$c[0]['st_id'] = 26533;
		$c[0]['lab'] = "Task 1";
		$c[0]['mark'] = 70;
		$c[0]['deadline1'] = "in time";
		$c[1]['st_id'] = 26533;
		$c[1]['lab'] = "Task 2";
		$c[1]['mark'] = 90;
		$c[1]['deadline1'] = "in time";

		$c[5]['st_id'] = 26531;
		$c[5]['lab'] = "Task 1";
		$c[5]['mark'] = 79;
		$c[5]['deadline1'] = "in time";
		$c[6]['st_id'] = 26531;
		$c[6]['lab'] = "Task 2";
		$c[6]['mark'] = 79;
		$c[6]['deadline1'] = "in time";

		$c[3]['st_id'] = 26521;
		$c[3]['lab'] = "Task 1";
		$c[3]['mark'] = 70;
		$c[3]['deadline1'] = "in time";
		$c[4]['st_id'] = 26521;
		$c[4]['lab'] = "Task 2";
		$c[4]['mark'] = 60;
		$c[4]['deadline1'] = "in time";
	?>
<?php

header("Cache-Control: no-store, no-cache, must-revalidate, max-age=0");
header("Cache-Control: post-check=0, pre-check=0", false);
header("Pragma: no-cache");
?><!DOCTYPE html>
<!--
    Copyright (c) 2012-2014 Adobe Systems Incorporated. All rights reserved.

    Licensed to the Apache Software Foundation (ASF) under one
    or more contributor license agreements.  See the NOTICE file
    distributed with this work for additional information
    regarding copyright ownership.  The ASF licenses this file
    to you under the Apache License, Version 2.0 (the
    "License"); you may not use this file except in compliance
    with the License.  You may obtain a copy of the License at

    http://www.apache.org/licenses/LICENSE-2.0

    Unless required by applicable law or agreed to in writing,
    software distributed under the License is distributed on an
    "AS IS" BASIS, WITHOUT WARRANTIES OR CONDITIONS OF ANY
     KIND, either express or implied.  See the License for the
    specific language governing permissions and limitations
    under the License.
-->
<html>
    <head>
        <meta charset="utf-8" />
        <meta name="format-detection" content="telephone=no" />
        <meta name="msapplication-tap-highlight" content="no" />
        <!-- WARNING: for iOS 7, remove the width=device-width and height=device-height attributes. See https://issues.apache.org/jira/browse/CB-4323 -->
        <meta name="viewport" content="user-scalable=no, initial-scale=1, maximum-scale=1, minimum-scale=1, width=device-width, height=device-height, target-densitydpi=medium-dpi" />
		<meta property="og:title" content="Thai Raptor Guide (Beta)" />
		<meta property="og:site_name" content="Birds of Thailand" />
		<meta property="og:description" content="Photo Guide of the Raptors of Thailand and South-East Asia (partly), including color photographs, basic ID features, biology info, and field data infographics. Compiled by Thai Raptor Group since 2005." />
		<meta property="og:image" content="http://www.birdsofthailand.org/raptor/img/steppe-blue.JPG" />
		<link rel="icon" type="image/png" href="http://www.birdsofthailand.org/raptor/icon.png">
		<!--<link rel="stylesheet" href="css/jquery.mobile-1.4.5.min.css">-->
		<link rel="stylesheet" href="css/jquery.mobile.flatui.min.css">
		<link rel="stylesheet" href="css/photoswipe.css">
		<link rel="stylesheet" href="css/default-skin/default-skin.css">
        <link rel="stylesheet" type="text/css" href="css/index.css?2015.11.16.1" />
        <title>Thai Raptor Guide</title>
    </head>
    <body>
		<img src="img/splash.jpg" class="splash-logo">
		<div data-role="page" id="splashPage" dialog="true">
			<div data-role="header" data-theme="a">
				<h2>Thai Raptor Guide</h2>
			</div>
			<div role="main" class="ui-content">
				<div style="text-align: center; margin-top: -2em;">
					<!--<h2 class="ui-bar ui-bar-f">Thai Raptor Guide</h2>-->
					<img src="img/sayno1.jpg" class="ui-corner-all" style="width: 72%;" />
					<div style="text-align: center; padding: 0 25%;">
						<a id="AcceptButton" href="#browsePage" class="ui-disabled" data-role="button" data-theme="g">OK</a>
					</div>
				</div>
			</div>
		</div>
		
		<div data-role="page" id="browsePage">
			
			<div data-role="header" data-position="fixed">
				<a data-iconpos="notext" href="#menupanel" data-role="button" data-icon="flat-menu"></a>	
				<h2>Thai Raptor Guide</h2>
			</div>
			<div role="main" class="ui-content">
				<ul class="species-list" data-role="listview" data-filter="false" data-filter-placeholder="Search" data-theme="f">
				</ul>
			</div>
			
			<div class="left-menu" data-role="panel" id="menupanel" data-position="left" data-theme="a" data-display="push" data-position-fixed="true">
			</div>

		</div>
		
		<div data-role="page" id="birdsPage">
			
			<div data-role="header" data-position="fixed">
				<a data-iconpos="notext" href="#browsePage" data-rel="back" data-role="button" data-icon="carat-l">Back</a>	
				<h2>Thai Raptor Guide</h2>
			</div>
			<div role="main" class="ui-content">
				<div class="species-detail">
				</div>
			</div>
			
		</div>
<!--		
		<div data-role="page" id="searchPage">
			
			<div data-role="header" data-position="fixed">
				<a data-iconpos="notext" href="#menupanel0" data-role="button" data-icon="flat-menu"></a>	
				<h2>Thai Raptor Guide</h2>
			</div>
			<div role="main" class="ui-content">
				[TODO: search criteria]
			</div>
			
			<div class="left-menu" data-role="panel" id="menupanel0" data-position="left" data-theme="a" data-display="push" data-position-fixed="true">
			</div>

		</div>
-->
		<div data-role="page" id="idBasicsPage">
			<div data-role="header" data-position="fixed">
				<a data-iconpos="notext" href="#menupanel1" data-role="button" data-icon="flat-menu"></a>	
				<h2>Thai Raptor Guide</h2>
			</div>
			<div role="main" class="ui-content">
				<h2 class="ui-bar ui-bar-f">หลักการจำแนกชนิดนกนักล่า (ID Basics)</h2>
				<div class="content-page ui-body ui-body-f ui-corner-all">
					<p>นกนักล่าในเวลากลางวัน (Diurnal raptors หรือ Birds of prey) ประกอบด้วยเหยี่ยว นกอินทรีและอีแร้ง เป็นกลุ่มที่ท้าทายนักดูนกในแง่การจำแนกชนิดเป็นอย่างยิ่ง เนื่องจากนกล่าเหยื่อมีความหลากหลายของชนิด เพศและวัย ทำให้ชุดขนของแต่ละชนิดและภายในชนิดเดียว ต่างกันโดยสิ้นเชิง ก่อให้เกิดความสับสนต่อนักดูนกได้มาก หากไม่ทราบถึงความหลากหลายเหล่านี้ โดยเฉพาะอย่างยิ่งสำหรับนักดูนกที่มีประสบการณ์น้อย นอกจากนี้ นกล่าเหยื่อจัดว่าเป็นกลุ่มของนกที่ต้องใช้ความละเอียดถี่ถ้วน ความรู้ในเรื่องชุดขนและความชำนาญที่สะสมจากการพบเห็นนกจำนวนมากและบ่อยครั้งเป็นอย่างมาก เพื่อให้จำแนกชนิดได้อย่างถูกต้องโดยไม่ผิดพลาด นอกจากนี้เหยี่ยวส่วนใหญ่มีการเคลื่อนไหวรวดเร็ว คล่องแคล่วว่องไว มีความระแวงภัยสูง ดังนั้นนักดูนกมักพบเห็นเหยี่ยวขณะบินหรือเกาะคอนในระยะไกล เช่น การเฝ้าสังเกตเหยี่ยวอพยพ ณ จุดนับเหยี่ยวอพยพ ทำให้การสังเกตเพื่อรวบรวมจุดแยกที่สำคัญให้ได้มาซึ่งข้อสรุปในการจำแนกชนิดเป็นได้ยากยิ่งขึ้น หากนักดูนกไม่ตระหนักถึงจุดแยกเหล่านั้นมาก่อนว่าควรจะต้องมุ่งความสนใจที่จุดแยกบางประการที่สำคัญก่อนจุดแยกอื่น ๆ บนตัวนกล่าเหยื่อที่กำลังสังเกตอยู่</p>
					<p>เหยี่ยวบางชนิด พบเห็นได้บ่อยในธรรมชาติจนชินตา ไม่ยากต่อการจำแนกชนิด เช่น <a href="#birdsPage" data-id="8">เหยี่ยวแดง</a>ในชุดขนตัวเต็มวัย หรือ <a href="#birdsPage" data-id="6">เหยี่ยวขาว</a> เป็นต้น แต่ในความเป็นจริง เหตุการณ์ข้างต้นเกิดขึ้นเป็นส่วนน้อยเท่านั้น สำหรับการดูเหยี่ยวโดยส่วนใหญ่ นักดูนกมักจะเผชิญกับสถานการณ์ที่ไม่เอื้ออำนวยให้จำแนกชนิดเหยี่ยวได้อย่างมั่นใจ เนื่องจากเหตุผลหลายประการ ดังต่อไปนี้</p>
					<p><strong>ความหลากหลายของชุดขนต่างวัย</strong> คือ<br/>
						<strong>วัยเด็ก (juvenile)</strong> เป็นลูกนกที่ออกจากรังในปีแรกของชีวิตหรือ first-year หรือ hatch-year<br/>
						<strong>วัยรุ่น (subadult)</strong> เป็นชุดขนกึ่งกลางระหว่างวัยเด็กและตัวเต็มวัย ซึ่งอาจมีระยะเวลาตั้งแต่ 1-5 ปี ผันแปรไปตามขนาดของนก ยิ่งนกนักล่าขนาดใหญ่ยิ่งต้องใช้เวลาผลัดขนนานหลายปีกว่าจะผลัดขนเข้าสู่ชุดขนตัวเต็มวัย เช่น นกอินทรี อีแร้ง แต่นกนักล่าขนาดเล็ก เช่น เหยี่ยวนกเขา เหยี่ยวนกกระจอก เหยี่ยวใหญ่หรือเหยี่ยวทุ่งบางชนิด ใช้เวลา 1-2 ปี ในชุดขนวัยรุ่น<br />
						<strong>ตัวเต็มวัย (adult)</strong><br/>
					แต่เหยี่ยวบางสกุล เช่น เหยี่ยวนกเขามีชุดขนวัยเด็กคล้ายคลึงกัน  จึงก่อให้เกิดความสับสนได้ง่าย</p>
					<p><strong>ระยะเวลาในการสังเกตเหยี่ยวสั้นเกินไป</strong> เนื่องจากพบเห็นเหยี่ยวขณะบิน เช่น เมื่อเหยี่ยวกำลังล่าเหยื่อ หรือ ขณะบินอพยพ  ด้วยนิสัยของเหยี่ยวที่บินเคลื่อนไหวรวดเร็ว และมีพื้นที่ล่าเหยื่อครอบคลุมอาณาเขตกว้างขวาง เช่น เหยี่ยวปีกแหลม</p>
					<p>นักดูนกมี<strong>โอกาสฝึกฝนการจำแนกชนิดของเหยี่ยวน้อย</strong> เมื่อเทียบกับนกกลุ่มอื่นๆ เช่น นกป่า ซึ่งสามารถเห็นได้ตลอดปีหรือมีจำนวนมาก ทำให้มีโอกาสได้ฝึกฝนการจำแนกชนิดได้บ่อยครั้ง และเหยี่ยวหลายชนิดเป็นเหยี่ยวอพยพ จะพบบินผ่านหรืออพยพมาอาศัยในประเทศไทย ในฤดูกาลอพยพหรือฤดูหนาวเท่านั้น ทำให้โอกาสเพิ่มพูนประสบการณ์ในการจำแนกชนิดของนักดูนกที่สนใจการจำแนกชนิดเหยี่ยวมีไม่มากนัก ซึ่งสามารถสร้างโอกาสและขวนขวายหาประสบการณ์เพิ่มเติมได้จากการดูเหยี่ยว ณ จุดดูเหยี่ยวอพยพ เช่น เขาเรดาร์ จ.ประจวบคีรีขันธ์ เขาดินสอ จ.ชุมพร หรือตามถิ่นอาศัยที่มีรายงานพบเหยี่ยวทุ่งหรือนกอินทรีอพยพในฤดูหนาว เช่น ทุ่งหญ้าหรือทุ่งนาที่มีเหยี่ยวทุ่งรวมฝูงเพื่อเกาะนอนในเวลากลางคืน</p>
					<p>ดังนั้นการมุ่งสนใจจุดแยกที่สำคัญเพื่อเปรียบเทียบความแตกต่างของเหยี่ยวแต่ละสกุล แต่ละกลุ่ม จะทำให้นักดูนกมีความชำนาญมากขึ้นในการจำแนกชนิด ชุดขน อายุหรือเพศของเหยี่ยวได้อย่างแม่นยำ โดยจุดแยกที่สำคัญ มีดังต่อไปนี้</p>
					
					<h3>ขณะบิน (in flight)</h3>
					
					<h4>รูปลักษณ์</h4>
					<p>การจำแนกชนิดนกด้วยรูปลักษณ์ (JIZZ แผลงมาจาก GIS: General Impression and Shape) เป็นการประมวลความรู้ ประสบการณ์และทักษะในการจำแนกชนิดนกภายในเวลาอันรวดเร็วด้วยความคุ้นเคยที่สะสมจากประสบการณ์ภาคสนาม ในการสังเกตอย่างเป็นระบบที่เพิ่มพูนขึ้นเป็นลำดับ โดยใช้จุดเด่นหรือจุดแยกต่างๆ บนตัวนก ในแง่รูปพรรณลักษณะ สัดส่วน (เชิงเปรียบเทียบกับนกชนิดอื่นที่คุ้นเคยหรือพบเห็นจนชินตา) สีสัน รูปแบบการบินและพฤติกรรมเฉพาะของนกเป็นพื้นฐานในการจำแนกด้วยการจัดกลุ่มของนกแต่ละกลุ่ม สกุล หรือชนิด เช่น เหยี่ยว นกชายเลน หรือนกกระจิ๊ด  </p>
					<p>การจำแนกชนิดเหยี่ยวอย่างเป็นระบบที่เอื้อต่อการพัฒนาทักษะการจำแนกชนิดด้วยตนเอง ควรเริ่มจากการจำแนกกลุ่มหรือสกุลของเหยี่ยวก่อน แล้วค่อยสังเกตรายละเอียดอื่นๆ เพื่อการจำแนกชนิด เพศ หรืออายุเป็นลำดับ แม้ว่าเหยี่ยวบางชนิดพบเห็นได้บ่อย และสามารถจำแนกชนิดได้ไม่ยากนัก เช่น <a href="#birdsPage" data-id="6">เหยี่ยวขาว</a> <a href="#birdsPage" data-id="8">เหยี่ยวแดง</a> เป็นต้น แต่จากเหตุผลที่แจงไว้ข้างต้น สำหรับเหยี่ยวส่วนใหญ่แล้ว การจำแนกด้วยการพิจารณาชุดขนและสีสันนั้น อาจจะก่อให้เกิดความสับสนได้ง่ายกว่าการจำแนกเหยี่ยวเป็นกลุ่มหรือสกุลก่อน ด้วยแนวทางการจำแนกประการหลัง เหมาะสำหรับนักดูนกที่เริ่มต้นศึกษาการจำแนกชนิดเหยี่ยว เมื่อวางพื้นฐานแน่นแล้วจึงสะสมประสบการณ์ตามแนวทางของหลักการที่เสนอไว้ต่อจากนี้เพื่อเพิ่มพูนทักษะในการจำแนกให้รวดเร็วแม่นยำขึ้นเป็นเงาตามตัว จะเกิดความผิดพลาดน้อย เนื่องจากเริ่มศึกษาจากหัวข้อกว้างๆ และง่ายต่อการจดจำ ได้แก่ รูปลักษณ์เพื่อจำแนกกลุ่ม สกุลหรือชนิดของเหยี่ยว พัฒนาสู่หัวข้อปลีกย่อยที่มีรายละเอียดเพิ่มมากขึ้น ได้แก่ ชนิด ชุดขน เพศและอายุ</p>
					<p><strong>1. เงาร่างขณะบิน (Flight silhouette)</strong> เป็นการประเมินภาพรวมของเงาที่เกิดจากรูปทรงของปีก ส่วนหัว ลำตัวและหาง โดยไม่พิจารณาสีสันและลวดลายของชุดขน เงาร่างขณะบินเป็นจุดแยกที่สำคัญที่สุดในการจำแนกชนิดเหยี่ยวขณะบิน ซึ่งจะมีความถูกต้องแม่นยำผันแปรไปตามประสบการณ์ และช่วยตรวจสอบการจำแนกชนิดด้วยชุดขนและสีสันอีกชั้นหนึ่ง ในบางครั้งอาจจะพบเห็นเหยี่ยวเพียงชั่วพริบตา ทำให้สามารถจำแนกสกุลของเหยี่ยวเท่านั้น แต่เมื่อนำข้อมูลการแพร่กระจายพันธุ์และพฤติกรรมมาประกอบ อาจนำมาซึ่งข้อสรุปว่าเหยี่ยวที่พบนั้นเป็นเหยี่ยวชนิดใด อนึ่ง การประเมินเงาร่างขณะบิน หากมีหลักการและประสบการณ์เป็นตัวตั้งแล้ว จะมีความแม่นยำต่อการจำแนกกลุ่มหรือสกุลของเหยี่ยวมากกว่าการใช้ลักษณะของชุดขนและสีสัน เนื่องจากเหยี่ยวและนกอินทรีเป็นกลุ่มของนกที่มีความผันแปรของชุดขนและสีสันมากที่สุดกลุ่มในอาณาจักรนก ความผันแปรดังกล่าวพบได้ในเหยี่ยวหรือนกอินทรีชนิดเดียวกัน แต่เนื่องจากอายุ เพศ คุณภาพของชุดขน (เก่าโทรมหรือใหม่เพิ่งจะผลัดขนได้) ล้วนเป็นตัวแปรทำให้เกิดความหลากหลายอย่างมาก อาจจะก่อให้เกิดความสับสนในการจำแนกชนิดเนื่องจากความคล้ายคลึงกันของเหยี่ยวหรือนกอินทรีบางชนิด ในชุดขนเฉพาะของกลุ่มอายุต่าง ๆ เช่น วัยรุ่น</p>
					<p>การประเมินสัดส่วนของโครงสร้างร่างกายของเหยี่ยวขณะบิน ช่วยในการประเมินเงาร่างขณะบิน ในแง่ความสั้นยาวของโครงสร้างหลักที่จะสังเกตได้ง่ายขณะเหยี่ยวบิน ได้แก่ ส่วนหัว ปีกและหาง เนื่องจากเหยี่ยว นกอินทรีหรืออีแร้งจะมีเงาร่างขณะบินที่เป็นเอกลักษณ์เฉพาะกลุ่มหรือสกุล ควรฝึกฝนให้เกิดความคุ้นเคยต่อการประเมินสัดส่วน เพราะเป็นพื้นฐานที่สำคัญของการประเมินเงาร่างขณะบิน โดยฝึกฝนการประเมินสัดส่วนและเงาร่างขณะบินกับเหยี่ยวที่พบได้บ่อย เช่น <a href="#birdsPage" data-id="6">เหยี่ยวขาว</a> หรือ <a href="#birdsPage" data-id="8">เหยี่ยวแดง</a> โดยสรุป หลักในการประเมินสัดส่วน ดังนี้</p>
					<p>ความสั้นยาวของส่วนหัว เปรียบเทียบกับความยาวของหางขณะบิน หากมีส่วนหัวยื่นยาวไม่เกินครึ่งหนึ่งของหางให้ถือว่าเหยี่ยวตัวนั้นมีส่วนหัวสั้น เช่น เหยี่ยวใหญ่ เหยี่ยวนกเขา นกอินทรีแท้ นกอินทรีทะเลหรืออีแร้ง นอกจากนี้ลักษณะของส่วนหัวก็มีความสำคัญช่วยจำแนกเหยี่ยว เช่น หัวเรียวยาวคล้ายหัวนกพิราบของ <a href="#birdsPage" data-id="4">เหยี่ยวผึ้ง</a> ส่วนหัวสั้นคล้ายสามเหลี่ยมฐานกว้างและส่วนปลายคือจะงอยปากค่อนข้างแหลมของอีแร้ง </p>
					<p>ความกว้างของปีก ประเมินโดยกำหนดตำแหน่งในจินตนาการระหว่างโคนปีกที่ซอกคอ (ขอบปีกหน้า) และตะโพก (ขอบปีกท้าย) ให้เป็นความกว้างของปีก ถ้าปีกบริเวณดังกล่าวกว้างใกล้เคียงหรือกว้างกว่าความยาวของหาง ให้ถือว่าเหยี่ยวตัวนั้นมีปีกกว้าง แต่ถ้าเหยี่ยวมีความกว้างของปีกสั้นกว่าความยาวหาง ให้ถือว่ามีปีกค่อนข้างแคบ เช่น เหยี่ยวปีกแหลม</p>
					<p>ความยาวของหาง ประเมินโดยเปรียบเทียบกับความกว้างของปีก ณ ตำแหน่งของโคนปีก ถ้าหางยาวกว่าความกว้างของปีกให้ถือว่าเหยี่ยวตัวนั้นมีหางยาว เช่น เหยี่ยวทุ่ง เหยี่ยวปีกแหลม แต่ถ้าหางสั้นกว่าความกว้างของปีกให้ถือว่าเหยี่ยวตัวนั้นมีหางสั้น เช่น อีแร้ง หรือนกอินทรีแท้ </p>
					<p>อย่างไรก็ตามในธรรมชาติมีนกชนิดอื่น ที่ขณะบินอาจจะมีเงาร่างคล้ายเหยี่ยวหรือนกอินทรี เนื่องจากมีขนาดและรูปร่างของปีกคล้ายกันและสามารถบินร่อนลมได้คล้ายกัน จะพบการสับสนลักษณะนี้ได้บ่อยขึ้นเมื่อสังเกตนกในระยะไกล เช่น </p>
					<p>อีกาคล้ายเหยี่ยวขนาดใหญ่ แต่อีกามีปากยาวโค้งลงด้านล่าง ซึ่งจะงอยปากของเหยี่ยวจะสั้น เมื่อเทียบกับส่วนหัว</p>
					<p>นกปากห่างคล้ายเหยี่ยวขนาดใหญ่ หรือนกอินทรี เนื่องจากตัวใหญ่มาก ปีกกว้างและยาว นิ้วมือยาว แต่จะงอยปากยาวและขายาวมาก อาจจะทำให้สับสน หากสังเกตด้วยตาเปล่า แต่เมื่อส่องด้วยกล้องสองตาหรือ กล้องสโคปแล้วน่าจะตัดประเด็นไปได้ไม่ยากนัก</p>
					<p>นกแอ่น คล้ายเหยี่ยวปีกแหลมที่เงาร่างขณะบินคล้ายกันและการบินฉวัดเฉวียนเปลี่ยนทิศทางรวดเร็ว แต่รูปแบบการบินต่างกันอย่างมาก นกแอ่นมีลำตัวสั้นปลายมนคล้ายบุหรี่ซิการ์ หางสั้น ร่อนลมสลับการกระพือปีกถี่ๆ มักบินวนเวียนในพื้นที่เดิมๆ</p>
					<p>นกพิราบ คล้ายเหยี่ยวปีกแหลม แต่ส่วนหัวเรียวเล็กและยื่นยาว ลำตัวหนา ปลายปีกแหลม แต่โคนปีกกว้างมาก ขณะบินร่อนจะยกปีกขึ้นเหนือลำตัว (หรือการจัดระนาบปีก) เป็นรูปตัววี</p>
					<p><strong>2. ลักษณะของปลายปีก</strong> ปลายปีกประกอบด้วยขนปลายปีกเส้นนอก (Outer primaries) เส้นที่ 4 – 10 (เมื่อนับจากขนปลายปีกเส้นในสุดออกจากลำตัวหรือโคนปีก) ซึ่งขนปลายปีกแต่ละเส้นนี้คือ “นิ้วมือ” ซึ่งจำนวนของนิ้วมือที่เห็นได้ชัดจะแตกต่างไปตามสกุลของเหยี่ยวซึ่งจะต้องประเมินขณะบินร่อนเท่านั้น เนื่องจากขณะบินโฉบ เหยี่ยวส่วนใหญ่ล้วนรวบปลายปีกเข้าหากันเสมอ (อ่านหัวข้อรูปแบบการบิน) การจัดแบ่งด้วยลักษณะของปลายปีก แบ่งได้ 2 กลุ่ม</p>
					<p><strong>เหยี่ยวปีกแตก</strong> ประกอบด้วยเหยี่ยว นกอินทรีหรืออีแร้งที่เมื่อบินร่อนมวลอากาศร้อนแล้วปลายปีกแตกออกเป็นนิ้วมือชัดเจน เรียกรวมๆ ว่า ”เหยี่ยว” เพื่อให้กระชับและจดจำง่าย แต่บางสกุลหรือชนิดในกลุ่มนี้อาจจะไม่สอดคล้องกับการจัดลำดับทางอนุกรมวิธานหรือชื่อนัก เพราะนกอินทรีและอีแร้งก็จัดอยู่ในกลุ่มนี้ แต่เพื่อความสะดวกในการจำแนกสกุลและชนิดด้วยรูปลักษณ์ เหยี่ยวปีกแตก โดยเรียงตามความแผ่กว้างของ “มือ” ความยาวของ “นิ้วมือ” และความเด่นชัดของ “ร่องนิ้วมือ” ได้แก่ เหยี่ยวไคท์ (ยกเว้นเหยี่ยวขาวและเหยี่ยวค้างคาว) นกอินทรีทะเล เหยี่ยวปลา อีแร้ง เหยี่ยวกินงู เหยี่ยวทุ่ง เหยี่ยวนกกระจอก เหยี่ยวนกเขา (ยกเว้น <a href="#birdsPage" data-id="28">เหยี่ยวนกเขาพันธุ์จีน</a>)  นกอินทรีแท้ขนาดใหญ่และเหยี่ยวดง</p>
					<p><strong>เหยี่ยวปีกแหลม</strong> ประกอบด้วยเหยี่ยวที่มีขนปลายปีกเส้นนอกยาวใกล้เคียงกันและเมื่อบินร่อนลมร้อนแล้วไม่ปรากฏนิ้วมือและร่องนิ้วมือชัดเจน ทำให้ปลายปีกมีรูปร่างแหลม สอบเรียว ประกอบกับปีกค่อนข้างแคบหรือแคบ ยิ่งทำให้ปลายปีกแหลมอย่างชัดเจน เหยี่ยวปีกแหลม ได้แก่ <a href="#birdsPage" data-id="28">เหยี่ยวนกเขาพันธุ์จีน</a> เหยี่ยวปีกแหลม (Falcons) ทุกชนิดและเหยี่ยวไคท์บางชนิด ประกอบด้วย <a href="#birdsPage" data-id="5">เหยี่ยวค้างคาว</a> และ <a href="#birdsPage" data-id="6">เหยี่ยวขาว</a></p>
					<p><strong>3. รูปร่างของหาง</strong> เป็นจุดแยกที่สำคัญประการหนึ่ง เนื่องจากเป็นจุดสังเกตที่สามารถเห็นได้ชัดขณะเหยี่ยวบินควรประเมินลักษณะของปลายหางว่าปลายมน ปลายตัด หางรูปลิ่มหรือเว้าตรงกลางคล้ายหางปลา ลักษณะรูปร่างที่ต่างกันนี้เกิดจากความยาวของขนหางไม่เท่ากัน ถ้าขนหางคู่กลาง (Central rectrices) ยาวกว่าขนหางเส้นนอก (Outer rectrices) เหยี่ยวตัวนั้นจะมีปลายหางมนหรือรูปลิ่มแล้วความแตกต่างของความยาวของขนหางแต่ละเส้น ถ้าขนหางคู่กลางยาวเท่ากับขนหางเส้นนอก เหยี่ยวตัวนั้นจะมีปลายหางตัดเมื่อหุบหาง หรือหางเว้าเกิดจากขนหางคู่กลางสั้นกว่าขนหางเส้นนอก </p>
					<p>ทั้งนี้ควรระลึกไว้เสมอว่าลักษณะของปลายหางจะผันแปรไปตามอิริยาบถของเหยี่ยวว่าแผ่หรือหุบหาง กล่าวคือ หางปลายตัดจะกลายเป็นหางปลายมน คล้ายพัดจีน เมื่อเหยี่ยวแผ่หาง เช่น <a href="#birdsPage" data-id="44">นกอินทรีเล็ก</a> หรือ <a href="#birdsPage" data-id="7">เหยี่ยวดำ</a> มีหางเว้าคล้ายหางปลา เมื่อแผ่หางจะกลายเป็นหางปลายตัด ดังนั้นเพื่อไม่ให้สับสน ควรประเมินรูปร่างของหางเมื่อเหยี่ยวหุบหางเท่านั้น</p>
					<h4>ขนาด</h4>
					<p>ขนาดของเหยี่ยวช่วยในการจัดกลุ่มหรือสกุลเพื่อการจำแนกได้ระดับหนึ่ง แต่ควรอยู่บนพื้นฐานของการเปรียบเทียบกับวัตถุ เช่น กิ่งไม้ ใบไม้ หรือนกชนิดอื่นๆ ที่สามารถระบุขนาดที่แน่นอนเนื่องจากคุ้นเคยมาก่อน เช่น อีกา นกพิราบ นกเอี้ยงหรือนกกระจอก การประเมินขนาดในธรรมชาติเมื่อพบเหยี่ยวตัวเดียวบนท้องฟ้า ยิ่งในระยะไกล ยิ่งยากที่จะประเมินขนาดได้อย่างแม่นยำ ส่วนหนึ่งเนื่องจากปัญหาการหลอกตาด้วยการใช้กล้องสองตา (Optical size illusion) นอกจากนี้เหยี่ยวและนกอินทรีส่วนใหญ่มีความแตกต่างของขนาดระหว่างเพศซึ่งตัวเมีย ตัวเต็มวัยมีขนาดใหญ่และหนักกว่าตัวผู้ ตัวเต็มวัย (Reversed sexual dimorphism) พบได้ชัดเจนในเหยี่ยวหลายสกุลและสามารถบอกความแตกต่างได้ ถ้าเหยี่ยวทั้งสองเพศยืนเคียงข้างกัน ได้แก่ เหยี่ยวนกเขาและเหยี่ยวนกกระจอก (โดยเฉพาะชนิดที่ล่านกเป็นอาหารหลัก เช่น <a href="#birdsPage" data-id="30">เหยี่ยวนกกระจอกเล็ก</a> <a href="#birdsPage" data-id="32">เหยี่ยวนกเขาท้องขาว</a> เป็นต้น) เหยี่ยวทุ่ง นกอินทรีแท้และเหยี่ยวปีกแหลม โดยเฉพาะชนิดอพยพ ดังนั้นพึงระลึกถึงหลักการข้อนี้เสมอ ขณะจำแนกชนิด</p>

					<h3>ขณะเกาะ (at perch)</h3>
					<h4>ความยาวของปลายปีก</h4>
					<p>เมื่อพบเหยี่ยวเกาะคอน ปลายปีกจะรวบเข้าหากันยื่นยาวไปตามแนวของขนหาง ให้สังเกตความยาวของปลายปีกเมื่อเปรียบเทียบกับปลายหาง ว่ายื่นยาวมาปิดคลุมบนหางเท่าใด เช่น ปลายปีกยาวเพียงครึ่งหนึ่งของความยาวหาง ยาวจรดปลายหาง หรือยาวเกินกว่าปลายหาง ความยาวของปลายปีกเป็นจุดแยกที่สำคัญมากอย่างหนึ่ง เมื่อพบเหยี่ยวเกาะคอนหรือยืนบนพื้นดิน เนื่องจากปีกเป็นโครงสร้างทางกายวิภาคที่มีความสัมพันธ์กับปัจจัยต่อไปนี้</p>
					<p><strong>รูปแบบการบิน</strong> เหยี่ยวหรือนกล่าเหยื่อที่อาศัยการบินร่อนมวลอากาศร้อน และมีขนาดใหญ่น้ำหนักตัวมาก (เมื่อเทียบกับเหยี่ยวสกุลอื่น) จำเป็นต้องมีพื้นที่ผิวของปีกกว้าง เพื่อรองรับการดันขึ้นจากมวลอากาศร้อนให้พยุงตัวเหยี่ยวร่อนอยู่ได้นานโดยไม่ต้องเสียพลังงานในการกระพือปีกตลอดเวลา เหยี่ยวกลุ่มนี้จะมีปีกค่อนข้างยาว เช่น นกอินทรีขนาดใหญ่ อีแร้งหรือเหยี่ยวใหญ่ โดยปลายปีกยื่นยาวเกือบจรดปลายหาง แต่เหยี่ยวที่บินอพยพด้วยการกระพือปีกต่อเนื่องได้ จะมีพื้นที่ผิวของปีกกว้างและน้ำหนักตัวน้อย เช่น เหยี่ยวปีกแหลม จะมีปีกยาวมาก ปลายปีกยาวจรดปลายหางหรือยาวเกินกว่าปลายหาง</p>
					<p><strong>ลักษณะภูมิประเทศของถิ่นอาศัยและวิธีการล่าเหยื่อ</strong> เหยี่ยวที่เลือกอาศัยในสภาพพื้นที่รกชัฎ เช่น ป่าดิบ และต้องอาศัยความคล่องตัวในการไล่ล่าเหยื่อด้วยความรวดเร็วในพื้นที่จำกัดและมีสิ่งกีดขวาง เช่น เถาวัลย์ ใบไม้หรือกิ่งไม้ ตลอดเวลา ทำให้เหยี่ยวต้องเปลี่ยนทิศทางการบินอย่างรวดเร็วฉับไว เพื่อหลีกเลี่ยงการเฉี่ยวชนสิ่งกีดขวางดังกล่าวจนอาจบาดเจ็บได้ เหยี่ยวในกลุ่มนี้จะมีปีกสั้นและปลายปีกมน (เนื่องจากขนปลายปีกมีความยาวใกล้เคียงกัน) พบในเหยี่ยวนกกระจอก เหยี่ยวนกเขา เหยี่ยวดงและเหยี่ยวปีกแหลมขนาดเล็ก ปลายปีกจะยื่นยาวเพียงครึ่งหนึ่งของความยาวหาง เช่น เหยี่ยวนกกระจอก เหยี่ยวนกเขา เหยี่ยวดง และเหยี่ยวแมลงปอ หรือเพียงหนึ่งในสามของความยาวหาง เช่น <a href="#birdsPage" data-id="50">เหยี่ยวเล็กตะโพกขาว</a></p>
					<p><strong>ระยะทางในการบินอพยพย้ายถิ่น</strong> ภายในเหยี่ยวอพยพสกุลเดียวกัน ชนิดที่ต้องเดินทางอพยพในระยะทางไกลกว่า จะมีปีกยาวกว่าชนิดที่อพยพในระยะสั้นหรือชนิดประจำถิ่นที่ไม่อพยพย้ายถิ่น เช่น <a href="#birdsPage" data-id="28">เหยี่ยวนกเขาพันธุ์จีน</a> มีปีกยาวกว่า <a href="#birdsPage" data-id="29">เหยี่ยวนกเขาพันธุ์ญี่ปุ่น</a> และ <a href="#birdsPage" data-id="30">เหยี่ยวนกกระจอกเล็ก</a> เมื่อเทียบกับปลายหาง เนื่องจากระยะทางอพยพระหว่างถิ่นผสมพันธุ์และถิ่นอาศัยในฤดูหนาวไกลกว่า</p>
					<h4>ขนคลุมแข้ง</h4>
					<p>เหยี่ยวส่วนใหญ่มีแข้งเปลือย หรือมีขนคลุมแข้งเพียงไม่เกินครึ่งหนึ่งของส่วนบนของแข้ง เช่น <a href="#birdsPage" data-id="18">อีแร้งดำหิมาลัย</a> แต่มีนกล่าเหยื่อในประเทศไทย 3 สกุลเท่านั้นที่มีขนคลุมแข้งอย่างสมบูรณ์ (Feathered tarsi) ได้แก่ เหยี่ยวดง นกอินทรีแท้ขนาดใหญ่และนกอินทรีแท้ขนาดกลาง ระหว่างเหยี่ยวดงและนกอินทรีแท้ ลักษณะของขนคลุมหน้าแข้งต่างกันโดยสิ้นเชิง ในเหยี่ยวดงมีขนคลุมแข้งสั้นๆ ยึดติดกันแน่นเป็นแผ่นแนบไปกับแข้ง คล้ายสวมถุงเท้ารัดรูป แต่นกอินทรีมีขนคลุมแข้งยาว ฟูพองมากขึ้นจากข้อเท้าถึงโคนขา คล้ายสวมกางเกงขี่ม้า</p>
					<h4>หงอนบนกระหม่อม</h4>
					<p>หงอนบนกระหม่อมเป็นจุดแยกที่โดดเด่นขณะเกาะคอนของเหยี่ยว ช่วยยืนยันการจำแนกสกุลและชนิดของเหยี่ยวได้ดี เนื่องจากในประเทศไทยมีเหยี่ยวน้อยกลุ่มที่มีหงอน ได้แก่ <br/>
					1. เหยี่ยวกิ้งก่า 2 ชนิด คือ <a href="#birdsPage" data-id="2">เหยี่ยวกิ้งก่าสีน้ำตาล</a> และ <a href="#birdsPage" data-id="3">เหยี่ยวกิ้งก่าสีดำ</a> <br/>
					2. เหยี่ยวดง 3 ชนิด คือ <a href="#birdsPage" data-id="47">เหยี่ยวภูเขา</a> <a href="#birdsPage" data-id="48">เหยี่ยวดำท้องขาว</a> และ <a href="#birdsPage" data-id="49">เหยี่ยวหงอนสีน้ำตาลท้องขาว</a><br/>
					3. <a href="#birdsPage" data-id="20">เหยี่ยวรุ้ง</a> มีหงอนสั้น จะพบก็ต่อเมื่อเหยี่ยวตื่นเต้นและฟูขนหงอนขึ้นมา<br/>
					4. <a href="#birdsPage" data-id="26">เหยี่ยวนกเขาหงอน</a> มีหงอนสั้นมาก จะสังเกตพบจากมุมด้านข้างเพราะมีหงอนเป็นเส้นเล็กหรอมแหรม<br/>
					5. <a href="#birdsPage" data-id="45">เหยี่ยวท้องแดง</a><br/>
					6. <a href="#birdsPage" data-id="5">เหยี่ยวค้างคาว</a></p>
					<h4>รูปร่างของรูจมูก</h4>
					<p>รูปร่างของรูจมูก เป็นจุดแยกสำคัญ แม้อาจจะมีโอกาสใช้ประโยชน์ไม่มากนักในภาคสนาม เนื่องจากมักพบเหยี่ยวหรือนกอินทรีในระยะไกลเกินกว่ากำลังขยายของกล้องสองตาหรือกล้องสโคปที่จะสังเกตรูจมูกได้ชัดเจน อย่างไรก็ตาม รูปร่างของรูจมูกมีความสำคัญอย่างมากสำหรับการจำแนกชนิดของนกอินทรีแท้ขนาดใหญ่ ที่มีความหลากหลายของชุดขนระหว่างอายุ และชุดขนเหล่านี้เมื่อเก่าทรุดโทรม ทำให้ชุดขนนั้นคล้ายคลึงและก่อให้เกิดความสับสนทั้งภายในชนิดเดียวกันแต่อายุต่างกัน และระหว่างชนิดด้วยซ้ำ เช่น ความคล้ายคลึงกันระหว่าง นกอินทรีสีน้ำตาล ชุดขนสีจางและ <a href="#birdsPage" data-id="40">นกอินทรีปีกลาย</a> ชุดขนสีทอง หรือ <a href="#birdsPage" data-id="40">นกอินทรีปีกลาย</a> วัยรุ่นและ <a href="#birdsPage" data-id="41">นกอินทรีทุ่งหญ้าสเต็ป</a> หรือ <a href="#birdsPage" data-id="4">เหยี่ยวผึ้ง</a> ชนิดย่อยประจำถิ่นในภาคใต้ที่เลียนแบบชุดขนของเหยี่ยวชนิดอื่นที่ดุร้าย มีพละกำลังมากกว่า (Aggression mimicry) คือ เหยี่ยวดง จะมีหงอนและชุดขนของลำตัวและลักษณะใต้ปีกคล้าย <a href="#birdsPage" data-id="48">เหยี่ยวดำท้องขาว</a> หรือ <a href="#birdsPage" data-id="49">เหยี่ยวหงอนสีน้ำตาลท้องขาว</a> </p>
					<p>ในบรรดานกอินทรีแท้ขนาดใหญ่ สกุล <i>Aquila</i> และ <i>Clanga</i> <a href="#birdsPage" data-id="40">นกอินทรีปีกลาย</a> มีรูจมูกกลม     แต่ <a href="#birdsPage" data-id="41">นกอินทรีทุ่งหญ้าสเต็ป</a> และ <a href="#birdsPage" data-id="42">นกอินทรีหัวไหล่ขาว</a> มีรูจมูกรี รูปไข่ และเหยี่ยวผึ้งมีรูจมูกรีและแคบเรียวเป็นร่อง แต่เหยี่ยวดงมีรูจมูกกลม</p>

					<p><strong>โดยสรุป</strong> ถ้าพบเหยี่ยวขณะเกาะ มีหงอน ปีกสั้นเพียงครึ่งหนึ่งของความยาวหางและมีขนคลุมแข้ง คล้ายสวมถุงเท้า (โดยไม่จำเป็นต้องพิจารณาลักษณะของชุดขนหรือพื้นที่การแพร่กระจายพันธุ์) น่าจะเป็นเหยี่ยวดง 1 ใน 3 ชนิด ได้แก่ <a href="#birdsPage" data-id="47">เหยี่ยวภูเขา</a> <a href="#birdsPage" data-id="48">เหยี่ยวดำท้องขาว</a> หรือ <a href="#birdsPage" data-id="49">เหยี่ยวหงอนสีน้ำตาลท้องขาว</a> เพราะ <a href="#birdsPage" data-id="46">เหยี่ยวต่างสี</a> ซึ่งเป็นเหยี่ยวดงเช่นกัน แต่ชนิดย่อยในประเทศไทยไม่มีหงอน ต่อมาให้สังเกตสีสันและลวดลายของชุดขนของเหยี่ยวเพื่อจำแนกชนิดต่อไป หรือถ้าพบเหยี่ยวที่มีแข้งเปลือย ไม่มีขนคลุมถึงข้อตีน (จุดแยกนี้สามารถตัดเหยี่ยวดงได้ทุกชนิด) และมีปีกสั้นเพียงครึ่งหนึ่งของความยาวหางหรือสั้นกว่า น่าจะเป็นเหยี่ยวนกเขาหรือเหยี่ยวนกกระจอกในสกุล <i>Accipiter</i> หรือเหยี่ยวปีกแหลมขนาดเล็ก เช่น <a href="#birdsPage" data-id="50">เหยี่ยวเล็กตะโพกขาว</a> หรือเหยี่ยวแมลงปอ</p>
				</div>
			</div>
			
			<div class="left-menu" data-role="panel" id="menupanel1" data-position="left" data-theme="a" data-display="push" data-position-fixed="true">
			</div>
		
		</div>
		
		<div data-role="page" id="silhouettePage">
			<div data-role="header" data-position="fixed">
				<a data-iconpos="notext" href="#menupanel2" data-role="button" data-icon="flat-menu"></a>	
				<h2>Thai Raptor Guide</h2>
			</div>
			<div role="main" class="ui-content">
				<h2 class="ui-bar ui-bar-f">เงาร่างขณะบิน (Flight silhouette)</h2>
				<div class="content-page ui-body ui-body-f ui-corner-all">
					<img src="img/silhouette/flight-silhouette.jpg" />
				</div>
			</div>
			
			<div class="left-menu" data-role="panel" id="menupanel2" data-position="left" data-theme="a" data-display="push" data-position-fixed="true">
			</div>
		
		</div>
<!--		
		<div data-role="page" id="statisticsPage">
			<div data-role="header" data-position="fixed">
				<a data-iconpos="notext" href="#menupanel3" data-role="button" data-icon="flat-menu"></a>	
				<h2>Thai Raptor Guide</h2>
		</div>
			<div role="main" class="ui-content">
				<h2 class="ui-bar ui-bar-f">Statistics</h2>
				<div class="ui-body ui-body-f ui-corner-all">
					[Todo: content]
				</div>
			</div>
			
			<div class="left-menu" data-role="panel" id="menupanel3" data-position="left" data-theme="a" data-display="push" data-position-fixed="true">
			</div>
		
		</div>
-->		
		<div data-role="page" id="infoGraphicsPage">
			<div data-role="header" data-position="fixed">
				<a data-iconpos="notext" href="#menupanel4" data-role="button" data-icon="flat-menu"></a>	
				<h2>Thai Raptor Guide</h2>
			</div>
			<div role="main" class="ui-content">
				<h2 class="ui-bar ui-bar-f">Infographics</h2>
				<div class="content-page ui-body ui-body-f ui-corner-all">
					<div class="gallery-list">
						<div>
							<a href="img/infographics/radar-hill-2008.jpg" data-w="1000" data-h="707" title="Radar Hill Autumn Count, 2008 การสำรวจจำนวนเหยี่ยวอพยพในฤดูอพยพต้นหนาว ณ เขาเรดาร์ ต.ไชยราช อ.บางสะพานน้อย จ.ประจวบคีรีขันธ์"><img src="img/infographics/radar-hill-2008.jpg" />
							</a>
							<p><strong>Radar Hill Autumn Count, 2008</strong><br />
								การสำรวจจำนวนเหยี่ยวอพยพในฤดูอพยพต้นหนาว ณ เขาเรดาร์ ต.ไชยราช อ.บางสะพานน้อย จ.ประจวบคีรีขันธ์</p>
						</div>
						<div>
							<a href="img/infographics/black-kite-count-2014-2.jpg" data-w="1000" data-h="707" title="Black-eared Kite Count, 2014 สำรวจประชากรของเหยี่ยวหูดำ/เหยี่ยวดำใหญ่ ณ แหล่งพักนอนเวลากลางคืนในประเทศไทย พุทธศักราช 2557"><img src="img/infographics/black-kite-count-2014-2.jpg" />
							</a>
							<p><strong>Black-eared Kite Count, 2014</strong><br />
								สำรวจประชากรของเหยี่ยวหูดำ/เหยี่ยวดำใหญ่ ณ แหล่งพักนอนเวลากลางคืนในประเทศไทย พุทธศักราช 2557</p>
						</div>
						<div>
							<a href="img/infographics/jerdon-s-baza-2.jpg" data-w="1000" data-h="707" title="จำนวนของเหยี่ยวกิ้งก่าสีน้ำตาลอพยพผ่านภาคใต้ ณ เขาเรดาร์และเขาดินสอ ในฤดูกาลอพยพต้นหนาว พุทธศักราช 2548 – 2557"><img src="img/infographics/jerdon-s-baza-2.jpg" />
							</a>
							<p>จำนวนของเหยี่ยวกิ้งก่าสีน้ำตาลอพยพผ่านภาคใต้ ณ เขาเรดาร์และเขาดินสอ ในฤดูกาลอพยพต้นหนาว พุทธศักราช 2548 – 2557</p>
						</div>
					</div>
				</div>
			</div>
			
			<div class="left-menu" data-role="panel" id="menupanel4" data-position="left" data-theme="a" data-display="push" data-position-fixed="true">
			</div>
		
		</div>
		
		<div data-role="page" id="cartoonsPage">
			<div data-role="header" data-position="fixed">
				<a data-iconpos="notext" href="#menupanel5" data-role="button" data-icon="flat-menu"></a>	
				<h2>Thai Raptor Guide</h2>
			</div>
			<div role="main" class="ui-content">
				<h2 class="ui-bar ui-bar-f">Raptor Toons</h2>
				<div class="content-page ui-body ui-body-f ui-corner-all">
					<p>Major Migratory Species of Raptors in Thailand and South-East Asia</p>
					<p>เหยี่ยวอพยพ 6 ชนิดหลักในประเทศไทยและภูมิภาคเอเชียตะวันออกเฉียงใต้/อุษาคเนย์</p>
					<div class="gallery-list ui-grid-a">
						<div class="ui-block-a"><a href="img/cartoons/black-baza.jpg" data-w="1275" data-h="960" title="Black Baza"><img src="img/cartoons/black-baza.jpg" /></a></div>
						<div class="ui-block-b"><a href="img/cartoons/ohb-2.jpg" data-w="792" data-h="834" title="Oriental Honey-buzzard"><img src="img/cartoons/ohb-2.jpg" /></a></div>
						<div class="ui-block-a"><a href="img/cartoons/shikra-2.jpg" data-w="1091" data-h="932" title="Shikra"><img src="img/cartoons/shikra-2.jpg" /></a></div>
						<div class="ui-block-b"><a href="img/cartoons/chinese-goshawk.jpg" data-w="1066" data-h="930" title="Chinese Sparrowhawk"><img src="img/cartoons/chinese-goshawk.jpg" /></a></div>
						<div class="ui-block-a"><a href="img/cartoons/japanese-sparrowhawk.jpg" data-w="1330" data-h="892" title="Japanese Sparrowhawk"><img src="img/cartoons/japanese-sparrowhawk.jpg" /></a></div>
						<div class="ui-block-b"><a href="img/cartoons/grey-faced-buzzard.jpg" data-w="918" data-h="902" title="Grey-faced Buzzard"><img src="img/cartoons/grey-faced-buzzard.jpg" /></a></div>
						<div class="ui-block"><a href="img/cartoons/soaring-on-thermals.jpg" data-w="2048" data-h="1603" title="Soaring on thermals"><img src="img/cartoons/soaring-on-thermals.jpg" /></a></div>
					</div>
					<p>© Maythira Kasemsant, Nature Toon การ์ตูนสื่อความหมายธรรมชาติ </p>
					<p><a href="https://www.facebook.com/naturetoon" target="_blank">www.facebook.com/naturetoon</a></p>
				</div>
			</div>
			
			<div class="left-menu" data-role="panel" id="menupanel5" data-position="left" data-theme="a" data-display="push" data-position-fixed="true">
			</div>
		
		</div>
<!--		
		<div data-role="page" id="slideshowPage">
			<div data-role="header" data-position="fixed">
				<a data-iconpos="notext" href="#menupanel6" data-role="button" data-icon="flat-menu"></a>	
				<h2>Thai Raptor Guide</h2>
			</div>
			<div role="main" class="ui-content">
				[todo: slideshow]
			</div>
			
			<div class="left-menu" data-role="panel" id="menupanel6" data-position="left" data-theme="a" data-display="push" data-position-fixed="true">
			</div>
		
		</div>
-->		
		<div data-role="page" id="contributorsPage">
			<div data-role="header" data-position="fixed">
				<a data-iconpos="notext" href="#menupanel7" data-role="button" data-icon="flat-menu"></a>	
				<h2>Thai Raptor Guide</h2>
			</div>
			<div role="main" class="ui-content">
				<h2 class="ui-bar ui-bar-f">Contributors</h2>
				<div class="ui-body ui-body-f ui-corner-all">
					<h3>Thai Raptor Group members and volunteers</h3>
					<p>
						Bhud Lakarin, 
						Chatuphon Sawasdee, 
						Chaiwat Wongchai, 
						Chaiyan Kasorndorkbua, 
						Chirdphong Termtanon, 
						Chultawat Bhowattanadilok, 
						Hathairat Sawasdee, 
						Jessada Sawasdee, 
						Kamthon Jansuwannasorn, 
						Kridsanasak Singkham, 
						Mark Mallaleau, 
						Maythira Kasemsant, 
						Nuttawat Wiratchakoun, 
						Dr.Pattarapong Jakthong, 
						Peerasit Tantavanij, 
						P. Nikamanon, 
						Praphin Buasong, 
						Saranya Sombatanantakorn</p>

					<h3>Photo Credits</h3>
					<p>
						Chaiyan Kasorndorkbua, 
						Chumpol Phoungsook, 
						Kamron Petprayoon, 
						Nattapol Kirdchuchuen,  
						Praphin Buasong, 
						Prapoj Rukruenreang,  
						Wattanachai Rodnirung, 
						Wiroj Onganunkun, 
						Worawat Muthuwan
					</p>
				</div>
			</div>
			
			<div class="left-menu" data-role="panel" id="menupanel7" data-position="left" data-theme="a" data-display="push" data-position-fixed="true">
			</div>
		
		</div>

		<div data-role="page" id="helpRaptorsPage">
			<div data-role="header" data-position="fixed">
				<a data-iconpos="notext" href="#menupanel8" data-role="button" data-icon="flat-menu"></a>	
				<h2>Thai Raptor Guide</h2>
			</div>
			<div role="main" class="ui-content">
				<h2 class="ui-bar ui-bar-f">Help Raptors</h2>
				<div class="content-page ui-body ui-body-f ui-corner-all">
					<p>นกนักล่าหรือนกล่าเหยื่อ ประกอบด้วย<strong>เหยี่ยว นกอินทรี อีแร้ง นกเค้าและนกแสก</strong> เป็นสัตว์ป่าคุ้มครองในพระราชบัญญัติสงวนและคุ้มครองสัตว์ป่าพุทธศักราช 2535 การดักจับเพื่อขายหรือเลี้ยง ทำร้ายให้บาดเจ็บหรือตายเป็นการกระทำผิดกฎหมาย และส่งผลต่อประชากรในธรรมชาติ อาจทำให้ระบบนิเวศเสียสมดุล อย่างไรก็ตามจากทัศนคติทางลบของบุคคลต่อนกนักล่าบางชนิด ที่ล่าสัตว์อื่นเป็นอาหาร หรือค่านิยมผิดๆ ที่จับเหยี่ยวมาเลี้ยงหรือฝึกอย่างผิดกฏหมาย กลายเป็นการสนับสนุนวงการค้าสัตว์ป่า ทำให้นกนักล่าตกเป็นเป็นเหยื่อของมนุษย์ บาดเจ็บจากการยิง ติดกับดัก หรือดักจับมาเลี้ยงหรือขาย นกบางชนิด เช่น อีแร้ง ด้วยค่านิยมผิดๆ ที่เป็นสัตว์กินซาก ทำให้ถูกมองว่าเป็นตัวนำโชคไม่ดี เพราะพบเห็นเมื่อใดก็พบเห็นความตาย ทั้งที่อีแร้งมีคุณประโยชน์ต่อระบบนิเวศ ช่วยกำจัดซากสัตว์ให้หมดไปอย่างรวดเร็ว ไม่เป็นแหล่งเพาะพันธุ์เชื้อโรคที่อาจก่อให้เกิดโรคระบาดในสัตว์เลี้ยงได้ </p>
					<p>นกนักล่าบางชนิดเป็นนกอพยพ ขณะเดินทางย้ายถิ่นมีอุปสรรคมากมาย อาจหมดแรง เพราะขาดอาหาร ชนกระจกหรือชนสิ่งกีดขวาง หรือลูกนกตกจากรัง กำพร้าพ่อและแม่ เมื่อได้รับการช่วยเหลือฟื้นฟูด้วยสัตวแพทย์ผู้เชี่ยวชาญ จะสามารถกลับคืนสู่ธรรมชาติได้.</p>
					
					<div class="gallery-list help-raptor-list ui-grid-b">
						<div class="ui-block-a"><div class="thumb-wrapper"><a href="img/helpraptors/hr01.jpg" data-w="600" data-h="450" title="เหยี่ยวเคสเตรลโดนสุนัขกัด"><img src="img/helpraptors/hr01.jpg" /></a></div></div>
						<div class="ui-block-b"><div class="thumb-wrapper"><a href="img/helpraptors/hr02.jpg" data-w="640" data-h="480" title="นกเค้าเหยี่ยวบินชนตึก"><img src="img/helpraptors/hr02.jpg" /></a></div></div>
						<div class="ui-block-c"><div class="thumb-wrapper"><a href="img/helpraptors/hr03.jpg" data-w="1000" data-h="1333" title="ลูกนกเค้าโมงกำพร้า"><img src="img/helpraptors/hr03.jpg" /></a></div></div>
						<div class="ui-block-a"><div class="thumb-wrapper"><a href="img/helpraptors/hr04.jpg" data-w="960" data-h="720" title="ลูกเหยี่ยวขาวเป็นโรคกระดูกอ่อนเพราะภาวะทุโภชนาการจากการเลี้ยง"><img src="img/helpraptors/hr04.jpg" /></a></div></div>
						<div class="ui-block-b"><div class="thumb-wrapper"><a href="img/helpraptors/hr05.jpg" data-w="480" data-h="481" title="เหยี่ยวปีกแดงมีกรงเล็บพิการจากโรคกระดูกอ่อน"><img src="img/helpraptors/hr05.jpg" /></a></div></div>
						<div class="ui-block-c"><div class="thumb-wrapper"><a href="img/helpraptors/hr06.jpg" data-w="640" data-h="480" title="นกแสกถูกยิง"><img src="img/helpraptors/hr06.jpg" /></a></div></div>
						<div class="ui-block-a"><div class="thumb-wrapper"><a href="img/helpraptors/hr07.jpg" data-w="1000" data-h="750" title="นกแสกพักฟื้นในกล่องออกซิเจนหลังการผ่าตัด"><img src="img/helpraptors/hr07.jpg" /></a></div></div>
						<div class="ui-block-b"><div class="thumb-wrapper"><a href="img/helpraptors/hr08.jpg" data-w="1000" data-h="1333" title="นกเค้าใหญ่พันธุ์เนปาลขาหัก"><img src="img/helpraptors/hr08.jpg" /></a></div></div>
						<div class="ui-block-c"><div class="thumb-wrapper"><a href="img/helpraptors/hr09.jpg" data-w="1000" data-h="1333" title="วางยาสลบนกเค้าใหญ่พันธุ์เนปาลก่อนผ่าตัดแก้ไขกระดูกหัก"><img src="img/helpraptors/hr09.jpg" /></a></div></div>
						<div class="ui-block-a"><div class="thumb-wrapper"><a href="img/helpraptors/hr10.jpg" data-w="1000" data-h="1333" title="การผ่าตัดแก้ไขกระดูกหักของนกเค้าใหญ่พันธุ์เนปาล"><img src="img/helpraptors/hr10.jpg" /></a></div></div>
						<div class="ui-block-b"><div class="thumb-wrapper"><a href="img/helpraptors/hr11.jpg" data-w="800" data-h="534" title="อีแร้งสีน้ำตาลหิมาลัยรับสารน้ำและเกลือแร่ทางหลอดเลือด"><img src="img/helpraptors/hr11.jpg" /></a></div></div>
						<div class="ui-block-c"><div class="thumb-wrapper"><a href="img/helpraptors/hr12.jpg" data-w="640" data-h="845" title="ปล่อยนกออกคืนธรรมชาติ ที่จังหวัดประจวบคีรีขันธ์"><img src="img/helpraptors/hr12.jpg" /></a></div></div>
						<div class="ui-block-a"><div class="thumb-wrapper"><a href="img/helpraptors/hr13.jpg" data-w="800" data-h="479" title="อีแร้งสีน้ำตาลหิมาลัยกลับสู่ธรรมชาติที่เขตรักษาพันธุ์สัตว์ป่าห้วยขาแข้ง"><img src="img/helpraptors/hr13.jpg" /></a></div></div>
						<div class="ui-block-b"><div class="thumb-wrapper"><a href="img/helpraptors/hr14.jpg" data-w="960" data-h="720" title="คลินิกนกล่าเหยื่อ ม.เกษตรศาสตร์ กำแพงแสน"><img src="img/helpraptors/hr14.jpg" /></a></div></div>
						<div class="ui-block-c"><div class="thumb-wrapper"><a href="img/helpraptors/hr16.jpg" data-w="960" data-h="540" title="กิจกรรมสร้างบ้านให้นักล่ายามค่ำคืน (นกเค้า) โดยนิสิตสัตวแพทย์อาสาอาเซียนจากต่างประเทศ"><img src="img/helpraptors/hr16.jpg" /></a></div></div>
					</div>
					
					<p>คณะสัตวแพทยศาสตร์ มหาวิทยาลัยเกษตรศาสตร์ และสำนักอนุรักษ์สัตว์ป่า กรมอุทยานแห่งชาติ สัตว์ป่าและพันธุ์พืช จัดทำโครงการฟื้นฟูนกล่าเหยื่อเพื่อปล่อยคืนสู่ธรรมชาติ (Raptor rehabilitation for release project) โดยหน่วยฟื้นฟูนกล่าเหยื่อเพื่อปล่อยคืนธรรมชาติ โรงพยาบาลสัตว์ มหาวิทยาลัยเกษตรศาสตร์ กำแพงแสน (Kasetsart University Raptor Rehabilitation Unit: KURU) เพื่อช่วยเหลือบำบัดรักษานกนักล่าที่บาดเจ็บ หรือเจ็บป่วย ให้มีสุขภาพแข็งแรง แล้วปล่อยคืนธรรมชาติในถิ่นอาศัยและฤดูกาลที่เหมาะสมต่อชนิดพันธุ์ นกที่รักษาแล้วรอดชีวิตแต่พิการ จะเลี้ยงไว้เป็น “ตำรามีชีวิต” สอนนิสิตสัตวแพทย์ด้านเวชศาสตร์สัตว์ป่า และเป็นตัวอย่างให้ความรู้ต่อสาธารณะ</p>
					<p>การช่วยเหลือฟื้นฟูนกนักล่าบาดเจ็บหรือเจ็บป่วยเหล่านี้ ไม่คิดค่าใช้จ่ายหรือค่าวินิจฉัยและรักษาโรคจากประชาชนผู้นำส่งแต่ประการใด เนื่องจากนกนักล่าเป็นสัตว์ป่าคุ้มครองตามกฎหมาย หากใช้เงินบริจาคของประชาชนในกองทุน “กองทุนวิจัยนกนักล่าเพื่อการอนุรักษ์ ม.เกษตรศาสตร์” สนับสนุนการดำเนินงานของโครงการฟื้นฟูนกล่าเหยื่อฯ รวมทั้งได้รับการสนับสนุนด้านต่างๆ จากองค์กรเอกชน อาทิ เครือเบทาโกร บริษัท เน็ทวัน เน็ทเวิร์คโซลูชั่น จำกัด</p>
					<p>คณะทำงานในโครงการฟื้นฟูนกล่าเหยื่อเพื่อปล่อยคืนธรรมชาติ</p>
					<ol>
						<li>นายสัตวแพทย์ ดร.ไชยยันต์ เกษรดอกบัว หัวหน้าหน่วยฟื้นฟูนกล่าเหยื่อเพื่อปล่อยคืนธรรมชาติ </li>
						<li>นายสัตวแพทย์ ดร.พรชัย สัญฐิติเสรี</li>
						<li>นายประทีป โรจนดิลก สำนักอนุรักษ์สัตว์ป่า กรมอุทยานแห่งชาติ สัตว์ป่าและพันธุ์พืช</li>
						<li>นายสัตวแพทย์ภัทรพงศ์ จักรทอง สัตวแพทย์ประจำหน่วยฟื้นฟูนกล่าเหยื่อ</li>
						<li>นายไมตรี อ้นพรหม พนักงานดูแลสัตว์ วิทยาเขตกำแพงแสน</li>
						<li>นายพิภพ เจริญสรรพ์ พนักงานดูแลสัตว์ วิทยาเขตบางเขน</li>
					</ol>
					<p>ติดตามการดำเนินงานของหน่วยฟื้นฟูนกล่าเหยื่อฯ ที่ <a href="https://www.facebook.com/KasetsartUniversityRaptorUnit" target="_blank">www.facebook.com/KasetsartUniversityRaptorUnit</a></p>
					<p>ประชาชนผู้ประสงค์จะช่วยเหลือนกนักล่าบาดเจ็บ หรือเจ็บป่วยสามารถบริจาคด้วยการโอนเงินที่</p>
					<p>กองทุนวิจัยนกนักล่าเพื่อการอนุรักษ์ ม.เกษตรศาสตร์<br />
						Raptor Research Fund for Conservation (Raptor Fund)<br />
						ธนาคารกรุงศรีอยุธยา สาขามหาวิทยาลัยเกษตรศาสตร์<br />
						หมายเลขบัญชี #374-1-67289-9</p>
					<p>สอบถามขั้นตอน หรือกระบวนการช่วยเหลือนกบาดเจ็บเบื้องต้นที่ โทร. 086-3328117</p>
					<p>นำส่งนกนักล่าบาดเจ็บหรือเจ็บป่วยที่</p>
					<ul>
						<li>หน่วยฟื้นฟูนกล่าเหยื่อฯ โรงพยาบาลสัตว์ ม.เกษตรศาสตร์ บางเขน โทร.061-6077805</li>
						<li>คลินิกนกล่าเหยื่อ หน่วยฟื้นฟูนกล่าเหยื่อฯ โรงพยาบาลสัตว์ ม.เกษตรศาสตร์ กำแพงแสน โทร. 086-3328117</li>
						<li>คลินิกสัตว์ป่า ศูนย์ประสานงานการช่วยเหลือสัตว์ป่า กรมอุทยานแห่งชาติ สัตว์ป่าและพันธุ์พืช โทร.สายด่วน 1362</li>
						<li>สถานีเพาะเลี้ยงสัตว์ป่า เขตห้ามล่าสัตว์ป่าหรือสำนักบริหารพื้นที่อนุรักษ์ในจังหวัดต่างๆ เพื่อประสานการช่วยเหลือนกนักล่าบาดเจ็บในภูมิภาค</li>
					</ul>
				</div>
			</div>
			
			<div class="left-menu" data-role="panel" id="menupanel8" data-position="left" data-theme="a" data-display="push" data-position-fixed="true">
			</div>
		
		</div>

		<div data-role="page" id="booksPage">
			<div data-role="header" data-position="fixed">
				<a data-iconpos="notext" href="#menupanel9" data-role="button" data-icon="flat-menu"></a>	
				<h2>Thai Raptor Guide</h2>
			</div>
			<div role="main" class="ui-content">
				<h2 class="ui-bar ui-bar-f">Books</h2>
				<div class="content-page ui-body ui-body-f ui-corner-all">
					<div class="book-list">
						<div>
							<h3 class="ui-bar ui-bar-g">นกไทย นกเทศและนกนักล่า </h3>
							<div class="ui-grid-a">
								<div class="ui-block-a"><img src="img/books/nok.jpg" /></div>
								<div class="ui-block-b"><img src="img/books/nok-back.jpg" /></div>
							</div>
							<p>หนังสือนกไทย นกเทศและนกนักล่า รวบรวมบทความเผยแพร่เกี่ยวกับการดูนกในธรรมชาติมอบให้ผู้บริจาคให้ กองทุนวิจัยนกนักล่าเพื่อการอนุรักษ์ ม.เกษตรศาสตร์ จำนวน 500 บาท/เล่ม เพื่อสนับสนุนโครงการฟื้นฟูนกล่าเหยื่อเพื่อปล่อยคืนธรรมชาติ โดยโอนเงินเข้าบัญชี</p>
							<p>กองทุนวิจัยนกนักล่าเพื่อการอนุรักษ์ ม.เกษตรศาสตร์<br />
								Raptor Research Fund for Conservation (Raptor Fund)<br />
								ธนาคารกรุงศรีอยุธยา สาขา ม. เกษตรศาสตร์ <br />
								หมายเลขบัญชี #374-1-67289-9</p>
							<p>แล้วถ่ายภาพใบเพย์อิน และที่อยู่ไปรษณีย์ของผู้บริจาคมาที่ช่องข้อความของเพจหน่วยฟื้นฟูนกล่าเหยื่อฯ <a href="https://www.facebook.com/KasetsartUniversityRaptorUnit" target="_blank">www.facebook.com/KasetsartUniversityRaptorUnit</a></p>
						</div>
						<div>
							<h3 class="ui-bar ui-bar-g">คู่มือเหยี่ยวและนกอินทรี </h3>
							<div class="ui-grid-a">
								<div class="ui-block-a"><img src="img/books/raptor-front.jpg" /></div>
								<div class="ui-block-b"><img src="img/books/raptor-back.jpg" /></div>
							</div>
							<p>หนังสือคู่มือเหยี่ยวและนกอินทรี มีจำหน่ายที่ศูนย์หนังสือมหาวิทยาลัยเกษตรศาสตร์ หรือ สั่งซื้อทางไปรษณีย์ ราคา 800 บาท (ค่าส่งฟรี) โดยโอนเงินเข้าบัญชี</p>
							<p>ธนาคารทหารไทย # 069-2-07562-5 <br />
								สาขามหาวิทยาลัยเกษตรศาสตร์<br />
								ชื่อบัญชี ไชยยันต์ เกษรดอกบัว</p>
							<p>แล้วส่งภาพถ่ายใบเพย์อินพร้อมที่อยู่ไปรษณีย์ของผู้สั่งซื้อหนังสือมาที่ช่องข้อความของเพจกลุ่มศึกษาเหยี่ยวและนกอินทรี  <a href="https://www.facebook.com/ThaiRaptorGroup.TRG" target="_blank">www.facebook.com/ThaiRaptorGroup.TRG</a></p>
						</div>
					</div>
				</div>
			</div>
			
			<div class="left-menu" data-role="panel" id="menupanel9" data-position="left" data-theme="a" data-display="push" data-position-fixed="true">
			</div>
		
		</div>

		<div data-role="page" id="sightingsPage">
			<div data-role="header" data-position="fixed">
				<a data-iconpos="notext" href="#menupanel10" data-role="button" data-icon="flat-menu"></a>	
				<h2>Thai Raptor Guide</h2>
			</div>
			<div role="main" class="ui-content">
				<h2 class="ui-bar ui-bar-f">Sightings</h2>
				<div class="content-page ui-body ui-body-f ui-corner-all">
					<p>Report sightings of raptors in Thailand (species, date, locality, bahavior, number of birds, photograph if available) to <a href="mailto:raptor@BirdsofThailand.org">raptor@BirdsofThailand.org</a>. Notable sightings will be archived on Siam Avifauna <a href="http://www.BirdsofThailand.org" target="_blank">www.BirdsofThailand.org</a> for public access.</p>
				</div>
			</div>
			
			<div class="left-menu" data-role="panel" id="menupanel10" data-position="left" data-theme="a" data-display="push" data-position-fixed="true">
			</div>
		
		</div>
	
		<div data-role="page" id="aboutPage">
			<div data-role="header" data-position="fixed">
				<a data-iconpos="notext" href="#menupanel11" data-role="button" data-icon="flat-menu"></a>	
				<h2>Thai Raptor Guide</h2>
			</div>
			<div role="main" class="ui-content">
				<h2 class="ui-bar ui-bar-f">About (version 1.0.0)</h2>
				<div class="content-page ui-body ui-body-f ui-corner-all">
					<p><strong>กลุ่มศึกษาเหยี่ยวและนกอินทรีในประเทศไทย (Thai Raptor Group)</strong> เป็นหน่วยงานไม่แสวงหาผลกำไร ที่เกิดจากการรวมตัวของนักดูนกอาสาสมัคร สำรวจข้อมูลของนกนักล่าในธรรมชาติ เพื่อเผยแพร่สร้างความตระหนักและความเข้าใจที่ถูกต้องต่อนกนักล่าที่มีหน้ารักษาสมดุลของระบบนิเวศ ควบคุมจำนวนของสัตว์ต่างๆ มิให้มีประชากรล้นเกินจนอาจส่งผลกระทบต่อมนุษย์ และส่งเสริมการเข้าหาธรรมชาติด้วยการเรียนรู้เกี่ยวกับนกนักล่าในธรรมชาติผ่านทางกิจกรรมดูนกและนกนักล่า โดยไม่สนับสนุนการเลี้ยงนกนักล่าหรือนกในธรรมชาติซึ่งเป็นสัตว์ป่าคุ้มครองตามกฏหมาย</p>
					
					<p><strong>กองทุนวิจัยนกนักล่าเพื่อการอนุรักษ์ ม.เกษตรศาสตร์</strong><br />
					Raptor Research Fund for Conservation (Raptor Fund)<br />
					<br />
					ดูแลโดยคณะสัตวแพทยศาสตร์ มหาวิทยาลัยเกษตรศาสตร์<br />
					ที่ปรึกษา <br />
					1. คุณเกษม สนิทวงศ์ ณ อยุธยา<br />
					2. ศาสตราจารย์ นายสัตวแพทย์ ดร.อภินันท์ สุประเสริฐ คณบดีคณะสัตวแพทยศาสตร์<br />
					คณะกรรมการกองทุน :<br />
					1. นายสัตวแพทย์ ดร.ไชยยันต์ เกษรดอกบัว<br />
					2. นายสัตวแพทย์ ดร.อุคเดช บุญประกอบ<br />
					3. นายสัตวแพทย์ ดร.ชนินทร์ ติรวัฒนวานิช<br />
					<br />
					จุดประสงค์ของกองทุน สนับสนุนการวิจัยและการฟื้นฟูสุขภาพของนกนักล่า/นกล่าเหยื่อเพื่อปล่อยคืนธรรมชาติ โดยหน่วยวิจัยนกนักล่าและอายุรศาสตร์การอนุรักษ์ (Kasetsart Laboratory of Raptor research and Conservation Medicine) กลุ่มศึกษาเหยี่ยวและนกอินทรีในประเทศไทย และหน่วยฟื้นฟูนกล่าเหยื่อเพื่อปล่อยคืนธรรมชาติ โรงพยาบาลสัตว์ คณะสัตวแพทยศาสตร์ มหาวิทยาลัยเกษตรศาสตร์</p>
					<p>กองทุนวิจัยนกนักล่าเพื่อการอนุรักษ์ ม.เกษตรศาสตร์<br />
						Raptor Research Fund for Conservation (Raptor Fund)<br />
						ธนาคารกรุงศรีอยุธยา สาขา ม. เกษตรศาสตร์ <br />
						หมายเลขบัญชี #374-1-67289-9</p>
					
					<p>ฐานข้อมูลที่สำรวจนกนักล่า (เหยี่ยว นกอินทรีและอีแร้ง) ทั่วประเทศไทย รายละเอียดเพิ่มเติมที่ <a href="https://www.facebook.com/ThaiRaptorGroup.TRG" target="_blank">www.facebook.com/ThaiRaptorGroup.TRG</a> และ <a href="http://www.BirdsofThailand.org" target="_blank">www.BirdsofThailand.org</a></p>
					<p>กลุ่มศึกษาเหยี่ยวและนกอินทรีในประเทศไทยขอขอบคุณนักดูนก และนักนิยมธรรมชาติทุกคนที่ให้ความร่วมมือ ส่งรายงาน ข้อมูลและภาพถ่ายของนกนักล่าในประเทศไทย เพื่อรวบรวมในฐานข้อมูลเผยแพร่สู่สาธารณะ</p>
					<p>Text © Chaiyan Kasorndorkbua, DVM, PhD<br />
					Faculty of Veterinary Medicine, Kasetsart University <a href="mailto:trogon@gmail.com">trogon@gmail.com</a></p>
					<p>Design © P. Nikamanon &amp; Chaiyan Kasorndorkbua</p>
					<p>References</p>
					<ol>
						<li>คู่มือเหยี่ยวและนกอินทรี A Photographic Guide to the Raptors of Thailand, 2008. Text written by Dr.Chaiyan Kasorndorkbua.</li>
						<li>Jobling, James A.. 2010. The Helm Dictionary of Scientific Bird Names. Christofer Helm, London. 432 pages.</li>
						<li>Thai Raptor Group database.</li>
						<li>เว็บ Siam Avifauna ข้อมูลและภาพนกในประเทศไทย. <a href="http://www.BirdsofThailand.org" target="_blank">www.BirdsofThailand.org</a></li>
					</ol>
					<img src="img/steppe-blue.JPG">
				</div>
			</div>
			
			<div class="left-menu" data-role="panel" id="menupanel11" data-position="left" data-theme="a" data-display="push" data-position-fixed="true">
			</div>
		
		</div>		
		
		<!-- Root element of PhotoSwipe. Must have class pswp. -->
		<div class="pswp" tabindex="-1" role="dialog" aria-hidden="true" id="photogallery">

			<!-- Background of PhotoSwipe. 
				 It's a separate element as animating opacity is faster than rgba(). -->
			<div class="pswp__bg"></div>

			<!-- Slides wrapper with overflow:hidden. -->
			<div class="pswp__scroll-wrap">

				<!-- Container that holds slides. 
					PhotoSwipe keeps only 3 of them in the DOM to save memory.
					Don't modify these 3 pswp__item elements, data is added later on. -->
				<div class="pswp__container">
					<div class="pswp__item"></div>
					<div class="pswp__item"></div>
					<div class="pswp__item"></div>
				</div>

				<!-- Default (PhotoSwipeUI_Default) interface on top of sliding area. Can be changed. -->
				<div class="pswp__ui pswp__ui--hidden">

					<div class="pswp__top-bar">

						<!--  Controls are self-explanatory. Order can be changed. -->

						<div class="pswp__counter"></div>

						<button class="pswp__button pswp__button--close" title="Close (Esc)"></button>

						<button class="pswp__button pswp__button--share" title="Share"></button>

						<button class="pswp__button pswp__button--fs" title="Toggle fullscreen"></button>

						<button class="pswp__button pswp__button--zoom" title="Zoom in/out"></button>

						<!-- Preloader demo http://codepen.io/dimsemenov/pen/yyBWoR -->
						<!-- element will get class pswp__preloader--active when preloader is running -->
						<div class="pswp__preloader">
							<div class="pswp__preloader__icn">
							  <div class="pswp__preloader__cut">
								<div class="pswp__preloader__donut"></div>
							  </div>
							</div>
						</div>
					</div>

					<div class="pswp__share-modal pswp__share-modal--hidden pswp__single-tap">
						<div class="pswp__share-tooltip"></div> 
					</div>

					<button class="pswp__button pswp__button--arrow--left" title="Previous (arrow left)">
					</button>

					<button class="pswp__button pswp__button--arrow--right" title="Next (arrow right)">
					</button>

					<div class="pswp__caption">
						<div class="pswp__caption__center"></div>
					</div>

				</div>

			</div>

		</div>

<script id="species-li-tpl" type="text/x-handlebars-template">
    {{#.}}
	<li><a href="#birdsPage" data-id="{{this.id}}" data-transition="slide"><img src="img/thumb/{{this.id}}.jpg">
		<h2>{{this.thaiName}}</h2><p>{{this.commonName}} <i>{{this.sciName}}</i></p></a></li>
    {{/.}}
</script>
		
<script id="species-tpl" type="text/x-handlebars-template">
	<div>
		<div class="photo-container">
			<a href="#photogallery" class="view-photo" data-tid="{{id}}"><img src="img/thumb/{{id}}.jpg"></a>
		</div>
		<div class="species-name">
			<p class="thai-name">{{thaiName}}</p>
			<p class="common-name">{{commonName}}</p>
			<p class="sci-name">{{sciName}}</p>
		</div>
	</div>
	<div class="species-info ui-body ui-body-f ui-corner-all">
		{{#if otherName}}
			<div><strong>ชื่อท้องถิ่น:</strong> {{otherName}}</div>
		{{/if}}
		{{#if size}}
			<div><strong>Size:</strong> {{size}}</div>
		{{/if}}
		{{#if wingspan}}
			<div><strong>Wingspan:</strong> {{wingspan}}</div>
		{{/if}}
		{{#if prey}}
			<div><strong>Prey:</strong> {{prey}}</div>
		{{/if}}
		{{#if habitat}}
			<div><strong>Habitats:</strong> {{habitat}}</div>
		{{/if}}
		{{#if status}}
			<div><strong>Status:</strong> {{status}}</div>
		{{/if}}
		{{#if conservation}}
			<div><strong>Conservation:</strong> {{#renderConservation conservation}}{{/renderConservation}}</div>
		{{/if}}
		<div>{{{description}}}</div>
		<a href="#photogallery" class="view-photo" data-tid="{{id}}" data-role="button" data-theme="g">View Photos</a>
		{{#if botLink}}
		<a href="{{botLink}}" target="_blank">View in Birds of Thailand</a>
		{{/if}}
	</div>
</script>

<script id="photo-desc-tpl" type="text/x-handlebars-template">
	<p>{{description}}</p>
	<p class="copyright">&copy; {{copyright}}</p>
	<p class="website">{{website}}</p>
</script>

<script id="menu-tpl" type="text/x-handlebars-template">
	<ul data-role="listview">
		<li><a href="#browsePage" data-transition="slide">Species</a></li>
		<!--<li><a href="#searchPage" data-transition="slide">Search</a></li>-->
		<li><a href="#idBasicsPage" data-transition="slide">ID Basics</a></li>
		<li><a href="#silhouettePage" data-transition="slide">Silhouette</a></li>
		<!--<li><a href="#statisticsPage" data-transition="slide">Statistics</a></li>-->
		<li><a href="#infoGraphicsPage" data-transition="slide">Infographics</a></li>
		<li><a href="#cartoonsPage" data-transition="slide">Raptor Toons</a></li>
		<!--<li><a href="#slideshowPage" data-transition="slide">Slideshow</a></li>-->
		<li><a href="#contributorsPage" data-transition="slide">Contributors</a></li>
		<li><a href="#helpRaptorsPage" data-transition="slide">Help Raptors</a></li>
		<li><a href="#booksPage" data-transition="slide">Books</a></li>
		<li><a href="#sightingsPage" data-transition="slide">Sightings</a></li>
		<li><a href="#aboutPage" data-transition="slide">About</a></li>
	</ul>
</script>

        <!--<script src="cordova.js"></script>-->
		<script src="lib/jquery.min.js"></script>
		<script src="lib/jquery.mobile-1.4.5.min.js"></script>
		<script src="lib/photoswipe.min.js"></script>
		<script src="lib/photoswipe-ui-default.min.js"></script> 
		<script src="lib/handlebars.js"></script>
		<script src="js/storage/memory-store.js?2015.11.16.1"></script>
		<script src="js/BrowseView.js?2015.11.16.1"></script>
		<script src="js/SpeciesView.js?2015.11.16.1"></script>
		<script src="js/index.js?2015.11.16.1"></script>
        <script type="text/javascript">
            app.initialize();
        </script>
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-41323135-1', 'auto');
  ga('send', 'pageview');

</script>
    </body>
</html>

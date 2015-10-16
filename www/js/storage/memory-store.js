var MemoryStore = function(successCallback, errorCallback) {

	this.browseSpecies = function(callback) {
		var species = this.taxonomyDB;
		callLater(callback, species);
	}
	
    this.findSpeciesByName = function(searchKey, callback) {
        var species = this.taxonomyDB.filter(function(element) {
            var fullName = element.sciName + " " + element.commonName + " " + element.thaiName;
            return fullName.toLowerCase().indexOf(searchKey.toLowerCase()) > -1;
        });
        callLater(callback, species);
    }

    this.findSpeciesById = function(id, callback) {
        var species = this.taxonomyDB;
        var item = null;
        var l = species.length;
        for (var i=0; i < l; i++) {
            if (species[i].id === id) {
                item = species[i];
                break;
            }
        }
        callLater(callback, item);
    }
	
	this.findPhotosBySpeciesId = function(id, callback) {
		var photos = this.photoDB.filter(function(element) {
            return element.tid === id;
        });
        callLater(callback, photos);
	}
	
	this.findPhotoById = function(id, callback) {
		var photos = this.photoDB;
        var item = null;
        var l = photos.length;
        for (var i=0; i < l; i++) {
            if (photos[i].id === id) {
                item = photos[i];
                break;
            }
        }
        callLater(callback, item);
	}

    // Used to simulate async calls. This is done to provide a consistent interface with stores (like WebSqlStore)
    // that use async data access APIs
    var callLater = function(callback, data) {
        if (callback) {
            setTimeout(function() {
                callback(data);
            });
        }
    }

    this.taxonomyDB = [
//{"id": 1 , "thaiName": "เหยี่ยวออสเปร", "commonName": "Osprey", "sciName": "Pandion haliaetus ", "otherName": "Fish Hawk", "status":  1 , "conservation": "LC", "size": "55 - 63 cm", "wingspan": "1.27 - 1.74 m", "prey": "Small birds, frogs, rodents", "habitat": "ทุ่งนา ทุ่งหญ้า ทุ่งโล่งขณะล่าเหยื่อ ภูเขาหรือชายทะเลขณะอพยพผ่าน", "description": "เหยี่ยวปีกแตกขนาดกลาง หัวโต ลำตัวเพรียว ปีกยาว ค่อนข้างแคบ ขายาวแต่ไม่มีขนคลุมแข้ง หางยาวปลายมน ขณะบินจะร่อนไปมาอย่างช้าๆ เหนือทุ่งนาหรือ ทุ่งหญ้า สูงไม่เกินยอดตาลเพื่อล่าเหยื่อ ในเวลากลางคืนจะรวมฝูงกันเข้านอนในแหล่งพักนอนที่เป็นทุ่งหญ้าสูง หรือทุ่งนาในพื้นที่ชุ่มน้ำขนาดใหญ่ เช่น หนอง บึง โดยใช้น้ำหนักตัวกดทับบนหญ้าคาหรือหญ้าไซเป็นหลุมนอน ในแหล่งพักนอนกลางคืนพบตั้งแต่สิบตัวถึงหลายร้อยตัว ต่างจากเหยี่ยวและนกอินทรีส่วนใหญ่ที่จะเกาะคอนนอนบนต้นไม้"},
//{"id": 2 , "thaiName": "เหยี่ยวกิ้งก่าสีน้ำตาล", "commonName": "Jerdon’s Baza ", "sciName": "Aviceda jerdoni ", "otherName": "", "status":  3 , "conservation": "LC", "size": "", "wingspan": "", "prey": "", "habitat": "", "description": ""},
{"id":3, "thaiName": "เหยี่ยวกิ้งก่าสีดำ", "commonName": "Black Baza", "sciName": "Aviceda leuphotes ", "otherName": "", "status": "Partial migrant นกอพยพบางส่วน, Passage migrant นกอพยพผ่าน,  Breeding resident นกประจำถิ่นในฤดูผสมพันธุ์", "conservation": "LC", "size": "31 -33 cm", "wingspan": "0.64 - 0.74 m", "prey": "Caterpillars, grasshoppers, mantis, leaf insects, butterflies & moths, tree frogs, bats, small-sized birds", "habitat": "ป่าเต็งรัง ป่าเบญจพรรณในฤดูผสมพันธุ์ สวนสาธารณะ ป่าละเมาะ และป่าดิบขณะล่าเหยื่อ ภูเขาหรือชายทะเลขณะอพยพผ่าน", "description": "<p><strong>ID Features</strong> เหยี่ยวขนาดเล็ก ชุดขนสีขาวดำ มีหงอนยาว ปีกยาวคล้ายใบโพธิ์ (โป่งออกตรงกลางและเรียวแหลมที่ปลายปีก) หางสั้นและปลายหางมนเมื่อหุบหาง ขณะเกาะคอนให้สังเกตปีกยาวเลยปลายหางเล็กน้อย และแข้งสีเทาไม่มีขนคลุม  หนังคลุมจมูกและขาสีเทา จะงอยปากมีฟันเทียม (tomial tooth) หรือรอยหยักของขอบปากบน พบในเหยี่ยวปีกแหลมสกุล Falcon</p><p><strong>Adult male ตัวผู้</strong> ชุดขนสีดำสลับขาว ม่านตาสีน้ำตาลแกมแดง บนปีกมีปื้นสีน้ำตาลแดงที่ขนปลายปีกเส้นใน และขนกลางปีก ขนกลางปีกมีแถบสีขาวสลับสีน้ำตาลแดง เช่นเดียวกับขนโคนปีก และขนคลุมบนปีกของขนกลางปีกเส้นใน อกมีแถบหนาสีดำแซมด้วยแถบสีน้ำตาลแดง และท้องด้านข้างมีลายขวางสีน้ำตาลแดง 3 เส้น ส่วนลายขวางจางถัดลงมาทางด้านล่าง ไม่เด่นชัด</p><p><strong>Adult female ตัวเมีย</strong> คล้ายตัวผู้เต็มวัย แต่บนปีกมีจุดสีขาวและปื้นสีน้ำตาลแดงน้อยกว่าเหยี่ยวตัวผู้ โดยพบปื้นสีน้ำตาลแดงที่ขนปลายปีกเส้นใน และขนกลางปีกบางเส้น (แต่ไม่มีจุดสีขาวปน) ส่วนจุดสีขาวพบที่ขนคลุมบนปีกส่วนขนกลางปีกและขนกลางปีกรวมกันเป็นวงกลมสีขาวขนาดใหญ่ และขนโคนปีก (จุดขาวขนาดเล็ก) เท่านั้น ท้องมีลายขวางสีน้ำตาลแดง 5-6 เส้นที่เด่นชัด</p><p><strong>Juvenile วัยเด็ก</strong> ชุดขนคล้ายตัวเต็มวัยของแต่ละเพศ แต่ม่านตาสีเทาแกมฟ้า   </p><p><strong>Migration behavior</strong> Flock migrant อพยพเป็นฝูงนับร้อยตัว ร่อนลมร้อนเพื่อไต่ระดับความสูงแล้วเกิด สายธารเหยี่ยวอพยพ (river of raptors) เมื่อฝูงเหยี่ยวพุ่งไปข้างหน้าคล้ายสายน้ำ เกาะพักนอนเวลากลางคืนเป็นฝูงจำนวนมากในสวนสาธารณะ สวนยาง สวนปาล์มตลอดเส้นทางอพยพ</p><p><i>Aviceda leuphotes</i> แปลว่า นักล่า (หรือเหยี่ยว) มีหงอน</p>", "botLink": "http://birdsofthailand.org/node/123"},
{"id":4, "thaiName": "เหยี่ยวผึ้ง ", "commonName": "Oriental Honey-buzzard", "sciName": "Pernis ptilorhyncus ", "otherName": "", "status": "Partial migrant นกอพยพบางส่วน, Passage migrant นกอพยพผ่าน, Breeding resident นกประจำถิ่นในฤดูผสมพันธุ์", "conservation": "LC", "size": "55 -56 cm (ตัวเมียใหญ่กว่าตัวผู้)", "wingspan": "1.13 - 1.56 m", "prey": "Larvae of bees and wasps, reptiles, frogs, bird nestlings", "habitat": "ป่าเบญจพรรณและป่าดิบในฤดูผสมพันธุ์ สวนสาธารณะ ป่าละเมาะ และป่าดิบขณะล่าเหยื่อ ภูเขาหรือชายทะเลขณะอพยพผ่าน", "description": "<p><strong>ID Features</strong> เหยี่ยวปีกแตกขนาดใหญ่ ชุดขนหลากหลายสีสันและลวดลาย 6 ชุดขน พันธุ์อพยพไม่มีหงอนยาว ปีกกว้างและยาว คล้ายนกอินทรี แต่ส่วนหัวเล็กคล้ายนกคัคคูหรือนกพิราบ และหางยาว ปลายหางมนเมื่อหุบหาง บางมุมปลายหางจะพบรอยบุ๋มตรงกลาง ขณะเกาะคอนให้สังเกตปีกยาวแต่สั้นกว่าปลายหางเล็กน้อย และแข้งสีเหลืองไม่มีขนคลุม  รูจมูกเป็นร่องแคบ</p><p><strong>เพศ</strong> จำแนกที่แถบดำที่ขอบปีกท้าย แถบใต้หาง สีของม่านตาและใบหน้า </p><p><strong>อายุ</strong> (ระหว่างชุดขนตัวเต็มวัยและวัยเด็ก) จำแนกที่สีของหนังคลุมจมูก และแถบที่ขอบปีกท้าย  </p><p><strong>ชุดขน</strong> จำแนกที่สีและลวดลายของอก ท้องและขนคลุมใต้ปีก มี 6 ชุดขนหลัก (เรียงจากชุดขนที่มีสัดส่วนมากไปหาน้อยที่สุด) ดังนี้</p><ol><li>ชุดขนสีน้ำตาล Brown Morph</li><li>ชุดขนสีจาง Pale morph</li><li>ชุดขนสีเข้ม Dark morph</li><li>ชุดขนสีส้ม Rufous morph</li><li>ชุดขนลายขวาง Barred morph</li><li>ชุดขนลายจุด Spotted morph</li></ol><p><strong>Adult male ตัวผู้</strong> ใบหน้าสีเทา ม่านตาสีน้ำตาลแดง แถบดำหนาและเข้มที่ขอบปีกท้าย ใต้หางมีแถบดำ 2 แถบคั่นกลางด้วยแถบสีจางหนา หนังคลุมจมูกสีดำ</p><p><strong>Adult female ตัวเมีย</strong> ใบหน้าสีผันแปรตามชุดขน ม่านตาสีเหลือง แถบดำที่ขอบปีกท้ายบางกว่าตัวผู้ ใต้หางมีแถบดำ 3 แถบ (เล็กกว่าแถบดำของตัวผู้) คั่นกลางด้วยแถบสีจาง หนังคลุมจมูกสีดำ</p><p><strong>Juvenile วัยเด็ก</strong> ไม่มีแถบดำที่ขอบปีกท้าย ลายขวางใต้ปีกมีระยะห่างเสมอกัน หางยาวกว่าตัวเต็มวัย ม่านตาสีครีมถึงเหลืองอ่อน หนังคลุมจมูกสีเหลืองอ่อนหรือเหลืองอมเขียว จะเปลี่ยนเป็นสีดำในชุดขนวัยรุ่น ปีที่ 3</p><p><strong>Migration behavior</strong> Flock migrant อพยพเป็นฝูงนับร้อยตัว ร่อนลมร้อนเพื่อไต่ระดับความสูงแล้วเกิด สายธารเหยี่ยวอพยพ (river of raptors) เมื่อฝูงเหยี่ยวพุ่งไปข้างหน้าคล้ายสายน้ำ เกาะพักนอนเวลากลางคืนเป็นฝูงจำนวนมากในสวนสาธารณะ สวนยาง สวนปาล์มตลอดเส้นทางอพยพ</p><p><i>Pernis ptilorhynchus</i> แปลว่า เหยี่ยวที่มีขนคล้ายเกล็ดบนโคนปาก (หรือใบหน้า) สื่อลักษณะพิเศษของขนบนใบหน้าของเหยี่ยวผึ้งที่ลดรูปคล้ายเกล็ดปลา ไว้ป้องกันโดนผึ้งหรือตัวต่อต่อยเมื่อเหยี่ยวผึ้งโจมตีรัง เพื่อกินตัวอ่อนของผึ้งหรือตัวต่อ</p>", "botLink": "http://birdsofthailand.org/node/124"},
//{"id": 5 , "thaiName": "เหยี่ยวค้างคาว ", "commonName": "Bat Hawk ", "sciName": "Macheiramphus alcinus", "otherName": "", "status":  2 , "conservation": "LC", "size": "", "wingspan": "", "prey": "", "habitat": "", "description": ""},
//{"id": 6 , "thaiName": "เหยี่ยวขาว ", "commonName": "Black-shouldered Kite ", "sciName": "Elanus caeruleus ", "otherName": "", "status":  2 , "conservation": "LC", "size": "", "wingspan": "", "prey": "", "habitat": "", "description": ""},
//{"id": 7 , "thaiName": "เหยี่ยวดำ ", "commonName": "Black Kite ", "sciName": "Milvus migrans", "otherName": "", "status":  3 , "conservation": "LC", "size": "", "wingspan": "", "prey": "", "habitat": "", "description": ""},
//{"id": 8 , "thaiName": "เหยี่ยวแดง ", "commonName": "Brahminy Kite ", "sciName": "Haliastur indus", "otherName": "", "status":  2 , "conservation": "LC", "size": "", "wingspan": "", "prey": "", "habitat": "", "description": ""},
//{"id": 9 , "thaiName": "นกออก ", "commonName": "White-bellied Fish-eagle ", "sciName": "Haliaeetus leucogaster", "otherName": "", "status":  2 , "conservation": "LC", "size": "", "wingspan": "", "prey": "", "habitat": "", "description": ""},
//{"id": 10 , "thaiName": "นกอินทรีหัวนวล ", "commonName": "Pallas’s Fish-eagle ", "sciName": "Haliaeetus leucoryphus", "otherName": "", "status":  1 , "conservation": "VU", "size": "", "wingspan": "", "prey": "", "habitat": "", "description": ""},
//{"id": 11 , "thaiName": "นกอินทรีหางขาว ", "commonName": "White-tailed Eagle ", "sciName": "Haliaeetus albicilla ", "otherName": "", "status":  1 , "conservation": "LC", "size": "", "wingspan": "", "prey": "", "habitat": "", "description": ""},
//{"id": 12 , "thaiName": "เหยี่ยวปลาเล็กหัวเทา ", "commonName": "Lesser Fish-eagle ", "sciName": "Ichthyophaga humilis ", "otherName": "", "status":  2 , "conservation": "NT", "size": "", "wingspan": "", "prey": "", "habitat": "", "description": ""},
//{"id": 13 , "thaiName": "เหยี่ยวปลาใหญ่หัวเทา ", "commonName": "Grey-headed Fish-eagle ", "sciName": "Ichthyophaga ichthyaetus", "otherName": "", "status":  2 , "conservation": "NT", "size": "", "wingspan": "", "prey": "", "habitat": "", "description": ""},
//{"id": 14 , "thaiName": "อีแร้งเทาหลังขาว ", "commonName": "White-rumped Vulture ", "sciName": "Gyps bengalensis", "otherName": "", "status":  1 , "conservation": "CR", "size": "", "wingspan": "", "prey": "", "habitat": "", "description": ""},
//{"id": 15 , "thaiName": "อีแร้งสีน้ำตาล ", "commonName": "Slender-billed Vulture ", "sciName": "Gyps tenuirostris", "otherName": "", "status":  2 , "conservation": "CR", "size": "", "wingspan": "", "prey": "", "habitat": "", "description": ""},
//{"id": 16 , "thaiName": "อีแร้งสีน้ำตาลหิมาลัย ", "commonName": "Himalayan Vulture ", "sciName": "Gyps himalayensis", "otherName": "", "status":  1 , "conservation": "LC", "size": "", "wingspan": "", "prey": "", "habitat": "", "description": ""},
//{"id": 17 , "thaiName": "พญาแร้ง ", "commonName": "Red-headed Vulture ", "sciName": "Sarcogyps calvus", "otherName": "", "status":  2 , "conservation": "CR", "size": "", "wingspan": "", "prey": "", "habitat": "", "description": ""},
//{"id": 18 , "thaiName": "อีแร้งดำหิมาลัย ", "commonName": "Cinereous Vulture ", "sciName": "Aegypius monachus", "otherName": "", "status":  1 , "conservation": "NT", "size": "", "wingspan": "", "prey": "", "habitat": "", "description": ""},
//{"id": 19 , "thaiName": "เหยี่ยวนิ้วสั้น ", "commonName": "Short-toed Snake-eagle ", "sciName": "Circaetus gallicus", "otherName": "", "status":  1 , "conservation": "LC", "size": "", "wingspan": "", "prey": "", "habitat": "", "description": ""},
//{"id": 20 , "thaiName": "เหยี่ยวรุ้ง ", "commonName": "Crested Serpent-eagle ", "sciName": "Spilornis cheela ", "otherName": "", "status":  3 , "conservation": "LC", "size": "", "wingspan": "", "prey": "", "habitat": "", "description": ""},
//{"id": 21 , "thaiName": "เหยี่ยวทุ่งพันธุ์ยูเรเซีย ", "commonName": "Western Marsh Harrier ", "sciName": "Circus aeruginosus", "otherName": "", "status":  1 , "conservation": "LC", "size": "", "wingspan": "", "prey": "", "habitat": "", "description": ""},
//{"id": 22 , "thaiName": "เหยี่ยวทุ่งพันธุ์เอเชียตะวันออก ", "commonName": "Eastern Marsh Harrier ", "sciName": "Circus spilonotus", "otherName": "", "status":  1 , "conservation": "LC", "size": "", "wingspan": "", "prey": "", "habitat": "", "description": ""},
//{"id": 23 , "thaiName": "เหยี่ยวทุ่งแถบเหนือ ", "commonName": "Hen Harrier ", "sciName": "Circus cyaneus", "otherName": "", "status":  1 , "conservation": "LC", "size": "", "wingspan": "", "prey": "", "habitat": "", "description": ""},
//{"id": 24 , "thaiName": "เหยี่ยวทุ่งสีจาง ", "commonName": "Pallid Harrier ", "sciName": "Circus macrourus", "otherName": "", "status":  1 , "conservation": "NT", "size": "", "wingspan": "", "prey": "", "habitat": "", "description": ""},
{"id":25, "thaiName": "เหยี่ยวด่างดำขาว ", "commonName": "Pied Harrier ", "sciName": "Circus melanoleucos", "otherName": "ฮุ้งโก้ง", "status": "Complete migrant  นกอพยพ, Passage migrant นกอพยพผ่าน", "conservation": "LC", "size": "43 - 46 cm (ตัวเมียใหญ่กว่าตัวผู้)", "wingspan": "1.10 - 1.25 m", "prey": "Small birds, frogs, rodents", "habitat": "ทุ่งนา ทุ่งหญ้า ทุ่งโล่งขณะล่าเหยื่อ ภูเขาหรือชายทะเลขณะอพยพผ่าน", "description": "<p>เหยี่ยวปีกแตกขนาดกลาง หัวโต ลำตัวเพรียว ปีกยาว ค่อนข้างแคบ ขายาวแต่ไม่มีขนคลุมแข้ง หางยาวปลายมน ขณะบินจะร่อนไปมาอย่างช้าๆ เหนือทุ่งนาหรือ ทุ่งหญ้า สูงไม่เกินยอดตาลเพื่อล่าเหยื่อ ในเวลากลางคืนจะรวมฝูงกันเข้านอนในแหล่งพักนอนที่เป็นทุ่งหญ้าสูง หรือทุ่งนาในพื้นที่ชุ่มน้ำขนาดใหญ่ เช่น หนอง บึง โดยใช้น้ำหนักตัวกดทับบนหญ้าคาหรือหญ้าไซเป็นหลุมนอน ในแหล่งพักนอนกลางคืนพบตั้งแต่สิบตัวถึงหลายร้อยตัว ต่างจากเหยี่ยวและนกอินทรีส่วนใหญ่ที่จะเกาะคอนนอนบนต้นไม้</p><p><strong>ID Features</strong> เหยี่ยวทุ่ง มี ชุดขน 3 ชุด ที่แตกต่างระหว่างเพศและอายุ ได้แก่ ตัวผู้เต็มวัย ตัวเมียเต็มวัย และวัยเด็ก ซึ่งนอกจากชุดขนแล้ว ใช้สีของม่านตาจำแนกอายุได้ด้วย เนื่องจากในตัวเต็มวัย ม่านตาจะเปลี่ยนจากสีน้ำตาลในชุดขนวัยเด็ก เป็นสีเหลืองสด และในชุดขนวัยเด็ก ตัวผู้จะเปลี่ยนสีของม่านตาก่อนตัวเมีย</p><p><strong>Female ตัวเมีย</strong> ชุดขนลายสีน้ำตาล ม่านตาสีเหลือง มีลายขีดตั้งแต่คอ อกถึงท้อง ตะโพกขาว บนหางมีแถบสีเข้มชัดเจน คล้ายเหยี่ยวทุ่งเอเชียตะวันออก วัยรุ่น ตัวผู้ จัดอยู่ในกลุ่มเหยี่ยวทุ่งตะโพกขาว หางลาย หรือ Ring-tailed harriers</p><p><strong>Juvenile วัยเด็ก</strong> ชุดขนสีน้ำตาลแดง ม่านตาสีน้ำตาลหรือสีเหลืองแล้วแต่เพศ คิ้วสีขาวและแถบโค้งใต้นัยน์ตาสีขาว ตะโพกขาวมีจุดรูปหยดน้ำสีน้ำตาลแดงประปราย </p><p><strong>Migration behavior</strong> Solitary migrant อพยพรายเดียว บินต่อเนื่องเป็นระยะทางไกล แต่ร่อนลมร้อนได้เช่นกัน มักพบอพยพผ่านจุดชมเหยี่ยวอพยพจนถึงช่วงเย็นแม้จะไม่มีลมร้อนแล้วก็ตาม</p><p><i>Circus melanoleucos</i> แปลว่า เหยี่ยวทุ่ง (บินเป็นวนเวียนเป็นวงกลม) สีขาวดำ</p>", "botLink": "http://birdsofthailand.org/node/147"},
//{"id": 26 , "thaiName": "เหยี่ยวนกเขาหงอน ", "commonName": "Crested Goshawk ", "sciName": "Accipiter trivirgatus ", "otherName": "", "status":  2 , "conservation": "LC", "size": "", "wingspan": "", "prey": "", "habitat": "", "description": ""},
{"id": 27, "thaiName": "เหยี่ยวนกเขาชิครา ", "commonName": "Shikra ", "sciName": "Accipiter badius ", "otherName": "แหล่ว", "status": "ประจำถิ่น breeding resident, Partial migrant นกอพยพบางส่วน, Passage migrant นกอพยพผ่าน", "conservation": "LC", "size": "30 - 36 cm (ตัวเมียใหญ่กว่าตัวผู้)", "wingspan": "0.48 - 0.68 m", "prey": "Insects, small birds, frogs, rodents", "habitat": "ทุ่งนา สวนสาธารณะ ป่าละเมาะ ป่าเต็งรังและป่าดิบขณะล่าเหยื่อ ภูเขาหรือชายทะเลขณะอพยพผ่าน", "description": "<p><strong>ID Features</strong> เหยี่ยวนกเขาสกุล <i>Accipiter</i> ขนาดกลาง ปีกกว้างแต่ค่อนขางสั้น ปลายปีกแตกและรูปร่างกลมมน หางยาว ปลายหางมนเมื่อหุบหาง ขณะเกาะคอนให้สังเกตปีกสั้นกว่าปลายหาง และแข้งไม่มีขนคลุม</p><p><strong>Adult male ตัวผู้</strong> ชุดขนสีเทาแกมฟ้าที่ส่วนหัว แก้ม บนปีกและหาง คอขาวมีขีดกลางคอสีจางส่วนอกและท้องมีลายขวางสีส้มบนขนสีขาว ม่านตาสีแดงสด ปลายปีกดำ ขนหางคู่กลาง (เส้นที่อยู่ด้านบนของหาง) ไม่มีแถบดำ หรือจุดดำบนแกนขน (พบในตัวเมีย)</p><p><strong>Age 3rd-4th calendar-year Subadult วัยรุ่นปีที่ 3หรือ 4 ตัวผู้</strong> ชุดขนเหมือนตัวผู้เต็มวัย แต่ม่านตาสีส้ม ปลายปีกดำ ขนหางคู่กลาง (เส้นที่อยู่ด้านบนของหาง) ไม่มีจุดดำบนแกนขน (พบในตัวเมีย)</p><p><strong>Adult female ตัวเมีย</strong> ส่วนหัวและแก้มมีสีเทาแกมฟ้า  คิ้วและคอขาว มีขีดกลางคอสีดำจาง บนปีกและหาง ส่วนอกและท้องมีลายขวางสีส้มบนขนสีขาว ม่านตาสีเหลือง ปลายปีกลาย ขนหางคู่กลาง (เส้นที่อยู่ด้านบนของหาง) มีจุดดำบนแกนขน</p><p><strong>Juvenile วัยเด็ก</strong> ส่วนหัวลายสีน้ำตาล หนังตาสีเหลืองอมเขียว คอมีลายขีดสีดำ 3 เส้น (ขีดกลางคอ และขีดที่แก้ม) บนปีกสีน้ำตาลมีสีเทาปน อกมีลายขีดรูปหยดน้ำ ท้องมีลายจุดสีน้ำตาลแดง ก้นสีขาวไม่มีลาย ขนคลุมใต้ปีกมีลายจุดสีน้ำตาลกระจายทั่วไปแต่ไม่สม่ำเสมอ บนหางมีแถบดำแคบกว่าแถบสีจาง </p><p><strong>Migration behavior</strong> Solitary migrant อพยพรายตัว</p><p><i>Accipiter badius</i> แปลว่าเหยี่ยวนกเขาที่มีขนสีน้ำตาล (สื่อถึงชุดขนวัยเด็ก)</p>", "botLink": "http://birdsofthailand.org/node/149"},
{"id": 28, "thaiName": "เหยี่ยวนกเขาพันธุ์จีน ", "commonName": "Chinese Sparrowhawk ", "sciName": "Accipiter soloensis", "otherName": "", "status": "Complete migrant นกอพยพ, Passage migrant นกอพยพผ่าน", "conservation": "LC", "size": "29 - 35 cm (ตัวเมียใหญ่กว่าตัวผู้)", "wingspan": "0.52 - 0.62 m", "prey": "Insects, dragonfly, frogs, small birds", "habitat": "ป่าละเมาะ และป่าดิบขณะล่าเหยื่อ ภูเขาหรือชายทะเลขณะอพยพผ่าน", "description": "<p><strong>ID Features</strong> เหยี่ยวนกเขาสกุล <i>Accipiter</i> ปีกกว้างและสั้น ปลายปีกแหลมและมีสีดำ ปลายหางมนเมื่อหุบหาง ขณะเกาะคอนให้สังเกตปีกสั้นกว่าปลายหางแต่ยื่นยาวมากกว่าครึ่งหนึ่งของความยาวหาง (ปีกยาวที่สุดในบรรดาเหยี่ยวนกเขาขนาดกลาง) และแข้งไม่มีขนคลุม  หนังคลุมจมูกและขาสีส้ม</p><p><strong>Adult male ตัวผู้</strong> ส่วนหัวและแก้มสีเทาแกมฟ้า (เข้มกว่าเหยี่ยวนกเขาชิคราแต่จางกว่าเหยี่ยวนกเขาพันธุ์ญี่ปุ่น) ม่านตาสีแดงเข้ม บนปีกสีเทาเข้มกว่าเหยี่ยวนกเขาชิครา ปื้นสีส้มบนอก ขณะบินพบปลายปีกด้านล่างสีดำ ขนคลุมใต้ปีกสีเหลืองนวลและไม่มีลายสีดำ ปลายหางมน บนหาง (ขนหางคู่กลางด้านบนสุด) ไม่พบแถบดำ</p><p><strong>Second calendar-year subadult วัยรุ่น ปีที่สอง ตัวผู้</strong> คล้ายนกตัวผู้เต็มวัยแต่ขนใต้ปีก (ขนปลายปีกและขนกลางปีกบางเส้น) มีลายขวางสีดำ และพบขนเก่า (ขนสีน้ำตาล ขอบแตกเป็นซี่) ของชุดขนวัยเด็กที่ขนปลายปีก ขนกลางปีกและขนหางบางเส้น เช่น ขนปลายปีกเส้นนอก (เส้นที่ 8-10 เมื่อนับออกจากลำตัว) เป็นขนเก่าของชุดขนวัยเด็ก</p><p><strong>Adult female ตัวเมีย</strong> คล้ายตัวผู้เต็มวัย แต่ม่านตาสีเหลือง อกสีน้ำตาลไหม้ (เข้มกว่าตัวผู้) ขนใต้ปีก (ขนปลายปีกและขนกลางปีก) มีลายขวางเส้นเล็กสีดำ</p><p><strong>Juvenile วัยเด็ก</strong> คล้ายนกตัวเมียเต็มวัยแต่ม่านตาสีเหลือง อกมีลายขีดสีน้ำตาล สีข้างมีลายขวาง ท้องมีลายจุด บนปีกมีสีน้ำตาลแกมเทา ขนใต้ปีก (ขนปลายปีกและขนกลางปีก) มีลายขวางสีดำ บนหางมีแถบดำ 3 แถบ (ที่พ้นขนคลุมโคนหางออกมา) </p><p><strong>Migration behavior</strong> Flock migrant อพยพเป็นฝูงนับร้อยตัว ร่อนลมร้อนเพื่อไต่ระดับความสูงแล้วเกิด สายธารเหยี่ยวอพยพ (river of raptors) เมื่อฝูงเหยี่ยวพุ่งไปข้างหน้าคล้ายสายน้ำ</p><p><i>Accipiter soloensis</i> แปลว่าเหยี่ยวนกเขา เก็บตัวอย่างพิพิธภัณฑ์ไว้ศึกษาทางปักษีวิทยาเป็นครั้งแรกที่เมืองโซโล เกาะชวา ประเทศอินโดนีเซีย</p>", "botLink": "http://birdsofthailand.org/node/150"},
{"id": 29, "thaiName": "เหยี่ยวนกเขาพันธุ์ญี่ปุ่น ", "commonName": "Japanese Sparrowhawk ", "sciName": "Accipiter gularis", "otherName": "", "status": "Complete migrant นกอพยพ, Passage migrant นกอพยพผ่าน", "conservation": "LC", "size": "25 - 31 cm (ตัวเมียใหญ่กว่าตัวผู้)", "wingspan": "0.46 - 0.58 m", "prey": "Small birds", "habitat": "สวนสาธารณะ ป่าละเมาะ และป่าดิบขณะล่าเหยื่อ ภูเขาหรือชายทะเลขณะอพยพผ่าน", "description": "<p><strong>ID Features</strong> เหยี่ยวนกเขาสกุล <i>Accipiter</i> ขนาดกลาง ปีกกว้างและสั้น ปลายปีกแตกและรูปร่างค่อนข้างแหลมกว่าปลายปีกของเหยี่ยวนกเขาชิครา หางค่อนข้างสั้น ปลายหางตัดเป็นเส้นตรงเมื่อหุบหางและในบางมุม อาจเห็นรอยเว้าตรงกลางของปลายหาง ขณะเกาะคอนให้สังเกตปีกสั้นกว่าปลายหาง และแข้งไม่มีขนคลุม</p><p><strong>Adult male ตัวผู้</strong> ส่วนหัวและแก้มสีเทาเข้ม หนังตาสีเหลืองสด คอขาวมีขีดกลางคอสีจาง บนปีกสีเทาเข้มกว่าเหยี่ยวนกเขาชิครา ปื้นสีส้มบนอก และลายขวางสีส้มจางที่ข้างลำตัวและท้อง ม่านตาสีแดงสด หนังคลุมจมูกสีเขียวอมเหลือง ขนคลุมใต้ปีกมีลายสีส้มจาง บนหางมีแถบดำ 3 แถบ ปลายหางตัดมีรอยเว้าตรงกลาง</p><p><strong>Adult female ตัวเมีย</strong> ส่วนหัวและแก้มสีเทาเข้ม คอขาวและมีขีดกลางคอสีดำ หนังตาและม่านตาสีเหลือง หนังคลุมจมูกสีเขียวอมเหลือง ส่วนอกและท้องมีลายขวางสีน้ำตาลหรือสีดำ ขนคลุมใต้ปีกมีลายขวางสีดำกระจายสม่ำเสมอ บนหางมีแถบดำ 4 แถบและแคบกว่าแถบสีจาง ปลายหางตัดมีรอยเว้าตรงกลาง</p><p><strong>Juvenile วัยเด็ก</strong> เงาร่างคล้ายตัวเต็มวัยแต่ขนกลางปีกโป่งออกมามากกว่า ส่วนหัวลายสีน้ำตาล หนังตาและม่านตาสีเหลือง หนังคลุมจมูกสีเขียวอมเหลือง คอมีลายขีดสีดำกลางคอ บนปีกสีน้ำตาล อกมีลายขีดเป็นเส้นสีดำสลับสีน้ำตาลแดง สีข้างลายขวางสีน้ำตาลแดง ลายจุดรูปหัวใจบนท้อง ก้นสีขาวไม่มีลาย ขนคลุมใต้ปีกมีลายขวางสีดำกระจายทั่วไปอย่างสม่ำเสมอ บนหางมีแถบดำ  3-4 แถบและแถบดำแคบกว่าแถบสีจาง ปลายหางตัดเป็นเส้นตรงเมื่อหุบหาง </p><p><strong>Migration behavior</strong> Solitary migrant อพยพรายตัว อาจร่อนลมร้อนร่วมกับฝูงเหยี่ยวอพยพชนิดอื่น</p><p><i>Accipiter gularis</i> แปลว่าเหยี่ยวนกเขาที่คอมีขีดสีดำ</p>", "botLink": "http://birdsofthailand.org/node/151"},
//{"id": 30 , "thaiName": "เหยี่ยวนกกระจอกเล็ก ", "commonName": "Besra ", "sciName": "Accipiter virgatus ", "otherName": "", "status":  2 , "conservation": "LC", "size": "", "wingspan": "", "prey": "", "habitat": "", "description": ""},
//{"id": 31 , "thaiName": "เหยี่ยวนกกระจอกใหญ่ ", "commonName": "Northern Sparrowhawk ", "sciName": "Accipiter nisus ", "otherName": "", "status":  1 , "conservation": "LC", "size": "", "wingspan": "", "prey": "", "habitat": "", "description": ""},
//{"id": 32 , "thaiName": "เหยี่ยวนกเขาท้องขาว ", "commonName": "Northern Goshawk ", "sciName": "Accipiter gentilis ", "otherName": "", "status":  1 , "conservation": "LC", "size": "", "wingspan": "", "prey": "", "habitat": "", "description": ""},
//{"id": 33 , "thaiName": "เหยี่ยวปีกแดง ", "commonName": "Rufous-winged Buzzard ", "sciName": "Butastur liventer", "otherName": "", "status":  2 , "conservation": "LC", "size": "", "wingspan": "", "prey": "", "habitat": "", "description": ""},
{"id": 34, "thaiName": "เหยี่ยวหน้าเทา ", "commonName": "Grey-faced Buzzard ", "sciName": "Butastur indicus", "otherName": "", "status": "Complete migrant นกอพยพ, Passage migrant นกอพยพผ่าน", "conservation": "LC", "size": "41 - 49 cm (ตัวเมียใหญ่กว่าตัวผู้)", "wingspan": "1.01 - 1.10 m", "prey": "Insects, crabs, reptiles, frogs, small birds, rodents", "habitat": "ป่าละเมาะ และป่าดิบขณะล่าเหยื่อ ภูเขาหรือชายทะเลขณะอพยพผ่าน", "description": "<p><strong>ID Featurs</strong> เหยี่ยวขนาดกลาง ปีกยาว ค่อนข้างแคบ ปลายปีกแตกแต่สอบเรียวคล้ายเปลวเทียน ปลายหางมนเมื่อหุบหาง รูปลักษณ์ยาวและเพรียว ขณะเกาะคอนให้สังเกตปีกยาวเสมอปลายหาง และแข้งไม่มีขนคลุม  หนังคลุมจมูกและขาสีเหลืองหรือสีส้ม</p><p><strong>Adult male ตัวผู้</strong> ชุดขนสีน้ำตาลแกมแดง แก้มสีเทา ม่านตาสีเหลือง หนังคลุมจมูกสีส้ม คอขาวมีขีดสีดำหนากลางคอยาวลงมาถึงอก อกและท้องมีลายขวางสีน้ำตาล ตะโพกมีแถบโค้งสีขาว ขาสีเหลือง ขณะบินพบ  บนปีกสีแดง ปลายหางมน บนหางมีแถบดำหนา 3 แถบ</p><p><strong>Adult female ตัวเมีย</strong> คล้ายตัวผู้เต็มวัย แต่แก้มสีเทาน้อยกว่า และมีสีน้ำตาลปน บนปีกมีสีน้ำตาลและไม่มีสีแดงปน</p><p><strong>Juvenile วัยเด็ก</strong> คิ้วหนาสีขาว แก้มสีน้ำตาล ม่านตาสีเหลืองอ่อน หนังคลุมจมูกสีเหลืองอ่อน อกมีลายขีดสีน้ำตาล สีข้างมีลายขวาง ท้องมีลายจุด บนปีกมีสีน้ำตาล มีแถบดำ 3-4 แถบบนหาง   </p><p><strong>Migration behavior</strong> Flock migrant อพยพเป็นฝูงนับร้อยตัว ร่อนลมร้อนเพื่อไต่ระดับความสูงแล้วเกิด สายธารเหยี่ยวอพยพ (river of raptors) เมื่อฝูงเหยี่ยวพุ่งไปข้างหน้าคล้ายสายน้ำ</p><p><i>Butastur indicus</i> แปลว่าเหยี่ยวขนาดย่อม เก็บตัวอย่างพิพิธภัณฑ์ไว้ศึกษาทางปักษีวิทยาเป็นครั้งแรกที่เกาะชวา ประเทศอินโดนีเซีย ในที่นี้ indicus หมายถึง East Indies หรือภูมิภาคเอเชียตะวันออกเฉียงใต้ ภายใต้อิทธิพลของประเทศฮอลแลนด์ในยุคอาณานิคม</p>", "botLink": "http://birdsofthailand.org/node/156"},
//{"id": 35 , "thaiName": "เหยี่ยวตะวันออก ", "commonName": "Eastern Buzzard ", "sciName": "Buteo japonicus", "otherName": "", "status":  1 , "conservation": "LC", "size": "", "wingspan": "", "prey": "", "habitat": "", "description": ""},
//{"id": 36 , "thaiName": "เหยี่ยวทะเลทรายพันธุ์สเต็ป ", "commonName": "Steppe Buzzard ", "sciName": "Buteo buteo ", "otherName": "", "status":  1 , "conservation": "LC", "size": "", "wingspan": "", "prey": "", "habitat": "", "description": ""},
//{"id": 37 , "thaiName": "เหยี่ยวหิมาลัย ", "commonName": "Himalayan Buzzard ", "sciName": "Buteo burmanicus", "otherName": "", "status":  1 , "conservation": "LC", "size": "", "wingspan": "", "prey": "", "habitat": "", "description": ""},
//{"id": 38 , "thaiName": "เหยี่ยวขายาว ", "commonName": "Long-legged Buzzard ", "sciName": "Buteo rufinus", "otherName": "", "status":  1 , "conservation": "LC", "size": "", "wingspan": "", "prey": "", "habitat": "", "description": ""},
//{"id": 39 , "thaiName": "นกอินทรีดำ ", "commonName": "Black Eagle ", "sciName": "Ictinaetus malayensis", "otherName": "", "status":  2 , "conservation": "LC", "size": "", "wingspan": "", "prey": "", "habitat": "", "description": ""},
//{"id": 40 , "thaiName": "นกอินทรีปีกลาย ", "commonName": "Greater Spotted Eagle ", "sciName": "Clanga clanga", "otherName": "", "status":  1 , "conservation": "VU", "size": "", "wingspan": "", "prey": "", "habitat": "", "description": ""},
//{"id": 41 , "thaiName": "นกอินทรีทุ่งหญ้าสเต็ป ", "commonName": "Steppe Eagle ", "sciName": "Aquila nipalensis", "otherName": "", "status":  1 , "conservation": "LC", "size": "", "wingspan": "", "prey": "", "habitat": "", "description": ""},
//{"id": 42 , "thaiName": "นกอินทรีหัวไหล่ขาว ", "commonName": "Imperial Eagle ", "sciName": "Aquila heliaca", "otherName": "", "status":  1 , "conservation": "VU", "size": "", "wingspan": "", "prey": "", "habitat": "", "description": ""},
//{"id": 43 , "thaiName": "นกอินทรีแถบปีกดำ ", "commonName": "Bonelli’s Eagle ", "sciName": "Hieraaetus fasciatus ", "otherName": "", "status":  1 , "conservation": "LC", "size": "", "wingspan": "", "prey": "", "habitat": "", "description": ""},
//{"id": 44 , "thaiName": "นกอินทรีเล็ก ", "commonName": "Booted Eagle ", "sciName": "Hieraaetus pennatus", "otherName": "", "status":  1 , "conservation": "LC", "size": "", "wingspan": "", "prey": "", "habitat": "", "description": ""},
//{"id": 45 , "thaiName": "เหยี่ยวท้องแดง ", "commonName": "Rufous-bellied Eagle ", "sciName": "Hieraaetus kienerii", "otherName": "", "status":  2 , "conservation": "LC", "size": "", "wingspan": "", "prey": "", "habitat": "", "description": ""},
//{"id": 46 , "thaiName": "เหยี่ยวต่างสี ", "commonName": "Changeable Hawk-eagle ", "sciName": "Spizaetus cirrhatus ", "otherName": "", "status":  2 , "conservation": "LC", "size": "", "wingspan": "", "prey": "", "habitat": "", "description": ""},
//{"id": 47 , "thaiName": "เหยี่ยวภูเขา ", "commonName": "Mountain Hawk-eagle ", "sciName": "Spizaetus nipalensis ", "otherName": "", "status":  2 , "conservation": "LC", "size": "", "wingspan": "", "prey": "", "habitat": "", "description": ""},
//{"id": 48 , "thaiName": "เหยี่ยวดำท้องขาว ", "commonName": "Blyth’s Hawk-eagle ", "sciName": "Spizaetus alboniger", "otherName": "", "status":  2 , "conservation": "LC", "size": "", "wingspan": "", "prey": "", "habitat": "", "description": ""},
//{"id": 49 , "thaiName": "เหยี่ยวหงอนสีน้ำตาลท้องขาว ", "commonName": "Wallace’s Hawk-eagle ", "sciName": "Spizaetus nanus ", "otherName": "", "status":  2 , "conservation": "VU", "size": "", "wingspan": "", "prey": "", "habitat": "", "description": ""},
//{"id": 50 , "thaiName": "เหยี่ยวเล็กตะโพกขาว ", "commonName": "White-rumped Falcon ", "sciName": "Polihierax insignis ", "otherName": "", "status":  2 , "conservation": "NT", "size": "", "wingspan": "", "prey": "", "habitat": "", "description": ""},
//{"id": 51 , "thaiName": "เหยี่ยวแมลงปอขาแดง ", "commonName": "Collared Falconet ", "sciName": "Microhierax caerulescens ", "otherName": "", "status":  2 , "conservation": "LC", "size": "", "wingspan": "", "prey": "", "habitat": "", "description": ""},
//{"id": 52 , "thaiName": "เหยี่ยวแมลงปอขาดำ ", "commonName": "Black-thighed Falconet ", "sciName": "Microhierax fringillarius", "otherName": "", "status":  2 , "conservation": "LC", "size": "", "wingspan": "", "prey": "", "habitat": "", "description": ""},
//{"id": 53 , "thaiName": "เหยี่ยวเคสเตรล ", "commonName": "Common Kestrel ", "sciName": "Falco tinnunculus", "otherName": "", "status":  1 , "conservation": "LC", "size": "", "wingspan": "", "prey": "", "habitat": "", "description": ""},
//{"id": 54 , "thaiName": "เหยี่ยวตีนแดง ", "commonName": "Amur Falcon ", "sciName": "Falco amurensis", "otherName": "", "status":  1 , "conservation": "LC", "size": "", "wingspan": "", "prey": "", "habitat": "", "description": ""},
//{"id": 55 , "thaiName": "เหยี่ยวเมอร์ลิน ", "commonName": "Merlin Falco ", "sciName": "columbarius insignis", "otherName": "", "status":  1 , "conservation": "LC", "size": "", "wingspan": "", "prey": "", "habitat": "", "description": ""},
//{"id": 56 , "thaiName": "เหยี่ยวฮอบบี้พันธุ์ยุโรป ", "commonName": "Northern Hobby ", "sciName": "Falco subbuteo ", "otherName": "", "status":  1 , "conservation": "LC", "size": "", "wingspan": "", "prey": "", "habitat": "", "description": ""},
//{"id": 57 , "thaiName": "เหยี่ยวฮอบบี้ ", "commonName": "Oriental Hobby ", "sciName": "Falco severus ", "otherName": "", "status":  1 , "conservation": "LC", "size": "", "wingspan": "", "prey": "", "habitat": "", "description": ""},
//{"id": 58 , "thaiName": "เหยี่ยวเพเรกริน ", "commonName": "Peregrine Falcon ", "sciName": "Falco peregrinus", "otherName": "", "status":  3 , "conservation": "LC", "size": "", "wingspan": "", "prey": "", "habitat": "", "description": ""},
        ];
		
	this.photoDB = [
{"id": 301, "tid": 3, "width": 936, "height": 811, "path": "3/male 20091101 095.JPG", "description": "Male", "copyright": "Chaiyan Kasorndorkbua", "website": ""},
//{"id": 302, "tid": 3, "width": 1178, "height": 905, "path": "3/male 20091101 095.JPG", "description": "Male", "copyright": "", "website": ""},
{"id": 303, "tid": 3, "width": 936, "height": 811, "path": "3/m 20141206 121.JPG", "description": "Male", "copyright": "Kamron Petprayoon", "website": ""},
{"id": 304, "tid": 3, "width": 990, "height": 825, "path": "3/bb-fem-Dong.jpg", "description": "Female", "copyright": "Nattapol Kirdchuchuen ", "website": ""},
{"id": 305, "tid": 3, "width": 626, "height": 499, "path": "3/bb-fem-Dong-underW.jpg", "description": "Female", "copyright": "Nattapol Kirdchuchuen ", "website": ""},
{"id": 306, "tid": 3, "width": 1200, "height": 800, "path": "3/male vs female 20111027 098.JPG", "description": "Male (left) & Female (right)", "copyright": "Wiroj Onganunkun", "website": ""},
{"id": 307, "tid": 3, "width": 1200, "height": 800, "path": "3/kettle 20111027 096.JPG", "description": "ฝูงเหยี่ยวกิ้งก่าสีดำร่อนลมร้อน (มวลอากาศร้อน) หรือ Kettle of Black Bazas", "copyright": "Wiroj Onganunkun", "website": ""},
{"id": 308, "tid": 3, "width": 1200, "height": 800, "path": "3/kettle 20091101 093.JPG", "description": "ฝูงเหยี่ยวกิ้งก่าสีดำร่อนลมร้อน (มวลอากาศร้อน) หรือ Kettle of Black Bazas", "copyright": "Nattapol Kirdchuchuen", "website": ""},
{"id": 309, "tid": 3, "width": 1200, "height": 797, "path": "3/kettle 20131024 122.JPG", "description": "ฝูงเหยี่ยวกิ้งก่าสีดำร่อนลมร้อน (มวลอากาศร้อน) หรือ Kettle of Black Bazas", "copyright": "Praphin Buasong", "website": ""},
//{"id": 310, "tid": 3, "width": 1200, "height": 800, "path": "3/kettle 20111028 097.JPG", "description": "ฝูงเหยี่ยวกิ้งก่าสีดำร่อนลมร้อน (มวลอากาศร้อน) หรือ Kettle of Black Bazas", "copyright": "", "website": ""},

{"id": 401, "tid": 4, "width": 1200, "height": 800, "path": "4/brown m 20131002 113.JPG", "description": "Brown morph, adult male ", "copyright": "Chaiyan Kasorndorkbua", "website": ""},
{"id": 402, "tid": 4, "width": 1200, "height": 800, "path": "4/brown m bee nest 20141004 102.JPG", "description": "Adult male brown morph with beehive in talons", "copyright": "Wattanachai Rodnirung", "website": ""},
{"id": 403, "tid": 4, "width": 1200, "height": 882, "path": "4/brown fem 20130928 114.JPG", "description": "Brown morph, adult female ", "copyright": "Chaiyan Kasorndorkbua", "website": ""},
{"id": 404, "tid": 4, "width": 1000, "height": 756, "path": "4/ohb-brown-juv.jpg", "description": "Brown morph, juvenile", "copyright": "Chaiyan Kasorndorkbua", "website": ""},
{"id": 405, "tid": 4, "width": 1200, "height": 913, "path": "4/pale m  20130927 120.JPG", "description": "Pale morph, adult male ", "copyright": "Chaiyan Kasorndorkbua", "website": ""},
{"id": 406, "tid": 4, "width": 1200, "height": 898, "path": "4/pale fem 20130927 092.jpg", "description": "Pale morph, adult female ", "copyright": "Chaiyan Kasorndorkbua", "website": ""},
{"id": 407, "tid": 4, "width": 1000, "height": 797, "path": "4/ohb-pale-juv.jpg", "description": "Pale morph, juvenile", "copyright": "Chaiyan Kasorndorkbua", "website": ""},
{"id": 408, "tid": 4, "width": 765, "height": 562, "path": "4/dark m 20151014 118.JPG", "description": "Dark morph, adult male", "copyright": "Chumpol Phoungsook", "website": ""},
{"id": 409, "tid": 4, "width": 1200, "height": 928, "path": "4/dark m 20141013 117.JPG", "description": "Dark morph, adult female", "copyright": "Chaiyan Kasorndorkbua", "website": ""},
{"id": 410, "tid": 4, "width": 1200, "height": 800, "path": "4/m 2cy dark 20130927 109.JPG", "description": "Dark morph, second calendar-year subadult male", "copyright": "Chaiyan Kasorndorkbua", "website": ""},
{"id": 411, "tid": 4, "width": 1200, "height": 922, "path": "4/juv dark 20131001 110.JPG", "description": "Dark morph, juvenile", "copyright": "Chaiyan Kasorndorkbua", "website": ""},
{"id": 412, "tid": 4, "width": 1000, "height": 770, "path": "4/rufous-male-Prapoj-r.jpg", "description": "Rufous morph, adult male", "copyright": "Prapoj Rukruenreang", "website": ""},
{"id": 413, "tid": 4, "width": 1200, "height": 800, "path": "4/ruf f 20131010 101.JPG", "description": "Rufous morph, adult female", "copyright": "Chaiyan Kasorndorkbua", "website": ""},
{"id": 414, "tid": 4, "width": 1200, "height": 939, "path": "4/bar m 20130928 115.JPG", "description": "Barred morph, adult male", "copyright": "Chaiyan Kasorndorkbua", "website": ""},
{"id": 415, "tid": 4, "width": 1200, "height": 975, "path": "4/bar fem 20130928 111.JPG", "description": "Barred morph, adult female", "copyright": "Chaiyan Kasorndorkbua", "website": ""},
{"id": 416, "tid": 4, "width": 1000, "height": 772, "path": "4/barred-f-Prapoj-r.jpg", "description": "Barred morph, adult female", "copyright": "Prapoj Rukruenreang", "website": ""},
{"id": 417, "tid": 4, "width": 1000, "height": 752, "path": "4/bar f Kamron 20140328 131.JPG", "description": "Barred morph, adult female", "copyright": "Kamron Petprayoon", "website": ""},
{"id": 418, "tid": 4, "width": 745, "height": 580, "path": "4/bar f 20151013 089.jpg", "description": "Barred morph, adult female", "copyright": "Chumpol Phoungsook", "website": ""},
{"id": 419, "tid": 4, "width": 1200, "height": 920, "path": "4/spot m 20141013 116.JPG", "description": "Spotted morph, adult male", "copyright": "Chaiyan Kasorndorkbua", "website": ""},
{"id": 420, "tid": 4, "width": 1200, "height": 800, "path": "4/spot fem 20141013 107.JPG", "description": "Spotted morph, adult female", "copyright": "Chaiyan Kasorndorkbua", "website": ""},
{"id": 421, "tid": 4, "width": 1200, "height": 800, "path": "4/kettle 20141013 112.JPG", "description": "ฝูงเหยี่ยวผึ้งร่อนลมร้อน (มวลอากาศร้อน) หรือ Kettle of Oriental Honey-Buzzards", "copyright": "Chaiyan Kasorndorkbua", "website": ""},
	
{"id": 2501, "tid": 25, "width": 1200, "height": 869, "path": "25/m dong 20110123 130.JPG", "description": "Adult male", "copyright": "Nattapol Kirdchuchuen ", "website": ""},
{"id": 2502, "tid": 25, "width": 1000, "height": 1283, "path": "25/Harrier-pied-20141115-NL.jpg", "description": "Adult male", "copyright": "Chaiyan Kasorndorkbua", "website": ""},
{"id": 2503, "tid": 25, "width": 1000, "height": 654, "path": "25/harrier-pied-fem-201403.jpg", "description": "Adult female", "copyright": "Chaiyan Kasorndorkbua", "website": ""},
{"id": 2504, "tid": 25, "width": 1200, "height": 943, "path": "25/fem 20120107 129.JPG", "description": "Adult female", "copyright": "Chaiyan Kasorndorkbua", "website": ""},
{"id": 2505, "tid": 25, "width": 1200, "height": 924, "path": "25/juv-m-20150206-127.jpg", "description": "Juvenile male", "copyright": "Chaiyan Kasorndorkbua", "website": ""},
{"id": 2506, "tid": 25, "width": 1200, "height": 800, "path": "25/juv m 20090111 128.JPG", "description": "Juvenile male", "copyright": "Worawat Muthuwan", "website": ""},
{"id": 2507, "tid": 25, "width": 1000, "height": 735, "path": "25/juv-fem-20131222-125.jpg", "description": "Juvenile female", "copyright": "Chaiyan Kasorndorkbua", "website": ""},

{"id": 2701, "tid": 27, "width": 1000, "height": 794, "path": "27/m-wiroj.jpg", 
"description": "Adult male ตัวผู้", 
"copyright": "Wiroj Onganumkum", "website": ""},
{"id": 2702, "tid": 27, "width": 777, "height": 650, "path": "27/shikra-m-20151002-samui1.jpg", 
"description": "Adult male ตัวผู้", 
"copyright": "Phichit Bhumadhana", "website": ""},
{"id": 2703, "tid": 27, "width": 1000, "height": 667, "path": "27/shikra-m-20151002-samui2.jpg", 
"description": "Adult male ตัวผู้", 
"copyright": "Phichit Bhumadhana", "website": ""},
{"id": 2704, "tid": 27, "width": 777, "height": 650, "path": "27/3-4cy-m-oct-wiroj.jpg", 
"description": "3rd-4th calendar-year Subadult Male วัยรุ่นปีที่ 3หรือ 4 ตัวผู้", 
"copyright": "Wiroj Onganumkum", "website": ""},
{"id": 2705, "tid": 27, "width": 1000, "height": 799, "path": "27/shikra-f-201509-Krieng-Meemano.jpg", 
"description": "Adult female ตัวเมีย", 
"copyright": "Krieng meemano", "website": ""},
{"id": 2706, "tid": 27, "width": 1000, "height": 763, "path": "27/shikra-fem.jpg", 
"description": "Adult female ตัวเมีย", 
"copyright": "Chaiyan Kasorndorkbua", "website": ""},
{"id": 2707, "tid": 27, "width": 811, "height": 666, "path": "27/shikra-juv-m-20150919-KPS-arb.jpg", 
"description": "Juvenileวัยเด็ก", 
"copyright": "Chamnan Phanthong", "website": ""},
{"id": 2708, "tid": 27, "width": 1000, "height": 789, "path": "27/shikra-juvDSC_8793.jpg", 
"description": "Juvenileวัยเด็ก", 
"copyright": "Chaiyan Kasorndorkbua", "website": ""},
{"id": 2709, "tid": 27, "width": 1000, "height": 764, "path": "27/poliopsis-j-sumate-octIMG_1211.jpg", 
"description": "Juvenileวัยเด็ก", 
"copyright": "Sumate Thitiphuree", "website": ""},

{"id": 2801, "tid": 28, "width": 762, "height": 614, "path": "28/chin-m-20131001-018.jpg", "description": "Adult male ตัวผู้", "copyright": "Chaiyan Kasorndorkbua", "website": ""},
{"id": 2802, "tid": 28, "width": 1000, "height": 742, "path": "28/male-perch-wiroj.jpg", "description": "Adult male ตัวผู้", "copyright": "Wiroj Onganunkun", "website": ""},
{"id": 2803, "tid": 28, "width": 1000, "height": 726, "path": "28/chinese-fem-underW.jpg", "description": "Adult female ตัวเมีย", "copyright": "Chaiyan Kasorndorkbua", "website": ""},
{"id": 2804, "tid": 28, "width": 1000, "height": 749, "path": "28/chin-fem-20131001-020.jpg", "description": "Adult female ตัวเมีย", "copyright": "Chaiyan Kasorndorkbua", "website": ""},
{"id": 2805, "tid": 28, "width": 1000, "height": 773, "path": "28/chinese-fem.jpg", "description": "Adult female ตัวเมีย", "copyright": "Wiroj Onganunkun", "website": ""},
{"id": 2806, "tid": 28, "width": 1000, "height": 748, "path": "28/chinese-m-2cy.jpg", "description": "Second calendar-year subadult Male วัยรุ่น ปีที่สอง ตัวผู้", "copyright": "Chaiyan Kasorndorkbua", "website": ""},
{"id": 2807, "tid": 28, "width": 1000, "height": 787, "path": "28/chin-m-2cy-20131001-flight.jpg", "description": "Second calendar-year subadult Male วัยรุ่น ปีที่สอง ตัวผู้", "copyright": "Chaiyan Kasorndorkbua", "website": ""},
{"id": 2808, "tid": 28, "width": 1000, "height": 764, "path": "28/chinese-juv.jpg", "description": "Juvenile วัยเด็ก", "copyright": "Chaiyan Kasorndorkbua", "website": ""},
{"id": 2809, "tid": 28, "width": 1000, "height": 751, "path": "28/chinese-juv-underW.jpg", "description": "Juvenile วัยเด็ก", "copyright": "Chaiyan Kasorndorkbua", "website": ""},
{"id": 2810, "tid": 28, "width": 1000, "height": 803, "path": "28/chin-juv-20131001-019.jpg", "description": "Juvenile วัยเด็ก", "copyright": "Chaiyan Kasorndorkbua", "website": ""},
{"id": 2901, "tid": 29, "width": 1000, "height": 763, "path": "29/jap-m-Prapoj.jpg", "description": "Adult male ตัวผู้", "copyright": "Prapoj Rukruenreang  ", "website": ""},
{"id": 2902, "tid": 29, "width": 1000, "height": 717, "path": "29/sparrowhawk-japanese-male-flight.jpg-upperwing.jpg", "description": "Adult male ตัวผู้", "copyright": "Chaiyan Kasorndorkbua", "website": ""},
{"id": 2903, "tid": 29, "width": 1000, "height": 767, "path": "29/jap-fem-underW.jpg", "description": "Adult female ตัวเมีย", "copyright": "Chaiyan Kasorndorkbua", "website": ""},
{"id": 2904, "tid": 29, "width": 1000, "height": 734, "path": "29/jap-juv.jpg", "description": "Juvenile วัยเด็ก", "copyright": "Chaiyan Kasorndorkbua", "website": ""},
{"id": 3401, "tid": 34, "width": 1000, "height": 766, "path": "34/grey-faced-m.jpg", "description": "Adult male ตัวผู้", "copyright": "Chaiyan Kasorndorkbua", "website": ""},
{"id": 3402, "tid": 34, "width": 1000, "height": 734, "path": "34/grey-faced-m-flight.jpg", "description": "Adult male ตัวผู้", "copyright": "Chaiyan Kasorndorkbua", "website": ""},
{"id": 3403, "tid": 34, "width": 906, "height": 682, "path": "34/grey-faced-m-upperW-prapoj-r.jpg", "description": "Adult male ตัวผู้", "copyright": "Prapoj Rukruenreang", "website": ""},
{"id": 3404, "tid": 34, "width": 1000, "height": 830, "path": "34/grey-faced-fem-perch.jpg", "description": "Adult female ตัวเมีย", "copyright": "Chaiyan Kasorndorkbua", "website": ""},
{"id": 3405, "tid": 34, "width": 637, "height": 643, "path": "34/grey-faced-juv.jpg", "description": "Juvenile วัยเด็ก", "copyright": "Chaiyan Kasorndorkbua", "website": ""},
		];

    callLater(successCallback);

}
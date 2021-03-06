$(function () {
    $('#mapContainer').highcharts('Map', {
        chart: {
            backgroundColor: 'none',
            spacing: [0, 0, 0, 0]
        },
        credits: {
            enabled: false,
        },
        title: {
            text: '',
            floating: true,
        },
        legend: {
            enabled: false,
        },
        series: [
            {
                dataLabels: {
                    enabled: true,
                    color: 'white',
                    format: '{point.name}',
                    style: {
                        "textShadow": "0",
                    }
                },
                tooltip: {
                    headerFormat: '',
                },
                "type": "map",
                "data": [
                    {
                        "name": "Województwo dolnośląskie",
                        "color": "#306d32",
                        "path": "M93,-758,92,-767,110,-782,126,-810,130,-828,135,-833,137,-847,147,-877,137,-890,139,-898,143,-898,147,-905,156,-906,161,-912,170,-913,179,-920,183,-914,192,-914,200,-903,207,-912,206,-920,212,-923,215,-933,235,-928,249,-915,251,-903,276,-934,295,-938,301,-958,299,-967,311,-976,327,-983,330,-988,349,-989,359,-979,357,-971,369,-970,375,-951,398,-982,429,-978,440,-967,441,-947,464,-930,469,-915,529,-910,540,-926,572,-928,595,-910,603,-898,597,-889,591,-889,593,-859,622,-859,629,-854,622,-848,621,-838,628,-831,624,-813,626,-803,636,-797,602,-791,590,-795,584,-785,588,-766,577,-763,577,-744,560,-738,556,-723,546,-732,539,-722,549,-714,528,-699,533,-692,519,-689,527,-678,519,-675,516,-645,500,-644,480,-629,480,-616,473,-604,459,-613,451,-606,443,-603,452,-591,447,-583,464,-568,467,-555,463,-546,447,-546,439,-537,427,-543,424,-533,406,-516,378,-534,381,-547,370,-560,372,-569,360,-582,355,-603,345,-610,333,-606,328,-625,334,-637,345,-632,350,-641,373,-647,358,-673,341,-679,331,-670,322,-676,314,-669,296,-666,294,-681,290,-692,281,-685,271,-684,278,-699,269,-710,256,-712,201,-739,187,-732,191,-748,182,-754,174,-757,176,-772,186,-781,175,-789,160,-788,160,-796,152,-794,148,-801,132,-803,131,-796,137,-791,137,-777,127,-764,122,-771,103,-771,103,-761z"
                    },
                    {
                        "name": "Województwo opolskie",
                        "color": "#b2f52b",
                        "events": {
                            "click": function(){
                                $('#mapContainer').hide({
                                    duration: 2000,
                                    complete: function(){
                                        $('#mapDetails').show({ duration: 2000 });
                                    }    
                                });
                            },
                        },
                        "path": "M462,-598,452,-605,460,-611,474,-602,481,-615,481,-628,500,-642,517,-644,520,-674,530,-677,521,-688,536,-692,530,-699,552,-715,541,-723,546,-730,556,-721,561,-737,578,-743,578,-762,590,-765,586,-784,590,-794,602,-790,638,-796,633,-774,654,-769,677,-780,699,-780,726,-770,750,-756,757,-768,769,-754,783,-734,773,-723,766,-718,770,-703,770,-685,748,-671,754,-657,738,-648,744,-631,755,-620,757,-603,745,-600,725,-606,735,-579,716,-587,717,-562,709,-550,717,-537,716,-520,696,-519,687,-507,654,-506,646,-494,644,-481,641,-477,644,-461,623,-467,622,-462,613,-461,607,-469C607,-469,598,-472,598,-473,598,-473,592,-489,592,-489L585,-499,571,-505,570,-516,591,-521,598,-529,592,-556,581,-545,575,-549,576,-548,551,-543C551,-543,527,-549,527,-551,528,-552,529,-567,529,-567L519,-571,514,-569,506,-572,507,-584,498,-591,486,-592,474,-598z"
                    },
                    {
                        "name": "Województwo śląskie",
                        "color": "#67ab3e",
                        "events": {
                            "click": function(){
                                $('#mapContainer').hide({
                                    duration: 2000,
                                    complete: function(){
                                        $('#mapDetails').show({ duration: 2000 });
                                    }    
                                });
                            },
                        },
                        "path": "M784,-734,810,-750,818,-736,823,-752,849,-737,872,-711,881,-718,880,-730,891,-733,906,-719,917,-702,921,-685,937,-689,953,-679,972,-672,981,-666,976,-657,972,-647,961,-648,962,-636,983,-622,983,-614,996,-610,971,-590,986,-580,1000,-567,987,-565,977,-555,955,-556,936,-547,917,-551,910,-542,909,-528,893,-529,876,-521,897,-501,880,-483,866,-475,863,-468,843,-450,839,-430,851,-420,843,-399,861,-396,866,-385,874,-374,891,-372,891,-359,883,-347,882,-343,893,-342,888,-321,877,-318,868,-305,851,-306,840,-283,829,-277,815,-278,808,-274,795,-271,809,-288,799,-299,788,-333,775,-341,779,-355,770,-365,766,-360,743,-374,739,-390,740,-404,751,-414,745,-429,735,-425,707,-440,693,-434,677,-455,657,-459,654,-479,646,-480,647,-493,655,-505,690,-506,696,-518,717,-519,718,-537,711,-550,718,-562,717,-585,737,-577,728,-604,745,-598,758,-602,756,-621,745,-633,740,-647,756,-657,750,-671,771,-684,772,-704,768,-717,775,-722z"
                    },
                    {
                        "name": "Moravskoslezky",
                        "color": "#fff25b",
                        "events": {
                            "click": function(){
                                $('#mapContainer').hide({
                                    duration: 2000,
                                    complete: function(){
                                        $('#mapDetails').show({ duration: 2000 });
                                    }    
                                });
                            },
                        },
                        "path": "M674,-313,664,-313,655,-316,650,-320,642,-324,634,-323,618,-322,617,-328,610,-331,604,-341,597,-338,598,-347,581,-372,576,-370,569,-376,570,-386,575,-390,562,-398,559,-397,552,-390,543,-400,536,-431,530,-430,531,-419,525,-419,519,-412,511,-419,520,-427,510,-432,496,-422,487,-422,489,-432,482,-428,478,-439,484,-447,481,-453,488,-456,482,-468,498,-491,496,-503,506,-517,529,-530,537,-530,538,-546,550,-541,576,-547,580,-542,591,-553,597,-531,591,-523,568,-518,570,-504,584,-498,591,-488,596,-472,606,-467,612,-460,622,-461,625,-465,645,-459,643,-476,646,-480,653,-478,656,-458,676,-454,693,-432,707,-437,735,-424,744,-427,749,-414,737,-403,737,-389,742,-372,766,-358,770,-363,777,-355,773,-339,786,-332,793,-312,777,-320,756,-310,717,-322,716,-315,717,-306,689,-285,681,-297,677,-305z"
                    },
                    {
                        "name": "Olomoucky",
                        "color": "#fd8900",
                        "path": "M592,-327,583,-322,584,-316,581,-310,576,-306,568,-306,564,-313,552,-312,557,-302,554,-297,544,-296,542,-301,529,-301,529,-295,522,-286,521,-294,509,-299,505,-307,498,-301,497,-297,499,-291,500,-286,493,-285,488,-277,476,-278,467,-276,462,-269,459,-276,459,-286,455,-291,447,-294,443,-299,448,-309,436,-314,434,-323,430,-335,421,-339C421,-339,412,-334,412,-333,412,-332,421,-328,421,-328L421,-319,409,-309,401,-312,401,-320,404,-324,400,-336,403,-345,408,-350,401,-354,395,-355,396,-364,404,-365,403,-369,406,-367,409,-378,409,-389,418,-395,416,-403,409,-406,411,-411,404,-430,402,-446,408,-448,404,-475,398,-483,410,-482,420,-490,422,-498,425,-518,436,-532,438,-536,440,-536,447,-544,463,-544,469,-554,465,-569,449,-583,454,-592,445,-602,453,-603,462,-598,474,-597,485,-591,498,-590,505,-584,505,-571,513,-568,519,-569,527,-565,527,-551,536,-546,536,-531,529,-532,506,-519,494,-504,496,-492,480,-468,487,-457,480,-454,482,-448,476,-439,482,-426,488,-430,486,-421,496,-421,510,-430,518,-427,510,-419,520,-410,526,-418,532,-419,532,-429,534,-430,542,-399,553,-389,562,-397,573,-390,569,-386,568,-375,577,-368,581,-370,597,-347,596,-336,604,-339,609,-330,603,-322z"
                    },
                    {
                        "name": "Pardubicky",
                        "color": "#ef3a1f",
                        "path": "M249,-410,237,-419,219,-440,213,-449,194,-454,179,-465,180,-475,190,-493,177,-500,177,-507,160,-517,161,-524,168,-525,167,-538,173,-540,182,-536,190,-540,196,-547,221,-538,233,-543,239,-550,242,-546,243,-538,259,-541,263,-544,278,-539,283,-521,298,-518,306,-507,334,-504,338,-514,343,-520,357,-522,362,-531,373,-528,378,-530,406,-513,426,-532,429,-541,436,-537,424,-519,419,-491,410,-484,395,-484,403,-475,406,-448,400,-446,403,-428,410,-412,407,-406,414,-402,416,-396,409,-390,406,-369,391,-375,377,-381,365,-382,360,-369,339,-376,329,-369,323,-385,308,-388,304,-398,263,-422z"
                    },
                    {
                        "name": "Kralovehradecky",
                        "color": "#acbcdd",
                        "path": "M177,-543,168,-548,163,-548,161,-554,174,-568,168,-573,171,-583,167,-592,157,-590,148,-594,139,-594,139,-605,125,-617,138,-631,134,-639,132,-654,137,-659,153,-650,163,-657,176,-649,184,-641,192,-647,189,-653,197,-657,203,-651,227,-651,218,-665,223,-673,217,-680C217,-680,223,-688,223,-689,223,-691,217,-720,217,-720L216,-730,256,-710,268,-707,276,-699,270,-683,279,-682,290,-688,293,-679,294,-664,316,-668,323,-673,332,-667,342,-676,356,-671,369,-649,347,-642,345,-634,333,-639,326,-624,333,-604,345,-608,353,-602,360,-580,371,-570,369,-557,379,-547,377,-533,376,-530,372,-530,363,-533,357,-524,343,-522,338,-516,334,-506,306,-509,299,-519,285,-522,279,-541,263,-546,259,-543,244,-539,244,-547,239,-553,233,-544,222,-540,197,-549,189,-542,183,-538z"
                    },
                    {
                        "name": "Liberecky",
                        "color": "#f28773",
                        "path": "M0,-713,12,-732,18,-741,22,-754,30,-757,45,-752,50,-768,65,-768,68,-759,84,-750,93,-758,104,-761,105,-769,120,-768,127,-761,138,-776,139,-791,133,-796,134,-801,147,-799,152,-792,159,-794,158,-787,175,-787,183,-781,174,-773,172,-756,182,-752,189,-748,186,-729,202,-737,215,-731,222,-690,216,-680,222,-674,217,-665,225,-652,204,-652,197,-659,187,-654,191,-648,184,-643,177,-651,163,-659,154,-652,135,-662,130,-671,115,-685,100,-692,83,-671,70,-677,61,-662,42,-657,33,-665C33,-665,17,-667,18,-668,18,-669,0,-713,0,-713z"
                    }
                ]
            }
        ]
    });

    $('#mapDetailsContent').highcharts('Map', {
        chart: {
            backgroundColor: 'none',
            spacing: [10, 0, 0, 0]
        },
        credits: {
            enabled: false,
        },
        title: {
            text: 'Euroregion Silesia',
            floating: false,
        },
        legend: {
            enabled: false,
        },
        series: [
        {
            dataLabels: {
                    enabled: true,
                    color: 'white',
                    format: '{point.name}',
                    style: {
                        "textShadow": "0",
                    }
                },
                tooltip: {
                    headerFormat: '',
                },
            "type": "map",
            "data": [
                {
                    "name": "powiat głubczycki",
                    "color": "#dc214c",
                    "events": {
                        "click": function(){
                            location.href = '/?stateId=8&regionId=5';
                        },
                    },
                    "path": "M166,754,199,721,180,660,258,617,261,668,295,663,319,692,319,758,356,760,359,796,430,819,394,868,390,924,378,940,383,1004,298,979,290,1002,255,1004,230,973,193,960,174,896,142,846,82,823,79,775z"
                },
                {
                    "name": "powiat raciborski",
                    "color": "#dc214c",
                    "events": {
                        "click": function(){
                            location.href = '/?stateId=12&regionId=1';
                        },
                    },
                    "path": "M394,925,400,869,437,817,564,820,601,767,681,760,721,805,735,846,710,861,691,858,676,873,612,879,602,916,646,945,635,959,620,965,599,971,577,971,580,997,647,1097,586,1115,521,1034,438,1015,424,930z"
                },
                {
                    "name": "powiat rybnicki",
                    "color": "#dc214c",
                    "events": {
                        "click": function(){
                            location.href = '/?stateId=12&regionId=2';
                        },
                    },
                    "path": "M737,850,749,870,777,862,786,844,840,840,858,848,882,825,903,856,886,866,867,869,865,892,856,885,838,900,820,893,802,895,820,916,830,945,824,976,809,982,807,1010,796,1045,762,993,737,991,700,935,654,945,607,914,615,884,677,877,691,864,708,867z"
                },
                {
                    "name": "Miasto Rybnik",
                    "color": "#dc214c",
                    "events": {
                        "click": function(){
                            location.href = '/?stateId=12&regionId=2';
                        },
                    },
                    "path": "M748,936,762,923,788,925,789,959,775,972,746,965z"
                },
                {
                    "name": "Miasto Żory",
                    "color": "#dc214c",
                    "events": {
                        "click": function(){
                            location.href = '/?stateId=12&regionId=4';
                        },
                    },
                    "path": "M799,1051,812,1012,814,986,829,978,880,978,910,1003,911,1023,923,1061,900,1069,880,1053,847,1061,828,1041z"
                },
                {
                    "name": "powiat wodzisławski",
                    "color": "#dc214c",
                    "events": {
                        "click": function(){
                            location.href = '/?stateId=12&regionId=3';
                        },
                    },
                    "path": "M783,1142,762,1153,654,1098,584,996,581,975,599,976,638,964,652,949,698,940,734,993,758,997,794,1052,745,1079z"
                },
                {
                    "name": "Miasto Opava",
                    "color": "#dc214c",
                    "path": "M138,963,190,964,226,977,254,1010,292,1007,301,985,390,1010,383,943,393,929,420,935,433,1017,516,1039,584,1121,574,1151,507,1180,496,1193,450,1170,425,1208,408,1241,386,1218,358,1239,321,1213,283,1262,191,1273,154,1311,98,1301,44,1262,34,1271,0,1218,38,1159,59,1095,102,1087,152,1055,119,1017,151,993z"
                },
                {
                    "name": "Miasto Ostrava",
                    "color": "#dc214c",
                    "path": "M438,1279,447,1244,444,1242,438,1218,428,1211,452,1175,497,1198,510,1184,577,1153,588,1124,585,1176,605,1195,606,1248,599,1284,566,1284,553,1324,510,1329z"
                },
                {
                    "name": "Miasto Novy Jicin",
                    "color": "#dc214c",
                    "path": "M197,1511,199,1475,125,1370,106,1380,77,1356,82,1317,97,1306,155,1316,193,1277,286,1265,322,1220,358,1244,386,1223,409,1247,427,1214,434,1221,439,1243,443,1245,432,1281,465,1303,451,1327,471,1402,477,1471,516,1528,490,1556,509,1617,471,1616,431,1604,404,1580,383,1569,281,1578,276,1553,247,1540,223,1498z"
                },
//                {
//                    "name": "Miasto Karvina",
//                    "color": "#dc214c",
//                    "path": "M610,1248,610,1193,589,1173,591,1117,649,1100,761,1159,803,1138,827,1201,777,1244,776,1298,794,1369,740,1381,631,1316,642,1289,630,1241z"
//                }
            ]
        }
    ]
    });
});



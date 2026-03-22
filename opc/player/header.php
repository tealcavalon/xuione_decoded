<?php


/*
#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
0   3    JMP/42                    ?0        ?1                   ?0                  	;0	>>1
1   5    ECHO/40                   ?0        1:'<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="stylesheet" href="./css/bootstrap-reboot.min.css">
	<link rel="stylesheet" href="./css/bootstrap-grid.min.css">
	<link rel="stylesheet" href="./css/owl.carousel.min.css">
	<link rel="stylesheet" href="./css/jquery.mcustomscrollbar.min.css">
	<link rel="stylesheet" href="./css/nouislider.min.css">
	<link rel="stylesheet" href="./css/ionicons.min.css">
	<link rel="stylesheet" href="./css/photoswipe.css">
    <link rel="stylesheet" href="./css/glightbox.css">
	<link rel="stylesheet" href="./css/default-skin.css">
    <link rel="stylesheet" href="./css/jBox.all.min.css">
    <link rel="stylesheet" href="./css/select2.min.css">
    <link rel="stylesheet" href="./css/listings.css">
    <link rel="stylesheet" href="./css/main.css">
    <link rel="shortcut icon" href="img/favicon.ico">
	<title>' ?0                  	;0	<<0
2   6    FETCH_STATIC_PROP_R/173   $3=       2:'rSettings'        3:'XUI'             	;0
3   6    FETCH_DIM_R/81            $4=       $3                   5:'server_name'     	;0
4   6    JMP_SET/152               #5=       $4                   ?6                  	;0
5   6    QM_ASSIGN/22              #5=       6:'XUI Web Player'   ?0                  	;0
6   6    ECHO/40                   ?0        #5                   ?0                  	;0
7   7    ECHO/40                   ?0        7:' - '              ?0                  	;0
8   8    ECHO/40                   ?0        16?0                 ?0                  	;0
9   9    ECHO/40                   ?0        8:'</title>
    <style>
    .seasons__cover {
        filter: blur(' ?0                  	;0
10  10   GOTO/253                  ?0        ?73                  ?9                  	;0
11  12   ECHO/40                   ?0        10:'>Live TV</option>
                                <option value="movies"' ?0                  	;0
12  13   INIT_FCALL_BY_NAME/59     ?0        ?0                   11:'in_array'       	;2
13  13   SEND_VAR_EX/66            ?80       16?1                 ?1                  	;0
14  13   SEND_VAL_EX/116           ?96       13:array (
  0 => 'movies',
  1 => 'movie',
) ?2                  	;0
15  13   DO_FCALL_BY_NAME/131      $6=       ?0                   ?0                  	;0
16  13   BOOL_NOT/13               #7=       $6                   ?0                  	;0
17  13   JMPZ/43                   ?0        #7                   ?19                 	;0	>>19
18  14   GOTO/253                  ?0        ?20                  ?14                 	;0
19  16   ECHO/40                   ?0        15:' selected'       ?0                  	;0	<<17
20  18   ECHO/40                   ?0        16:'>Movies</option>
                                <option value="series"' ?0                  	;0
21  19   GOTO/253                  ?0        ?64                  ?17                 	;0
22  21   INIT_FCALL_BY_NAME/59     ?0        ?0                   18:'intval'         	;1
23  21   FETCH_STATIC_PROP_FUNC_ARG/177 $8=       20:'rSettings'       21:'XUI'            	;1
24  21   FETCH_DIM_FUNC_ARG/93     $9=       $8                   23:'player_opacity' 	;1
25  21   SEND_VAR_EX/66            ?80       $9                   ?1                  	;0
26  21   DO_FCALL_BY_NAME/131      $10=      ?0                   ?0                  	;0
27  21   JMP_SET/152               #11=      $10                  ?29                 	;0
28  21   QM_ASSIGN/22              #11=      24:10                ?0                  	;0
29  21   ECHO/40                   ?0        #11                  ?0                  	;0
30  22   ECHO/40                   ?0        25:'%;
    }
    </style>
</head>
<body class="body">
	<header class="header">
        <div class="navbar-overlay bg-animate"></div>
		<div class="header__wrap">
			<div class="container">
				<div class="row">
					<div class="col-12">
						<div class="header__content">
							<a class="header__logo" href="index.php">
								<img src="img/logo.png" alt="" height="48px">
							</a>
							<ul class="header__nav">
								<li class="header__nav-item">
									<a href="./index.php" class="header__nav-link' ?0                  	;0
31  23   IS_EQUAL/17               #12=      16?1                 26:'index'          	;0
32  23   BOOL_NOT/13               #13=      #12                  ?0                  	;0
33  23   JMPZ/43                   ?0        #13                  ?35                 	;0	>>35
34  24   GOTO/253                  ?0        ?36                  ?27                 	;0
35  26   ECHO/40                   ?0        28:' header__nav-link--active' ?0                  	;0	<<33
36  28   GOTO/253                  ?0        ?115                 ?29                 	;0
37  31   ECHO/40                   ?0        30:'">Live TV</a>
								</li>
                                ' ?0                  	;0
38  33   ECHO/40                   ?0        31:'								<li class="header__nav-item">
									<a href="./movies.php" class="header__nav-link' ?0                  	;0
39  34   IS_EQUAL/17               #14=      16?1                 32:'movies'         	;0
40  34   BOOL_NOT/13               #15=      #14                  ?0                  	;0
41  34   JMPZ/43                   ?0        #15                  ?43                 	;0	>>43
42  35   GOTO/253                  ?0        ?101                 ?33                 	;0
43  37   GOTO/253                  ?0        ?100                 ?34                 	;0	<<41
44  39   ECHO/40                   ?0        35:'px) !important;
        opacity: ' ?0                  	;0
45  40   INIT_FCALL_BY_NAME/59     ?0        ?0                   36:'intval'         	;1
46  40   FETCH_STATIC_PROP_FUNC_ARG/177 $16=      38:'rSettings'       39:'XUI'            	;1
47  40   FETCH_DIM_FUNC_ARG/93     $17=      $16                  41:'player_opacity' 	;1
48  40   SEND_VAR_EX/66            ?80       $17                  ?1                  	;0
49  40   DO_FCALL_BY_NAME/131      $18=      ?0                   ?0                  	;0
50  40   JMP_SET/152               #19=      $18                  ?52                 	;0
51  40   QM_ASSIGN/22              #19=      42:10                ?0                  	;0
52  40   ECHO/40                   ?0        #19                  ?0                  	;0
53  41   ECHO/40                   ?0        43:'%;
    }
    .home__bg {
        filter: blur(' ?0                  	;0
54  42   INIT_FCALL_BY_NAME/59     ?0        ?0                   44:'intval'         	;1
55  42   FETCH_STATIC_PROP_FUNC_ARG/177 $20=      46:'rSettings'       47:'XUI'            	;1
56  42   FETCH_DIM_FUNC_ARG/93     $21=      $20                  49:'player_blur'    	;1
57  42   SEND_VAR_EX/66            ?80       $21                  ?1                  	;0
58  42   DO_FCALL_BY_NAME/131      $22=      ?0                   ?0                  	;0
59  42   JMP_SET/152               #23=      $22                  ?61                 	;0
60  42   QM_ASSIGN/22              #23=      50:0                 ?0                  	;0
61  42   ECHO/40                   ?0        #23                  ?0                  	;0
62  43   ECHO/40                   ?0        51:'px) !important;
        opacity: ' ?0                  	;0
63  44   GOTO/253                  ?0        ?22                  ?52                 	;0
64  46   INIT_FCALL_BY_NAME/59     ?0        ?0                   53:'in_array'       	;2
65  46   SEND_VAR_EX/66            ?80       16?1                 ?1                  	;0
66  46   SEND_VAL_EX/116           ?96       55:array (
  0 => 'series',
  1 => 'episodes',
) ?2                  	;0
67  46   DO_FCALL_BY_NAME/131      $24=      ?0                   ?0                  	;0
68  46   BOOL_NOT/13               #25=      $24                  ?0                  	;0
69  46   JMPZ/43                   ?0        #25                  ?71                 	;0	>>71
70  47   GOTO/253                  ?0        ?72                  ?56                 	;0
71  49   ECHO/40                   ?0        57:' selected'       ?0                  	;0	<<69
72  51   GOTO/253                  ?0        ?140                 ?58                 	;0
73  53   INIT_FCALL_BY_NAME/59     ?0        ?0                   59:'intval'         	;1
74  53   FETCH_STATIC_PROP_FUNC_ARG/177 $26=      61:'rSettings'       62:'XUI'            	;1
75  53   FETCH_DIM_FUNC_ARG/93     $27=      $26                  64:'player_blur'    	;1
76  53   SEND_VAR_EX/66            ?80       $27                  ?1                  	;0
77  53   DO_FCALL_BY_NAME/131      $28=      ?0                   ?0                  	;0
78  53   JMP_SET/152               #29=      $28                  ?80                 	;0
79  53   QM_ASSIGN/22              #29=      65:0                 ?0                  	;0
80  53   ECHO/40                   ?0        #29                  ?0                  	;0
81  54   ECHO/40                   ?0        66:'px) !important;
        opacity: ' ?0                  	;0
82  55   INIT_FCALL_BY_NAME/59     ?0        ?0                   67:'intval'         	;1
83  55   FETCH_STATIC_PROP_FUNC_ARG/177 $30=      69:'rSettings'       70:'XUI'            	;1
84  55   FETCH_DIM_FUNC_ARG/93     $31=      $30                  72:'player_opacity' 	;1
85  55   SEND_VAR_EX/66            ?80       $31                  ?1                  	;0
86  55   DO_FCALL_BY_NAME/131      $32=      ?0                   ?0                  	;0
87  55   JMP_SET/152               #33=      $32                  ?89                 	;0
88  55   QM_ASSIGN/22              #33=      73:10                ?0                  	;0
89  55   ECHO/40                   ?0        #33                  ?0                  	;0
90  56   ECHO/40                   ?0        74:'%;
    }
    .details__bg {
        filter: blur(' ?0                  	;0
91  57   INIT_FCALL_BY_NAME/59     ?0        ?0                   75:'intval'         	;1
92  57   FETCH_STATIC_PROP_FUNC_ARG/177 $34=      77:'rSettings'       78:'XUI'            	;1
93  57   FETCH_DIM_FUNC_ARG/93     $35=      $34                  80:'player_blur'    	;1
94  57   SEND_VAR_EX/66            ?80       $35                  ?1                  	;0
95  57   DO_FCALL_BY_NAME/131      $36=      ?0                   ?0                  	;0
96  57   JMP_SET/152               #37=      $36                  ?98                 	;0
97  57   QM_ASSIGN/22              #37=      81:0                 ?0                  	;0
98  57   ECHO/40                   ?0        #37                  ?0                  	;0
99  58   GOTO/253                  ?0        ?44                  ?82                 	;0
100 60   ECHO/40                   ?0        83:' header__nav-link--active' ?0                  	;0
101 62   ECHO/40                   ?0        84:'">Movies</a>
								</li>
                                <li class="header__nav-item">
									<a href="./series.php" class="header__nav-link' ?0                  	;0
102 63   IS_EQUAL/17               #38=      16?1                 85:'series'         	;0
103 63   BOOL_NOT/13               #39=      #38                  ?0                  	;0
104 63   JMPZ/43                   ?0        #39                  ?106                	;0	>>106
105 64   GOTO/253                  ?0        ?108                 ?86                 	;0
106 66   ECHO/40                   ?0        87:' header__nav-link--active' ?0                  	;0	<<104
107 67   GOTO/253                  ?0        ?108                 ?88                 	;0
108 70   ECHO/40                   ?0        89:'">TV Series</a>
								</li>
							</ul>
							<div class="header__auth">
								<button class="header__search-btn" type="button">
									<i class="icon ion-ios-search"></i>
								</button>
                                <a href="profile.php">
                                    <button class="header__signout-btn" type="button">
                                        <i class="icon ion-ios-person"></i>
                                    </button>
                                </a>
							</div>
							<button class="header__btn" type="button">
								<span></span>
								<span></span>
								<span></span>
							</button>
						</div>
					</div>
				</div>
			</div>
		</div>
		<form action="index" class="header__search" method="POST">
			<div class="container">
				<div class="row">
					<div class="col-12">
						<div class="header__search-content">
							<input name="search" id="search__input" type="text" placeholder="Search...">
                            <select name="type" id="search__select">
                                <option value="live"' ?0                  	;0
109 71   IS_EQUAL/17               #40=      16?1                 90:'live'           	;0
110 71   BOOL_NOT/13               #41=      #40                  ?0                  	;0
111 71   JMPZ/43                   ?0        #41                  ?113                	;0	>>113
112 72   GOTO/253                  ?0        ?114                 ?91                 	;0
113 74   ECHO/40                   ?0        92:' selected'       ?0                  	;0	<<111
114 76   GOTO/253                  ?0        ?11                  ?93                 	;0
115 78   ECHO/40                   ?0        94:'">Home</a>
								</li>
                                ' ?0                  	;0
116 79   FETCH_CONSTANT/99         #42=      ?0                   95:'PLATFORM'       	;16
117 79   IS_NOT_EQUAL/18           #43=      #42                  98:'xui'            	;0
118 79   JMPNZ_EX/47               #43=      #43                  ?130                	;0	>>130
119 79   INIT_FCALL_BY_NAME/59     ?0        ?0                   99:'in_array'       	;2
120 79   SEND_VAL_EX/116           ?80       101:1                ?1                  	;0
121 79   FETCH_DIM_FUNC_ARG/93     $44=      16?2                 102:'allowed_outputs'	;2
122 79   SEND_VAR_EX/66            ?96       $44                  ?2                  	;0
123 79   DO_FCALL_BY_NAME/131      $45=      ?0                   ?0                  	;0
124 79   JMPZ_EX/46                #46=      $45                  ?129                	;0	>>129
125 79   FETCH_STATIC_PROP_R/173   $47=      103:'rSettings'      104:'XUI'           	;0
126 79   FETCH_DIM_R/81            $48=      $47                  106:'disable_hls'   	;0
127 79   BOOL_NOT/13               #49=      $48                  ?0                  	;0
128 79   BOOL/52                   #46=      #49                  ?0                  	;0
129 79   BOOL/52                   #43=      #46                  ?0                  	;0	<<124
130 79   BOOL_NOT/13               #50=      #43                  ?0                  	;0	<<118
131 79   JMPZ/43                   ?0        #50                  ?133                	;0	>>133
132 80   GOTO/253                  ?0        ?38                  ?107                	;0
133 82   ECHO/40                   ?0        108:'								<li class="header__nav-item">
									<a href="./live.php" class="header__nav-link' ?0                  	;0	<<131
134 83   IS_EQUAL/17               #51=      16?1                 109:'live'          	;0
135 83   BOOL_NOT/13               #52=      #51                  ?0                  	;0
136 83   JMPZ/43                   ?0        #52                  ?138                	;0	>>138
137 84   GOTO/253                  ?0        ?37                  ?110                	;0
138 86   ECHO/40                   ?0        111:' header__nav-link--active' ?0                  	;0	<<136
139 87   GOTO/253                  ?0        ?37                  ?112                	;0
140 89   ECHO/40                   ?0        113:'>TV Series</option>
                            </select>
							<button type="button" id="search__button">
                                <strong><i class="icon ion-ios-search"></i></strong>
                            </button>
						</div>
					</div>
				</div>
			</div>
		</form>
	</header>' ?0                  	;0
141 90   NOP/0                     ?0        114:1                ?0                  	;4294967295
*/

?>
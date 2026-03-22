<?php


/*
#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
0   3    JMP/42                    ?0        ?376                 ?0                  	;0	>>376
1   5    INIT_METHOD_CALL/112      ?0        16?1                 1:'num_rows'        	;0
2   5    DO_FCALL/60               $17=      ?0                   ?0                  	;0
3   5    ASSIGN_ADD/23             ?1        16?0                 $17                 	;0
4   6    INIT_METHOD_CALL/112      ?0        16?1                 3:'get_rows'        	;0
5   6    DO_FCALL/60               $19=      ?0                   ?0                  	;0
6   6    FE_RESET_R/77             $20=      $19                  ?11                 	;0
7   6    FE_FETCH_R/78             ?0        $20                  16?2                	;11	>>11	<<10
8   7    ASSIGN_DIM/147            ?4        16?3                 ?4414262            	;0
9   7    OP_DATA/137               ?0        16?2                 ?0                  	;0
10  8    JMP/42                    ?0        ?7                   ?0                  	;0	>>7
11  8    FE_FREE/127               ?0        $20                  ?0                  	;0	<<6
12  12   ECHO/40                   ?0        5:'                        <li class="dropdown notification-list">
                            ' ?0                  	;0
13  13   GOTO/253                  ?0        ?472                 ?6                  	;0
14  15   ECHO/40                   ?0        7:'        <link href="assets/css/bootstrap.css" rel="stylesheet" type="text/css" />
        <link href="assets/css/app.css" rel="stylesheet" type="text/css" />
        <link href="assets/css/listings.css" rel="stylesheet" type="text/css" />
		<link href="assets/css/custom.css" rel="stylesheet" type="text/css" />
		' ?0                  	;0
15  17   ECHO/40                   ?0        8:'        <link href="assets/css/extra.css" rel="stylesheet" type="text/css" />
        ' ?0                  	;0
16  18   FETCH_DIM_R/81            $22=      16?5                 9:'theme'           	;0
17  18   FETCH_DIM_R/81            $23=      16?4                 $22                 	;0
18  18   FETCH_DIM_R/81            $24=      $23                  10:'image'          	;0
19  18   JMPZ/43                   ?0        $24                  ?21                 	;0	>>21
20  19   GOTO/253                  ?0        ?23                  ?11                 	;0
21  21   ECHO/40                   ?0        12:'        <style>
        html, body {
          overflow-x: hidden;
        }
        ' ?0                  	;0	<<19
22  22   GOTO/253                  ?0        ?465                 ?13                 	;0
23  25   ECHO/40                   ?0        14:'        <style>
        body {
            background: url(\'./assets/images/theme/' ?0                  	;0
24  26   INIT_FCALL_BY_NAME/59     ?0        ?0                   15:'basename'       	;1
25  26   FETCH_DIM_R/81            $25=      16?5                 17:'theme'          	;0
26  26   FETCH_DIM_FUNC_ARG/93     $26=      16?4                 $25                 	;1
27  26   FETCH_DIM_FUNC_ARG/93     $27=      $26                  18:'image'          	;1
28  26   SEND_VAR_EX/66            ?80       $27                  ?1                  	;0
29  26   DO_FCALL_BY_NAME/131      $28=      ?0                   ?0                  	;0
30  26   ECHO/40                   ?0        $28                  ?0                  	;0
31  27   ECHO/40                   ?0        19:'\');
        }
        </style>
		' ?0                  	;0
32  29   GOTO/253                  ?0        ?361                 ?20                 	;0
33  31   ECHO/40                   ?0        21:'                                    <li><a href="live_connections">' ?0                  	;0
34  32   FETCH_DIM_R/81            $29=      16?6                 22:'live_connections'	;0
35  32   ECHO/40                   ?0        $29                  ?0                  	;0
36  33   ECHO/40                   ?0        23:'</a></li>
                                    <li><a href="line_activity">' ?0                  	;0
37  34   FETCH_DIM_R/81            $30=      16?6                 24:'activity_logs'  	;0
38  34   ECHO/40                   ?0        $30                  ?0                  	;0
39  35   ECHO/40                   ?0        25:'</a></li>
                                    ' ?0                  	;0
40  36   GOTO/253                  ?0        ?112                 ?26                 	;0
41  38   ECHO/40                   ?0        27:'                                    <li class="has-submenu">
                                        <a href="#">' ?0                  	;0
42  39   FETCH_DIM_R/81            $31=      16?6                 28:'mag_devices'    	;0
43  39   ECHO/40                   ?0        $31                  ?0                  	;0
44  40   ECHO/40                   ?0        29:' <div class="arrow-down"></div></a>
                                        <ul class="submenu">
                                            <li><a href="mag">' ?0                  	;0
45  41   FETCH_DIM_R/81            $32=      16?6                 30:'add_mag'        	;0
46  41   ECHO/40                   ?0        $32                  ?0                  	;0
47  42   ECHO/40                   ?0        31:'</a></li>
                                            ' ?0                  	;0
48  43   GOTO/253                  ?0        ?177                 ?32                 	;0
49  46   ECHO/40                   ?0        33:'                                            <li><a href="enigmas">' ?0                  	;0
50  47   FETCH_DIM_R/81            $33=      16?6                 34:'manage_enigma_devices'	;0
51  47   ECHO/40                   ?0        $33                  ?0                  	;0
52  48   ECHO/40                   ?0        35:'</a></li>
                                        </ul>
                                    </li>
                                    ' ?0                  	;0
53  50   GOTO/253                  ?0        ?81                  ?36                 	;0
54  52   FETCH_DIM_R/81            $34=      16?5                 37:'hue'            	;0
55  52   CONCAT/8                  #35=      38:'-'               $34                 	;0
56  52   ECHO/40                   ?0        #35                  ?0                  	;0
57  54   ECHO/40                   ?0        39:'"></div>
            <div class="navbar-custom" id="topnav-custom">
                <div class="container-fluid">
                    <ul class="list-unstyled topnav-menu float-right mb-0">
                        <li class="dropdown notification-list">
                            <a class="navbar-toggle nav-link">
                                <div class="lines text-white">
                                    <span></span>
                                    <span></span>
                                    <span></span>
                                </div>
                            </a>
                        </li>
                        <li class="dropdown notification-list">
                            <a class="nav-link dropdown-toggle nav-user mr-0 waves-effect text-white" data-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                                <i class="mdi mdi-coin noti-icon"></i>&nbsp;
                                <span id="owner_credits">' ?0                  	;0
58  55   INIT_FCALL_BY_NAME/59     ?0        ?0                   40:'number_format'  	;2
59  55   FETCH_DIM_FUNC_ARG/93     $36=      16?5                 42:'credits'        	;1
60  55   SEND_VAR_EX/66            ?80       $36                  ?1                  	;0
61  55   SEND_VAL_EX/116           ?96       43:0                 ?2                  	;0
62  55   DO_FCALL_BY_NAME/131      $37=      ?0                   ?0                  	;0
63  55   ECHO/40                   ?0        $37                  ?0                  	;0
64  56   ECHO/40                   ?0        44:'</span><i class="mdi mdi-chevron-down"></i>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right profile-dropdown ">
                                <div class="dropdown-item noti-title">
                                    <h5 class="m-0">' ?0                  	;0
65  57   GOTO/253                  ?0        ?308                 ?45                 	;0
66  59   ECHO/40                   ?0        46:'</a></li>
                                        </ul>
                                    </li>
                                    ' ?0                  	;0
67  61   FETCH_DIM_R/81            $38=      16?7                 47:'create_enigma'  	;0
68  61   BOOL_NOT/13               #39=      $38                  ?0                  	;0
69  61   JMPZ/43                   ?0        #39                  ?71                 	;0	>>71
70  62   GOTO/253                  ?0        ?53                  ?48                 	;0
71  64   ECHO/40                   ?0        49:'                                    <li class="has-submenu">
                                        <a href="#">' ?0                  	;0	<<69
72  65   FETCH_DIM_R/81            $40=      16?6                 50:'enigma_devices' 	;0
73  65   ECHO/40                   ?0        $40                  ?0                  	;0
74  66   GOTO/253                  ?0        ?90                  ?51                 	;0
75  68   ECHO/40                   ?0        52:'</a></li>
									' ?0                  	;0
76  69   JMPZ/43                   ?0        16?8                 ?78                 	;0	>>78
77  70   GOTO/253                  ?0        ?79                  ?53                 	;0
78  72   ECHO/40                   ?0        54:'									<li><a href="epg_view">TV Guide</a></li>
									' ?0                  	;0	<<76
79  74   ECHO/40                   ?0        55:'                                </ul>
                            </li>
                            ' ?0                  	;0
80  75   GOTO/253                  ?0        ?352                 ?56                 	;0
81  77   ECHO/40                   ?0        57:'                                </ul>
                            </li>
                            ' ?0                  	;0
82  79   FETCH_DIM_R/81            $41=      16?7                 58:'can_view_vod'   	;0
83  79   BOOL_NOT/13               #42=      $41                  ?0                  	;0
84  79   JMPZ/43                   ?0        #42                  ?86                 	;0	>>86
85  80   GOTO/253                  ?0        ?352                 ?59                 	;0
86  82   ECHO/40                   ?0        60:'                            <li class="has-submenu">
                                <a href="#"> <i class="fas fa-play"></i>' ?0                  	;0	<<84
87  83   FETCH_DIM_R/81            $43=      16?6                 61:'content'        	;0
88  83   ECHO/40                   ?0        $43                  ?0                  	;0
89  84   GOTO/253                  ?0        ?393                 ?62                 	;0
90  86   ECHO/40                   ?0        63:' <div class="arrow-down"></div></a>
                                        <ul class="submenu">
                                            <li><a href="enigma">' ?0                  	;0
91  87   FETCH_DIM_R/81            $44=      16?6                 64:'add_enigma'     	;0
92  87   ECHO/40                   ?0        $44                  ?0                  	;0
93  88   ECHO/40                   ?0        65:'</a></li>
                                            ' ?0                  	;0
94  89   BOOL_NOT/13               #45=      16?9                 ?0                  	;0
95  89   JMPZ/43                   ?0        #45                  ?97                 	;0	>>97
96  90   GOTO/253                  ?0        ?49                  ?66                 	;0
97  92   ECHO/40                   ?0        67:'                                            <li><a href="enigma?trial=1">Generate Trial Device</a></li>
                                            ' ?0                  	;0	<<95
98  93   GOTO/253                  ?0        ?49                  ?68                 	;0
99  96   ECHO/40                   ?0        69:'                                <i class="fe-mail noti-icon"></i>
                                ' ?0                  	;0
100 97   IS_SMALLER/19             #46=      70:0                 16?0                	;0
101 97   BOOL_NOT/13               #47=      #46                  ?0                  	;0
102 97   JMPZ/43                   ?0        #47                  ?104                	;0	>>104
103 98   GOTO/253                  ?0        ?196                 ?71                 	;0
104 100  ECHO/40                   ?0        72:'                                <span class="badge badge-info rounded-circle noti-icon-badge" style="min-width:20px;">' ?0                  	;0	<<102
105 101  IS_SMALLER/19             #48=      16?0                 73:100              	;0
106 101  JMPZ/43                   ?0        #48                  ?109                	;0	>>109
107 101  QM_ASSIGN/22              #49=      16?0                 ?0                  	;0
108 101  JMP/42                    ?0        ?110                 ?0                  	;0	>>110
109 101  QM_ASSIGN/22              #49=      74:'99+'             ?0                  	;0	<<106
110 101  ECHO/40                   ?0        #49                  ?0                  	;0	<<108
111 102  GOTO/253                  ?0        ?195                 ?75                 	;0
112 105  ECHO/40                   ?0        76:'                                    <li><a href="user_logs">User Logs</a></li>
                                </ul>
                            </li>
                        </ul>
                        <div class="clearfix"></div>
                    </div>
                </div>
            </div>
        </header>
        ' ?0                  	;0
113 106  FETCH_DIM_R/81            $50=      16?10                77:'js_navigate'    	;0
114 106  BOOL_NOT/13               #51=      $50                  ?0                  	;0
115 106  JMPZ/43                   ?0        #51                  ?117                	;0	>>117
116 107  GOTO/253                  ?0        ?491                 ?78                 	;0
117 109  ECHO/40                   ?0        79:'        <div id="status">
            <div class="spinner"></div>
        </div>
        ' ?0                  	;0	<<115
118 110  GOTO/253                  ?0        ?491                 ?80                 	;0
119 112  ASSIGN/38                 ?35       16?11                81:array (
)        	;0
120 113  INIT_METHOD_CALL/112      ?0        16?1                 82:'query'          	;3
121 113  SEND_VAL_EX/116           ?80       84:'SELECT `id` FROM `users` WHERE `id` = ? OR `owner_id` = ?;' ?1                  	;0
122 113  FETCH_DIM_FUNC_ARG/93     $53=      16?5                 85:'id'             	;2
123 113  SEND_VAR_EX/66            ?96       $53                  ?2                  	;0
124 113  FETCH_DIM_FUNC_ARG/93     $54=      16?5                 86:'id'             	;3
125 113  SEND_VAR_EX/66            ?112      $54                  ?3                  	;0
126 113  DO_FCALL/60               ?38       ?0                   ?0                  	;0
127 114  INIT_METHOD_CALL/112      ?0        16?1                 87:'get_rows'       	;0
128 114  DO_FCALL/60               $56=      ?0                   ?0                  	;0
129 114  FE_RESET_R/77             $57=      $56                  ?135                	;0
130 114  FE_FETCH_R/78             ?0        $57                  16?2                	;135	>>135	<<134
131 115  FETCH_DIM_R/81            $59=      16?2                 89:'id'             	;0
132 115  ASSIGN_DIM/147            ?41       16?11                ?4414262            	;0
133 115  OP_DATA/137               ?0        $59                  ?0                  	;0
134 116  JMP/42                    ?0        ?130                 ?0                  	;0	>>130
135 116  FE_FREE/127               ?0        $57                  ?0                  	;0	<<129
136 119  INIT_FCALL_BY_NAME/59     ?0        ?0                   90:'count'          	;1
137 119  SEND_VAR_EX/66            ?80       16?11                ?1                  	;0
138 119  DO_FCALL_BY_NAME/131      $60=      ?0                   ?0                  	;0
139 119  IS_SMALLER/19             #61=      92:0                 $60                 	;0
140 119  BOOL_NOT/13               #62=      #61                  ?0                  	;0
141 119  JMPZ/43                   ?0        #62                  ?143                	;0	>>143
142 120  GOTO/253                  ?0        ?12                  ?93                 	;0
143 122  GOTO/253                  ?0        ?441                 ?94                 	;0	<<141
144 124  ECHO/40                   ?0        95:' <div class="arrow-down"></div></a>
                                <ul class="submenu">
                                    ' ?0                  	;0
145 125  FETCH_DIM_R/81            $63=      16?7                 96:'create_line'    	;0
146 125  BOOL_NOT/13               #64=      $63                  ?0                  	;0
147 125  JMPZ/43                   ?0        #64                  ?149                	;0	>>149
148 126  GOTO/253                  ?0        ?332                 ?97                 	;0
149 128  ECHO/40                   ?0        98:'                                    <li class="has-submenu">
                                        <a href="#">' ?0                  	;0	<<147
150 129  FETCH_DIM_R/81            $65=      16?6                 99:'user_lines'     	;0
151 129  ECHO/40                   ?0        $65                  ?0                  	;0
152 130  ECHO/40                   ?0        100:' <div class="arrow-down"></div></a>
                                        <ul class="submenu">
                                            <li><a href="line">' ?0                  	;0
153 131  GOTO/253                  ?0        ?401                 ?101                	;0
154 133  ECHO/40                   ?0        102:'                    <div class="clearfix"></div>
                </div>
            </div>
            <div class="topbar-menu">
                <div class="container-fluid">
                    <div id="navigation">
                        <ul class="navigation-menu">
                            <li class="has-submenu">
                                <a href="dashboard"><i class="fe-activity"></i>' ?0                  	;0
155 134  FETCH_DIM_R/81            $66=      16?6                 103:'dashboard'     	;0
156 134  ECHO/40                   ?0        $66                  ?0                  	;0
157 135  ECHO/40                   ?0        104:'</a>
                            </li>
                            ' ?0                  	;0
158 136  FETCH_DIM_R/81            $67=      16?7                 105:'create_sub_resellers'	;0
159 136  BOOL_NOT/13               #68=      $67                  ?0                  	;0
160 136  JMPZ/43                   ?0        #68                  ?162                	;0	>>162
161 137  GOTO/253                  ?0        ?338                 ?106                	;0
162 139  ECHO/40                   ?0        107:'                            <li class="has-submenu">
                                <a href="#"> <i class="fas fa-users"></i>' ?0                  	;0	<<160
163 140  GOTO/253                  ?0        ?409                 ?108                	;0
164 142  INIT_FCALL_BY_NAME/59     ?0        ?0                   109:'strlen'        	;1
165 142  FETCH_DIM_FUNC_ARG/93     $69=      16?5                 111:'hue'           	;1
166 142  SEND_VAR_EX/66            ?80       $69                  ?1                  	;0
167 142  DO_FCALL_BY_NAME/131      $70=      ?0                   ?0                  	;0
168 142  IS_SMALLER/19             #71=      112:0                $70                 	;0
169 142  BOOL_NOT/13               #72=      #71                  ?0                  	;0
170 142  JMPZ/43                   ?0        #72                  ?172                	;0	>>172
171 143  GOTO/253                  ?0        ?173                 ?113                	;0
172 145  ECHO/40                   ?0        114:' whiteout'      ?0                  	;0	<<170
173 147  ECHO/40                   ?0        115:'">
                                <img src="assets/images/logo-topbar.png" alt="" height="28">
                            </span>
                        </a>
                    </div>
                    ' ?0                  	;0
174 148  JMPZ/43                   ?0        16?8                 ?176                	;0	>>176
175 149  GOTO/253                  ?0        ?440                 ?116                	;0
176 151  GOTO/253                  ?0        ?284                 ?117                	;0	<<174
177 153  BOOL_NOT/13               #73=      16?9                 ?0                  	;0
178 153  JMPZ/43                   ?0        #73                  ?180                	;0	>>180
179 154  GOTO/253                  ?0        ?181                 ?118                	;0
180 156  ECHO/40                   ?0        119:'                                            <li><a href="mag?trial=1">Generate Trial Device</a></li>
                                            ' ?0                  	;0	<<178
181 158  ECHO/40                   ?0        120:'                                            <li><a href="mags">' ?0                  	;0
182 159  FETCH_DIM_R/81            $74=      16?6                 121:'manage_mag_devices'	;0
183 159  ECHO/40                   ?0        $74                  ?0                  	;0
184 160  GOTO/253                  ?0        ?66                  ?122                	;0
185 162  ECHO/40                   ?0        123:'</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="robots" content="noindex,nofollow">
        <link rel="shortcut icon" href="assets/images/favicon.ico">
        <link href="assets/libs/jquery-nice-select/nice-select.css" rel="stylesheet" type="text/css" />
        <link href="assets/libs/switchery/switchery.min.css" rel="stylesheet" type="text/css" />
        <link href="assets/libs/select2/select2.min.css" rel="stylesheet" type="text/css" />
        <link href="assets/libs/datatables/dataTables.bootstrap4.css" rel="stylesheet" type="text/css" />
        <link href="assets/libs/datatables/responsive.bootstrap4.css" rel="stylesheet" type="text/css" />
        <link href="assets/libs/datatables/buttons.bootstrap4.css" rel="stylesheet" type="text/css" />
        <link href="assets/libs/datatables/select.bootstrap4.css" rel="stylesheet" type="text/css" />
        <link href="assets/libs/jquery-toast/jquery.toast.min.css" rel="stylesheet" type="text/css" />
        <link href="assets/libs/bootstrap-touchspin/jquery.bootstrap-touchspin.css" rel="stylesheet" type="text/css" />
        <link href="assets/libs/treeview/style.css" rel="stylesheet" type="text/css" />
        <link href="assets/libs/clockpicker/bootstrap-clockpicker.min.css" rel="stylesheet" type="text/css" />
        <link href="assets/libs/daterangepicker/daterangepicker.css" rel="stylesheet" type="text/css" />
        <link href="assets/libs/nestable2/jquery.nestable.min.css" rel="stylesheet" />
        <link href="assets/libs/magnific-popup/magnific-popup.css" rel="stylesheet" type="text/css" />
        <link href="assets/libs/jbox/jBox.all.min.css" rel="stylesheet" type="text/css" />
		<link href="assets/css/icons.css" rel="stylesheet" type="text/css" />
        <link href="assets/libs/jquery-vectormap/jquery-jvectormap-1.2.2.css" rel="stylesheet" type="text/css" />
        <link href="assets/libs/bootstrap-colorpicker/bootstrap-colorpicker.min.css" rel="stylesheet" type="text/css" />
		' ?0                  	;0
186 163  FETCH_DIM_R/81            $75=      16?5                 124:'theme'         	;0
187 163  FETCH_DIM_R/81            $76=      16?4                 $75                 	;0
188 163  FETCH_DIM_R/81            $77=      $76                  125:'dark'          	;0
189 163  BOOL_NOT/13               #78=      $77                  ?0                  	;0
190 163  JMPZ/43                   ?0        #78                  ?192                	;0	>>192
191 164  GOTO/253                  ?0        ?194                 ?126                	;0
192 166  ECHO/40                   ?0        127:'		<link href="assets/css/bootstrap.dark.css" rel="stylesheet" type="text/css" />
        <link href="assets/css/app.dark.css" rel="stylesheet" type="text/css" />
        <link href="assets/css/listings.dark.css" rel="stylesheet" type="text/css" />
		<link href="assets/css/custom.dark.css" rel="stylesheet" type="text/css" />
		' ?0                  	;0	<<190
193 167  GOTO/253                  ?0        ?15                  ?128                	;0
194 169  GOTO/253                  ?0        ?14                  ?129                	;0
195 171  ECHO/40                   ?0        130:'</span>
                                ' ?0                  	;0
196 173  ECHO/40                   ?0        131:'                            </a>
                            <div class="dropdown-menu dropdown-menu-right dropdown-lg">
                                <div class="dropdown-item noti-title">
                                    <h5 class="m-0">
                                        Tickets
                                    </h5>
                                </div>
                                <div class="slimscroll noti-scroll">
                                    ' ?0                  	;0
197 174  FE_RESET_R/77             $79=      16?3                 ?270                	;0
198 174  FE_FETCH_R/78             ?0        $79                  16?12               	;270	>>270	<<269
199 175  NOP/0                     ?0        ?0                   ?0                  	;1
200 175  GOTO/253                  ?0        ?211                 ?132                	;0
201 177  INIT_FCALL_BY_NAME/59     ?0        ?0                   133:'htmlspecialchars'	;1
202 177  FETCH_DIM_FUNC_ARG/93     $80=      16?12                135:'title'         	;1
203 177  SEND_VAR_EX/66            ?80       $80                  ?1                  	;0
204 177  DO_FCALL_BY_NAME/131      $81=      ?0                   ?0                  	;0
205 177  ECHO/40                   ?0        $81                  ?0                  	;0
206 178  ECHO/40                   ?0        136:'                                            <small class="text-muted">' ?0                  	;0
207 179  ECHO/40                   ?0        16?13                ?0                  	;0
208 180  ECHO/40                   ?0        137:'</small>
                                        </p>
                                    </a>
                                    ' ?0                  	;0
209 182  NOP/0                     ?0        ?0                   ?0                  	;1
210 182  GOTO/253                  ?0        ?269                 ?138                	;0
211 184  INIT_FCALL_BY_NAME/59     ?0        ?0                   139:'time'          	;0
212 184  DO_FCALL_BY_NAME/131      $82=      ?0                   ?0                  	;0
213 184  INIT_FCALL_BY_NAME/59     ?0        ?0                   141:'intval'        	;1
214 184  FETCH_DIM_FUNC_ARG/93     $83=      16?12                143:'date'          	;1
215 184  SEND_VAR_EX/66            ?80       $83                  ?1                  	;0
216 184  DO_FCALL_BY_NAME/131      $84=      ?0                   ?0                  	;0
217 184  SUB/2                     #85=      $82                  $84                 	;0
218 184  ASSIGN/38                 ?69       16?13                #85                 	;0
219 185  IS_SMALLER/19             #87=      16?13                144:60              	;0
220 185  JMPZ/43                   ?0        #87                  ?223                	;0	>>223
221 186  NOP/0                     ?0        ?0                   ?0                  	;1
222 186  GOTO/253                  ?0        ?247                 ?145                	;0
223 188  IS_SMALLER/19             #88=      16?13                146:3600            	;0	<<220
224 188  JMPZ/43                   ?0        #88                  ?227                	;0	>>227
225 189  NOP/0                     ?0        ?0                   ?0                  	;1
226 189  GOTO/253                  ?0        ?239                 ?147                	;0
227 191  IS_SMALLER/19             #89=      16?13                148:86400           	;0	<<224
228 191  JMPZ/43                   ?0        #89                  ?231                	;0	>>231
229 192  NOP/0                     ?0        ?0                   ?0                  	;1
230 192  GOTO/253                  ?0        ?259                 ?149                	;0
231 194  INIT_FCALL_BY_NAME/59     ?0        ?0                   150:'ceil'          	;1	<<228
232 194  DIV/4                     #90=      16?13                152:86400           	;0
233 194  SEND_VAL_EX/116           ?80       #90                  ?1                  	;0
234 194  DO_FCALL_BY_NAME/131      $91=      ?0                   ?0                  	;0
235 194  CONCAT/8                  #92=      $91                  153:' days ago'     	;0
236 194  ASSIGN/38                 ?76       16?13                #92                 	;0
237 195  NOP/0                     ?0        ?0                   ?0                  	;1
238 195  GOTO/253                  ?0        ?257                 ?154                	;0
239 198  INIT_FCALL_BY_NAME/59     ?0        ?0                   155:'ceil'          	;1
240 198  DIV/4                     #94=      16?13                157:60              	;0
241 198  SEND_VAL_EX/116           ?80       #94                  ?1                  	;0
242 198  DO_FCALL_BY_NAME/131      $95=      ?0                   ?0                  	;0
243 198  CONCAT/8                  #96=      $95                  158:' minutes ago'  	;0
244 198  ASSIGN/38                 ?80       16?13                #96                 	;0
245 200  NOP/0                     ?0        ?0                   ?0                  	;1
246 200  GOTO/253                  ?0        ?251                 ?159                	;0
247 202  NOP/0                     ?0        ?0                   ?0                  	;1
248 202  GOTO/253                  ?0        ?249                 ?160                	;0
249 204  CONCAT/8                  #98=      16?13                161:' seconds ago'  	;0
250 204  ASSIGN/38                 ?82       16?13                #98                 	;0
251 206  ECHO/40                   ?0        162:'                                    <a href="ticket_view?id=' ?0                  	;0
252 207  FETCH_DIM_R/81            $100=     16?12                163:'id'            	;0
253 207  ECHO/40                   ?0        $100                 ?0                  	;0
254 208  ECHO/40                   ?0        164:'" class="dropdown-item notify-item">
                                        <div class="notify-icon bg-info">
                                            <i class="mdi mdi-comment"></i>
                                        </div>
                                        <p class="notify-details">' ?0                  	;0
255 209  NOP/0                     ?0        ?0                   ?0                  	;1
256 209  GOTO/253                  ?0        ?201                 ?165                	;0
257 211  NOP/0                     ?0        ?0                   ?0                  	;1
258 211  GOTO/253                  ?0        ?265                 ?166                	;0
259 213  INIT_FCALL_BY_NAME/59     ?0        ?0                   167:'ceil'          	;1
260 213  DIV/4                     #101=     16?13                169:3600            	;0
261 213  SEND_VAL_EX/116           ?80       #101                 ?1                  	;0
262 213  DO_FCALL_BY_NAME/131      $102=     ?0                   ?0                  	;0
263 213  CONCAT/8                  #103=     $102                 170:' hours ago'    	;0
264 213  ASSIGN/38                 ?87       16?13                #103                	;0
265 215  NOP/0                     ?0        ?0                   ?0                  	;1
266 215  GOTO/253                  ?0        ?245                 ?171                	;0
267 216  NOP/0                     ?0        ?0                   ?0                  	;1
268 216  GOTO/253                  ?0        ?239                 ?172                	;0
269 217  JMP/42                    ?0        ?198                 ?0                  	;0	>>198
270 217  FE_FREE/127               ?0        $79                  ?0                  	;0	<<197
271 220  GOTO/253                  ?0        ?479                 ?173                	;0
272 222  FETCH_DIM_R/81            $105=     16?10                174:'server_name'   	;0
273 222  JMP_SET/152               #106=     $105                 ?275                	;0
274 222  QM_ASSIGN/22              #106=     175:'XUI'            ?0                  	;0
275 222  ECHO/40                   ?0        #106                 ?0                  	;0
276 223  ECHO/40                   ?0        176:' '              ?0                  	;0
277 224  ISSET_ISEMPTY_CV/197      #107=     16?14                ?0                  	;33554432
278 224  BOOL_NOT/13               #108=     #107                 ?0                  	;0
279 224  JMPZ/43                   ?0        #108                 ?281                	;0	>>281
280 225  GOTO/253                  ?0        ?283                 ?177                	;0
281 227  CONCAT/8                  #109=     178:' | '            16?14               	;0	<<279
282 227  ECHO/40                   ?0        #109                 ?0                  	;0
283 229  GOTO/253                  ?0        ?185                 ?179                	;0
284 231  ECHO/40                   ?0        180:'                    <ul class="list-unstyled topnav-menu topnav-menu-left m-0" style="opacity: 80%" id="header_stats">
                        <li class="dropdown notification-list">
                            <a class="nav-link dropdown-toggle nav-user mr-0 waves-effect pd-left pd-right" data-toggle="dropdown" href="./live_connections" role="button" aria-haspopup="false" aria-expanded="false">
                                <span class="pro-user-name text-white ml-1">
                                    <i class="fe-zap text-white"></i> &nbsp; <button type="button" class="btn btn-dark bg-animate' ?0                  	;0
285 232  INIT_FCALL_BY_NAME/59     ?0        ?0                   181:'strlen'        	;1
286 232  FETCH_DIM_FUNC_ARG/93     $110=     16?5                 183:'hue'           	;1
287 232  SEND_VAR_EX/66            ?80       $110                 ?1                  	;0
288 232  DO_FCALL_BY_NAME/131      $111=     ?0                   ?0                  	;0
289 232  IS_SMALLER/19             #112=     184:0                $111                	;0
290 232  JMPZ_EX/46                #112=     #112                 ?300                	;0	>>300
291 232  INIT_FCALL_BY_NAME/59     ?0        ?0                   185:'in_array'      	;2
292 232  FETCH_DIM_FUNC_ARG/93     $113=     16?5                 187:'hue'           	;1
293 232  SEND_VAR_EX/66            ?80       $113                 ?1                  	;0
294 232  INIT_FCALL_BY_NAME/59     ?0        ?0                   188:'array_keys'    	;1
295 232  SEND_VAR_EX/66            ?80       16?15                ?1                  	;0
296 232  DO_FCALL_BY_NAME/131      $114=     ?0                   ?0                  	;0
297 232  SEND_VAR_NO_REF_EX/50     ?96       $114                 ?2                  	;0
298 232  DO_FCALL_BY_NAME/131      $115=     ?0                   ?0                  	;0
299 232  BOOL/52                   #112=     $115                 ?0                  	;0
300 232  BOOL_NOT/13               #116=     #112                 ?0                  	;0	<<290
301 232  JMPZ/43                   ?0        #116                 ?303                	;0	>>303
302 233  GOTO/253                  ?0        ?306                 ?190                	;0
303 235  FETCH_DIM_R/81            $117=     16?5                 191:'hue'           	;0	<<301
304 235  CONCAT/8                  #118=     192:'-'              $117                	;0
305 235  ECHO/40                   ?0        #118                 ?0                  	;0
306 237  ECHO/40                   ?0        193:' btn-xs waves-effect waves-light no-border"><span id="header_connections">0</span></button>
                                </span>
                            </a>
                        </li>
                        <li class="dropdown notification-list">
                            <a class="nav-link dropdown-toggle nav-user mr-0 waves-effect pd-left pd-right" data-toggle="dropdown" href="./live_connections" role="button" aria-haspopup="false" aria-expanded="false">
                                <span class="pro-user-name text-white ml-1">
                                    <i class="fe-users text-white"></i> &nbsp; <button type="button" class="btn btn-dark bg-animate' ?0                  	;0
307 238  GOTO/253                  ?0        ?418                 ?194                	;0
308 240  FETCH_DIM_R/81            $119=     16?5                 195:'username'      	;0
309 240  ECHO/40                   ?0        $119                 ?0                  	;0
310 241  ECHO/40                   ?0        196:'</h5>
                                </div>
                                <a href="edit_profile" class="dropdown-item notify-item">
                                    <span>User Profile</span>
                                </a>
                                <a href="user_logs?user_id=' ?0                  	;0
311 242  INIT_FCALL_BY_NAME/59     ?0        ?0                   197:'intval'        	;1
312 242  FETCH_DIM_FUNC_ARG/93     $120=     16?5                 199:'id'            	;1
313 242  SEND_VAR_EX/66            ?80       $120                 ?1                  	;0
314 242  DO_FCALL_BY_NAME/131      $121=     ?0                   ?0                  	;0
315 242  ECHO/40                   ?0        $121                 ?0                  	;0
316 243  ECHO/40                   ?0        200:'" class="dropdown-item notify-item">
                                    <span>Credit Spend</span>
                                </a>
                                <a href="logout" class="dropdown-item notify-item">
                                    <span>Logout</span>
                                </a>
                            </div>
                        </li>
                        ' ?0                  	;0
317 244  ASSIGN/38                 ?105      16?3                 201:array (
)       	;0
318 245  GOTO/253                  ?0        ?119                 ?202                	;0
319 247  FETCH_DIM_R/81            $123=     16?6                 203:'movies'        	;0
320 247  ECHO/40                   ?0        $123                 ?0                  	;0
321 248  ECHO/40                   ?0        204:'</a></li>
                                    <li><a href="episodes">' ?0                  	;0
322 249  FETCH_DIM_R/81            $124=     16?6                 205:'episodes'      	;0
323 249  ECHO/40                   ?0        $124                 ?0                  	;0
324 250  ECHO/40                   ?0        206:'</a></li>
                                    <li><a href="radios">' ?0                  	;0
325 251  FETCH_DIM_R/81            $125=     16?6                 207:'stations'      	;0
326 251  ECHO/40                   ?0        $125                 ?0                  	;0
327 252  GOTO/253                  ?0        ?75                  ?208                	;0
328 254  ECHO/40                   ?0        209:'                                            <li><a href="lines">' ?0                  	;0
329 255  FETCH_DIM_R/81            $126=     16?6                 210:'manage_lines'  	;0
330 255  ECHO/40                   ?0        $126                 ?0                  	;0
331 256  ECHO/40                   ?0        211:'</a></li>
                                        </ul>
                                    </li>
                                    ' ?0                  	;0
332 258  FETCH_DIM_R/81            $127=     16?7                 212:'create_mag'    	;0
333 258  BOOL_NOT/13               #128=     $127                 ?0                  	;0
334 258  JMPZ/43                   ?0        #128                 ?336                	;0	>>336
335 259  GOTO/253                  ?0        ?67                  ?213                	;0
336 261  GOTO/253                  ?0        ?41                  ?214                	;0	<<334
337 263  ECHO/40                   ?0        215:'</a></li>
                                </ul>
                            </li>
                            ' ?0                  	;0
338 265  FETCH_DIM_R/81            $129=     16?7                 216:'create_line'   	;0
339 265  JMPNZ_EX/47               #130=     $129                 ?342                	;0	>>342
340 265  FETCH_DIM_R/81            $131=     16?7                 217:'create_mag'    	;0
341 265  BOOL/52                   #130=     $131                 ?0                  	;0
342 265  JMPNZ_EX/47               #130=     #130                 ?345                	;0	>>345	<<339
343 265  FETCH_DIM_R/81            $132=     16?7                 218:'create_enigma' 	;0
344 265  BOOL/52                   #130=     $132                 ?0                  	;0
345 265  BOOL_NOT/13               #133=     #130                 ?0                  	;0	<<342
346 265  JMPZ/43                   ?0        #133                 ?348                	;0	>>348
347 266  GOTO/253                  ?0        ?82                  ?219                	;0
348 268  ECHO/40                   ?0        220:'							<li class="has-submenu">
                                <a href="#"> <i class="fas fa-desktop"></i>' ?0                  	;0	<<346
349 269  FETCH_DIM_R/81            $134=     16?6                 221:'lines'         	;0
350 269  ECHO/40                   ?0        $134                 ?0                  	;0
351 270  GOTO/253                  ?0        ?144                 ?222                	;0
352 273  ECHO/40                   ?0        223:'                            <li class="has-submenu">
                                <a href="#"> <i class="fas fa-wrench"></i>' ?0                  	;0
353 274  FETCH_DIM_R/81            $135=     16?6                 224:'logs'          	;0
354 274  ECHO/40                   ?0        $135                 ?0                  	;0
355 275  ECHO/40                   ?0        225:' <div class="arrow-down"></div></a>
                                <ul class="submenu">
                                    ' ?0                  	;0
356 276  FETCH_DIM_R/81            $136=     16?7                 226:'reseller_client_connection_logs'	;0
357 276  BOOL_NOT/13               #137=     $136                 ?0                  	;0
358 276  JMPZ/43                   ?0        #137                 ?360                	;0	>>360
359 277  GOTO/253                  ?0        ?112                 ?227                	;0
360 279  GOTO/253                  ?0        ?33                  ?228                	;0	<<358
361 281  ISSET_ISEMPTY_CV/197      #138=     16?16                ?0                  	;33554432
362 281  BOOL_NOT/13               #139=     #138                 ?0                  	;0
363 281  JMPZ/43                   ?0        #139                 ?365                	;0	>>365
364 282  GOTO/253                  ?0        ?366                 ?229                	;0
365 284  ECHO/40                   ?0        16?16                ?0                  	;0	<<363
366 286  ECHO/40                   ?0        230:'    </head>
    <body>
        <header id="topnav">
            <div class="navbar-overlay bg-animate' ?0                  	;0
367 287  INIT_FCALL_BY_NAME/59     ?0        ?0                   231:'strlen'        	;1
368 287  FETCH_DIM_FUNC_ARG/93     $140=     16?5                 233:'hue'           	;1
369 287  SEND_VAR_EX/66            ?80       $140                 ?1                  	;0
370 287  DO_FCALL_BY_NAME/131      $141=     ?0                   ?0                  	;0
371 287  IS_SMALLER/19             #142=     234:0                $141                	;0
372 287  BOOL_NOT/13               #143=     #142                 ?0                  	;0
373 287  JMPZ/43                   ?0        #143                 ?375                	;0	>>375
374 288  GOTO/253                  ?0        ?57                  ?235                	;0
375 290  GOTO/253                  ?0        ?54                  ?236                	;0	<<373
376 292  INIT_FCALL_BY_NAME/59     ?0        ?0                   237:'count'         	;1	<<0
377 292  INIT_FCALL_BY_NAME/59     ?0        ?0                   239:'get_included_files'	;0
378 292  DO_FCALL_BY_NAME/131      $144=     ?0                   ?0                  	;0
379 292  SEND_VAR_NO_REF_EX/50     ?80       $144                 ?1                  	;0
380 292  DO_FCALL_BY_NAME/131      $145=     ?0                   ?0                  	;0
381 292  IS_EQUAL/17               #146=     $145                 241:1               	;0
382 292  BOOL_NOT/13               #147=     #146                 ?0                  	;0
383 292  JMPZ/43                   ?0        #147                 ?385                	;0	>>385
384 293  GOTO/253                  ?0        ?386                 ?242                	;0
385 295  EXIT/79                   ?0        ?0                   ?0                  	;0	<<383
386 297  INIT_FCALL_BY_NAME/59     ?0        ?0                   243:'E167D33DBF12D418'	;1
387 297  FETCH_DIM_FUNC_ARG/93     $148=     16?5                 245:'id'            	;1
388 297  SEND_VAR_EX/66            ?80       $148                 ?1                  	;0
389 297  DO_FCALL_BY_NAME/131      $149=     ?0                   ?0                  	;0
390 297  ASSIGN/38                 ?133      16?9                 $149                	;0
391 298  ECHO/40                   ?0        246:'<!DOCTYPE html>
<html lang="en">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
        <title>' ?0                  	;0
392 299  GOTO/253                  ?0        ?272                 ?247                	;0
393 301  ECHO/40                   ?0        248:' <div class="arrow-down"></div></a>
                                <ul class="submenu">
                                    <li><a href="streams">' ?0                  	;0
394 302  FETCH_DIM_R/81            $151=     16?6                 249:'streams'       	;0
395 302  ECHO/40                   ?0        $151                 ?0                  	;0
396 303  ECHO/40                   ?0        250:'</a></li>
                                    <li><a href="created_channels">' ?0                  	;0
397 304  FETCH_DIM_R/81            $152=     16?6                 251:'created_channels'	;0
398 304  ECHO/40                   ?0        $152                 ?0                  	;0
399 305  ECHO/40                   ?0        252:'</a></li>
                                    <li><a href="movies">' ?0                  	;0
400 306  GOTO/253                  ?0        ?319                 ?253                	;0
401 308  FETCH_DIM_R/81            $153=     16?6                 254:'add_line'      	;0
402 308  ECHO/40                   ?0        $153                 ?0                  	;0
403 309  ECHO/40                   ?0        255:'</a></li>
                                            ' ?0                  	;0
404 310  BOOL_NOT/13               #154=     16?9                 ?0                  	;0
405 310  JMPZ/43                   ?0        #154                 ?407                	;0	>>407
406 311  GOTO/253                  ?0        ?408                 ?256                	;0
407 313  ECHO/40                   ?0        257:'                                            <li><a href="line?trial=1">Generate Trial Line</a></li>
                                            ' ?0                  	;0	<<405
408 315  GOTO/253                  ?0        ?328                 ?258                	;0
409 317  FETCH_DIM_R/81            $155=     16?6                 259:'users'         	;0
410 317  ECHO/40                   ?0        $155                 ?0                  	;0
411 318  ECHO/40                   ?0        260:' <div class="arrow-down"></div></a>
                                <ul class="submenu">
                                    <li><a href="user">' ?0                  	;0
412 319  FETCH_DIM_R/81            $156=     16?6                 261:'add_user'      	;0
413 319  ECHO/40                   ?0        $156                 ?0                  	;0
414 320  ECHO/40                   ?0        262:'</a></li>
                                    <li><a href="users">' ?0                  	;0
415 321  FETCH_DIM_R/81            $157=     16?6                 263:'manage_users'  	;0
416 321  ECHO/40                   ?0        $157                 ?0                  	;0
417 322  GOTO/253                  ?0        ?337                 ?264                	;0
418 324  INIT_FCALL_BY_NAME/59     ?0        ?0                   265:'strlen'        	;1
419 324  FETCH_DIM_FUNC_ARG/93     $158=     16?5                 267:'hue'           	;1
420 324  SEND_VAR_EX/66            ?80       $158                 ?1                  	;0
421 324  DO_FCALL_BY_NAME/131      $159=     ?0                   ?0                  	;0
422 324  IS_SMALLER/19             #160=     268:0                $159                	;0
423 324  JMPZ_EX/46                #160=     #160                 ?433                	;0	>>433
424 324  INIT_FCALL_BY_NAME/59     ?0        ?0                   269:'in_array'      	;2
425 324  FETCH_DIM_FUNC_ARG/93     $161=     16?5                 271:'hue'           	;1
426 324  SEND_VAR_EX/66            ?80       $161                 ?1                  	;0
427 324  INIT_FCALL_BY_NAME/59     ?0        ?0                   272:'array_keys'    	;1
428 324  SEND_VAR_EX/66            ?80       16?15                ?1                  	;0
429 324  DO_FCALL_BY_NAME/131      $162=     ?0                   ?0                  	;0
430 324  SEND_VAR_NO_REF_EX/50     ?96       $162                 ?2                  	;0
431 324  DO_FCALL_BY_NAME/131      $163=     ?0                   ?0                  	;0
432 324  BOOL/52                   #160=     $163                 ?0                  	;0
433 324  BOOL_NOT/13               #164=     #160                 ?0                  	;0	<<423
434 324  JMPZ/43                   ?0        #164                 ?436                	;0	>>436
435 325  GOTO/253                  ?0        ?439                 ?274                	;0
436 327  FETCH_DIM_R/81            $165=     16?5                 275:'hue'           	;0	<<434
437 327  CONCAT/8                  #166=     276:'-'              $165                	;0
438 327  ECHO/40                   ?0        #166                 ?0                  	;0
439 329  ECHO/40                   ?0        277:' btn-xs waves-effect waves-light no-border"><span id="header_users">0</span></button>
                                </span>
                            </a>
                        </li>
                    </ul>
                    ' ?0                  	;0
440 331  GOTO/253                  ?0        ?154                 ?278                	;0
441 333  INIT_METHOD_CALL/112      ?0        16?1                 279:'query'         	;3
442 333  SEND_VAL_EX/116           ?80       281:'SELECT `tickets`.`id`, `tickets`.`title`, MAX(`tickets_replies`.`date`) AS `date`, `users`.`username` FROM `tickets` LEFT JOIN `tickets_replies` ON `tickets_replies`.`ticket_id` = `tickets`.`id` LEFT JOIN `users` ON `users`.`id` = `tickets`.`member_id` WHERE `tickets`.`status` <> 0 AND `admin_read` = 0 AND `user_read` = 1 AND `member_id` <> ? AND `member_id` IN (SELECT `id` FROM `users` WHERE `owner_id` = ?) GROUP BY `tickets_replies`.`ticket_id` ORDER BY `tickets_replies`.`date` DESC LIMIT 50;' ?1                  	;0
443 333  FETCH_DIM_FUNC_ARG/93     $167=     16?5                 282:'id'            	;2
444 333  SEND_VAR_EX/66            ?96       $167                 ?2                  	;0
445 333  FETCH_DIM_FUNC_ARG/93     $168=     16?5                 283:'id'            	;3
446 333  SEND_VAR_EX/66            ?112      $168                 ?3                  	;0
447 333  DO_FCALL/60               ?152      ?0                   ?0                  	;0
448 334  INIT_METHOD_CALL/112      ?0        16?1                 284:'num_rows'      	;0
449 334  DO_FCALL/60               $170=     ?0                   ?0                  	;0
450 334  ASSIGN/38                 ?154      16?0                 $170                	;0
451 335  INIT_METHOD_CALL/112      ?0        16?1                 286:'get_rows'      	;0
452 335  DO_FCALL/60               $172=     ?0                   ?0                  	;0
453 335  FE_RESET_R/77             $173=     $172                 ?458                	;0
454 335  FE_FETCH_R/78             ?0        $173                 16?2                	;458	>>458	<<457
455 336  ASSIGN_DIM/147            ?157      16?3                 ?4414262            	;0
456 336  OP_DATA/137               ?0        16?2                 ?0                  	;0
457 337  JMP/42                    ?0        ?454                 ?0                  	;0	>>454
458 337  FE_FREE/127               ?0        $173                 ?0                  	;0	<<453
459 340  INIT_METHOD_CALL/112      ?0        16?1                 288:'query'         	;2
460 340  SEND_VAL_EX/116           ?80       290:'SELECT `tickets`.`id`, `tickets`.`title`, MAX(`tickets_replies`.`date`) AS `date`, `users`.`username` FROM `tickets` LEFT JOIN `tickets_replies` ON `tickets_replies`.`ticket_id` = `tickets`.`id` LEFT JOIN `users` ON `users`.`id` = `tickets`.`member_id` WHERE `tickets`.`status` <> 0 AND `user_read` = 0 AND `admin_read` = 1 AND `member_id` = ? GROUP BY `tickets_replies`.`ticket_id` ORDER BY `tickets_replies`.`date` DESC LIMIT 50;' ?1                  	;0
461 340  FETCH_DIM_FUNC_ARG/93     $175=     16?5                 291:'id'            	;2
462 340  SEND_VAR_EX/66            ?96       $175                 ?2                  	;0
463 340  DO_FCALL/60               ?159      ?0                   ?0                  	;0
464 341  GOTO/253                  ?0        ?1                   ?292                	;0
465 343  BOOL_NOT/13               #177=     16?8                 ?0                  	;0
466 343  JMPZ/43                   ?0        #177                 ?468                	;0	>>468
467 344  GOTO/253                  ?0        ?469                 ?293                	;0
468 346  ECHO/40                   ?0        294:'        .dataTables_wrapper {
            overflow-x: auto !important;
        }
        ' ?0                  	;0	<<466
469 348  ECHO/40                   ?0        295:'        </style>
        ' ?0                  	;0
470 349  GOTO/253                  ?0        ?32                  ?296                	;0
471 350  GOTO/253                  ?0        ?23                  ?297                	;0
472 352  IS_SMALLER/19             #178=     298:0                16?0                	;0
473 352  JMPZ/43                   ?0        #178                 ?475                	;0	>>475
474 353  GOTO/253                  ?0        ?477                 ?299                	;0
475 355  ECHO/40                   ?0        300:'                            <a class="nav-link waves-effect text-white" href="tickets" role="button">
                            ' ?0                  	;0	<<473
476 356  GOTO/253                  ?0        ?99                  ?301                	;0
477 358  ECHO/40                   ?0        302:'                            <a class="nav-link dropdown-toggle waves-effect text-white" data-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                            ' ?0                  	;0
478 359  GOTO/253                  ?0        ?99                  ?303                	;0
479 361  ECHO/40                   ?0        304:'                                </div>
                                <a href="tickets" class="dropdown-item text-center text-primary notify-item notify-all">
                                    View Tickets
                                    <i class="fi-arrow-right"></i>
                                </a>
                            </div>
                        </li>
                    </ul>
                    <div class="logo-box">
                        <a href="dashboard" class="logo text-center">
                            <span class="logo-lg' ?0                  	;0
480 362  INIT_FCALL_BY_NAME/59     ?0        ?0                   305:'strlen'        	;1
481 362  FETCH_DIM_FUNC_ARG/93     $179=     16?5                 307:'hue'           	;1
482 362  SEND_VAR_EX/66            ?80       $179                 ?1                  	;0
483 362  DO_FCALL_BY_NAME/131      $180=     ?0                   ?0                  	;0
484 362  IS_SMALLER/19             #181=     308:0                $180                	;0
485 362  BOOL_NOT/13               #182=     #181                 ?0                  	;0
486 362  JMPZ/43                   ?0        #182                 ?488                	;0	>>488
487 363  GOTO/253                  ?0        ?489                 ?309                	;0
488 365  ECHO/40                   ?0        310:' whiteout'      ?0                  	;0	<<486
489 367  ECHO/40                   ?0        311:'">
                                <img src="assets/images/logo-topbar.png" alt="" height="26">
                            </span>
                            <span class="logo-sm' ?0                  	;0
490 368  GOTO/253                  ?0        ?164                 ?312                	;0
491 371  NOP/0                     ?0        313:1                ?0                  	;4294967295
*/

?>
<?php


/*
#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
0   3    JMP/42                    ?0        ?153                 ?0                  	;0	>>153
1   6    FETCH_STATIC_PROP_R/173   $24=      1:'rRequest'         2:'XUI'             	;0
2   6    FETCH_DIM_R/81            $25=      $24                  4:'sort'            	;0
3   6    FETCH_DIM_R/81            $26=      16?1                 $25                 	;0
4   6    ASSIGN/38                 ?3        16?0                 $26                 	;0
5   8    ASSIGN/38                 ?4        16?2                 5:array (
)         	;0
6   9    FETCH_STATIC_PROP_IS/176  $29=      6:'rRequest'         7:'XUI'             	;0
7   9    ISSET_ISEMPTY_DIM_OBJ/115 #30=      $29                  9:'search'          	;16777216
8   9    BOOL_NOT/13               #31=      #30                  ?0                  	;0
9   9    JMPZ/43                   ?0        #31                  ?11                 	;0	>>11
10  10   GOTO/253                  ?0        ?567                 ?10                 	;0
11  12   GOTO/253                  ?0        ?542                 ?11                 	;0	<<9
12  15   ECHO/40                   ?0        12:'					</ul>
					' ?0                  	;0
13  17   ECHO/40                   ?0        13:'				</div>
				' ?0                  	;0
14  19   GOTO/253                  ?0        ?207                 ?14                 	;0
15  22   ASSIGN/38                 ?8        16?3                 15:'TV Guide'       	;0
16  23   INCLUDE_OR_EVAL/73        ?9        16:'header.php'      ?0                  	;2
17  24   ECHO/40                   ?0        17:'<div class="wrapper "' ?0                  	;0
18  25   FETCH_IS/89               $34=      18:'_SERVER'         ?0                  	;0
19  25   ISSET_ISEMPTY_DIM_OBJ/115 #35=      $34                  19:'HTTP_X_REQUESTED_WITH'	;16777216
20  25   BOOL_NOT/13               #36=      #35                  ?0                  	;0
21  25   JMPZ_EX/46                #36=      #36                  ?29                 	;0	>>29
22  25   INIT_FCALL_BY_NAME/59     ?0        ?0                   20:'strtolower'     	;1
23  25   FETCH_FUNC_ARG/92         $37=      22:'_SERVER'         ?0                  	;1
24  25   FETCH_DIM_FUNC_ARG/93     $38=      $37                  23:'HTTP_X_REQUESTED_WITH'	;1
25  25   SEND_VAR_EX/66            ?80       $38                  ?1                  	;0
26  25   DO_FCALL_BY_NAME/131      $39=      ?0                   ?0                  	;0
27  25   IS_EQUAL/17               #40=      $39                  24:'xmlhttprequest' 	;0
28  25   BOOL/52                   #36=      #40                  ?0                  	;0
29  25   BOOL_NOT/13               #41=      #36                  ?0                  	;0	<<21
30  25   JMPZ/43                   ?0        #41                  ?32                 	;0	>>32
31  26   GOTO/253                  ?0        ?176                 ?25                 	;0
32  28   GOTO/253                  ?0        ?175                 ?26                 	;0	<<30
33  30   SUB/2                     #42=      16?5                 27:1                	;0
34  30   MUL/3                     #43=      #42                  16?6                	;0
35  30   ASSIGN/38                 ?20       16?4                 #43                 	;0
36  31   INIT_FCALL_BY_NAME/59     ?0        ?0                   28:'count'          	;1
37  31   FETCH_DIM_FUNC_ARG/93     $45=      16?7                 30:'stream_ids'     	;1
38  31   SEND_VAR_EX/66            ?80       $45                  ?1                  	;0
39  31   DO_FCALL_BY_NAME/131      $46=      ?0                   ?0                  	;0
40  31   IS_SMALLER/19             #47=      31:0                 $46                 	;0
41  31   JMPZ/43                   ?0        #47                  ?43                 	;0	>>43
42  32   GOTO/253                  ?0        ?717                 ?32                 	;0
43  34   ASSIGN/38                 ?24       16?2                 33:array (
)        	;0	<<41
44  35   ASSIGN/38                 ?25       16?8                 34:0                	;0
45  36   GOTO/253                  ?0        ?180                 ?35                 	;0
46  37   GOTO/253                  ?0        ?717                 ?36                 	;0
47  39   ASSIGN/38                 ?26       16?1                 37:array (
  'name' => '`stream_display_name` ASC',
  'added' => '`added` DESC',
)	;0
48  40   FETCH_STATIC_PROP_IS/176  $51=      38:'rRequest'        39:'XUI'            	;0
49  40   ISSET_ISEMPTY_DIM_OBJ/115 #52=      $51                  41:'sort'           	;16777216
50  40   BOOL_NOT/13               #53=      #52                  ?0                  	;0
51  40   JMPZ_EX/46                #53=      #53                  ?56                 	;0	>>56
52  40   FETCH_STATIC_PROP_R/173   $54=      42:'rRequest'        43:'XUI'            	;0
53  40   FETCH_DIM_R/81            $55=      $54                  45:'sort'           	;0
54  40   ISSET_ISEMPTY_DIM_OBJ/115 #56=      16?1                 $55                 	;33554432
55  40   BOOL/52                   #53=      #56                  ?0                  	;0
56  40   JMPZ/43                   ?0        #53                  ?58                 	;0	>>58	<<51
57  41   GOTO/253                  ?0        ?1                   ?46                 	;0
58  43   INIT_FCALL_BY_NAME/59     ?0        ?0                   47:'igbinary_unserialize'	;1	<<56
59  43   INIT_FCALL_BY_NAME/59     ?0        ?0                   49:'file_get_contents'	;1
60  43   FETCH_CONSTANT/99         #57=      ?0                   51:'CACHE_TMP_PATH' 	;16
61  43   CONCAT/8                  #58=      #57                  54:'channel_order'  	;0
62  43   SEND_VAL_EX/116           ?80       #58                  ?1                  	;0
63  43   DO_FCALL_BY_NAME/131      $59=      ?0                   ?0                  	;0
64  43   SEND_VAR_NO_REF_EX/50     ?80       $59                  ?1                  	;0
65  43   DO_FCALL_BY_NAME/131      $60=      ?0                   ?0                  	;0
66  43   ASSIGN/38                 ?37       16?9                 $60                 	;0
67  44   FETCH_STATIC_PROP_R/173   $62=      55:'rSettings'       56:'XUI'            	;0
68  44   FETCH_DIM_R/81            $63=      $62                  58:'channel_number_type'	;0
69  44   IS_NOT_EQUAL/18           #64=      $63                  59:'manual'         	;0
70  44   JMPZ_EX/46                #64=      #64                  ?76                 	;0	>>76
71  44   INIT_FCALL_BY_NAME/59     ?0        ?0                   60:'count'          	;1
72  44   SEND_VAR_EX/66            ?80       16?9                 ?1                  	;0
73  44   DO_FCALL_BY_NAME/131      $65=      ?0                   ?0                  	;0
74  44   IS_SMALLER/19             #66=      62:0                 $65                 	;0
75  44   BOOL/52                   #64=      #66                  ?0                  	;0
76  44   JMPZ/43                   ?0        #64                  ?78                 	;0	>>78	<<70
77  45   GOTO/253                  ?0        ?502                 ?63                 	;0
78  47   ASSIGN/38                 ?43       16?0                 64:'`order` ASC'    	;0	<<76
79  48   GOTO/253                  ?0        ?501                 ?65                 	;0
80  50   FETCH_STATIC_PROP_IS/176  $68=      66:'rRequest'        67:'XUI'            	;0
81  50   ISSET_ISEMPTY_DIM_OBJ/115 #69=      $68                  69:'search'         	;33554432
82  50   BOOL_NOT/13               #70=      #69                  ?0                  	;0
83  50   JMPZ/43                   ?0        #70                  ?85                 	;0	>>85
84  51   GOTO/253                  ?0        ?91                  ?70                 	;0
85  53   INIT_FCALL_BY_NAME/59     ?0        ?0                   71:'htmlspecialchars'	;1	<<83
86  53   FETCH_STATIC_PROP_FUNC_ARG/177 $71=      73:'rRequest'        74:'XUI'            	;1
87  53   FETCH_DIM_FUNC_ARG/93     $72=      $71                  76:'search'         	;1
88  53   SEND_VAR_EX/66            ?80       $72                  ?1                  	;0
89  53   DO_FCALL_BY_NAME/131      $73=      ?0                   ?0                  	;0
90  53   ECHO/40                   ?0        $73                  ?0                  	;0
91  55   ECHO/40                   ?0        77:'" placeholder="Search Streams and Programmes...">
								</div>
								<div class="col-md-3">
									<select id="category" name="category" class="form-control" data-toggle="select2">
										<option value=""' ?0                  	;0
92  56   FETCH_STATIC_PROP_IS/176  $74=      78:'rRequest'        79:'XUI'            	;0
93  56   ISSET_ISEMPTY_DIM_OBJ/115 #75=      $74                  81:'category'       	;33554432
94  56   JMPZ/43                   ?0        #75                  ?96                 	;0	>>96
95  57   GOTO/253                  ?0        ?512                 ?82                 	;0
96  59   GOTO/253                  ?0        ?511                 ?83                 	;0	<<94
97  61   INIT_FCALL_BY_NAME/59     ?0        ?0                   84:'F769e3F0C739D1a6'	;1
98  61   SEND_VAL_EX/116           ?80       86:'live'            ?1                  	;0
99  61   DO_FCALL_BY_NAME/131      $76=      ?0                   ?0                  	;0
100 61   FE_RESET_R/77             $77=      $76                  ?127                	;0
101 61   FE_FETCH_R/78             ?0        $77                  16?10               	;127	>>127	<<126
102 62   ECHO/40                   ?0        87:'										<option value="' ?0                  	;0
103 63   INIT_FCALL_BY_NAME/59     ?0        ?0                   88:'intval'         	;1
104 63   FETCH_DIM_FUNC_ARG/93     $78=      16?10                90:'id'             	;1
105 63   SEND_VAR_EX/66            ?80       $78                  ?1                  	;0
106 63   DO_FCALL_BY_NAME/131      $79=      ?0                   ?0                  	;0
107 63   ECHO/40                   ?0        $79                  ?0                  	;0
108 64   ECHO/40                   ?0        91:'"'               ?0                  	;0
109 65   FETCH_STATIC_PROP_IS/176  $80=      92:'rRequest'        93:'XUI'            	;0
110 65   ISSET_ISEMPTY_DIM_OBJ/115 #81=      $80                  95:'category'       	;33554432
111 65   JMPZ_EX/46                #81=      #81                  ?117                	;0	>>117
112 65   FETCH_STATIC_PROP_R/173   $82=      96:'rRequest'        97:'XUI'            	;0
113 65   FETCH_DIM_R/81            $83=      $82                  99:'category'       	;0
114 65   FETCH_DIM_R/81            $84=      16?10                100:'id'            	;0
115 65   IS_EQUAL/17               #85=      $83                  $84                 	;0
116 65   BOOL/52                   #81=      #85                  ?0                  	;0
117 65   BOOL_NOT/13               #86=      #81                  ?0                  	;0	<<111
118 65   JMPZ/43                   ?0        #86                  ?121                	;0	>>121
119 66   NOP/0                     ?0        ?0                   ?0                  	;1
120 66   GOTO/253                  ?0        ?122                 ?101                	;0
121 68   ECHO/40                   ?0        102:' selected'      ?0                  	;0	<<118
122 70   ECHO/40                   ?0        103:'>'              ?0                  	;0
123 71   FETCH_DIM_R/81            $87=      16?10                104:'category_name' 	;0
124 71   ECHO/40                   ?0        $87                  ?0                  	;0
125 72   ECHO/40                   ?0        105:'</option>
										' ?0                  	;0
126 73   JMP/42                    ?0        ?101                 ?0                  	;0	>>101
127 73   FE_FREE/127               ?0        $77                  ?0                  	;0	<<100
128 76   ECHO/40                   ?0        106:'									</select>
								</div>
								<label class="col-md-1 col-form-label text-center" for="user_show_entries">Sort</label>
								<div class="col-md-1">
									<select id="sort" name="sort" class="form-control" data-toggle="select2">
										' ?0                  	;0
129 77   FE_RESET_R/77             $88=      107:array (
  '' => 'Default',
  'name' => 'A to Z',
  'added' => 'Date Added',
) ?151                	;0
130 77   FE_FETCH_R/78             #89=      $88                  16?11               	;151	>>151	<<150
131 77   ASSIGN/38                 ?66       16?12                #89                 	;0
132 78   ECHO/40                   ?0        108:'										<option value="' ?0                  	;0
133 79   ECHO/40                   ?0        16?12                ?0                  	;0
134 80   ECHO/40                   ?0        109:'"'              ?0                  	;0
135 81   FETCH_STATIC_PROP_IS/176  $91=      110:'rRequest'       111:'XUI'           	;0
136 81   ISSET_ISEMPTY_DIM_OBJ/115 #92=      $91                  113:'sort'          	;33554432
137 81   JMPZ_EX/46                #92=      #92                  ?142                	;0	>>142
138 81   FETCH_STATIC_PROP_R/173   $93=      114:'rRequest'       115:'XUI'           	;0
139 81   FETCH_DIM_R/81            $94=      $93                  117:'sort'          	;0
140 81   IS_EQUAL/17               #95=      $94                  16?12               	;0
141 81   BOOL/52                   #92=      #95                  ?0                  	;0
142 81   BOOL_NOT/13               #96=      #92                  ?0                  	;0	<<137
143 81   JMPZ/43                   ?0        #96                  ?146                	;0	>>146
144 82   NOP/0                     ?0        ?0                   ?0                  	;1
145 82   GOTO/253                  ?0        ?147                 ?118                	;0
146 84   ECHO/40                   ?0        119:' selected'      ?0                  	;0	<<143
147 86   ECHO/40                   ?0        120:'>'              ?0                  	;0
148 87   ECHO/40                   ?0        16?11                ?0                  	;0
149 88   ECHO/40                   ?0        121:'</option>
										' ?0                  	;0
150 89   JMP/42                    ?0        ?130                 ?0                  	;0	>>130
151 89   FE_FREE/127               ?0        $88                  ?0                  	;0	<<129
152 92   GOTO/253                  ?0        ?517                 ?122                	;0
153 94   INCLUDE_OR_EVAL/73        ?73       123:'session.php'    ?0                  	;2	<<0
154 95   INCLUDE_OR_EVAL/73        ?74       124:'functions.php'  ?0                  	;2
155 96   INIT_FCALL_BY_NAME/59     ?0        ?0                   125:'BAf6E9EF7775B5a9'	;0
156 96   DO_FCALL_BY_NAME/131      $99=      ?0                   ?0                  	;0
157 96   JMPZ/43                   ?0        $99                  ?159                	;0	>>159
158 97   GOTO/253                  ?0        ?161                 ?127                	;0
159 99   INIT_FCALL_BY_NAME/59     ?0        ?0                   128:'e72F42a93714ba87'	;0	<<157
160 99   DO_FCALL_BY_NAME/131      ?76       ?0                   ?0                  	;0
161 101  GOTO/253                  ?0        ?217                 ?130                	;0
162 103  ASSIGN_DIM/147            ?77       16?13                ?4450184            	;0
163 103  OP_DATA/137               ?0        131:'JSON_CONTAINS(`streams`.`category_id`, ?, \'$\')' ?0                  	;0
164 104  FETCH_STATIC_PROP_R/173   $103=     132:'rRequest'       133:'XUI'           	;0
165 104  FETCH_DIM_R/81            $104=     $103                 135:'category'      	;0
166 104  ASSIGN_DIM/147            ?78       16?14                ?0                  	;0
167 104  OP_DATA/137               ?0        $104                 ?0                  	;0
168 106  FETCH_STATIC_PROP_IS/176  $105=     136:'rRequest'       137:'XUI'           	;0
169 106  ISSET_ISEMPTY_DIM_OBJ/115 #106=     $105                 139:'search'        	;16777216
170 106  JMPZ/43                   ?0        #106                 ?172                	;0	>>172
171 107  GOTO/253                  ?0        ?710                 ?140                	;0
172 109  ASSIGN_DIM/147            ?83       16?13                ?4397406            	;0	<<170
173 109  OP_DATA/137               ?0        141:'(`epg_data`.`title` LIKE ? AND ((`epg_data`.`start` <= UNIX_TIMESTAMP() AND `epg_data`.`end` > UNIX_TIMESTAMP()) OR (`epg_data`.`start` > UNIX_TIMESTAMP() AND `epg_data`.`start` <= UNIX_TIMESTAMP() + 7200))) OR `streams`.`stream_display_name` LIKE ? OR `streams`.`id` LIKE ?' ?0                  	;0
174 110  GOTO/253                  ?0        ?694                 ?142                	;0
175 112  ECHO/40                   ?0        143:' style="display: none;"' ?0                  	;0
176 114  ECHO/40                   ?0        144:'>
    <div class="container-fluid">
		<div class="row">
			<div class="col-12">
				<div class="page-title-box">
					<div class="page-title-right">
                        ' ?0                  	;0
177 115  INCLUDE_OR_EVAL/73        ?84       145:'topbar.php'     ?0                  	;2
178 116  ECHO/40                   ?0        146:'					</div>
					<h4 class="page-title">TV Guide</h4>
				</div>
				<form method="GET" action="epg_view">
					<div class="card">
						<div class="card-body">
							<div id="collapse_filters" class="form-group row" style="margin-bottom: 0;">
								<div class="col-md-3">
									<input type="text" class="form-control" id="search" name="search" value="' ?0                  	;0
179 117  GOTO/253                  ?0        ?80                  ?147                	;0
180 121  INIT_FCALL_BY_NAME/59     ?0        ?0                   148:'ceil'          	;1
181 121  DIV/4                     #109=     16?8                 16?6                	;0
182 121  SEND_VAL_EX/116           ?80       #109                 ?1                  	;0
183 121  DO_FCALL_BY_NAME/131      $110=     ?0                   ?0                  	;0
184 121  ASSIGN/38                 ?87       16?15                $110                	;0
185 122  ASSIGN/38                 ?88       16?16                150:array (
)       	;0
186 123  INIT_FCALL_BY_NAME/59     ?0        ?0                   151:'range'         	;2
187 123  SUB/2                     #113=     16?5                 153:2               	;0
188 123  SEND_VAL_EX/116           ?80       #113                 ?1                  	;0
189 123  ADD/1                     #114=     16?5                 154:2               	;0
190 123  SEND_VAL_EX/116           ?96       #114                 ?2                  	;0
191 123  DO_FCALL_BY_NAME/131      $115=     ?0                   ?0                  	;0
192 123  FE_RESET_R/77             $116=     $115                 ?205                	;0
193 123  FE_FETCH_R/78             ?0        $116                 16?17               	;205	>>205	<<204
194 124  IS_SMALLER_OR_EQUAL/20    #117=     155:1                16?17               	;0
195 124  JMPZ_EX/46                #117=     #117                 ?198                	;0	>>198
196 124  IS_SMALLER_OR_EQUAL/20    #118=     16?17                16?15               	;0
197 124  BOOL/52                   #117=     #118                 ?0                  	;0
198 124  BOOL_NOT/13               #119=     #117                 ?0                  	;0	<<195
199 124  JMPZ/43                   ?0        #119                 ?202                	;0	>>202
200 125  NOP/0                     ?0        ?0                   ?0                  	;1
201 125  GOTO/253                  ?0        ?204                 ?156                	;0
202 127  ASSIGN_DIM/147            ?96       16?16                ?4397406            	;0	<<199
203 127  OP_DATA/137               ?0        16?17                ?0                  	;0
204 129  JMP/42                    ?0        ?193                 ?0                  	;0	>>193
205 129  FE_FREE/127               ?0        $116                 ?0                  	;0	<<192
206 131  GOTO/253                  ?0        ?15                  ?157                	;0
207 133  ECHO/40                   ?0        158:'			</div>
		</div>
    </div>
</div>
' ?0                  	;0
208 134  GOTO/253                  ?0        ?748                 ?159                	;0
209 136  ECHO/40                   ?0        160:'				<div class="alert alert-warning alert-dismissible fade show" role="alert">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                    No Live Streams or Programmes have been found matching your search terms.
				</div>
				' ?0                  	;0
210 137  GOTO/253                  ?0        ?14                  ?161                	;0
211 139  ECHO/40                   ?0        162:'				<div class="listings-grid-container">
					<a href="#" class="listings-direction-link left day-nav-arrow js-day-nav-arrow" data-direction="prev"><span class="isvg isvg-left-dir"></span></a>
					<a href="#" class="listings-direction-link right day-nav-arrow js-day-nav-arrow" data-direction="next"><span class="isvg isvg-right-dir"></span></a>
					<div class="listings-day-slider-wrapper">
						<div class="listings-day-slider js-listings-day-slider">
							<div class="js-listings-day-nav-inner"></div>
						</div>
					</div>
					<div class="js-billboard-fix-point"></div>
					<div class="listings-grid-inner">
						<div class="time-nav-bar cf js-time-nav-bar">
							<div class="listings-mobile-nav">
								<a class="listings-now-btn js-now-btn" href="#">NOW</a>
							</div>
							<div class="listings-times-wrapper">
								<a href="#" class="listings-direction-link left js-time-nav-arrow" data-direction="prev"><span class="isvg isvg-left-dir text-white"></span></a>
								<a href="#" class="listings-direction-link right js-time-nav-arrow" data-direction="next"><span class="isvg isvg-right-dir text-white"></span></a>
								<div class="times-slider js-times-slider"></div>
							</div>
							<div class="listings-loader js-listings-loader"><span class="isvg isvg-loader animate-spin"></span></div>
						</div>
						<div class="listings-wrapper cf js-listings-wrapper">
							<div class="listings-timeline js-listings-timeline"></div>
							<div class="js-listings-container"></div>
						</div>
					</div>
					' ?0                  	;0
212 140  IS_SMALLER/19             #121=     163:1                16?15               	;0
213 140  BOOL_NOT/13               #122=     #121                 ?0                  	;0
214 140  JMPZ/43                   ?0        #122                 ?216                	;0	>>216
215 141  GOTO/253                  ?0        ?13                  ?164                	;0
216 143  GOTO/253                  ?0        ?373                 ?165                	;0	<<214
217 145  BOOL_NOT/13               #123=     16?18                ?0                  	;0
218 145  JMPZ/43                   ?0        #123                 ?220                	;0	>>220
219 146  GOTO/253                  ?0        ?223                 ?166                	;0
220 148  INIT_FCALL_BY_NAME/59     ?0        ?0                   167:'header'        	;1	<<218
221 148  SEND_VAL_EX/116           ?80       169:'Location: dashboard' ?1                  	;0
222 148  DO_FCALL_BY_NAME/131      ?100      ?0                   ?0                  	;0
223 150  INIT_FCALL_BY_NAME/59     ?0        ?0                   170:'intval'        	;1
224 150  FETCH_STATIC_PROP_FUNC_ARG/177 $125=     172:'rRequest'       173:'XUI'           	;1
225 150  FETCH_DIM_FUNC_ARG/93     $126=     $125                 175:'page'          	;1
226 150  SEND_VAR_EX/66            ?80       $126                 ?1                  	;0
227 150  DO_FCALL_BY_NAME/131      $127=     ?0                   ?0                  	;0
228 150  IS_SMALLER/19             #128=     176:0                $127                	;0
229 150  JMPZ/43                   ?0        #128                 ?237                	;0	>>237
230 150  INIT_FCALL_BY_NAME/59     ?0        ?0                   177:'intval'        	;1
231 150  FETCH_STATIC_PROP_FUNC_ARG/177 $129=     179:'rRequest'       180:'XUI'           	;1
232 150  FETCH_DIM_FUNC_ARG/93     $130=     $129                 182:'page'          	;1
233 150  SEND_VAR_EX/66            ?80       $130                 ?1                  	;0
234 150  DO_FCALL_BY_NAME/131      $131=     ?0                   ?0                  	;0
235 150  QM_ASSIGN/22              #132=     $131                 ?0                  	;0
236 150  JMP/42                    ?0        ?238                 ?0                  	;0	>>238
237 150  QM_ASSIGN/22              #132=     183:1                ?0                  	;0	<<229
238 150  ASSIGN/38                 ?109      16?5                 #132                	;0	<<236
239 151  INIT_FCALL_BY_NAME/59     ?0        ?0                   184:'intval'        	;1
240 151  FETCH_STATIC_PROP_FUNC_ARG/177 $134=     186:'rRequest'       187:'XUI'           	;1
241 151  FETCH_DIM_FUNC_ARG/93     $135=     $134                 189:'entries'       	;1
242 151  SEND_VAR_EX/66            ?80       $135                 ?1                  	;0
243 151  DO_FCALL_BY_NAME/131      $136=     ?0                   ?0                  	;0
244 151  IS_SMALLER/19             #137=     190:0                $136                	;0
245 151  JMPZ/43                   ?0        #137                 ?253                	;0	>>253
246 151  INIT_FCALL_BY_NAME/59     ?0        ?0                   191:'intval'        	;1
247 151  FETCH_STATIC_PROP_FUNC_ARG/177 $138=     193:'rRequest'       194:'XUI'           	;1
248 151  FETCH_DIM_FUNC_ARG/93     $139=     $138                 196:'entries'       	;1
249 151  SEND_VAR_EX/66            ?80       $139                 ?1                  	;0
250 151  DO_FCALL_BY_NAME/131      $140=     ?0                   ?0                  	;0
251 151  QM_ASSIGN/22              #141=     $140                 ?0                  	;0
252 151  JMP/42                    ?0        ?256                 ?0                  	;0	>>256
253 151  FETCH_STATIC_PROP_R/173   $142=     197:'rSettings'      198:'XUI'           	;0	<<245
254 151  FETCH_DIM_R/81            $143=     $142                 200:'default_entries'	;0
255 151  QM_ASSIGN/22              #141=     $143                 ?0                  	;0
256 151  ASSIGN/38                 ?120      16?6                 #141                	;0	<<252
257 152  GOTO/253                  ?0        ?33                  ?201                	;0
258 154  INIT_METHOD_CALL/112      ?0        16?19                202:'query'         	;1
259 154  ROPE_INIT/54              #146=     ?0                   204:'SELECT DISTINCT(`streams`.`id`) AS `id` FROM `epg_data` LEFT JOIN `streams` ON `streams`.`epg_id` = `epg_data`.`epg_id` AND `streams`.`channel_id` = `epg_data`.`channel_id` '	;3
260 154  ROPE_ADD/55               #146=     #146                 16?20               	;1
261 154  ROPE_END/56               #145=     #146                 205:';'             	;2
262 154  SEND_VAL_EX/116           ?80       #145                 ?1                  	;0
263 154  SEND_UNPACK/165           ?80       16?14                ?1                  	;0
264 154  DO_FCALL/60               ?124      ?0                   ?0                  	;0
265 155  INIT_METHOD_CALL/112      ?0        16?19                206:'num_rows'      	;0
266 155  DO_FCALL/60               $149=     ?0                   ?0                  	;0
267 155  ASSIGN/38                 ?126      16?8                 $149                	;0
268 156  INIT_METHOD_CALL/112      ?0        16?19                208:'query'         	;1
269 156  ROPE_INIT/54              #152=     ?0                   210:'SELECT DISTINCT(`streams`.`id`) AS `id` FROM `epg_data` LEFT JOIN `streams` ON `streams`.`epg_id` = `epg_data`.`epg_id` AND `streams`.`channel_id` = `epg_data`.`channel_id` '	;9
270 156  ROPE_ADD/55               #152=     #152                 16?20               	;1
271 156  ROPE_ADD/55               #152=     #152                 211:' ORDER BY '    	;2
272 156  ROPE_ADD/55               #152=     #152                 16?0                	;3
273 156  ROPE_ADD/55               #152=     #152                 212:' LIMIT '       	;4
274 156  ROPE_ADD/55               #152=     #152                 16?4                	;5
275 156  ROPE_ADD/55               #152=     #152                 213:', '            	;6
276 156  ROPE_ADD/55               #152=     #152                 16?6                	;7
277 156  ROPE_END/56               #151=     #152                 214:';'             	;8
278 156  SEND_VAL_EX/116           ?80       #151                 ?1                  	;0
279 156  SEND_UNPACK/165           ?80       16?14                ?1                  	;0
280 156  DO_FCALL/60               ?133      ?0                   ?0                  	;0
281 158  INIT_METHOD_CALL/112      ?0        16?19                215:'get_rows'      	;0
282 158  DO_FCALL/60               $158=     ?0                   ?0                  	;0
283 158  FE_RESET_R/77             $159=     $158                 ?289                	;0
284 158  FE_FETCH_R/78             ?0        $159                 16?21               	;289	>>289	<<288
285 159  FETCH_DIM_R/81            $161=     16?21                217:'id'            	;0
286 159  ASSIGN_DIM/147            ?136      16?2                 ?4414262            	;0
287 159  OP_DATA/137               ?0        $161                 ?0                  	;0
288 160  JMP/42                    ?0        ?284                 ?0                  	;0	>>284
289 160  FE_FREE/127               ?0        $159                 ?0                  	;0	<<283
290 162  GOTO/253                  ?0        ?180                 ?218                	;0
291 164  FE_RESET_R/77             $162=     16?16                ?354                	;0
292 164  FE_FETCH_R/78             ?0        $162                 16?17               	;354	>>354	<<353
293 165  IS_EQUAL/17               #163=     16?5                 16?17               	;0
294 165  JMPZ/43                   ?0        #163                 ?297                	;0	>>297
295 165  QM_ASSIGN/22              #164=     219:' paginator__item--active' ?0                  	;0
296 165  JMP/42                    ?0        ?298                 ?0                  	;0	>>298
297 165  QM_ASSIGN/22              #164=     220:''               ?0                  	;0	<<294
298 165  CONCAT/8                  #165=     221:'<li class="paginator__item' #164                	;0	<<296
299 165  CONCAT/8                  #166=     #165                 222:'"><a href="epg_view?search='	;0
300 165  INIT_FCALL_BY_NAME/59     ?0        ?0                   223:'urlencode'     	;1
301 165  FETCH_STATIC_PROP_FUNC_ARG/177 $167=     225:'rRequest'       226:'XUI'           	;1
302 165  FETCH_DIM_FUNC_ARG/93     $168=     $167                 228:'search'        	;1
303 165  SEND_VAR_EX/66            ?80       $168                 ?1                  	;0
304 165  DO_FCALL_BY_NAME/131      $169=     ?0                   ?0                  	;0
305 165  JMP_SET/152               #170=     $169                 ?307                	;0
306 165  QM_ASSIGN/22              #170=     229:''               ?0                  	;0
307 165  CONCAT/8                  #171=     #166                 #170                	;0
308 165  CONCAT/8                  #172=     #171                 230:'&category='    	;0
309 165  FETCH_STATIC_PROP_R/173   $173=     231:'rRequest'       232:'XUI'           	;0
310 165  FETCH_DIM_R/81            $174=     $173                 234:'category'      	;0
311 165  JMPZ/43                   ?0        $174                 ?319                	;0	>>319
312 165  INIT_FCALL_BY_NAME/59     ?0        ?0                   235:'intval'        	;1
313 165  FETCH_STATIC_PROP_FUNC_ARG/177 $175=     237:'rRequest'       238:'XUI'           	;1
314 165  FETCH_DIM_FUNC_ARG/93     $176=     $175                 240:'category'      	;1
315 165  SEND_VAR_EX/66            ?80       $176                 ?1                  	;0
316 165  DO_FCALL_BY_NAME/131      $177=     ?0                   ?0                  	;0
317 165  QM_ASSIGN/22              #178=     $177                 ?0                  	;0
318 165  JMP/42                    ?0        ?320                 ?0                  	;0	>>320
319 165  QM_ASSIGN/22              #178=     241:''               ?0                  	;0	<<311
320 165  CONCAT/8                  #179=     #172                 #178                	;0	<<318
321 165  CONCAT/8                  #180=     #179                 242:'&sort='        	;0
322 165  FETCH_STATIC_PROP_R/173   $181=     243:'rRequest'       244:'XUI'           	;0
323 165  FETCH_DIM_R/81            $182=     $181                 246:'sort'          	;0
324 165  JMPZ/43                   ?0        $182                 ?332                	;0	>>332
325 165  INIT_FCALL_BY_NAME/59     ?0        ?0                   247:'urlencode'     	;1
326 165  FETCH_STATIC_PROP_FUNC_ARG/177 $183=     249:'rRequest'       250:'XUI'           	;1
327 165  FETCH_DIM_FUNC_ARG/93     $184=     $183                 252:'sort'          	;1
328 165  SEND_VAR_EX/66            ?80       $184                 ?1                  	;0
329 165  DO_FCALL_BY_NAME/131      $185=     ?0                   ?0                  	;0
330 165  QM_ASSIGN/22              #186=     $185                 ?0                  	;0
331 165  JMP/42                    ?0        ?333                 ?0                  	;0	>>333
332 165  QM_ASSIGN/22              #186=     253:''               ?0                  	;0	<<324
333 165  CONCAT/8                  #187=     #180                 #186                	;0	<<331
334 165  CONCAT/8                  #188=     #187                 254:'&entries='     	;0
335 165  FETCH_STATIC_PROP_R/173   $189=     255:'rRequest'       256:'XUI'           	;0
336 165  FETCH_DIM_R/81            $190=     $189                 258:'entries'       	;0
337 165  JMPZ/43                   ?0        $190                 ?345                	;0	>>345
338 165  INIT_FCALL_BY_NAME/59     ?0        ?0                   259:'intval'        	;1
339 165  FETCH_STATIC_PROP_FUNC_ARG/177 $191=     261:'rRequest'       262:'XUI'           	;1
340 165  FETCH_DIM_FUNC_ARG/93     $192=     $191                 264:'entries'       	;1
341 165  SEND_VAR_EX/66            ?80       $192                 ?1                  	;0
342 165  DO_FCALL_BY_NAME/131      $193=     ?0                   ?0                  	;0
343 165  QM_ASSIGN/22              #194=     $193                 ?0                  	;0
344 165  JMP/42                    ?0        ?346                 ?0                  	;0	>>346
345 165  QM_ASSIGN/22              #194=     265:''               ?0                  	;0	<<337
346 165  CONCAT/8                  #195=     #188                 #194                	;0	<<344
347 165  CONCAT/8                  #196=     #195                 266:'&page='        	;0
348 165  CONCAT/8                  #197=     #196                 16?17               	;0
349 165  CONCAT/8                  #198=     #197                 267:'">'            	;0
350 165  CONCAT/8                  #199=     #198                 16?17               	;0
351 165  CONCAT/8                  #200=     #199                 268:'</a></li>'     	;0
352 165  ECHO/40                   ?0        #200                 ?0                  	;0
353 166  JMP/42                    ?0        ?292                 ?0                  	;0	>>292
354 166  FE_FREE/127               ?0        $162                 ?0                  	;0	<<291
355 169  INIT_FCALL_BY_NAME/59     ?0        ?0                   269:'count'         	;1
356 169  SEND_VAR_EX/66            ?80       16?16                ?1                  	;0
357 169  DO_FCALL_BY_NAME/131      $201=     ?0                   ?0                  	;0
358 169  SUB/2                     #202=     $201                 271:1               	;0
359 169  FETCH_DIM_R/81            $203=     16?16                #202                	;0
360 169  IS_SMALLER/19             #204=     $203                 16?15               	;0
361 169  BOOL_NOT/13               #205=     #204                 ?0                  	;0
362 169  JMPZ/43                   ?0        #205                 ?364                	;0	>>364
363 170  GOTO/253                  ?0        ?637                 ?272                	;0
364 172  INIT_FCALL_BY_NAME/59     ?0        ?0                   273:'count'         	;1	<<362
365 172  SEND_VAR_EX/66            ?80       16?16                ?1                  	;0
366 172  DO_FCALL_BY_NAME/131      $206=     ?0                   ?0                  	;0
367 172  IS_SMALLER/19             #207=     275:1                $206                	;0
368 172  BOOL_NOT/13               #208=     #207                 ?0                  	;0
369 172  JMPZ/43                   ?0        #208                 ?371                	;0	>>371
370 173  GOTO/253                  ?0        ?577                 ?276                	;0
371 175  ECHO/40                   ?0        277:'<li class=\'paginator__item\'><a href=\'javascript: void(0);\'>...</a></li>' ?0                  	;0	<<369
372 176  GOTO/253                  ?0        ?577                 ?278                	;0
373 178  ECHO/40                   ?0        279:'					<ul class="paginator">
						' ?0                  	;0
374 179  IS_SMALLER/19             #209=     280:1                16?5                	;0
375 179  BOOL_NOT/13               #210=     #209                 ?0                  	;0
376 179  JMPZ/43                   ?0        #210                 ?378                	;0	>>378
377 180  GOTO/253                  ?0        ?430                 ?281                	;0
378 182  INIT_FCALL_BY_NAME/59     ?0        ?0                   282:'urlencode'     	;1	<<376
379 182  FETCH_STATIC_PROP_FUNC_ARG/177 $211=     284:'rRequest'       285:'XUI'           	;1
380 182  FETCH_DIM_FUNC_ARG/93     $212=     $211                 287:'search'        	;1
381 182  SEND_VAR_EX/66            ?80       $212                 ?1                  	;0
382 182  DO_FCALL_BY_NAME/131      $213=     ?0                   ?0                  	;0
383 182  JMP_SET/152               #214=     $213                 ?385                	;0
384 182  QM_ASSIGN/22              #214=     288:''               ?0                  	;0
385 182  CONCAT/8                  #215=     289:'<li class="paginator__item paginator__item--prev">
								<a href="epg_view?search=' #214                	;0
386 182  CONCAT/8                  #216=     #215                 290:'&category='    	;0
387 182  FETCH_STATIC_PROP_R/173   $217=     291:'rRequest'       292:'XUI'           	;0
388 182  FETCH_DIM_R/81            $218=     $217                 294:'category'      	;0
389 182  JMPZ/43                   ?0        $218                 ?397                	;0	>>397
390 182  INIT_FCALL_BY_NAME/59     ?0        ?0                   295:'intval'        	;1
391 182  FETCH_STATIC_PROP_FUNC_ARG/177 $219=     297:'rRequest'       298:'XUI'           	;1
392 182  FETCH_DIM_FUNC_ARG/93     $220=     $219                 300:'category'      	;1
393 182  SEND_VAR_EX/66            ?80       $220                 ?1                  	;0
394 182  DO_FCALL_BY_NAME/131      $221=     ?0                   ?0                  	;0
395 182  QM_ASSIGN/22              #222=     $221                 ?0                  	;0
396 182  JMP/42                    ?0        ?398                 ?0                  	;0	>>398
397 182  QM_ASSIGN/22              #222=     301:''               ?0                  	;0	<<389
398 182  CONCAT/8                  #223=     #216                 #222                	;0	<<396
399 182  CONCAT/8                  #224=     #223                 302:'&sort='        	;0
400 182  FETCH_STATIC_PROP_R/173   $225=     303:'rRequest'       304:'XUI'           	;0
401 182  FETCH_DIM_R/81            $226=     $225                 306:'sort'          	;0
402 182  JMPZ/43                   ?0        $226                 ?410                	;0	>>410
403 182  INIT_FCALL_BY_NAME/59     ?0        ?0                   307:'urlencode'     	;1
404 182  FETCH_STATIC_PROP_FUNC_ARG/177 $227=     309:'rRequest'       310:'XUI'           	;1
405 182  FETCH_DIM_FUNC_ARG/93     $228=     $227                 312:'sort'          	;1
406 182  SEND_VAR_EX/66            ?80       $228                 ?1                  	;0
407 182  DO_FCALL_BY_NAME/131      $229=     ?0                   ?0                  	;0
408 182  QM_ASSIGN/22              #230=     $229                 ?0                  	;0
409 182  JMP/42                    ?0        ?411                 ?0                  	;0	>>411
410 182  QM_ASSIGN/22              #230=     313:''               ?0                  	;0	<<402
411 182  CONCAT/8                  #231=     #224                 #230                	;0	<<409
412 182  CONCAT/8                  #232=     #231                 314:'&entries='     	;0
413 182  FETCH_STATIC_PROP_R/173   $233=     315:'rRequest'       316:'XUI'           	;0
414 182  FETCH_DIM_R/81            $234=     $233                 318:'entries'       	;0
415 182  JMPZ/43                   ?0        $234                 ?423                	;0	>>423
416 182  INIT_FCALL_BY_NAME/59     ?0        ?0                   319:'intval'        	;1
417 182  FETCH_STATIC_PROP_FUNC_ARG/177 $235=     321:'rRequest'       322:'XUI'           	;1
418 182  FETCH_DIM_FUNC_ARG/93     $236=     $235                 324:'entries'       	;1
419 182  SEND_VAR_EX/66            ?80       $236                 ?1                  	;0
420 182  DO_FCALL_BY_NAME/131      $237=     ?0                   ?0                  	;0
421 182  QM_ASSIGN/22              #238=     $237                 ?0                  	;0
422 182  JMP/42                    ?0        ?424                 ?0                  	;0	>>424
423 182  QM_ASSIGN/22              #238=     325:''               ?0                  	;0	<<415
424 182  CONCAT/8                  #239=     #232                 #238                	;0	<<422
425 182  CONCAT/8                  #240=     #239                 326:'&page='        	;0
426 182  SUB/2                     #241=     16?5                 327:1               	;0
427 182  CONCAT/8                  #242=     #240                 #241                	;0
428 182  CONCAT/8                  #243=     #242                 328:'"><i class="mdi mdi-chevron-left"></i></a>
							</li>'	;0
429 182  ECHO/40                   ?0        #243                 ?0                  	;0
430 184  FETCH_DIM_R/81            $244=     16?16                329:0               	;0
431 184  IS_SMALLER/19             #245=     330:1                $244                	;0
432 184  BOOL_NOT/13               #246=     #245                 ?0                  	;0
433 184  JMPZ/43                   ?0        #246                 ?435                	;0	>>435
434 185  GOTO/253                  ?0        ?500                 ?331                	;0
435 187  GOTO/253                  ?0        ?436                 ?332                	;0	<<433
436 189  IS_EQUAL/17               #247=     16?5                 333:1               	;0
437 189  JMPZ/43                   ?0        #247                 ?440                	;0	>>440
438 189  QM_ASSIGN/22              #248=     334:' paginator__item--active' ?0                  	;0
439 189  JMP/42                    ?0        ?441                 ?0                  	;0	>>441
440 189  QM_ASSIGN/22              #248=     335:''               ?0                  	;0	<<437
441 189  CONCAT/8                  #249=     336:'<li class="paginator__item' #248                	;0	<<439
442 189  CONCAT/8                  #250=     #249                 337:'"><a href="epg_view?search='	;0
443 189  INIT_FCALL_BY_NAME/59     ?0        ?0                   338:'urlencode'     	;1
444 189  FETCH_STATIC_PROP_FUNC_ARG/177 $251=     340:'rRequest'       341:'XUI'           	;1
445 189  FETCH_DIM_FUNC_ARG/93     $252=     $251                 343:'search'        	;1
446 189  SEND_VAR_EX/66            ?80       $252                 ?1                  	;0
447 189  DO_FCALL_BY_NAME/131      $253=     ?0                   ?0                  	;0
448 189  JMP_SET/152               #254=     $253                 ?450                	;0
449 189  QM_ASSIGN/22              #254=     344:''               ?0                  	;0
450 189  CONCAT/8                  #255=     #250                 #254                	;0
451 189  CONCAT/8                  #256=     #255                 345:'&category='    	;0
452 189  FETCH_STATIC_PROP_R/173   $257=     346:'rRequest'       347:'XUI'           	;0
453 189  FETCH_DIM_R/81            $258=     $257                 349:'category'      	;0
454 189  JMPZ/43                   ?0        $258                 ?462                	;0	>>462
455 189  INIT_FCALL_BY_NAME/59     ?0        ?0                   350:'intval'        	;1
456 189  FETCH_STATIC_PROP_FUNC_ARG/177 $259=     352:'rRequest'       353:'XUI'           	;1
457 189  FETCH_DIM_FUNC_ARG/93     $260=     $259                 355:'category'      	;1
458 189  SEND_VAR_EX/66            ?80       $260                 ?1                  	;0
459 189  DO_FCALL_BY_NAME/131      $261=     ?0                   ?0                  	;0
460 189  QM_ASSIGN/22              #262=     $261                 ?0                  	;0
461 189  JMP/42                    ?0        ?463                 ?0                  	;0	>>463
462 189  QM_ASSIGN/22              #262=     356:''               ?0                  	;0	<<454
463 189  CONCAT/8                  #263=     #256                 #262                	;0	<<461
464 189  CONCAT/8                  #264=     #263                 357:'&sort='        	;0
465 189  FETCH_STATIC_PROP_R/173   $265=     358:'rRequest'       359:'XUI'           	;0
466 189  FETCH_DIM_R/81            $266=     $265                 361:'sort'          	;0
467 189  JMPZ/43                   ?0        $266                 ?475                	;0	>>475
468 189  INIT_FCALL_BY_NAME/59     ?0        ?0                   362:'urlencode'     	;1
469 189  FETCH_STATIC_PROP_FUNC_ARG/177 $267=     364:'rRequest'       365:'XUI'           	;1
470 189  FETCH_DIM_FUNC_ARG/93     $268=     $267                 367:'sort'          	;1
471 189  SEND_VAR_EX/66            ?80       $268                 ?1                  	;0
472 189  DO_FCALL_BY_NAME/131      $269=     ?0                   ?0                  	;0
473 189  QM_ASSIGN/22              #270=     $269                 ?0                  	;0
474 189  JMP/42                    ?0        ?476                 ?0                  	;0	>>476
475 189  QM_ASSIGN/22              #270=     368:''               ?0                  	;0	<<467
476 189  CONCAT/8                  #271=     #264                 #270                	;0	<<474
477 189  CONCAT/8                  #272=     #271                 369:'&entries='     	;0
478 189  FETCH_STATIC_PROP_R/173   $273=     370:'rRequest'       371:'XUI'           	;0
479 189  FETCH_DIM_R/81            $274=     $273                 373:'entries'       	;0
480 189  JMPZ/43                   ?0        $274                 ?488                	;0	>>488
481 189  INIT_FCALL_BY_NAME/59     ?0        ?0                   374:'intval'        	;1
482 189  FETCH_STATIC_PROP_FUNC_ARG/177 $275=     376:'rRequest'       377:'XUI'           	;1
483 189  FETCH_DIM_FUNC_ARG/93     $276=     $275                 379:'entries'       	;1
484 189  SEND_VAR_EX/66            ?80       $276                 ?1                  	;0
485 189  DO_FCALL_BY_NAME/131      $277=     ?0                   ?0                  	;0
486 189  QM_ASSIGN/22              #278=     $277                 ?0                  	;0
487 189  JMP/42                    ?0        ?489                 ?0                  	;0	>>489
488 189  QM_ASSIGN/22              #278=     380:''               ?0                  	;0	<<480
489 189  CONCAT/8                  #279=     #272                 #278                	;0	<<487
490 189  CONCAT/8                  #280=     #279                 381:'&page=1">1</a></li>'	;0
491 189  ECHO/40                   ?0        #280                 ?0                  	;0
492 190  INIT_FCALL_BY_NAME/59     ?0        ?0                   382:'count'         	;1
493 190  SEND_VAR_EX/66            ?80       16?16                ?1                  	;0
494 190  DO_FCALL_BY_NAME/131      $281=     ?0                   ?0                  	;0
495 190  IS_SMALLER/19             #282=     384:1                $281                	;0
496 190  BOOL_NOT/13               #283=     #282                 ?0                  	;0
497 190  JMPZ/43                   ?0        #283                 ?499                	;0	>>499
498 191  GOTO/253                  ?0        ?500                 ?385                	;0
499 193  ECHO/40                   ?0        386:'<li class=\'paginator__item\'><a href=\'javascript: void(0);\'>...</a></li>' ?0                  	;0	<<497
500 196  GOTO/253                  ?0        ?291                 ?387                	;0
501 198  GOTO/253                  ?0        ?509                 ?388                	;0
502 200  INIT_FCALL_BY_NAME/59     ?0        ?0                   389:'implode'       	;2
503 200  SEND_VAL_EX/116           ?80       391:','              ?1                  	;0
504 200  SEND_VAR_EX/66            ?96       16?9                 ?2                  	;0
505 200  DO_FCALL_BY_NAME/131      $284=     ?0                   ?0                  	;0
506 200  CONCAT/8                  #285=     392:'FIELD(`streams`.`id`,' $284                	;0
507 200  CONCAT/8                  #286=     #285                 393:')'             	;0
508 200  ASSIGN/38                 ?263      16?0                 #286                	;0
509 202  GOTO/253                  ?0        ?5                   ?394                	;0
510 203  GOTO/253                  ?0        ?1                   ?395                	;0
511 205  ECHO/40                   ?0        396:' selected'      ?0                  	;0
512 207  ECHO/40                   ?0        397:'>'              ?0                  	;0
513 208  FETCH_DIM_R/81            $288=     16?22                398:'all_categories'	;0
514 208  ECHO/40                   ?0        $288                 ?0                  	;0
515 209  ECHO/40                   ?0        399:'</option>
										' ?0                  	;0
516 210  GOTO/253                  ?0        ?97                  ?400                	;0
517 212  ECHO/40                   ?0        401:'									</select>
								</div>
								<label class="col-md-1 col-form-label text-center" for="user_show_entries">Show</label>
								<div class="col-md-1">
									<select id="entries" name="entries" class="form-control" data-toggle="select2">
										' ?0                  	;0
518 213  FE_RESET_R/77             $289=     402:array (
  0 => 10,
  1 => 25,
  2 => 50,
  3 => 250,
  4 => 500,
  5 => 1000,
) ?533                	;0
519 213  FE_FETCH_R/78             ?0        $289                 16?23               	;533	>>533	<<532
520 214  ECHO/40                   ?0        403:'										<option' ?0                  	;0
521 215  IS_EQUAL/17               #290=     16?6                 16?23               	;0
522 215  BOOL_NOT/13               #291=     #290                 ?0                  	;0
523 215  JMPZ/43                   ?0        #291                 ?526                	;0	>>526
524 216  NOP/0                     ?0        ?0                   ?0                  	;1
525 216  GOTO/253                  ?0        ?527                 ?404                	;0
526 218  ECHO/40                   ?0        405:' selected'      ?0                  	;0	<<523
527 220  ECHO/40                   ?0        406:' value="'       ?0                  	;0
528 221  ECHO/40                   ?0        16?23                ?0                  	;0
529 222  ECHO/40                   ?0        407:'">'             ?0                  	;0
530 223  ECHO/40                   ?0        16?23                ?0                  	;0
531 224  ECHO/40                   ?0        408:'</option>
										' ?0                  	;0
532 225  JMP/42                    ?0        ?519                 ?0                  	;0	>>519
533 225  FE_FREE/127               ?0        $289                 ?0                  	;0	<<518
534 228  ECHO/40                   ?0        409:'									</select>
								</div>
								<div class="btn-group col-md-2">
									<button type="submit" class="btn btn-info">Search</button>
									<button type="button" onClick="clearForm()" class="btn btn-warning"><i class="mdi mdi-filter-remove"></i></button>
								</div>
							</div>
						</div>
					</div>
				</form>
			</div>
		</div>
		<div class="row">
			<div class="col-12">
				' ?0                  	;0
535 229  INIT_FCALL_BY_NAME/59     ?0        ?0                   410:'count'         	;1
536 229  SEND_VAR_EX/66            ?80       16?2                 ?1                  	;0
537 229  DO_FCALL_BY_NAME/131      $292=     ?0                   ?0                  	;0
538 229  IS_SMALLER/19             #293=     412:0                $292                	;0
539 229  JMPZ/43                   ?0        #293                 ?541                	;0	>>541
540 230  GOTO/253                  ?0        ?211                 ?413                	;0
541 232  GOTO/253                  ?0        ?209                 ?414                	;0	<<539
542 234  INIT_METHOD_CALL/112      ?0        16?19                415:'query'         	;1
543 234  ROPE_INIT/54              #295=     ?0                   417:'SELECT COUNT(`id`) AS `count` FROM `streams` '	;3
544 234  ROPE_ADD/55               #295=     #295                 16?20               	;1
545 234  ROPE_END/56               #294=     #295                 418:';'             	;2
546 234  SEND_VAL_EX/116           ?80       #294                 ?1                  	;0
547 234  SEND_UNPACK/165           ?80       16?14                ?1                  	;0
548 234  DO_FCALL/60               ?273      ?0                   ?0                  	;0
549 235  INIT_METHOD_CALL/112      ?0        16?19                419:'get_row'       	;0
550 235  DO_FCALL/60               $298=     ?0                   ?0                  	;0
551 235  FETCH_DIM_R/81            $299=     $298                 421:'count'         	;0
552 235  ASSIGN/38                 ?276      16?8                 $299                	;0
553 236  INIT_METHOD_CALL/112      ?0        16?19                422:'query'         	;1
554 236  ROPE_INIT/54              #302=     ?0                   424:'SELECT `id` FROM `streams` '	;9
555 236  ROPE_ADD/55               #302=     #302                 16?20               	;1
556 236  ROPE_ADD/55               #302=     #302                 425:' ORDER BY '    	;2
557 236  ROPE_ADD/55               #302=     #302                 16?0                	;3
558 236  ROPE_ADD/55               #302=     #302                 426:' LIMIT '       	;4
559 236  ROPE_ADD/55               #302=     #302                 16?4                	;5
560 236  ROPE_ADD/55               #302=     #302                 427:', '            	;6
561 236  ROPE_ADD/55               #302=     #302                 16?6                	;7
562 236  ROPE_END/56               #301=     #302                 428:';'             	;8
563 236  SEND_VAL_EX/116           ?80       #301                 ?1                  	;0
564 236  SEND_UNPACK/165           ?80       16?14                ?1                  	;0
565 236  DO_FCALL/60               ?283      ?0                   ?0                  	;0
566 237  GOTO/253                  ?0        ?281                 ?429                	;0
567 239  GOTO/253                  ?0        ?258                 ?430                	;0
568 241  ASSIGN/38                 ?284      16?20                431:''              	;0
569 242  GOTO/253                  ?0        ?576                 ?432                	;0
570 244  INIT_FCALL_BY_NAME/59     ?0        ?0                   433:'implode'       	;2
571 244  SEND_VAL_EX/116           ?80       435:' AND '          ?1                  	;0
572 244  SEND_VAR_EX/66            ?96       16?13                ?2                  	;0
573 244  DO_FCALL_BY_NAME/131      $309=     ?0                   ?0                  	;0
574 244  CONCAT/8                  #310=     436:'WHERE '         $309                	;0
575 244  ASSIGN/38                 ?287      16?20                #310                	;0
576 246  GOTO/253                  ?0        ?47                  ?437                	;0
577 249  IS_EQUAL/17               #312=     16?5                 16?15               	;0
578 249  JMPZ/43                   ?0        #312                 ?581                	;0	>>581
579 249  QM_ASSIGN/22              #313=     438:' paginator__item--active' ?0                  	;0
580 249  JMP/42                    ?0        ?582                 ?0                  	;0	>>582
581 249  QM_ASSIGN/22              #313=     439:''               ?0                  	;0	<<578
582 249  CONCAT/8                  #314=     440:'<li class="paginator__item' #313                	;0	<<580
583 249  CONCAT/8                  #315=     #314                 441:'"><a href="epg_view?search='	;0
584 249  INIT_FCALL_BY_NAME/59     ?0        ?0                   442:'urlencode'     	;1
585 249  FETCH_STATIC_PROP_FUNC_ARG/177 $316=     444:'rRequest'       445:'XUI'           	;1
586 249  FETCH_DIM_FUNC_ARG/93     $317=     $316                 447:'search'        	;1
587 249  SEND_VAR_EX/66            ?80       $317                 ?1                  	;0
588 249  DO_FCALL_BY_NAME/131      $318=     ?0                   ?0                  	;0
589 249  JMP_SET/152               #319=     $318                 ?591                	;0
590 249  QM_ASSIGN/22              #319=     448:''               ?0                  	;0
591 249  CONCAT/8                  #320=     #315                 #319                	;0
592 249  CONCAT/8                  #321=     #320                 449:'&category='    	;0
593 249  FETCH_STATIC_PROP_R/173   $322=     450:'rRequest'       451:'XUI'           	;0
594 249  FETCH_DIM_R/81            $323=     $322                 453:'category'      	;0
595 249  JMPZ/43                   ?0        $323                 ?603                	;0	>>603
596 249  INIT_FCALL_BY_NAME/59     ?0        ?0                   454:'intval'        	;1
597 249  FETCH_STATIC_PROP_FUNC_ARG/177 $324=     456:'rRequest'       457:'XUI'           	;1
598 249  FETCH_DIM_FUNC_ARG/93     $325=     $324                 459:'category'      	;1
599 249  SEND_VAR_EX/66            ?80       $325                 ?1                  	;0
600 249  DO_FCALL_BY_NAME/131      $326=     ?0                   ?0                  	;0
601 249  QM_ASSIGN/22              #327=     $326                 ?0                  	;0
602 249  JMP/42                    ?0        ?604                 ?0                  	;0	>>604
603 249  QM_ASSIGN/22              #327=     460:''               ?0                  	;0	<<595
604 249  CONCAT/8                  #328=     #321                 #327                	;0	<<602
605 249  CONCAT/8                  #329=     #328                 461:'&sort='        	;0
606 249  FETCH_STATIC_PROP_R/173   $330=     462:'rRequest'       463:'XUI'           	;0
607 249  FETCH_DIM_R/81            $331=     $330                 465:'sort'          	;0
608 249  JMPZ/43                   ?0        $331                 ?616                	;0	>>616
609 249  INIT_FCALL_BY_NAME/59     ?0        ?0                   466:'urlencode'     	;1
610 249  FETCH_STATIC_PROP_FUNC_ARG/177 $332=     468:'rRequest'       469:'XUI'           	;1
611 249  FETCH_DIM_FUNC_ARG/93     $333=     $332                 471:'sort'          	;1
612 249  SEND_VAR_EX/66            ?80       $333                 ?1                  	;0
613 249  DO_FCALL_BY_NAME/131      $334=     ?0                   ?0                  	;0
614 249  QM_ASSIGN/22              #335=     $334                 ?0                  	;0
615 249  JMP/42                    ?0        ?617                 ?0                  	;0	>>617
616 249  QM_ASSIGN/22              #335=     472:''               ?0                  	;0	<<608
617 249  CONCAT/8                  #336=     #329                 #335                	;0	<<615
618 249  CONCAT/8                  #337=     #336                 473:'&entries='     	;0
619 249  FETCH_STATIC_PROP_R/173   $338=     474:'rRequest'       475:'XUI'           	;0
620 249  FETCH_DIM_R/81            $339=     $338                 477:'entries'       	;0
621 249  JMPZ/43                   ?0        $339                 ?629                	;0	>>629
622 249  INIT_FCALL_BY_NAME/59     ?0        ?0                   478:'intval'        	;1
623 249  FETCH_STATIC_PROP_FUNC_ARG/177 $340=     480:'rRequest'       481:'XUI'           	;1
624 249  FETCH_DIM_FUNC_ARG/93     $341=     $340                 483:'entries'       	;1
625 249  SEND_VAR_EX/66            ?80       $341                 ?1                  	;0
626 249  DO_FCALL_BY_NAME/131      $342=     ?0                   ?0                  	;0
627 249  QM_ASSIGN/22              #343=     $342                 ?0                  	;0
628 249  JMP/42                    ?0        ?630                 ?0                  	;0	>>630
629 249  QM_ASSIGN/22              #343=     484:''               ?0                  	;0	<<621
630 249  CONCAT/8                  #344=     #337                 #343                	;0	<<628
631 249  CONCAT/8                  #345=     #344                 485:'&page='        	;0
632 249  CONCAT/8                  #346=     #345                 16?15               	;0
633 249  CONCAT/8                  #347=     #346                 486:'">'            	;0
634 249  CONCAT/8                  #348=     #347                 16?15               	;0
635 249  CONCAT/8                  #349=     #348                 487:'</a></li>'     	;0
636 249  ECHO/40                   ?0        #349                 ?0                  	;0
637 251  IS_SMALLER/19             #350=     16?5                 16?15               	;0
638 251  BOOL_NOT/13               #351=     #350                 ?0                  	;0
639 251  JMPZ/43                   ?0        #351                 ?641                	;0	>>641
640 252  GOTO/253                  ?0        ?12                  ?488                	;0
641 254  INIT_FCALL_BY_NAME/59     ?0        ?0                   489:'urlencode'     	;1	<<639
642 254  FETCH_STATIC_PROP_FUNC_ARG/177 $352=     491:'rRequest'       492:'XUI'           	;1
643 254  FETCH_DIM_FUNC_ARG/93     $353=     $352                 494:'search'        	;1
644 254  SEND_VAR_EX/66            ?80       $353                 ?1                  	;0
645 254  DO_FCALL_BY_NAME/131      $354=     ?0                   ?0                  	;0
646 254  JMP_SET/152               #355=     $354                 ?648                	;0
647 254  QM_ASSIGN/22              #355=     495:''               ?0                  	;0
648 254  CONCAT/8                  #356=     496:'<li class="paginator__item paginator__item--next">
								<a href="epg_view?search=' #355                	;0
649 254  CONCAT/8                  #357=     #356                 497:'&category='    	;0
650 254  FETCH_STATIC_PROP_R/173   $358=     498:'rRequest'       499:'XUI'           	;0
651 254  FETCH_DIM_R/81            $359=     $358                 501:'category'      	;0
652 254  JMPZ/43                   ?0        $359                 ?660                	;0	>>660
653 254  INIT_FCALL_BY_NAME/59     ?0        ?0                   502:'intval'        	;1
654 254  FETCH_STATIC_PROP_FUNC_ARG/177 $360=     504:'rRequest'       505:'XUI'           	;1
655 254  FETCH_DIM_FUNC_ARG/93     $361=     $360                 507:'category'      	;1
656 254  SEND_VAR_EX/66            ?80       $361                 ?1                  	;0
657 254  DO_FCALL_BY_NAME/131      $362=     ?0                   ?0                  	;0
658 254  QM_ASSIGN/22              #363=     $362                 ?0                  	;0
659 254  JMP/42                    ?0        ?661                 ?0                  	;0	>>661
660 254  QM_ASSIGN/22              #363=     508:''               ?0                  	;0	<<652
661 254  CONCAT/8                  #364=     #357                 #363                	;0	<<659
662 254  CONCAT/8                  #365=     #364                 509:'&sort='        	;0
663 254  FETCH_STATIC_PROP_R/173   $366=     510:'rRequest'       511:'XUI'           	;0
664 254  FETCH_DIM_R/81            $367=     $366                 513:'sort'          	;0
665 254  JMPZ/43                   ?0        $367                 ?673                	;0	>>673
666 254  INIT_FCALL_BY_NAME/59     ?0        ?0                   514:'urlencode'     	;1
667 254  FETCH_STATIC_PROP_FUNC_ARG/177 $368=     516:'rRequest'       517:'XUI'           	;1
668 254  FETCH_DIM_FUNC_ARG/93     $369=     $368                 519:'sort'          	;1
669 254  SEND_VAR_EX/66            ?80       $369                 ?1                  	;0
670 254  DO_FCALL_BY_NAME/131      $370=     ?0                   ?0                  	;0
671 254  QM_ASSIGN/22              #371=     $370                 ?0                  	;0
672 254  JMP/42                    ?0        ?674                 ?0                  	;0	>>674
673 254  QM_ASSIGN/22              #371=     520:''               ?0                  	;0	<<665
674 254  CONCAT/8                  #372=     #365                 #371                	;0	<<672
675 254  CONCAT/8                  #373=     #372                 521:'&entries='     	;0
676 254  FETCH_STATIC_PROP_R/173   $374=     522:'rRequest'       523:'XUI'           	;0
677 254  FETCH_DIM_R/81            $375=     $374                 525:'entries'       	;0
678 254  JMPZ/43                   ?0        $375                 ?686                	;0	>>686
679 254  INIT_FCALL_BY_NAME/59     ?0        ?0                   526:'intval'        	;1
680 254  FETCH_STATIC_PROP_FUNC_ARG/177 $376=     528:'rRequest'       529:'XUI'           	;1
681 254  FETCH_DIM_FUNC_ARG/93     $377=     $376                 531:'entries'       	;1
682 254  SEND_VAR_EX/66            ?80       $377                 ?1                  	;0
683 254  DO_FCALL_BY_NAME/131      $378=     ?0                   ?0                  	;0
684 254  QM_ASSIGN/22              #379=     $378                 ?0                  	;0
685 254  JMP/42                    ?0        ?687                 ?0                  	;0	>>687
686 254  QM_ASSIGN/22              #379=     532:''               ?0                  	;0	<<678
687 254  CONCAT/8                  #380=     #373                 #379                	;0	<<685
688 254  CONCAT/8                  #381=     #380                 533:'&page='        	;0
689 254  ADD/1                     #382=     16?5                 534:1               	;0
690 254  CONCAT/8                  #383=     #381                 #382                	;0
691 254  CONCAT/8                  #384=     #383                 535:'"><i class="mdi mdi-chevron-right"></i></a>
							</li>'	;0
692 254  ECHO/40                   ?0        #384                 ?0                  	;0
693 255  GOTO/253                  ?0        ?12                  ?536                	;0
694 257  FETCH_STATIC_PROP_R/173   $386=     537:'rRequest'       538:'XUI'           	;0
695 257  FETCH_DIM_R/81            $387=     $386                 540:'search'        	;0
696 257  CONCAT/8                  #388=     541:'%'              $387                	;0
697 257  CONCAT/8                  #389=     #388                 542:'%'             	;0
698 257  ASSIGN_DIM/147            ?361      16?14                ?4397406            	;0
699 257  OP_DATA/137               ?0        #389                 ?0                  	;0
700 258  FETCH_STATIC_PROP_R/173   $391=     543:'rRequest'       544:'XUI'           	;0
701 258  FETCH_DIM_R/81            $392=     $391                 546:'search'        	;0
702 258  CONCAT/8                  #393=     547:'%'              $392                	;0
703 258  CONCAT/8                  #394=     #393                 548:'%'             	;0
704 258  ASSIGN_DIM/147            ?366      16?14                ?0                  	;0
705 258  OP_DATA/137               ?0        #394                 ?0                  	;0
706 259  FETCH_STATIC_PROP_R/173   $396=     549:'rRequest'       550:'XUI'           	;0
707 259  FETCH_DIM_R/81            $397=     $396                 552:'search'        	;0
708 259  ASSIGN_DIM/147            ?371      16?14                ?0                  	;0
709 259  OP_DATA/137               ?0        $397                 ?0                  	;0
710 261  INIT_FCALL_BY_NAME/59     ?0        ?0                   553:'count'         	;1
711 261  SEND_VAR_EX/66            ?80       16?13                ?1                  	;0
712 261  DO_FCALL_BY_NAME/131      $398=     ?0                   ?0                  	;0
713 261  IS_SMALLER/19             #399=     555:0                $398                	;0
714 261  JMPZ/43                   ?0        #399                 ?716                	;0	>>716
715 262  GOTO/253                  ?0        ?570                 ?556                	;0
716 264  GOTO/253                  ?0        ?568                 ?557                	;0	<<714
717 267  ASSIGN/38                 $400=     16?14                558:array (
)       	;0
718 267  ASSIGN/38                 ?377      16?13                $400                	;0
719 268  ASSIGN_DIM/147            ?378      16?13                ?2670195408         	;0
720 268  OP_DATA/137               ?0        559:'`streams`.`type` = 1 AND `streams`.`epg_id` IS NOT NULL AND `streams`.`channel_id` IS NOT NULL' ?0                  	;0
721 269  INIT_FCALL_BY_NAME/59     ?0        ?0                   560:'implode'       	;2
722 269  SEND_VAL_EX/116           ?80       562:','              ?1                  	;0
723 269  INIT_FCALL_BY_NAME/59     ?0        ?0                   563:'array_map'     	;2
724 269  SEND_VAL_EX/116           ?80       565:'intval'         ?1                  	;0
725 269  FETCH_DIM_FUNC_ARG/93     $404=     16?7                 566:'stream_ids'    	;2
726 269  SEND_VAR_EX/66            ?96       $404                 ?2                  	;0
727 269  DO_FCALL_BY_NAME/131      $405=     ?0                   ?0                  	;0
728 269  SEND_VAR_NO_REF_EX/50     ?96       $405                 ?2                  	;0
729 269  DO_FCALL_BY_NAME/131      $406=     ?0                   ?0                  	;0
730 269  CONCAT/8                  #407=     567:'`streams`.`id` IN (' $406                	;0
731 269  CONCAT/8                  #408=     #407                 568:')'             	;0
732 269  ASSIGN_DIM/147            ?379      16?13                ?0                  	;0
733 269  OP_DATA/137               ?0        #408                 ?0                  	;0
734 270  FETCH_STATIC_PROP_IS/176  $409=     569:'rRequest'       570:'XUI'           	;0
735 270  ISSET_ISEMPTY_DIM_OBJ/115 #410=     $409                 572:'category'      	;33554432
736 270  JMPZ_EX/46                #410=     #410                 ?744                	;0	>>744
737 270  INIT_FCALL_BY_NAME/59     ?0        ?0                   573:'intval'        	;1
738 270  FETCH_STATIC_PROP_FUNC_ARG/177 $411=     575:'rRequest'       576:'XUI'           	;1
739 270  FETCH_DIM_FUNC_ARG/93     $412=     $411                 578:'category'      	;1
740 270  SEND_VAR_EX/66            ?80       $412                 ?1                  	;0
741 270  DO_FCALL_BY_NAME/131      $413=     ?0                   ?0                  	;0
742 270  IS_SMALLER/19             #414=     579:0                $413                	;0
743 270  BOOL/52                   #410=     #414                 ?0                  	;0
744 270  BOOL_NOT/13               #415=     #410                 ?0                  	;0	<<736
745 270  JMPZ/43                   ?0        #415                 ?747                	;0	>>747
746 271  GOTO/253                  ?0        ?168                 ?580                	;0
747 273  GOTO/253                  ?0        ?162                 ?581                	;0	<<745
748 275  INCLUDE_OR_EVAL/73        ?392      582:'footer.php'     ?0                  	;2
749 276  NOP/0                     ?0        583:1                ?0                  	;4294967295
*/

?>
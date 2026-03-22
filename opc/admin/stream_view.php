<?php


/*
#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
0    3     JMP/42                    ?0        ?474                 ?0                  	;0	>>474
1    6     ECHO/40                   ?0        1:'					</ul>
					<div class="tab-content">
						<div class="tab-pane active" id="servers">
							<div class="table">
								<table id="datatable" class="table table-striped table-borderless mb-0">
									<thead>
										<tr>
											<th></th>
											<th></th>
											<th></th>
											<th>Source</th>
											<th>Clients</th>
                                            ' ?0                  	;0
2    7     FETCH_DIM_R/81            $47=      16?0                 2:'type'            	;0
3    7     IS_EQUAL/17               #48=      $47                  3:2                 	;0
4    7     JMPZ/43                   ?0        #48                  ?6                  	;0	>>6
5    8     GOTO/253                  ?0        ?1217                ?4                  	;0
6    10    ECHO/40                   ?0        5:'                                            <th>Uptime</th>
                                            ' ?0                  	;0	<<4
7    11    GOTO/253                  ?0        ?1218                ?6                  	;0
8    12    GOTO/253                  ?0        ?1217                ?7                  	;0
9    14    FETCH_DIM_R/81            $49=      16?0                 8:'vframes_server_id'	;0
10   14    IS_SMALLER/19             #50=      9:0                  $49                 	;0
11   14    BOOL_NOT/13               #51=      #50                  ?0                  	;0
12   14    JMPZ/43                   ?0        #51                  ?14                 	;0	>>14
13   15    GOTO/253                  ?0        ?1027                ?10                 	;0
14   17    INIT_FCALL_BY_NAME/59     ?0        ?0                   11:'time'           	;0	<<12
15   17    DO_FCALL_BY_NAME/131      $52=      ?0                   ?0                  	;0
16   17    ADD/1                     #53=      $52                  13:3600             	;0
17   17    ASSIGN/38                 ?7        16?1                 #53                 	;0
18   18    INIT_FCALL_BY_NAME/59     ?0        ?0                   14:'session_id'     	;0
19   18    DO_FCALL_BY_NAME/131      $55=      ?0                   ?0                  	;0
20   18    INIT_ARRAY/71             #56=      $55                  16:'session_id'     	;18
21   18    ADD_ARRAY_ELEMENT/72      #56=      16?1                 17:'expires'        	;0
22   18    INIT_FCALL_BY_NAME/59     ?0        ?0                   18:'intval'         	;1
23   18    FETCH_STATIC_PROP_FUNC_ARG/177 $57=      20:'rRequest'        21:'XUI'            	;1
24   18    FETCH_DIM_FUNC_ARG/93     $58=      $57                  23:'id'             	;1
25   18    SEND_VAR_EX/66            ?80       $58                  ?1                  	;0
26   18    DO_FCALL_BY_NAME/131      $59=      ?0                   ?0                  	;0
27   18    ADD_ARRAY_ELEMENT/72      #56=      $59                  24:'stream_id'      	;0
28   18    INIT_STATIC_METHOD_CALL/113 ?0        25:'XUI'             27:'aD72B4259CA295B2'	;0
29   18    DO_FCALL/60               $60=      ?0                   ?0                  	;0
30   18    ADD_ARRAY_ELEMENT/72      #56=      $60                  29:'ip'             	;0
31   18    ASSIGN/38                 ?14       16?2                 #56                 	;0
32   19    INIT_STATIC_METHOD_CALL/113 ?0        30:'Xui\\Functions'  32:'encrypt'        	;3
33   19    INIT_FCALL_BY_NAME/59     ?0        ?0                   34:'json_encode'    	;1
34   19    SEND_VAR_EX/66            ?80       16?2                 ?1                  	;0
35   19    DO_FCALL_BY_NAME/131      $62=      ?0                   ?0                  	;0
36   19    SEND_VAR_NO_REF_EX/50     ?80       $62                  ?1                  	;0
37   19    FETCH_STATIC_PROP_FUNC_ARG/177 $63=      36:'rSettings'       37:'XUI'            	;2
38   19    FETCH_DIM_FUNC_ARG/93     $64=      $63                  39:'live_streaming_pass'	;2
39   19    SEND_VAR_EX/66            ?96       $64                  ?2                  	;0
40   19    FETCH_CONSTANT/99         #65=      ?0                   40:'OPENSSL_EXTRA'  	;16
41   19    SEND_VAL_EX/116           ?112      #65                  ?3                  	;0
42   19    DO_FCALL/60               $66=      ?0                   ?0                  	;0
43   19    ASSIGN/38                 ?20       16?3                 $66                 	;0
44   20    INIT_FCALL_BY_NAME/59     ?0        ?0                   43:'a41659d47a278Ceb'	;0
45   20    DO_FCALL_BY_NAME/131      $68=      ?0                   ?0                  	;0
46   20    JMPZ/43                   ?0        $68                  ?48                 	;0	>>48
47   21    GOTO/253                  ?0        ?433                 ?45                 	;0
48   23    GOTO/253                  ?0        ?403                 ?46                 	;0	<<46
49   25    INIT_STATIC_METHOD_CALL/113 ?0        47:'XUI'             49:'a5d0a3407690f047'	;2
50   25    INIT_FCALL_BY_NAME/59     ?0        ?0                   51:'intval'         	;1
51   25    FETCH_DIM_FUNC_ARG/93     $69=      16?4                 53:'duration_secs'  	;1
52   25    SEND_VAR_EX/66            ?80       $69                  ?1                  	;0
53   25    DO_FCALL_BY_NAME/131      $70=      ?0                   ?0                  	;0
54   25    SEND_VAR_NO_REF_EX/50     ?80       $70                  ?1                  	;0
55   25    SEND_VAL_EX/116           ?96       54:false             ?2                  	;0
56   25    DO_FCALL/60               $71=      ?0                   ?0                  	;0
57   25    ECHO/40                   ?0        $71                  ?0                  	;0
58   26    ECHO/40                   ?0        55:'">
                                        </div>
                                    </div>
                                    <div class="form-group row mb-4">
                                        <label class="col-md-2 col-form-label" for="rating">' ?0                  	;0
59   27    FETCH_DIM_R/81            $72=      16?5                 56:'rating'         	;0
60   27    ECHO/40                   ?0        $72                  ?0                  	;0
61   28    ECHO/40                   ?0        57:'</label>
                                        <div class="col-md-4">
                                            <input readonly type="text" class="form-control text-center" id="rating" name="rating" value="' ?0                  	;0
62   29    INIT_FCALL_BY_NAME/59     ?0        ?0                   58:'htmlspecialchars'	;1
63   29    FETCH_DIM_FUNC_ARG/93     $73=      16?4                 60:'rating'         	;1
64   29    SEND_VAR_EX/66            ?80       $73                  ?1                  	;0
65   29    DO_FCALL_BY_NAME/131      $74=      ?0                   ?0                  	;0
66   29    ECHO/40                   ?0        $74                  ?0                  	;0
67   30    GOTO/253                  ?0        ?1050                ?61                 	;0
68   32    INIT_METHOD_CALL/112      ?0        16?6                 62:'query'          	;2
69   32    SEND_VAL_EX/116           ?80       64:'SELECT * FROM `streams_series` WHERE `id` = (SELECT `series_id` FROM `streams_episodes` WHERE `stream_id` = ?);' ?1                  	;0
70   32    FETCH_DIM_FUNC_ARG/93     $75=      16?0                 65:'id'             	;2
71   32    SEND_VAR_EX/66            ?96       $75                  ?2                  	;0
72   32    DO_FCALL/60               ?29       ?0                   ?0                  	;0
73   33    INIT_METHOD_CALL/112      ?0        16?6                 66:'num_rows'       	;0
74   33    DO_FCALL/60               $77=      ?0                   ?0                  	;0
75   33    IS_SMALLER/19             #78=      68:0                 $77                 	;0
76   33    BOOL_NOT/13               #79=      #78                  ?0                  	;0
77   33    JMPZ/43                   ?0        #79                  ?79                 	;0	>>79
78   34    GOTO/253                  ?0        ?82                  ?69                 	;0
79   36    INIT_METHOD_CALL/112      ?0        16?6                 70:'get_row'        	;0	<<77
80   36    DO_FCALL/60               $80=      ?0                   ?0                  	;0
81   36    ASSIGN/38                 ?34       16?7                 $80                 	;0
82   38    FETCH_DIM_R/81            $82=      16?7                 72:'id'             	;0
83   38    ASSIGN/38                 ?36       16?8                 $82                 	;0
84   39    GOTO/253                  ?0        ?483                 ?73                 	;0
85   41    ECHO/40                   ?0        74:'                                            <th>' ?0                  	;0
86   42    ECHO/40                   ?0        16?9                 ?0                  	;0
87   43    ECHO/40                   ?0        75:' Info</th>
                                            ' ?0                  	;0
88   44    GOTO/253                  ?0        ?1178                ?76                 	;0
89   46    GOTO/253                  ?0        ?1177                ?77                 	;0
90   48    FETCH_DIM_R/81            $84=      16?5                 78:'runtime'        	;0
91   48    ECHO/40                   ?0        $84                  ?0                  	;0
92   49    ECHO/40                   ?0        79:'</label>
                                    <div class="col-md-4">
                                        <input readonly type="text" class="form-control text-center" id="episode_run_time" name="episode_run_time" value="' ?0                  	;0
93   50    INIT_STATIC_METHOD_CALL/113 ?0        80:'XUI'             82:'a5D0A3407690F047'	;2
94   50    INIT_FCALL_BY_NAME/59     ?0        ?0                   84:'intval'         	;1
95   50    FETCH_DIM_FUNC_ARG/93     $85=      16?4                 86:'episode_run_time'	;1
96   50    SEND_VAR_EX/66            ?80       $85                  ?1                  	;0
97   50    DO_FCALL_BY_NAME/131      $86=      ?0                   ?0                  	;0
98   50    MUL/3                     #87=      $86                  87:60               	;0
99   50    SEND_VAL_EX/116           ?80       #87                  ?1                  	;0
100  50    SEND_VAL_EX/116           ?96       88:false             ?2                  	;0
101  50    DO_FCALL/60               $88=      ?0                   ?0                  	;0
102  50    ECHO/40                   ?0        $88                  ?0                  	;0
103  51    ECHO/40                   ?0        89:'">
                                    </div>
                                </div>
                                <div class="form-group row mb-4">
                                    <label class="col-md-2 col-form-label" for="youtube_trailer">' ?0                  	;0
104  52    FETCH_DIM_R/81            $89=      16?5                 90:'youtube_trailer'	;0
105  52    ECHO/40                   ?0        $89                  ?0                  	;0
106  53    GOTO/253                  ?0        ?695                 ?91                 	;0
107  55    INIT_FCALL_BY_NAME/59     ?0        ?0                   92:'htmlspecialchars'	;1
108  55    FETCH_DIM_FUNC_ARG/93     $90=      16?7                 94:'release_date'   	;1
109  55    SEND_VAR_EX/66            ?80       $90                  ?1                  	;0
110  55    DO_FCALL_BY_NAME/131      $91=      ?0                   ?0                  	;0
111  55    ECHO/40                   ?0        $91                  ?0                  	;0
112  56    ECHO/40                   ?0        95:'">
                                        </div>
                                        <label class="col-md-2 col-form-label" for="episode_run_time">Runtime</label>
                                        <div class="col-md-4">
                                            <input readonly type="text" class="form-control text-center" id="episode_run_time" name="episode_run_time" value="' ?0                  	;0
113  57    INIT_STATIC_METHOD_CALL/113 ?0        96:'XUI'             98:'A5d0a3407690f047'	;2
114  57    INIT_FCALL_BY_NAME/59     ?0        ?0                   100:'intval'        	;1
115  57    FETCH_DIM_FUNC_ARG/93     $92=      16?4                 102:'episode_run_time'	;1
116  57    SEND_VAR_EX/66            ?80       $92                  ?1                  	;0
117  57    DO_FCALL_BY_NAME/131      $93=      ?0                   ?0                  	;0
118  57    MUL/3                     #94=      $93                  103:60              	;0
119  57    SEND_VAL_EX/116           ?80       #94                  ?1                  	;0
120  57    SEND_VAL_EX/116           ?96       104:false            ?2                  	;0
121  57    DO_FCALL/60               $95=      ?0                   ?0                  	;0
122  57    ECHO/40                   ?0        $95                  ?0                  	;0
123  58    ECHO/40                   ?0        105:'">
                                        </div>
                                    </div>
                                    <div class="form-group row mb-4">
                                        <label class="col-md-2 col-form-label" for="youtube_trailer">Youtube Trailer</label>
                                        <div class="col-md-4">
                                            <input readonly type="text" class="form-control text-center" id="youtube_trailer" name="youtube_trailer" value="' ?0                  	;0
124  59    INIT_FCALL_BY_NAME/59     ?0        ?0                   106:'htmlspecialchars'	;1
125  59    FETCH_DIM_FUNC_ARG/93     $96=      16?7                 108:'youtube_trailer'	;1
126  59    SEND_VAR_EX/66            ?80       $96                  ?1                  	;0
127  59    DO_FCALL_BY_NAME/131      $97=      ?0                   ?0                  	;0
128  59    ECHO/40                   ?0        $97                  ?0                  	;0
129  60    GOTO/253                  ?0        ?493                 ?109                	;0
130  62    BOOL_NOT/13               #98=      16?7                 ?0                  	;0
131  62    JMPZ/43                   ?0        #98                  ?133                	;0	>>133
132  63    GOTO/253                  ?0        ?500                 ?110                	;0
133  65    ECHO/40                   ?0        111:'                        <div class="tab-pane" id="s-information">
                            <div class="row">
                                <div class="col-12 input-view">
                                    <div class="form-group row mb-4">
                                        <label class="col-md-2 col-form-label" for="plot">Plot</label>
                                        <div class="col-md-10">
                                            <textarea readonly rows="6" class="form-control" id="plot" name="plot">' ?0                  	;0	<<131
134  66    INIT_FCALL_BY_NAME/59     ?0        ?0                   112:'htmlspecialchars'	;1
135  66    FETCH_DIM_FUNC_ARG/93     $99=      16?7                 114:'plot'          	;1
136  66    SEND_VAR_EX/66            ?80       $99                  ?1                  	;0
137  66    DO_FCALL_BY_NAME/131      $100=     ?0                   ?0                  	;0
138  66    ECHO/40                   ?0        $100                 ?0                  	;0
139  67    ECHO/40                   ?0        115:'</textarea>
                                        </div>
                                    </div>
                                    <div class="form-group row mb-4">
                                        <label class="col-md-2 col-form-label" for="cast">Cast</label>
                                        <div class="col-md-10">
                                            <input readonly type="text" class="form-control" id="cast" name="cast" value="' ?0                  	;0
140  68    INIT_FCALL_BY_NAME/59     ?0        ?0                   116:'htmlspecialchars'	;1
141  68    FETCH_DIM_FUNC_ARG/93     $101=     16?7                 118:'cast'          	;1
142  68    SEND_VAR_EX/66            ?80       $101                 ?1                  	;0
143  68    DO_FCALL_BY_NAME/131      $102=     ?0                   ?0                  	;0
144  68    ECHO/40                   ?0        $102                 ?0                  	;0
145  69    GOTO/253                  ?0        ?1077                ?119                	;0
146  71    FE_RESET_R/77             $103=     120:array (
  0 => 'today',
  1 => 'week',
  2 => 'month',
  3 => 'all',
) ?208                	;0
147  71    FE_FETCH_R/78             ?0        $103                 16?10               	;208	>>208	<<207
148  72    NOP/0                     ?0        ?0                   ?0                  	;1
149  72    GOTO/253                  ?0        ?150                 ?121                	;0
150  74    ECHO/40                   ?0        122:'						<div class="tab-pane' ?0                  	;0
151  75    IS_EQUAL/17               #104=     16?10                123:'today'         	;0
152  75    BOOL_NOT/13               #105=     #104                 ?0                  	;0
153  75    JMPZ/43                   ?0        #105                 ?156                	;0	>>156
154  76    NOP/0                     ?0        ?0                   ?0                  	;1
155  76    GOTO/253                  ?0        ?157                 ?124                	;0
156  78    ECHO/40                   ?0        125:' active'        ?0                  	;0	<<153
157  80    ECHO/40                   ?0        126:'" id="'         ?0                  	;0
158  81    NOP/0                     ?0        ?0                   ?0                  	;1
159  81    GOTO/253                  ?0        ?160                 ?127                	;0
160  83    ECHO/40                   ?0        16?10                ?0                  	;0
161  84    ECHO/40                   ?0        128:'">
							<div class="row text-center" style="padding-top: 20px;">
								<div class="col-md-3">
									<h4 class="header-title">Stream Rank</h4>
									<p class="sub-header" id="s_conns">' ?0                  	;0
162  85    FETCH_DIM_R/81            $106=     16?11                16?10               	;0
163  85    FETCH_DIM_R/81            $107=     $106                 129:'rank'          	;0
164  85    IS_SMALLER/19             #108=     130:0                $107                	;0
165  85    JMPZ/43                   ?0        #108                 ?168                	;0	>>168
166  86    NOP/0                     ?0        ?0                   ?0                  	;1
167  86    GOTO/253                  ?0        ?173                 ?131                	;0
168  88    ECHO/40                   ?0        132:'N/A'            ?0                  	;0	<<165
169  89    NOP/0                     ?0        ?0                   ?0                  	;1
170  89    GOTO/253                  ?0        ?177                 ?133                	;0
171  90    NOP/0                     ?0        ?0                   ?0                  	;1
172  90    GOTO/253                  ?0        ?173                 ?134                	;0
173  93    FETCH_DIM_R/81            $109=     16?11                16?10               	;0
174  93    FETCH_DIM_R/81            $110=     $109                 135:'rank'          	;0
175  93    CONCAT/8                  #111=     136:'#'              $110                	;0
176  93    ECHO/40                   ?0        #111                 ?0                  	;0
177  95    ECHO/40                   ?0        137:'</p>
								</div>
								<div class="col-md-3">
									<h4 class="header-title">Time Played</h4>
									<p class="sub-header" id="s_users">' ?0                  	;0
178  96    INIT_FCALL_BY_NAME/59     ?0        ?0                   138:'f515D75037A9122f'	;1
179  96    FETCH_DIM_FUNC_ARG/93     $112=     16?11                16?10               	;1
180  96    FETCH_DIM_FUNC_ARG/93     $113=     $112                 140:'time'          	;1
181  96    SEND_VAR_EX/66            ?80       $113                 ?1                  	;0
182  96    DO_FCALL_BY_NAME/131      $114=     ?0                   ?0                  	;0
183  96    ECHO/40                   ?0        $114                 ?0                  	;0
184  97    NOP/0                     ?0        ?0                   ?0                  	;1
185  97    GOTO/253                  ?0        ?188                 ?141                	;0
186  100   NOP/0                     ?0        ?0                   ?0                  	;1
187  100   GOTO/253                  ?0        ?207                 ?142                	;0
188  102   ECHO/40                   ?0        143:'</p>
								</div>
								<div class="col-md-3">
									<h4 class="header-title">Total Streams</h4>
									<p class="sub-header" id="s_online">' ?0                  	;0
189  103   INIT_FCALL_BY_NAME/59     ?0        ?0                   144:'number_format' 	;2
190  103   FETCH_DIM_FUNC_ARG/93     $115=     16?11                16?10               	;1
191  103   FETCH_DIM_FUNC_ARG/93     $116=     $115                 146:'connections'   	;1
192  103   SEND_VAR_EX/66            ?80       $116                 ?1                  	;0
193  103   SEND_VAL_EX/116           ?96       147:0                ?2                  	;0
194  103   DO_FCALL_BY_NAME/131      $117=     ?0                   ?0                  	;0
195  103   ECHO/40                   ?0        $117                 ?0                  	;0
196  104   ECHO/40                   ?0        148:'</p>
								</div>
								<div class="col-md-3">
									<h4 class="header-title">Total Users</h4>
									<p class="sub-header" id="s_online">' ?0                  	;0
197  105   INIT_FCALL_BY_NAME/59     ?0        ?0                   149:'number_format' 	;2
198  105   FETCH_DIM_FUNC_ARG/93     $118=     16?11                16?10               	;1
199  105   FETCH_DIM_FUNC_ARG/93     $119=     $118                 151:'users'         	;1
200  105   SEND_VAR_EX/66            ?80       $119                 ?1                  	;0
201  105   SEND_VAL_EX/116           ?96       152:0                ?2                  	;0
202  105   DO_FCALL_BY_NAME/131      $120=     ?0                   ?0                  	;0
203  105   ECHO/40                   ?0        $120                 ?0                  	;0
204  106   ECHO/40                   ?0        153:'</p>
								</div>
							</div>
						</div>
						' ?0                  	;0
205  107   NOP/0                     ?0        ?0                   ?0                  	;1
206  107   GOTO/253                  ?0        ?186                 ?154                	;0
207  108   JMP/42                    ?0        ?147                 ?0                  	;0	>>147
208  108   FE_FREE/127               ?0        $103                 ?0                  	;0	<<146
209  111   ECHO/40                   ?0        155:'					</div>
				</div>
                ' ?0                  	;0
210  113   ECHO/40                   ?0        156:'				<div class="card-box">
					<ul class="nav nav-tabs nav-bordered nav-justified">
						<li class="nav-item">
							<a href="#servers" data-toggle="tab" aria-expanded="true" class="nav-link active">
								Active Servers
							</a>
						</li>
                        ' ?0                  	;0
211  114   GOTO/253                  ?0        ?1518                ?157                	;0
212  116   INIT_FCALL_BY_NAME/59     ?0        ?0                   158:'htmlspecialchars'	;1
213  116   FETCH_DIM_FUNC_ARG/93     $121=     16?4                 160:'rating'        	;1
214  116   SEND_VAR_EX/66            ?80       $121                 ?1                  	;0
215  116   DO_FCALL_BY_NAME/131      $122=     ?0                   ?0                  	;0
216  116   ECHO/40                   ?0        $122                 ?0                  	;0
217  117   ECHO/40                   ?0        161:'">
                                    </div>
                                </div>
                                <div class="form-group row mb-4">
                                    <label class="col-md-2 col-form-label" for="country">' ?0                  	;0
218  118   FETCH_DIM_R/81            $123=     16?5                 162:'country'       	;0
219  118   ECHO/40                   ?0        $123                 ?0                  	;0
220  119   ECHO/40                   ?0        163:'</label>
                                    <div class="col-md-10">
                                        <input readonly type="text" class="form-control" id="country" name="country" value="' ?0                  	;0
221  120   INIT_FCALL_BY_NAME/59     ?0        ?0                   164:'htmlspecialchars'	;1
222  120   FETCH_DIM_FUNC_ARG/93     $124=     16?4                 166:'country'       	;1
223  120   SEND_VAR_EX/66            ?80       $124                 ?1                  	;0
224  120   DO_FCALL_BY_NAME/131      $125=     ?0                   ?0                  	;0
225  120   ECHO/40                   ?0        $125                 ?0                  	;0
226  121   GOTO/253                  ?0        ?706                 ?167                	;0
227  123   ASSIGN/38                 ?79       16?12                168:0               	;0
228  124   INIT_FCALL_BY_NAME/59     ?0        ?0                   169:'json_decode'   	;2
229  124   FETCH_DIM_FUNC_ARG/93     $127=     16?0                 171:'stream_source' 	;1
230  124   SEND_VAR_EX/66            ?80       $127                 ?1                  	;0
231  124   SEND_VAL_EX/116           ?96       172:true             ?2                  	;0
232  124   DO_FCALL_BY_NAME/131      $128=     ?0                   ?0                  	;0
233  124   FE_RESET_R/77             $129=     $128                 ?353                	;0
234  124   FE_FETCH_R/78             ?0        $129                 16?13               	;353	>>353	<<352
235  125   NOP/0                     ?0        ?0                   ?0                  	;1
236  125   GOTO/253                  ?0        ?257                 ?173                	;0
237  128   ECHO/40                   ?0        174:'										<tr class="stream_info" data-id="' ?0                  	;0
238  129   SUB/2                     #130=     16?12                175:1               	;0
239  129   ECHO/40                   ?0        #130                 ?0                  	;0
240  130   ECHO/40                   ?0        176:'">
											<td class="text-center">
                                                <button onClick="overrideSource(' ?0                  	;0
241  131   INIT_FCALL_BY_NAME/59     ?0        ?0                   177:'intval'        	;1
242  131   FETCH_STATIC_PROP_FUNC_ARG/177 $131=     179:'rRequest'       180:'XUI'           	;1
243  131   FETCH_DIM_FUNC_ARG/93     $132=     $131                 182:'id'            	;1
244  131   SEND_VAR_EX/66            ?80       $132                 ?1                  	;0
245  131   DO_FCALL_BY_NAME/131      $133=     ?0                   ?0                  	;0
246  131   ECHO/40                   ?0        $133                 ?0                  	;0
247  132   NOP/0                     ?0        ?0                   ?0                  	;1
248  132   GOTO/253                  ?0        ?249                 ?183                	;0
249  134   ECHO/40                   ?0        184:', '             ?0                  	;0
250  135   SUB/2                     #134=     16?12                185:1               	;0
251  135   ECHO/40                   ?0        #134                 ?0                  	;0
252  136   ECHO/40                   ?0        186:');" type="button" title="Override Source" class="tooltip btn btn-info btn-xs waves-effect waves-light btn-fixed-xs">' ?0                  	;0
253  137   ECHO/40                   ?0        16?12                ?0                  	;0
254  138   ECHO/40                   ?0        187:'</button>
                                            </td>
											<td><span>' ?0                  	;0
255  139   NOP/0                     ?0        ?0                   ?0                  	;1
256  139   GOTO/253                  ?0        ?316                 ?188                	;0
257  141   POST_INC/36               #135=     16?12                ?0                  	;0
258  141   FREE/70                   ?0        #135                 ?0                  	;0
259  142   INIT_FCALL_BY_NAME/59     ?0        ?0                   189:'parse_url'     	;1
260  142   SEND_VAR_EX/66            ?80       16?13                ?1                  	;0
261  142   DO_FCALL_BY_NAME/131      $136=     ?0                   ?0                  	;0
262  142   FETCH_DIM_R/81            $137=     $136                 191:'host'          	;0
263  142   ASSIGN/38                 ?91       16?14                $137                	;0
264  143   INIT_FCALL_BY_NAME/59     ?0        ?0                   192:'intval'        	;1
265  143   INIT_FCALL_BY_NAME/59     ?0        ?0                   194:'explode'       	;2
266  143   SEND_VAL_EX/116           ?80       196:'?'              ?1                  	;0
267  143   INIT_FCALL_BY_NAME/59     ?0        ?0                   197:'explode'       	;2
268  143   SEND_VAL_EX/116           ?80       199:'.'              ?1                  	;0
269  143   INIT_FCALL_BY_NAME/59     ?0        ?0                   200:'explode'       	;2
270  143   SEND_VAL_EX/116           ?80       202:'/'              ?1                  	;0
271  143   SEND_VAR_EX/66            ?96       16?13                ?2                  	;0
272  143   DO_FCALL_BY_NAME/131      $139=     ?0                   ?0                  	;0
273  143   SEPARATE/156              $139=     $139                 ?0                  	;0
274  143   INIT_FCALL_BY_NAME/59     ?0        ?0                   203:'count'         	;1
275  143   INIT_FCALL_BY_NAME/59     ?0        ?0                   205:'explode'       	;2
276  143   SEND_VAL_EX/116           ?80       207:'/'              ?1                  	;0
277  143   SEND_VAR_EX/66            ?96       16?13                ?2                  	;0
278  143   DO_FCALL_BY_NAME/131      $140=     ?0                   ?0                  	;0
279  143   SEND_VAR_NO_REF_EX/50     ?80       $140                 ?1                  	;0
280  143   DO_FCALL_BY_NAME/131      $141=     ?0                   ?0                  	;0
281  143   SUB/2                     #142=     $141                 208:1               	;0
282  143   FETCH_DIM_FUNC_ARG/93     $143=     $139                 #142                	;2
283  143   SEND_VAR_EX/66            ?96       $143                 ?2                  	;0
284  143   DO_FCALL_BY_NAME/131      $144=     ?0                   ?0                  	;0
285  143   SEPARATE/156              $144=     $144                 ?0                  	;0
286  143   FETCH_DIM_FUNC_ARG/93     $145=     $144                 209:0               	;2
287  143   SEND_VAR_EX/66            ?96       $145                 ?2                  	;0
288  143   DO_FCALL_BY_NAME/131      $146=     ?0                   ?0                  	;0
289  143   SEPARATE/156              $146=     $146                 ?0                  	;0
290  143   FETCH_DIM_FUNC_ARG/93     $147=     $146                 210:0               	;1
291  143   SEND_VAR_EX/66            ?80       $147                 ?1                  	;0
292  143   DO_FCALL_BY_NAME/131      $148=     ?0                   ?0                  	;0
293  143   ASSIGN/38                 ?102      16?15                $148                	;0
294  144   IS_SMALLER/19             #150=     211:0                16?15               	;0
295  144   JMPZ/43                   ?0        #150                 ?298                	;0	>>298
296  145   NOP/0                     ?0        ?0                   ?0                  	;1
297  145   GOTO/253                  ?0        ?347                 ?212                	;0
298  147   INIT_FCALL_BY_NAME/59     ?0        ?0                   213:'in_array'      	;2	<<295
299  147   INIT_FCALL_BY_NAME/59     ?0        ?0                   215:'strtolower'    	;1
300  147   INIT_FCALL_BY_NAME/59     ?0        ?0                   217:'pathinfo'      	;1
301  147   SEND_VAR_EX/66            ?80       16?13                ?1                  	;0
302  147   DO_FCALL_BY_NAME/131      $151=     ?0                   ?0                  	;0
303  147   SEPARATE/156              $151=     $151                 ?0                  	;0
304  147   FETCH_DIM_FUNC_ARG/93     $152=     $151                 219:'extension'     	;1
305  147   SEND_VAR_EX/66            ?80       $152                 ?1                  	;0
306  147   DO_FCALL_BY_NAME/131      $153=     ?0                   ?0                  	;0
307  147   SEND_VAR_NO_REF_EX/50     ?80       $153                 ?1                  	;0
308  147   SEND_VAL_EX/116           ?96       220:array (
  0 => 'ts',
  1 => 'm3u8',
  2 => 'mp4',
  3 => 'mkv',
) ?2                  	;0
309  147   DO_FCALL_BY_NAME/131      $154=     ?0                   ?0                  	;0
310  147   BOOL_NOT/13               #155=     $154                 ?0                  	;0
311  147   JMPZ/43                   ?0        #155                 ?314                	;0	>>314
312  148   NOP/0                     ?0        ?0                   ?0                  	;1
313  148   GOTO/253                  ?0        ?345                 ?221                	;0
314  150   NOP/0                     ?0        ?0                   ?0                  	;1	<<311
315  150   GOTO/253                  ?0        ?323                 ?222                	;0
316  152   ECHO/40                   ?0        16?14                ?0                  	;0
317  153   ECHO/40                   ?0        223:'</span></td>
											<td class="text-center" id="stream_info_' ?0                  	;0
318  154   SUB/2                     #156=     16?12                224:1               	;0
319  154   ECHO/40                   ?0        #156                 ?0                  	;0
320  155   ECHO/40                   ?0        225:'" style="width:300px;">
												<table tstyle=\'width: 300px;\' class=\'table-data\' align=\'center\'><tbody><tr><td colspan=\'4\'>Not scanned</td></tr></tbody></table>
											</td>
										</tr>
										' ?0                  	;0
321  157   NOP/0                     ?0        ?0                   ?0                  	;1
322  157   GOTO/253                  ?0        ?352                 ?226                	;0
323  159   INIT_FCALL_BY_NAME/59     ?0        ?0                   227:'explode'       	;2
324  159   SEND_VAL_EX/116           ?80       229:'?'              ?1                  	;0
325  159   INIT_FCALL_BY_NAME/59     ?0        ?0                   230:'explode'       	;2
326  159   SEND_VAL_EX/116           ?80       232:'/'              ?1                  	;0
327  159   SEND_VAR_EX/66            ?96       16?13                ?2                  	;0
328  159   DO_FCALL_BY_NAME/131      $157=     ?0                   ?0                  	;0
329  159   SEPARATE/156              $157=     $157                 ?0                  	;0
330  159   INIT_FCALL_BY_NAME/59     ?0        ?0                   233:'count'         	;1
331  159   INIT_FCALL_BY_NAME/59     ?0        ?0                   235:'explode'       	;2
332  159   SEND_VAL_EX/116           ?80       237:'/'              ?1                  	;0
333  159   SEND_VAR_EX/66            ?96       16?13                ?2                  	;0
334  159   DO_FCALL_BY_NAME/131      $158=     ?0                   ?0                  	;0
335  159   SEND_VAR_NO_REF_EX/50     ?80       $158                 ?1                  	;0
336  159   DO_FCALL_BY_NAME/131      $159=     ?0                   ?0                  	;0
337  159   SUB/2                     #160=     $159                 238:1               	;0
338  159   FETCH_DIM_FUNC_ARG/93     $161=     $157                 #160                	;2
339  159   SEND_VAR_EX/66            ?96       $161                 ?2                  	;0
340  159   DO_FCALL_BY_NAME/131      $162=     ?0                   ?0                  	;0
341  159   FETCH_DIM_R/81            $163=     $162                 239:0               	;0
342  159   CONCAT/8                  #164=     240:' ['             $163                	;0
343  159   CONCAT/8                  #165=     #164                 241:']'             	;0
344  159   ASSIGN_CONCAT/30          ?119      16?14                #165                	;0
345  161   NOP/0                     ?0        ?0                   ?0                  	;1
346  161   GOTO/253                  ?0        ?237                 ?242                	;0
347  163   CONCAT/8                  #167=     243:' [ID: '         16?15               	;0
348  163   CONCAT/8                  #168=     #167                 244:']'             	;0
349  163   ASSIGN_CONCAT/30          ?122      16?14                #168                	;0
350  164   NOP/0                     ?0        ?0                   ?0                  	;1
351  164   GOTO/253                  ?0        ?237                 ?245                	;0
352  165   JMP/42                    ?0        ?234                 ?0                  	;0	>>234
353  165   FE_FREE/127               ?0        $129                 ?0                  	;0	<<233
354  168   ECHO/40                   ?0        246:'									</tbody>
								</table>
							</div>
						</div>
                        ' ?0                  	;0
355  169   INIT_FCALL_BY_NAME/59     ?0        ?0                   247:'count'         	;1
356  169   SEND_VAR_EX/66            ?80       16?16                ?1                  	;0
357  169   DO_FCALL_BY_NAME/131      $170=     ?0                   ?0                  	;0
358  169   IS_SMALLER/19             #171=     249:0                $170                	;0
359  169   BOOL_NOT/13               #172=     #171                 ?0                  	;0
360  169   JMPZ/43                   ?0        #172                 ?362                	;0	>>362
361  170   GOTO/253                  ?0        ?1496                ?250                	;0
362  172   GOTO/253                  ?0        ?1539                ?251                	;0	<<360
363  176   GOTO/253                  ?0        ?1035                ?252                	;0
364  178   INIT_FCALL_BY_NAME/59     ?0        ?0                   253:'b790fF255E9f25f5'	;1
365  178   FETCH_DIM_FUNC_ARG/93     $173=     16?0                 255:'id'            	;1
366  178   SEND_VAR_EX/66            ?80       $173                 ?1                  	;0
367  178   DO_FCALL_BY_NAME/131      $174=     ?0                   ?0                  	;0
368  178   ASSIGN/38                 ?128      16?17                $174                	;0
369  179   GOTO/253                  ?0        ?9                   ?256                	;0
370  181   ECHO/40                   ?0        257:'                        <li class="nav-item">
							<a href="#s-information" data-toggle="tab" aria-expanded="false" class="nav-link">
								Series Information
							</a>
						</li>
                        ' ?0                  	;0
371  183   ECHO/40                   ?0        258:'                        <li class="nav-item">
							<a href="#information" data-toggle="tab" aria-expanded="false" class="nav-link">
								Episode Information
							</a>
						</li>
                        ' ?0                  	;0
372  185   GOTO/253                  ?0        ?1605                ?259                	;0
373  186   GOTO/253                  ?0        ?1604                ?260                	;0
374  188   INIT_METHOD_CALL/112      ?0        16?6                 261:'query'         	;2
375  188   SEND_VAL_EX/116           ?80       263:'SELECT `streams_servers`.`stream_started`, `streams_servers`.`cc_info` FROM `streams` LEFT JOIN `streams_servers` ON `streams_servers`.`stream_id` = `streams`.`id` AND `streams_servers`.`parent_id` IS NULL WHERE `streams`.`id` = ? GROUP BY `streams`.`id`;' ?1                  	;0
376  188   FETCH_DIM_FUNC_ARG/93     $176=     16?0                 264:'id'            	;2
377  188   SEND_VAR_EX/66            ?96       $176                 ?2                  	;0
378  188   DO_FCALL/60               ?130      ?0                   ?0                  	;0
379  189   INIT_METHOD_CALL/112      ?0        16?6                 265:'num_rows'      	;0
380  189   DO_FCALL/60               $178=     ?0                   ?0                  	;0
381  189   IS_SMALLER/19             #179=     267:0                $178                	;0
382  189   BOOL_NOT/13               #180=     #179                 ?0                  	;0
383  189   JMPZ/43                   ?0        #180                 ?385                	;0	>>385
384  190   GOTO/253                  ?0        ?1042                ?268                	;0
385  192   INIT_METHOD_CALL/112      ?0        16?6                 269:'get_row'       	;0	<<383
386  192   DO_FCALL/60               $181=     ?0                   ?0                  	;0
387  192   ASSIGN/38                 ?135      16?18                $181                	;0
388  193   INIT_FCALL_BY_NAME/59     ?0        ?0                   271:'json_decode'   	;2
389  193   FETCH_DIM_FUNC_ARG/93     $183=     16?18                273:'cc_info'       	;1
390  193   SEND_VAR_EX/66            ?80       $183                 ?1                  	;0
391  193   SEND_VAL_EX/116           ?96       274:true             ?2                  	;0
392  193   DO_FCALL_BY_NAME/131      $184=     ?0                   ?0                  	;0
393  193   ASSIGN/38                 ?138      16?19                $184                	;0
394  194   INIT_FCALL_BY_NAME/59     ?0        ?0                   275:'time'          	;0
395  194   DO_FCALL_BY_NAME/131      $186=     ?0                   ?0                  	;0
396  194   INIT_FCALL_BY_NAME/59     ?0        ?0                   277:'intval'        	;1
397  194   FETCH_DIM_FUNC_ARG/93     $187=     16?18                279:'stream_started'	;1
398  194   SEND_VAR_EX/66            ?80       $187                 ?1                  	;0
399  194   DO_FCALL_BY_NAME/131      $188=     ?0                   ?0                  	;0
400  194   SUB/2                     #189=     $186                 $188                	;0
401  194   ASSIGN/38                 ?143      16?20                #189                	;0
402  195   GOTO/253                  ?0        ?1042                ?280                	;0
403  197   FETCH_DIM_R/81            $192=     16?0                 284:'vframes_server_id'	;0
404  197   FETCH_STATIC_PROP_R/173   $191=     281:'rServers'       282:'XUI'           	;0
405  197   FETCH_DIM_R/81            $193=     $191                 $192                	;0
406  197   FETCH_DIM_R/81            $194=     $193                 285:'domain_name'   	;0
407  197   JMPZ/43                   ?0        $194                 ?414                	;0	>>414
408  197   FETCH_DIM_R/81            $196=     16?0                 289:'vframes_server_id'	;0
409  197   FETCH_STATIC_PROP_R/173   $195=     286:'rServers'       287:'XUI'           	;0
410  197   FETCH_DIM_R/81            $197=     $195                 $196                	;0
411  197   FETCH_DIM_R/81            $198=     $197                 290:'domain_name'   	;0
412  197   QM_ASSIGN/22              #199=     $198                 ?0                  	;0
413  197   JMP/42                    ?0        ?419                 ?0                  	;0	>>419
414  197   FETCH_DIM_R/81            $201=     16?0                 294:'vframes_server_id'	;0	<<407
415  197   FETCH_STATIC_PROP_R/173   $200=     291:'rServers'       292:'XUI'           	;0
416  197   FETCH_DIM_R/81            $202=     $200                 $201                	;0
417  197   FETCH_DIM_R/81            $203=     $202                 295:'server_ip'     	;0
418  197   QM_ASSIGN/22              #199=     $203                 ?0                  	;0
419  197   CONCAT/8                  #204=     296:'http://'        #199                	;0	<<413
420  197   CONCAT/8                  #205=     #204                 297:':'             	;0
421  197   INIT_FCALL_BY_NAME/59     ?0        ?0                   298:'intval'        	;1
422  197   FETCH_DIM_R/81            $207=     16?0                 303:'vframes_server_id'	;0
423  197   FETCH_STATIC_PROP_FUNC_ARG/177 $206=     300:'rServers'       301:'XUI'           	;1
424  197   FETCH_DIM_FUNC_ARG/93     $208=     $206                 $207                	;1
425  197   FETCH_DIM_FUNC_ARG/93     $209=     $208                 304:'http_broadcast_port'	;1
426  197   SEND_VAR_EX/66            ?80       $209                 ?1                  	;0
427  197   DO_FCALL_BY_NAME/131      $210=     ?0                   ?0                  	;0
428  197   CONCAT/8                  #211=     #205                 $210                	;0
429  197   CONCAT/8                  #212=     #211                 305:'/admin/thumb?uitoken='	;0
430  197   CONCAT/8                  #213=     #212                 16?3                	;0
431  197   ASSIGN/38                 ?167      16?21                #213                	;0
432  198   GOTO/253                  ?0        ?462                 ?306                	;0
433  200   FETCH_DIM_R/81            $216=     16?0                 310:'vframes_server_id'	;0
434  200   FETCH_STATIC_PROP_R/173   $215=     307:'rServers'       308:'XUI'           	;0
435  200   FETCH_DIM_R/81            $217=     $215                 $216                	;0
436  200   FETCH_DIM_R/81            $218=     $217                 311:'domain_name'   	;0
437  200   JMPZ/43                   ?0        $218                 ?444                	;0	>>444
438  200   FETCH_DIM_R/81            $220=     16?0                 315:'vframes_server_id'	;0
439  200   FETCH_STATIC_PROP_R/173   $219=     312:'rServers'       313:'XUI'           	;0
440  200   FETCH_DIM_R/81            $221=     $219                 $220                	;0
441  200   FETCH_DIM_R/81            $222=     $221                 316:'domain_name'   	;0
442  200   QM_ASSIGN/22              #223=     $222                 ?0                  	;0
443  200   JMP/42                    ?0        ?449                 ?0                  	;0	>>449
444  200   FETCH_DIM_R/81            $225=     16?0                 320:'vframes_server_id'	;0	<<437
445  200   FETCH_STATIC_PROP_R/173   $224=     317:'rServers'       318:'XUI'           	;0
446  200   FETCH_DIM_R/81            $226=     $224                 $225                	;0
447  200   FETCH_DIM_R/81            $227=     $226                 321:'server_ip'     	;0
448  200   QM_ASSIGN/22              #223=     $227                 ?0                  	;0
449  200   CONCAT/8                  #228=     322:'https://'       #223                	;0	<<443
450  200   CONCAT/8                  #229=     #228                 323:':'             	;0
451  200   INIT_FCALL_BY_NAME/59     ?0        ?0                   324:'intval'        	;1
452  200   FETCH_DIM_R/81            $231=     16?0                 329:'vframes_server_id'	;0
453  200   FETCH_STATIC_PROP_FUNC_ARG/177 $230=     326:'rServers'       327:'XUI'           	;1
454  200   FETCH_DIM_FUNC_ARG/93     $232=     $230                 $231                	;1
455  200   FETCH_DIM_FUNC_ARG/93     $233=     $232                 330:'https_broadcast_port'	;1
456  200   SEND_VAR_EX/66            ?80       $233                 ?1                  	;0
457  200   DO_FCALL_BY_NAME/131      $234=     ?0                   ?0                  	;0
458  200   CONCAT/8                  #235=     #229                 $234                	;0
459  200   CONCAT/8                  #236=     #235                 331:'/admin/thumb?uitoken='	;0
460  200   CONCAT/8                  #237=     #236                 16?3                	;0
461  200   ASSIGN/38                 ?191      16?21                #237                	;0
462  202   GOTO/253                  ?0        ?1027                ?332                	;0
463  204   ECHO/40                   ?0        333:'</label>
                                    <div class="col-md-10">
                                        <input readonly type="text" class="form-control" id="cast" name="cast" value="' ?0                  	;0
464  205   INIT_FCALL_BY_NAME/59     ?0        ?0                   334:'htmlspecialchars'	;1
465  205   FETCH_DIM_FUNC_ARG/93     $239=     16?4                 336:'cast'          	;1
466  205   SEND_VAR_EX/66            ?80       $239                 ?1                  	;0
467  205   DO_FCALL_BY_NAME/131      $240=     ?0                   ?0                  	;0
468  205   ECHO/40                   ?0        $240                 ?0                  	;0
469  206   ECHO/40                   ?0        337:'">
                                    </div>
                                </div>
                                <div class="form-group row mb-4">
                                    <label class="col-md-2 col-form-label" for="director">' ?0                  	;0
470  207   FETCH_DIM_R/81            $241=     16?5                 338:'director'      	;0
471  207   ECHO/40                   ?0        $241                 ?0                  	;0
472  208   ECHO/40                   ?0        339:'</label>
                                    <div class="col-md-4">
                                        <input readonly type="text" class="form-control" id="director" name="director" value="' ?0                  	;0
473  209   GOTO/253                  ?0        ?637                 ?340                	;0
474  211   INCLUDE_OR_EVAL/73        ?195      341:'session.php'    ?0                  	;2	<<0
475  212   INCLUDE_OR_EVAL/73        ?196      342:'functions.php'  ?0                  	;2
476  213   INIT_FCALL_BY_NAME/59     ?0        ?0                   343:'e6D500E19634d513'	;0
477  213   DO_FCALL_BY_NAME/131      $244=     ?0                   ?0                  	;0
478  213   JMPZ/43                   ?0        $244                 ?480                	;0	>>480
479  214   GOTO/253                  ?0        ?482                 ?345                	;0
480  216   INIT_FCALL_BY_NAME/59     ?0        ?0                   346:'E72f42a93714bA87'	;0	<<478
481  216   DO_FCALL_BY_NAME/131      ?198      ?0                   ?0                  	;0
482  218   GOTO/253                  ?0        ?740                 ?348                	;0
483  221   INIT_FCALL_BY_NAME/59     ?0        ?0                   349:'c3361271347717fc'	;1
484  221   FETCH_DIM_FUNC_ARG/93     $246=     16?0                 351:'id'            	;1
485  221   SEND_VAR_EX/66            ?80       $246                 ?1                  	;0
486  221   DO_FCALL_BY_NAME/131      $247=     ?0                   ?0                  	;0
487  221   ASSIGN/38                 ?201      16?11                $247                	;0
488  222   CONCAT/8                  #249=     352:'View '          16?9                	;0
489  222   ASSIGN/38                 ?203      16?22                #249                	;0
490  223   INCLUDE_OR_EVAL/73        ?204      353:'header.php'     ?0                  	;2
491  224   ECHO/40                   ?0        354:'<div class="wrapper boxed-layout-ext"' ?0                  	;0
492  225   GOTO/253                  ?0        ?982                 ?355                	;0
493  227   ECHO/40                   ?0        356:'">
                                        </div>
                                        <label class="col-md-2 col-form-label" for="rating">Rating</label>
                                        <div class="col-md-4">
                                            <input readonly type="text" class="form-control text-center" id="rating" name="rating" value="' ?0                  	;0
494  228   INIT_FCALL_BY_NAME/59     ?0        ?0                   357:'htmlspecialchars'	;1
495  228   FETCH_DIM_FUNC_ARG/93     $252=     16?7                 359:'rating'        	;1
496  228   SEND_VAR_EX/66            ?80       $252                 ?1                  	;0
497  228   DO_FCALL_BY_NAME/131      $253=     ?0                   ?0                  	;0
498  228   ECHO/40                   ?0        $253                 ?0                  	;0
499  229   ECHO/40                   ?0        360:'">
                                        </div>
                                    </div>
                                </div> 
                            </div>
                        </div>
                        ' ?0                  	;0
500  231   ECHO/40                   ?0        361:'                        <div class="tab-pane" id="information">
                            <div class="row">
                                <div class="col-12 input-view">
                                    <div class="form-group row mb-4">
                                        <label class="col-md-2 col-form-label" for="plot">' ?0                  	;0
501  232   GOTO/253                  ?0        ?1054                ?362                	;0
502  235   FETCH_DIM_R/81            $254=     16?0                 363:'tv_archive_server_id'	;0
503  235   IS_SMALLER/19             #255=     364:0                $254                	;0
504  235   JMPZ_EX/46                #255=     #255                 ?508                	;0	>>508
505  235   FETCH_DIM_R/81            $256=     16?0                 365:'tv_archive_duration'	;0
506  235   IS_SMALLER/19             #257=     366:0                $256                	;0
507  235   BOOL/52                   #255=     #257                 ?0                  	;0
508  235   BOOL_NOT/13               #258=     #255                 ?0                  	;0	<<504
509  235   JMPZ/43                   ?0        #258                 ?511                	;0	>>511
510  236   GOTO/253                  ?0        ?1186                ?367                	;0
511  238   INIT_FCALL_BY_NAME/59     ?0        ?0                   368:'c2Ae9fdA76B23ED4'	;1	<<509
512  238   FETCH_DIM_FUNC_ARG/93     $259=     16?0                 370:'id'            	;1
513  238   SEND_VAR_EX/66            ?80       $259                 ?1                  	;0
514  238   DO_FCALL_BY_NAME/131      $260=     ?0                   ?0                  	;0
515  238   ASSIGN/38                 ?214      16?23                $260                	;0
516  239   ECHO/40                   ?0        371:'                        <div class="tab-pane" id="archive">
							<div class="table">
								<table id="datatable-archive" class="table table-striped table-borderless mb-0">
									<thead>
										<tr>
											<th class="text-center">Date</th>
											<th>Title</th>
                                            <th class="text-center">Status</th>
                                            <th class="text-center">Player</th>
										</tr>
									</thead>
									<tbody>
                                        ' ?0                  	;0
517  240   FE_RESET_R/77             $262=     16?23                ?615                	;0
518  240   FE_FETCH_R/78             ?0        $262                 16?24               	;615	>>615	<<614
519  241   NOP/0                     ?0        ?0                   ?0                  	;1
520  241   GOTO/253                  ?0        ?561                 ?372                	;0
521  243   ECHO/40                   ?0        373:'</td>
                                            <td class="text-center">
                                                ' ?0                  	;0
522  244   FETCH_DIM_R/81            $263=     16?24                374:'in_progress'   	;0
523  244   JMPZ/43                   ?0        $263                 ?526                	;0	>>526
524  245   NOP/0                     ?0        ?0                   ?0                  	;1
525  245   GOTO/253                  ?0        ?559                 ?375                	;0
526  247   FETCH_DIM_R/81            $264=     16?24                376:'complete'      	;0	<<523
527  247   JMPZ/43                   ?0        $264                 ?530                	;0	>>530
528  248   NOP/0                     ?0        ?0                   ?0                  	;1
529  248   GOTO/253                  ?0        ?556                 ?377                	;0
530  250   ECHO/40                   ?0        378:'                                                <button type=\'button\' class=\'btn btn-warning btn-xs waves-effect waves-light\'>INCOMPLETE</button>
                                                ' ?0                  	;0	<<527
531  251   NOP/0                     ?0        ?0                   ?0                  	;1
532  251   GOTO/253                  ?0        ?557                 ?379                	;0
533  252   NOP/0                     ?0        ?0                   ?0                  	;1
534  252   GOTO/253                  ?0        ?556                 ?380                	;0
535  254   ECHO/40                   ?0        381:');"><i class="mdi mdi-play"></i></button></td>
										</tr>
                                        ' ?0                  	;0
536  256   NOP/0                     ?0        ?0                   ?0                  	;1
537  256   GOTO/253                  ?0        ?614                 ?382                	;0
538  258   INIT_FCALL_BY_NAME/59     ?0        ?0                   383:'date'          	;2
539  258   SEND_VAL_EX/116           ?80       385:'H:i:s'          ?1                  	;0
540  258   FETCH_DIM_FUNC_ARG/93     $265=     16?24                386:'start'         	;2
541  258   SEND_VAR_EX/66            ?96       $265                 ?2                  	;0
542  258   DO_FCALL_BY_NAME/131      $266=     ?0                   ?0                  	;0
543  258   ECHO/40                   ?0        $266                 ?0                  	;0
544  259   ECHO/40                   ?0        387:' - '            ?0                  	;0
545  260   INIT_FCALL_BY_NAME/59     ?0        ?0                   388:'date'          	;2
546  260   SEND_VAL_EX/116           ?80       390:'H:i:s'          ?1                  	;0
547  260   FETCH_DIM_FUNC_ARG/93     $267=     16?24                391:'end'           	;2
548  260   SEND_VAR_EX/66            ?96       $267                 ?2                  	;0
549  260   DO_FCALL_BY_NAME/131      $268=     ?0                   ?0                  	;0
550  260   ECHO/40                   ?0        $268                 ?0                  	;0
551  261   ECHO/40                   ?0        392:'</td>
                                            <td>' ?0                  	;0
552  262   FETCH_DIM_R/81            $269=     16?24                393:'title'         	;0
553  262   ECHO/40                   ?0        $269                 ?0                  	;0
554  263   NOP/0                     ?0        ?0                   ?0                  	;1
555  263   GOTO/253                  ?0        ?521                 ?394                	;0
556  266   ECHO/40                   ?0        395:'                                                <button type=\'button\' class=\'btn btn-success btn-xs waves-effect waves-light\'>COMPLETE</button>
                                                ' ?0                  	;0
557  268   NOP/0                     ?0        ?0                   ?0                  	;1
558  268   GOTO/253                  ?0        ?581                 ?396                	;0
559  270   NOP/0                     ?0        ?0                   ?0                  	;1
560  270   GOTO/253                  ?0        ?580                 ?397                	;0
561  272   FETCH_DIM_R/81            $270=     16?24                398:'end'           	;0
562  272   FETCH_DIM_R/81            $271=     16?24                399:'start'         	;0
563  272   SUB/2                     #272=     $270                 $271                	;0
564  272   ASSIGN/38                 ?226      16?25                #272                	;0
565  273   FETCH_STATIC_PROP_R/173   $275=     401:'rRequest'       402:'XUI'           	;0
566  273   FETCH_DIM_R/81            $276=     $275                 404:'id'            	;0
567  273   ASSIGN_DIM/147            ?227      16?24                400:'stream_id'     	;0
568  273   OP_DATA/137               ?0        $276                 ?0                  	;0
569  274   ECHO/40                   ?0        405:'										<tr>
                                            <td class="text-center">' ?0                  	;0
570  275   INIT_FCALL_BY_NAME/59     ?0        ?0                   406:'date'          	;2
571  275   FETCH_DIM_FUNC_ARG/93     $277=     16?26                408:'date_format'   	;1
572  275   SEND_VAR_EX/66            ?80       $277                 ?1                  	;0
573  275   FETCH_DIM_FUNC_ARG/93     $278=     16?24                409:'start'         	;2
574  275   SEND_VAR_EX/66            ?96       $278                 ?2                  	;0
575  275   DO_FCALL_BY_NAME/131      $279=     ?0                   ?0                  	;0
576  275   ECHO/40                   ?0        $279                 ?0                  	;0
577  276   ECHO/40                   ?0        410:'<br/>'          ?0                  	;0
578  277   NOP/0                     ?0        ?0                   ?0                  	;1
579  277   GOTO/253                  ?0        ?538                 ?411                	;0
580  279   ECHO/40                   ?0        412:'                                                <button type=\'button\' class=\'btn btn-info btn-xs waves-effect waves-light\'>IN PROGRESS</button>
                                                ' ?0                  	;0
581  281   ECHO/40                   ?0        413:'                                                <a href="record?archive=' ?0                  	;0
582  282   INIT_FCALL_BY_NAME/59     ?0        ?0                   414:'urlencode'     	;1
583  282   INIT_FCALL_BY_NAME/59     ?0        ?0                   416:'base64_encode' 	;1
584  282   INIT_FCALL_BY_NAME/59     ?0        ?0                   418:'json_encode'   	;1
585  282   SEND_VAR_EX/66            ?80       16?24                ?1                  	;0
586  282   DO_FCALL_BY_NAME/131      $280=     ?0                   ?0                  	;0
587  282   SEND_VAR_NO_REF_EX/50     ?80       $280                 ?1                  	;0
588  282   DO_FCALL_BY_NAME/131      $281=     ?0                   ?0                  	;0
589  282   SEND_VAR_NO_REF_EX/50     ?80       $281                 ?1                  	;0
590  282   DO_FCALL_BY_NAME/131      $282=     ?0                   ?0                  	;0
591  282   ECHO/40                   ?0        $282                 ?0                  	;0
592  283   ECHO/40                   ?0        420:'"><button class="btn btn-danger btn-xs waves-effect waves-light tooltip" title="Save to VOD"><i class="mdi mdi-record"></i></button></a>
                                            </td>
                                            <td class="text-center"><button type="button" class="btn btn-info waves-effect waves-light btn-xs" onclick="player(' ?0                  	;0
593  284   NOP/0                     ?0        ?0                   ?0                  	;1
594  284   GOTO/253                  ?0        ?595                 ?421                	;0
595  286   INIT_FCALL_BY_NAME/59     ?0        ?0                   422:'intval'        	;1
596  286   FETCH_DIM_FUNC_ARG/93     $283=     16?0                 424:'id'            	;1
597  286   SEND_VAR_EX/66            ?80       $283                 ?1                  	;0
598  286   DO_FCALL_BY_NAME/131      $284=     ?0                   ?0                  	;0
599  286   ECHO/40                   ?0        $284                 ?0                  	;0
600  287   ECHO/40                   ?0        425:', '             ?0                  	;0
601  288   INIT_FCALL_BY_NAME/59     ?0        ?0                   426:'intval'        	;1
602  288   FETCH_DIM_FUNC_ARG/93     $285=     16?24                428:'start'         	;1
603  288   SEND_VAR_EX/66            ?80       $285                 ?1                  	;0
604  288   DO_FCALL_BY_NAME/131      $286=     ?0                   ?0                  	;0
605  288   ECHO/40                   ?0        $286                 ?0                  	;0
606  289   ECHO/40                   ?0        429:', '             ?0                  	;0
607  290   INIT_FCALL_BY_NAME/59     ?0        ?0                   430:'intval'        	;1
608  290   DIV/4                     #287=     16?25                432:60              	;0
609  290   SEND_VAL_EX/116           ?80       #287                 ?1                  	;0
610  290   DO_FCALL_BY_NAME/131      $288=     ?0                   ?0                  	;0
611  290   ECHO/40                   ?0        $288                 ?0                  	;0
612  291   NOP/0                     ?0        ?0                   ?0                  	;1
613  291   GOTO/253                  ?0        ?535                 ?433                	;0
614  292   JMP/42                    ?0        ?518                 ?0                  	;0	>>518
615  292   FE_FREE/127               ?0        $262                 ?0                  	;0	<<517
616  294   GOTO/253                  ?0        ?1185                ?434                	;0
617  296   ASSIGN/38                 ?242      16?21                435:NULL            	;0
618  297   FETCH_DIM_R/81            $290=     16?0                 436:'type'          	;0
619  297   IS_EQUAL/17               #291=     $290                 437:1               	;0
620  297   JMPZ/43                   ?0        #291                 ?622                	;0	>>622
621  298   GOTO/253                  ?0        ?364                 ?438                	;0
622  300   FETCH_DIM_R/81            $292=     16?0                 439:'type'          	;0	<<620
623  300   IS_EQUAL/17               #293=     $292                 440:2               	;0
624  300   JMPNZ_EX/47               #293=     #293                 ?628                	;0	>>628
625  300   FETCH_DIM_R/81            $294=     16?0                 441:'type'          	;0
626  300   IS_EQUAL/17               #295=     $294                 442:5               	;0
627  300   BOOL/52                   #293=     #295                 ?0                  	;0
628  300   JMPZ/43                   ?0        #293                 ?630                	;0	>>630	<<624
629  301   GOTO/253                  ?0        ?1043                ?443                	;0
630  303   FETCH_DIM_R/81            $296=     16?0                 444:'type'          	;0	<<628
631  303   IS_EQUAL/17               #297=     $296                 445:3               	;0
632  303   BOOL_NOT/13               #298=     #297                 ?0                  	;0
633  303   JMPZ/43                   ?0        #298                 ?635                	;0	>>635
634  304   GOTO/253                  ?0        ?1042                ?446                	;0
635  306   ASSIGN/38                 ?252      16?19                447:NULL            	;0	<<633
636  307   GOTO/253                  ?0        ?374                 ?448                	;0
637  309   INIT_FCALL_BY_NAME/59     ?0        ?0                   449:'htmlspecialchars'	;1
638  309   FETCH_DIM_FUNC_ARG/93     $300=     16?4                 451:'director'      	;1
639  309   SEND_VAR_EX/66            ?80       $300                 ?1                  	;0
640  309   DO_FCALL_BY_NAME/131      $301=     ?0                   ?0                  	;0
641  309   ECHO/40                   ?0        $301                 ?0                  	;0
642  310   ECHO/40                   ?0        452:'">
                                    </div>
                                    <label class="col-md-2 col-form-label" for="genre">' ?0                  	;0
643  311   FETCH_DIM_R/81            $302=     16?5                 453:'genres'        	;0
644  311   ECHO/40                   ?0        $302                 ?0                  	;0
645  312   ECHO/40                   ?0        454:'</label>
                                    <div class="col-md-4">
                                        <input readonly type="text" class="form-control" id="genre" name="genre" value="' ?0                  	;0
646  313   INIT_FCALL_BY_NAME/59     ?0        ?0                   455:'htmlspecialchars'	;1
647  313   FETCH_DIM_FUNC_ARG/93     $303=     16?4                 457:'genre'         	;1
648  313   SEND_VAR_EX/66            ?80       $303                 ?1                  	;0
649  313   DO_FCALL_BY_NAME/131      $304=     ?0                   ?0                  	;0
650  313   ECHO/40                   ?0        $304                 ?0                  	;0
651  314   GOTO/253                  ?0        ?1224                ?458                	;0
652  316   FETCH_DIM_IS/90           $305=     16?4                 459:'backdrop_path' 	;0
653  316   ISSET_ISEMPTY_DIM_OBJ/115 #306=     $305                 460:0               	;16777216
654  316   BOOL_NOT/13               #307=     #306                 ?0                  	;0
655  316   JMPZ/43                   ?0        #307                 ?670                	;0	>>670
656  316   INIT_STATIC_METHOD_CALL/113 ?0        461:'XUI'            463:'FCA722697178454B'	;2
657  316   FETCH_DIM_FUNC_ARG/93     $308=     16?4                 465:'backdrop_path' 	;1
658  316   FETCH_DIM_FUNC_ARG/93     $309=     $308                 466:0               	;1
659  316   SEND_VAR_EX/66            ?80       $309                 ?1                  	;0
660  316   INIT_FCALL_BY_NAME/59     ?0        ?0                   467:'a41659D47a278ceB'	;0
661  316   DO_FCALL_BY_NAME/131      $310=     ?0                   ?0                  	;0
662  316   JMPZ/43                   ?0        $310                 ?665                	;0	>>665
663  316   QM_ASSIGN/22              #311=     469:'https'          ?0                  	;0
664  316   JMP/42                    ?0        ?666                 ?0                  	;0	>>666
665  316   QM_ASSIGN/22              #311=     470:'http'           ?0                  	;0	<<662
666  316   SEND_VAL_EX/116           ?96       #311                 ?2                  	;0	<<664
667  316   DO_FCALL/60               $312=     ?0                   ?0                  	;0
668  316   QM_ASSIGN/22              #313=     $312                 ?0                  	;0
669  316   JMP/42                    ?0        ?682                 ?0                  	;0	>>682
670  316   INIT_STATIC_METHOD_CALL/113 ?0        471:'XUI'            473:'FCA722697178454B'	;2	<<655
671  316   FETCH_DIM_FUNC_ARG/93     $314=     16?4                 475:'movie_image'   	;1
672  316   SEND_VAR_EX/66            ?80       $314                 ?1                  	;0
673  316   INIT_FCALL_BY_NAME/59     ?0        ?0                   476:'A41659D47A278CEB'	;0
674  316   DO_FCALL_BY_NAME/131      $315=     ?0                   ?0                  	;0
675  316   JMPZ/43                   ?0        $315                 ?678                	;0	>>678
676  316   QM_ASSIGN/22              #316=     478:'https'          ?0                  	;0
677  316   JMP/42                    ?0        ?679                 ?0                  	;0	>>679
678  316   QM_ASSIGN/22              #316=     479:'http'           ?0                  	;0	<<675
679  316   SEND_VAL_EX/116           ?96       #316                 ?2                  	;0	<<677
680  316   DO_FCALL/60               $317=     ?0                   ?0                  	;0
681  316   QM_ASSIGN/22              #313=     $317                 ?0                  	;0
682  316   ASSIGN/38                 ?271      16?21                #313                	;0	<<669
683  317   ISSET_ISEMPTY_CV/197      #319=     16?21                ?0                  	;16777216
684  317   JMPZ/43                   ?0        #319                 ?686                	;0	>>686
685  318   GOTO/253                  ?0        ?363                 ?480                	;0
686  320   BEGIN_SILENCE/57          #320=     ?0                   ?0                  	;0	<<684
687  320   INIT_FCALL_BY_NAME/59     ?0        ?0                   481:'getimagesize'  	;1
688  320   SEND_VAR_EX/66            ?80       16?21                ?1                  	;0
689  320   DO_FCALL_BY_NAME/131      $321=     ?0                   ?0                  	;0
690  320   END_SILENCE/58            ?0        #320                 ?0                  	;0
691  320   JMPZ/43                   ?0        $321                 ?693                	;0	>>693
692  321   GOTO/253                  ?0        ?694                 ?483                	;0
693  323   ASSIGN/38                 ?275      16?21                484:NULL            	;0	<<691
694  325   GOTO/253                  ?0        ?363                 ?485                	;0
695  327   ECHO/40                   ?0        486:'</label>
                                    <div class="col-md-4 input-group">
                                        <input readonly type="text" class="form-control text-center" id="youtube_trailer" name="youtube_trailer" value="' ?0                  	;0
696  328   INIT_FCALL_BY_NAME/59     ?0        ?0                   487:'htmlspecialchars'	;1
697  328   FETCH_DIM_FUNC_ARG/93     $323=     16?4                 489:'youtube_trailer'	;1
698  328   SEND_VAR_EX/66            ?80       $323                 ?1                  	;0
699  328   DO_FCALL_BY_NAME/131      $324=     ?0                   ?0                  	;0
700  328   ECHO/40                   ?0        $324                 ?0                  	;0
701  329   ECHO/40                   ?0        490:'">
                                        <div class="input-group-append">
                                            <a href="javascript:void(0)" onClick="openYouTube(this)" class="btn btn-primary waves-effect waves-light"><i class="mdi mdi-eye"></i></a>
                                        </div>
                                    </div>
                                    <label class="col-md-2 col-form-label" for="rating">' ?0                  	;0
702  330   FETCH_DIM_R/81            $325=     16?5                 491:'rating'        	;0
703  330   ECHO/40                   ?0        $325                 ?0                  	;0
704  331   ECHO/40                   ?0        492:'</label>
                                    <div class="col-md-4">
                                        <input readonly type="text" class="form-control text-center" id="rating" name="rating" value="' ?0                  	;0
705  332   GOTO/253                  ?0        ?212                 ?493                	;0
706  334   ECHO/40                   ?0        494:'">
                                    </div>
                                </div>
                            </div> 
                        </div>
                        ' ?0                  	;0
707  336   GOTO/253                  ?0        ?1025                ?495                	;0
708  338   ECHO/40                   ?0        496:'						<div class="tab-pane" id="sources">
							<div class="table">
								<table id="datatable-sources" class="table table-striped table-borderless mb-0">
									<thead>
										<tr>
											<th class="text-center">Order</th>
											<th>Source</th>
											<th class="text-center" style="width:300px;">Stream Info &nbsp;<button onClick="scanSources();" type="button" class="btn btn-xs btn-outline-secondary waves-effect waves-light"><i class="mdi mdi-refresh"></i></button></th>
										</tr>
									</thead>
									<tbody>
										' ?0                  	;0
709  339   GOTO/253                  ?0        ?227                 ?497                	;0
710  341   INIT_METHOD_CALL/112      ?0        16?6                 498:'query'         	;2
711  341   SEND_VAL_EX/116           ?80       500:'SELECT `server_id`, `direct_source`, `monitor_pid`, `pid`, `stream_status`, `on_demand` FROM `streams` LEFT JOIN `streams_servers` ON `streams_servers`.`stream_id` = `streams`.`id` WHERE `streams`.`id` = ? AND `server_id` IS NOT NULL;' ?1                  	;0
712  341   FETCH_DIM_FUNC_ARG/93     $326=     16?0                 501:'id'            	;2
713  341   SEND_VAR_EX/66            ?96       $326                 ?2                  	;0
714  341   DO_FCALL/60               ?280      ?0                   ?0                  	;0
715  342   INIT_METHOD_CALL/112      ?0        16?6                 502:'num_rows'      	;0
716  342   DO_FCALL/60               $328=     ?0                   ?0                  	;0
717  342   IS_SMALLER/19             #329=     504:0                $328                	;0
718  342   BOOL_NOT/13               #330=     #329                 ?0                  	;0
719  342   JMPZ/43                   ?0        #330                 ?721                	;0	>>721
720  343   GOTO/253                  ?0        ?739                 ?505                	;0
721  345   INIT_METHOD_CALL/112      ?0        16?6                 506:'get_rows'      	;0	<<719
722  345   DO_FCALL/60               $331=     ?0                   ?0                  	;0
723  345   FE_RESET_R/77             $332=     $331                 ?738                	;0
724  345   FE_FETCH_R/78             ?0        $332                 16?27               	;738	>>738	<<737
725  346   FETCH_DIM_R/81            $333=     16?27                508:'server_id'     	;0
726  346   JMPZ_EX/46                #334=     $333                 ?730                	;0	>>730
727  346   FETCH_DIM_R/81            $335=     16?27                509:'direct_source' 	;0
728  346   BOOL_NOT/13               #336=     $335                 ?0                  	;0
729  346   BOOL/52                   #334=     #336                 ?0                  	;0
730  346   BOOL_NOT/13               #337=     #334                 ?0                  	;0	<<726
731  346   JMPZ/43                   ?0        #337                 ?734                	;0	>>734
732  347   NOP/0                     ?0        ?0                   ?0                  	;1
733  347   GOTO/253                  ?0        ?737                 ?510                	;0
734  349   ASSIGN/38                 ?291      16?28                511:true            	;0	<<731
735  350   FE_FREE/127               ?0        $332                 ?19                 	;1
736  350   GOTO/253                  ?0        ?739                 ?512                	;0
737  352   JMP/42                    ?0        ?724                 ?0                  	;0	>>724
738  352   FE_FREE/127               ?0        $332                 ?0                  	;0	<<723
739  356   GOTO/253                  ?0        ?1091                ?513                	;0
740  358   FETCH_STATIC_PROP_IS/176  $339=     514:'rRequest'       515:'XUI'           	;0
741  358   ISSET_ISEMPTY_DIM_OBJ/115 #340=     $339                 517:'id'            	;33554432
742  358   BOOL_NOT/13               #341=     #340                 ?0                  	;0
743  358   JMPNZ_EX/47               #341=     #341                 ?752                	;0	>>752
744  358   INIT_FCALL_BY_NAME/59     ?0        ?0                   518:'f260B7A31f021e39'	;1
745  358   FETCH_STATIC_PROP_FUNC_ARG/177 $342=     520:'rRequest'       521:'XUI'           	;1
746  358   FETCH_DIM_FUNC_ARG/93     $343=     $342                 523:'id'            	;1
747  358   SEND_VAR_EX/66            ?80       $343                 ?1                  	;0
748  358   DO_FCALL_BY_NAME/131      $344=     ?0                   ?0                  	;0
749  358   ASSIGN/38                 $345=     16?0                 $344                	;0
750  358   BOOL_NOT/13               #346=     $345                 ?0                  	;0
751  358   BOOL/52                   #341=     #346                 ?0                  	;0
752  358   BOOL_NOT/13               #347=     #341                 ?0                  	;0	<<743
753  358   JMPZ/43                   ?0        #347                 ?755                	;0	>>755
754  359   GOTO/253                  ?0        ?757                 ?524                	;0
755  361   INIT_FCALL_BY_NAME/59     ?0        ?0                   525:'E72f42a93714bA87'	;0	<<753
756  361   DO_FCALL_BY_NAME/131      ?301      ?0                   ?0                  	;0
757  363   FETCH_DIM_R/81            $349=     16?0                 527:'type'          	;0
758  363   FETCH_DIM_R/81            $350=     528:array (
  1 => 'Stream',
  2 => 'Movie',
  3 => 'Channel',
  4 => 'Station',
  5 => 'Episode',
) $349                	;0
759  363   ASSIGN/38                 ?304      16?9                 $350                	;0
760  364   ASSIGN/38                 ?305      16?17                529:NULL            	;0
761  365   GOTO/253                  ?0        ?617                 ?530                	;0
762  367   INIT_METHOD_CALL/112      ?0        16?6                 531:'query'         	;1
763  367   INIT_FCALL_BY_NAME/59     ?0        ?0                   533:'implode'       	;2
764  367   SEND_VAL_EX/116           ?80       535:','              ?1                  	;0
765  367   INIT_FCALL_BY_NAME/59     ?0        ?0                   536:'array_map'     	;2
766  367   SEND_VAL_EX/116           ?80       538:'intval'         ?1                  	;0
767  367   SEND_VAR_EX/66            ?96       16?16                ?2                  	;0
768  367   DO_FCALL_BY_NAME/131      $353=     ?0                   ?0                  	;0
769  367   SEND_VAR_NO_REF_EX/50     ?96       $353                 ?2                  	;0
770  367   DO_FCALL_BY_NAME/131      $354=     ?0                   ?0                  	;0
771  367   CONCAT/8                  #355=     539:'SELECT `stream_id`, `stream_info`, `progress_info` FROM `streams_servers` WHERE `stream_id` IN (' $354                	;0
772  367   CONCAT/8                  #356=     #355                 540:') AND `stream_info` IS NOT NULL AND `pid` IS NOT NULL AND `pid` > 0 GROUP BY `stream_id`;'	;0
773  367   SEND_VAL_EX/116           ?80       #356                 ?1                  	;0
774  367   DO_FCALL/60               ?310      ?0                   ?0                  	;0
775  368   INIT_METHOD_CALL/112      ?0        16?6                 541:'get_rows'      	;0
776  368   DO_FCALL/60               $358=     ?0                   ?0                  	;0
777  368   FE_RESET_R/77             $359=     $358                 ?795                	;0
778  368   FE_FETCH_R/78             ?0        $359                 16?29               	;795	>>795	<<794
779  369   FETCH_DIM_R/81            $360=     16?29                543:'stream_id'     	;0
780  369   INIT_FCALL_BY_NAME/59     ?0        ?0                   544:'json_decode'   	;2
781  369   FETCH_DIM_FUNC_ARG/93     $362=     16?29                546:'stream_info'   	;1
782  369   SEND_VAR_EX/66            ?80       $362                 ?1                  	;0
783  369   SEND_VAL_EX/116           ?96       547:true             ?2                  	;0
784  369   DO_FCALL_BY_NAME/131      $363=     ?0                   ?0                  	;0
785  369   INIT_ARRAY/71             #364=     $363                 ?0                  	;8
786  369   INIT_FCALL_BY_NAME/59     ?0        ?0                   548:'json_decode'   	;2
787  369   FETCH_DIM_FUNC_ARG/93     $365=     16?29                550:'progress_info' 	;1
788  369   SEND_VAR_EX/66            ?80       $365                 ?1                  	;0
789  369   SEND_VAL_EX/116           ?96       551:true             ?2                  	;0
790  369   DO_FCALL_BY_NAME/131      $366=     ?0                   ?0                  	;0
791  369   ADD_ARRAY_ELEMENT/72      #364=     $366                 ?0                  	;0
792  369   ASSIGN_DIM/147            ?314      16?30                $360                	;0
793  369   OP_DATA/137               ?0        #364                 ?0                  	;0
794  370   JMP/42                    ?0        ?778                 ?0                  	;0	>>778
795  370   FE_FREE/127               ?0        $359                 ?0                  	;0	<<777
796  373   ECHO/40                   ?0        552:'                        <div class="tab-pane" id="adaptive">
							<div class="table">
								<table id="datatable-adaptive" class="table table-striped table-borderless mb-0">
									<thead>
										<tr>
											<th class="text-center">ID</th>
											<th>Stream Name</th>
                                            <th class="text-center">Bandwidth</th>
											<th class="text-center" style="width:300px;">Stream Info</th>
										</tr>
									</thead>
									<tbody>
										' ?0                  	;0
797  374   FE_RESET_R/77             $367=     16?16                ?980                	;0
798  374   FE_FETCH_R/78             ?0        $367                 16?31               	;980	>>980	<<979
799  375   NOP/0                     ?0        ?0                   ?0                  	;1
800  375   GOTO/253                  ?0        ?811                 ?553                	;0
801  377   CONCAT/8                  #368=     554:'<td>'           16?33               	;0
802  377   CONCAT/8                  #369=     #368                 555:'</td>'         	;0
803  377   ASSIGN_CONCAT/30          ?323      16?32                #369                	;0
804  379   CONCAT/8                  #371=     556:'<td>'           16?34               	;0
805  379   CONCAT/8                  #372=     #371                 557:'</td></tr></tbody></table>'	;0
806  379   ASSIGN_CONCAT/30          ?326      16?32                #372                	;0
807  380   ECHO/40                   ?0        558:'										<tr>
											<td class="text-center">
                                                <a href="stream_view?id=' ?0                  	;0
808  381   ECHO/40                   ?0        16?31                ?0                  	;0
809  382   NOP/0                     ?0        ?0                   ?0                  	;1
810  382   GOTO/253                  ?0        ?834                 ?559                	;0
811  384   FETCH_DIM_R/81            $374=     16?30                16?31               	;0
812  384   JMP_SET/152               #375=     $374                 ?814                	;0
813  384   QM_ASSIGN/22              #375=     560:array (
)        ?0                  	;0
814  384   FETCH_LIST/98             $376=     #375                 561:0               	;0
815  384   ASSIGN/38                 ?330      16?35                $376                	;0
816  384   FETCH_LIST/98             $378=     #375                 562:1               	;0
817  384   ASSIGN/38                 ?332      16?36                $378                	;0
818  384   FREE/70                   ?0        #375                 ?0                  	;0
819  385   FETCH_DIM_IS/90           $380=     16?35                563:'codecs'        	;0
820  385   ISSET_ISEMPTY_DIM_OBJ/115 #381=     $380                 564:'video'         	;33554432
821  385   JMPZ/43                   ?0        #381                 ?824                	;0	>>824
822  386   NOP/0                     ?0        ?0                   ?0                  	;1
823  386   GOTO/253                  ?0        ?827                 ?565                	;0
824  388   FETCH_DIM_W/84            $382=     16?35                566:'codecs'        	;0	<<821
825  388   ASSIGN_DIM/147            ?336      $382                 567:'video'         	;0
826  388   OP_DATA/137               ?0        568:array (
  'width' => '?',
  'height' => '?',
  'codec_name' => 'N/A',
  'r_frame_rate' => '--',
) ?0                  	;0
827  390   FETCH_DIM_IS/90           $384=     16?35                569:'codecs'        	;0
828  390   ISSET_ISEMPTY_DIM_OBJ/115 #385=     $384                 570:'audio'         	;33554432
829  390   JMPZ/43                   ?0        #385                 ?832                	;0	>>832
830  391   NOP/0                     ?0        ?0                   ?0                  	;1
831  391   GOTO/253                  ?0        ?874                 ?571                	;0
832  393   NOP/0                     ?0        ?0                   ?0                  	;1	<<829
833  393   GOTO/253                  ?0        ?871                 ?572                	;0
834  395   ECHO/40                   ?0        573:'"><button type="button" class="btn btn-info btn-xs waves-effect waves-light btn-fixed-lg">' ?0                  	;0
835  396   ECHO/40                   ?0        16?31                ?0                  	;0
836  397   ECHO/40                   ?0        574:'</button></a>
                                            </td>
											<td>' ?0                  	;0
837  398   FETCH_DIM_R/81            $386=     16?37                16?31               	;0
838  398   JMP_SET/152               #387=     $386                 ?840                	;0
839  398   QM_ASSIGN/22              #387=     575:'Not Available'  ?0                  	;0
840  398   ECHO/40                   ?0        #387                 ?0                  	;0
841  399   ECHO/40                   ?0        576:'</td>
                                            <td class="text-center">' ?0                  	;0
842  400   NOP/0                     ?0        ?0                   ?0                  	;1
843  400   GOTO/253                  ?0        ?844                 ?577                	;0
844  402   INIT_FCALL_BY_NAME/59     ?0        ?0                   578:'number_format' 	;2
845  402   INIT_FCALL_BY_NAME/59     ?0        ?0                   580:'floatval'      	;1
846  402   FETCH_DIM_FUNC_ARG/93     $388=     16?35                582:'bitrate'       	;1
847  402   SEND_VAR_EX/66            ?80       $388                 ?1                  	;0
848  402   DO_FCALL_BY_NAME/131      $389=     ?0                   ?0                  	;0
849  402   SEND_VAR_NO_REF_EX/50     ?80       $389                 ?1                  	;0
850  402   SEND_VAL_EX/116           ?96       583:0                ?2                  	;0
851  402   DO_FCALL_BY_NAME/131      $390=     ?0                   ?0                  	;0
852  402   ECHO/40                   ?0        $390                 ?0                  	;0
853  403   ECHO/40                   ?0        584:'</td>
											<td class="text-center" style="width:400px;">' ?0                  	;0
854  404   ECHO/40                   ?0        16?32                ?0                  	;0
855  405   ECHO/40                   ?0        585:'</td>
										</tr>
										' ?0                  	;0
856  407   NOP/0                     ?0        ?0                   ?0                  	;1
857  407   GOTO/253                  ?0        ?979                 ?586                	;0
858  409   JMPZ/43                   ?0        16?34                ?861                	;0	>>861
859  410   NOP/0                     ?0        ?0                   ?0                  	;1
860  410   GOTO/253                  ?0        ?864                 ?587                	;0
861  412   ASSIGN/38                 ?344      16?34                588:'--'            	;0	<<858
862  413   NOP/0                     ?0        ?0                   ?0                  	;1
863  413   GOTO/253                  ?0        ?921                 ?589                	;0
864  415   IS_SMALLER_OR_EQUAL/20    #392=     590:1000             16?34               	;0
865  415   BOOL_NOT/13               #393=     #392                 ?0                  	;0
866  415   JMPZ/43                   ?0        #393                 ?869                	;0	>>869
867  416   NOP/0                     ?0        ?0                   ?0                  	;1
868  416   GOTO/253                  ?0        ?919                 ?591                	;0
869  418   NOP/0                     ?0        ?0                   ?0                  	;1	<<866
870  418   GOTO/253                  ?0        ?914                 ?592                	;0
871  420   FETCH_DIM_W/84            $394=     16?35                593:'codecs'        	;0
872  420   ASSIGN_DIM/147            ?348      $394                 594:'audio'         	;0
873  420   OP_DATA/137               ?0        595:array (
  'codec_name' => 'N/A',
) ?0                  	;0
874  422   FETCH_DIM_R/81            $396=     16?35                596:'bitrate'       	;0
875  422   IS_EQUAL/17               #397=     $396                 597:0               	;0
876  422   BOOL_NOT/13               #398=     #397                 ?0                  	;0
877  422   JMPZ/43                   ?0        #398                 ?880                	;0	>>880
878  423   NOP/0                     ?0        ?0                   ?0                  	;1
879  423   GOTO/253                  ?0        ?882                 ?598                	;0
880  425   ASSIGN_DIM/147            ?352      16?35                599:'bitrate'       	;0	<<877
881  425   OP_DATA/137               ?0        600:'?'              ?0                  	;0
882  427   NOP/0                     ?0        ?0                   ?0                  	;1
883  427   GOTO/253                  ?0        ?932                 ?601                	;0
884  429   JMPZ/43                   ?0        16?38                ?887                	;0	>>887
885  430   NOP/0                     ?0        ?0                   ?0                  	;1
886  430   GOTO/253                  ?0        ?888                 ?602                	;0
887  432   ASSIGN_CONCAT/30          ?353      16?32                603:'<td style=\'color: #20a009;\'><i class=\'mdi mdi-play-speed\' data-name=\'mdi-play-speed\'></i></td>'	;0	<<884
888  434   FETCH_DIM_R/81            $401=     16?35                604:'codecs'        	;0
889  434   FETCH_DIM_R/81            $402=     $401                 605:'video'         	;0
890  434   FETCH_DIM_R/81            $403=     $402                 606:'width'         	;0
891  434   CONCAT/8                  #404=     607:'<td style=\'color: #20a009;\'><i class=\'mdi mdi-layers\' data-name=\'mdi-layers\'></i></td></tr><tr><td class=\'double\'>' $403                	;0
892  434   CONCAT/8                  #405=     #404                 608:' x '           	;0
893  434   FETCH_DIM_R/81            $406=     16?35                609:'codecs'        	;0
894  434   FETCH_DIM_R/81            $407=     $406                 610:'video'         	;0
895  434   FETCH_DIM_R/81            $408=     $407                 611:'height'        	;0
896  434   CONCAT/8                  #409=     #405                 $408                	;0
897  434   CONCAT/8                  #410=     #409                 612:'</td><td>'     	;0
898  434   FETCH_DIM_R/81            $411=     16?35                613:'codecs'        	;0
899  434   FETCH_DIM_R/81            $412=     $411                 614:'video'         	;0
900  434   FETCH_DIM_R/81            $413=     $412                 615:'codec_name'    	;0
901  434   CONCAT/8                  #414=     #410                 $413                	;0
902  434   CONCAT/8                  #415=     #414                 616:'</td><td>'     	;0
903  434   FETCH_DIM_R/81            $416=     16?35                617:'codecs'        	;0
904  434   FETCH_DIM_R/81            $417=     $416                 618:'audio'         	;0
905  434   FETCH_DIM_R/81            $418=     $417                 619:'codec_name'    	;0
906  434   CONCAT/8                  #419=     #415                 $418                	;0
907  434   CONCAT/8                  #420=     #419                 620:'</td>'         	;0
908  434   ASSIGN_CONCAT/30          ?374      16?32                #420                	;0
909  435   JMPZ/43                   ?0        16?38                ?912                	;0	>>912
910  436   NOP/0                     ?0        ?0                   ?0                  	;1
911  436   GOTO/253                  ?0        ?804                 ?621                	;0
912  438   NOP/0                     ?0        ?0                   ?0                  	;1	<<909
913  438   GOTO/253                  ?0        ?801                 ?622                	;0
914  440   INIT_FCALL_BY_NAME/59     ?0        ?0                   623:'intval'        	;1
915  440   DIV/4                     #422=     16?34                625:1000            	;0
916  440   SEND_VAL_EX/116           ?80       #422                 ?1                  	;0
917  440   DO_FCALL_BY_NAME/131      $423=     ?0                   ?0                  	;0
918  440   ASSIGN/38                 ?377      16?34                $423                	;0
919  442   CONCAT/8                  #425=     16?34                626:' FPS'          	;0
920  442   ASSIGN/38                 ?379      16?34                #425                	;0
921  444   INIT_FCALL_BY_NAME/59     ?0        ?0                   627:'number_format' 	;2
922  444   FETCH_DIM_R/81            $427=     16?35                629:'bitrate'       	;0
923  444   DIV/4                     #428=     $427                 630:1024            	;0
924  444   SEND_VAL_EX/116           ?80       #428                 ?1                  	;0
925  444   SEND_VAL_EX/116           ?96       631:0                ?2                  	;0
926  444   DO_FCALL_BY_NAME/131      $429=     ?0                   ?0                  	;0
927  444   CONCAT/8                  #430=     632:'<table class=\'table-data nowrap\' style=\'width: 400px;\' align=\'center\'><tbody><tr><td class=\'double\'>' $429                	;0
928  444   CONCAT/8                  #431=     #430                 633:' Kbps</td><td style=\'color: #20a009;\'><i class=\'mdi mdi-video\' data-name=\'mdi-video\'></i></td><td style=\'color: #20a009;\'><i class=\'mdi mdi-volume-high\' data-name=\'mdi-volume-high\'></i></td>'	;0
929  444   ASSIGN/38                 ?385      16?32                #431                	;0
930  445   NOP/0                     ?0        ?0                   ?0                  	;1
931  445   GOTO/253                  ?0        ?884                 ?634                	;0
932  447   ISSET_ISEMPTY_DIM_OBJ/115 #433=     16?36                635:'speed'         	;33554432
933  447   JMPZ/43                   ?0        #433                 ?936                	;0	>>936
934  448   NOP/0                     ?0        ?0                   ?0                  	;1
935  448   GOTO/253                  ?0        ?939                 ?636                	;0
936  450   ASSIGN/38                 ?387      16?33                637:'1x'            	;0	<<933
937  451   NOP/0                     ?0        ?0                   ?0                  	;1
938  451   GOTO/253                  ?0        ?949                 ?638                	;0
939  453   INIT_FCALL_BY_NAME/59     ?0        ?0                   639:'floor'         	;1
940  453   FETCH_DIM_R/81            $435=     16?36                641:'speed'         	;0
941  453   MUL/3                     #436=     $435                 642:100             	;0
942  453   SEND_VAL_EX/116           ?80       #436                 ?1                  	;0
943  453   DO_FCALL_BY_NAME/131      $437=     ?0                   ?0                  	;0
944  453   DIV/4                     #438=     $437                 643:100             	;0
945  453   CONCAT/8                  #439=     #438                 644:'x'             	;0
946  453   ASSIGN/38                 ?393      16?33                #439                	;0
947  454   NOP/0                     ?0        ?0                   ?0                  	;1
948  454   GOTO/253                  ?0        ?949                 ?645                	;0
949  457   ASSIGN/38                 ?394      16?34                646:NULL            	;0
950  458   ISSET_ISEMPTY_DIM_OBJ/115 #442=     16?36                647:'fps'           	;33554432
951  458   JMPZ/43                   ?0        #442                 ?954                	;0	>>954
952  459   NOP/0                     ?0        ?0                   ?0                  	;1
953  459   GOTO/253                  ?0        ?972                 ?648                	;0
954  461   FETCH_DIM_IS/90           $443=     16?35                649:'codecs'        	;0	<<951
955  461   FETCH_DIM_IS/90           $444=     $443                 650:'video'         	;0
956  461   ISSET_ISEMPTY_DIM_OBJ/115 #445=     $444                 651:'r_frame_rate'  	;33554432
957  461   BOOL_NOT/13               #446=     #445                 ?0                  	;0
958  461   JMPZ/43                   ?0        #446                 ?961                	;0	>>961
959  462   NOP/0                     ?0        ?0                   ?0                  	;1
960  462   GOTO/253                  ?0        ?970                 ?652                	;0
961  464   INIT_FCALL_BY_NAME/59     ?0        ?0                   653:'intval'        	;1	<<958
962  464   FETCH_DIM_FUNC_ARG/93     $447=     16?35                655:'codecs'        	;1
963  464   FETCH_DIM_FUNC_ARG/93     $448=     $447                 656:'video'         	;1
964  464   FETCH_DIM_FUNC_ARG/93     $449=     $448                 657:'r_frame_rate'  	;1
965  464   SEND_VAR_EX/66            ?80       $449                 ?1                  	;0
966  464   DO_FCALL_BY_NAME/131      $450=     ?0                   ?0                  	;0
967  464   ASSIGN/38                 ?404      16?34                $450                	;0
968  465   NOP/0                     ?0        ?0                   ?0                  	;1
969  465   GOTO/253                  ?0        ?970                 ?658                	;0
970  468   NOP/0                     ?0        ?0                   ?0                  	;1
971  468   GOTO/253                  ?0        ?977                 ?659                	;0
972  470   INIT_FCALL_BY_NAME/59     ?0        ?0                   660:'intval'        	;1
973  470   FETCH_DIM_FUNC_ARG/93     $452=     16?36                662:'fps'           	;1
974  470   SEND_VAR_EX/66            ?80       $452                 ?1                  	;0
975  470   DO_FCALL_BY_NAME/131      $453=     ?0                   ?0                  	;0
976  470   ASSIGN/38                 ?407      16?34                $453                	;0
977  472   NOP/0                     ?0        ?0                   ?0                  	;1
978  472   GOTO/253                  ?0        ?858                 ?663                	;0
979  473   JMP/42                    ?0        ?798                 ?0                  	;0	>>798
980  473   FE_FREE/127               ?0        $367                 ?0                  	;0	<<797
981  475   GOTO/253                  ?0        ?1495                ?664                	;0
982  477   FETCH_IS/89               $455=     665:'_SERVER'        ?0                  	;0
983  477   ISSET_ISEMPTY_DIM_OBJ/115 #456=     $455                 666:'HTTP_X_REQUESTED_WITH'	;16777216
984  477   BOOL_NOT/13               #457=     #456                 ?0                  	;0
985  477   JMPZ_EX/46                #457=     #457                 ?993                	;0	>>993
986  477   INIT_FCALL_BY_NAME/59     ?0        ?0                   667:'strtolower'    	;1
987  477   FETCH_FUNC_ARG/92         $458=     669:'_SERVER'        ?0                  	;1
988  477   FETCH_DIM_FUNC_ARG/93     $459=     $458                 670:'HTTP_X_REQUESTED_WITH'	;1
989  477   SEND_VAR_EX/66            ?80       $459                 ?1                  	;0
990  477   DO_FCALL_BY_NAME/131      $460=     ?0                   ?0                  	;0
991  477   IS_EQUAL/17               #461=     $460                 671:'xmlhttprequest'	;0
992  477   BOOL/52                   #457=     #461                 ?0                  	;0
993  477   BOOL_NOT/13               #462=     #457                 ?0                  	;0	<<985
994  477   JMPZ/43                   ?0        #462                 ?996                	;0	>>996
995  478   GOTO/253                  ?0        ?997                 ?672                	;0
996  480   ECHO/40                   ?0        673:' style="display: none;"' ?0                  	;0	<<994
997  482   ECHO/40                   ?0        674:'>
    <div class="container-fluid">
		<div class="row">
			<div class="col-12">
				<div class="page-title-box">
					<div class="page-title-right">
                        ' ?0                  	;0
998  483   INCLUDE_OR_EVAL/73        ?416      675:'topbar.php'     ?0                  	;2
999  484   GOTO/253                  ?0        ?1208                ?676                	;0
1000 486   FETCH_DIM_R/81            $464=     16?5                 677:'plot'          	;0
1001 486   ECHO/40                   ?0        $464                 ?0                  	;0
1002 487   ECHO/40                   ?0        678:'</label>
                                    <div class="col-md-10">
                                        <textarea readonly rows="6" class="form-control" id="plot" name="plot">' ?0                  	;0
1003 488   INIT_FCALL_BY_NAME/59     ?0        ?0                   679:'htmlspecialchars'	;1
1004 488   FETCH_DIM_FUNC_ARG/93     $465=     16?4                 681:'plot'          	;1
1005 488   SEND_VAR_EX/66            ?80       $465                 ?1                  	;0
1006 488   DO_FCALL_BY_NAME/131      $466=     ?0                   ?0                  	;0
1007 488   ECHO/40                   ?0        $466                 ?0                  	;0
1008 489   ECHO/40                   ?0        682:'</textarea>
                                    </div>
                                </div>
                                <div class="form-group row mb-4">
                                    <label class="col-md-2 col-form-label" for="cast">' ?0                  	;0
1009 490   FETCH_DIM_R/81            $467=     16?5                 683:'cast'          	;0
1010 490   ECHO/40                   ?0        $467                 ?0                  	;0
1011 491   GOTO/253                  ?0        ?463                 ?684                	;0
1012 494   FETCH_DIM_R/81            $468=     16?0                 685:'tv_archive_server_id'	;0
1013 494   IS_SMALLER/19             #469=     686:0                $468                	;0
1014 494   JMPZ_EX/46                #469=     #469                 ?1018               	;0	>>1018
1015 494   FETCH_DIM_R/81            $470=     16?0                 687:'tv_archive_duration'	;0
1016 494   IS_SMALLER/19             #471=     688:0                $470                	;0
1017 494   BOOL/52                   #469=     #471                 ?0                  	;0
1018 494   BOOL_NOT/13               #472=     #469                 ?0                  	;0	<<1014
1019 494   JMPZ/43                   ?0        #472                 ?1021               	;0	>>1021
1020 495   GOTO/253                  ?0        ?1022                ?689                	;0
1021 497   ECHO/40                   ?0        690:'                        <li class="nav-item">
							<a href="#archive" data-toggle="tab" aria-expanded="false" class="nav-link">
								TV Archive
							</a>
						</li>
                        ' ?0                  	;0	<<1019
1022 499   ECHO/40                   ?0        691:'                        <li class="nav-item">
							<a href="#errors" data-toggle="tab" aria-expanded="false" class="nav-link">
								Recent Errors
							</a>
						</li>
                        ' ?0                  	;0
1023 500   GOTO/253                  ?0        ?1                   ?692                	;0
1024 503   ECHO/40                   ?0        693:'									</tbody>
								</table>
							</div>
						</div>
                        ' ?0                  	;0
1025 505   ECHO/40                   ?0        694:'					</div>
				</div>
			</div> 
		</div>
	</div>
</div>
' ?0                  	;0
1026 506   GOTO/253                  ?0        ?1607                ?695                	;0
1027 509   INIT_FCALL_BY_NAME/59     ?0        ?0                   696:'json_decode'   	;2
1028 509   FETCH_DIM_FUNC_ARG/93     $473=     16?0                 698:'adaptive_link' 	;1
1029 509   SEND_VAR_EX/66            ?80       $473                 ?1                  	;0
1030 509   SEND_VAL_EX/116           ?96       699:true             ?2                  	;0
1031 509   DO_FCALL_BY_NAME/131      $474=     ?0                   ?0                  	;0
1032 509   JMP_SET/152               #475=     $474                 ?1034               	;0
1033 509   QM_ASSIGN/22              #475=     700:array (
)        ?0                  	;0
1034 509   ASSIGN/38                 ?429      16?16                #475                	;0
1035 511   FETCH_DIM_R/81            $477=     16?0                 701:'type'          	;0
1036 511   IS_EQUAL/17               #478=     $477                 702:5               	;0
1037 511   BOOL_NOT/13               #479=     #478                 ?0                  	;0
1038 511   JMPZ/43                   ?0        #479                 ?1040               	;0	>>1040
1039 512   GOTO/253                  ?0        ?483                 ?703                	;0
1040 514   ASSIGN/38                 ?433      16?7                 704:NULL            	;0	<<1038
1041 515   GOTO/253                  ?0        ?68                  ?705                	;0
1042 519   GOTO/253                  ?0        ?363                 ?706                	;0
1043 521   INIT_FCALL_BY_NAME/59     ?0        ?0                   707:'json_decode'   	;2
1044 521   FETCH_DIM_FUNC_ARG/93     $481=     16?0                 709:'movie_properties'	;1
1045 521   SEND_VAR_EX/66            ?80       $481                 ?1                  	;0
1046 521   SEND_VAL_EX/116           ?96       710:true             ?2                  	;0
1047 521   DO_FCALL_BY_NAME/131      $482=     ?0                   ?0                  	;0
1048 521   ASSIGN/38                 ?436      16?4                 $482                	;0
1049 522   GOTO/253                  ?0        ?652                 ?711                	;0
1050 524   ECHO/40                   ?0        712:'">
                                        </div>
                                    </div>
                                </div> 
                            </div>
                        </div>
                        ' ?0                  	;0
1051 526   GOTO/253                  ?0        ?707                 ?713                	;0
1052 528   ECHO/40                   ?0        714:'                        <div class="tab-pane" id="information">
                            <div class="col-12 input-view">
                                <div class="form-group row mb-4">
                                    <label class="col-md-2 col-form-label" for="plot">' ?0                  	;0
1053 529   GOTO/253                  ?0        ?1000                ?715                	;0
1054 531   FETCH_DIM_R/81            $484=     16?5                 716:'plot'          	;0
1055 531   ECHO/40                   ?0        $484                 ?0                  	;0
1056 532   ECHO/40                   ?0        717:'</label>
                                        <div class="col-md-10">
                                            <textarea readonly rows="6" class="form-control" id="plot" name="plot">' ?0                  	;0
1057 533   INIT_FCALL_BY_NAME/59     ?0        ?0                   718:'htmlspecialchars'	;1
1058 533   FETCH_DIM_FUNC_ARG/93     $485=     16?4                 720:'plot'          	;1
1059 533   SEND_VAR_EX/66            ?80       $485                 ?1                  	;0
1060 533   DO_FCALL_BY_NAME/131      $486=     ?0                   ?0                  	;0
1061 533   ECHO/40                   ?0        $486                 ?0                  	;0
1062 534   ECHO/40                   ?0        721:'</textarea>
                                        </div>
                                    </div>
                                    <div class="form-group row mb-4">
                                        <label class="col-md-2 col-form-label" for="release_date">' ?0                  	;0
1063 535   FETCH_DIM_R/81            $487=     16?5                 722:'release_date'  	;0
1064 535   ECHO/40                   ?0        $487                 ?0                  	;0
1065 536   GOTO/253                  ?0        ?1066                ?723                	;0
1066 538   ECHO/40                   ?0        724:'</label>
                                        <div class="col-md-4">
                                            <input readonly type="text" class="form-control text-center" id="release_date" name="release_date" value="' ?0                  	;0
1067 539   INIT_FCALL_BY_NAME/59     ?0        ?0                   725:'htmlspecialchars'	;1
1068 539   FETCH_DIM_FUNC_ARG/93     $488=     16?4                 727:'release_date'  	;1
1069 539   SEND_VAR_EX/66            ?80       $488                 ?1                  	;0
1070 539   DO_FCALL_BY_NAME/131      $489=     ?0                   ?0                  	;0
1071 539   ECHO/40                   ?0        $489                 ?0                  	;0
1072 540   ECHO/40                   ?0        728:'">
                                        </div>
                                        <label class="col-md-2 col-form-label" for="episode_run_time">' ?0                  	;0
1073 541   FETCH_DIM_R/81            $490=     16?5                 729:'runtime'       	;0
1074 541   ECHO/40                   ?0        $490                 ?0                  	;0
1075 542   ECHO/40                   ?0        730:'</label>
                                        <div class="col-md-4">
                                            <input readonly type="text" class="form-control text-center" id="episode_run_time" name="episode_run_time" value="' ?0                  	;0
1076 543   GOTO/253                  ?0        ?49                  ?731                	;0
1077 545   ECHO/40                   ?0        732:'">
                                        </div>
                                    </div>
                                    <div class="form-group row mb-4">
                                        <label class="col-md-2 col-form-label" for="director">Director</label>
                                        <div class="col-md-4">
                                            <input readonly type="text" class="form-control text-center" id="director" name="director" value="' ?0                  	;0
1078 546   INIT_FCALL_BY_NAME/59     ?0        ?0                   733:'htmlspecialchars'	;1
1079 546   FETCH_DIM_FUNC_ARG/93     $491=     16?7                 735:'director'      	;1
1080 546   SEND_VAR_EX/66            ?80       $491                 ?1                  	;0
1081 546   DO_FCALL_BY_NAME/131      $492=     ?0                   ?0                  	;0
1082 546   ECHO/40                   ?0        $492                 ?0                  	;0
1083 547   ECHO/40                   ?0        736:'">
                                        </div>
                                        <label class="col-md-2 col-form-label" for="genre">Genres</label>
                                        <div class="col-md-4">
                                            <input readonly type="text" class="form-control text-center " id="genre" name="genre" value="' ?0                  	;0
1084 548   INIT_FCALL_BY_NAME/59     ?0        ?0                   737:'htmlspecialchars'	;1
1085 548   FETCH_DIM_FUNC_ARG/93     $493=     16?7                 739:'genre'         	;1
1086 548   SEND_VAR_EX/66            ?80       $493                 ?1                  	;0
1087 548   DO_FCALL_BY_NAME/131      $494=     ?0                   ?0                  	;0
1088 548   ECHO/40                   ?0        $494                 ?0                  	;0
1089 549   ECHO/40                   ?0        740:'">
                                        </div>
                                    </div>
                                    <div class="form-group row mb-4">
                                        <label class="col-md-2 col-form-label" for="release_date">Release Date</label>
                                        <div class="col-md-4">
                                            <input readonly type="text" class="form-control text-center" id="release_date" name="release_date" value="' ?0                  	;0
1090 550   GOTO/253                  ?0        ?107                 ?741                	;0
1091 552   ECHO/40                   ?0        742:'						<div class="tab-pane" id="guide">
							<div class="inbox-widget slimscroll" style="min-height: 400px;">
								' ?0                  	;0
1092 553   INIT_FCALL_BY_NAME/59     ?0        ?0                   743:'date'          	;1
1093 553   SEND_VAL_EX/116           ?80       745:'Y-m-d'          ?1                  	;0
1094 553   DO_FCALL_BY_NAME/131      $495=     ?0                   ?0                  	;0
1095 553   ASSIGN/38                 ?449      16?39                $495                	;0
1096 554   FE_RESET_R/77             $497=     16?17                ?1174               	;0
1097 554   FE_FETCH_R/78             ?0        $497                 16?40               	;1174	>>1174	<<1173
1098 555   NOP/0                     ?0        ?0                   ?0                  	;1
1099 555   GOTO/253                  ?0        ?1128                ?746                	;0
1100 557   INIT_FCALL_BY_NAME/59     ?0        ?0                   747:'intval'        	;1
1101 557   FETCH_DIM_FUNC_ARG/93     $498=     16?0                 749:'id'            	;1
1102 557   SEND_VAR_EX/66            ?80       $498                 ?1                  	;0
1103 557   DO_FCALL_BY_NAME/131      $499=     ?0                   ?0                  	;0
1104 557   ECHO/40                   ?0        $499                 ?0                  	;0
1105 558   ECHO/40                   ?0        750:'&programme='    ?0                  	;0
1106 559   INIT_FCALL_BY_NAME/59     ?0        ?0                   751:'intval'        	;1
1107 559   FETCH_DIM_FUNC_ARG/93     $500=     16?40                753:'id'            	;1
1108 559   SEND_VAR_EX/66            ?80       $500                 ?1                  	;0
1109 559   DO_FCALL_BY_NAME/131      $501=     ?0                   ?0                  	;0
1110 559   ECHO/40                   ?0        $501                 ?0                  	;0
1111 560   ECHO/40                   ?0        754:'"><button class="btn btn-danger btn-xs waves-effect waves-light tooltip" title="Record"><i class="mdi mdi-record"></i></button></a>
                                        ' ?0                  	;0
1112 562   NOP/0                     ?0        ?0                   ?0                  	;1
1113 562   GOTO/253                  ?0        ?1155                ?755                	;0
1114 564   FETCH_DIM_R/81            $502=     16?40                756:'title'         	;0
1115 564   ECHO/40                   ?0        $502                 ?0                  	;0
1116 565   ECHO/40                   ?0        757:'</p>
									<p class="inbox-item-text" style="margin-top:10px;">' ?0                  	;0
1117 566   FETCH_DIM_R/81            $503=     16?40                758:'description'   	;0
1118 566   ECHO/40                   ?0        $503                 ?0                  	;0
1119 567   ECHO/40                   ?0        759:'</p>
									<p class="inbox-item-date btn-group">
                                        <button class="btn btn-info btn-xs waves-effect waves-light btn-fixed">' ?0                  	;0
1120 568   INIT_FCALL_BY_NAME/59     ?0        ?0                   760:'date'          	;2
1121 568   SEND_VAL_EX/116           ?80       762:'H:i'            ?1                  	;0
1122 568   FETCH_DIM_FUNC_ARG/93     $504=     16?40                763:'start'         	;2
1123 568   SEND_VAR_EX/66            ?96       $504                 ?2                  	;0
1124 568   DO_FCALL_BY_NAME/131      $505=     ?0                   ?0                  	;0
1125 568   ECHO/40                   ?0        $505                 ?0                  	;0
1126 569   NOP/0                     ?0        ?0                   ?0                  	;1
1127 569   GOTO/253                  ?0        ?1158                ?764                	;0
1128 571   INIT_FCALL_BY_NAME/59     ?0        ?0                   765:'date'          	;2
1129 571   SEND_VAL_EX/116           ?80       767:'Y-m-d'          ?1                  	;0
1130 571   FETCH_DIM_FUNC_ARG/93     $506=     16?40                768:'start'         	;2
1131 571   SEND_VAR_EX/66            ?96       $506                 ?2                  	;0
1132 571   DO_FCALL_BY_NAME/131      $507=     ?0                   ?0                  	;0
1133 571   IS_NOT_EQUAL/18           #508=     $507                 16?39               	;0
1134 571   BOOL_NOT/13               #509=     #508                 ?0                  	;0
1135 571   JMPZ/43                   ?0        #509                 ?1138               	;0	>>1138
1136 572   NOP/0                     ?0        ?0                   ?0                  	;1
1137 572   GOTO/253                  ?0        ?1152                ?769                	;0
1138 574   INIT_FCALL_BY_NAME/59     ?0        ?0                   770:'date'          	;2	<<1135
1139 574   SEND_VAL_EX/116           ?80       772:'Y-m-d'          ?1                  	;0
1140 574   FETCH_DIM_FUNC_ARG/93     $510=     16?40                773:'start'         	;2
1141 574   SEND_VAR_EX/66            ?96       $510                 ?2                  	;0
1142 574   DO_FCALL_BY_NAME/131      $511=     ?0                   ?0                  	;0
1143 574   ASSIGN/38                 ?465      16?39                $511                	;0
1144 575   INIT_FCALL_BY_NAME/59     ?0        ?0                   774:'date'          	;2
1145 575   SEND_VAL_EX/116           ?80       776:'l jS'           ?1                  	;0
1146 575   FETCH_DIM_FUNC_ARG/93     $513=     16?40                777:'start'         	;2
1147 575   SEND_VAR_EX/66            ?96       $513                 ?2                  	;0
1148 575   DO_FCALL_BY_NAME/131      $514=     ?0                   ?0                  	;0
1149 575   CONCAT/8                  #515=     778:'<h4 class="header-title mb-3" style="padding-top: 20px;">' $514                	;0
1150 575   CONCAT/8                  #516=     #515                 779:'</h4>'         	;0
1151 575   ECHO/40                   ?0        #516                 ?0                  	;0
1152 577   ECHO/40                   ?0        780:'								<div class="inbox-item">
									<p class="inbox-item-author">' ?0                  	;0
1153 578   NOP/0                     ?0        ?0                   ?0                  	;1
1154 578   GOTO/253                  ?0        ?1114                ?781                	;0
1155 580   ECHO/40                   ?0        782:'									</p><br/>
								</div>
								' ?0                  	;0
1156 582   NOP/0                     ?0        ?0                   ?0                  	;1
1157 582   GOTO/253                  ?0        ?1173                ?783                	;0
1158 584   ECHO/40                   ?0        784:' - '            ?0                  	;0
1159 585   INIT_FCALL_BY_NAME/59     ?0        ?0                   785:'date'          	;2
1160 585   SEND_VAL_EX/116           ?80       787:'H:i'            ?1                  	;0
1161 585   FETCH_DIM_FUNC_ARG/93     $517=     16?40                788:'end'           	;2
1162 585   SEND_VAR_EX/66            ?96       $517                 ?2                  	;0
1163 585   DO_FCALL_BY_NAME/131      $518=     ?0                   ?0                  	;0
1164 585   ECHO/40                   ?0        $518                 ?0                  	;0
1165 586   ECHO/40                   ?0        789:'</button>
                                        ' ?0                  	;0
1166 587   BOOL_NOT/13               #519=     16?28                ?0                  	;0
1167 587   JMPZ/43                   ?0        #519                 ?1170               	;0	>>1170
1168 588   NOP/0                     ?0        ?0                   ?0                  	;1
1169 588   GOTO/253                  ?0        ?1112                ?790                	;0
1170 590   ECHO/40                   ?0        791:'                                        <a href="record?id=' ?0                  	;0	<<1167
1171 591   NOP/0                     ?0        ?0                   ?0                  	;1
1172 591   GOTO/253                  ?0        ?1100                ?792                	;0
1173 592   JMP/42                    ?0        ?1097                ?0                  	;0	>>1097
1174 592   FE_FREE/127               ?0        $497                 ?0                  	;0	<<1096
1175 595   ECHO/40                   ?0        793:'							</div>
						</div>
                        ' ?0                  	;0
1176 596   GOTO/253                  ?0        ?502                 ?794                	;0
1177 598   ECHO/40                   ?0        795:'                                            <th>Actions</th>
                                            ' ?0                  	;0
1178 600   ECHO/40                   ?0        796:'                                            <th>' ?0                  	;0
1179 601   ECHO/40                   ?0        16?9                 ?0                  	;0
1180 602   ECHO/40                   ?0        797:' Info</th>
                                            <th>' ?0                  	;0
1181 603   GOTO/253                  ?0        ?1572                ?798                	;0
1182 605   ECHO/40                   ?0        799:'									</tbody>
								</table>
							</div>
						</div>
                        ' ?0                  	;0
1183 608   GOTO/253                  ?0        ?1051                ?800                	;0
1184 610   GOTO/253                  ?0        ?130                 ?801                	;0
1185 613   ECHO/40                   ?0        802:'									</tbody>
								</table>
							</div>
						</div>
                        ' ?0                  	;0
1186 615   ECHO/40                   ?0        803:'                        <div class="tab-pane" id="errors">
							<div class="table">
								<table id="datatable-errors" class="table table-striped table-borderless mb-0">
									<thead>
										<tr>
											<th class="text-center">Date</th>
                                            <th>Message</th>
										</tr>
									</thead>
									<tbody>
                                        ' ?0                  	;0
1187 616   INIT_FCALL_BY_NAME/59     ?0        ?0                   804:'E7045b4678cc9DB2'	;1
1188 616   FETCH_DIM_FUNC_ARG/93     $520=     16?0                 806:'id'            	;1
1189 616   SEND_VAR_EX/66            ?80       $520                 ?1                  	;0
1190 616   DO_FCALL_BY_NAME/131      $521=     ?0                   ?0                  	;0
1191 616   FE_RESET_R/77             $522=     $521                 ?1206               	;0
1192 616   FE_FETCH_R/78             ?0        $522                 16?24               	;1206	>>1206	<<1205
1193 617   ECHO/40                   ?0        807:'										<tr>
                                            <td style="width: 80px;" class="text-center">' ?0                  	;0
1194 618   INIT_FCALL_BY_NAME/59     ?0        ?0                   808:'date'          	;2
1195 618   FETCH_DIM_FUNC_ARG/93     $523=     16?26                810:'datetime_format'	;1
1196 618   SEND_VAR_EX/66            ?80       $523                 ?1                  	;0
1197 618   FETCH_DIM_FUNC_ARG/93     $524=     16?24                811:'date'          	;2
1198 618   SEND_VAR_EX/66            ?96       $524                 ?2                  	;0
1199 618   DO_FCALL_BY_NAME/131      $525=     ?0                   ?0                  	;0
1200 618   ECHO/40                   ?0        $525                 ?0                  	;0
1201 619   ECHO/40                   ?0        812:'</td>
                                            <td onClick=\'showError(this);\' style=\'cursor: pointer;\'>' ?0                  	;0
1202 620   FETCH_DIM_R/81            $526=     16?24                813:'error'         	;0
1203 620   ECHO/40                   ?0        $526                 ?0                  	;0
1204 621   ECHO/40                   ?0        814:'</td>
										</tr>
                                        ' ?0                  	;0
1205 622   JMP/42                    ?0        ?1192                ?0                  	;0	>>1192
1206 622   FE_FREE/127               ?0        $522                 ?0                  	;0	<<1191
1207 624   GOTO/253                  ?0        ?1024                ?815                	;0
1208 626   ECHO/40                   ?0        816:'					</div>
                    <h4 class="page-title">' ?0                  	;0
1209 627   FETCH_DIM_R/81            $527=     16?0                 817:'stream_display_name'	;0
1210 627   ECHO/40                   ?0        $527                 ?0                  	;0
1211 628   ECHO/40                   ?0        818:'</h4>
				</div>
			</div>
		</div>     
		<div class="row">
			<div class="col-xl-12">
                ' ?0                  	;0
1212 629   BOOL_NOT/13               #528=     16?21                ?0                  	;0
1213 629   JMPZ/43                   ?0        #528                 ?1215               	;0	>>1215
1214 630   GOTO/253                  ?0        ?1507                ?819                	;0
1215 632   ECHO/40                   ?0        820:'                <img class="card-img-top img-fluid" src="' ?0                  	;0	<<1213
1216 633   GOTO/253                  ?0        ?1505                ?821                	;0
1217 636   ECHO/40                   ?0        822:'											<th>Status</th>
                                            ' ?0                  	;0
1218 638   ECHO/40                   ?0        823:'											<th>Actions</th>
                                            ' ?0                  	;0
1219 639   FETCH_DIM_R/81            $529=     16?0                 824:'type'          	;0
1220 639   IS_EQUAL/17               #530=     $529                 825:2               	;0
1221 639   JMPZ/43                   ?0        #530                 ?1223               	;0	>>1223
1222 640   GOTO/253                  ?0        ?89                  ?826                	;0
1223 642   GOTO/253                  ?0        ?85                  ?827                	;0	<<1221
1224 644   ECHO/40                   ?0        828:'">
                                    </div>
                                </div>
                                <div class="form-group row mb-4">
                                    <label class="col-md-2 col-form-label" for="release_date">' ?0                  	;0
1225 645   FETCH_DIM_R/81            $531=     16?5                 829:'release_date'  	;0
1226 645   ECHO/40                   ?0        $531                 ?0                  	;0
1227 646   ECHO/40                   ?0        830:'</label>
                                    <div class="col-md-4">
                                        <input readonly type="text" class="form-control text-center" id="release_date" name="release_date" value="' ?0                  	;0
1228 647   INIT_FCALL_BY_NAME/59     ?0        ?0                   831:'htmlspecialchars'	;1
1229 647   FETCH_DIM_FUNC_ARG/93     $532=     16?4                 833:'release_date'  	;1
1230 647   SEND_VAR_EX/66            ?80       $532                 ?1                  	;0
1231 647   DO_FCALL_BY_NAME/131      $533=     ?0                   ?0                  	;0
1232 647   ECHO/40                   ?0        $533                 ?0                  	;0
1233 648   ECHO/40                   ?0        834:'">
                                    </div>
                                    <label class="col-md-2 col-form-label" for="episode_run_time">' ?0                  	;0
1234 649   GOTO/253                  ?0        ?90                  ?835                	;0
1235 651   FETCH_DIM_R/81            $534=     16?0                 836:'type'          	;0
1236 651   IS_EQUAL/17               #535=     $534                 837:3               	;0
1237 651   BOOL_NOT/13               #536=     #535                 ?0                  	;0
1238 651   JMPZ/43                   ?0        #536                 ?1240               	;0	>>1240
1239 652   GOTO/253                  ?0        ?1183                ?838                	;0
1240 654   BOOL_NOT/13               #537=     16?19                ?0                  	;0	<<1238
1241 654   JMPZ/43                   ?0        #537                 ?1243               	;0	>>1243
1242 655   GOTO/253                  ?0        ?1183                ?839                	;0
1243 657   ECHO/40                   ?0        840:'                        <div class="tab-pane" id="sources">
							<div class="table">
								<table id="datatable-sources" class="table table-striped table-borderless mb-0">
									<thead>
										<tr>
											<th class="text-center">Position</th>
                                            <th>Filename</th>
											<th class="text-center">Start</th>
											<th class="text-center">Finish</th>
                                            <th class="text-center">Duration</th>
                                            <th class="text-center">Stream Info</th>
										</tr>
									</thead>
									<tbody>
                                        ' ?0                  	;0	<<1241
1244 658   FE_RESET_R/77             $538=     16?19                ?1493               	;0
1245 658   FE_FETCH_R/78             ?0        $538                 16?41               	;1493	>>1493	<<1492
1246 659   NOP/0                     ?0        ?0                   ?0                  	;1
1247 659   GOTO/253                  ?0        ?1332                ?841                	;0
1248 661   JMPZ/43                   ?0        16?34                ?1251               	;0	>>1251
1249 662   NOP/0                     ?0        ?0                   ?0                  	;1
1250 662   GOTO/253                  ?0        ?1254                ?842                	;0
1251 664   ASSIGN/38                 ?492      16?34                843:'--'            	;0	<<1248
1252 665   NOP/0                     ?0        ?0                   ?0                  	;1
1253 665   GOTO/253                  ?0        ?1395                ?844                	;0
1254 667   IS_SMALLER_OR_EQUAL/20    #540=     845:1000             16?34               	;0
1255 667   BOOL_NOT/13               #541=     #540                 ?0                  	;0
1256 667   JMPZ/43                   ?0        #541                 ?1259               	;0	>>1259
1257 668   NOP/0                     ?0        ?0                   ?0                  	;1
1258 668   GOTO/253                  ?0        ?1393                ?846                	;0
1259 670   NOP/0                     ?0        ?0                   ?0                  	;1	<<1256
1260 670   GOTO/253                  ?0        ?1388                ?847                	;0
1261 672   ECHO/40                   ?0        848:'</td>
										</tr>
                                        ' ?0                  	;0
1262 674   NOP/0                     ?0        ?0                   ?0                  	;1
1263 674   GOTO/253                  ?0        ?1492                ?849                	;0
1264 676   FETCH_DIM_R/81            $542=     16?41                850:'stream_info'   	;0
1265 676   FETCH_DIM_R/81            $543=     $542                 851:'codecs'        	;0
1266 676   FETCH_DIM_R/81            $544=     $543                 852:'video'         	;0
1267 676   FETCH_DIM_R/81            $545=     $544                 853:'width'         	;0
1268 676   CONCAT/8                  #546=     854:'<td style=\'color: #20a009;\'><i class=\'mdi mdi-layers\' data-name=\'mdi-layers\'></i></td></tr><tr><td class=\'double\'>' $545                	;0
1269 676   CONCAT/8                  #547=     #546                 855:' x '           	;0
1270 676   FETCH_DIM_R/81            $548=     16?41                856:'stream_info'   	;0
1271 676   FETCH_DIM_R/81            $549=     $548                 857:'codecs'        	;0
1272 676   FETCH_DIM_R/81            $550=     $549                 858:'video'         	;0
1273 676   FETCH_DIM_R/81            $551=     $550                 859:'height'        	;0
1274 676   CONCAT/8                  #552=     #547                 $551                	;0
1275 676   CONCAT/8                  #553=     #552                 860:'</td><td>'     	;0
1276 676   FETCH_DIM_R/81            $554=     16?41                861:'stream_info'   	;0
1277 676   FETCH_DIM_R/81            $555=     $554                 862:'codecs'        	;0
1278 676   FETCH_DIM_R/81            $556=     $555                 863:'video'         	;0
1279 676   FETCH_DIM_R/81            $557=     $556                 864:'codec_name'    	;0
1280 676   CONCAT/8                  #558=     #553                 $557                	;0
1281 676   CONCAT/8                  #559=     #558                 865:'</td><td>'     	;0
1282 676   FETCH_DIM_R/81            $560=     16?41                866:'stream_info'   	;0
1283 676   FETCH_DIM_R/81            $561=     $560                 867:'codecs'        	;0
1284 676   FETCH_DIM_R/81            $562=     $561                 868:'audio'         	;0
1285 676   FETCH_DIM_R/81            $563=     $562                 869:'codec_name'    	;0
1286 676   CONCAT/8                  #564=     #559                 $563                	;0
1287 676   CONCAT/8                  #565=     #564                 870:'</td>'         	;0
1288 676   ASSIGN_CONCAT/30          ?519      16?32                #565                	;0
1289 677   CONCAT/8                  #567=     871:'<td>'           16?34               	;0
1290 677   CONCAT/8                  #568=     #567                 872:'</td></tr></tbody></table>'	;0
1291 677   ASSIGN_CONCAT/30          ?522      16?32                #568                	;0
1292 678   FETCH_DIM_R/81            $570=     16?41                873:'start'         	;0
1293 678   IS_SMALLER_OR_EQUAL/20    #571=     $570                 16?20               	;0
1294 678   JMPZ_EX/46                #571=     #571                 ?1298               	;0	>>1298
1295 678   FETCH_DIM_R/81            $572=     16?41                874:'finish'        	;0
1296 678   IS_SMALLER/19             #573=     16?20                $572                	;0
1297 678   BOOL/52                   #571=     #573                 ?0                  	;0
1298 678   JMPZ/43                   ?0        #571                 ?1301               	;0	>>1301	<<1294
1299 679   NOP/0                     ?0        ?0                   ?0                  	;1
1300 679   GOTO/253                  ?0        ?1461                ?875                	;0
1301 681   FETCH_DIM_R/81            $574=     16?41                876:'position'      	;0	<<1298
1302 681   ADD/1                     #575=     $574                 877:1               	;0
1303 681   CONCAT/8                  #576=     878:'<button type="button" class="btn btn-secondary btn-xs waves-effect waves-light btn-fixed-xs">' #575                	;0
1304 681   CONCAT/8                  #577=     #576                 879:'</button>'     	;0
1305 681   ASSIGN/38                 ?531      16?42                #577                	;0
1306 682   NOP/0                     ?0        ?0                   ?0                  	;1
1307 682   GOTO/253                  ?0        ?1466                ?880                	;0
1308 683   NOP/0                     ?0        ?0                   ?0                  	;1
1309 683   GOTO/253                  ?0        ?1461                ?881                	;0
1310 685   INIT_FCALL_BY_NAME/59     ?0        ?0                   882:'date'          	;2
1311 685   SEND_VAL_EX/116           ?80       884:'H:i:s'          ?1                  	;0
1312 685   SEND_VAR_EX/66            ?96       16?43                ?2                  	;0
1313 685   DO_FCALL_BY_NAME/131      $579=     ?0                   ?0                  	;0
1314 685   ECHO/40                   ?0        $579                 ?0                  	;0
1315 686   ECHO/40                   ?0        885:'</td>
                                            <td class="text-center">' ?0                  	;0
1316 687   ECHO/40                   ?0        16?25                ?0                  	;0
1317 688   ECHO/40                   ?0        886:'</td>
                                            <td class="text-center">' ?0                  	;0
1318 689   ECHO/40                   ?0        16?32                ?0                  	;0
1319 690   NOP/0                     ?0        ?0                   ?0                  	;1
1320 690   GOTO/253                  ?0        ?1261                ?887                	;0
1321 692   ECHO/40                   ?0        888:'</td>
                                            <td>' ?0                  	;0
1322 693   ECHO/40                   ?0        16?44                ?0                  	;0
1323 694   ECHO/40                   ?0        889:'</td>
                                            <td class="text-center">' ?0                  	;0
1324 695   INIT_FCALL_BY_NAME/59     ?0        ?0                   890:'date'          	;2
1325 695   SEND_VAL_EX/116           ?80       892:'H:i:s'          ?1                  	;0
1326 695   SEND_VAR_EX/66            ?96       16?45                ?2                  	;0
1327 695   DO_FCALL_BY_NAME/131      $580=     ?0                   ?0                  	;0
1328 695   ECHO/40                   ?0        $580                 ?0                  	;0
1329 696   ECHO/40                   ?0        893:'</td>
                                            <td class="text-center">' ?0                  	;0
1330 697   NOP/0                     ?0        ?0                   ?0                  	;1
1331 697   GOTO/253                  ?0        ?1310                ?894                	;0
1332 699   INIT_FCALL_BY_NAME/59     ?0        ?0                   895:'pathinfo'      	;1
1333 699   INIT_FCALL_BY_NAME/59     ?0        ?0                   897:'json_decode'   	;2
1334 699   FETCH_DIM_FUNC_ARG/93     $581=     16?0                 899:'stream_source' 	;1
1335 699   SEND_VAR_EX/66            ?80       $581                 ?1                  	;0
1336 699   SEND_VAL_EX/116           ?96       900:true             ?2                  	;0
1337 699   DO_FCALL_BY_NAME/131      $582=     ?0                   ?0                  	;0
1338 699   SEPARATE/156              $582=     $582                 ?0                  	;0
1339 699   FETCH_DIM_R/81            $583=     16?41                901:'position'      	;0
1340 699   FETCH_DIM_FUNC_ARG/93     $584=     $582                 $583                	;1
1341 699   SEND_VAR_EX/66            ?80       $584                 ?1                  	;0
1342 699   DO_FCALL_BY_NAME/131      $585=     ?0                   ?0                  	;0
1343 699   FETCH_DIM_R/81            $586=     $585                 902:'filename'      	;0
1344 699   ASSIGN/38                 ?540      16?44                $586                	;0
1345 700   INIT_FCALL_BY_NAME/59     ?0        ?0                   904:'intval'        	;1
1346 700   INIT_FCALL_BY_NAME/59     ?0        ?0                   906:'explode'       	;2
1347 700   SEND_VAL_EX/116           ?80       908:'.'              ?1                  	;0
1348 700   FETCH_DIM_FUNC_ARG/93     $589=     16?41                909:'seconds'       	;2
1349 700   SEND_VAR_EX/66            ?96       $589                 ?2                  	;0
1350 700   DO_FCALL_BY_NAME/131      $590=     ?0                   ?0                  	;0
1351 700   SEPARATE/156              $590=     $590                 ?0                  	;0
1352 700   FETCH_DIM_FUNC_ARG/93     $591=     $590                 910:0               	;1
1353 700   SEND_VAR_EX/66            ?80       $591                 ?1                  	;0
1354 700   DO_FCALL_BY_NAME/131      $592=     ?0                   ?0                  	;0
1355 700   ASSIGN_DIM/147            ?541      16?41                903:'seconds'       	;0
1356 700   OP_DATA/137               ?0        $592                 ?0                  	;0
1357 701   FETCH_DIM_R/81            $593=     16?41                911:'start'         	;0
1358 701   SUB/2                     #594=     $593                 16?20               	;0
1359 701   ASSIGN/38                 ?548      16?46                #594                	;0
1360 702   INIT_FCALL_BY_NAME/59     ?0        ?0                   912:'time'          	;0
1361 702   DO_FCALL_BY_NAME/131      $596=     ?0                   ?0                  	;0
1362 702   ADD/1                     #597=     $596                 16?46               	;0
1363 702   ASSIGN/38                 ?551      16?45                #597                	;0
1364 703   FETCH_DIM_R/81            $599=     16?41                914:'seconds'       	;0
1365 703   ADD/1                     #600=     16?45                $599                	;0
1366 703   ASSIGN/38                 ?554      16?43                #600                	;0
1367 704   NOP/0                     ?0        ?0                   ?0                  	;1
1368 704   GOTO/253                  ?0        ?1407                ?915                	;0
1369 707   ASSIGN/38                 ?555      16?34                916:NULL            	;0
1370 708   FETCH_DIM_IS/90           $603=     16?41                917:'stream_info'   	;0
1371 708   FETCH_DIM_IS/90           $604=     $603                 918:'codecs'        	;0
1372 708   FETCH_DIM_IS/90           $605=     $604                 919:'video'         	;0
1373 708   ISSET_ISEMPTY_DIM_OBJ/115 #606=     $605                 920:'r_frame_rate'  	;33554432
1374 708   BOOL_NOT/13               #607=     #606                 ?0                  	;0
1375 708   JMPZ/43                   ?0        #607                 ?1378               	;0	>>1378
1376 709   NOP/0                     ?0        ?0                   ?0                  	;1
1377 709   GOTO/253                  ?0        ?1386                ?921                	;0
1378 711   INIT_FCALL_BY_NAME/59     ?0        ?0                   922:'intval'        	;1	<<1375
1379 711   FETCH_DIM_FUNC_ARG/93     $608=     16?41                924:'stream_info'   	;1
1380 711   FETCH_DIM_FUNC_ARG/93     $609=     $608                 925:'codecs'        	;1
1381 711   FETCH_DIM_FUNC_ARG/93     $610=     $609                 926:'video'         	;1
1382 711   FETCH_DIM_FUNC_ARG/93     $611=     $610                 927:'r_frame_rate'  	;1
1383 711   SEND_VAR_EX/66            ?80       $611                 ?1                  	;0
1384 711   DO_FCALL_BY_NAME/131      $612=     ?0                   ?0                  	;0
1385 711   ASSIGN/38                 ?566      16?34                $612                	;0
1386 713   NOP/0                     ?0        ?0                   ?0                  	;1
1387 713   GOTO/253                  ?0        ?1248                ?928                	;0
1388 715   INIT_FCALL_BY_NAME/59     ?0        ?0                   929:'intval'        	;1
1389 715   DIV/4                     #614=     16?34                931:1000            	;0
1390 715   SEND_VAL_EX/116           ?80       #614                 ?1                  	;0
1391 715   DO_FCALL_BY_NAME/131      $615=     ?0                   ?0                  	;0
1392 715   ASSIGN/38                 ?569      16?34                $615                	;0
1393 717   CONCAT/8                  #617=     16?34                932:' FPS'          	;0
1394 717   ASSIGN/38                 ?571      16?34                #617                	;0
1395 719   INIT_FCALL_BY_NAME/59     ?0        ?0                   933:'number_format' 	;2
1396 719   FETCH_DIM_R/81            $619=     16?41                935:'stream_info'   	;0
1397 719   FETCH_DIM_R/81            $620=     $619                 936:'bitrate'       	;0
1398 719   DIV/4                     #621=     $620                 937:1024            	;0
1399 719   SEND_VAL_EX/116           ?80       #621                 ?1                  	;0
1400 719   SEND_VAL_EX/116           ?96       938:0                ?2                  	;0
1401 719   DO_FCALL_BY_NAME/131      $622=     ?0                   ?0                  	;0
1402 719   CONCAT/8                  #623=     939:'<table class=\'table-data nowrap\' align=\'center\'><tbody><tr><td class=\'double\'>' $622                	;0
1403 719   CONCAT/8                  #624=     #623                 940:' Kbps</td><td style=\'color: #20a009;\'><i class=\'mdi mdi-video\' data-name=\'mdi-video\'></i></td><td style=\'color: #20a009;\'><i class=\'mdi mdi-volume-high\' data-name=\'mdi-volume-high\'></i></td>'	;0
1404 719   ASSIGN/38                 ?578      16?32                #624                	;0
1405 720   NOP/0                     ?0        ?0                   ?0                  	;1
1406 720   GOTO/253                  ?0        ?1264                ?941                	;0
1407 722   FETCH_DIM_R/81            $626=     16?41                942:'seconds'       	;0
1408 722   IS_SMALLER_OR_EQUAL/20    #627=     943:86400            $626                	;0
1409 722   JMPZ/43                   ?0        #627                 ?1412               	;0	>>1412
1410 723   NOP/0                     ?0        ?0                   ?0                  	;1
1411 723   GOTO/253                  ?0        ?1428                ?944                	;0
1412 725   INIT_FCALL_BY_NAME/59     ?0        ?0                   945:'sprintf'       	;4	<<1409
1413 725   SEND_VAL_EX/116           ?80       947:'%02dh %02dm %02ds' ?1                  	;0
1414 725   FETCH_DIM_R/81            $628=     16?41                948:'seconds'       	;0
1415 725   DIV/4                     #629=     $628                 949:3600            	;0
1416 725   SEND_VAL_EX/116           ?96       #629                 ?2                  	;0
1417 725   FETCH_DIM_R/81            $630=     16?41                950:'seconds'       	;0
1418 725   DIV/4                     #631=     $630                 951:60              	;0
1419 725   MOD/5                     #632=     #631                 952:60              	;0
1420 725   SEND_VAL_EX/116           ?112      #632                 ?3                  	;0
1421 725   FETCH_DIM_R/81            $633=     16?41                953:'seconds'       	;0
1422 725   MOD/5                     #634=     $633                 954:60              	;0
1423 725   SEND_VAL_EX/116           ?128      #634                 ?4                  	;0
1424 725   DO_FCALL_BY_NAME/131      $635=     ?0                   ?0                  	;0
1425 725   ASSIGN/38                 ?589      16?25                $635                	;0
1426 726   NOP/0                     ?0        ?0                   ?0                  	;1
1427 726   GOTO/253                  ?0        ?1445                ?955                	;0
1428 728   INIT_FCALL_BY_NAME/59     ?0        ?0                   956:'sprintf'       	;4
1429 728   SEND_VAL_EX/116           ?80       958:'%02dd %02dh %02dm' ?1                  	;0
1430 728   FETCH_DIM_R/81            $637=     16?41                959:'seconds'       	;0
1431 728   DIV/4                     #638=     $637                 960:86400           	;0
1432 728   SEND_VAL_EX/116           ?96       #638                 ?2                  	;0
1433 728   FETCH_DIM_R/81            $639=     16?41                961:'seconds'       	;0
1434 728   DIV/4                     #640=     $639                 962:3600            	;0
1435 728   MOD/5                     #641=     #640                 963:24              	;0
1436 728   SEND_VAL_EX/116           ?112      #641                 ?3                  	;0
1437 728   FETCH_DIM_R/81            $642=     16?41                964:'seconds'       	;0
1438 728   DIV/4                     #643=     $642                 965:60              	;0
1439 728   MOD/5                     #644=     #643                 966:60              	;0
1440 728   SEND_VAL_EX/116           ?128      #644                 ?4                  	;0
1441 728   DO_FCALL_BY_NAME/131      $645=     ?0                   ?0                  	;0
1442 728   ASSIGN/38                 ?599      16?25                $645                	;0
1443 729   NOP/0                     ?0        ?0                   ?0                  	;1
1444 729   GOTO/253                  ?0        ?1445                ?967                	;0
1445 732   ROPE_INIT/54              #648=     ?0                   968:'<button type=\'button\' class=\'btn btn-success btn-xs waves-effect waves-light btn-fixed\'>'	;3
1446 732   ROPE_ADD/55               #648=     #648                 16?25               	;1
1447 732   ROPE_END/56               #647=     #648                 969:'</button>'     	;2
1448 732   ASSIGN/38                 ?603      16?25                #647                	;0
1449 733   FETCH_DIM_IS/90           $651=     16?41                970:'stream_info'   	;0
1450 733   FETCH_DIM_IS/90           $652=     $651                 971:'codecs'        	;0
1451 733   ISSET_ISEMPTY_DIM_OBJ/115 #653=     $652                 972:'video'         	;33554432
1452 733   JMPZ/43                   ?0        #653                 ?1455               	;0	>>1455
1453 734   NOP/0                     ?0        ?0                   ?0                  	;1
1454 734   GOTO/253                  ?0        ?1459                ?973                	;0
1455 736   FETCH_DIM_W/84            $654=     16?41                974:'stream_info'   	;0	<<1452
1456 736   FETCH_DIM_W/84            $655=     $654                 975:'codecs'        	;0
1457 736   ASSIGN_DIM/147            ?609      $655                 976:'video'         	;0
1458 736   OP_DATA/137               ?0        977:array (
  'width' => '?',
  'height' => '?',
  'codec_name' => 'N/A',
  'r_frame_rate' => '--',
) ?0                  	;0
1459 738   NOP/0                     ?0        ?0                   ?0                  	;1
1460 738   GOTO/253                  ?0        ?1470                ?978                	;0
1461 741   FETCH_DIM_R/81            $657=     16?41                979:'position'      	;0
1462 741   ADD/1                     #658=     $657                 980:1               	;0
1463 741   CONCAT/8                  #659=     981:'<button type="button" title="Playing Now" class="tooltip btn btn-info btn-xs waves-effect waves-light btn-fixed-xs">' #658                	;0
1464 741   CONCAT/8                  #660=     #659                 982:'</button>'     	;0
1465 741   ASSIGN/38                 ?614      16?42                #660                	;0
1466 743   ECHO/40                   ?0        983:'										<tr>
                                            <td class="text-center">' ?0                  	;0
1467 744   ECHO/40                   ?0        16?42                ?0                  	;0
1468 745   NOP/0                     ?0        ?0                   ?0                  	;1
1469 745   GOTO/253                  ?0        ?1321                ?984                	;0
1470 747   FETCH_DIM_IS/90           $662=     16?41                985:'stream_info'   	;0
1471 747   FETCH_DIM_IS/90           $663=     $662                 986:'codecs'        	;0
1472 747   ISSET_ISEMPTY_DIM_OBJ/115 #664=     $663                 987:'audio'         	;33554432
1473 747   JMPZ/43                   ?0        #664                 ?1476               	;0	>>1476
1474 748   NOP/0                     ?0        ?0                   ?0                  	;1
1475 748   GOTO/253                  ?0        ?1480                ?988                	;0
1476 750   FETCH_DIM_W/84            $665=     16?41                989:'stream_info'   	;0	<<1473
1477 750   FETCH_DIM_W/84            $666=     $665                 990:'codecs'        	;0
1478 750   ASSIGN_DIM/147            ?620      $666                 991:'audio'         	;0
1479 750   OP_DATA/137               ?0        992:array (
  'codec_name' => 'N/A',
) ?0                  	;0
1480 752   FETCH_DIM_R/81            $668=     16?41                993:'stream_info'   	;0
1481 752   FETCH_DIM_R/81            $669=     $668                 994:'bitrate'       	;0
1482 752   IS_EQUAL/17               #670=     $669                 995:0               	;0
1483 752   BOOL_NOT/13               #671=     #670                 ?0                  	;0
1484 752   JMPZ/43                   ?0        #671                 ?1487               	;0	>>1487
1485 753   NOP/0                     ?0        ?0                   ?0                  	;1
1486 753   GOTO/253                  ?0        ?1369                ?996                	;0
1487 755   FETCH_DIM_W/84            $672=     16?41                997:'stream_info'   	;0	<<1484
1488 755   ASSIGN_DIM/147            ?626      $672                 998:'bitrate'       	;0
1489 755   OP_DATA/137               ?0        999:'?'              ?0                  	;0
1490 756   NOP/0                     ?0        ?0                   ?0                  	;1
1491 756   GOTO/253                  ?0        ?1369                ?1000               	;0
1492 757   JMP/42                    ?0        ?1245                ?0                  	;0	>>1245
1493 757   FE_FREE/127               ?0        $538                 ?0                  	;0	<<1244
1494 760   GOTO/253                  ?0        ?1182                ?1001               	;0
1495 763   ECHO/40                   ?0        1002:'									</tbody>
								</table>
							</div>
						</div>
                        ' ?0                  	;0
1496 765   INIT_FCALL_BY_NAME/59     ?0        ?0                   1003:'count'        	;1
1497 765   SEND_VAR_EX/66            ?80       16?17                ?1                  	;0
1498 765   DO_FCALL_BY_NAME/131      $674=     ?0                   ?0                  	;0
1499 765   IS_SMALLER/19             #675=     1005:0               $674                	;0
1500 765   BOOL_NOT/13               #676=     #675                 ?0                  	;0
1501 765   JMPZ/43                   ?0        #676                 ?1503               	;0	>>1503
1502 766   GOTO/253                  ?0        ?502                 ?1006               	;0
1503 768   ASSIGN/38                 ?630      16?28                1007:false          	;0	<<1501
1504 769   GOTO/253                  ?0        ?710                 ?1008               	;0
1505 771   ECHO/40                   ?0        16?21                ?0                  	;0
1506 772   ECHO/40                   ?0        1009:'" onerror="this.style.display=\'none\'"/>
                ' ?0                  	;0
1507 774   FETCH_DIM_R/81            $678=     16?0                 1010:'type'         	;0
1508 774   IS_EQUAL/17               #679=     $678                 1011:1              	;0
1509 774   BOOL_NOT/13               #680=     #679                 ?0                  	;0
1510 774   JMPZ/43                   ?0        #680                 ?1512               	;0	>>1512
1511 775   GOTO/253                  ?0        ?210                 ?1012               	;0
1512 777   ECHO/40                   ?0        1013:'				<div class="card-box">
					<ul class="nav nav-tabs nav-bordered nav-justified">
						<li class="nav-item">
							<a href="#today" data-toggle="tab" aria-expanded="true" class="nav-link active">
								Today
							</a>
						</li>
						<li class="nav-item">
							<a href="#week" data-toggle="tab" aria-expanded="false" class="nav-link">
								This Week
							</a>
						</li>
						<li class="nav-item">
							<a href="#month" data-toggle="tab" aria-expanded="false" class="nav-link">
								This Month
							</a>
						</li>
						<li class="nav-item">
							<a href="#all" data-toggle="tab" aria-expanded="false" class="nav-link">
								All Time
							</a>
						</li>
					</ul>
					<div class="tab-content">
						' ?0                  	;0	<<1510
1513 778   GOTO/253                  ?0        ?146                 ?1014               	;0
1514 780   ECHO/40                   ?0        1015:'                        <li class="nav-item">
							<a href="#information" data-toggle="tab" aria-expanded="false" class="nav-link">
								Movie Information
							</a>
						</li>
                        ' ?0                  	;0
1515 782   GOTO/253                  ?0        ?1                   ?1016               	;0
1516 784   ECHO/40                   ?0        1017:'						<li class="nav-item">
							<a href="#sources" data-toggle="tab" aria-expanded="false" class="nav-link">
								Stream Sources
							</a>
						</li>
                        ' ?0                  	;0
1517 785   GOTO/253                  ?0        ?1587                ?1018               	;0
1518 787   FETCH_DIM_R/81            $681=     16?0                 1019:'type'         	;0
1519 787   IS_EQUAL/17               #682=     $681                 1020:1              	;0
1520 787   JMPZ/43                   ?0        #682                 ?1522               	;0	>>1522
1521 788   GOTO/253                  ?0        ?1516                ?1021               	;0
1522 790   FETCH_DIM_R/81            $683=     16?0                 1022:'type'         	;0	<<1520
1523 790   IS_EQUAL/17               #684=     $683                 1023:2              	;0
1524 790   JMPZ/43                   ?0        #684                 ?1526               	;0	>>1526
1525 791   GOTO/253                  ?0        ?1606                ?1024               	;0
1526 793   FETCH_DIM_R/81            $685=     16?0                 1025:'type'         	;0	<<1524
1527 793   IS_EQUAL/17               #686=     $685                 1026:3              	;0
1528 793   JMPZ/43                   ?0        #686                 ?1530               	;0	>>1530
1529 794   GOTO/253                  ?0        ?1604                ?1027               	;0
1530 796   FETCH_DIM_R/81            $687=     16?0                 1028:'type'         	;0	<<1528
1531 796   IS_EQUAL/17               #688=     $687                 1029:5              	;0
1532 796   BOOL_NOT/13               #689=     #688                 ?0                  	;0
1533 796   JMPZ/43                   ?0        #689                 ?1535               	;0	>>1535
1534 797   GOTO/253                  ?0        ?372                 ?1030               	;0
1535 799   BOOL_NOT/13               #690=     16?7                 ?0                  	;0	<<1533
1536 799   JMPZ/43                   ?0        #690                 ?1538               	;0	>>1538
1537 800   GOTO/253                  ?0        ?371                 ?1031               	;0
1538 802   GOTO/253                  ?0        ?370                 ?1032               	;0	<<1536
1539 804   INIT_FCALL_BY_NAME/59     ?0        ?0                   1033:'array_merge'  	;2
1540 804   FETCH_DIM_R/81            $691=     16?0                 1035:'id'           	;0
1541 804   INIT_ARRAY/71             #692=     $691                 ?0                  	;4
1542 804   SEND_VAL_EX/116           ?80       #692                 ?1                  	;0
1543 804   SEND_VAR_EX/66            ?96       16?16                ?2                  	;0
1544 804   DO_FCALL_BY_NAME/131      $693=     ?0                   ?0                  	;0
1545 804   ASSIGN/38                 ?647      16?16                $693                	;0
1546 805   ASSIGN/38                 $695=     16?37                1036:array (
)      	;0
1547 805   ASSIGN/38                 ?649      16?30                $695                	;0
1548 806   INIT_METHOD_CALL/112      ?0        16?6                 1037:'query'        	;1
1549 806   INIT_FCALL_BY_NAME/59     ?0        ?0                   1039:'implode'      	;2
1550 806   SEND_VAL_EX/116           ?80       1041:','             ?1                  	;0
1551 806   INIT_FCALL_BY_NAME/59     ?0        ?0                   1042:'array_map'    	;2
1552 806   SEND_VAL_EX/116           ?80       1044:'intval'        ?1                  	;0
1553 806   SEND_VAR_EX/66            ?96       16?16                ?2                  	;0
1554 806   DO_FCALL_BY_NAME/131      $697=     ?0                   ?0                  	;0
1555 806   SEND_VAR_NO_REF_EX/50     ?96       $697                 ?2                  	;0
1556 806   DO_FCALL_BY_NAME/131      $698=     ?0                   ?0                  	;0
1557 806   CONCAT/8                  #699=     1045:'SELECT `id`, `stream_display_name` FROM `streams` WHERE `id` IN (' $698                	;0
1558 806   CONCAT/8                  #700=     #699                 1046:');'           	;0
1559 806   SEND_VAL_EX/116           ?80       #700                 ?1                  	;0
1560 806   DO_FCALL/60               ?654      ?0                   ?0                  	;0
1561 807   INIT_METHOD_CALL/112      ?0        16?6                 1047:'get_rows'     	;0
1562 807   DO_FCALL/60               $702=     ?0                   ?0                  	;0
1563 807   FE_RESET_R/77             $703=     $702                 ?1570               	;0
1564 807   FE_FETCH_R/78             ?0        $703                 16?29               	;1570	>>1570	<<1569
1565 808   FETCH_DIM_R/81            $704=     16?29                1049:'id'           	;0
1566 808   FETCH_DIM_R/81            $706=     16?29                1050:'stream_display_name'	;0
1567 808   ASSIGN_DIM/147            ?658      16?37                $704                	;0
1568 808   OP_DATA/137               ?0        $706                 ?0                  	;0
1569 809   JMP/42                    ?0        ?1564                ?0                  	;0	>>1564
1570 809   FE_FREE/127               ?0        $703                 ?0                  	;0	<<1563
1571 812   GOTO/253                  ?0        ?762                 ?1051               	;0
1572 814   ECHO/40                   ?0        16?9                 ?0                  	;0
1573 815   ECHO/40                   ?0        1052:' Info</th>
										</tr>
									</thead>
									<tbody>
										<tr>
											<td colspan="8" class="text-center">Loading information...</td>
										</tr>
									</tbody>
								</table>
							</div>
						</div>
                        ' ?0                  	;0
1574 816   FETCH_DIM_R/81            $707=     16?0                 1053:'type'         	;0
1575 816   IS_EQUAL/17               #708=     $707                 1054:1              	;0
1576 816   JMPZ/43                   ?0        #708                 ?1578               	;0	>>1578
1577 817   GOTO/253                  ?0        ?708                 ?1055               	;0
1578 819   FETCH_DIM_R/81            $709=     16?0                 1056:'type'         	;0	<<1576
1579 819   IS_EQUAL/17               #710=     $709                 1057:2              	;0
1580 819   JMPZ/43                   ?0        #710                 ?1582               	;0	>>1582
1581 820   GOTO/253                  ?0        ?1052                ?1058               	;0
1582 822   FETCH_DIM_R/81            $711=     16?0                 1059:'type'         	;0	<<1580
1583 822   IS_EQUAL/17               #712=     $711                 1060:5              	;0
1584 822   JMPZ/43                   ?0        #712                 ?1586               	;0	>>1586
1585 823   GOTO/253                  ?0        ?1184                ?1061               	;0
1586 825   GOTO/253                  ?0        ?1235                ?1062               	;0	<<1584
1587 827   INIT_FCALL_BY_NAME/59     ?0        ?0                   1063:'count'        	;1
1588 827   SEND_VAR_EX/66            ?80       16?16                ?1                  	;0
1589 827   DO_FCALL_BY_NAME/131      $713=     ?0                   ?0                  	;0
1590 827   IS_SMALLER/19             #714=     1065:0               $713                	;0
1591 827   BOOL_NOT/13               #715=     #714                 ?0                  	;0
1592 827   JMPZ/43                   ?0        #715                 ?1594               	;0	>>1594
1593 828   GOTO/253                  ?0        ?1595                ?1066               	;0
1594 830   ECHO/40                   ?0        1067:'                        <li class="nav-item">
							<a href="#adaptive" data-toggle="tab" aria-expanded="false" class="nav-link">
								Adaptive Link
							</a>
						</li>
                        ' ?0                  	;0	<<1592
1595 832   INIT_FCALL_BY_NAME/59     ?0        ?0                   1068:'count'        	;1
1596 832   SEND_VAR_EX/66            ?80       16?17                ?1                  	;0
1597 832   DO_FCALL_BY_NAME/131      $716=     ?0                   ?0                  	;0
1598 832   IS_SMALLER/19             #717=     1070:0               $716                	;0
1599 832   BOOL_NOT/13               #718=     #717                 ?0                  	;0
1600 832   JMPZ/43                   ?0        #718                 ?1602               	;0	>>1602
1601 833   GOTO/253                  ?0        ?1012                ?1071               	;0
1602 835   ECHO/40                   ?0        1072:'						<li class="nav-item">
							<a href="#guide" data-toggle="tab" aria-expanded="false" class="nav-link">
								Programme Guide
							</a>
						</li>
                        ' ?0                  	;0	<<1600
1603 836   GOTO/253                  ?0        ?1012                ?1073               	;0
1604 839   ECHO/40                   ?0        1074:'                        <li class="nav-item">
							<a href="#sources" data-toggle="tab" aria-expanded="false" class="nav-link">
								Channel Guide
							</a>
						</li>
                        ' ?0                  	;0
1605 841   GOTO/253                  ?0        ?1515                ?1075               	;0
1606 843   GOTO/253                  ?0        ?1514                ?1076               	;0
1607 845   INCLUDE_OR_EVAL/73        ?672      1077:'footer.php'    ?0                  	;2
1608 846   NOP/0                     ?0        1078:1               ?0                  	;4294967295
*/

?>
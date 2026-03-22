<?php


/*
#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
0    3     JMP/42                    ?0        ?718                 ?0                  	;0	>>718
1    5     ECHO/40                   ?0        1:'									<li class="nav-item">
										<a href="#load-balancing" data-toggle="tab" class="nav-link rounded-0 pt-2 pb-2">
											<i class="mdi mdi-server-network mr-1"></i>
											<span class="d-none d-sm-inline">Servers</span>
										</a>
									</li>
								</ul>
								<div class="tab-content b-0 mb-0 pt-0">
									<div class="tab-pane" id="stream-details">
										<div class="row">
											<div class="col-12">
												' ?0                  	;0
2    6     FETCH_STATIC_PROP_IS/176  $42=      2:'rRequest'         3:'XUI'             	;0
3    6     ISSET_ISEMPTY_DIM_OBJ/115 #43=      $42                  5:'import'          	;33554432
4    6     BOOL_NOT/13               #44=      #43                  ?0                  	;0
5    6     JMPZ/43                   ?0        #44                  ?7                  	;0	>>7
6    7     GOTO/253                  ?0        ?9                   ?6                  	;0
7    9     ECHO/40                   ?0        7:'												<div class="form-group row mb-4">
													<label class="col-md-3 col-form-label" for="m3u_file">M3U</label>
													<div class="col-md-9">
														<input type="file" id="m3u_file" name="m3u_file" style="padding-top: 5px;" />
													</div>
												</div>
												' ?0                  	;0	<<5
8    10    GOTO/253                  ?0        ?733                 ?8                  	;0
9    12    GOTO/253                  ?0        ?454                 ?9                  	;0
10   14    ECHO/40                   ?0        10:'selected '       ?0                  	;0
11   17    ECHO/40                   ?0        11:'value="0">No EPG</option>
                                                                    ' ?0                  	;0
12   18    FE_RESET_R/77             $45=      16?0                 ?47                 	;0
13   18    FE_FETCH_R/78             ?0        $45                  16?1                	;47	>>47	<<46
14   19    NOP/0                     ?0        ?0                   ?0                  	;1
15   19    GOTO/253                  ?0        ?19                  ?12                 	;0
16   21    ECHO/40                   ?0        13:'</option>
                                                                    ' ?0                  	;0
17   23    NOP/0                     ?0        ?0                   ?0                  	;1
18   23    GOTO/253                  ?0        ?46                  ?14                 	;0
19   25    ECHO/40                   ?0        15:'                                                                    <option ' ?0                  	;0
20   26    ISSET_ISEMPTY_CV/197      #46=      16?2                 ?0                  	;33554432
21   26    BOOL_NOT/13               #47=      #46                  ?0                  	;0
22   26    JMPZ/43                   ?0        #47                  ?25                 	;0	>>25
23   27    NOP/0                     ?0        ?0                   ?0                  	;1
24   27    GOTO/253                  ?0        ?38                  ?16                 	;0
25   29    INIT_FCALL_BY_NAME/59     ?0        ?0                   17:'intval'         	;1	<<22
26   29    FETCH_DIM_FUNC_ARG/93     $48=      16?2                 19:'epg_id'         	;1
27   29    SEND_VAR_EX/66            ?80       $48                  ?1                  	;0
28   29    DO_FCALL_BY_NAME/131      $49=      ?0                   ?0                  	;0
29   29    FETCH_DIM_R/81            $50=      16?1                 20:'id'             	;0
30   29    IS_EQUAL/17               #51=      $49                  $50                 	;0
31   29    BOOL_NOT/13               #52=      #51                  ?0                  	;0
32   29    JMPZ/43                   ?0        #52                  ?35                 	;0	>>35
33   30    NOP/0                     ?0        ?0                   ?0                  	;1
34   30    GOTO/253                  ?0        ?36                  ?21                 	;0
35   32    ECHO/40                   ?0        22:'selected '       ?0                  	;0	<<32
36   34    NOP/0                     ?0        ?0                   ?0                  	;1
37   34    GOTO/253                  ?0        ?38                  ?23                 	;0
38   37    ECHO/40                   ?0        24:'value="'         ?0                  	;0
39   38    FETCH_DIM_R/81            $53=      16?1                 25:'id'             	;0
40   38    ECHO/40                   ?0        $53                  ?0                  	;0
41   39    ECHO/40                   ?0        26:'">'              ?0                  	;0
42   40    FETCH_DIM_R/81            $54=      16?1                 27:'epg_name'       	;0
43   40    ECHO/40                   ?0        $54                  ?0                  	;0
44   41    NOP/0                     ?0        ?0                   ?0                  	;1
45   41    GOTO/253                  ?0        ?16                  ?28                 	;0
46   42    JMP/42                    ?0        ?13                  ?0                  	;0	>>13
47   42    FE_FREE/127               ?0        $45                  ?0                  	;0	<<12
48   44    GOTO/253                  ?0        ?1046                ?29                 	;0
49   47    INIT_FCALL_BY_NAME/59     ?0        ?0                   30:'htmlspecialchars'	;1
50   47    FETCH_DIM_FUNC_ARG/93     $55=      16?3                 32:19               	;1
51   47    FETCH_DIM_FUNC_ARG/93     $56=      $55                  33:'value'          	;1
52   47    SEND_VAR_EX/66            ?80       $56                  ?1                  	;0
53   47    DO_FCALL_BY_NAME/131      $57=      ?0                   ?0                  	;0
54   47    ECHO/40                   ?0        $57                  ?0                  	;0
55   49    ECHO/40                   ?0        34:'">
													</div>
												</div>
												<div class="form-group row mb-4">
													<label class="col-md-3 col-form-label" for="transcode_profile_id">Transcoding Profile <i title="Sometimes, in order to make a stream compatible with most devices, it must be transcoded. Please note that the transcode will only be applied to the server(s) that take the stream directly from the source, all other servers attached to the transcoding server will not transcode the stream." class="tooltip text-secondary far fa-circle"></i></label>
													<div class="col-md-9">
														<select name="transcode_profile_id" id="transcode_profile_id" class="form-control" data-toggle="select2">
															<option ' ?0                  	;0
56   50    ISSET_ISEMPTY_CV/197      #58=      16?2                 ?0                  	;33554432
57   50    BOOL_NOT/13               #59=      #58                  ?0                  	;0
58   50    JMPZ/43                   ?0        #59                  ?60                 	;0	>>60
59   51    GOTO/253                  ?0        ?940                 ?35                 	;0
60   53    GOTO/253                  ?0        ?931                 ?36                 	;0	<<58
61   55    FETCH_STATIC_PROP_IS/176  $60=      37:'rRequest'        38:'XUI'            	;0
62   55    ISSET_ISEMPTY_DIM_OBJ/115 #61=      $60                  40:'import'         	;33554432
63   55    JMPZ/43                   ?0        #61                  ?65                 	;0	>>65
64   56    GOTO/253                  ?0        ?66                  ?41                 	;0
65   58    ECHO/40                   ?0        42:'                                    <li class="nav-item">
										<a href="#stream-sources" data-toggle="tab" class="nav-link rounded-0 pt-2 pb-2">
											<i class="mdi mdi-arrow-up-down-bold-outline mr-1"></i>
											<span class="d-none d-sm-inline">Sources</span>
										</a>
									</li>
                                    ' ?0                  	;0	<<63
66   60    ECHO/40                   ?0        43:'									<li class="nav-item">
										<a href="#advanced-options" data-toggle="tab" class="nav-link rounded-0 pt-2 pb-2">
											<i class="mdi mdi-folder-alert-outline mr-1"></i>
											<span class="d-none d-sm-inline">Advanced</span>
										</a>
									</li>
									' ?0                  	;0
67   61    FETCH_STATIC_PROP_IS/176  $62=      44:'rRequest'        45:'XUI'            	;0
68   61    ISSET_ISEMPTY_DIM_OBJ/115 #63=      $62                  47:'import'         	;33554432
69   61    JMPZ/43                   ?0        #63                  ?71                 	;0	>>71
70   62    GOTO/253                  ?0        ?443                 ?48                 	;0
71   64    GOTO/253                  ?0        ?439                 ?49                 	;0	<<69
72   66    ECHO/40                   ?0        50:'data-plugin="switchery" class="js-switch" data-color="#039cfd"/>
													</div>
													<label class="col-md-4 col-form-label" for="fps_threshold">FPS Threshold % <i title="Stream will restart if it drops below x% of it\'s original FPS. Maximum of 100%." class="tooltip text-secondary far fa-circle"></i></label>
													<div class="col-md-2">
														<input type="text" class="form-control text-center" id="fps_threshold" name="fps_threshold" value="' ?0                  	;0
73   67    ISSET_ISEMPTY_CV/197      #64=      16?2                 ?0                  	;33554432
74   67    JMPZ/43                   ?0        #64                  ?76                 	;0	>>76
75   68    GOTO/253                  ?0        ?78                  ?51                 	;0
76   70    ECHO/40                   ?0        52:'90'              ?0                  	;0	<<74
77   71    GOTO/253                  ?0        ?746                 ?53                 	;0
78   73    GOTO/253                  ?0        ?744                 ?54                 	;0
79   77    ECHO/40                   ?0        55:'data-plugin="switchery" class="js-switch" data-color="#039cfd"/>
													</div>
													<label class="col-md-4 col-form-label" for="read_native">Native Frames <i title="You should always read live streams as non-native frames. However if you are streaming static video files, set this to true otherwise the encoding process will fail." class="tooltip text-secondary far fa-circle"></i></label>
													<div class="col-md-2">
														<input name="read_native" id="read_native" type="checkbox" ' ?0                  	;0
80   78    ISSET_ISEMPTY_CV/197      #65=      16?2                 ?0                  	;33554432
81   78    BOOL_NOT/13               #66=      #65                  ?0                  	;0
82   78    JMPZ/43                   ?0        #66                  ?84                 	;0	>>84
83   79    GOTO/253                  ?0        ?952                 ?56                 	;0
84   81    FETCH_DIM_R/81            $67=      16?2                 57:'read_native'    	;0	<<82
85   81    IS_EQUAL/17               #68=      $67                  58:1                	;0
86   81    BOOL_NOT/13               #69=      #68                  ?0                  	;0
87   81    JMPZ/43                   ?0        #69                  ?89                 	;0	>>89
88   82    GOTO/253                  ?0        ?952                 ?59                 	;0
89   84    GOTO/253                  ?0        ?951                 ?60                 	;0	<<87
90   86    GOTO/253                  ?0        ?97                  ?61                 	;0
91   88    INIT_FCALL_BY_NAME/59     ?0        ?0                   62:'htmlspecialchars'	;1
92   88    FETCH_DIM_FUNC_ARG/93     $70=      16?3                 64:2                	;1
93   88    FETCH_DIM_FUNC_ARG/93     $71=      $70                  65:'value'          	;1
94   88    SEND_VAR_EX/66            ?80       $71                  ?1                  	;0
95   88    DO_FCALL_BY_NAME/131      $72=      ?0                   ?0                  	;0
96   88    ECHO/40                   ?0        $72                  ?0                  	;0
97   90    ECHO/40                   ?0        66:'">
													</div>
												</div>
												<div class="form-group row mb-4">
													<label class="col-md-3 col-form-label" for="cookie">Cookie <i title="Format: key=value;" class="tooltip text-secondary far fa-circle"></i></label>
													<div class="col-md-9">
														<input type="text" class="form-control" id="cookie" name="cookie" value="' ?0                  	;0
98   91    GOTO/253                  ?0        ?999                 ?67                 	;0
99   93    FE_RESET_R/77             $73=      16?4                 ?142                	;0
100  93    FE_FETCH_R/78             #74=      $73                  16?5                	;142	>>142	<<141
101  93    ASSIGN/38                 ?33       16?6                 #74                 	;0
102  94    FE_RESET_R/77             $76=      16?5                 ?140                	;0
103  94    FE_FETCH_R/78             ?0        $76                  16?7                	;140	>>140	<<139
104  95    ECHO/40                   ?0        68:'                                                                <tr class="rtmp_info">
                                                                    <td class="rtmp_server">
                                                                        <select id="rtmp_push_' ?0                  	;0
105  96    ECHO/40                   ?0        16?8                 ?0                  	;0
106  97    ECHO/40                   ?0        69:'" class="form-control" data-toggle="select2">
                                                                            ' ?0                  	;0
107  98    FE_RESET_R/77             $77=      16?9                 ?130                	;0
108  98    FE_FETCH_R/78             ?0        $77                  16?10               	;130	>>130	<<129
109  99    ECHO/40                   ?0        70:'                                                                            <option value="' ?0                  	;0
110  100   FETCH_DIM_R/81            $78=      16?10                71:'id'             	;0
111  100   ECHO/40                   ?0        $78                  ?0                  	;0
112  101   ECHO/40                   ?0        72:'"'               ?0                  	;0
113  102   ISSET_ISEMPTY_CV/197      #79=      16?2                 ?0                  	;33554432
114  102   JMPZ_EX/46                #79=      #79                  ?118                	;0	>>118
115  102   FETCH_DIM_R/81            $80=      16?10                73:'id'             	;0
116  102   IS_EQUAL/17               #81=      16?6                 $80                 	;0
117  102   BOOL/52                   #79=      #81                  ?0                  	;0
118  102   BOOL_NOT/13               #82=      #79                  ?0                  	;0	<<114
119  102   JMPZ/43                   ?0        #82                  ?124                	;0	>>124
120  103   NOP/0                     ?0        ?0                   ?0                  	;1
121  103   NOP/0                     ?0        ?0                   ?0                  	;1
122  103   NOP/0                     ?0        ?0                   ?0                  	;1
123  103   GOTO/253                  ?0        ?125                 ?74                 	;0
124  105   ECHO/40                   ?0        75:' selected'       ?0                  	;0	<<119
125  107   ECHO/40                   ?0        76:'>'               ?0                  	;0
126  108   FETCH_DIM_R/81            $83=      16?10                77:'server_name'    	;0
127  108   ECHO/40                   ?0        $83                  ?0                  	;0
128  109   ECHO/40                   ?0        78:'</option>
                                                                            ' ?0                  	;0
129  110   JMP/42                    ?0        ?108                 ?0                  	;0	>>108
130  110   FE_FREE/127               ?0        $77                  ?0                  	;0	<<107
131  113   ECHO/40                   ?0        79:'                                                                        </select>
                                                                    </td>
                                                                    <td class="input-group">
                                                                        <input type="text" class="form-control" value="' ?0                  	;0
132  114   INIT_FCALL_BY_NAME/59     ?0        ?0                   80:'htmlspecialchars'	;1
133  114   SEND_VAR_EX/66            ?80       16?7                 ?1                  	;0
134  114   DO_FCALL_BY_NAME/131      $84=      ?0                   ?0                  	;0
135  114   ECHO/40                   ?0        $84                  ?0                  	;0
136  115   ECHO/40                   ?0        82:'">
                                                                        <div class="input-group-append">
                                                                            <button class="btn btn-danger waves-effect waves-light btn-fixed-xs" onClick="removeRTMP(this);" type="button"><i class="mdi mdi-close"></i></button>
                                                                        </div>
                                                                    </td>
                                                                </tr>
                                                            ' ?0                  	;0
137  116   POST_INC/36               #85=      16?8                 ?0                  	;0
138  116   FREE/70                   ?0        #85                  ?0                  	;0
139  117   JMP/42                    ?0        ?103                 ?0                  	;0	>>103
140  117   FE_FREE/127               ?0        $76                  ?0                  	;0	<<102
141  120   JMP/42                    ?0        ?100                 ?0                  	;0	>>100
142  120   FE_FREE/127               ?0        $73                  ?0                  	;0	<<99
143  123   ECHO/40                   ?0        83:'                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                        <ul class="list-inline wizard mb-0" style="padding-top: 30px;">
											<li class="prevb list-inline-item">
												<a href="javascript: void(0);" class="btn btn-secondary">Previous</a>
                                            </li>
											<li class="list-inline-item float-right">
                                                <a onClick="addRTMP();" class="btn btn-info btn-pointer">Add RTMP URL</a>
												<a href="javascript: void(0);" class="btn nextb btn-secondary">Next</a>
											</li>
										</ul>
                                    </div>
									' ?0                  	;0
144  125   ECHO/40                   ?0        84:'									<div class="tab-pane" id="load-balancing">
										<div class="row">
											<div class="col-12">
												<div class="form-group row mb-4">
													<label class="col-md-3 col-form-label" for="servers">Server Tree</label>
													<div class="col-md-9">
														<div id="server_tree"></div>
													</div>
												</div>
												<div class="form-group row mb-4">
                                                    <label class="col-md-3 col-form-label" for="on_demand">On-Demand Servers</label>
													<div class="col-md-3">
                                                        <select name="on_demand[]" id="on_demand" class="form-control select2-multiple" data-toggle="select2" multiple="multiple" data-placeholder="Choose...">
															' ?0                  	;0
145  126   GOTO/253                  ?0        ?1350                ?85                 	;0
146  128   ECHO/40                   ?0        86:'														</select>
													</div>
												</div>
												<div class="form-group row mb-4">
                                                    <label class="col-md-3 col-form-label" for="tv_archive_server_id">Timeshift Server</label>
													<div class="col-md-3">
														<select name="tv_archive_server_id" id="tv_archive_server_id" class="form-control" data-toggle="select2">
															<option value="0">Disabled</option>
															' ?0                  	;0
147  129   FE_RESET_R/77             $86=      16?9                 ?169                	;0
148  129   FE_FETCH_R/78             ?0        $86                  16?10               	;169	>>169	<<168
149  130   ECHO/40                   ?0        87:'															<option value="' ?0                  	;0
150  131   FETCH_DIM_R/81            $87=      16?10                88:'id'             	;0
151  131   ECHO/40                   ?0        $87                  ?0                  	;0
152  132   ECHO/40                   ?0        89:'"'               ?0                  	;0
153  133   ISSET_ISEMPTY_CV/197      #88=      16?2                 ?0                  	;33554432
154  133   JMPZ_EX/46                #88=      #88                  ?159                	;0	>>159
155  133   FETCH_DIM_R/81            $89=      16?2                 90:'tv_archive_server_id'	;0
156  133   FETCH_DIM_R/81            $90=      16?10                91:'id'             	;0
157  133   IS_EQUAL/17               #91=      $89                  $90                 	;0
158  133   BOOL/52                   #88=      #91                  ?0                  	;0
159  133   BOOL_NOT/13               #92=      #88                  ?0                  	;0	<<154
160  133   JMPZ/43                   ?0        #92                  ?163                	;0	>>163
161  134   NOP/0                     ?0        ?0                   ?0                  	;1
162  134   GOTO/253                  ?0        ?164                 ?92                 	;0
163  136   ECHO/40                   ?0        93:' selected'       ?0                  	;0	<<160
164  138   ECHO/40                   ?0        94:'>'               ?0                  	;0
165  139   FETCH_DIM_R/81            $93=      16?10                95:'server_name'    	;0
166  139   ECHO/40                   ?0        $93                  ?0                  	;0
167  140   ECHO/40                   ?0        96:'</option>
															' ?0                  	;0
168  141   JMP/42                    ?0        ?148                 ?0                  	;0	>>148
169  141   FE_FREE/127               ?0        $86                  ?0                  	;0	<<147
170  144   ECHO/40                   ?0        97:'														</select>
													</div>
                                                    <label class="col-md-3 col-form-label" for="tv_archive_duration">Timeshift Days</label>
													<div class="col-md-3">
														<input type="text" class="form-control text-center" id="tv_archive_duration" name="tv_archive_duration" value="' ?0                  	;0
171  145   ISSET_ISEMPTY_CV/197      #94=      16?2                 ?0                  	;33554432
172  145   JMPZ/43                   ?0        #94                  ?174                	;0	>>174
173  146   GOTO/253                  ?0        ?585                 ?98                 	;0
174  148   GOTO/253                  ?0        ?583                 ?99                 	;0	<<172
175  150   ECHO/40                   ?0        100:'0'              ?0                  	;0
176  151   GOTO/253                  ?0        ?179                 ?101                	;0
177  153   FETCH_DIM_R/81            $95=      16?2                 102:'delay_minutes' 	;0
178  153   ECHO/40                   ?0        $95                  ?0                  	;0
179  155   GOTO/253                  ?0        ?265                 ?103                	;0
180  158   ECHO/40                   ?0        104:'                                                        </tr>
                                                    </thead>
                                                    <tbody class="streams">
                                                        ' ?0                  	;0
181  159   ISSET_ISEMPTY_CV/197      #96=      16?2                 ?0                  	;33554432
182  159   JMPZ/43                   ?0        #96                  ?184                	;0	>>184
183  160   GOTO/253                  ?0        ?527                 ?105                	;0
184  162   FETCH_STATIC_PROP_IS/176  $97=      106:'rRequest'       107:'XUI'           	;0	<<182
185  162   ISSET_ISEMPTY_DIM_OBJ/115 #98=      $97                  109:'url'           	;33554432
186  162   JMPZ/43                   ?0        #98                  ?188                	;0	>>188
187  163   GOTO/253                  ?0        ?245                 ?110                	;0
188  165   ASSIGN/38                 ?57       16?11                111:array (
  0 => '',
)	;0	<<186
189  166   GOTO/253                  ?0        ?244                 ?112                	;0
190  168   INIT_FCALL_BY_NAME/59     ?0        ?0                   113:'strlen'        	;1
191  168   FETCH_DIM_FUNC_ARG/93     $100=     16?2                 115:'auto_restart'  	;1
192  168   SEND_VAR_EX/66            ?80       $100                 ?1                  	;0
193  168   DO_FCALL_BY_NAME/131      $101=     ?0                   ?0                  	;0
194  168   BOOL_NOT/13               #102=     $101                 ?0                  	;0
195  168   JMPZ/43                   ?0        #102                 ?197                	;0	>>197
196  169   GOTO/253                  ?0        ?243                 ?116                	;0
197  171   INIT_FCALL_BY_NAME/59     ?0        ?0                   117:'json_decode'   	;2	<<195
198  171   FETCH_DIM_FUNC_ARG/93     $103=     16?2                 119:'auto_restart'  	;1
199  171   SEND_VAR_EX/66            ?80       $103                 ?1                  	;0
200  171   SEND_VAL_EX/116           ?96       120:true             ?2                  	;0
201  171   DO_FCALL_BY_NAME/131      $104=     ?0                   ?0                  	;0
202  171   ASSIGN/38                 ?63       16?12                $104                	;0
203  172   ISSET_ISEMPTY_DIM_OBJ/115 #106=     16?12                121:'days'          	;33554432
204  172   JMPZ/43                   ?0        #106                 ?206                	;0	>>206
205  173   GOTO/253                  ?0        ?208                 ?122                	;0
206  175   ASSIGN_DIM/147            ?65       16?12                123:'days'          	;0	<<204
207  175   OP_DATA/137               ?0        124:array (
)        ?0                  	;0
208  177   GOTO/253                  ?0        ?238                 ?125                	;0
209  179   ISSET_ISEMPTY_CV/197      #108=     16?2                 ?0                  	;33554432
210  179   JMPZ/43                   ?0        #108                 ?212                	;0	>>212
211  180   GOTO/253                  ?0        ?727                 ?126                	;0
212  182   FETCH_STATIC_PROP_IS/176  $109=     127:'rRequest'       128:'XUI'           	;0	<<210
213  182   ISSET_ISEMPTY_DIM_OBJ/115 #110=     $109                 130:'icon'          	;33554432
214  182   BOOL_NOT/13               #111=     #110                 ?0                  	;0
215  182   JMPZ/43                   ?0        #111                 ?217                	;0	>>217
216  183   GOTO/253                  ?0        ?225                 ?131                	;0
217  185   INIT_FCALL_BY_NAME/59     ?0        ?0                   132:'str_replace'   	;3	<<215
218  185   SEND_VAL_EX/116           ?80       134:'"'              ?1                  	;0
219  185   SEND_VAL_EX/116           ?96       135:'&quot;'         ?2                  	;0
220  185   FETCH_STATIC_PROP_FUNC_ARG/177 $112=     136:'rRequest'       137:'XUI'           	;3
221  185   FETCH_DIM_FUNC_ARG/93     $113=     $112                 139:'icon'          	;3
222  185   SEND_VAR_EX/66            ?112      $113                 ?3                  	;0
223  185   DO_FCALL_BY_NAME/131      $114=     ?0                   ?0                  	;0
224  185   ECHO/40                   ?0        $114                 ?0                  	;0
225  187   GOTO/253                  ?0        ?732                 ?140                	;0
226  188   GOTO/253                  ?0        ?727                 ?141                	;0
227  190   ECHO/40                   ?0        142:'					</div>
					<h4 class="page-title">' ?0                  	;0
228  191   ISSET_ISEMPTY_DIM_OBJ/115 #115=     16?2                 143:'id'            	;33554432
229  191   JMPZ/43                   ?0        #115                 ?231                	;0	>>231
230  192   GOTO/253                  ?0        ?743                 ?144                	;0
231  194   FETCH_STATIC_PROP_IS/176  $116=     145:'rRequest'       146:'XUI'           	;0	<<229
232  194   ISSET_ISEMPTY_DIM_OBJ/115 #117=     $116                 148:'import'        	;33554432
233  194   JMPZ/43                   ?0        #117                 ?235                	;0	>>235
234  195   GOTO/253                  ?0        ?741                 ?149                	;0
235  197   ECHO/40                   ?0        150:'Add Stream'     ?0                  	;0	<<233
236  198   GOTO/253                  ?0        ?742                 ?151                	;0
237  199   GOTO/253                  ?0        ?741                 ?152                	;0
238  201   ISSET_ISEMPTY_DIM_OBJ/115 #118=     16?12                153:'at'            	;33554432
239  201   JMPZ/43                   ?0        #118                 ?241                	;0	>>241
240  202   GOTO/253                  ?0        ?243                 ?154                	;0
241  204   ASSIGN_DIM/147            ?77       16?12                155:'at'            	;0	<<239
242  204   OP_DATA/137               ?0        156:'06:00'          ?0                  	;0
243  208   GOTO/253                  ?0        ?1325                ?157                	;0
244  210   GOTO/253                  ?0        ?254                 ?158                	;0
245  212   INIT_FCALL_BY_NAME/59     ?0        ?0                   159:'str_replace'   	;3
246  212   SEND_VAL_EX/116           ?80       161:'"'              ?1                  	;0
247  212   SEND_VAL_EX/116           ?96       162:'&quot;'         ?2                  	;0
248  212   FETCH_STATIC_PROP_FUNC_ARG/177 $120=     163:'rRequest'       164:'XUI'           	;3
249  212   FETCH_DIM_FUNC_ARG/93     $121=     $120                 166:'url'           	;3
250  212   SEND_VAR_EX/66            ?112      $121                 ?3                  	;0
251  212   DO_FCALL_BY_NAME/131      $122=     ?0                   ?0                  	;0
252  212   INIT_ARRAY/71             #123=     $122                 ?0                  	;4
253  212   ASSIGN/38                 ?82       16?11                #123                	;0
254  214   GOTO/253                  ?0        ?911                 ?167                	;0
255  215   GOTO/253                  ?0        ?527                 ?168                	;0
256  217   ASSIGN_DIM/147            ?83       16?2                 169:'epg_api_name'  	;0
257  217   OP_DATA/137               ?0        170:'No longer available.' ?0                  	;0
258  218   GOTO/253                  ?0        ?264                 ?171                	;0
259  220   INIT_METHOD_CALL/112      ?0        16?13                173:'get_row'       	;0
260  220   DO_FCALL/60               $127=     ?0                   ?0                  	;0
261  220   FETCH_DIM_R/81            $128=     $127                 175:'name'          	;0
262  220   ASSIGN_DIM/147            ?84       16?2                 172:'epg_api_name'  	;0
263  220   OP_DATA/137               ?0        $128                 ?0                  	;0
264  222   GOTO/253                  ?0        ?1121                ?176                	;0
265  224   ECHO/40                   ?0        177:'">
													</div>
												</div>
												<div class="form-group row mb-4">
													<label class="col-md-3 col-form-label" for="user_agent">User Agent</label>
													<div class="col-md-9">
														<input type="text" class="form-control" id="user_agent" name="user_agent" value="' ?0                  	;0
266  225   ISSET_ISEMPTY_DIM_OBJ/115 #129=     16?3                 178:1               	;33554432
267  225   JMPZ/43                   ?0        #129                 ?269                	;0	>>269
268  226   GOTO/253                  ?0        ?276                 ?179                	;0
269  228   INIT_FCALL_BY_NAME/59     ?0        ?0                   180:'htmlspecialchars'	;1	<<267
270  228   FETCH_DIM_FUNC_ARG/93     $130=     16?14                182:'user_agent'    	;1
271  228   FETCH_DIM_FUNC_ARG/93     $131=     $130                 183:'argument_default_value'	;1
272  228   SEND_VAR_EX/66            ?80       $131                 ?1                  	;0
273  228   DO_FCALL_BY_NAME/131      $132=     ?0                   ?0                  	;0
274  228   ECHO/40                   ?0        $132                 ?0                  	;0
275  229   GOTO/253                  ?0        ?900                 ?184                	;0
276  231   GOTO/253                  ?0        ?894                 ?185                	;0
277  234   ECHO/40                   ?0        186:'">
													</div>
												</div>
												<div class="form-group row mb-4">
													<label class="col-md-3 col-form-label" for="headers">Headers <i title="FFmpeg -headers command." class="tooltip text-secondary far fa-circle"></i></label>
													<div class="col-md-9">
														<input type="text" class="form-control" id="headers" name="headers" value="' ?0                  	;0
278  235   ISSET_ISEMPTY_DIM_OBJ/115 #133=     16?3                 187:19              	;33554432
279  235   JMPZ/43                   ?0        #133                 ?281                	;0	>>281
280  236   GOTO/253                  ?0        ?49                  ?188                	;0
281  238   INIT_FCALL_BY_NAME/59     ?0        ?0                   189:'htmlspecialchars'	;1	<<279
282  238   FETCH_DIM_FUNC_ARG/93     $134=     16?14                191:'headers'       	;1
283  238   FETCH_DIM_FUNC_ARG/93     $135=     $134                 192:'argument_default_value'	;1
284  238   SEND_VAR_EX/66            ?80       $135                 ?1                  	;0
285  238   DO_FCALL_BY_NAME/131      $136=     ?0                   ?0                  	;0
286  238   ECHO/40                   ?0        $136                 ?0                  	;0
287  239   GOTO/253                  ?0        ?55                  ?193                	;0
288  240   GOTO/253                  ?0        ?49                  ?194                	;0
289  242   FETCH_DIM_R/81            $137=     16?2                 195:'rtmp_output'   	;0
290  242   IS_EQUAL/17               #138=     $137                 196:1               	;0
291  242   BOOL_NOT/13               #139=     #138                 ?0                  	;0
292  242   JMPZ/43                   ?0        #139                 ?294                	;0	>>294
293  243   GOTO/253                  ?0        ?295                 ?197                	;0
294  245   ECHO/40                   ?0        198:'checked '       ?0                  	;0	<<292
295  248   ECHO/40                   ?0        199:'data-plugin="switchery" class="js-switch" data-color="#039cfd"/>
                                                    </div>
                                                </div>
                                                <div class="alert bg-info text-white border-0" role="alert">
													RTMP Push will allow you to push your streams to RTMP servers, such as the one that runs with XUI. The `Push From` server needs to be enabled in the servers tab for this to be activated.
												</div>
                                                <table id="datatable-rtmp" class="table table-striped table-borderless mb-0">
                                                    <thead>
                                                        <tr>
                                                            <th>Push From</th>
                                                            <th>RTMP URL</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody class="rtmp">
                                                        ' ?0                  	;0
296  249   GOTO/253                  ?0        ?670                 ?200                	;0
297  251   GOTO/253                  ?0        ?303                 ?201                	;0
298  253   INIT_FCALL_BY_NAME/59     ?0        ?0                   202:'htmlspecialchars'	;1
299  253   FETCH_DIM_FUNC_ARG/93     $140=     16?2                 204:'stream_display_name'	;1
300  253   SEND_VAR_EX/66            ?80       $140                 ?1                  	;0
301  253   DO_FCALL_BY_NAME/131      $141=     ?0                   ?0                  	;0
302  253   ECHO/40                   ?0        $141                 ?0                  	;0
303  255   ECHO/40                   ?0        205:'" required data-parsley-trigger="change">
													</div>
												</div>
												<div class="form-group row mb-4">
													<label class="col-md-3 col-form-label" for="stream_icon">Stream Logo</label>
                                                    <div class="col-md-9 input-group">
														<input type="text" class="form-control" id="stream_icon" name="stream_icon" value="' ?0                  	;0
304  256   GOTO/253                  ?0        ?209                 ?206                	;0
305  258   FE_RESET_R/77             $142=     16?9                 ?327                	;0
306  258   FE_FETCH_R/78             ?0        $142                 16?10               	;327	>>327	<<326
307  259   ECHO/40                   ?0        207:'																<option value="' ?0                  	;0
308  260   FETCH_DIM_R/81            $143=     16?10                208:'id'            	;0
309  260   ECHO/40                   ?0        $143                 ?0                  	;0
310  261   ECHO/40                   ?0        209:'"'              ?0                  	;0
311  262   ISSET_ISEMPTY_CV/197      #144=     16?2                 ?0                  	;33554432
312  262   JMPZ_EX/46                #144=     #144                 ?317                	;0	>>317
313  262   FETCH_DIM_R/81            $145=     16?2                 210:'capture_server_id'	;0
314  262   FETCH_DIM_R/81            $146=     16?10                211:'id'            	;0
315  262   IS_EQUAL/17               #147=     $145                 $146                	;0
316  262   BOOL/52                   #144=     #147                 ?0                  	;0
317  262   BOOL_NOT/13               #148=     #144                 ?0                  	;0	<<312
318  262   JMPZ/43                   ?0        #148                 ?321                	;0	>>321
319  263   NOP/0                     ?0        ?0                   ?0                  	;1
320  263   GOTO/253                  ?0        ?322                 ?212                	;0
321  265   ECHO/40                   ?0        213:' selected'      ?0                  	;0	<<318
322  267   ECHO/40                   ?0        214:'>'              ?0                  	;0
323  268   FETCH_DIM_R/81            $149=     16?10                215:'server_name'   	;0
324  268   ECHO/40                   ?0        $149                 ?0                  	;0
325  269   ECHO/40                   ?0        216:'</option>
																' ?0                  	;0
326  270   JMP/42                    ?0        ?306                 ?0                  	;0	>>306
327  270   FE_FREE/127               ?0        $142                 ?0                  	;0	<<305
328  273   ECHO/40                   ?0        217:'															</select>
														</div>
													</div>
													<div class="form-group row mb-4">
														<label class="col-md-3 col-form-label" for="video_device_id">Video Input</label>
														<div class="col-md-9">
															<select name="video_device_id" id="video_device_id" class="form-control" data-toggle="select2"></select>
														</div>
													</div>
													<div class="form-group row mb-4">
														<label class="col-md-3 col-form-label" for="audio_device_id">Audio Input</label>
														<div class="col-md-9">
															<select name="audio_device_id" id="audio_device_id" class="form-control" data-toggle="select2"></select>
														</div>
													</div>
												</div>
                                            </div>
                                        </div>
                                        <ul class="list-inline wizard mb-0" style="padding-top: 30px;">
											<li class="prevb list-inline-item">
												<a href="javascript: void(0);" class="btn btn-secondary">Previous</a>
                                            </li>
											<span id="source_form">
												<li class="list-inline-item">
													<a onClick="addStream();" class="btn btn-primary btn-pointer">Add Row</a>
												</li>
												' ?0                  	;0
329  274   JMPZ/43                   ?0        16?15                ?331                	;0	>>331
330  275   GOTO/253                  ?0        ?976                 ?218                	;0
331  277   ECHO/40                   ?0        219:'                                                <li class="list-inline-item">
                                                    <button type="button" style="width: 100%" class="btn btn-pink btn-pointer" id="provider-streams">Providers</button>
												</li>
												<li class="list-inline-item">
													<a onClick="scanSources();" class="btn btn-info btn-pointer">Scan Sources</a>
												</li>
												' ?0                  	;0	<<329
332  278   GOTO/253                  ?0        ?976                 ?220                	;0
333  280   ISSET_ISEMPTY_CV/197      #150=     16?2                 ?0                  	;33554432
334  280   JMPZ/43                   ?0        #150                 ?336                	;0	>>336
335  281   GOTO/253                  ?0        ?338                 ?221                	;0
336  283   ECHO/40                   ?0        222:'checked '       ?0                  	;0	<<334
337  284   GOTO/253                  ?0        ?712                 ?223                	;0
338  286   FETCH_DIM_R/81            $151=     16?2                 224:'allow_record'  	;0
339  286   IS_EQUAL/17               #152=     $151                 225:1               	;0
340  286   BOOL_NOT/13               #153=     #152                 ?0                  	;0
341  286   JMPZ/43                   ?0        #153                 ?343                	;0	>>343
342  287   GOTO/253                  ?0        ?712                 ?226                	;0
343  289   GOTO/253                  ?0        ?711                 ?227                	;0	<<341
344  291   FE_RESET_R/77             $154=     16?9                 ?416                	;0
345  291   FE_FETCH_R/78             ?0        $154                 16?10               	;416	>>416	<<415
346  292   NOP/0                     ?0        ?0                   ?0                  	;1
347  292   GOTO/253                  ?0        ?348                 ?228                	;0
348  294   INIT_FCALL_BY_NAME/59     ?0        ?0                   229:'intval'        	;1
349  294   FETCH_DIM_FUNC_ARG/93     $155=     16?10                231:'id'            	;1
350  294   SEND_VAR_EX/66            ?80       $155                 ?1                  	;0
351  294   DO_FCALL_BY_NAME/131      $156=     ?0                   ?0                  	;0
352  294   ISSET_ISEMPTY_DIM_OBJ/115 #157=     16?16                $156                	;33554432
353  294   JMPZ/43                   ?0        #157                 ?356                	;0	>>356
354  295   NOP/0                     ?0        ?0                   ?0                  	;1
355  295   GOTO/253                  ?0        ?359                 ?232                	;0
356  297   ASSIGN/38                 ?116      16?17                233:'offline'       	;0	<<353
357  298   NOP/0                     ?0        ?0                   ?0                  	;1
358  298   GOTO/253                  ?0        ?402                 ?234                	;0
359  300   INIT_FCALL_BY_NAME/59     ?0        ?0                   235:'intval'        	;1
360  300   FETCH_DIM_FUNC_ARG/93     $159=     16?10                237:'id'            	;1
361  300   SEND_VAR_EX/66            ?80       $159                 ?1                  	;0
362  300   DO_FCALL_BY_NAME/131      $160=     ?0                   ?0                  	;0
363  300   FETCH_DIM_R/81            $161=     16?16                $160                	;0
364  300   FETCH_DIM_R/81            $162=     $161                 238:'parent_id'     	;0
365  300   IS_NOT_EQUAL/18           #163=     $162                 239:0               	;0
366  300   JMPZ/43                   ?0        #163                 ?369                	;0	>>369
367  301   NOP/0                     ?0        ?0                   ?0                  	;1
368  301   GOTO/253                  ?0        ?374                 ?240                	;0
369  303   NOP/0                     ?0        ?0                   ?0                  	;1	<<366
370  303   GOTO/253                  ?0        ?371                 ?241                	;0
371  305   ASSIGN/38                 ?122      16?17                242:'source'        	;0
372  306   NOP/0                     ?0        ?0                   ?0                  	;1
373  306   GOTO/253                  ?0        ?384                 ?243                	;0
374  308   INIT_FCALL_BY_NAME/59     ?0        ?0                   244:'intval'        	;1
375  308   INIT_FCALL_BY_NAME/59     ?0        ?0                   246:'intval'        	;1
376  308   FETCH_DIM_FUNC_ARG/93     $165=     16?10                248:'id'            	;1
377  308   SEND_VAR_EX/66            ?80       $165                 ?1                  	;0
378  308   DO_FCALL_BY_NAME/131      $166=     ?0                   ?0                  	;0
379  308   FETCH_DIM_FUNC_ARG/93     $167=     16?16                $166                	;1
380  308   FETCH_DIM_FUNC_ARG/93     $168=     $167                 249:'parent_id'     	;1
381  308   SEND_VAR_EX/66            ?80       $168                 ?1                  	;0
382  308   DO_FCALL_BY_NAME/131      $169=     ?0                   ?0                  	;0
383  308   ASSIGN/38                 ?128      16?17                $169                	;0
384  310   NOP/0                     ?0        ?0                   ?0                  	;1
385  310   GOTO/253                  ?0        ?386                 ?250                	;0
386  312   INIT_FCALL_BY_NAME/59     ?0        ?0                   251:'intval'        	;1
387  312   FETCH_DIM_FUNC_ARG/93     $171=     16?10                253:'id'            	;1
388  312   SEND_VAR_EX/66            ?80       $171                 ?1                  	;0
389  312   DO_FCALL_BY_NAME/131      $172=     ?0                   ?0                  	;0
390  312   FETCH_DIM_R/81            $173=     16?16                $172                	;0
391  312   FETCH_DIM_R/81            $174=     $173                 254:'on_demand'     	;0
392  312   BOOL_NOT/13               #175=     $174                 ?0                  	;0
393  312   JMPZ/43                   ?0        #175                 ?396                	;0	>>396
394  313   NOP/0                     ?0        ?0                   ?0                  	;1
395  313   GOTO/253                  ?0        ?402                 ?255                	;0
396  315   INIT_FCALL_BY_NAME/59     ?0        ?0                   256:'intval'        	;1	<<393
397  315   FETCH_DIM_FUNC_ARG/93     $177=     16?10                258:'id'            	;1
398  315   SEND_VAR_EX/66            ?80       $177                 ?1                  	;0
399  315   DO_FCALL_BY_NAME/131      $178=     ?0                   ?0                  	;0
400  315   ASSIGN_DIM/147            ?134      16?18                ?4397406            	;0
401  315   OP_DATA/137               ?0        $178                 ?0                  	;0
402  318   FETCH_DIM_R/81            $180=     16?10                259:'id'            	;0
403  318   INIT_ARRAY/71             #181=     $180                 260:'id'            	;22
404  318   ADD_ARRAY_ELEMENT/72      #181=     16?17                261:'parent'        	;0
405  318   FETCH_DIM_R/81            $182=     16?10                262:'server_name'   	;0
406  318   ADD_ARRAY_ELEMENT/72      #181=     $182                 263:'text'          	;0
407  318   ADD_ARRAY_ELEMENT/72      #181=     264:'mdi mdi-server-network' 265:'icon'          	;0
408  318   ADD_ARRAY_ELEMENT/72      #181=     266:array (
  'opened' => true,
) 267:'state'         	;0
409  318   ASSIGN_DIM/147            ?137      16?19                ?0                  	;0
410  318   OP_DATA/137               ?0        #181                 ?0                  	;0
411  319   NOP/0                     ?0        ?0                   ?0                  	;1
412  319   GOTO/253                  ?0        ?413                 ?268                	;0
413  322   NOP/0                     ?0        ?0                   ?0                  	;1
414  322   GOTO/253                  ?0        ?415                 ?269                	;0
415  323   JMP/42                    ?0        ?345                 ?0                  	;0	>>345
416  323   FE_FREE/127               ?0        $154                 ?0                  	;0	<<344
417  326   FETCH_DIM_R/81            $183=     16?2                 270:'epg_api'       	;0
418  326   JMPZ_EX/46                #184=     $183                 ?425                	;0	>>425
419  326   INIT_FCALL_BY_NAME/59     ?0        ?0                   271:'strlen'        	;1
420  326   FETCH_DIM_FUNC_ARG/93     $185=     16?2                 273:'channel_id'    	;1
421  326   SEND_VAR_EX/66            ?80       $185                 ?1                  	;0
422  326   DO_FCALL_BY_NAME/131      $186=     ?0                   ?0                  	;0
423  326   IS_SMALLER/19             #187=     274:0                $186                	;0
424  326   BOOL/52                   #184=     #187                 ?0                  	;0
425  326   BOOL_NOT/13               #188=     #184                 ?0                  	;0	<<418
426  326   JMPZ/43                   ?0        #188                 ?428                	;0	>>428
427  327   GOTO/253                  ?0        ?1121                ?275                	;0
428  329   INIT_METHOD_CALL/112      ?0        16?13                276:'query'         	;2	<<426
429  329   SEND_VAL_EX/116           ?80       278:'SELECT `name` FROM `epg_api` WHERE `callSign` = ?;' ?1                  	;0
430  329   FETCH_DIM_FUNC_ARG/93     $189=     16?2                 279:'channel_id'    	;2
431  329   SEND_VAR_EX/66            ?96       $189                 ?2                  	;0
432  329   DO_FCALL/60               ?148      ?0                   ?0                  	;0
433  330   INIT_METHOD_CALL/112      ?0        16?13                280:'num_rows'      	;0
434  330   DO_FCALL/60               $191=     ?0                   ?0                  	;0
435  330   IS_SMALLER/19             #192=     282:0                $191                	;0
436  330   JMPZ/43                   ?0        #192                 ?438                	;0	>>438
437  331   GOTO/253                  ?0        ?259                 ?283                	;0
438  333   GOTO/253                  ?0        ?256                 ?284                	;0	<<436
439  335   ECHO/40                   ?0        285:'									<li class="nav-item">
										<a href="#stream-map" data-toggle="tab" class="nav-link rounded-0 pt-2 pb-2">
											<i class="mdi mdi-map mr-1"></i>
											<span class="d-none d-sm-inline">Map</span>
										</a>
									</li>
									<li class="nav-item">
										<a href="#epg-options" data-toggle="tab" class="nav-link rounded-0 pt-2 pb-2">
											<i class="mdi mdi-television-guide mr-1"></i>
											<span class="d-none d-sm-inline">EPG</span>
										</a>
									</li>
                                    ' ?0                  	;0
440  336   JMPZ/43                   ?0        16?15                ?442                	;0	>>442
441  337   GOTO/253                  ?0        ?443                 ?286                	;0
442  339   ECHO/40                   ?0        287:'                                    <li class="nav-item">
										<a href="#rtmp-push" data-toggle="tab" class="nav-link rounded-0 pt-2 pb-2">
											<i class="mdi mdi-upload-network-outline mr-1"></i>
											<span class="d-none d-sm-inline">RTMP Push</span>
										</a>
									</li>
                                    ' ?0                  	;0	<<440
443  342   GOTO/253                  ?0        ?1                   ?288                	;0
444  344   ECHO/40                   ?0        289:'</textarea>
													</div>
												</div>
											</div> 
										</div> 
										<ul class="list-inline wizard mb-0">
											<li class="nextb list-inline-item float-right">
												<a href="javascript: void(0);" class="btn btn-secondary">Next</a>
											</li>
										</ul>
									</div>
                                    ' ?0                  	;0
445  345   FETCH_STATIC_PROP_IS/176  $193=     290:'rRequest'       291:'XUI'           	;0
446  345   ISSET_ISEMPTY_DIM_OBJ/115 #194=     $193                 293:'import'        	;33554432
447  345   JMPZ/43                   ?0        #194                 ?449                	;0	>>449
448  346   GOTO/253                  ?0        ?977                 ?294                	;0
449  348   ECHO/40                   ?0        295:'                                    <div class="tab-pane" id="stream-sources">
										<div class="row">
											<div class="col-12">
                                                <table id="datatable-sources" class="table table-striped table-borderless mb-0">
                                                    <thead>
                                                        <tr>
                                                            <th>URL</th>
                                                            ' ?0                  	;0	<<447
450  349   JMPZ/43                   ?0        16?15                ?452                	;0	>>452
451  350   GOTO/253                  ?0        ?180                 ?296                	;0
452  352   ECHO/40                   ?0        297:'                                                            <th class="text-center">Stream Info</th>
                                                            ' ?0                  	;0	<<450
453  353   GOTO/253                  ?0        ?180                 ?298                	;0
454  355   ECHO/40                   ?0        299:'												<div class="form-group row mb-4">
													<label class="col-md-3 col-form-label" for="stream_display_name">Stream Name</label>
													<div class="col-md-9">
														<input type="text" class="form-control" id="stream_display_name" name="stream_display_name" value="' ?0                  	;0
455  356   ISSET_ISEMPTY_CV/197      #195=     16?2                 ?0                  	;33554432
456  356   JMPZ/43                   ?0        #195                 ?458                	;0	>>458
457  357   GOTO/253                  ?0        ?298                 ?300                	;0
458  359   FETCH_STATIC_PROP_IS/176  $196=     301:'rRequest'       302:'XUI'           	;0	<<456
459  359   ISSET_ISEMPTY_DIM_OBJ/115 #197=     $196                 304:'title'         	;33554432
460  359   BOOL_NOT/13               #198=     #197                 ?0                  	;0
461  359   JMPZ/43                   ?0        #198                 ?463                	;0	>>463
462  360   GOTO/253                  ?0        ?471                 ?305                	;0
463  362   INIT_FCALL_BY_NAME/59     ?0        ?0                   306:'str_replace'   	;3	<<461
464  362   SEND_VAL_EX/116           ?80       308:'"'              ?1                  	;0
465  362   SEND_VAL_EX/116           ?96       309:'&quot;'         ?2                  	;0
466  362   FETCH_STATIC_PROP_FUNC_ARG/177 $199=     310:'rRequest'       311:'XUI'           	;3
467  362   FETCH_DIM_FUNC_ARG/93     $200=     $199                 313:'title'         	;3
468  362   SEND_VAR_EX/66            ?112      $200                 ?3                  	;0
469  362   DO_FCALL_BY_NAME/131      $201=     ?0                   ?0                  	;0
470  362   ECHO/40                   ?0        $201                 ?0                  	;0
471  364   GOTO/253                  ?0        ?297                 ?314                	;0
472  366   ISSET_ISEMPTY_CV/197      #202=     16?2                 ?0                  	;33554432
473  366   BOOL_NOT/13               #203=     #202                 ?0                  	;0
474  366   JMPZ/43                   ?0        #203                 ?476                	;0	>>476
475  367   GOTO/253                  ?0        ?482                 ?315                	;0
476  369   FETCH_DIM_R/81            $204=     16?2                 316:'fps_restart'   	;0	<<474
477  369   IS_EQUAL/17               #205=     $204                 317:1               	;0
478  369   BOOL_NOT/13               #206=     #205                 ?0                  	;0
479  369   JMPZ/43                   ?0        #206                 ?481                	;0	>>481
480  370   GOTO/253                  ?0        ?482                 ?318                	;0
481  372   ECHO/40                   ?0        319:'checked '       ?0                  	;0	<<479
482  375   GOTO/253                  ?0        ?72                  ?320                	;0
483  378   ECHO/40                   ?0        321:'">
													</div>
												</div>
                                                <div class="form-group row mb-4">
                                                    <label class="col-md-3 col-form-label" for="probesize_ondemand">On Demand Probesize <i title="Adjustable probesize for ondemand streams. Adjust this setting if you experience issues with no audio." class="tooltip text-secondary far fa-circle"></i></label>
													<div class="col-md-3">
														<input type="text" class="form-control text-center" id="probesize_ondemand" name="probesize_ondemand" value="' ?0                  	;0
484  379   ISSET_ISEMPTY_CV/197      #207=     16?2                 ?0                  	;33554432
485  379   JMPZ/43                   ?0        #207                 ?487                	;0	>>487
486  380   GOTO/253                  ?0        ?734                 ?322                	;0
487  382   FETCH_DIM_R/81            $208=     16?20                323:'probesize_ondemand'	;0	<<485
488  382   ECHO/40                   ?0        $208                 ?0                  	;0
489  383   GOTO/253                  ?0        ?736                 ?324                	;0
490  384   GOTO/253                  ?0        ?734                 ?325                	;0
491  386   ECHO/40                   ?0        326:'">
															<div class="input-group-append">
																<span class="input-group-text"><i class="mdi mdi-clock-outline"></i></span>
															</div>
														</div>
													</div>
												</div>
                                                <div class="form-group row mb-4">
                                                    ' ?0                  	;0
492  387   ISSET_ISEMPTY_CV/197      #209=     16?2                 ?0                  	;33554432
493  387   JMPZ/43                   ?0        #209                 ?503                	;0	>>503
494  387   INIT_FCALL_BY_NAME/59     ?0        ?0                   327:'json_decode'   	;2
495  387   FETCH_DIM_FUNC_ARG/93     $210=     16?2                 329:'adaptive_link' 	;1
496  387   SEND_VAR_EX/66            ?80       $210                 ?1                  	;0
497  387   SEND_VAL_EX/116           ?96       330:true             ?2                  	;0
498  387   DO_FCALL_BY_NAME/131      $211=     ?0                   ?0                  	;0
499  387   JMP_SET/152               #212=     $211                 ?501                	;0
500  387   QM_ASSIGN/22              #212=     331:array (
)        ?0                  	;0
501  387   QM_ASSIGN/22              #213=     #212                 ?0                  	;0
502  387   JMP/42                    ?0        ?504                 ?0                  	;0	>>504
503  387   QM_ASSIGN/22              #213=     332:array (
)        ?0                  	;0	<<493
504  387   ASSIGN/38                 ?172      16?21                #213                	;0	<<502
505  388   ASSIGN/38                 ?173      16?22                333:array (
)       	;0
506  389   INIT_FCALL_BY_NAME/59     ?0        ?0                   334:'count'         	;1
507  389   SEND_VAR_EX/66            ?80       16?21                ?1                  	;0
508  389   DO_FCALL_BY_NAME/131      $216=     ?0                   ?0                  	;0
509  389   IS_SMALLER/19             #217=     336:0                $216                	;0
510  389   BOOL_NOT/13               #218=     #217                 ?0                  	;0
511  389   JMPZ/43                   ?0        #218                 ?513                	;0	>>513
512  390   GOTO/253                  ?0        ?551                 ?337                	;0
513  392   INIT_METHOD_CALL/112      ?0        16?13                338:'query'         	;1	<<511
514  392   INIT_FCALL_BY_NAME/59     ?0        ?0                   340:'implode'       	;2
515  392   SEND_VAL_EX/116           ?80       342:','              ?1                  	;0
516  392   INIT_FCALL_BY_NAME/59     ?0        ?0                   343:'array_map'     	;2
517  392   SEND_VAL_EX/116           ?80       345:'intval'         ?1                  	;0
518  392   SEND_VAR_EX/66            ?96       16?21                ?2                  	;0
519  392   DO_FCALL_BY_NAME/131      $219=     ?0                   ?0                  	;0
520  392   SEND_VAR_NO_REF_EX/50     ?96       $219                 ?2                  	;0
521  392   DO_FCALL_BY_NAME/131      $220=     ?0                   ?0                  	;0
522  392   CONCAT/8                  #221=     346:'SELECT `id`, `stream_display_name` FROM `streams` WHERE `id` IN (' $220                	;0
523  392   CONCAT/8                  #222=     #221                 347:');'            	;0
524  392   SEND_VAL_EX/116           ?80       #222                 ?1                  	;0
525  392   DO_FCALL/60               ?181      ?0                   ?0                  	;0
526  393   GOTO/253                  ?0        ?537                 ?348                	;0
527  396   INIT_FCALL_BY_NAME/59     ?0        ?0                   349:'json_decode'   	;2
528  396   FETCH_DIM_FUNC_ARG/93     $224=     16?2                 351:'stream_source' 	;1
529  396   SEND_VAR_EX/66            ?80       $224                 ?1                  	;0
530  396   SEND_VAL_EX/116           ?96       352:true             ?2                  	;0
531  396   DO_FCALL_BY_NAME/131      $225=     ?0                   ?0                  	;0
532  396   ASSIGN/38                 ?184      16?11                $225                	;0
533  397   JMPZ/43                   ?0        16?11                ?535                	;0	>>535
534  398   GOTO/253                  ?0        ?536                 ?353                	;0
535  400   ASSIGN/38                 ?185      16?11                354:array (
  0 => '',
)	;0	<<533
536  402   GOTO/253                  ?0        ?911                 ?355                	;0
537  404   INIT_METHOD_CALL/112      ?0        16?13                356:'get_rows'      	;0
538  404   DO_FCALL/60               $228=     ?0                   ?0                  	;0
539  404   FE_RESET_R/77             $229=     $228                 ?550                	;0
540  404   FE_FETCH_R/78             ?0        $229                 16?23               	;550	>>550	<<549
541  405   FETCH_DIM_R/81            $230=     16?23                358:'id'            	;0
542  405   FETCH_DIM_R/81            $232=     16?23                359:'id'            	;0
543  405   CONCAT/8                  #233=     360:'['              $232                	;0
544  405   CONCAT/8                  #234=     #233                 361:'] '            	;0
545  405   FETCH_DIM_R/81            $235=     16?23                362:'stream_display_name'	;0
546  405   CONCAT/8                  #236=     #234                 $235                	;0
547  405   ASSIGN_DIM/147            ?189      16?22                $230                	;0
548  405   OP_DATA/137               ?0        #236                 ?0                  	;0
549  406   JMP/42                    ?0        ?540                 ?0                  	;0	>>540
550  406   FE_FREE/127               ?0        $229                 ?0                  	;0	<<539
551  410   ECHO/40                   ?0        363:'													<label class="col-md-3 col-form-label" for="adaptive_link">Adaptive Link  <i title="Link multiple streams together when HLS is requested, the player will select a suitable stream based on the available bandwidth. The selected streams do not need to be in the line\'s bouquet, or any bouquet at all. MPEG-TS will play this stream normally." class="tooltip text-secondary far fa-circle"></i></label>
													<div class="col-md-9">
														<select name="adaptive_link[]" id="adaptive_link" class="form-control select2-multiple" data-toggle="select2" multiple="multiple" data-placeholder="Choose ...">
                                                            ' ?0                  	;0
552  411   FE_RESET_R/77             $237=     16?21                ?561                	;0
553  411   FE_FETCH_R/78             ?0        $237                 16?24               	;561	>>561	<<560
554  412   ECHO/40                   ?0        364:'                                                            <option value="' ?0                  	;0
555  413   ECHO/40                   ?0        16?24                ?0                  	;0
556  414   ECHO/40                   ?0        365:'" selected="selected">' ?0                  	;0
557  415   FETCH_DIM_R/81            $238=     16?22                16?24               	;0
558  415   ECHO/40                   ?0        $238                 ?0                  	;0
559  416   ECHO/40                   ?0        366:'</option>
                                                            ' ?0                  	;0
560  417   JMP/42                    ?0        ?553                 ?0                  	;0	>>553
561  417   FE_FREE/127               ?0        $237                 ?0                  	;0	<<552
562  419   GOTO/253                  ?0        ?1081                ?367                	;0
563  421   INIT_METHOD_CALL/112      ?0        16?13                368:'num_rows'      	;0
564  421   DO_FCALL/60               $239=     ?0                   ?0                  	;0
565  421   IS_SMALLER/19             #240=     370:0                $239                	;0
566  421   BOOL_NOT/13               #241=     #240                 ?0                  	;0
567  421   JMPZ/43                   ?0        #241                 ?569                	;0	>>569
568  422   GOTO/253                  ?0        ?581                 ?371                	;0
569  424   CONCAT/8                  #242=     372:'<option value="' 16?25               	;0	<<567
570  424   CONCAT/8                  #243=     #242                 373:'_'             	;0
571  424   CONCAT/8                  #244=     #243                 16?26               	;0
572  424   CONCAT/8                  #245=     #244                 374:'" selected="selected">['	;0
573  424   CONCAT/8                  #246=     #245                 16?26               	;0
574  424   CONCAT/8                  #247=     #246                 375:'] '            	;0
575  424   INIT_METHOD_CALL/112      ?0        16?13                376:'get_row'       	;0
576  424   DO_FCALL/60               $248=     ?0                   ?0                  	;0
577  424   FETCH_DIM_R/81            $249=     $248                 378:'stream_display_name'	;0
578  424   CONCAT/8                  #250=     #247                 $249                	;0
579  424   CONCAT/8                  #251=     #250                 379:'</option>'     	;0
580  424   ECHO/40                   ?0        #251                 ?0                  	;0
581  427   ECHO/40                   ?0        380:'                                                        </select>
													</div>
                                                    <div class="col-md-2">
                                                        <a href="javascript: void(0);" onClick="clearTitle();" class="btn btn-warning" style="width: 100%">Clear</a>
                                                    </div>
												</div>
											</div>
										</div> 
										<ul class="list-inline wizard mb-0">
											<li class="prevb list-inline-item">
												<a href="javascript: void(0);" class="btn btn-secondary">Previous</a>
											</li>
											<li class="nextb list-inline-item float-right">
												<a href="javascript: void(0);" class="btn btn-secondary">Next</a>
											</li>
										</ul>
									</div>
									' ?0                  	;0
582  428   GOTO/253                  ?0        ?757                 ?381                	;0
583  430   ECHO/40                   ?0        382:'0'              ?0                  	;0
584  431   GOTO/253                  ?0        ?587                 ?383                	;0
585  433   FETCH_DIM_R/81            $252=     16?2                 384:'tv_archive_duration'	;0
586  433   ECHO/40                   ?0        $252                 ?0                  	;0
587  435   GOTO/253                  ?0        ?682                 ?385                	;0
588  437   ECHO/40                   ?0        386:'" id="xui-epg">
                                                        <div class="form-group row mb-4">
                                                            <label class="col-md-3 col-form-label" for="epg_api_name">Channel Name</label>
                                                            <div class="col-md-5">
                                                                <input readonly id="epg_api_name" name="epg_api_name" type="text" class="form-control" value="' ?0                  	;0
589  438   ISSET_ISEMPTY_CV/197      #253=     16?2                 ?0                  	;33554432
590  438   JMPZ_EX/46                #253=     #253                 ?593                	;0	>>593
591  438   FETCH_DIM_R/81            $254=     16?2                 387:'epg_api'       	;0
592  438   BOOL/52                   #253=     $254                 ?0                  	;0
593  438   BOOL_NOT/13               #255=     #253                 ?0                  	;0	<<590
594  438   JMPZ/43                   ?0        #255                 ?596                	;0	>>596
595  439   GOTO/253                  ?0        ?598                 ?388                	;0
596  441   FETCH_DIM_R/81            $256=     16?2                 389:'epg_api_name'  	;0	<<594
597  441   ECHO/40                   ?0        $256                 ?0                  	;0
598  443   ECHO/40                   ?0        390:'">
                                                            </div>
                                                            <div class="col-md-2">
                                                                <input readonly id="epg_api_id" name="epg_api_id" type="text" class="form-control text-center" value="' ?0                  	;0
599  444   GOTO/253                  ?0        ?772                 ?391                	;0
600  446   FE_RESET_R/77             $257=     16?27                ?638                	;0
601  446   FE_FETCH_R/78             ?0        $257                 16?28               	;638	>>638	<<637
602  447   NOP/0                     ?0        ?0                   ?0                  	;1
603  447   GOTO/253                  ?0        ?615                 ?392                	;0
604  450   ECHO/40                   ?0        393:'value="'        ?0                  	;0
605  451   FETCH_DIM_R/81            $258=     16?28                394:'profile_id'    	;0
606  451   ECHO/40                   ?0        $258                 ?0                  	;0
607  452   ECHO/40                   ?0        395:'">'             ?0                  	;0
608  453   FETCH_DIM_R/81            $259=     16?28                396:'profile_name'  	;0
609  453   ECHO/40                   ?0        $259                 ?0                  	;0
610  454   NOP/0                     ?0        ?0                   ?0                  	;1
611  454   GOTO/253                  ?0        ?612                 ?397                	;0
612  456   ECHO/40                   ?0        398:'</option>
															' ?0                  	;0
613  458   NOP/0                     ?0        ?0                   ?0                  	;1
614  458   GOTO/253                  ?0        ?637                 ?399                	;0
615  460   ECHO/40                   ?0        400:'															<option ' ?0                  	;0
616  461   ISSET_ISEMPTY_CV/197      #260=     16?2                 ?0                  	;33554432
617  461   BOOL_NOT/13               #261=     #260                 ?0                  	;0
618  461   JMPZ/43                   ?0        #261                 ?621                	;0	>>621
619  462   NOP/0                     ?0        ?0                   ?0                  	;1
620  462   GOTO/253                  ?0        ?604                 ?401                	;0
621  464   INIT_FCALL_BY_NAME/59     ?0        ?0                   402:'intval'        	;1	<<618
622  464   FETCH_DIM_FUNC_ARG/93     $262=     16?2                 404:'transcode_profile_id'	;1
623  464   SEND_VAR_EX/66            ?80       $262                 ?1                  	;0
624  464   DO_FCALL_BY_NAME/131      $263=     ?0                   ?0                  	;0
625  464   INIT_FCALL_BY_NAME/59     ?0        ?0                   405:'intval'        	;1
626  464   FETCH_DIM_FUNC_ARG/93     $264=     16?28                407:'profile_id'    	;1
627  464   SEND_VAR_EX/66            ?80       $264                 ?1                  	;0
628  464   DO_FCALL_BY_NAME/131      $265=     ?0                   ?0                  	;0
629  464   IS_EQUAL/17               #266=     $263                 $265                	;0
630  464   BOOL_NOT/13               #267=     #266                 ?0                  	;0
631  464   JMPZ/43                   ?0        #267                 ?634                	;0	>>634
632  465   NOP/0                     ?0        ?0                   ?0                  	;1
633  465   GOTO/253                  ?0        ?635                 ?408                	;0
634  467   ECHO/40                   ?0        409:'selected '      ?0                  	;0	<<631
635  469   NOP/0                     ?0        ?0                   ?0                  	;1
636  469   GOTO/253                  ?0        ?604                 ?410                	;0
637  470   JMP/42                    ?0        ?601                 ?0                  	;0	>>601
638  470   FE_FREE/127               ?0        $257                 ?0                  	;0	<<600
639  473   ECHO/40                   ?0        411:'														</select>
													</div>
												</div>
                                                <div class="form-group row mb-4">
													<label class="col-md-3 col-form-label" for="days_to_restart">Auto-Restart</label>
													<div class="col-md-7">
														' ?0                  	;0
640  474   ASSIGN/38                 ?226      16?12                412:array (
  'days' => 
  array (
  ),
  'at' => '06:00',
)	;0
641  475   ISSET_ISEMPTY_CV/197      #269=     16?2                 ?0                  	;33554432
642  475   BOOL_NOT/13               #270=     #269                 ?0                  	;0
643  475   JMPZ/43                   ?0        #270                 ?645                	;0	>>645
644  476   GOTO/253                  ?0        ?243                 ?413                	;0
645  478   GOTO/253                  ?0        ?190                 ?414                	;0	<<643
646  481   ECHO/40                   ?0        415:'" id="quick-search">
                                                        <div class="form-group row mb-4">
                                                            <label class="col-md-3 col-form-label" for="quick_search">Search EPG</label>
                                                            <div class="col-md-9">
                                                                <select id="quick_search" class="form-control" data-toggle="select2"></select>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="tab-pane' ?0                  	;0
647  482   ISSET_ISEMPTY_CV/197      #271=     16?2                 ?0                  	;33554432
648  482   JMPZ_EX/46                #271=     #271                 ?651                	;0	>>651
649  482   FETCH_DIM_R/81            $272=     16?2                 416:'epg_api'       	;0
650  482   BOOL/52                   #271=     $272                 ?0                  	;0
651  482   BOOL_NOT/13               #273=     #271                 ?0                  	;0	<<648
652  482   JMPZ/43                   ?0        #273                 ?654                	;0	>>654
653  483   GOTO/253                  ?0        ?655                 ?417                	;0
654  485   ECHO/40                   ?0        418:' active'        ?0                  	;0	<<652
655  487   GOTO/253                  ?0        ?588                 ?419                	;0
656  490   GOTO/253                  ?0        ?1121                ?420                	;0
657  492   INIT_FCALL_BY_NAME/59     ?0        ?0                   421:'b2Be0b935A31df18'	;1
658  492   FETCH_STATIC_PROP_FUNC_ARG/177 $274=     423:'rRequest'       424:'XUI'           	;1
659  492   FETCH_DIM_FUNC_ARG/93     $275=     $274                 426:'id'            	;1
660  492   SEND_VAR_EX/66            ?80       $275                 ?1                  	;0
661  492   DO_FCALL_BY_NAME/131      $276=     ?0                   ?0                  	;0
662  492   ASSIGN/38                 ?235      16?3                 $276                	;0
663  493   INIT_FCALL_BY_NAME/59     ?0        ?0                   427:'b25F6f50dfa04EB7'	;1
664  493   FETCH_STATIC_PROP_FUNC_ARG/177 $278=     429:'rRequest'       430:'XUI'           	;1
665  493   FETCH_DIM_FUNC_ARG/93     $279=     $278                 432:'id'            	;1
666  493   SEND_VAR_EX/66            ?80       $279                 ?1                  	;0
667  493   DO_FCALL_BY_NAME/131      $280=     ?0                   ?0                  	;0
668  493   ASSIGN/38                 ?239      16?16                $280                	;0
669  494   GOTO/253                  ?0        ?344                 ?433                	;0
670  496   ISSET_ISEMPTY_CV/197      #282=     16?2                 ?0                  	;33554432
671  496   JMPZ/43                   ?0        #282                 ?673                	;0	>>673
672  497   GOTO/253                  ?0        ?675                 ?434                	;0
673  499   ASSIGN/38                 ?241      16?4                 435:array (
  0 => 
  array (
    0 => '',
  ),
)	;0	<<671
674  500   GOTO/253                  ?0        ?1305                ?436                	;0
675  502   INIT_FCALL_BY_NAME/59     ?0        ?0                   437:'json_decode'   	;2
676  502   FETCH_DIM_FUNC_ARG/93     $284=     16?2                 439:'external_push' 	;1
677  502   SEND_VAR_EX/66            ?80       $284                 ?1                  	;0
678  502   SEND_VAL_EX/116           ?96       440:true             ?2                  	;0
679  502   DO_FCALL_BY_NAME/131      $285=     ?0                   ?0                  	;0
680  502   ASSIGN/38                 ?244      16?4                 $285                	;0
681  503   GOTO/253                  ?0        ?1302                ?441                	;0
682  505   ECHO/40                   ?0        442:'">
														</select>
													</div>
                                                </div>
												<div class="form-group row mb-4">
                                                    <label class="col-md-3 col-form-label" for="vframes_server_id">Thumbnail Server</label>
													<div class="col-md-3">
														<select name="vframes_server_id" id="vframes_server_id" class="form-control" data-toggle="select2">
															<option value="0">Disabled</option>
															' ?0                  	;0
683  506   FE_RESET_R/77             $287=     16?9                 ?705                	;0
684  506   FE_FETCH_R/78             ?0        $287                 16?10               	;705	>>705	<<704
685  507   ECHO/40                   ?0        443:'															<option value="' ?0                  	;0
686  508   FETCH_DIM_R/81            $288=     16?10                444:'id'            	;0
687  508   ECHO/40                   ?0        $288                 ?0                  	;0
688  509   ECHO/40                   ?0        445:'"'              ?0                  	;0
689  510   ISSET_ISEMPTY_CV/197      #289=     16?2                 ?0                  	;33554432
690  510   JMPZ_EX/46                #289=     #289                 ?695                	;0	>>695
691  510   FETCH_DIM_R/81            $290=     16?2                 446:'vframes_server_id'	;0
692  510   FETCH_DIM_R/81            $291=     16?10                447:'id'            	;0
693  510   IS_EQUAL/17               #292=     $290                 $291                	;0
694  510   BOOL/52                   #289=     #292                 ?0                  	;0
695  510   BOOL_NOT/13               #293=     #289                 ?0                  	;0	<<690
696  510   JMPZ/43                   ?0        #293                 ?699                	;0	>>699
697  511   NOP/0                     ?0        ?0                   ?0                  	;1
698  511   GOTO/253                  ?0        ?700                 ?448                	;0
699  513   ECHO/40                   ?0        449:' selected'      ?0                  	;0	<<696
700  515   ECHO/40                   ?0        450:'>'              ?0                  	;0
701  516   FETCH_DIM_R/81            $294=     16?10                451:'server_name'   	;0
702  516   ECHO/40                   ?0        $294                 ?0                  	;0
703  517   ECHO/40                   ?0        452:'</option>
															' ?0                  	;0
704  518   JMP/42                    ?0        ?684                 ?0                  	;0	>>684
705  518   FE_FREE/127               ?0        $287                 ?0                  	;0	<<683
706  521   ECHO/40                   ?0        453:'														</select>
													</div>
													<label class="col-md-3 col-form-label" for="restart_on_edit">' ?0                  	;0
707  522   ISSET_ISEMPTY_DIM_OBJ/115 #295=     16?2                 454:'id'            	;33554432
708  522   JMPZ/43                   ?0        #295                 ?710                	;0	>>710
709  523   GOTO/253                  ?0        ?1119                ?455                	;0
710  525   GOTO/253                  ?0        ?1117                ?456                	;0	<<708
711  527   ECHO/40                   ?0        457:'checked '       ?0                  	;0
712  530   ECHO/40                   ?0        458:'data-plugin="switchery" class="js-switch" data-color="#039cfd"/>
													</div>
												</div>
												<div class="form-group row mb-4">
													<label class="col-md-3 col-form-label" for="direct_source">Direct Source <i title="Don\'t run source through XUI, just redirect instead." class="tooltip text-secondary far fa-circle"></i></label>
													<div class="col-md-3">
														<input name="direct_source" id="direct_source" type="checkbox" ' ?0                  	;0
713  531   ISSET_ISEMPTY_CV/197      #296=     16?2                 ?0                  	;33554432
714  531   BOOL_NOT/13               #297=     #296                 ?0                  	;0
715  531   JMPZ/43                   ?0        #297                 ?717                	;0	>>717
716  532   GOTO/253                  ?0        ?834                 ?459                	;0
717  534   GOTO/253                  ?0        ?828                 ?460                	;0	<<715
718  536   INCLUDE_OR_EVAL/73        ?256      461:'session.php'    ?0                  	;2	<<0
719  537   INCLUDE_OR_EVAL/73        ?257      462:'functions.php'  ?0                  	;2
720  538   INIT_FCALL_BY_NAME/59     ?0        ?0                   463:'e6D500E19634D513'	;0
721  538   DO_FCALL_BY_NAME/131      $300=     ?0                   ?0                  	;0
722  538   JMPZ/43                   ?0        $300                 ?724                	;0	>>724
723  539   GOTO/253                  ?0        ?726                 ?465                	;0
724  541   INIT_FCALL_BY_NAME/59     ?0        ?0                   466:'e72F42A93714ba87'	;0	<<722
725  541   DO_FCALL_BY_NAME/131      ?259      ?0                   ?0                  	;0
726  543   GOTO/253                  ?0        ?1132                ?468                	;0
727  546   INIT_FCALL_BY_NAME/59     ?0        ?0                   469:'htmlspecialchars'	;1
728  546   FETCH_DIM_FUNC_ARG/93     $302=     16?2                 471:'stream_icon'   	;1
729  546   SEND_VAR_EX/66            ?80       $302                 ?1                  	;0
730  546   DO_FCALL_BY_NAME/131      $303=     ?0                   ?0                  	;0
731  546   ECHO/40                   ?0        $303                 ?0                  	;0
732  548   ECHO/40                   ?0        472:'">
														<div class="input-group-append">
															<a href="javascript:void(0)" onclick="openImage(this)" class="btn btn-primary waves-effect waves-light"><i class="mdi mdi-eye"></i></a>
														</div>
													</div>
												</div>
												' ?0                  	;0
733  550   GOTO/253                  ?0        ?1211                ?473                	;0
734  553   FETCH_DIM_R/81            $304=     16?2                 474:'probesize_ondemand'	;0
735  553   ECHO/40                   ?0        $304                 ?0                  	;0
736  555   ECHO/40                   ?0        475:'">
													</div>
                                                    <label class="col-md-4 col-form-label" for="delay_minutes">Minute Delay <i title="Delay stream by X minutes. Will not work with on demand streams." class="tooltip text-secondary far fa-circle"></i></label>
													<div class="col-md-2">
														<input type="text" class="form-control text-center" id="delay_minutes" name="delay_minutes" value="' ?0                  	;0
737  556   ISSET_ISEMPTY_CV/197      #305=     16?2                 ?0                  	;33554432
738  556   JMPZ/43                   ?0        #305                 ?740                	;0	>>740
739  557   GOTO/253                  ?0        ?177                 ?476                	;0
740  559   GOTO/253                  ?0        ?175                 ?477                	;0	<<738
741  562   ECHO/40                   ?0        478:'Import Streams' ?0                  	;0
742  564   GOTO/253                  ?0        ?991                 ?479                	;0
743  566   GOTO/253                  ?0        ?989                 ?480                	;0
744  568   FETCH_DIM_R/81            $306=     16?2                 481:'fps_threshold' 	;0
745  568   ECHO/40                   ?0        $306                 ?0                  	;0
746  570   ECHO/40                   ?0        482:'">
													</div>
												</div>
												<div class="form-group row mb-4">
													<label class="col-md-3 col-form-label" for="custom_sid">Custom Channel SID <i title="Here you can specify the SID of the channel in order to work with the epg on the enigma2 devices. You have to specify the code with the \':\' but without the first number, 1 or 4097 . Example: if we have this code:  \'1:0:1:13f:157c:13e:820000:0:0:0:2097\' then you have to add on this field:  \':0:1:13f:157c:13e:820000:0:0:0:" class="tooltip text-secondary far fa-circle"></i></label>
													<div class="col-md-9">
														<input type="text" class="form-control" id="custom_sid" name="custom_sid" value="' ?0                  	;0
747  571   ISSET_ISEMPTY_CV/197      #307=     16?2                 ?0                  	;33554432
748  571   BOOL_NOT/13               #308=     #307                 ?0                  	;0
749  571   JMPZ/43                   ?0        #308                 ?751                	;0	>>751
750  572   GOTO/253                  ?0        ?483                 ?483                	;0
751  574   INIT_FCALL_BY_NAME/59     ?0        ?0                   484:'htmlspecialchars'	;1	<<749
752  574   FETCH_DIM_FUNC_ARG/93     $309=     16?2                 486:'custom_sid'    	;1
753  574   SEND_VAR_EX/66            ?80       $309                 ?1                  	;0
754  574   DO_FCALL_BY_NAME/131      $310=     ?0                   ?0                  	;0
755  574   ECHO/40                   ?0        $310                 ?0                  	;0
756  575   GOTO/253                  ?0        ?483                 ?487                	;0
757  577   FETCH_STATIC_PROP_IS/176  $311=     488:'rRequest'       489:'XUI'           	;0
758  577   ISSET_ISEMPTY_DIM_OBJ/115 #312=     $311                 491:'import'        	;33554432
759  577   JMPZ/43                   ?0        #312                 ?761                	;0	>>761
760  578   GOTO/253                  ?0        ?144                 ?492                	;0
761  580   ECHO/40                   ?0        493:'									<div class="tab-pane" id="stream-map">
										<div class="row">
											<div class="col-12">
                                                <div class="alert bg-info text-white border-0" role="alert">
													Custom maps can only be applied to single source streams, if you have more than one and the active source changes, a custom map could prevent that source from working.
												</div>
                                                <table class="table table-striped table-borderless mb-4">
                                                    <thead>
                                                        <tr>
                                                            <th>Custom Map</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <td class="input-group">
                                                                <input type="text" class="form-control" id="custom_map" name="custom_map" value="' ?0                  	;0	<<759
762  581   ISSET_ISEMPTY_CV/197      #313=     16?2                 ?0                  	;33554432
763  581   BOOL_NOT/13               #314=     #313                 ?0                  	;0
764  581   JMPZ/43                   ?0        #314                 ?766                	;0	>>766
765  582   GOTO/253                  ?0        ?771                 ?494                	;0
766  584   INIT_FCALL_BY_NAME/59     ?0        ?0                   495:'htmlspecialchars'	;1	<<764
767  584   FETCH_DIM_FUNC_ARG/93     $315=     16?2                 497:'custom_map'    	;1
768  584   SEND_VAR_EX/66            ?80       $315                 ?1                  	;0
769  584   DO_FCALL_BY_NAME/131      $316=     ?0                   ?0                  	;0
770  584   ECHO/40                   ?0        $316                 ?0                  	;0
771  586   GOTO/253                  ?0        ?958                 ?498                	;0
772  588   ISSET_ISEMPTY_CV/197      #317=     16?2                 ?0                  	;33554432
773  588   JMPZ_EX/46                #317=     #317                 ?776                	;0	>>776
774  588   FETCH_DIM_R/81            $318=     16?2                 499:'epg_api'       	;0
775  588   BOOL/52                   #317=     $318                 ?0                  	;0
776  588   BOOL_NOT/13               #319=     #317                 ?0                  	;0	<<773
777  588   JMPZ/43                   ?0        #319                 ?779                	;0	>>779
778  589   GOTO/253                  ?0        ?781                 ?500                	;0
779  591   FETCH_DIM_R/81            $320=     16?2                 501:'channel_id'    	;0	<<777
780  591   ECHO/40                   ?0        $320                 ?0                  	;0
781  593   ECHO/40                   ?0        502:'">
                                                            </div>
                                                            <div class="col-md-2">
                                                                <button type="button" style="width: 100%" class="btn btn-info waves-effect waves-light btn-xl" id="epg-api"><i class="mdi mdi-magnify"></i></button>
                                                            </div>
                                                        </div>
                                                        <div class="table-responsive" id="table-epg-data" style="display: none; padding-bottom: 30px;">
                                                            <table class="table table-striped table-borderless mb-0">
                                                                <thead>
                                                                    <tr>
                                                                        <th class="text-center">Time</th>
                                                                        <th>Title</th>
                                                                        <th>Description</th>
                                                                    </tr>
                                                                </thead>
                                                                <tbody></tbody>
                                                            </table>
                                                        </div>
                                                    </div>
                                                    <div class="tab-pane' ?0                  	;0
782  594   ISSET_ISEMPTY_CV/197      #321=     16?2                 ?0                  	;33554432
783  594   JMPZ_EX/46                #321=     #321                 ?787                	;0	>>787
784  594   FETCH_DIM_R/81            $322=     16?2                 503:'epg_api'       	;0
785  594   BOOL_NOT/13               #323=     $322                 ?0                  	;0
786  594   BOOL/52                   #321=     #323                 ?0                  	;0
787  594   BOOL_NOT/13               #324=     #321                 ?0                  	;0	<<783
788  594   JMPZ/43                   ?0        #324                 ?790                	;0	>>790
789  595   GOTO/253                  ?0        ?1019                ?504                	;0
790  597   GOTO/253                  ?0        ?1018                ?505                	;0	<<788
791  600   ECHO/40                   ?0        506:'                                                                </select>
                                                            </div>
                                                        </div>
                                                        <div class="form-group row mb-4">
                                                            <label class="col-md-4 col-form-label" for="epg_lang">EPG Language</label>
                                                            <div class="col-md-4">
                                                                <select name="epg_lang" id="epg_lang" class="form-control" data-toggle="select2">
                                                                ' ?0                  	;0
792  601   ISSET_ISEMPTY_CV/197      #325=     16?2                 ?0                  	;33554432
793  601   BOOL_NOT/13               #326=     #325                 ?0                  	;0
794  601   JMPZ/43                   ?0        #326                 ?796                	;0	>>796
795  602   GOTO/253                  ?0        ?1125                ?507                	;0
796  604   INIT_FCALL_BY_NAME/59     ?0        ?0                   508:'json_decode'   	;2	<<794
797  604   INIT_FCALL_BY_NAME/59     ?0        ?0                   510:'intval'        	;1
798  604   FETCH_DIM_FUNC_ARG/93     $327=     16?2                 512:'epg_id'        	;1
799  604   SEND_VAR_EX/66            ?80       $327                 ?1                  	;0
800  604   DO_FCALL_BY_NAME/131      $328=     ?0                   ?0                  	;0
801  604   FETCH_DIM_FUNC_ARG/93     $329=     16?0                 $328                	;1
802  604   FETCH_DIM_FUNC_ARG/93     $330=     $329                 513:'data'          	;1
803  604   SEND_VAR_EX/66            ?80       $330                 ?1                  	;0
804  604   SEND_VAL_EX/116           ?96       514:true             ?2                  	;0
805  604   DO_FCALL_BY_NAME/131      $331=     ?0                   ?0                  	;0
806  604   FETCH_DIM_R/81            $332=     16?2                 515:'channel_id'    	;0
807  604   FETCH_DIM_R/81            $333=     $331                 $332                	;0
808  604   FETCH_DIM_R/81            $334=     $333                 516:'langs'         	;0
809  604   FE_RESET_R/77             $335=     $334                 ?826                	;0
810  604   FE_FETCH_R/78             #336=     $335                 16?29               	;826	>>826	<<825
811  604   ASSIGN/38                 ?295      16?30                #336                	;0
812  605   ECHO/40                   ?0        517:'                                                                    <option value="' ?0                  	;0
813  606   ECHO/40                   ?0        16?29                ?0                  	;0
814  607   ECHO/40                   ?0        518:'"'              ?0                  	;0
815  608   FETCH_DIM_R/81            $338=     16?2                 519:'epg_lang'      	;0
816  608   IS_EQUAL/17               #339=     $338                 16?29               	;0
817  608   BOOL_NOT/13               #340=     #339                 ?0                  	;0
818  608   JMPZ/43                   ?0        #340                 ?821                	;0	>>821
819  609   NOP/0                     ?0        ?0                   ?0                  	;1
820  609   GOTO/253                  ?0        ?822                 ?520                	;0
821  611   ECHO/40                   ?0        521:' selected'      ?0                  	;0	<<818
822  613   ECHO/40                   ?0        522:'>'              ?0                  	;0
823  614   ECHO/40                   ?0        16?29                ?0                  	;0
824  615   ECHO/40                   ?0        523:'</option>
                                                                    ' ?0                  	;0
825  616   JMP/42                    ?0        ?810                 ?0                  	;0	>>810
826  616   FE_FREE/127               ?0        $335                 ?0                  	;0	<<809
827  619   GOTO/253                  ?0        ?1125                ?524                	;0
828  621   FETCH_DIM_R/81            $341=     16?2                 525:'direct_source' 	;0
829  621   IS_EQUAL/17               #342=     $341                 526:1               	;0
830  621   BOOL_NOT/13               #343=     #342                 ?0                  	;0
831  621   JMPZ/43                   ?0        #343                 ?833                	;0	>>833
832  622   GOTO/253                  ?0        ?834                 ?527                	;0
833  624   ECHO/40                   ?0        528:'checked '       ?0                  	;0	<<831
834  627   ECHO/40                   ?0        529:'data-plugin="switchery" class="js-switch" data-color="#039cfd"/>
													</div>
                                                    <label class="col-md-4 col-form-label" for="direct_proxy">Direct Stream <i title="When using direct source, hide the original URL by proxying the live stream through your servers via UDP. MPEG-TS and HLS is supported as an input format, however only MPEG-TS is supported as an output format to clients.<br/><br/>Experimental! This may not work for all streams." class="tooltip text-secondary far fa-circle"></i></label>
													<div class="col-md-2">
														<input name="direct_proxy" id="direct_proxy" type="checkbox" ' ?0                  	;0
835  628   GOTO/253                  ?0        ?1106                ?530                	;0
836  631   ECHO/40                   ?0        531:'														</select>
                                                        <div id="bouquet_create" class="alert bg-dark text-white border-0 mt-2 mb-0" role="alert" style="display: none;">
                                                            <strong>New Bouquets:</strong> <span id="bouquet_new"></span>
                                                        </div>
													</div>
												</div>
												<div class="form-group row mb-4">
													<label class="col-md-3 col-form-label" for="notes">Notes</label>
													<div class="col-md-9">
														<textarea id="notes" name="notes" class="form-control" rows="3" placeholder="">' ?0                  	;0
837  632   ISSET_ISEMPTY_CV/197      #344=     16?2                 ?0                  	;33554432
838  632   BOOL_NOT/13               #345=     #344                 ?0                  	;0
839  632   JMPZ/43                   ?0        #345                 ?841                	;0	>>841
840  633   GOTO/253                  ?0        ?846                 ?532                	;0
841  635   INIT_FCALL_BY_NAME/59     ?0        ?0                   533:'htmlspecialchars'	;1	<<839
842  635   FETCH_DIM_FUNC_ARG/93     $346=     16?2                 535:'notes'         	;1
843  635   SEND_VAR_EX/66            ?80       $346                 ?1                  	;0
844  635   DO_FCALL_BY_NAME/131      $347=     ?0                   ?0                  	;0
845  635   ECHO/40                   ?0        $347                 ?0                  	;0
846  637   GOTO/253                  ?0        ?444                 ?536                	;0
847  640   ECHO/40                   ?0        537:' action="#" method="POST" id="stream_form" data-parsley-validate="">
							' ?0                  	;0
848  641   ISSET_ISEMPTY_DIM_OBJ/115 #348=     16?2                 538:'id'            	;33554432
849  641   BOOL_NOT/13               #349=     #348                 ?0                  	;0
850  641   JMPZ/43                   ?0        #349                 ?852                	;0	>>852
851  642   GOTO/253                  ?0        ?966                 ?539                	;0
852  644   ECHO/40                   ?0        540:'							<input type="hidden" name="edit" value="' ?0                  	;0	<<850
853  645   FETCH_DIM_R/81            $350=     16?2                 541:'id'            	;0
854  645   ECHO/40                   ?0        $350                 ?0                  	;0
855  646   GOTO/253                  ?0        ?965                 ?542                	;0
856  649   ASSIGN/38                 ?309      16?19                543:array (
  0 => 
  array (
    'id' => 'source',
    'parent' => '#',
    'text' => '<strong class=\'btn btn-success waves-effect waves-light btn-xs\'>Online</strong>',
    'icon' => 'mdi mdi-play',
    'state' => 
    array (
      'opened' => true,
    ),
  ),
  1 => 
  array (
    'id' => 'offline',
    'parent' => '#',
    'text' => '<strong class=\'btn btn-secondary waves-effect waves-light btn-xs\'>Offline</strong>',
    'icon' => 'mdi mdi-stop',
    'state' => 
    array (
      'opened' => true,
    ),
  ),
)	;0
857  650   ASSIGN/38                 $352=     16?32                544:array (
)       	;0
858  650   ASSIGN/38                 ?311      16?31                $352                	;0
859  651   FE_RESET_R/77             $354=     16?9                 ?870                	;0
860  651   FE_FETCH_R/78             ?0        $354                 16?10               	;870	>>870	<<869
861  652   FETCH_DIM_R/81            $355=     16?10                545:'id'            	;0
862  652   FETCH_DIM_R/81            $357=     16?10                546:'video_devices' 	;0
863  652   ASSIGN_DIM/147            ?314      16?32                $355                	;0
864  652   OP_DATA/137               ?0        $357                 ?0                  	;0
865  653   FETCH_DIM_R/81            $358=     16?10                547:'id'            	;0
866  653   FETCH_DIM_R/81            $360=     16?10                548:'audio_devices' 	;0
867  653   ASSIGN_DIM/147            ?317      16?31                $358                	;0
868  653   OP_DATA/137               ?0        $360                 ?0                  	;0
869  654   JMP/42                    ?0        ?860                 ?0                  	;0	>>860
870  654   FE_FREE/127               ?0        $354                 ?0                  	;0	<<859
871  657   GOTO/253                  ?0        ?1187                ?549                	;0
872  659   BOOL_NOT/13               #361=     16?2                 ?0                  	;0
873  659   JMPNZ_EX/47               #361=     #361                 ?877                	;0	>>877
874  659   FETCH_DIM_R/81            $362=     16?2                 550:'type'          	;0
875  659   IS_NOT_EQUAL/18           #363=     $362                 551:1               	;0
876  659   BOOL/52                   #361=     #363                 ?0                  	;0
877  659   BOOL_NOT/13               #364=     #361                 ?0                  	;0	<<873
878  659   JMPZ/43                   ?0        #364                 ?880                	;0	>>880
879  660   GOTO/253                  ?0        ?882                 ?552                	;0
880  662   INIT_FCALL_BY_NAME/59     ?0        ?0                   553:'E72f42a93714ba87'	;0	<<878
881  662   DO_FCALL_BY_NAME/131      ?323      ?0                   ?0                  	;0
882  665   INIT_FCALL_BY_NAME/59     ?0        ?0                   555:'E91c9873459EC2Ba'	;0
883  665   DO_FCALL_BY_NAME/131      $366=     ?0                   ?0                  	;0
884  665   ASSIGN/38                 ?325      16?0                 $366                	;0
885  666   GOTO/253                  ?0        ?1166                ?557                	;0
886  668   FETCH_DIM_R/81            $368=     16?2                 558:'stream_all'    	;0
887  668   IS_EQUAL/17               #369=     $368                 559:1               	;0
888  668   BOOL_NOT/13               #370=     #369                 ?0                  	;0
889  668   JMPZ/43                   ?0        #370                 ?891                	;0	>>891
890  669   GOTO/253                  ?0        ?892                 ?560                	;0
891  671   ECHO/40                   ?0        561:'checked '       ?0                  	;0	<<889
892  674   ECHO/40                   ?0        562:'data-plugin="switchery" class="js-switch" data-color="#039cfd"/>
													</div>
													<label class="col-md-4 col-form-label" for="allow_record">Allow Recording</label>
													<div class="col-md-2">
														<input name="allow_record" id="allow_record" type="checkbox" ' ?0                  	;0
893  675   GOTO/253                  ?0        ?333                 ?563                	;0
894  677   INIT_FCALL_BY_NAME/59     ?0        ?0                   564:'htmlspecialchars'	;1
895  677   FETCH_DIM_FUNC_ARG/93     $371=     16?3                 566:1               	;1
896  677   FETCH_DIM_FUNC_ARG/93     $372=     $371                 567:'value'         	;1
897  677   SEND_VAR_EX/66            ?80       $372                 ?1                  	;0
898  677   DO_FCALL_BY_NAME/131      $373=     ?0                   ?0                  	;0
899  677   ECHO/40                   ?0        $373                 ?0                  	;0
900  679   ECHO/40                   ?0        568:'">
													</div>
												</div>
												<div class="form-group row mb-4">
													<label class="col-md-3 col-form-label" for="http_proxy">HTTP Proxy <i title="Format: ip:port" class="tooltip text-secondary far fa-circle"></i></label>
													<div class="col-md-9">
														<input type="text" class="form-control" id="http_proxy" name="http_proxy" value="' ?0                  	;0
901  680   ISSET_ISEMPTY_DIM_OBJ/115 #374=     16?3                 569:2               	;33554432
902  680   JMPZ/43                   ?0        #374                 ?904                	;0	>>904
903  681   GOTO/253                  ?0        ?91                  ?570                	;0
904  683   INIT_FCALL_BY_NAME/59     ?0        ?0                   571:'htmlspecialchars'	;1	<<902
905  683   FETCH_DIM_FUNC_ARG/93     $375=     16?14                573:'proxy'         	;1
906  683   FETCH_DIM_FUNC_ARG/93     $376=     $375                 574:'argument_default_value'	;1
907  683   SEND_VAR_EX/66            ?80       $376                 ?1                  	;0
908  683   DO_FCALL_BY_NAME/131      $377=     ?0                   ?0                  	;0
909  683   ECHO/40                   ?0        $377                 ?0                  	;0
910  684   GOTO/253                  ?0        ?90                  ?575                	;0
911  687   ASSIGN/38                 ?336      16?8                 576:0               	;0
912  688   FE_RESET_R/77             $379=     16?11                ?928                	;0
913  688   FE_FETCH_R/78             ?0        $379                 16?7                	;928	>>928	<<927
914  689   POST_INC/36               #380=     16?8                 ?0                  	;0
915  689   FREE/70                   ?0        #380                 ?0                  	;0
916  690   ECHO/40                   ?0        577:'                                                        <tr class="stream_info">
                                                            <td class="input-group">
                                                                <div class="input-group-append">
                                                                    <button class="btn btn-secondary waves-effect waves-light btn-fixed-xs" onClick="moveUp(this);" type="button"><i class="mdi mdi-chevron-up"></i></button>
                                                                    <button class="btn btn-secondary waves-effect waves-light btn-fixed-xs" onClick="moveDown(this);" type="button"><i class="mdi mdi-chevron-down"></i></button>
                                                                </div>
                                                                <input type="text" id="stream_source" name="stream_source[]" class="form-control" value="' ?0                  	;0
917  691   INIT_FCALL_BY_NAME/59     ?0        ?0                   578:'htmlspecialchars'	;1
918  691   SEND_VAR_EX/66            ?80       16?7                 ?1                  	;0
919  691   DO_FCALL_BY_NAME/131      $381=     ?0                   ?0                  	;0
920  691   ECHO/40                   ?0        $381                 ?0                  	;0
921  692   ECHO/40                   ?0        580:'">
                                                                <div class="input-group-append">
                                                                    <button class="btn btn-danger waves-effect waves-light btn-fixed-xs" onClick="removeStream(this);" type="button"><i class="mdi mdi-close"></i></button>
                                                                </div>
                                                            </td>
                                                            ' ?0                  	;0
922  693   JMPZ/43                   ?0        16?15                ?925                	;0	>>925
923  694   NOP/0                     ?0        ?0                   ?0                  	;1
924  694   GOTO/253                  ?0        ?926                 ?581                	;0
925  696   ECHO/40                   ?0        582:'                                                            <td class="text-center" id="stream_info" style="width:380px;">
                                                                <table class=\'table-data\' style=\'width: 380px;\' align=\'center\'><tbody><tr><td colspan=\'5\'>Not scanned</td></tr></tbody></table>
                                                            </td>
                                                            ' ?0                  	;0	<<922
926  698   ECHO/40                   ?0        583:'                                                        </tr>
                                                        ' ?0                  	;0
927  699   JMP/42                    ?0        ?913                 ?0                  	;0	>>913
928  699   FE_FREE/127               ?0        $379                 ?0                  	;0	<<912
929  702   ECHO/40                   ?0        584:'                                                    </tbody>
                                                </table>
												<div id="capture_form" style="display: none;">
													<div class="form-group row mb-4">
														<label class="col-md-3 col-form-label" for="capture_server_id">Capture Server</label>
														<div class="col-md-9">
															<select name="capture_server_id" id="capture_server_id" class="form-control" data-toggle="select2">
																' ?0                  	;0
930  703   GOTO/253                  ?0        ?305                 ?585                	;0
931  705   INIT_FCALL_BY_NAME/59     ?0        ?0                   586:'intval'        	;1
932  705   FETCH_DIM_FUNC_ARG/93     $382=     16?2                 588:'transcode_profile_id'	;1
933  705   SEND_VAR_EX/66            ?80       $382                 ?1                  	;0
934  705   DO_FCALL_BY_NAME/131      $383=     ?0                   ?0                  	;0
935  705   IS_EQUAL/17               #384=     $383                 589:0               	;0
936  705   BOOL_NOT/13               #385=     #384                 ?0                  	;0
937  705   JMPZ/43                   ?0        #385                 ?939                	;0	>>939
938  706   GOTO/253                  ?0        ?940                 ?590                	;0
939  708   ECHO/40                   ?0        591:'selected '      ?0                  	;0	<<937
940  711   ECHO/40                   ?0        592:'value="0">Transcoding Disabled</option>
															' ?0                  	;0
941  712   GOTO/253                  ?0        ?600                 ?593                	;0
942  714   ECHO/40                   ?0        594:'checked '       ?0                  	;0
943  715   GOTO/253                  ?0        ?79                  ?595                	;0
944  717   FETCH_DIM_R/81            $386=     16?2                 596:'gen_timestamps'	;0
945  717   IS_EQUAL/17               #387=     $386                 597:1               	;0
946  717   BOOL_NOT/13               #388=     #387                 ?0                  	;0
947  717   JMPZ/43                   ?0        #388                 ?949                	;0	>>949
948  718   GOTO/253                  ?0        ?79                  ?598                	;0
949  720   ECHO/40                   ?0        599:'checked '       ?0                  	;0	<<947
950  721   GOTO/253                  ?0        ?79                  ?600                	;0
951  723   ECHO/40                   ?0        601:'checked '       ?0                  	;0
952  726   ECHO/40                   ?0        602:'data-plugin="switchery" class="js-switch" data-color="#039cfd"/>
													</div>
												</div>
												<div class="form-group row mb-4">
													<label class="col-md-3 col-form-label" for="stream_all">Stream All Codecs <i title="This option will stream all codecs from your stream. Some streams have more than one audio/video/subtitles channels." class="tooltip text-secondary far fa-circle"></i></label>
													<div class="col-md-3">
														<input name="stream_all" id="stream_all" type="checkbox" ' ?0                  	;0
953  727   ISSET_ISEMPTY_CV/197      #389=     16?2                 ?0                  	;33554432
954  727   BOOL_NOT/13               #390=     #389                 ?0                  	;0
955  727   JMPZ/43                   ?0        #390                 ?957                	;0	>>957
956  728   GOTO/253                  ?0        ?892                 ?603                	;0
957  730   GOTO/253                  ?0        ?886                 ?604                	;0	<<955
958  732   ECHO/40                   ?0        605:'">
                                                                <div class="input-group-append">
                                                                    <button class="btn btn-primary waves-effect waves-light" id="load_maps" type="button"><i class="mdi mdi-magnify"></i></button>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                    </tbody>
                                                </table>
												<table id="datatable-map" class="table table-striped table-borderless mb-0">
													<thead>
														<tr>
															<th>#</th>
															<th>Type</th>
															<th>Information</th>
														</tr>
													</thead>
													<tbody></tbody>
												</table>
											</div> 
										</div> 
										<ul class="list-inline wizard mb-0">
											<li class="prevb list-inline-item">
												<a href="javascript: void(0);" class="btn btn-secondary">Previous</a>
											</li>
											<li class="nextb list-inline-item float-right">
												<a href="javascript: void(0);" class="btn btn-secondary">Next</a>
											</li>
										</ul>
									</div>
									<div class="tab-pane" id="epg-options">
										<div class="row">
											<div class="col-12">
                                                <ul class="nav nav-pills navtab-bg nav-justified">
                                                    <li class="nav-item">
                                                        <a href="#quick-search" data-toggle="tab" aria-expanded="true" class="nav-link' ?0                  	;0
959  733   ISSET_ISEMPTY_CV/197      #391=     16?2                 ?0                  	;33554432
960  733   JMPZ/43                   ?0        #391                 ?962                	;0	>>962
961  734   GOTO/253                  ?0        ?963                 ?606                	;0
962  736   ECHO/40                   ?0        607:' active'        ?0                  	;0	<<960
963  738   ECHO/40                   ?0        608:'">
                                                            Quick Search
                                                        </a>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a href="#xui-epg" id="tab-xui-epg" data-toggle="tab" aria-expanded="true" class="nav-link' ?0                  	;0
964  739   GOTO/253                  ?0        ?1398                ?609                	;0
965  741   ECHO/40                   ?0        610:'" />
							'   ?0                  	;0
966  743   ECHO/40                   ?0        611:'							<input type="hidden" name="server_tree_data" id="server_tree_data" value="" />
                            <input type="hidden" name="od_tree_data" id="od_tree_data" value="" />
                            <input type="hidden" name="epg_api" id="epg_api" value="' ?0                  	;0
967  744   ISSET_ISEMPTY_CV/197      #392=     16?2                 ?0                  	;33554432
968  744   JMPZ/43                   ?0        #392                 ?972                	;0	>>972
969  744   FETCH_DIM_R/81            $393=     16?2                 612:'epg_api'       	;0
970  744   QM_ASSIGN/22              #394=     $393                 ?0                  	;0
971  744   JMP/42                    ?0        ?973                 ?0                  	;0	>>973
972  744   QM_ASSIGN/22              #394=     613:0                ?0                  	;0	<<968
973  744   ECHO/40                   ?0        #394                 ?0                  	;0	<<971
974  745   ECHO/40                   ?0        614:'" />
                            <input type="hidden" name="external_push" id="external_push" value="" />
                            <input type="hidden" name="bouquet_create_list" id="bouquet_create_list" value="" />
                            <input type="hidden" name="category_create_list" id="category_create_list" value="" />
							<div id="basicwizard">
								<ul class="nav nav-pills bg-light nav-justified form-wizard-header mb-4">
									<li class="nav-item">
										<a href="#stream-details" data-toggle="tab" class="nav-link rounded-0 pt-2 pb-2"> 
											<i class="mdi mdi-account-card-details-outline mr-1"></i>
											<span class="d-none d-sm-inline">Details</span>
										</a>
									</li>
                                    ' ?0                  	;0
975  746   GOTO/253                  ?0        ?61                  ?615                	;0
976  749   ECHO/40                   ?0        616:'											</span>
											<li class="list-inline-item float-right">
												<!--<a onClick="toggleCapture();" class="btn btn-info btn-pointer">Toggle Mode</a>-->
												<a href="javascript: void(0);" class="btn btn-secondary nextb">Next</a>
											</li>
										</ul>
                                    </div>
                                    ' ?0                  	;0
977  751   ECHO/40                   ?0        617:'									<div class="tab-pane" id="advanced-options">
										<div class="row">
											<div class="col-12">
												<div class="form-group row mb-4">
													<label class="col-md-3 col-form-label" for="gen_timestamps">Generate PTS <i title="Allow FFmpeg to generate presentation timestamps for you to achieve better synchronization with the stream codecs. In some streams this can cause de-sync." class="tooltip text-secondary far fa-circle"></i></label>
													<div class="col-md-3">
														<input name="gen_timestamps" id="gen_timestamps" type="checkbox" ' ?0                  	;0
978  752   ISSET_ISEMPTY_CV/197      #395=     16?2                 ?0                  	;33554432
979  752   JMPZ/43                   ?0        #395                 ?981                	;0	>>981
980  753   GOTO/253                  ?0        ?944                 ?618                	;0
981  755   GOTO/253                  ?0        ?942                 ?619                	;0	<<979
982  757   ECHO/40                   ?0        620:' active'        ?0                  	;0
983  759   ECHO/40                   ?0        621:'">
                                                            XMLTV EPG
                                                        </a>
                                                    </li>
                                                </ul>
                                                <div class="tab-content" style="padding-top: 30px;">
                                                    <div class="tab-pane' ?0                  	;0
984  760   ISSET_ISEMPTY_CV/197      #396=     16?2                 ?0                  	;33554432
985  760   JMPZ/43                   ?0        #396                 ?987                	;0	>>987
986  761   GOTO/253                  ?0        ?646                 ?622                	;0
987  763   ECHO/40                   ?0        623:' active'        ?0                  	;0	<<985
988  764   GOTO/253                  ?0        ?646                 ?624                	;0
989  766   FETCH_DIM_R/81            $397=     16?2                 625:'stream_display_name'	;0
990  766   ECHO/40                   ?0        $397                 ?0                  	;0
991  768   ECHO/40                   ?0        626:'</h4>
				</div>
			</div>
		</div>     
		<div class="row">
			<div class="col-xl-12">
				<div class="card">
					<div class="card-body">
						<form' ?0                  	;0
992  769   FETCH_STATIC_PROP_IS/176  $398=     627:'rRequest'       628:'XUI'           	;0
993  769   ISSET_ISEMPTY_DIM_OBJ/115 #399=     $398                 630:'import'        	;33554432
994  769   BOOL_NOT/13               #400=     #399                 ?0                  	;0
995  769   JMPZ/43                   ?0        #400                 ?997                	;0	>>997
996  770   GOTO/253                  ?0        ?847                 ?631                	;0
997  772   ECHO/40                   ?0        632:' enctype="multipart/form-data"' ?0                  	;0	<<995
998  773   GOTO/253                  ?0        ?847                 ?633                	;0
999  775   ISSET_ISEMPTY_DIM_OBJ/115 #401=     16?3                 634:17              	;33554432
1000 775   JMPZ/43                   ?0        #401                 ?1002               	;0	>>1002
1001 776   GOTO/253                  ?0        ?1009                ?635                	;0
1002 778   INIT_FCALL_BY_NAME/59     ?0        ?0                   636:'htmlspecialchars'	;1	<<1000
1003 778   FETCH_DIM_FUNC_ARG/93     $402=     16?14                638:'cookie'        	;1
1004 778   FETCH_DIM_FUNC_ARG/93     $403=     $402                 639:'argument_default_value'	;1
1005 778   SEND_VAR_EX/66            ?80       $403                 ?1                  	;0
1006 778   DO_FCALL_BY_NAME/131      $404=     ?0                   ?0                  	;0
1007 778   ECHO/40                   ?0        $404                 ?0                  	;0
1008 779   GOTO/253                  ?0        ?277                 ?640                	;0
1009 781   INIT_FCALL_BY_NAME/59     ?0        ?0                   641:'htmlspecialchars'	;1
1010 781   FETCH_DIM_FUNC_ARG/93     $405=     16?3                 643:17              	;1
1011 781   FETCH_DIM_FUNC_ARG/93     $406=     $405                 644:'value'         	;1
1012 781   SEND_VAR_EX/66            ?80       $406                 ?1                  	;0
1013 781   DO_FCALL_BY_NAME/131      $407=     ?0                   ?0                  	;0
1014 781   ECHO/40                   ?0        $407                 ?0                  	;0
1015 782   GOTO/253                  ?0        ?277                 ?645                	;0
1016 784   ECHO/40                   ?0        646:'</label>
													<div class="col-md-3">
														<input name="restart_on_edit" id="restart_on_edit" type="checkbox" data-plugin="switchery" class="js-switch" data-color="#039cfd"/>
													</div>
												</div>
											</div> 
										</div> 
										<ul class="list-inline wizard mb-0">
											<li class="prevb list-inline-item">
												<a href="javascript: void(0);" class="btn btn-secondary">Previous</a>
											</li>
                                            <li class="list-inline-item float-right">
												<input name="submit_stream" type="submit" class="btn btn-primary" value="Save" />
											</li>
										</ul>
									</div>
								</div> 
							</div>
						</form>
					</div> 
				</div> 
			</div> 
		</div>
	</div>
</div>
' ?0                  	;0
1017 785   GOTO/253                  ?0        ?1416                ?647                	;0
1018 787   ECHO/40                   ?0        648:' active'        ?0                  	;0
1019 789   ECHO/40                   ?0        649:'" id="xmltv-epg">
                                                        <div class="form-group row mb-4">
                                                            <label class="col-md-4 col-form-label" for="epg_id">EPG Source</label>
                                                            <div class="col-md-8">
                                                                <select name="epg_id" id="epg_id" class="form-control" data-toggle="select2">
                                                                    <option ' ?0                  	;0
1020 790   ISSET_ISEMPTY_CV/197      #408=     16?2                 ?0                  	;33554432
1021 790   BOOL_NOT/13               #409=     #408                 ?0                  	;0
1022 790   JMPZ/43                   ?0        #409                 ?1024               	;0	>>1024
1023 791   GOTO/253                  ?0        ?11                  ?650                	;0
1024 793   INIT_FCALL_BY_NAME/59     ?0        ?0                   651:'intval'        	;1	<<1022
1025 793   FETCH_DIM_FUNC_ARG/93     $410=     16?2                 653:'epg_id'        	;1
1026 793   SEND_VAR_EX/66            ?80       $410                 ?1                  	;0
1027 793   DO_FCALL_BY_NAME/131      $411=     ?0                   ?0                  	;0
1028 793   IS_EQUAL/17               #412=     $411                 654:0               	;0
1029 793   BOOL_NOT/13               #413=     #412                 ?0                  	;0
1030 793   JMPZ/43                   ?0        #413                 ?1032               	;0	>>1032
1031 794   GOTO/253                  ?0        ?11                  ?655                	;0
1032 796   GOTO/253                  ?0        ?10                  ?656                	;0	<<1030
1033 799   INIT_FCALL_BY_NAME/59     ?0        ?0                   657:'intval'        	;1
1034 799   FETCH_DIM_FUNC_ARG/93     $414=     16?2                 659:'epg_offset'    	;1
1035 799   SEND_VAR_EX/66            ?80       $414                 ?1                  	;0
1036 799   DO_FCALL_BY_NAME/131      $415=     ?0                   ?0                  	;0
1037 799   JMP_SET/152               #416=     $415                 ?1039               	;0
1038 799   QM_ASSIGN/22              #416=     660:0                ?0                  	;0
1039 799   ECHO/40                   ?0        #416                 ?0                  	;0
1040 801   ECHO/40                   ?0        661:'" required data-parsley-trigger="change">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
											</div> 
										</div> 
										<ul class="list-inline wizard mb-0">
											<li class="prevb list-inline-item">
												<a href="javascript: void(0);" class="btn btn-secondary">Previous</a>
											</li>
											<li class="nextb list-inline-item float-right">
												<a href="javascript: void(0);" class="btn btn-secondary">Next</a>
											</li>
										</ul>
									</div>
                                    <div class="tab-pane" id="rtmp-push">
										<div class="row">
											<div class="col-12">
                                                <div class="form-group row mb-4">
                                                    <label class="col-md-9 col-form-label" for="rtmp_output">Output RTMP <i title="Feed stream to the RTMP server for output to RTMP clients." class="tooltip text-secondary far fa-circle"></i></label>
                                                    <div class="col-md-3">
                                                        <input name="rtmp_output" id="rtmp_output" type="checkbox" ' ?0                  	;0
1041 802   ISSET_ISEMPTY_CV/197      #417=     16?2                 ?0                  	;33554432
1042 802   BOOL_NOT/13               #418=     #417                 ?0                  	;0
1043 802   JMPZ/43                   ?0        #418                 ?1045               	;0	>>1045
1044 803   GOTO/253                  ?0        ?295                 ?662                	;0
1045 805   GOTO/253                  ?0        ?289                 ?663                	;0	<<1043
1046 808   ECHO/40                   ?0        664:'                                                                </select>
                                                            </div>
                                                        </div>
                                                        <div class="form-group row mb-4">
                                                            <label class="col-md-4 col-form-label" for="channel_id">EPG Channel ID</label>
                                                            <div class="col-md-8">
                                                                <select name="channel_id" id="channel_id" class="form-control" data-toggle="select2">
                                                                ' ?0                  	;0
1047 809   ISSET_ISEMPTY_CV/197      #419=     16?2                 ?0                  	;33554432
1048 809   BOOL_NOT/13               #420=     #419                 ?0                  	;0
1049 809   JMPZ/43                   ?0        #420                 ?1051               	;0	>>1051
1050 810   GOTO/253                  ?0        ?791                 ?665                	;0
1051 812   INIT_FCALL_BY_NAME/59     ?0        ?0                   666:'json_decode'   	;2	<<1049
1052 812   INIT_FCALL_BY_NAME/59     ?0        ?0                   668:'intval'        	;1
1053 812   FETCH_DIM_FUNC_ARG/93     $421=     16?2                 670:'epg_id'        	;1
1054 812   SEND_VAR_EX/66            ?80       $421                 ?1                  	;0
1055 812   DO_FCALL_BY_NAME/131      $422=     ?0                   ?0                  	;0
1056 812   FETCH_DIM_FUNC_ARG/93     $423=     16?0                 $422                	;1
1057 812   FETCH_DIM_FUNC_ARG/93     $424=     $423                 671:'data'          	;1
1058 812   SEND_VAR_EX/66            ?80       $424                 ?1                  	;0
1059 812   SEND_VAL_EX/116           ?96       672:true             ?2                  	;0
1060 812   DO_FCALL_BY_NAME/131      $425=     ?0                   ?0                  	;0
1061 812   FE_RESET_R/77             $426=     $425                 ?1079               	;0
1062 812   FE_FETCH_R/78             #427=     $426                 16?33               	;1079	>>1079	<<1078
1063 812   ASSIGN/38                 ?386      16?34                #427                	;0
1064 813   ECHO/40                   ?0        673:'                                                                    <option value="' ?0                  	;0
1065 814   ECHO/40                   ?0        16?34                ?0                  	;0
1066 815   ECHO/40                   ?0        674:'"'              ?0                  	;0
1067 816   FETCH_DIM_R/81            $429=     16?2                 675:'channel_id'    	;0
1068 816   IS_EQUAL/17               #430=     $429                 16?34               	;0
1069 816   BOOL_NOT/13               #431=     #430                 ?0                  	;0
1070 816   JMPZ/43                   ?0        #431                 ?1073               	;0	>>1073
1071 817   NOP/0                     ?0        ?0                   ?0                  	;1
1072 817   GOTO/253                  ?0        ?1074                ?676                	;0
1073 819   ECHO/40                   ?0        677:' selected'      ?0                  	;0	<<1070
1074 821   ECHO/40                   ?0        678:'>'              ?0                  	;0
1075 822   FETCH_DIM_R/81            $432=     16?33                679:'display_name'  	;0
1076 822   ECHO/40                   ?0        $432                 ?0                  	;0
1077 823   ECHO/40                   ?0        680:'</option>
                                                                    ' ?0                  	;0
1078 824   JMP/42                    ?0        ?1062                ?0                  	;0	>>1062
1079 824   FE_FREE/127               ?0        $426                 ?0                  	;0	<<1061
1080 827   GOTO/253                  ?0        ?791                 ?681                	;0
1081 830   ECHO/40                   ?0        682:'                                                        </select>
													</div>
												</div>
                                                <div class="form-group row mb-4">
													<label class="col-md-3 col-form-label" for="title_sync">Sync Title <i title="Synchronise stream title with a provider stream. You need to add your strema providers to XUI in order for this to work, the title will be updated every time the cron runs." class="tooltip text-secondary far fa-circle"></i></label>
													<div class="col-md-7">
														<select id="title_sync" name="title_sync" class="form-control" data-toggle="select2">
                                                            ' ?0                  	;0
1082 831   ISSET_ISEMPTY_DIM_OBJ/115 #433=     16?2                 683:'title_sync'    	;33554432
1083 831   BOOL_NOT/13               #434=     #433                 ?0                  	;0
1084 831   JMPZ/43                   ?0        #434                 ?1086               	;0	>>1086
1085 832   GOTO/253                  ?0        ?581                 ?684                	;0
1086 834   INIT_FCALL_BY_NAME/59     ?0        ?0                   685:'array_map'     	;2	<<1084
1087 834   SEND_VAL_EX/116           ?80       687:'intval'         ?1                  	;0
1088 834   INIT_FCALL_BY_NAME/59     ?0        ?0                   688:'explode'       	;2
1089 834   SEND_VAL_EX/116           ?80       690:'_'              ?1                  	;0
1090 834   FETCH_DIM_FUNC_ARG/93     $435=     16?2                 691:'title_sync'    	;2
1091 834   SEND_VAR_EX/66            ?96       $435                 ?2                  	;0
1092 834   DO_FCALL_BY_NAME/131      $436=     ?0                   ?0                  	;0
1093 834   SEND_VAR_NO_REF_EX/50     ?96       $436                 ?2                  	;0
1094 834   DO_FCALL_BY_NAME/131      $437=     ?0                   ?0                  	;0
1095 834   FETCH_LIST/98             $438=     $437                 692:0               	;0
1096 834   ASSIGN/38                 ?397      16?25                $438                	;0
1097 834   FETCH_LIST/98             $440=     $437                 693:1               	;0
1098 834   ASSIGN/38                 ?399      16?26                $440                	;0
1099 834   FREE/70                   ?0        $437                 ?0                  	;0
1100 835   INIT_METHOD_CALL/112      ?0        16?13                694:'query'         	;3
1101 835   SEND_VAL_EX/116           ?80       696:'SELECT `stream_display_name` FROM `providers_streams` WHERE `provider_id` = ? AND `stream_id` = ?;' ?1                  	;0
1102 835   SEND_VAR_EX/66            ?96       16?25                ?2                  	;0
1103 835   SEND_VAR_EX/66            ?112      16?26                ?3                  	;0
1104 835   DO_FCALL/60               ?400      ?0                   ?0                  	;0
1105 836   GOTO/253                  ?0        ?563                 ?697                	;0
1106 838   ISSET_ISEMPTY_CV/197      #443=     16?2                 ?0                  	;33554432
1107 838   BOOL_NOT/13               #444=     #443                 ?0                  	;0
1108 838   JMPZ/43                   ?0        #444                 ?1110               	;0	>>1110
1109 839   GOTO/253                  ?0        ?1116                ?698                	;0
1110 841   FETCH_DIM_R/81            $445=     16?2                 699:'direct_proxy'  	;0	<<1108
1111 841   IS_EQUAL/17               #446=     $445                 700:1               	;0
1112 841   BOOL_NOT/13               #447=     #446                 ?0                  	;0
1113 841   JMPZ/43                   ?0        #447                 ?1115               	;0	>>1115
1114 842   GOTO/253                  ?0        ?1116                ?701                	;0
1115 844   ECHO/40                   ?0        702:'checked '       ?0                  	;0	<<1113
1116 847   GOTO/253                  ?0        ?1157                ?703                	;0
1117 849   ECHO/40                   ?0        704:'Start Stream Now' ?0                  	;0
1118 850   GOTO/253                  ?0        ?1120                ?705                	;0
1119 852   ECHO/40                   ?0        706:'Restart on Edit' ?0                  	;0
1120 854   GOTO/253                  ?0        ?1016                ?707                	;0
1121 858   ASSIGN/38                 ?406      16?35                708:'Stream'        	;0
1122 859   INCLUDE_OR_EVAL/73        ?407      709:'header.php'     ?0                  	;2
1123 860   ECHO/40                   ?0        710:'<div class="wrapper boxed-layout-ext"' ?0                  	;0
1124 861   GOTO/253                  ?0        ?1307                ?711                	;0
1125 864   ECHO/40                   ?0        712:'                                                                </select>
                                                            </div>
                                                            <label class="col-md-2 col-form-label" for="epg_offset">Minute Offset</label>
                                                            <div class="col-md-2">
                                                                <input type="text" class="form-control text-center" id="epg_offset" name="epg_offset" value="' ?0                  	;0
1126 865   ISSET_ISEMPTY_CV/197      #450=     16?2                 ?0                  	;33554432
1127 865   JMPZ/43                   ?0        #450                 ?1129               	;0	>>1129
1128 866   GOTO/253                  ?0        ?1033                ?713                	;0
1129 868   ECHO/40                   ?0        714:'0'              ?0                  	;0	<<1127
1130 869   GOTO/253                  ?0        ?1040                ?715                	;0
1131 870   GOTO/253                  ?0        ?1033                ?716                	;0
1132 872   FETCH_STATIC_PROP_IS/176  $451=     717:'rRequest'       718:'XUI'           	;0
1133 872   ISSET_ISEMPTY_DIM_OBJ/115 #452=     $451                 720:'id'            	;33554432
1134 872   BOOL_NOT/13               #453=     #452                 ?0                  	;0
1135 872   JMPZ/43                   ?0        #453                 ?1137               	;0	>>1137
1136 873   GOTO/253                  ?0        ?882                 ?721                	;0
1137 875   FETCH_STATIC_PROP_IS/176  $454=     722:'rRequest'       723:'XUI'           	;0	<<1135
1138 875   ISSET_ISEMPTY_DIM_OBJ/115 #455=     $454                 725:'import'        	;33554432
1139 875   JMPNZ_EX/47               #455=     #455                 ?1146               	;0	>>1146
1140 875   INIT_FCALL_BY_NAME/59     ?0        ?0                   726:'e589a4Bf54a2Dad1'	;2
1141 875   SEND_VAL_EX/116           ?80       728:'adv'            ?1                  	;0
1142 875   SEND_VAL_EX/116           ?96       729:'edit_stream'    ?2                  	;0
1143 875   DO_FCALL_BY_NAME/131      $456=     ?0                   ?0                  	;0
1144 875   BOOL_NOT/13               #457=     $456                 ?0                  	;0
1145 875   BOOL/52                   #455=     #457                 ?0                  	;0
1146 875   BOOL_NOT/13               #458=     #455                 ?0                  	;0	<<1139
1147 875   JMPZ/43                   ?0        #458                 ?1149               	;0	>>1149
1148 876   GOTO/253                  ?0        ?1150                ?730                	;0
1149 878   EXIT/79                   ?0        ?0                   ?0                  	;0	<<1147
1150 880   INIT_FCALL_BY_NAME/59     ?0        ?0                   731:'F260b7a31F021E39'	;1
1151 880   FETCH_STATIC_PROP_FUNC_ARG/177 $459=     733:'rRequest'       734:'XUI'           	;1
1152 880   FETCH_DIM_FUNC_ARG/93     $460=     $459                 736:'id'            	;1
1153 880   SEND_VAR_EX/66            ?80       $460                 ?1                  	;0
1154 880   DO_FCALL_BY_NAME/131      $461=     ?0                   ?0                  	;0
1155 880   ASSIGN/38                 ?420      16?2                 $461                	;0
1156 881   GOTO/253                  ?0        ?872                 ?737                	;0
1157 883   ECHO/40                   ?0        738:'data-plugin="switchery" class="js-switch" data-color="#039cfd"/>
													</div>
												</div>
                                                ' ?0                  	;0
1158 884   FETCH_STATIC_PROP_IS/176  $463=     739:'rRequest'       740:'XUI'           	;0
1159 884   ISSET_ISEMPTY_DIM_OBJ/115 #464=     $463                 742:'import'        	;33554432
1160 884   BOOL_NOT/13               #465=     #464                 ?0                  	;0
1161 884   JMPZ/43                   ?0        #465                 ?1163               	;0	>>1163
1162 885   GOTO/253                  ?0        ?1164                ?743                	;0
1163 887   ECHO/40                   ?0        744:'                                                <div class="form-group row mb-4">
													<label class="col-md-3 col-form-label" for="add_source_as_backup">Add Source as Backup <i title="If an identical stream name is found, or the XMLTV ID matches an existing stream, the source will be added as a backup. The existing stream options will be kept." class="tooltip text-secondary far fa-circle"></i></label>
													<div class="col-md-3">
														<input name="add_source_as_backup" id="add_source_as_backup" type="checkbox" data-plugin="switchery" class="js-switch" data-color="#039cfd"/>
													</div>
													<label class="col-md-4 col-form-label" for="update_existing">Update Existing <i title="If the source exists, overwrite it with the new title and stream options." class="tooltip text-secondary far fa-circle"></i></label>
													<div class="col-md-2">
														<input name="update_existing" id="update_existing" type="checkbox" data-plugin="switchery" class="js-switch" data-color="#039cfd"/>
													</div>
												</div>
                                                ' ?0                  	;0	<<1161
1164 889   ECHO/40                   ?0        745:'                                                <div class="form-group row mb-4">
													<label class="col-md-3 col-form-label" for="fps_restart">Restart on FPS Drop <i title="Enable restart on FPS drop, set the threshold accordingly." class="tooltip text-secondary far fa-circle"></i></label>
													<div class="col-md-3">
														<input name="fps_restart" id="fps_restart" type="checkbox" ' ?0                  	;0
1165 890   GOTO/253                  ?0        ?472                 ?746                	;0
1166 892   INIT_FCALL_BY_NAME/59     ?0        ?0                   747:'B20D33B2749AdFEc'	;0
1167 892   DO_FCALL_BY_NAME/131      $466=     ?0                   ?0                  	;0
1168 892   ASSIGN/38                 ?425      16?14                $466                	;0
1169 893   INIT_FCALL_BY_NAME/59     ?0        ?0                   749:'f93E9343c3d7fD99'	;0
1170 893   DO_FCALL_BY_NAME/131      $468=     ?0                   ?0                  	;0
1171 893   ASSIGN/38                 ?427      16?27                $468                	;0
1172 894   ASSIGN/38                 ?428      16?18                751:array (
)       	;0
1173 895   ASSIGN/38                 ?429      16?36                752:array (
  0 => 
  array (
  ),
)	;0
1174 896   FE_RESET_R/77             $472=     16?0                 ?1185               	;0
1175 896   FE_FETCH_R/78             ?0        $472                 16?1                	;1185	>>1185	<<1184
1176 897   FETCH_DIM_R/81            $473=     16?1                 753:'id'            	;0
1177 897   INIT_FCALL_BY_NAME/59     ?0        ?0                   754:'json_decode'   	;2
1178 897   FETCH_DIM_FUNC_ARG/93     $475=     16?1                 756:'data'          	;1
1179 897   SEND_VAR_EX/66            ?80       $475                 ?1                  	;0
1180 897   SEND_VAL_EX/116           ?96       757:true             ?2                  	;0
1181 897   DO_FCALL_BY_NAME/131      $476=     ?0                   ?0                  	;0
1182 897   ASSIGN_DIM/147            ?432      16?36                $473                	;0
1183 897   OP_DATA/137               ?0        $476                 ?0                  	;0
1184 898   JMP/42                    ?0        ?1175                ?0                  	;0	>>1175
1185 898   FE_FREE/127               ?0        $472                 ?0                  	;0	<<1174
1186 900   GOTO/253                  ?0        ?856                 ?758                	;0
1187 902   ISSET_ISEMPTY_CV/197      #477=     16?2                 ?0                  	;33554432
1188 902   JMPZ/43                   ?0        #477                 ?1190               	;0	>>1190
1189 903   GOTO/253                  ?0        ?657                 ?759                	;0
1190 905   INIT_FCALL_BY_NAME/59     ?0        ?0                   760:'E589a4bf54a2daD1'	;2	<<1188
1191 905   SEND_VAL_EX/116           ?80       762:'adv'            ?1                  	;0
1192 905   SEND_VAL_EX/116           ?96       763:'add_stream'     ?2                  	;0
1193 905   DO_FCALL_BY_NAME/131      $478=     ?0                   ?0                  	;0
1194 905   JMPZ/43                   ?0        $478                 ?1196               	;0	>>1196
1195 906   GOTO/253                  ?0        ?1197                ?764                	;0
1196 908   EXIT/79                   ?0        ?0                   ?0                  	;0	<<1194
1197 910   FE_RESET_R/77             $479=     16?9                 ?1209               	;0
1198 910   FE_FETCH_R/78             ?0        $479                 16?10               	;1209	>>1209	<<1208
1199 911   FETCH_DIM_R/81            $481=     16?10                765:'id'            	;0
1200 911   INIT_ARRAY/71             #482=     $481                 766:'id'            	;22
1201 911   ADD_ARRAY_ELEMENT/72      #482=     767:'offline'        768:'parent'        	;0
1202 911   FETCH_DIM_R/81            $483=     16?10                769:'server_name'   	;0
1203 911   ADD_ARRAY_ELEMENT/72      #482=     $483                 770:'text'          	;0
1204 911   ADD_ARRAY_ELEMENT/72      #482=     771:'mdi mdi-server-network' 772:'icon'          	;0
1205 911   ADD_ARRAY_ELEMENT/72      #482=     773:array (
  'opened' => true,
) 774:'state'         	;0
1206 911   ASSIGN_DIM/147            ?438      16?19                ?0                  	;0
1207 911   OP_DATA/137               ?0        #482                 ?0                  	;0
1208 912   JMP/42                    ?0        ?1198                ?0                  	;0	>>1198
1209 912   FE_FREE/127               ?0        $479                 ?0                  	;0	<<1197
1210 914   GOTO/253                  ?0        ?656                 ?775                	;0
1211 916   ECHO/40                   ?0        776:'												<div class="form-group row mb-4">
													<label class="col-md-3 col-form-label" for="category_id">Categories</label>
													<div class="col-md-9">
                                                        <select name="category_id[]" id="category_id" class="form-control select2-multiple" data-toggle="select2" multiple="multiple" data-placeholder="Choose...">
															' ?0                  	;0
1212 917   INIT_FCALL_BY_NAME/59     ?0        ?0                   777:'F769e3f0C739d1A6'	;1
1213 917   SEND_VAL_EX/116           ?80       779:'live'           ?1                  	;0
1214 917   DO_FCALL_BY_NAME/131      $484=     ?0                   ?0                  	;0
1215 917   FE_RESET_R/77             $485=     $484                 ?1257               	;0
1216 917   FE_FETCH_R/78             ?0        $485                 16?37               	;1257	>>1257	<<1256
1217 918   NOP/0                     ?0        ?0                   ?0                  	;1
1218 918   GOTO/253                  ?0        ?1227                ?780                	;0
1219 921   ECHO/40                   ?0        781:'value="'        ?0                  	;0
1220 922   FETCH_DIM_R/81            $486=     16?37                782:'id'            	;0
1221 922   ECHO/40                   ?0        $486                 ?0                  	;0
1222 923   ECHO/40                   ?0        783:'">'             ?0                  	;0
1223 924   FETCH_DIM_R/81            $487=     16?37                784:'category_name' 	;0
1224 924   ECHO/40                   ?0        $487                 ?0                  	;0
1225 925   NOP/0                     ?0        ?0                   ?0                  	;1
1226 925   GOTO/253                  ?0        ?1253                ?785                	;0
1227 927   ECHO/40                   ?0        786:'                                                            <option ' ?0                  	;0
1228 928   ISSET_ISEMPTY_CV/197      #488=     16?2                 ?0                  	;33554432
1229 928   BOOL_NOT/13               #489=     #488                 ?0                  	;0
1230 928   JMPZ/43                   ?0        #489                 ?1233               	;0	>>1233
1231 929   NOP/0                     ?0        ?0                   ?0                  	;1
1232 929   GOTO/253                  ?0        ?1219                ?787                	;0
1233 931   INIT_FCALL_BY_NAME/59     ?0        ?0                   788:'in_array'      	;2	<<1230
1234 931   INIT_FCALL_BY_NAME/59     ?0        ?0                   790:'intval'        	;1
1235 931   FETCH_DIM_FUNC_ARG/93     $490=     16?37                792:'id'            	;1
1236 931   SEND_VAR_EX/66            ?80       $490                 ?1                  	;0
1237 931   DO_FCALL_BY_NAME/131      $491=     ?0                   ?0                  	;0
1238 931   SEND_VAR_NO_REF_EX/50     ?80       $491                 ?1                  	;0
1239 931   INIT_FCALL_BY_NAME/59     ?0        ?0                   793:'json_decode'   	;2
1240 931   FETCH_DIM_FUNC_ARG/93     $492=     16?2                 795:'category_id'   	;1
1241 931   SEND_VAR_EX/66            ?80       $492                 ?1                  	;0
1242 931   SEND_VAL_EX/116           ?96       796:true             ?2                  	;0
1243 931   DO_FCALL_BY_NAME/131      $493=     ?0                   ?0                  	;0
1244 931   SEND_VAR_NO_REF_EX/50     ?96       $493                 ?2                  	;0
1245 931   DO_FCALL_BY_NAME/131      $494=     ?0                   ?0                  	;0
1246 931   BOOL_NOT/13               #495=     $494                 ?0                  	;0
1247 931   JMPZ/43                   ?0        #495                 ?1250               	;0	>>1250
1248 932   NOP/0                     ?0        ?0                   ?0                  	;1
1249 932   GOTO/253                  ?0        ?1251                ?797                	;0
1250 934   ECHO/40                   ?0        798:'selected '      ?0                  	;0	<<1247
1251 936   NOP/0                     ?0        ?0                   ?0                  	;1
1252 936   GOTO/253                  ?0        ?1219                ?799                	;0
1253 938   ECHO/40                   ?0        800:'</option>
															' ?0                  	;0
1254 940   NOP/0                     ?0        ?0                   ?0                  	;1
1255 940   GOTO/253                  ?0        ?1256                ?801                	;0
1256 941   JMP/42                    ?0        ?1216                ?0                  	;0	>>1216
1257 941   FE_FREE/127               ?0        $485                 ?0                  	;0	<<1215
1258 944   ECHO/40                   ?0        802:'														</select>
                                                        <div id="category_create" class="alert bg-dark text-white border-0 mt-2 mb-0" role="alert" style="display: none;">
                                                            <strong>New Categories:</strong> <span id="category_new"></span>
                                                        </div>
													</div>
                                                </div>
                                                <div class="form-group row mb-4">
													<label class="col-md-3 col-form-label" for="bouquets">Bouquets</label>
													<div class="col-md-9">
														<select name="bouquets[]" id="bouquets" class="form-control select2-multiple" data-toggle="select2" multiple="multiple" data-placeholder="Choose...">
															' ?0                  	;0
1259 945   INIT_FCALL_BY_NAME/59     ?0        ?0                   803:'F964b9222b35addD'	;0
1260 945   DO_FCALL_BY_NAME/131      $496=     ?0                   ?0                  	;0
1261 945   FE_RESET_R/77             $497=     $496                 ?1300               	;0
1262 945   FE_FETCH_R/78             ?0        $497                 16?38               	;1300	>>1300	<<1299
1263 946   NOP/0                     ?0        ?0                   ?0                  	;1
1264 946   GOTO/253                  ?0        ?1276                ?805                	;0
1265 948   ECHO/40                   ?0        806:'</option>
															' ?0                  	;0
1266 950   NOP/0                     ?0        ?0                   ?0                  	;1
1267 950   GOTO/253                  ?0        ?1299                ?807                	;0
1268 953   ECHO/40                   ?0        808:'value="'        ?0                  	;0
1269 954   FETCH_DIM_R/81            $498=     16?38                809:'id'            	;0
1270 954   ECHO/40                   ?0        $498                 ?0                  	;0
1271 955   ECHO/40                   ?0        810:'">'             ?0                  	;0
1272 956   FETCH_DIM_R/81            $499=     16?38                811:'bouquet_name'  	;0
1273 956   ECHO/40                   ?0        $499                 ?0                  	;0
1274 957   NOP/0                     ?0        ?0                   ?0                  	;1
1275 957   GOTO/253                  ?0        ?1265                ?812                	;0
1276 959   ECHO/40                   ?0        813:'															<option ' ?0                  	;0
1277 960   ISSET_ISEMPTY_CV/197      #500=     16?2                 ?0                  	;33554432
1278 960   BOOL_NOT/13               #501=     #500                 ?0                  	;0
1279 960   JMPZ/43                   ?0        #501                 ?1282               	;0	>>1282
1280 961   NOP/0                     ?0        ?0                   ?0                  	;1
1281 961   GOTO/253                  ?0        ?1268                ?814                	;0
1282 963   INIT_FCALL_BY_NAME/59     ?0        ?0                   815:'in_array'      	;2	<<1279
1283 963   FETCH_DIM_FUNC_ARG/93     $502=     16?2                 817:'id'            	;1
1284 963   SEND_VAR_EX/66            ?80       $502                 ?1                  	;0
1285 963   INIT_FCALL_BY_NAME/59     ?0        ?0                   818:'json_decode'   	;2
1286 963   FETCH_DIM_FUNC_ARG/93     $503=     16?38                820:'bouquet_channels'	;1
1287 963   SEND_VAR_EX/66            ?80       $503                 ?1                  	;0
1288 963   SEND_VAL_EX/116           ?96       821:true             ?2                  	;0
1289 963   DO_FCALL_BY_NAME/131      $504=     ?0                   ?0                  	;0
1290 963   SEND_VAR_NO_REF_EX/50     ?96       $504                 ?2                  	;0
1291 963   DO_FCALL_BY_NAME/131      $505=     ?0                   ?0                  	;0
1292 963   BOOL_NOT/13               #506=     $505                 ?0                  	;0
1293 963   JMPZ/43                   ?0        #506                 ?1296               	;0	>>1296
1294 964   NOP/0                     ?0        ?0                   ?0                  	;1
1295 964   GOTO/253                  ?0        ?1297                ?822                	;0
1296 966   ECHO/40                   ?0        823:'selected '      ?0                  	;0	<<1293
1297 968   NOP/0                     ?0        ?0                   ?0                  	;1
1298 968   GOTO/253                  ?0        ?1268                ?824                	;0
1299 969   JMP/42                    ?0        ?1262                ?0                  	;0	>>1262
1300 969   FE_FREE/127               ?0        $497                 ?0                  	;0	<<1261
1301 971   GOTO/253                  ?0        ?836                 ?825                	;0
1302 973   JMPZ/43                   ?0        16?4                 ?1304               	;0	>>1304
1303 974   GOTO/253                  ?0        ?1305                ?826                	;0
1304 976   ASSIGN/38                 ?465      16?4                 827:array (
  0 => 
  array (
    0 => '',
  ),
)	;0	<<1302
1305 979   ASSIGN/38                 ?466      16?8                 828:0               	;0
1306 980   GOTO/253                  ?0        ?99                  ?829                	;0
1307 982   FETCH_IS/89               $509=     830:'_SERVER'        ?0                  	;0
1308 982   ISSET_ISEMPTY_DIM_OBJ/115 #510=     $509                 831:'HTTP_X_REQUESTED_WITH'	;16777216
1309 982   BOOL_NOT/13               #511=     #510                 ?0                  	;0
1310 982   JMPZ_EX/46                #511=     #511                 ?1318               	;0	>>1318
1311 982   INIT_FCALL_BY_NAME/59     ?0        ?0                   832:'strtolower'    	;1
1312 982   FETCH_FUNC_ARG/92         $512=     834:'_SERVER'        ?0                  	;1
1313 982   FETCH_DIM_FUNC_ARG/93     $513=     $512                 835:'HTTP_X_REQUESTED_WITH'	;1
1314 982   SEND_VAR_EX/66            ?80       $513                 ?1                  	;0
1315 982   DO_FCALL_BY_NAME/131      $514=     ?0                   ?0                  	;0
1316 982   IS_EQUAL/17               #515=     $514                 836:'xmlhttprequest'	;0
1317 982   BOOL/52                   #511=     #515                 ?0                  	;0
1318 982   BOOL_NOT/13               #516=     #511                 ?0                  	;0	<<1310
1319 982   JMPZ/43                   ?0        #516                 ?1321               	;0	>>1321
1320 983   GOTO/253                  ?0        ?1322                ?837                	;0
1321 985   ECHO/40                   ?0        838:' style="display: none;"' ?0                  	;0	<<1319
1322 987   ECHO/40                   ?0        839:'>
    <div class="container-fluid">
		<div class="row">
			<div class="col-12">
				<div class="page-title-box">
					<div class="page-title-right">
                        ' ?0                  	;0
1323 988   INCLUDE_OR_EVAL/73        ?475      840:'topbar.php'     ?0                  	;2
1324 989   GOTO/253                  ?0        ?227                 ?841                	;0
1325 991   ECHO/40                   ?0        842:'														<select id="days_to_restart" name="days_to_restart[]" class="form-control select2-multiple" data-toggle="select2" multiple="multiple" data-placeholder="Choose ...">
															' ?0                  	;0
1326 992   FE_RESET_R/77             $518=     843:array (
  0 => 'Monday',
  1 => 'Tuesday',
  2 => 'Wednesday',
  3 => 'Thursday',
  4 => 'Friday',
  5 => 'Saturday',
  6 => 'Sunday',
) ?1345               	;0
1327 992   FE_FETCH_R/78             ?0        $518                 16?39               	;1345	>>1345	<<1344
1328 993   ECHO/40                   ?0        844:'															<option value="' ?0                  	;0
1329 994   ECHO/40                   ?0        16?39                ?0                  	;0
1330 995   ECHO/40                   ?0        845:'"'              ?0                  	;0
1331 996   INIT_FCALL_BY_NAME/59     ?0        ?0                   846:'in_array'      	;2
1332 996   SEND_VAR_EX/66            ?80       16?39                ?1                  	;0
1333 996   FETCH_DIM_FUNC_ARG/93     $519=     16?12                848:'days'          	;2
1334 996   SEND_VAR_EX/66            ?96       $519                 ?2                  	;0
1335 996   DO_FCALL_BY_NAME/131      $520=     ?0                   ?0                  	;0
1336 996   BOOL_NOT/13               #521=     $520                 ?0                  	;0
1337 996   JMPZ/43                   ?0        #521                 ?1340               	;0	>>1340
1338 997   NOP/0                     ?0        ?0                   ?0                  	;1
1339 997   GOTO/253                  ?0        ?1341                ?849                	;0
1340 999   ECHO/40                   ?0        850:' selected'      ?0                  	;0	<<1337
1341 1001  ECHO/40                   ?0        851:'>'              ?0                  	;0
1342 1002  ECHO/40                   ?0        16?39                ?0                  	;0
1343 1003  ECHO/40                   ?0        852:'</option>
															' ?0                  	;0
1344 1004  JMP/42                    ?0        ?1327                ?0                  	;0	>>1327
1345 1004  FE_FREE/127               ?0        $518                 ?0                  	;0	<<1326
1346 1007  ECHO/40                   ?0        853:'														</select>
													</div>
													<div class="col-md-2">
														<div class="input-group clockpicker" data-placement="top" data-align="top" data-autoclose="true">
															<input id="time_to_restart" name="time_to_restart" type="text" class="form-control text-center" value="' ?0                  	;0
1347 1008  FETCH_DIM_R/81            $522=     16?12                854:'at'            	;0
1348 1008  ECHO/40                   ?0        $522                 ?0                  	;0
1349 1009  GOTO/253                  ?0        ?491                 ?855                	;0
1350 1011  FE_RESET_R/77             $523=     16?9                 ?1374               	;0
1351 1011  FE_FETCH_R/78             ?0        $523                 16?10               	;1374	>>1374	<<1373
1352 1012  ECHO/40                   ?0        856:'															<option value="' ?0                  	;0
1353 1013  FETCH_DIM_R/81            $524=     16?10                857:'id'            	;0
1354 1013  ECHO/40                   ?0        $524                 ?0                  	;0
1355 1014  ECHO/40                   ?0        858:'"'              ?0                  	;0
1356 1015  ISSET_ISEMPTY_CV/197      #525=     16?2                 ?0                  	;33554432
1357 1015  JMPZ_EX/46                #525=     #525                 ?1364               	;0	>>1364
1358 1015  INIT_FCALL_BY_NAME/59     ?0        ?0                   859:'in_array'      	;2
1359 1015  FETCH_DIM_FUNC_ARG/93     $526=     16?10                861:'id'            	;1
1360 1015  SEND_VAR_EX/66            ?80       $526                 ?1                  	;0
1361 1015  SEND_VAR_EX/66            ?96       16?18                ?2                  	;0
1362 1015  DO_FCALL_BY_NAME/131      $527=     ?0                   ?0                  	;0
1363 1015  BOOL/52                   #525=     $527                 ?0                  	;0
1364 1015  BOOL_NOT/13               #528=     #525                 ?0                  	;0	<<1357
1365 1015  JMPZ/43                   ?0        #528                 ?1368               	;0	>>1368
1366 1016  NOP/0                     ?0        ?0                   ?0                  	;1
1367 1016  GOTO/253                  ?0        ?1369                ?862                	;0
1368 1018  ECHO/40                   ?0        863:' selected'      ?0                  	;0	<<1365
1369 1020  ECHO/40                   ?0        864:'>'              ?0                  	;0
1370 1021  FETCH_DIM_R/81            $529=     16?10                865:'server_name'   	;0
1371 1021  ECHO/40                   ?0        $529                 ?0                  	;0
1372 1022  ECHO/40                   ?0        866:'</option>
															' ?0                  	;0
1373 1023  JMP/42                    ?0        ?1351                ?0                  	;0	>>1351
1374 1023  FE_FREE/127               ?0        $523                 ?0                  	;0	<<1350
1375 1026  ECHO/40                   ?0        867:'														</select>
													</div>
                                                    <label class="col-md-3 col-form-label" for="llod">Low Latency On-Demand <i title="<strong>LLOD v2 - FFMPEG</strong><br/>The first source is selected without probing and passed directly to FFMPEG for processing. If the first source is down, the stream will not start.<br/><br/>LLOD v3 - PHP<br/>A bespoke segment parser developed by XUI.one to take incoming MPEG-TS streams and identify keyframes in order to segment the stream to deliver back to the client. Very fast, still experimental however. This method doesn\'t suffer from issues such as lost audio as ffmpeg isn\'t involved at all but does not support anything but MPEG-TS sources." class="tooltip text-secondary far fa-circle"></i></label>
													<div class="col-md-3">
														<select name="llod" id="llod" class="form-control" data-toggle="select2">
															' ?0                  	;0
1376 1027  FE_RESET_R/77             $530=     868:array (
  0 => 'Disabled',
  1 => 'LLOD v2 - FFMPEG',
  2 => 'LLOD v3 - PHP',
) ?1396               	;0
1377 1027  FE_FETCH_R/78             #531=     $530                 16?40               	;1396	>>1396	<<1395
1378 1027  ASSIGN/38                 ?490      16?41                #531                	;0
1379 1028  ECHO/40                   ?0        869:'															<option value="' ?0                  	;0
1380 1029  ECHO/40                   ?0        16?41                ?0                  	;0
1381 1030  ECHO/40                   ?0        870:'"'              ?0                  	;0
1382 1031  ISSET_ISEMPTY_CV/197      #533=     16?2                 ?0                  	;33554432
1383 1031  JMPZ_EX/46                #533=     #533                 ?1387               	;0	>>1387
1384 1031  FETCH_DIM_R/81            $534=     16?2                 871:'llod'          	;0
1385 1031  IS_EQUAL/17               #535=     $534                 16?41               	;0
1386 1031  BOOL/52                   #533=     #535                 ?0                  	;0
1387 1031  BOOL_NOT/13               #536=     #533                 ?0                  	;0	<<1383
1388 1031  JMPZ/43                   ?0        #536                 ?1391               	;0	>>1391
1389 1032  NOP/0                     ?0        ?0                   ?0                  	;1
1390 1032  GOTO/253                  ?0        ?1392                ?872                	;0
1391 1034  ECHO/40                   ?0        873:' selected'      ?0                  	;0	<<1388
1392 1036  ECHO/40                   ?0        874:'>'              ?0                  	;0
1393 1037  ECHO/40                   ?0        16?40                ?0                  	;0
1394 1038  ECHO/40                   ?0        875:'</option>
															' ?0                  	;0
1395 1039  JMP/42                    ?0        ?1377                ?0                  	;0	>>1377
1396 1039  FE_FREE/127               ?0        $530                 ?0                  	;0	<<1376
1397 1042  GOTO/253                  ?0        ?146                 ?876                	;0
1398 1044  ISSET_ISEMPTY_CV/197      #537=     16?2                 ?0                  	;33554432
1399 1044  JMPZ_EX/46                #537=     #537                 ?1402               	;0	>>1402
1400 1044  FETCH_DIM_R/81            $538=     16?2                 877:'epg_api'       	;0
1401 1044  BOOL/52                   #537=     $538                 ?0                  	;0
1402 1044  BOOL_NOT/13               #539=     #537                 ?0                  	;0	<<1399
1403 1044  JMPZ/43                   ?0        #539                 ?1405               	;0	>>1405
1404 1045  GOTO/253                  ?0        ?1406                ?878                	;0
1405 1047  ECHO/40                   ?0        879:' active'        ?0                  	;0	<<1403
1406 1049  ECHO/40                   ?0        880:'">
                                                            XUI EPG
                                                        </a>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a href="#xmltv-epg" id="tab-xml-epg" data-toggle="tab" aria-expanded="false" class="nav-link' ?0                  	;0
1407 1050  ISSET_ISEMPTY_CV/197      #540=     16?2                 ?0                  	;33554432
1408 1050  JMPZ_EX/46                #540=     #540                 ?1412               	;0	>>1412
1409 1050  FETCH_DIM_R/81            $541=     16?2                 881:'epg_api'       	;0
1410 1050  BOOL_NOT/13               #542=     $541                 ?0                  	;0
1411 1050  BOOL/52                   #540=     #542                 ?0                  	;0
1412 1050  BOOL_NOT/13               #543=     #540                 ?0                  	;0	<<1408
1413 1050  JMPZ/43                   ?0        #543                 ?1415               	;0	>>1415
1414 1051  GOTO/253                  ?0        ?983                 ?882                	;0
1415 1053  GOTO/253                  ?0        ?982                 ?883                	;0	<<1413
1416 1055  INCLUDE_OR_EVAL/73        ?502      884:'footer.php'     ?0                  	;2
1417 1056  NOP/0                     ?0        885:1                ?0                  	;4294967295
*/

?>
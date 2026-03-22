<?php


/*
#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
0    3     JMP/42                    ?0        ?448                 ?0                  	;0	>>448
1    5     ECHO/40                   ?0        1:'														</select>
													</div>
                                                </div>
                                                <div class="form-group row mb-4">
                                                    <label class="col-md-4 col-form-label" for="epg_api_days_fetch">Days to Fetch <i title="How many days to fetch when grabbing EPG data." class="tooltip text-secondary far fa-circle"></i></label>
													<div class="col-md-2">
														<input type="text" class="form-control text-center" id="epg_api_days_fetch" name="epg_api_days_fetch" value="' ?0                  	;0
2    6     INIT_FCALL_BY_NAME/59     ?0        ?0                   2:'intval'          	;1
3    6     FETCH_DIM_FUNC_ARG/93     $18=      16?0                 4:'epg_api_days_fetch'	;1
4    6     SEND_VAR_EX/66            ?80       $18                  ?1                  	;0
5    6     DO_FCALL_BY_NAME/131      $19=      ?0                   ?0                  	;0
6    6     ECHO/40                   ?0        $19                  ?0                  	;0
7    7     ECHO/40                   ?0        5:'">
													</div>
                                                    <label class="col-md-4 col-form-label" for="epg_api_days_keep">Days to Keep <i title="How many days to keep when storing EPG data." class="tooltip text-secondary far fa-circle"></i></label>
													<div class="col-md-2">
														<input type="text" class="form-control text-center" id="epg_api_days_keep" name="epg_api_days_keep" value="' ?0                  	;0
8    8     INIT_FCALL_BY_NAME/59     ?0        ?0                   6:'intval'          	;1
9    8     FETCH_DIM_FUNC_ARG/93     $20=      16?0                 8:'epg_api_days_keep'	;1
10   8     SEND_VAR_EX/66            ?80       $20                  ?1                  	;0
11   8     DO_FCALL_BY_NAME/131      $21=      ?0                   ?0                  	;0
12   8     ECHO/40                   ?0        $21                  ?0                  	;0
13   9     ECHO/40                   ?0        9:'">
													</div>
                                                </div>
                                                <h5 class="card-title mb-4">API Services</h5>
                                                <div class="form-group row mb-4">
													<label class="col-md-4 col-form-label" for="allowed_ips_admin">Admin Streaming IP\'s <i title="Allowed IP\'s to access streaming using the Live Streaming Pass. Separate each IP with a comma." class="tooltip text-secondary far fa-circle"></i></label>
													<div class="col-md-8">
														<input type="text" class="form-control" id="allowed_ips_admin" name="allowed_ips_admin" value="' ?0                  	;0
14   10    GOTO/253                  ?0        ?1337                ?10                 	;0
15   13    ECHO/40                   ?0        11:'data-plugin="switchery" class="js-switch" data-color="#039cfd"/>
													</div>
                                                </div>
                                                <div class="form-group row mb-4">
													<label class="col-md-4 col-form-label" for="case_sensitive_line">Case Sensitive Lines <i title="Case sensitive username and password." class="tooltip text-secondary far fa-circle"></i></label>
													<div class="col-md-2">
														<input name="case_sensitive_line" id="case_sensitive_line" type="checkbox"' ?0                  	;0
16   14    FETCH_DIM_R/81            $22=      16?0                 12:'case_sensitive_line'	;0
17   14    IS_EQUAL/17               #23=      $22                  13:1                	;0
18   14    BOOL_NOT/13               #24=      #23                  ?0                  	;0
19   14    JMPZ/43                   ?0        #24                  ?21                 	;0	>>21
20   15    GOTO/253                  ?0        ?22                  ?14                 	;0
21   17    ECHO/40                   ?0        15:' checked '       ?0                  	;0	<<19
22   19    GOTO/253                  ?0        ?1724                ?16                 	;0
23   21    FETCH_DIM_R/81            $25=      16?0                 17:'enable_isp_lock'	;0
24   21    IS_EQUAL/17               #26=      $25                  18:1                	;0
25   21    BOOL_NOT/13               #27=      #26                  ?0                  	;0
26   21    JMPZ/43                   ?0        #27                  ?28                 	;0	>>28
27   22    GOTO/253                  ?0        ?29                  ?19                 	;0
28   24    ECHO/40                   ?0        20:' checked '       ?0                  	;0	<<26
29   26    ECHO/40                   ?0        21:'data-plugin="switchery" class="js-switch" data-color="#039cfd"/>
													</div>
													<label class="col-md-4 col-form-label" for="block_svp">Enable ASN Lock <i title="Enable / Disable ASN lock globally." class="tooltip text-secondary far fa-circle"></i></label>
													<div class="col-md-2">
														<input name="block_svp" id="block_svp" type="checkbox"' ?0                  	;0
30   27    FETCH_DIM_R/81            $28=      16?0                 22:'block_svp'      	;0
31   27    IS_EQUAL/17               #29=      $28                  23:1                	;0
32   27    BOOL_NOT/13               #30=      #29                  ?0                  	;0
33   27    JMPZ/43                   ?0        #30                  ?35                 	;0	>>35
34   28    GOTO/253                  ?0        ?526                 ?24                 	;0
35   30    GOTO/253                  ?0        ?525                 ?25                 	;0	<<33
36   33    ECHO/40                   ?0        26:'data-plugin="switchery" class="js-switch" data-color="#039cfd"/>
													</div>
                                                    <label class="col-md-4 col-form-label" for="kill_rogue_ffmpeg">Kill Rogue FFMPEG PID\'s <i title="When enabled, ffmpeg PID\'s will be scanned every minute for streams that shouldn\'t be live and killed accordingly. This will also run when starting a stream to ensure any running instances are sufficiently removed." class="tooltip text-secondary far fa-circle"></i></label>
													<div class="col-md-2">
														<input name="kill_rogue_ffmpeg" id="kill_rogue_ffmpeg" type="checkbox"' ?0                  	;0
37   34    FETCH_DIM_R/81            $31=      16?0                 27:'kill_rogue_ffmpeg'	;0
38   34    IS_EQUAL/17               #32=      $31                  28:1                	;0
39   34    BOOL_NOT/13               #33=      #32                  ?0                  	;0
40   34    JMPZ/43                   ?0        #33                  ?42                 	;0	>>42
41   35    GOTO/253                  ?0        ?43                  ?29                 	;0
42   37    ECHO/40                   ?0        30:' checked '       ?0                  	;0	<<40
43   39    GOTO/253                  ?0        ?1364                ?31                 	;0
44   41    FE_RESET_R/77             $34=      32:array (
  0 => 'Forever',
  3600 => '1 Hour',
  21600 => '6 Hours',
  43200 => '12 Hours',
  86400 => '1 Day',
  259200 => '3 Days',
  604800 => '7 Days',
  1209600 => '14 Days',
  16934400 => '28 Days',
  15552000 => '180 Days',
  31536000 => '365 Days',
) ?61                 	;0
45   41    FE_FETCH_R/78             #35=      $34                  16?1                	;61	>>61	<<60
46   41    ASSIGN/38                 ?18       16?2                 #35                 	;0
47   42    ECHO/40                   ?0        33:'															<option ' ?0                  	;0
48   43    FETCH_DIM_R/81            $37=      16?0                 34:'keep_activity'  	;0
49   43    IS_EQUAL/17               #38=      $37                  16?2                	;0
50   43    BOOL_NOT/13               #39=      #38                  ?0                  	;0
51   43    JMPZ/43                   ?0        #39                  ?54                 	;0	>>54
52   44    NOP/0                     ?0        ?0                   ?0                  	;1
53   44    GOTO/253                  ?0        ?55                  ?35                 	;0
54   46    ECHO/40                   ?0        36:'selected '       ?0                  	;0	<<51
55   48    ECHO/40                   ?0        37:'value="'         ?0                  	;0
56   49    ECHO/40                   ?0        16?2                 ?0                  	;0
57   50    ECHO/40                   ?0        38:'">'              ?0                  	;0
58   51    ECHO/40                   ?0        16?1                 ?0                  	;0
59   52    ECHO/40                   ?0        39:'</option>
															' ?0                  	;0
60   53    JMP/42                    ?0        ?45                  ?0                  	;0	>>45
61   53    FE_FREE/127               ?0        $34                  ?0                  	;0	<<44
62   56    ECHO/40                   ?0        40:'														</select>
													</div>
												</div>
                                                <div class="form-group row mb-4">
													<label class="col-md-3 col-form-label" for="client_logs_save">Client Logs <i title="Activity logs are saved when an active connection is closed. This is useful information to keep and should be kept for as long as possible, however can build up if you have high throughput." class="tooltip text-secondary far fa-circle"></i></label>
                                                    <div class="col-md-3">
														<input name="client_logs_save" id="client_logs_save" type="checkbox"' ?0                  	;0
63   57    FETCH_DIM_R/81            $40=      16?0                 41:'client_logs_save'	;0
64   57    IS_EQUAL/17               #41=      $40                  42:1                	;0
65   57    BOOL_NOT/13               #42=      #41                  ?0                  	;0
66   57    JMPZ/43                   ?0        #42                  ?68                 	;0	>>68
67   58    GOTO/253                  ?0        ?1234                ?43                 	;0
68   60    ECHO/40                   ?0        44:' checked '       ?0                  	;0	<<66
69   61    GOTO/253                  ?0        ?1234                ?45                 	;0
70   63    ECHO/40                   ?0        46:'">
													</div>
                                                </div>
                                                <h5 class="card-title mb-4">Segment Settings</h5>
                                                <div class="form-group row mb-4">
                                                    <label class="col-md-4 col-form-label" for="seg_time">Segment Duration <i title="Duration of individual segments when using HLS. This cannot be guaranteed due to keyframes, but should work on most streams." class="tooltip text-secondary far fa-circle"></i></label>
													<div class="col-md-2">
														<input type="text" class="form-control text-center" id="seg_time" name="seg_time" value="' ?0                  	;0
71   64    INIT_FCALL_BY_NAME/59     ?0        ?0                   47:'htmlspecialchars'	;1
72   64    FETCH_DIM_FUNC_ARG/93     $43=      16?0                 49:'seg_time'       	;1
73   64    SEND_VAR_EX/66            ?80       $43                  ?1                  	;0
74   64    DO_FCALL_BY_NAME/131      $44=      ?0                   ?0                  	;0
75   64    ECHO/40                   ?0        $44                  ?0                  	;0
76   65    ECHO/40                   ?0        50:'">
													</div>
                                                    <label class="col-md-4 col-form-label" for="seg_list_size">List Size <i title="Number of segments in the HLS playlist." class="tooltip text-secondary far fa-circle"></i></label>
													<div class="col-md-2">
														<input type="text" class="form-control text-center" id="seg_list_size" name="seg_list_size" value="' ?0                  	;0
77   66    INIT_FCALL_BY_NAME/59     ?0        ?0                   51:'htmlspecialchars'	;1
78   66    FETCH_DIM_FUNC_ARG/93     $45=      16?0                 53:'seg_list_size'  	;1
79   66    SEND_VAR_EX/66            ?80       $45                  ?1                  	;0
80   66    DO_FCALL_BY_NAME/131      $46=      ?0                   ?0                  	;0
81   66    ECHO/40                   ?0        $46                  ?0                  	;0
82   67    ECHO/40                   ?0        54:'">
													</div>
												</div>
                                                <div class="form-group row mb-4">
                                                    <label class="col-md-4 col-form-label" for="seg_delete_threshold">Delete Threshold <i title="How many old segments to keep when generating HLS playlist. Lowering this will lower RAM usage but it\'s good to keep a buffer for connecting clients. A 30 second prebuffer for example would need 3 x 10 second segments to work." class="tooltip text-secondary far fa-circle"></i></label>
													<div class="col-md-2">
														<input type="text" class="form-control text-center" id="seg_delete_threshold" name="seg_delete_threshold" value="' ?0                  	;0
83   68    GOTO/253                  ?0        ?1149                ?55                 	;0
84   70    ECHO/40                   ?0        56:' checked '       ?0                  	;0
85   72    ECHO/40                   ?0        57:'data-plugin="switchery" class="js-switch" data-color="#039cfd"/>
													</div>
                                                </div>
												<div class="form-group row mb-4">
													<label class="col-md-4 col-form-label" for="allowed_stb_types">Allowed STB Types</label>
													<div class="col-md-8">
														<select name="allowed_stb_types[]" id="allowed_stb_types" class="form-control select2-multiple" data-toggle="select2" multiple="multiple" data-placeholder="Choose...">
															' ?0                  	;0
86   73    INIT_FCALL_BY_NAME/59     ?0        ?0                   58:'json_decode'    	;2
87   73    FETCH_DIM_FUNC_ARG/93     $47=      16?0                 60:'allowed_stb_types'	;1
88   73    SEND_VAR_EX/66            ?80       $47                  ?1                  	;0
89   73    SEND_VAL_EX/116           ?96       61:true              ?2                  	;0
90   73    DO_FCALL_BY_NAME/131      $48=      ?0                   ?0                  	;0
91   73    FE_RESET_R/77             $49=      $48                  ?99                 	;0
92   73    FE_FETCH_R/78             ?0        $49                  16?3                	;99	>>99	<<98
93   74    ECHO/40                   ?0        62:'                                                            <option selected value="' ?0                  	;0
94   75    ECHO/40                   ?0        16?3                 ?0                  	;0
95   76    ECHO/40                   ?0        63:'">'              ?0                  	;0
96   77    ECHO/40                   ?0        16?3                 ?0                  	;0
97   78    ECHO/40                   ?0        64:'</option>
                                                            ' ?0                  	;0
98   79    JMP/42                    ?0        ?92                  ?0                  	;0	>>92
99   79    FE_FREE/127               ?0        $49                  ?0                  	;0	<<91
100  82    GOTO/253                  ?0        ?1558                ?65                 	;0
101  84    ECHO/40                   ?0        66:'"><strong>XUI Forum</strong></a> for instructions on how to update.</p>
							' ?0                  	;0
102  85    FETCH_DIM_R/81            $50=      16?4                 67:'changelog'      	;0
103  85    FE_RESET_R/77             $51=      $50                  ?130                	;0
104  85    FE_FETCH_R/78             ?0        $51                  16?5                	;130	>>130	<<129
105  86    ECHO/40                   ?0        68:'							<h5 class="card-title text-white mt-4">Changelog - v' ?0                  	;0
106  87    FETCH_DIM_R/81            $52=      16?5                 69:'version'        	;0
107  87    FETCH_DIM_R/81            $53=      16?5                 70:'revision'       	;0
108  87    JMPZ/43                   ?0        $53                  ?116                	;0	>>116
109  87    INIT_FCALL_BY_NAME/59     ?0        ?0                   71:'intval'         	;1
110  87    FETCH_DIM_FUNC_ARG/93     $54=      16?5                 73:'revision'       	;1
111  87    SEND_VAR_EX/66            ?80       $54                  ?1                  	;0
112  87    DO_FCALL_BY_NAME/131      $55=      ?0                   ?0                  	;0
113  87    CONCAT/8                  #56=      74:' R'              $55                 	;0
114  87    QM_ASSIGN/22              #57=      #56                  ?0                  	;0
115  87    JMP/42                    ?0        ?117                 ?0                  	;0	>>117
116  87    QM_ASSIGN/22              #57=      75:''                ?0                  	;0	<<108
117  87    CONCAT/8                  #58=      $52                  #57                 	;0	<<115
118  87    ECHO/40                   ?0        #58                  ?0                  	;0
119  88    ECHO/40                   ?0        76:'</h5>
							<ul>' ?0                  	;0
120  89    FETCH_DIM_R/81            $59=      16?5                 77:'changes'        	;0
121  89    FE_RESET_R/77             $60=      $59                  ?127                	;0
122  89    FE_FETCH_R/78             ?0        $60                  16?6                	;127	>>127	<<126
123  90    ECHO/40                   ?0        78:'								<li>'    ?0                  	;0
124  91    ECHO/40                   ?0        16?6                 ?0                  	;0
125  92    ECHO/40                   ?0        79:'</li>
							'   ?0                  	;0
126  93    JMP/42                    ?0        ?122                 ?0                  	;0	>>122
127  93    FE_FREE/127               ?0        $60                  ?0                  	;0	<<121
128  96    ECHO/40                   ?0        80:'</ul>
							'   ?0                  	;0
129  97    JMP/42                    ?0        ?104                 ?0                  	;0	>>104
130  97    FE_FREE/127               ?0        $51                  ?0                  	;0	<<103
131  100   ECHO/40                   ?0        81:'							<br/><a href="' ?0                  	;0
132  101   INIT_FCALL_BY_NAME/59     ?0        ?0                   82:'str_replace'    	;3
133  101   SEND_VAL_EX/116           ?80       84:'"'               ?1                  	;0
134  101   SEND_VAL_EX/116           ?96       85:'\\"'             ?2                  	;0
135  101   FETCH_DIM_FUNC_ARG/93     $61=      16?4                 86:'url'            	;3
136  101   SEND_VAR_EX/66            ?112      $61                  ?3                  	;0
137  101   DO_FCALL_BY_NAME/131      $62=      ?0                   ?0                  	;0
138  101   ECHO/40                   ?0        $62                  ?0                  	;0
139  102   GOTO/253                  ?0        ?205                 ?87                 	;0
140  104   INIT_FCALL_BY_NAME/59     ?0        ?0                   88:'htmlspecialchars'	;1
141  104   FETCH_DIM_FUNC_ARG/93     $63=      16?0                 90:'on_demand_wait_time'	;1
142  104   SEND_VAR_EX/66            ?80       $63                  ?1                  	;0
143  104   DO_FCALL_BY_NAME/131      $64=      ?0                   ?0                  	;0
144  104   ECHO/40                   ?0        $64                  ?0                  	;0
145  105   ECHO/40                   ?0        91:'">
													</div>
                                                    <label class="col-md-4 col-form-label" for="request_prebuffer">Request Prebuffer <i title="When you request a stream on-demand, ask the provider to send a prebuffer so the stream starts quicker. This will only work if your provider is using XUI. The prebuffer will mean your source could be 10 seconds or so behind, but it will load significantly quicker.<br/><br/>On - URL means automatically append ?prebuffer=1 to the URL, On - Header sends the prebuffer request as a header instead. Header requests are only accepted when requesting from XUI v1.4.4+" class="tooltip text-secondary far fa-circle"></i></label>
													<div class="col-md-2">
                                                        <input name="request_prebuffer" id="request_prebuffer" type="checkbox"' ?0                  	;0
146  106   FETCH_DIM_R/81            $65=      16?0                 92:'request_prebuffer'	;0
147  106   IS_EQUAL/17               #66=      $65                  93:1                	;0
148  106   BOOL_NOT/13               #67=      #66                  ?0                  	;0
149  106   JMPZ/43                   ?0        #67                  ?151                	;0	>>151
150  107   GOTO/253                  ?0        ?152                 ?94                 	;0
151  109   ECHO/40                   ?0        95:' checked '       ?0                  	;0	<<149
152  111   GOTO/253                  ?0        ?1056                ?96                 	;0
153  113   ECHO/40                   ?0        97:' checked '       ?0                  	;0
154  115   ECHO/40                   ?0        98:'data-plugin="switchery" class="js-switch" data-color="#039cfd"/>
													</div>
                                                    <label class="col-md-4 col-form-label" for="mag_container">Default Container</label>
													<div class="col-md-2">
														<select name="mag_container" id="mag_container" class="form-control" data-toggle="select2">
															' ?0                  	;0
155  116   FE_RESET_R/77             $68=      99:array (
  'ts' => 'TS',
  'm3u8' => 'M3U8',
) ?172                	;0
156  116   FE_FETCH_R/78             #69=      $68                  16?1                	;172	>>172	<<171
157  116   ASSIGN/38                 ?52       16?2                 #69                 	;0
158  117   ECHO/40                   ?0        100:'															<option ' ?0                  	;0
159  118   FETCH_DIM_R/81            $71=      16?0                 101:'mag_container' 	;0
160  118   IS_EQUAL/17               #72=      $71                  16?2                	;0
161  118   BOOL_NOT/13               #73=      #72                  ?0                  	;0
162  118   JMPZ/43                   ?0        #73                  ?165                	;0	>>165
163  119   NOP/0                     ?0        ?0                   ?0                  	;1
164  119   GOTO/253                  ?0        ?166                 ?102                	;0
165  121   ECHO/40                   ?0        103:'selected '      ?0                  	;0	<<162
166  123   ECHO/40                   ?0        104:'value="'        ?0                  	;0
167  124   ECHO/40                   ?0        16?2                 ?0                  	;0
168  125   ECHO/40                   ?0        105:'">'             ?0                  	;0
169  126   ECHO/40                   ?0        16?1                 ?0                  	;0
170  127   ECHO/40                   ?0        106:'</option>
															' ?0                  	;0
171  128   JMP/42                    ?0        ?156                 ?0                  	;0	>>156
172  128   FE_FREE/127               ?0        $68                  ?0                  	;0	<<155
173  131   GOTO/253                  ?0        ?1451                ?107                	;0
174  133   ECHO/40                   ?0        108:'">
													</div>
                                                </div>
												<div class="form-group row mb-4">
                                                    <label class="col-md-4 col-form-label" for="allow_cdn_access">Allow CDN / Forwarding <i title="Allow X-Forwarded-For to forward the correct IP to XUI and turn off path encryption in favour of token based encryption when streaming.<br/>To set up allowed IP\'s for forwarding, follow the CDN setup tutorial on the Billing Panel. Advanced usage only." class="tooltip text-secondary far fa-circle"></i></label>
													<div class="col-md-2">
														<input name="allow_cdn_access" id="allow_cdn_access" type="checkbox"' ?0                  	;0
175  134   FETCH_DIM_R/81            $74=      16?0                 109:'allow_cdn_access'	;0
176  134   IS_EQUAL/17               #75=      $74                  110:1               	;0
177  134   BOOL_NOT/13               #76=      #75                  ?0                  	;0
178  134   JMPZ/43                   ?0        #76                  ?180                	;0	>>180
179  135   GOTO/253                  ?0        ?181                 ?111                	;0
180  137   ECHO/40                   ?0        112:' checked '      ?0                  	;0	<<178
181  139   ECHO/40                   ?0        113:'data-plugin="switchery" class="js-switch" data-color="#039cfd"/>
													</div>
                                                    <label class="col-md-4 col-form-label" for="stop_failures">Max Failures <i title="How many failures before exiting stream monitor. For example, if set to 3 then the stream monitor will allow 3 failures, break, then the monitor will be restarted by the streams Cron at the next minute marker. If set to 0 streams will continue to restart forever." class="tooltip text-secondary far fa-circle"></i></label>
													<div class="col-md-2">
														<input type="text" class="form-control text-center" id="stop_failures" name="stop_failures" value="' ?0                  	;0
182  140   GOTO/253                  ?0        ?214                 ?114                	;0
183  143   ECHO/40                   ?0        115:'data-plugin="switchery" class="js-switch" data-color="#039cfd"/>
													</div>
													<div class="col-md-6">
														<input type="text" class="form-control" id="expired_video_path" name="expired_video_path" value="' ?0                  	;0
184  144   INIT_FCALL_BY_NAME/59     ?0        ?0                   116:'htmlspecialchars'	;1
185  144   FETCH_DIM_FUNC_ARG/93     $77=      16?0                 118:'expired_video_path'	;1
186  144   SEND_VAR_EX/66            ?80       $77                  ?1                  	;0
187  144   DO_FCALL_BY_NAME/131      $78=      ?0                   ?0                  	;0
188  144   ECHO/40                   ?0        $78                  ?0                  	;0
189  145   ECHO/40                   ?0        119:'" placeholder="Leave blank to use default XUI video.">
													</div>
												</div>
                                                <div class="form-group row mb-4">
													<label class="col-md-4 col-form-label" for="show_expiring_video">Expiring Video <i title="Show this video once per day 7 days prior to a line expiring." class="tooltip text-secondary far fa-circle"></i></label>
													<div class="col-md-2">
														<input name="show_expiring_video" id="show_expiring_video" type="checkbox"' ?0                  	;0
190  146   FETCH_DIM_R/81            $79=      16?0                 120:'show_expiring_video'	;0
191  146   IS_EQUAL/17               #80=      $79                  121:1               	;0
192  146   BOOL_NOT/13               #81=      #80                  ?0                  	;0
193  146   JMPZ/43                   ?0        #81                  ?195                	;0	>>195
194  147   GOTO/253                  ?0        ?1813                ?122                	;0
195  149   GOTO/253                  ?0        ?1812                ?123                	;0	<<193
196  151   ECHO/40                   ?0        124:'data-plugin="switchery" class="js-switch" data-color="#039cfd"/>
													</div>
                                                    <label class="col-md-4 col-form-label" for="php_loopback">Loopback Streams via PHP <i title="Don\'t use FFMPEG to handle loopback streams, have PHP read them directly and generate HLS." class="tooltip text-secondary far fa-circle"></i></label>
													<div class="col-md-2">
														<input name="php_loopback" id="php_loopback" type="checkbox"' ?0                  	;0
197  152   FETCH_DIM_R/81            $82=      16?0                 125:'php_loopback'  	;0
198  152   IS_EQUAL/17               #83=      $82                  126:1               	;0
199  152   BOOL_NOT/13               #84=      #83                  ?0                  	;0
200  152   JMPZ/43                   ?0        #84                  ?202                	;0	>>202
201  153   GOTO/253                  ?0        ?203                 ?127                	;0
202  155   ECHO/40                   ?0        128:' checked '      ?0                  	;0	<<200
203  157   ECHO/40                   ?0        129:'data-plugin="switchery" class="js-switch" data-color="#039cfd"/>
													</div>
												</div>
                                                <h5 class="card-title mb-4">Stream Monitor Settings</h5>
                                                <div class="form-group row mb-4">
                                                    <label class="col-md-4 col-form-label" for="audio_restart_loss">Restart on Audio Loss <i title="Restart stream periodically if no audio is detected." class="tooltip text-secondary far fa-circle"></i></label>
													<div class="col-md-2">
														<input name="audio_restart_loss" id="audio_restart_loss" type="checkbox"' ?0                  	;0
204  158   GOTO/253                  ?0        ?695                 ?130                	;0
205  160   ECHO/40                   ?0        131:'" class="text-white font-weight-semibold text-uppercase">Go to Release Thread <i class="mdi mdi-arrow-right"></i></a>
						</div>
						' ?0                  	;0
206  162   ECHO/40                   ?0        132:'					</div>
					<div class="card">
						<div class="card-body">
							<div id="basicwizard">
								<ul class="nav nav-pills bg-light nav-justified form-wizard-header mb-4">
									<li class="nav-item">
										<a href="#interface" data-toggle="tab" class="nav-link rounded-0 pt-2 pb-2"> 
											<i class="mdi mdi-account-card-details-outline mr-1"></i>
											<span class="d-none d-sm-inline">General</span>
										</a>
									</li>
									<li class="nav-item">
										<a href="#security" data-toggle="tab" class="nav-link rounded-0 pt-2 pb-2"> 
											<i class="mdi mdi mdi-shield-lock mr-1"></i>
											<span class="d-none d-sm-inline">Security</span>
										</a>
									</li>
									<li class="nav-item">
										<a href="#api" data-toggle="tab" class="nav-link rounded-0 pt-2 pb-2"> 
											<i class="mdi mdi-code-tags mr-1"></i>
											<span class="d-none d-sm-inline">API</span>
										</a>
									</li>
									<li class="nav-item">
										<a href="#streaming" data-toggle="tab" class="nav-link rounded-0 pt-2 pb-2"> 
											<i class="mdi mdi-play mr-1"></i>
											<span class="d-none d-sm-inline">Streaming</span>
										</a>
									</li>
									<li class="nav-item">
										<a href="#mag" data-toggle="tab" class="nav-link rounded-0 pt-2 pb-2"> 
											<i class="mdi mdi-tablet mr-1"></i>
											<span class="d-none d-sm-inline">MAG</span>
										</a>
									</li>
                                    <li class="nav-item">
										<a href="#webplayer" data-toggle="tab" class="nav-link rounded-0 pt-2 pb-2"> 
											<i class="mdi mdi-web mr-1"></i>
											<span class="d-none d-sm-inline">Web Player</span>
										</a>
									</li>
                                    <li class="nav-item">
										<a href="#logs" data-toggle="tab" class="nav-link rounded-0 pt-2 pb-2"> 
											<i class="mdi mdi-file-document-outline mr-1"></i>
											<span class="d-none d-sm-inline">Logs</span>
										</a>
									</li>
								</ul>
								<div class="tab-content b-0 mb-0 pt-0">
									<div class="tab-pane" id="interface">
										<div class="row">
											<div class="col-12">
                                                <h5 class="card-title mb-4">Preferences</h5>
												<div class="form-group row mb-4">
													<label class="col-md-4 col-form-label" for="server_name">Server Name <i title="The name of your streaming service." class="tooltip text-secondary far fa-circle"></i></label>
													<div class="col-md-8">
														<input type="text" class="form-control" id="server_name" name="server_name" value="' ?0                  	;0
207  163   INIT_FCALL_BY_NAME/59     ?0        ?0                   133:'htmlspecialchars'	;1
208  163   FETCH_DIM_FUNC_ARG/93     $85=      16?0                 135:'server_name'   	;1
209  163   SEND_VAR_EX/66            ?80       $85                  ?1                  	;0
210  163   DO_FCALL_BY_NAME/131      $86=      ?0                   ?0                  	;0
211  163   ECHO/40                   ?0        $86                  ?0                  	;0
212  164   ECHO/40                   ?0        136:'">
													</div>
												</div>
												<div class="form-group row mb-4">
													<label class="col-md-4 col-form-label" for="default_timezone">Server Timezone <i title="Default timezone for the Admin & Reseller Interface, this will be the default for all users unless they change their profile timezone." class="tooltip text-secondary far fa-circle"></i></label>
													<div class="col-md-8">
														<select name="default_timezone" id="default_timezone" class="form-control" data-toggle="select2">
															' ?0                  	;0
213  165   GOTO/253                  ?0        ?1669                ?137                	;0
214  167   INIT_FCALL_BY_NAME/59     ?0        ?0                   138:'htmlspecialchars'	;1
215  167   FETCH_DIM_FUNC_ARG/93     $87=      16?0                 140:'stop_failures' 	;1
216  167   SEND_VAR_EX/66            ?80       $87                  ?1                  	;0
217  167   DO_FCALL_BY_NAME/131      $88=      ?0                   ?0                  	;0
218  167   ECHO/40                   ?0        $88                  ?0                  	;0
219  168   ECHO/40                   ?0        141:'">
													</div>
                                                </div>
                                                <h5 class="card-title mb-4">On-Demand Settings</h5>
                                                <div class="form-group row mb-4">
													<label class="col-md-4 col-form-label" for="on_demand_instant_off">Instant Off <i title="When a client disconnects from an on-demand stream, check the current total connections for that stream and turn it off if nobody is watching." class="tooltip text-secondary far fa-circle"></i></label>
													<div class="col-md-2">
														<input name="on_demand_instant_off" id="on_demand_instant_off" type="checkbox"' ?0                  	;0
220  169   FETCH_DIM_R/81            $89=      16?0                 142:'on_demand_instant_off'	;0
221  169   IS_EQUAL/17               #90=      $89                  143:1               	;0
222  169   BOOL_NOT/13               #91=      #90                  ?0                  	;0
223  169   JMPZ/43                   ?0        #91                  ?225                	;0	>>225
224  170   GOTO/253                  ?0        ?226                 ?144                	;0
225  172   ECHO/40                   ?0        145:' checked '      ?0                  	;0	<<223
226  174   GOTO/253                  ?0        ?843                 ?146                	;0
227  177   ECHO/40                   ?0        147:'data-plugin="switchery" class="js-switch" data-color="#039cfd"/>
													</div>
                                                    <label class="col-md-4 col-form-label" for="ip_logout">Logout On IP Change <i title="Enable to destroy sessions if the IP changes during use, this will safeguard you from cookie attacks." class="tooltip text-secondary far fa-circle"></i></label>
													<div class="col-md-2">
														<input name="ip_logout" id="ip_logout" type="checkbox"' ?0                  	;0
228  178   FETCH_DIM_R/81            $92=      16?0                 148:'ip_logout'     	;0
229  178   IS_EQUAL/17               #93=      $92                  149:1               	;0
230  178   BOOL_NOT/13               #94=      #93                  ?0                  	;0
231  178   JMPZ/43                   ?0        #94                  ?233                	;0	>>233
232  179   GOTO/253                  ?0        ?234                 ?150                	;0
233  181   ECHO/40                   ?0        151:' checked '      ?0                  	;0	<<231
234  183   GOTO/253                  ?0        ?1190                ?152                	;0
235  185   ECHO/40                   ?0        153:'data-plugin="switchery" class="js-switch" data-color="#039cfd"/>
													</div>
												</div>
                                                <div class="form-group row mb-4">
													<label class="col-md-4 col-form-label" for="cleanup">Auto-Cleanup Files <i title="Automatically clean up redundant files in the background. Recommended." class="tooltip text-secondary far fa-circle"></i></label>
													<div class="col-md-2">
														<input name="cleanup" id="cleanup" type="checkbox"' ?0                  	;0
236  186   FETCH_DIM_R/81            $95=      16?0                 154:'cleanup'       	;0
237  186   IS_EQUAL/17               #96=      $95                  155:1               	;0
238  186   BOOL_NOT/13               #97=      #96                  ?0                  	;0
239  186   JMPZ/43                   ?0        #97                  ?241                	;0	>>241
240  187   GOTO/253                  ?0        ?242                 ?156                	;0
241  189   ECHO/40                   ?0        157:' checked '      ?0                  	;0	<<239
242  191   ECHO/40                   ?0        158:'data-plugin="switchery" class="js-switch" data-color="#039cfd"/>
													</div>
                                                    <label class="col-md-4 col-form-label" for="check_vod">Check VOD Cron <i title="Check that VOD exists periodically, if not set it to not-encoded. Not recommended if you have a lot of VOD." class="tooltip text-secondary far fa-circle"></i></label>
													<div class="col-md-2">
														<input name="check_vod" id="check_vod" type="checkbox"' ?0                  	;0
243  192   GOTO/253                  ?0        ?613                 ?159                	;0
244  194   ECHO/40                   ?0        160:'data-plugin="switchery" class="js-switch" data-color="#039cfd"/>
													</div>
                                                </div>
                                                <div class="form-group row mb-4">
                                                    <label class="col-md-4 col-form-label" for="dashboard_display_alt">Alternate Server View <i title="Display servers on the dashboard with an alternate layout, wide vs square layout." class="tooltip text-secondary far fa-circle"></i></label>
													<div class="col-md-2">
														<input name="dashboard_display_alt" id="dashboard_display_alt" type="checkbox"' ?0                  	;0
245  195   FETCH_DIM_R/81            $98=      16?0                 161:'dashboard_display_alt'	;0
246  195   IS_EQUAL/17               #99=      $98                  162:1               	;0
247  195   BOOL_NOT/13               #100=     #99                  ?0                  	;0
248  195   JMPZ/43                   ?0        #100                 ?250                	;0	>>250
249  196   GOTO/253                  ?0        ?251                 ?163                	;0
250  198   ECHO/40                   ?0        164:' checked '      ?0                  	;0	<<248
251  200   ECHO/40                   ?0        165:'data-plugin="switchery" class="js-switch" data-color="#039cfd"/>
													</div>
                                                    <label class="col-md-4 col-form-label" for="header_stats_sh">Show Header Stats <i title="Show server statistics in header menu." class="tooltip text-secondary far fa-circle"></i></label>
													<div class="col-md-2">
														<input name="header_stats" id="header_stats_sh" type="checkbox"' ?0                  	;0
252  201   GOTO/253                  ?0        ?777                 ?166                	;0
253  203   INIT_FCALL_BY_NAME/59     ?0        ?0                   167:'htmlspecialchars'	;1
254  203   FETCH_DIM_FUNC_ARG/93     $101=     16?0                 169:'auth_flood_limit'	;1
255  203   SEND_VAR_EX/66            ?80       $101                 ?1                  	;0
256  203   DO_FCALL_BY_NAME/131      $102=     ?0                   ?0                  	;0
257  203   ECHO/40                   ?0        $102                 ?0                  	;0
258  204   ECHO/40                   ?0        170:'">
													</div>
                                                    <label class="col-md-4 col-form-label" for="auth_flood_seconds">Auth Flood Seconds <i title="Number of seconds to calculate number of requests for." class="tooltip text-secondary far fa-circle"></i></label>
													<div class="col-md-2">
														<input type="text" class="form-control text-center" id="auth_flood_seconds" name="auth_flood_seconds" value="' ?0                  	;0
259  205   INIT_FCALL_BY_NAME/59     ?0        ?0                   171:'htmlspecialchars'	;1
260  205   FETCH_DIM_FUNC_ARG/93     $103=     16?0                 173:'auth_flood_seconds'	;1
261  205   SEND_VAR_EX/66            ?80       $103                 ?1                  	;0
262  205   DO_FCALL_BY_NAME/131      $104=     ?0                   ?0                  	;0
263  205   ECHO/40                   ?0        $104                 ?0                  	;0
264  206   ECHO/40                   ?0        174:'">
													</div>
												</div>
												<div class="form-group row mb-4">
                                                    <label class="col-md-4 col-form-label" for="auth_flood_sleep">Auth Flood Sleep <i title="How long to sleep for when when the limit has been reached. The request will continue after this sleep." class="tooltip text-secondary far fa-circle"></i></label>
													<div class="col-md-2">
														<input type="text" class="form-control text-center" id="auth_flood_sleep" name="auth_flood_sleep" value="' ?0                  	;0
265  207   INIT_FCALL_BY_NAME/59     ?0        ?0                   175:'htmlspecialchars'	;1
266  207   FETCH_DIM_FUNC_ARG/93     $105=     16?0                 177:'auth_flood_sleep'	;1
267  207   SEND_VAR_EX/66            ?80       $105                 ?1                  	;0
268  207   DO_FCALL_BY_NAME/131      $106=     ?0                   ?0                  	;0
269  207   ECHO/40                   ?0        $106                 ?0                  	;0
270  208   GOTO/253                  ?0        ?308                 ?178                	;0
271  210   FETCH_DIM_R/81            $107=     16?0                 179:'enable_connection_problem_indication'	;0
272  210   IS_EQUAL/17               #108=     $107                 180:1               	;0
273  210   BOOL_NOT/13               #109=     #108                 ?0                  	;0
274  210   JMPZ/43                   ?0        #109                 ?276                	;0	>>276
275  211   GOTO/253                  ?0        ?277                 ?181                	;0
276  213   ECHO/40                   ?0        182:' checked '      ?0                  	;0	<<274
277  215   ECHO/40                   ?0        183:'data-plugin="switchery" class="js-switch" data-color="#039cfd"/>
													</div>
												</div>
												<div class="form-group row mb-4">
													<label class="col-md-4 col-form-label" for="show_tv_channel_logo">Show Channel Logos</label>
													<div class="col-md-2">
														<input name="show_tv_channel_logo" id="show_tv_channel_logo" type="checkbox"' ?0                  	;0
278  216   FETCH_DIM_R/81            $110=     16?0                 184:'show_tv_channel_logo'	;0
279  216   IS_EQUAL/17               #111=     $110                 185:1               	;0
280  216   BOOL_NOT/13               #112=     #111                 ?0                  	;0
281  216   JMPZ/43                   ?0        #112                 ?283                	;0	>>283
282  217   GOTO/253                  ?0        ?1463                ?186                	;0
283  219   GOTO/253                  ?0        ?1462                ?187                	;0	<<281
284  221   INIT_FCALL_BY_NAME/59     ?0        ?0                   188:'htmlspecialchars'	;1
285  221   FETCH_DIM_FUNC_ARG/93     $113=     16?0                 190:'bruteforce_username_attempts'	;1
286  221   SEND_VAR_EX/66            ?80       $113                 ?1                  	;0
287  221   DO_FCALL_BY_NAME/131      $114=     ?0                   ?0                  	;0
288  221   JMP_SET/152               #115=     $114                 ?290                	;0
289  221   QM_ASSIGN/22              #115=     191:0                ?0                  	;0
290  221   ECHO/40                   ?0        #115                 ?0                  	;0
291  222   ECHO/40                   ?0        192:'">
													</div>
                                                </div>
                                                <div class="form-group row mb-4">
                                                    <label class="col-md-4 col-form-label" for="bruteforce_frequency">Bruteforce Frequency <i title="Time between attempts for MAC and Username bruteforce. X attempts per X seconds." class="tooltip text-secondary far fa-circle"></i></label>
													<div class="col-md-2">
														<input type="text" class="form-control text-center" id="bruteforce_frequency" name="bruteforce_frequency" value="' ?0                  	;0
292  223   INIT_FCALL_BY_NAME/59     ?0        ?0                   193:'htmlspecialchars'	;1
293  223   FETCH_DIM_FUNC_ARG/93     $116=     16?0                 195:'bruteforce_frequency'	;1
294  223   SEND_VAR_EX/66            ?80       $116                 ?1                  	;0
295  223   DO_FCALL_BY_NAME/131      $117=     ?0                   ?0                  	;0
296  223   JMP_SET/152               #118=     $117                 ?298                	;0
297  223   QM_ASSIGN/22              #118=     196:0                ?0                  	;0
298  223   ECHO/40                   ?0        #118                 ?0                  	;0
299  224   ECHO/40                   ?0        197:'">
													</div>
                                                    <label class="col-md-4 col-form-label" for="login_flood">Maximum Login Attempts <i title="How many login attempts are permitted before banning IP address. Use 0 for unlimited, or if you have other measures in place such as reCAPTCHA or access code." class="tooltip text-secondary far fa-circle"></i></label>
													<div class="col-md-2">
														<input type="text" class="form-control text-center" id="login_flood" name="login_flood" value="' ?0                  	;0
300  225   INIT_FCALL_BY_NAME/59     ?0        ?0                   198:'htmlspecialchars'	;1
301  225   FETCH_DIM_FUNC_ARG/93     $119=     16?0                 200:'login_flood'   	;1
302  225   SEND_VAR_EX/66            ?80       $119                 ?1                  	;0
303  225   DO_FCALL_BY_NAME/131      $120=     ?0                   ?0                  	;0
304  225   JMP_SET/152               #121=     $120                 ?306                	;0
305  225   QM_ASSIGN/22              #121=     201:0                ?0                  	;0
306  225   ECHO/40                   ?0        #121                 ?0                  	;0
307  226   GOTO/253                  ?0        ?1167                ?202                	;0
308  228   ECHO/40                   ?0        203:'">
													</div>
													<label class="col-md-4 col-form-label" for="flood_ips_exclude">Flood IP Exclusions <i title="Separate each IP with a comma." class="tooltip text-secondary far fa-circle"></i></label>
													<div class="col-md-2">
														<input type="text" class="form-control" id="flood_ips_exclude" name="flood_ips_exclude" value="' ?0                  	;0
309  229   INIT_FCALL_BY_NAME/59     ?0        ?0                   204:'htmlspecialchars'	;1
310  229   FETCH_DIM_FUNC_ARG/93     $122=     16?0                 206:'flood_ips_exclude'	;1
311  229   SEND_VAR_EX/66            ?80       $122                 ?1                  	;0
312  229   DO_FCALL_BY_NAME/131      $123=     ?0                   ?0                  	;0
313  229   ECHO/40                   ?0        $123                 ?0                  	;0
314  230   ECHO/40                   ?0        207:'">
													</div>
												</div>
                                                <div class="form-group row mb-4">
                                                    <label class="col-md-4 col-form-label" for="bruteforce_mac_attempts">Detect MAC Bruteforce <i title="Automatically detect and block IP addresses trying to bruteforce MAG / Enigma devices. Enter 0 attempts to disable." class="tooltip text-secondary far fa-circle"></i></label>
													<div class="col-md-2">
														<input type="text" class="form-control text-center" id="bruteforce_mac_attempts" name="bruteforce_mac_attempts" value="' ?0                  	;0
315  231   INIT_FCALL_BY_NAME/59     ?0        ?0                   208:'htmlspecialchars'	;1
316  231   FETCH_DIM_FUNC_ARG/93     $124=     16?0                 210:'bruteforce_mac_attempts'	;1
317  231   SEND_VAR_EX/66            ?80       $124                 ?1                  	;0
318  231   DO_FCALL_BY_NAME/131      $125=     ?0                   ?0                  	;0
319  231   JMP_SET/152               #126=     $125                 ?321                	;0
320  231   QM_ASSIGN/22              #126=     211:0                ?0                  	;0
321  231   ECHO/40                   ?0        #126                 ?0                  	;0
322  232   ECHO/40                   ?0        212:'">
													</div>
                                                    <label class="col-md-4 col-form-label" for="bruteforce_username_attempts">Detect Username Bruteforce <i title="Automatically detect and block IP addresses trying to bruteforce lines. Enter 0 attempts to disable." class="tooltip text-secondary far fa-circle"></i></label>
													<div class="col-md-2">
														<input type="text" class="form-control text-center" id="bruteforce_username_attempts" name="bruteforce_username_attempts" value="' ?0                  	;0
323  233   GOTO/253                  ?0        ?284                 ?213                	;0
324  235   INIT_FCALL_BY_NAME/59     ?0        ?0                   214:'CdbE6BC7B26c4902'	;0
325  235   DO_FCALL_BY_NAME/131      $127=     ?0                   ?0                  	;0
326  235   ASSIGN/38                 ?110      16?0                 $127                	;0
327  236   INIT_FCALL_BY_NAME/59     ?0        ?0                   216:'b20D33b2749ADfec'	;0
328  236   DO_FCALL_BY_NAME/131      $129=     ?0                   ?0                  	;0
329  236   ASSIGN/38                 ?112      16?7                 $129                	;0
330  237   ASSIGN/38                 ?113      16?8                 218:'Settings'      	;0
331  238   INCLUDE_OR_EVAL/73        ?114      219:'header.php'     ?0                  	;2
332  239   ECHO/40                   ?0        220:'<div class="wrapper boxed-layout-ext"' ?0                  	;0
333  240   GOTO/253                  ?0        ?1124                ?221                	;0
334  243   ECHO/40                   ?0        222:'data-plugin="switchery" class="js-switch" data-color="#039cfd"/>
													</div>
                                                </div>
                                                <div class="form-group row mb-4">
                                                    <label class="col-md-4 col-form-label" for="read_buffer_size">Read Buffer Size <i title="Amount of buffer to use when reading files in chunks." class="tooltip text-secondary far fa-circle"></i></label>
													<div class="col-md-2">
														<input type="text" class="form-control text-center" id="read_buffer_size" name="read_buffer_size" value="' ?0                  	;0
335  244   INIT_FCALL_BY_NAME/59     ?0        ?0                   223:'htmlspecialchars'	;1
336  244   FETCH_DIM_FUNC_ARG/93     $133=     16?0                 225:'read_buffer_size'	;1
337  244   SEND_VAR_EX/66            ?80       $133                 ?1                  	;0
338  244   DO_FCALL_BY_NAME/131      $134=     ?0                   ?0                  	;0
339  244   ECHO/40                   ?0        $134                 ?0                  	;0
340  245   ECHO/40                   ?0        226:'">
													</div>
                                                    <label class="col-md-4 col-form-label" for="connection_sync_timer">Redis Connection Sync Timer <i title="Time between runs of the Redis Connection Sync script." class="tooltip text-secondary far fa-circle"></i></label>
													<div class="col-md-2">
														<input type="text" class="form-control text-center" id="connection_sync_timer" name="connection_sync_timer" value="' ?0                  	;0
341  246   INIT_FCALL_BY_NAME/59     ?0        ?0                   227:'htmlspecialchars'	;1
342  246   FETCH_DIM_FUNC_ARG/93     $135=     16?0                 229:'connection_sync_timer'	;1
343  246   SEND_VAR_EX/66            ?80       $135                 ?1                  	;0
344  246   DO_FCALL_BY_NAME/131      $136=     ?0                   ?0                  	;0
345  246   ECHO/40                   ?0        $136                 ?0                  	;0
346  247   GOTO/253                  ?0        ?174                 ?230                	;0
347  250   ECHO/40                   ?0        231:'data-plugin="switchery" class="js-switch" data-color="#039cfd"/>
													</div>
												</div>
												<div class="form-group row mb-4">
													<label class="col-md-4 col-form-label" for="playback_limit">Playback Limit <i title="Show warning message and stop stream after X hours of continuous playback." class="tooltip text-secondary far fa-circle"></i></label>
													<div class="col-md-2">
														<input type="text" class="form-control text-center" id="playback_limit" name="playback_limit" value="' ?0                  	;0
348  251   INIT_FCALL_BY_NAME/59     ?0        ?0                   232:'htmlspecialchars'	;1
349  251   FETCH_DIM_FUNC_ARG/93     $137=     16?0                 234:'playback_limit'	;1
350  251   SEND_VAR_EX/66            ?80       $137                 ?1                  	;0
351  251   DO_FCALL_BY_NAME/131      $138=     ?0                   ?0                  	;0
352  251   ECHO/40                   ?0        $138                 ?0                  	;0
353  252   ECHO/40                   ?0        235:'">
													</div>
                                                    <label class="col-md-4 col-form-label" for="tv_channel_default_aspect">Default Aspect Ratio <i title="Set the default aspect ratio of streams. Fit being the recommended option." class="tooltip text-secondary far fa-circle"></i></label>
													<div class="col-md-2">
														<select name="tv_channel_default_aspect" id="tv_channel_default_aspect" class="form-control" data-toggle="select2">
															' ?0                  	;0
354  253   FE_RESET_R/77             $139=     236:array (
  0 => 'fit',
  1 => 'big',
  2 => 'opt',
  3 => 'exp',
  4 => 'cmb',
) ?370                	;0
355  253   FE_FETCH_R/78             ?0        $139                 16?2                	;370	>>370	<<369
356  254   ECHO/40                   ?0        237:'															<option ' ?0                  	;0
357  255   FETCH_DIM_R/81            $140=     16?0                 238:'tv_channel_default_aspect'	;0
358  255   IS_EQUAL/17               #141=     $140                 16?2                	;0
359  255   BOOL_NOT/13               #142=     #141                 ?0                  	;0
360  255   JMPZ/43                   ?0        #142                 ?363                	;0	>>363
361  256   NOP/0                     ?0        ?0                   ?0                  	;1
362  256   GOTO/253                  ?0        ?364                 ?239                	;0
363  258   ECHO/40                   ?0        240:'selected '      ?0                  	;0	<<360
364  260   ECHO/40                   ?0        241:'value="'        ?0                  	;0
365  261   ECHO/40                   ?0        16?2                 ?0                  	;0
366  262   ECHO/40                   ?0        242:'">'             ?0                  	;0
367  263   ECHO/40                   ?0        16?2                 ?0                  	;0
368  264   ECHO/40                   ?0        243:'</option>
															' ?0                  	;0
369  265   JMP/42                    ?0        ?355                 ?0                  	;0	>>355
370  265   FE_FREE/127               ?0        $139                 ?0                  	;0	<<354
371  267   GOTO/253                  ?0        ?1103                ?244                	;0
372  269   ECHO/40                   ?0        245:' checked '      ?0                  	;0
373  271   ECHO/40                   ?0        246:'data-plugin="switchery" class="js-switch" data-color="#039cfd"/>
													</div>
													<label class="col-md-4 col-form-label" for="group_buttons">Group Buttons <i title="Group action buttons into a drop-down list on compatible pages." class="tooltip text-secondary far fa-circle"></i></label>
													<div class="col-md-2">
														<input name="group_buttons" id="group_buttons" type="checkbox"' ?0                  	;0
374  272   FETCH_DIM_R/81            $143=     16?0                 247:'group_buttons' 	;0
375  272   IS_EQUAL/17               #144=     $143                 248:1               	;0
376  272   BOOL_NOT/13               #145=     #144                 ?0                  	;0
377  272   JMPZ/43                   ?0        #145                 ?379                	;0	>>379
378  273   GOTO/253                  ?0        ?1074                ?249                	;0
379  275   ECHO/40                   ?0        250:' checked '      ?0                  	;0	<<377
380  276   GOTO/253                  ?0        ?1074                ?251                	;0
381  278   ECHO/40                   ?0        252:'data-plugin="switchery" class="js-switch" data-color="#039cfd"/>
													</div>
                                                    <label class="col-md-4 col-form-label" for="auto_send_logs">Auto-Send Logs to XUI <i title="Sends panel error logs automatically to be parsed and verified by the XUI team." class="tooltip text-secondary far fa-circle"></i></label>
													<div class="col-md-2">
														<input name="auto_send_logs" id="auto_send_logs" type="checkbox"' ?0                  	;0
382  279   FETCH_DIM_R/81            $146=     16?0                 253:'auto_send_logs'	;0
383  279   IS_EQUAL/17               #147=     $146                 254:1               	;0
384  279   BOOL_NOT/13               #148=     #147                 ?0                  	;0
385  279   JMPZ/43                   ?0        #148                 ?387                	;0	>>387
386  280   GOTO/253                  ?0        ?388                 ?255                	;0
387  282   ECHO/40                   ?0        256:' checked '      ?0                  	;0	<<385
388  284   ECHO/40                   ?0        257:'data-plugin="switchery" class="js-switch" data-color="#039cfd"/>
													</div>
                                                </div>
                                                <h5 class="card-title mb-4">reCAPTCHA</h5>
                                                <div class="form-group row mb-4">
													<label class="col-md-4 col-form-label">Enable reCAPTCHA <i title="Click here to show active domains for your servers and resellers that you should consider adding to reCAPTCHA." class="tooltip text-secondary far fa-circle" data-toggle="modal" data-target=".bs-domains"></i></label>
													<div class="col-md-2">
														<input name="recaptcha_enable" id="recaptcha_enable" type="checkbox"' ?0                  	;0
389  285   GOTO/253                  ?0        ?852                 ?258                	;0
390  287   ECHO/40                   ?0        259:'														</select>
													</div>
												</div> -->
												<div class="form-group row mb-4">
													<label class="col-md-4 col-form-label" for="message_of_day">Message of the Day <i title="Message to show in the player API. Used by some android apps." class="tooltip text-secondary far fa-circle"></i></label>
													<div class="col-md-8">
														<input type="text" class="form-control" id="message_of_day" name="message_of_day" value="' ?0                  	;0
391  288   INIT_FCALL_BY_NAME/59     ?0        ?0                   260:'htmlspecialchars'	;1
392  288   FETCH_DIM_FUNC_ARG/93     $149=     16?0                 262:'message_of_day'	;1
393  288   SEND_VAR_EX/66            ?80       $149                 ?1                  	;0
394  288   DO_FCALL_BY_NAME/131      $150=     ?0                   ?0                  	;0
395  288   ECHO/40                   ?0        $150                 ?0                  	;0
396  289   ECHO/40                   ?0        263:'">
													</div>
												</div>
                                                <div class="form-group row mb-4">
													<label class="col-md-4 col-form-label" for="default_entries">Show Entries <i title="Number of table entries to show by default in the Admin & Reseller Interface." class="tooltip text-secondary far fa-circle"></i></label>
													<div class="col-md-2">
														<select name="default_entries" id="default_entries" class="form-control" data-toggle="select2">
															' ?0                  	;0
397  290   FE_RESET_R/77             $151=     264:array (
  0 => 10,
  1 => 25,
  2 => 50,
  3 => 250,
  4 => 500,
  5 => 1000,
) ?413                	;0
398  290   FE_FETCH_R/78             ?0        $151                 16?9                	;413	>>413	<<412
399  291   ECHO/40                   ?0        265:'    
															<option' ?0                  	;0
400  292   FETCH_DIM_R/81            $152=     16?0                 266:'default_entries'	;0
401  292   IS_EQUAL/17               #153=     $152                 16?9                	;0
402  292   BOOL_NOT/13               #154=     #153                 ?0                  	;0
403  292   JMPZ/43                   ?0        #154                 ?406                	;0	>>406
404  293   NOP/0                     ?0        ?0                   ?0                  	;1
405  293   GOTO/253                  ?0        ?407                 ?267                	;0
406  295   ECHO/40                   ?0        268:' selected'      ?0                  	;0	<<403
407  297   ECHO/40                   ?0        269:' value="'       ?0                  	;0
408  298   ECHO/40                   ?0        16?9                 ?0                  	;0
409  299   ECHO/40                   ?0        270:'">'             ?0                  	;0
410  300   ECHO/40                   ?0        16?9                 ?0                  	;0
411  301   ECHO/40                   ?0        271:'</option>
															' ?0                  	;0
412  302   JMP/42                    ?0        ?398                 ?0                  	;0	>>398
413  302   FE_FREE/127               ?0        $151                 ?0                  	;0	<<397
414  305   GOTO/253                  ?0        ?1391                ?272                	;0
415  308   ECHO/40                   ?0        273:'data-plugin="switchery" class="js-switch" data-color="#039cfd"/>
													</div>
													<label class="col-md-4 col-form-label" for="disable_ts_allow_restream">Allow Restreamers - MPEG-TS <i title="Override to allow restreamers to still use MPEG-TS while it is disabled." class="tooltip text-secondary far fa-circle"></i></label>
													<div class="col-md-2">
														<input name="disable_ts_allow_restream" id="disable_ts_allow_restream" type="checkbox"' ?0                  	;0
416  309   FETCH_DIM_R/81            $155=     16?0                 274:'disable_ts_allow_restream'	;0
417  309   IS_EQUAL/17               #156=     $155                 275:1               	;0
418  309   BOOL_NOT/13               #157=     #156                 ?0                  	;0
419  309   JMPZ/43                   ?0        #157                 ?421                	;0	>>421
420  310   GOTO/253                  ?0        ?422                 ?276                	;0
421  312   ECHO/40                   ?0        277:' checked '      ?0                  	;0	<<419
422  314   GOTO/253                  ?0        ?652                 ?278                	;0
423  316   ECHO/40                   ?0        279:'">
													</div>
													<label class="col-md-4 col-form-label" for="probesize">Probe Size <i title="Amount of data to be probed in bytes." class="tooltip text-secondary far fa-circle"></i></label>
													<div class="col-md-2">
														<input type="text" class="form-control text-center" id="probesize" name="probesize" value="' ?0                  	;0
424  317   INIT_FCALL_BY_NAME/59     ?0        ?0                   280:'htmlspecialchars'	;1
425  317   FETCH_DIM_FUNC_ARG/93     $158=     16?0                 282:'probesize'     	;1
426  317   SEND_VAR_EX/66            ?80       $158                 ?1                  	;0
427  317   DO_FCALL_BY_NAME/131      $159=     ?0                   ?0                  	;0
428  317   ECHO/40                   ?0        $159                 ?0                  	;0
429  318   ECHO/40                   ?0        283:'">
													</div>
												</div>
                                                <div class="form-group row mb-4">
													<label class="col-md-4 col-form-label" for="ffmpeg_cpu">FFMPEG Version <i title="Which version of FFMPEG to use for movies, created channels and normal streams.<br/><br/>v4.0 - Legacy version from 2018, shipped with XUI originally.<br/>v4.3.2 & v4.4 compiled by XUI.one with all libraries from v4.0 plus many more. Compatible with DASH and NVENC." class="tooltip text-secondary far fa-circle"></i></label>
													<div class="col-md-2">
														<select name="ffmpeg_cpu" id="ffmpeg_cpu" class="form-control" data-toggle="select2">
															' ?0                  	;0
430  319   FE_RESET_R/77             $160=     284:array (
  0 => '4.4',
  1 => '4.3',
  2 => '4.0',
) ?446                	;0
431  319   FE_FETCH_R/78             ?0        $160                 16?2                	;446	>>446	<<445
432  320   ECHO/40                   ?0        285:'															<option ' ?0                  	;0
433  321   FETCH_DIM_R/81            $161=     16?0                 286:'ffmpeg_cpu'    	;0
434  321   IS_EQUAL/17               #162=     $161                 16?2                	;0
435  321   BOOL_NOT/13               #163=     #162                 ?0                  	;0
436  321   JMPZ/43                   ?0        #163                 ?439                	;0	>>439
437  322   NOP/0                     ?0        ?0                   ?0                  	;1
438  322   GOTO/253                  ?0        ?440                 ?287                	;0
439  324   ECHO/40                   ?0        288:'selected '      ?0                  	;0	<<436
440  326   ECHO/40                   ?0        289:'value="'        ?0                  	;0
441  327   ECHO/40                   ?0        16?2                 ?0                  	;0
442  328   ECHO/40                   ?0        290:'">v'            ?0                  	;0
443  329   ECHO/40                   ?0        16?2                 ?0                  	;0
444  330   ECHO/40                   ?0        291:'</option>
															' ?0                  	;0
445  331   JMP/42                    ?0        ?431                 ?0                  	;0	>>431
446  331   FE_FREE/127               ?0        $160                 ?0                  	;0	<<430
447  334   GOTO/253                  ?0        ?1821                ?292                	;0
448  336   INCLUDE_OR_EVAL/73        ?146      293:'session.php'    ?0                  	;2	<<0
449  337   INCLUDE_OR_EVAL/73        ?147      294:'functions.php'  ?0                  	;2
450  338   INIT_FCALL_BY_NAME/59     ?0        ?0                   295:'e6d500e19634d513'	;0
451  338   DO_FCALL_BY_NAME/131      $166=     ?0                   ?0                  	;0
452  338   JMPZ/43                   ?0        $166                 ?454                	;0	>>454
453  339   GOTO/253                  ?0        ?456                 ?297                	;0
454  341   INIT_FCALL_BY_NAME/59     ?0        ?0                   298:'e72f42A93714BA87'	;0	<<452
455  341   DO_FCALL_BY_NAME/131      ?149      ?0                   ?0                  	;0
456  343   GOTO/253                  ?0        ?324                 ?300                	;0
457  345   INIT_FCALL_BY_NAME/59     ?0        ?0                   301:'intval'        	;1
458  345   FETCH_DIM_FUNC_ARG/93     $168=     16?0                 303:'player_opacity'	;1
459  345   SEND_VAR_EX/66            ?80       $168                 ?1                  	;0
460  345   DO_FCALL_BY_NAME/131      $169=     ?0                   ?0                  	;0
461  345   ECHO/40                   ?0        $169                 ?0                  	;0
462  346   ECHO/40                   ?0        304:'">
													</div>
                                                </div>
                                                <div class="form-group row mb-4">
                                                    <label class="col-md-4 col-form-label" for="extract_subtitles">Extract Subtitles <i title="Automatically extract subtitles from movies and episodes while they\'re being processed. Allows for subtitles to be used in Web Player." class="tooltip text-secondary far fa-circle"></i></label>
													<div class="col-md-2">
														<input name="extract_subtitles" id="extract_subtitles" type="checkbox"' ?0                  	;0
463  347   FETCH_DIM_R/81            $170=     16?0                 305:'extract_subtitles'	;0
464  347   IS_EQUAL/17               #171=     $170                 306:1               	;0
465  347   BOOL_NOT/13               #172=     #171                 ?0                  	;0
466  347   JMPZ/43                   ?0        #172                 ?468                	;0	>>468
467  348   GOTO/253                  ?0        ?469                 ?307                	;0
468  350   ECHO/40                   ?0        308:' checked '      ?0                  	;0	<<466
469  352   GOTO/253                  ?0        ?1873                ?309                	;0
470  354   INIT_FCALL_BY_NAME/59     ?0        ?0                   310:'htmlspecialchars'	;1
471  354   FETCH_DIM_FUNC_ARG/93     $173=     16?0                 312:'not_on_air_video_path'	;1
472  354   SEND_VAR_EX/66            ?80       $173                 ?1                  	;0
473  354   DO_FCALL_BY_NAME/131      $174=     ?0                   ?0                  	;0
474  354   ECHO/40                   ?0        $174                 ?0                  	;0
475  355   ECHO/40                   ?0        313:'" placeholder="Leave blank to use default XUI video.">
													</div>
												</div>
												<div class="form-group row mb-4">
													<label class="col-md-4 col-form-label" for="show_banned_video">Banned Video <i title="Show this video when a banned line accesses a stream." class="tooltip text-secondary far fa-circle"></i></label>
													<div class="col-md-2">
														<input name="show_banned_video" id="show_banned_video" type="checkbox"' ?0                  	;0
476  356   FETCH_DIM_R/81            $175=     16?0                 314:'show_banned_video'	;0
477  356   IS_EQUAL/17               #176=     $175                 315:1               	;0
478  356   BOOL_NOT/13               #177=     #176                 ?0                  	;0
479  356   JMPZ/43                   ?0        #177                 ?481                	;0	>>481
480  357   GOTO/253                  ?0        ?482                 ?316                	;0
481  359   ECHO/40                   ?0        317:' checked '      ?0                  	;0	<<479
482  361   GOTO/253                  ?0        ?737                 ?318                	;0
483  364   ECHO/40                   ?0        319:'data-plugin="switchery" class="js-switch" data-color="#039cfd"/>
													</div>
                                                </div>
                                                <div class="form-group row mb-4">
                                                    <label class="col-md-4 col-form-label" for="disable_player_api">Disable Player API <i title="Enable to stop Android Apps / Smart TV\'s from accessing the API." class="tooltip text-secondary far fa-circle"></i></label>
													<div class="col-md-2">
														<input name="disable_player_api" id="disable_player_api" type="checkbox"' ?0                  	;0
484  365   FETCH_DIM_R/81            $178=     16?0                 320:'disable_player_api'	;0
485  365   IS_EQUAL/17               #179=     $178                 321:1               	;0
486  365   BOOL_NOT/13               #180=     #179                 ?0                  	;0
487  365   JMPZ/43                   ?0        #180                 ?489                	;0	>>489
488  366   GOTO/253                  ?0        ?490                 ?322                	;0
489  368   ECHO/40                   ?0        323:' checked '      ?0                  	;0	<<487
490  370   GOTO/253                  ?0        ?865                 ?324                	;0
491  373   ECHO/40                   ?0        325:'data-plugin="switchery" class="js-switch" data-color="#039cfd"/>
													</div>
                                                    <label class="col-md-4 col-form-label" for="search_items">Number of Items <i title="How many search results to display. Maximum of 100." class="tooltip text-secondary far fa-circle"></i></label>
													<div class="col-md-2">
														<input type="text" class="form-control text-center" id="search_items" name="search_items" value="' ?0                  	;0
492  374   INIT_FCALL_BY_NAME/59     ?0        ?0                   326:'intval'        	;1
493  374   FETCH_DIM_FUNC_ARG/93     $181=     16?0                 328:'search_items'  	;1
494  374   SEND_VAR_EX/66            ?80       $181                 ?1                  	;0
495  374   DO_FCALL_BY_NAME/131      $182=     ?0                   ?0                  	;0
496  374   ECHO/40                   ?0        $182                 ?0                  	;0
497  375   ECHO/40                   ?0        329:'">
													</div>
                                                </div>
                                                <h5 class="card-title mb-4">Reseller</h5>
                                                <div class="form-group row mb-4">
													<label class="col-md-4 col-form-label" for="disable_trial">Disable Trials <i title="Use this option to temporarily disable generating trials for all lines." class="tooltip text-secondary far fa-circle"></i></label>
													<div class="col-md-2">
														<input name="disable_trial" id="disable_trial" type="checkbox"' ?0                  	;0
498  376   FETCH_DIM_R/81            $183=     16?0                 330:'disable_trial' 	;0
499  376   IS_EQUAL/17               #184=     $183                 331:1               	;0
500  376   BOOL_NOT/13               #185=     #184                 ?0                  	;0
501  376   JMPZ/43                   ?0        #185                 ?503                	;0	>>503
502  377   GOTO/253                  ?0        ?605                 ?332                	;0
503  379   GOTO/253                  ?0        ?604                 ?333                	;0	<<501
504  381   ECHO/40                   ?0        334:' checked '      ?0                  	;0
505  383   ECHO/40                   ?0        335:'data-plugin="switchery" class="js-switch" data-color="#039cfd"/>
													</div>
                                                    <label class="col-md-3 col-form-label" for="keep_restarts">Keep Logs For</label>
													<div class="col-md-3">
														<select name="keep_restarts" id="keep_restarts" class="form-control" data-toggle="select2">
															' ?0                  	;0
506  384   FE_RESET_R/77             $186=     336:array (
  0 => 'Forever',
  3600 => '1 Hour',
  21600 => '6 Hours',
  43200 => '12 Hours',
  86400 => '1 Day',
  259200 => '3 Days',
  604800 => '7 Days',
  1209600 => '14 Days',
  16934400 => '28 Days',
  15552000 => '180 Days',
  31536000 => '365 Days',
) ?523                	;0
507  384   FE_FETCH_R/78             #187=     $186                 16?1                	;523	>>523	<<522
508  384   ASSIGN/38                 ?170      16?2                 #187                	;0
509  385   ECHO/40                   ?0        337:'															<option ' ?0                  	;0
510  386   FETCH_DIM_R/81            $189=     16?0                 338:'keep_restarts' 	;0
511  386   IS_EQUAL/17               #190=     $189                 16?2                	;0
512  386   BOOL_NOT/13               #191=     #190                 ?0                  	;0
513  386   JMPZ/43                   ?0        #191                 ?516                	;0	>>516
514  387   NOP/0                     ?0        ?0                   ?0                  	;1
515  387   GOTO/253                  ?0        ?517                 ?339                	;0
516  389   ECHO/40                   ?0        340:'selected '      ?0                  	;0	<<513
517  391   ECHO/40                   ?0        341:'value="'        ?0                  	;0
518  392   ECHO/40                   ?0        16?2                 ?0                  	;0
519  393   ECHO/40                   ?0        342:'">'             ?0                  	;0
520  394   ECHO/40                   ?0        16?1                 ?0                  	;0
521  395   ECHO/40                   ?0        343:'</option>
															' ?0                  	;0
522  396   JMP/42                    ?0        ?507                 ?0                  	;0	>>507
523  396   FE_FREE/127               ?0        $186                 ?0                  	;0	<<506
524  399   GOTO/253                  ?0        ?1460                ?344                	;0
525  401   ECHO/40                   ?0        345:' checked '      ?0                  	;0
526  403   ECHO/40                   ?0        346:'data-plugin="switchery" class="js-switch" data-color="#039cfd"/>
													</div>
                                                </div>
                                                <div class="form-group row mb-4">
													<label class="col-md-4 col-form-label" for="disable_ts">Disable MPEG-TS Output <i title="Disable MPEG-TS for all clients and devices." class="tooltip text-secondary far fa-circle"></i></label>
													<div class="col-md-2">
														<input name="disable_ts" id="disable_ts" type="checkbox"' ?0                  	;0
527  404   FETCH_DIM_R/81            $192=     16?0                 347:'disable_ts'    	;0
528  404   IS_EQUAL/17               #193=     $192                 348:1               	;0
529  404   BOOL_NOT/13               #194=     #193                 ?0                  	;0
530  404   JMPZ/43                   ?0        #194                 ?532                	;0	>>532
531  405   GOTO/253                  ?0        ?415                 ?349                	;0
532  407   ECHO/40                   ?0        350:' checked '      ?0                  	;0	<<530
533  408   GOTO/253                  ?0        ?415                 ?351                	;0
534  411   ECHO/40                   ?0        352:'data-plugin="switchery" class="js-switch" data-color="#039cfd"/>
													</div>
													<label class="col-md-4 col-form-label" for="legacy_xmltv">Legacy XMLTV URL <i title="Rewrite xmltv.php requests to the new epg URL." class="tooltip text-secondary far fa-circle"></i></label>
													<div class="col-md-2">
														<input name="legacy_xmltv" id="legacy_xmltv" type="checkbox"' ?0                  	;0
535  412   FETCH_DIM_R/81            $195=     16?0                 353:'legacy_xmltv'  	;0
536  412   IS_EQUAL/17               #196=     $195                 354:1               	;0
537  412   BOOL_NOT/13               #197=     #196                 ?0                  	;0
538  412   JMPZ/43                   ?0        #197                 ?540                	;0	>>540
539  413   GOTO/253                  ?0        ?541                 ?355                	;0
540  415   ECHO/40                   ?0        356:' checked '      ?0                  	;0	<<538
541  417   GOTO/253                  ?0        ?931                 ?357                	;0
542  419   ECHO/40                   ?0        358:' value="maxclients">Max Clients</option>
															<option' ?0                  	;0
543  420   FETCH_DIM_R/81            $198=     16?0                 359:'split_by'      	;0
544  420   IS_EQUAL/17               #199=     $198                 360:'guar_band'     	;0
545  420   BOOL_NOT/13               #200=     #199                 ?0                  	;0
546  420   JMPZ/43                   ?0        #200                 ?548                	;0	>>548
547  421   GOTO/253                  ?0        ?549                 ?361                	;0
548  423   ECHO/40                   ?0        362:' selected'      ?0                  	;0	<<546
549  425   ECHO/40                   ?0        363:' value="guar_band">Network Speed</option>
                                                            <option' ?0                  	;0
550  426   GOTO/253                  ?0        ?918                 ?364                	;0
551  428   ECHO/40                   ?0        365:' checked '      ?0                  	;0
552  430   ECHO/40                   ?0        366:'data-plugin="switchery" class="js-switch" data-color="#039cfd"/>
													</div>
												</div>
                                                <div class="form-group row mb-4">
													<label class="col-md-4 col-form-label" for="restart_php_fpm">Auto-Restart Crashed PHP-FPM <i title="Run a cron that restarts PHP-FPM if it crashes and errors are found." class="tooltip text-secondary far fa-circle"></i></label>
													<div class="col-md-2">
														<input name="restart_php_fpm" id="restart_php_fpm" type="checkbox"' ?0                  	;0
553  431   FETCH_DIM_R/81            $201=     16?0                 367:'restart_php_fpm'	;0
554  431   IS_EQUAL/17               #202=     $201                 368:1               	;0
555  431   BOOL_NOT/13               #203=     #202                 ?0                  	;0
556  431   JMPZ/43                   ?0        #203                 ?558                	;0	>>558
557  432   GOTO/253                  ?0        ?36                  ?369                	;0
558  434   ECHO/40                   ?0        370:' checked '      ?0                  	;0	<<556
559  435   GOTO/253                  ?0        ?36                  ?371                	;0
560  437   ECHO/40                   ?0        372:' checked '      ?0                  	;0
561  439   ECHO/40                   ?0        373:'data-plugin="switchery" class="js-switch" data-color="#039cfd"/>
													</div>
                                                </div>
                                                <div class="form-group row mb-4">
                                                    <label class="col-md-4 col-form-label" for="probe_extra_wait">Probe Duration <i title="How long to wait after analyze duration before cancelling stream probe." class="tooltip text-secondary far fa-circle"></i></label>
													<div class="col-md-2">
														<input type="text" class="form-control text-center" id="probe_extra_wait" name="probe_extra_wait" value="' ?0                  	;0
562  440   INIT_FCALL_BY_NAME/59     ?0        ?0                   374:'htmlspecialchars'	;1
563  440   FETCH_DIM_FUNC_ARG/93     $204=     16?0                 376:'probe_extra_wait'	;1
564  440   SEND_VAR_EX/66            ?80       $204                 ?1                  	;0
565  440   DO_FCALL_BY_NAME/131      $205=     ?0                   ?0                  	;0
566  440   ECHO/40                   ?0        $205                 ?0                  	;0
567  441   ECHO/40                   ?0        377:'">
													</div>
                                                    <label class="col-md-4 col-form-label" for="stream_fail_sleep">Stream Failure Sleep <i title="How long to wait in seconds after a stream start failure before starting again." class="tooltip text-secondary far fa-circle"></i></label>
													<div class="col-md-2">
														<input type="text" class="form-control text-center" id="stream_fail_sleep" name="stream_fail_sleep" value="' ?0                  	;0
568  442   GOTO/253                  ?0        ?803                 ?378                	;0
569  444   FE_RESET_R/77             $206=     379:array (
  'default' => 'Default',
  'digital' => 'Digital',
  'emerald' => 'Emerald',
  'cappucino' => 'Cappucino',
  'ocean_blue' => 'Ocean Blue',
) ?586                	;0
570  444   FE_FETCH_R/78             #207=     $206                 16?1                	;586	>>586	<<585
571  444   ASSIGN/38                 ?190      16?2                 #207                	;0
572  445   ECHO/40                   ?0        380:'															<option ' ?0                  	;0
573  446   FETCH_DIM_R/81            $209=     16?0                 381:'stalker_theme' 	;0
574  446   IS_EQUAL/17               #210=     $209                 16?2                	;0
575  446   BOOL_NOT/13               #211=     #210                 ?0                  	;0
576  446   JMPZ/43                   ?0        #211                 ?579                	;0	>>579
577  447   NOP/0                     ?0        ?0                   ?0                  	;1
578  447   GOTO/253                  ?0        ?580                 ?382                	;0
579  449   ECHO/40                   ?0        383:'selected '      ?0                  	;0	<<576
580  451   ECHO/40                   ?0        384:'value="'        ?0                  	;0
581  452   ECHO/40                   ?0        16?2                 ?0                  	;0
582  453   ECHO/40                   ?0        385:'">'             ?0                  	;0
583  454   ECHO/40                   ?0        16?1                 ?0                  	;0
584  455   ECHO/40                   ?0        386:'</option>
															' ?0                  	;0
585  456   JMP/42                    ?0        ?570                 ?0                  	;0	>>570
586  456   FE_FREE/127               ?0        $206                 ?0                  	;0	<<569
587  459   ECHO/40                   ?0        387:'														</select>
													</div>
												</div>
                                                <div class="form-group row mb-4">
													<label class="col-md-4 col-form-label" for="mag_legacy_redirect">Legacy URL Redirect <i title="Redirect /c to Ministra folder using symlinks. This will allow legacy devices to access the Ministra portal using the old address, however it isn\'t recommended for security purposes. Root access is required so this will action within the next minute during the cron run." class="tooltip text-secondary far fa-circle"></i></label>
													<div class="col-md-2">
														<input name="mag_legacy_redirect" id="mag_legacy_redirect" type="checkbox"' ?0                  	;0
588  460   FETCH_DIM_R/81            $212=     16?0                 388:'mag_legacy_redirect'	;0
589  460   IS_EQUAL/17               #213=     $212                 389:1               	;0
590  460   BOOL_NOT/13               #214=     #213                 ?0                  	;0
591  460   JMPZ/43                   ?0        #214                 ?593                	;0	>>593
592  461   GOTO/253                  ?0        ?687                 ?390                	;0
593  463   ECHO/40                   ?0        391:' checked '      ?0                  	;0	<<591
594  464   GOTO/253                  ?0        ?687                 ?392                	;0
595  466   ECHO/40                   ?0        393:'data-plugin="switchery" class="js-switch" data-color="#039cfd"/>
													</div>
												</div>
                                                <div class="form-group row mb-4">
                                                    <label class="col-md-4 col-form-label" for="mag_disable_ssl">Disable SSL <i title="Force MAG\'s to use non-SSL URL\'s, you should think about removing support for old MAG devices that don\'t support newer SSL protocols rather than disabling this." class="tooltip text-secondary far fa-circle"></i></label>
													<div class="col-md-2">
														<input name="mag_disable_ssl" id="mag_disable_ssl" type="checkbox"' ?0                  	;0
596  467   FETCH_DIM_R/81            $215=     16?0                 394:'mag_disable_ssl'	;0
597  467   IS_EQUAL/17               #216=     $215                 395:1               	;0
598  467   BOOL_NOT/13               #217=     #216                 ?0                  	;0
599  467   JMPZ/43                   ?0        #217                 ?601                	;0	>>601
600  468   GOTO/253                  ?0        ?602                 ?396                	;0
601  470   ECHO/40                   ?0        397:' checked '      ?0                  	;0	<<599
602  472   ECHO/40                   ?0        398:'data-plugin="switchery" class="js-switch" data-color="#039cfd"/>
													</div>
                                                    <label class="col-md-4 col-form-label" for="mag_load_all_channels">Load Channels on Startup <i title="Load all channel listings on startup instead of when selecting a category. This may be useful for some legacy devices that don\'t adhere to Ministra standards." class="tooltip text-secondary far fa-circle"></i></label>
													<div class="col-md-2">
														<input name="mag_load_all_channels" id="mag_load_all_channels" type="checkbox"' ?0                  	;0
603  473   GOTO/253                  ?0        ?1378                ?399                	;0
604  475   ECHO/40                   ?0        400:' checked '      ?0                  	;0
605  477   ECHO/40                   ?0        401:'data-plugin="switchery" class="js-switch" data-color="#039cfd"/>
													</div>
													<label class="col-md-4 col-form-label" for="reseller_ssl_domain">SSL Custom DNS <i title="Use HTTPS in playlist downloads if the main server has SSL on and the reseller has a custom DNS." class="tooltip text-secondary far fa-circle"></i></label>
													<div class="col-md-2">
														<input name="reseller_ssl_domain" id="reseller_ssl_domain" type="checkbox"' ?0                  	;0
606  478   FETCH_DIM_R/81            $218=     16?0                 402:'reseller_ssl_domain'	;0
607  478   IS_EQUAL/17               #219=     $218                 403:1               	;0
608  478   BOOL_NOT/13               #220=     #219                 ?0                  	;0
609  478   JMPZ/43                   ?0        #220                 ?611                	;0	>>611
610  479   GOTO/253                  ?0        ?1026                ?404                	;0
611  481   ECHO/40                   ?0        405:' checked '      ?0                  	;0	<<609
612  482   GOTO/253                  ?0        ?1026                ?406                	;0
613  484   FETCH_DIM_R/81            $221=     16?0                 407:'check_vod'     	;0
614  484   IS_EQUAL/17               #222=     $221                 408:1               	;0
615  484   BOOL_NOT/13               #223=     #222                 ?0                  	;0
616  484   JMPZ/43                   ?0        #223                 ?618                	;0	>>618
617  485   GOTO/253                  ?0        ?619                 ?409                	;0
618  487   ECHO/40                   ?0        410:' checked '      ?0                  	;0	<<616
619  489   ECHO/40                   ?0        411:'data-plugin="switchery" class="js-switch" data-color="#039cfd"/>
													</div>
												</div>
                                                <div class="form-group row mb-4">
                                                    <label class="col-md-4 col-form-label" for="show_images">Show Images & Picons <i title="Show channel logos and VOD images in the management pages." class="tooltip text-secondary far fa-circle"></i></label>
													<div class="col-md-2">
														<input name="show_images" id="show_images" type="checkbox"' ?0                  	;0
620  490   FETCH_DIM_R/81            $224=     16?0                 412:'show_images'   	;0
621  490   IS_EQUAL/17               #225=     $224                 413:1               	;0
622  490   BOOL_NOT/13               #226=     #225                 ?0                  	;0
623  490   JMPZ/43                   ?0        #226                 ?625                	;0	>>625
624  491   GOTO/253                  ?0        ?373                 ?414                	;0
625  493   GOTO/253                  ?0        ?372                 ?415                	;0	<<623
626  495   FETCH_DIM_R/81            $227=     16?0                 416:'ignore_invalid_users'	;0
627  495   IS_EQUAL/17               #228=     $227                 417:1               	;0
628  495   BOOL_NOT/13               #229=     #228                 ?0                  	;0
629  495   JMPZ/43                   ?0        #229                 ?631                	;0	>>631
630  496   GOTO/253                  ?0        ?632                 ?418                	;0
631  498   ECHO/40                   ?0        419:' checked '      ?0                  	;0	<<629
632  500   ECHO/40                   ?0        420:'data-plugin="switchery" class="js-switch" data-color="#039cfd"/>
													</div>
												</div>
												<div class="form-group row mb-4">
													<label class="col-md-4 col-form-label" for="client_prebuffer">Client Prebuffer <i title="How much data in seconds will be sent to the client when connecting to a stream. Larger values will create larger prebuffers." class="tooltip text-secondary far fa-circle"></i></label>
													<div class="col-md-2">
														<input type="text" class="form-control text-center" id="client_prebuffer" name="client_prebuffer" value="' ?0                  	;0
633  501   INIT_FCALL_BY_NAME/59     ?0        ?0                   421:'htmlspecialchars'	;1
634  501   FETCH_DIM_FUNC_ARG/93     $230=     16?0                 423:'client_prebuffer'	;1
635  501   SEND_VAR_EX/66            ?80       $230                 ?1                  	;0
636  501   DO_FCALL_BY_NAME/131      $231=     ?0                   ?0                  	;0
637  501   ECHO/40                   ?0        $231                 ?0                  	;0
638  502   GOTO/253                  ?0        ?1498                ?424                	;0
639  504   FETCH_DIM_R/81            $232=     16?0                 425:'on_demand_checker'	;0
640  504   IS_EQUAL/17               #233=     $232                 426:1               	;0
641  504   BOOL_NOT/13               #234=     #233                 ?0                  	;0
642  504   JMPZ/43                   ?0        #234                 ?644                	;0	>>644
643  505   GOTO/253                  ?0        ?645                 ?427                	;0
644  507   ECHO/40                   ?0        428:' checked '      ?0                  	;0	<<642
645  509   ECHO/40                   ?0        429:'data-plugin="switchery" class="js-switch" data-color="#039cfd"/>
													</div>
                                                    <label class="col-md-4 col-form-label" for="on_demand_scan_time">Scan Time <i title="How often to scan a stream in seconds." class="tooltip text-secondary far fa-circle"></i></label>
													<div class="col-md-2">
														<input type="text" class="form-control text-center" id="on_demand_scan_time" name="on_demand_scan_time" value="' ?0                  	;0
646  510   INIT_FCALL_BY_NAME/59     ?0        ?0                   430:'htmlspecialchars'	;1
647  510   FETCH_DIM_FUNC_ARG/93     $235=     16?0                 432:'on_demand_scan_time'	;1
648  510   SEND_VAR_EX/66            ?80       $235                 ?1                  	;0
649  510   DO_FCALL_BY_NAME/131      $236=     ?0                   ?0                  	;0
650  510   ECHO/40                   ?0        $236                 ?0                  	;0
651  511   GOTO/253                  ?0        ?1905                ?433                	;0
652  513   ECHO/40                   ?0        434:'data-plugin="switchery" class="js-switch" data-color="#039cfd"/>
													</div>
                                                </div>
                                                <div class="form-group row mb-4">
													<label class="col-md-4 col-form-label" for="disable_hls">Disable HLS Output <i title="Disable HLS for all clients and devices." class="tooltip text-secondary far fa-circle"></i></label>
													<div class="col-md-2">
														<input name="disable_hls" id="disable_hls" type="checkbox"' ?0                  	;0
653  514   FETCH_DIM_R/81            $237=     16?0                 435:'disable_hls'   	;0
654  514   IS_EQUAL/17               #238=     $237                 436:1               	;0
655  514   BOOL_NOT/13               #239=     #238                 ?0                  	;0
656  514   JMPZ/43                   ?0        #239                 ?658                	;0	>>658
657  515   GOTO/253                  ?0        ?659                 ?437                	;0
658  517   ECHO/40                   ?0        438:' checked '      ?0                  	;0	<<656
659  519   ECHO/40                   ?0        439:'data-plugin="switchery" class="js-switch" data-color="#039cfd"/>
													</div>
													<label class="col-md-4 col-form-label" for="disable_hls_allow_restream">Allow Restreamers - HLS <i title="Override to allow restreamers to still use HLS while it is disabled." class="tooltip text-secondary far fa-circle"></i></label>
													<div class="col-md-2">
														<input name="disable_hls_allow_restream" id="disable_hls_allow_restream" type="checkbox"' ?0                  	;0
660  520   GOTO/253                  ?0        ?1416                ?440                	;0
661  522   FETCH_DIM_R/81            $240=     16?0                 441:'vod_sort_newest'	;0
662  522   IS_EQUAL/17               #241=     $240                 442:1               	;0
663  522   BOOL_NOT/13               #242=     #241                 ?0                  	;0
664  522   JMPZ/43                   ?0        #242                 ?666                	;0	>>666
665  523   GOTO/253                  ?0        ?667                 ?443                	;0
666  525   ECHO/40                   ?0        444:' checked '      ?0                  	;0	<<664
667  527   ECHO/40                   ?0        445:'data-plugin="switchery" class="js-switch" data-color="#039cfd"/>
													</div>
												</div>
												<div class="form-group row mb-4">
													<label class="col-md-4 col-form-label" for="use_buffer">Use Nginx Buffer <i title="Sets the proxy buffering for this connection. Setting this to “no” will allow unbuffered responses suitable for Comet and HTTP streaming applications. Setting this to “yes” will allow the response to be cached." class="tooltip text-secondary far fa-circle"></i></label>
													<div class="col-md-2">
														<input name="use_buffer" id="use_buffer" type="checkbox"' ?0                  	;0
668  528   FETCH_DIM_R/81            $243=     16?0                 446:'use_buffer'    	;0
669  528   IS_EQUAL/17               #244=     $243                 447:1               	;0
670  528   BOOL_NOT/13               #245=     #244                 ?0                  	;0
671  528   JMPZ/43                   ?0        #245                 ?673                	;0	>>673
672  529   GOTO/253                  ?0        ?1200                ?448                	;0
673  531   GOTO/253                  ?0        ?1199                ?449                	;0	<<671
674  533   FETCH_DIM_R/81            $246=     16?0                 450:'streams_grouped'	;0
675  533   IS_EQUAL/17               #247=     $246                 451:1               	;0
676  533   BOOL_NOT/13               #248=     #247                 ?0                  	;0
677  533   JMPZ/43                   ?0        #248                 ?679                	;0	>>679
678  534   GOTO/253                  ?0        ?680                 ?452                	;0
679  536   ECHO/40                   ?0        453:' checked '      ?0                  	;0	<<677
680  538   ECHO/40                   ?0        454:'data-plugin="switchery" class="js-switch" data-color="#039cfd"/>
													</div>
                                                    <label class="col-md-4 col-form-label" for="js_navigate">Seamless Navigation <i title="Enable seamless navigation by utilising javascript to load pages. Turned off on mobile devices." class="tooltip text-secondary far fa-circle"></i></label>
													<div class="col-md-2">
														<input name="js_navigate" id="js_navigate" type="checkbox"' ?0                  	;0
681  539   FETCH_DIM_R/81            $249=     16?0                 455:'js_navigate'   	;0
682  539   IS_EQUAL/17               #250=     $249                 456:1               	;0
683  539   BOOL_NOT/13               #251=     #250                 ?0                  	;0
684  539   JMPZ/43                   ?0        #251                 ?686                	;0	>>686
685  540   GOTO/253                  ?0        ?1990                ?457                	;0
686  542   GOTO/253                  ?0        ?1989                ?458                	;0	<<684
687  545   ECHO/40                   ?0        459:'data-plugin="switchery" class="js-switch" data-color="#039cfd"/>
													</div>
                                                    <label class="col-md-4 col-form-label" for="mag_keep_extension">Keep URL Extension <i title="Keep extension of live streams, timeshift and VOD. Some older devices can\'t determine it for themselves and use the extension to select the playback method." class="tooltip text-secondary far fa-circle"></i></label>
													<div class="col-md-2">
														<input name="mag_keep_extension" id="mag_keep_extension" type="checkbox"' ?0                  	;0
688  546   FETCH_DIM_R/81            $252=     16?0                 460:'mag_keep_extension'	;0
689  546   IS_EQUAL/17               #253=     $252                 461:1               	;0
690  546   BOOL_NOT/13               #254=     #253                 ?0                  	;0
691  546   JMPZ/43                   ?0        #254                 ?693                	;0	>>693
692  547   GOTO/253                  ?0        ?694                 ?462                	;0
693  549   ECHO/40                   ?0        463:' checked '      ?0                  	;0	<<691
694  551   GOTO/253                  ?0        ?595                 ?464                	;0
695  553   FETCH_DIM_R/81            $255=     16?0                 465:'audio_restart_loss'	;0
696  553   IS_EQUAL/17               #256=     $255                 466:1               	;0
697  553   BOOL_NOT/13               #257=     #256                 ?0                  	;0
698  553   JMPZ/43                   ?0        #257                 ?700                	;0	>>700
699  554   GOTO/253                  ?0        ?701                 ?467                	;0
700  556   ECHO/40                   ?0        468:' checked '      ?0                  	;0	<<698
701  558   ECHO/40                   ?0        469:'data-plugin="switchery" class="js-switch" data-color="#039cfd"/>
													</div>
                                                    <label class="col-md-4 col-form-label" for="priority_backup">Priority Backup <i title="Switch back to the first source if it is detected as working again." class="tooltip text-secondary far fa-circle"></i></label>
													<div class="col-md-2">
														<input name="priority_backup" id="priority_backup" type="checkbox"' ?0                  	;0
702  559   FETCH_DIM_R/81            $258=     16?0                 470:'priority_backup'	;0
703  559   IS_EQUAL/17               #259=     $258                 471:1               	;0
704  559   BOOL_NOT/13               #260=     #259                 ?0                  	;0
705  559   JMPZ/43                   ?0        #260                 ?707                	;0	>>707
706  560   GOTO/253                  ?0        ?561                 ?472                	;0
707  562   GOTO/253                  ?0        ?560                 ?473                	;0	<<705
708  565   ECHO/40                   ?0        474:'data-plugin="switchery" class="js-switch" data-color="#039cfd"/>
													</div>
                                                    <label class="col-md-4 col-form-label" for="keep_protocol">Keep Request Protocol <i title="Keep the requested protocol (http or https) in playlists and streams." class="tooltip text-secondary far fa-circle"></i></label>
													<div class="col-md-2">
														<input name="keep_protocol" id="keep_protocol" type="checkbox"' ?0                  	;0
709  566   FETCH_DIM_R/81            $261=     16?0                 475:'keep_protocol' 	;0
710  566   IS_EQUAL/17               #262=     $261                 476:1               	;0
711  566   BOOL_NOT/13               #263=     #262                 ?0                  	;0
712  566   JMPZ/43                   ?0        #263                 ?714                	;0	>>714
713  567   GOTO/253                  ?0        ?715                 ?477                	;0
714  569   ECHO/40                   ?0        478:' checked '      ?0                  	;0	<<712
715  571   GOTO/253                  ?0        ?1847                ?479                	;0
716  573   FETCH_DIM_R/81            $264=     16?0                 480:'disable_ministra'	;0
717  573   IS_EQUAL/17               #265=     $264                 481:1               	;0
718  573   BOOL_NOT/13               #266=     #265                 ?0                  	;0
719  573   JMPZ/43                   ?0        #266                 ?721                	;0	>>721
720  574   GOTO/253                  ?0        ?722                 ?482                	;0
721  576   ECHO/40                   ?0        483:' checked '      ?0                  	;0	<<719
722  578   ECHO/40                   ?0        484:'data-plugin="switchery" class="js-switch" data-color="#039cfd"/>
													</div>
                                                    <label class="col-md-4 col-form-label" for="verify_host">Verify Hosts <i title="Verify domain names and IP\'s against allowed hosts in the database. This will include server IP\'s, domains and reseller DNS\'s." class="tooltip text-secondary far fa-circle"></i></label>
													<div class="col-md-2">
														<input name="verify_host" id="verify_host" type="checkbox"' ?0                  	;0
723  579   FETCH_DIM_R/81            $267=     16?0                 485:'verify_host'   	;0
724  579   IS_EQUAL/17               #268=     $267                 486:1               	;0
725  579   BOOL_NOT/13               #269=     #268                 ?0                  	;0
726  579   JMPZ/43                   ?0        #269                 ?728                	;0	>>728
727  580   GOTO/253                  ?0        ?1297                ?487                	;0
728  582   GOTO/253                  ?0        ?1296                ?488                	;0	<<726
729  585   ECHO/40                   ?0        489:' value="bouquet_new">Bouquet</option>
                                                            <option' ?0                  	;0
730  586   FETCH_DIM_R/81            $270=     16?0                 490:'channel_number_type'	;0
731  586   IS_EQUAL/17               #271=     $270                 491:'bouquet'       	;0
732  586   BOOL_NOT/13               #272=     #271                 ?0                  	;0
733  586   JMPZ/43                   ?0        #272                 ?735                	;0	>>735
734  587   GOTO/253                  ?0        ?736                 ?492                	;0
735  589   ECHO/40                   ?0        493:' selected'      ?0                  	;0	<<733
736  591   GOTO/253                  ?0        ?1255                ?494                	;0
737  593   ECHO/40                   ?0        495:'data-plugin="switchery" class="js-switch" data-color="#039cfd"/>
													</div>
													<div class="col-md-6">
														<input type="text" class="form-control" id="banned_video_path" name="banned_video_path" value="' ?0                  	;0
738  594   INIT_FCALL_BY_NAME/59     ?0        ?0                   496:'htmlspecialchars'	;1
739  594   FETCH_DIM_FUNC_ARG/93     $273=     16?0                 498:'banned_video_path'	;1
740  594   SEND_VAR_EX/66            ?80       $273                 ?1                  	;0
741  594   DO_FCALL_BY_NAME/131      $274=     ?0                   ?0                  	;0
742  594   ECHO/40                   ?0        $274                 ?0                  	;0
743  595   ECHO/40                   ?0        499:'" placeholder="Leave blank to use default XUI video.">
													</div>
												</div>
												<div class="form-group row mb-4">
													<label class="col-md-4 col-form-label" for="show_expired_video">Expired Video <i title="Show this video when an expired line accesses a stream." class="tooltip text-secondary far fa-circle"></i></label>
													<div class="col-md-2">
														<input name="show_expired_video" id="show_expired_video" type="checkbox"' ?0                  	;0
744  596   FETCH_DIM_R/81            $275=     16?0                 500:'show_expired_video'	;0
745  596   IS_EQUAL/17               #276=     $275                 501:1               	;0
746  596   BOOL_NOT/13               #277=     #276                 ?0                  	;0
747  596   JMPZ/43                   ?0        #277                 ?749                	;0	>>749
748  597   GOTO/253                  ?0        ?183                 ?502                	;0
749  599   ECHO/40                   ?0        503:' checked '      ?0                  	;0	<<747
750  600   GOTO/253                  ?0        ?183                 ?504                	;0
751  602   FETCH_DIM_R/81            $278=     16?0                 505:'player_hide_incompatible'	;0
752  602   IS_EQUAL/17               #279=     $278                 506:1               	;0
753  602   BOOL_NOT/13               #280=     #279                 ?0                  	;0
754  602   JMPZ/43                   ?0        #280                 ?756                	;0	>>756
755  603   GOTO/253                  ?0        ?757                 ?507                	;0
756  605   ECHO/40                   ?0        508:' checked '      ?0                  	;0	<<754
757  607   ECHO/40                   ?0        509:'data-plugin="switchery" class="js-switch" data-color="#039cfd"/>
													</div>
													<label class="col-md-4 col-form-label" for="player_allow_hevc">Mark HEVC as Compatible <i title="Mark HEVC as compatible, there are some browsers such as Edge and Safari that support HEVC, however most mainstream browsers such as Firefox and Chrome do not." class="tooltip text-secondary far fa-circle"></i></label>
													<div class="col-md-2">
														<input name="player_allow_hevc" id="player_allow_hevc" type="checkbox"' ?0                  	;0
758  608   FETCH_DIM_R/81            $281=     16?0                 510:'player_allow_hevc'	;0
759  608   IS_EQUAL/17               #282=     $281                 511:1               	;0
760  608   BOOL_NOT/13               #283=     #282                 ?0                  	;0
761  608   JMPZ/43                   ?0        #283                 ?763                	;0	>>763
762  609   GOTO/253                  ?0        ?1048                ?512                	;0
763  611   GOTO/253                  ?0        ?1047                ?513                	;0	<<761
764  613   FETCH_DIM_R/81            $284=     16?0                 514:'show_category_duplicates'	;0
765  613   IS_EQUAL/17               #285=     $284                 515:1               	;0
766  613   BOOL_NOT/13               #286=     #285                 ?0                  	;0
767  613   JMPZ/43                   ?0        #286                 ?769                	;0	>>769
768  614   GOTO/253                  ?0        ?770                 ?516                	;0
769  616   ECHO/40                   ?0        517:' checked '      ?0                  	;0	<<767
770  618   ECHO/40                   ?0        518:'data-plugin="switchery" class="js-switch" data-color="#039cfd"/>
													</div>
												</div>
                                                <h5 class="card-title mb-4">EPG API</h5>
                                                <div class="form-group row mb-4">
                                                    <label class="col-md-4 col-form-label" for="enable_epg_api">Enable EPG API <i title="Enable EPG API in the Admin interface." class="tooltip text-secondary far fa-circle"></i></label>
													<div class="col-md-2">
														<input name="enable_epg_api" id="enable_epg_api" type="checkbox"' ?0                  	;0
771  619   FETCH_DIM_R/81            $287=     16?0                 519:'enable_epg_api'	;0
772  619   IS_EQUAL/17               #288=     $287                 520:1               	;0
773  619   BOOL_NOT/13               #289=     #288                 ?0                  	;0
774  619   JMPZ/43                   ?0        #289                 ?776                	;0	>>776
775  620   GOTO/253                  ?0        ?1938                ?521                	;0
776  622   GOTO/253                  ?0        ?1937                ?522                	;0	<<774
777  624   FETCH_DIM_R/81            $290=     16?0                 523:'header_stats'  	;0
778  624   IS_EQUAL/17               #291=     $290                 524:1               	;0
779  624   BOOL_NOT/13               #292=     #291                 ?0                  	;0
780  624   JMPZ/43                   ?0        #292                 ?782                	;0	>>782
781  625   GOTO/253                  ?0        ?783                 ?525                	;0
782  627   ECHO/40                   ?0        526:' checked '      ?0                  	;0	<<780
783  629   ECHO/40                   ?0        527:'data-plugin="switchery" class="js-switch" data-color="#039cfd"/>
													</div>
												</div>
												<div class="form-group row mb-4">
                                                    <label class="col-md-4 col-form-label" for="dashboard_status">Show Service Status <i title="Show warning information based on server stats." class="tooltip text-secondary far fa-circle"></i></label>
													<div class="col-md-2">
														<input name="dashboard_status" id="dashboard_status" type="checkbox"' ?0                  	;0
784  630   FETCH_DIM_R/81            $293=     16?0                 528:'dashboard_status'	;0
785  630   IS_EQUAL/17               #294=     $293                 529:1               	;0
786  630   BOOL_NOT/13               #295=     #294                 ?0                  	;0
787  630   JMPZ/43                   ?0        #295                 ?789                	;0	>>789
788  631   GOTO/253                  ?0        ?910                 ?530                	;0
789  633   GOTO/253                  ?0        ?909                 ?531                	;0	<<787
790  636   ECHO/40                   ?0        532:'														</select>
													</div>
												</div>
                                                <div class="form-group row mb-4">
                                                    <label class="col-md-4 col-form-label" for="cache_playlists">Cache Playlists for <i title="If this value is more than 0, playlists downloaded by clients will be cached to file for that many seconds. This can use a lot of disk space if you have a lot of clients, however will save a lot of resources in execution time." class="tooltip text-secondary far fa-circle"></i></label>
													<div class="col-md-2">
														<input type="text" class="form-control text-center" id="cache_playlists" name="cache_playlists" value="' ?0                  	;0
791  637   INIT_FCALL_BY_NAME/59     ?0        ?0                   533:'intval'        	;1
792  637   FETCH_DIM_FUNC_ARG/93     $296=     16?0                 535:'cache_playlists'	;1
793  637   SEND_VAR_EX/66            ?80       $296                 ?1                  	;0
794  637   DO_FCALL_BY_NAME/131      $297=     ?0                   ?0                  	;0
795  637   ECHO/40                   ?0        $297                 ?0                  	;0
796  638   ECHO/40                   ?0        536:'">
													</div>
                                                    <label class="col-md-4 col-form-label" for="playlist_from_mysql">Grab Playlists from MySQL <i title="Enable this to read streams from MySQL instead of from the local cache. This may be faster when you have a significant amount of streams." class="tooltip text-secondary far fa-circle"></i></label>
													<div class="col-md-2">
														<input name="playlist_from_mysql" id="playlist_from_mysql" type="checkbox"' ?0                  	;0
797  639   FETCH_DIM_R/81            $298=     16?0                 537:'playlist_from_mysql'	;0
798  639   IS_EQUAL/17               #299=     $298                 538:1               	;0
799  639   BOOL_NOT/13               #300=     #299                 ?0                  	;0
800  639   JMPZ/43                   ?0        #300                 ?802                	;0	>>802
801  640   GOTO/253                  ?0        ?1897                ?539                	;0
802  642   GOTO/253                  ?0        ?1896                ?540                	;0	<<800
803  644   INIT_FCALL_BY_NAME/59     ?0        ?0                   541:'htmlspecialchars'	;1
804  644   FETCH_DIM_FUNC_ARG/93     $301=     16?0                 543:'stream_fail_sleep'	;1
805  644   SEND_VAR_EX/66            ?80       $301                 ?1                  	;0
806  644   DO_FCALL_BY_NAME/131      $302=     ?0                   ?0                  	;0
807  644   ECHO/40                   ?0        $302                 ?0                  	;0
808  645   ECHO/40                   ?0        544:'">
													</div>
                                                </div>
                                                <div class="form-group row mb-4">
                                                    <label class="col-md-4 col-form-label" for="fps_delay">FPS Start Delay <i title="How long in seconds to wait before checking if FPS drops below threshold." class="tooltip text-secondary far fa-circle"></i></label>
													<div class="col-md-2">
														<input type="text" class="form-control text-center" id="fps_delay" name="fps_delay" value="' ?0                  	;0
809  646   INIT_FCALL_BY_NAME/59     ?0        ?0                   545:'htmlspecialchars'	;1
810  646   FETCH_DIM_FUNC_ARG/93     $303=     16?0                 547:'fps_delay'     	;1
811  646   SEND_VAR_EX/66            ?80       $303                 ?1                  	;0
812  646   DO_FCALL_BY_NAME/131      $304=     ?0                   ?0                  	;0
813  646   ECHO/40                   ?0        $304                 ?0                  	;0
814  647   ECHO/40                   ?0        548:'">
													</div>
													<label class="col-md-4 col-form-label" for="fps_check_type">FPS Check Type <i title="Whether to use progress info after the start delay to determine real FPS or probe the segment to return avg_frame_rate." class="tooltip text-secondary far fa-circle"></i></label>
													<div class="col-md-2">
														<select name="fps_check_type" id="fps_check_type" class="form-control" data-toggle="select2">
															' ?0                  	;0
815  648   FE_RESET_R/77             $305=     549:array (
  0 => 'Progress Info',
  1 => 'avg_frame_rate',
) ?832                	;0
816  648   FE_FETCH_R/78             #306=     $305                 16?1                	;832	>>832	<<831
817  648   ASSIGN/38                 ?289      16?2                 #306                	;0
818  649   ECHO/40                   ?0        550:'															<option ' ?0                  	;0
819  650   FETCH_DIM_R/81            $308=     16?0                 551:'fps_check_type'	;0
820  650   IS_EQUAL/17               #309=     $308                 16?2                	;0
821  650   BOOL_NOT/13               #310=     #309                 ?0                  	;0
822  650   JMPZ/43                   ?0        #310                 ?825                	;0	>>825
823  651   NOP/0                     ?0        ?0                   ?0                  	;1
824  651   GOTO/253                  ?0        ?826                 ?552                	;0
825  653   ECHO/40                   ?0        553:'selected '      ?0                  	;0	<<822
826  655   ECHO/40                   ?0        554:'value="'        ?0                  	;0
827  656   ECHO/40                   ?0        16?2                 ?0                  	;0
828  657   ECHO/40                   ?0        555:'">'             ?0                  	;0
829  658   ECHO/40                   ?0        16?1                 ?0                  	;0
830  659   ECHO/40                   ?0        556:'</option>
															' ?0                  	;0
831  660   JMP/42                    ?0        ?816                 ?0                  	;0	>>816
832  660   FE_FREE/127               ?0        $305                 ?0                  	;0	<<815
833  662   GOTO/253                  ?0        ?1981                ?557                	;0
834  664   ECHO/40                   ?0        558:' checked '      ?0                  	;0
835  666   ECHO/40                   ?0        559:'data-plugin="switchery" class="js-switch" data-color="#039cfd"/>
													</div>
												</div>
                                                <div class="form-group row mb-4">
													<label class="col-md-4 col-form-label" for="encrypt_playlist">Encrypt Playlists <i title="Encrypt line credentials in playlist files." class="tooltip text-secondary far fa-circle"></i></label>
													<div class="col-md-2">
														<input name="encrypt_playlist" id="encrypt_playlist" type="checkbox"' ?0                  	;0
836  667   FETCH_DIM_R/81            $311=     16?0                 560:'encrypt_playlist'	;0
837  667   IS_EQUAL/17               #312=     $311                 561:1               	;0
838  667   BOOL_NOT/13               #313=     #312                 ?0                  	;0
839  667   JMPZ/43                   ?0        #313                 ?841                	;0	>>841
840  668   GOTO/253                  ?0        ?1804                ?562                	;0
841  670   ECHO/40                   ?0        563:' checked '      ?0                  	;0	<<839
842  671   GOTO/253                  ?0        ?1804                ?564                	;0
843  673   ECHO/40                   ?0        565:'data-plugin="switchery" class="js-switch" data-color="#039cfd"/>
													</div>
                                                    <label class="col-md-4 col-form-label" for="on_demand_failure_exit">Exit on Failure <i title="If an on-demand stream fails to start, do not retry, cancel the stream and disconnect the client. It will retry on the next connection but will ensure it doesn\'t sit forever trying to start and using source connections for example." class="tooltip text-secondary far fa-circle"></i></label>
													<div class="col-md-2">
														<input name="on_demand_failure_exit" id="on_demand_failure_exit" type="checkbox"' ?0                  	;0
844  674   FETCH_DIM_R/81            $314=     16?0                 566:'on_demand_failure_exit'	;0
845  674   IS_EQUAL/17               #315=     $314                 567:1               	;0
846  674   BOOL_NOT/13               #316=     #315                 ?0                  	;0
847  674   JMPZ/43                   ?0        #316                 ?849                	;0	>>849
848  675   GOTO/253                  ?0        ?850                 ?568                	;0
849  677   ECHO/40                   ?0        569:' checked '      ?0                  	;0	<<847
850  679   ECHO/40                   ?0        570:'data-plugin="switchery" class="js-switch" data-color="#039cfd"/>
													</div>
                                                </div>
                                                <div class="form-group row mb-4">
													<label class="col-md-4 col-form-label" for="on_demand_wait_time">Wait Timeout <i title="How long should the client wait for an on-demand stream to start. After this time has elapsed, the connection will close. This will also apply to normal streams while they\'re starting or not yet available." class="tooltip text-secondary far fa-circle"></i></label>
													<div class="col-md-2">
														<input type="text" class="form-control text-center" id="on_demand_wait_time" name="on_demand_wait_time" value="' ?0                  	;0
851  680   GOTO/253                  ?0        ?140                 ?571                	;0
852  682   FETCH_DIM_R/81            $317=     16?0                 572:'recaptcha_enable'	;0
853  682   IS_EQUAL/17               #318=     $317                 573:1               	;0
854  682   BOOL_NOT/13               #319=     #318                 ?0                  	;0
855  682   JMPZ/43                   ?0        #319                 ?857                	;0	>>857
856  683   GOTO/253                  ?0        ?858                 ?574                	;0
857  685   ECHO/40                   ?0        575:' checked '      ?0                  	;0	<<855
858  687   ECHO/40                   ?0        576:'data-plugin="switchery" class="js-switch" data-color="#039cfd"/>
													</div>
												</div>
												<div class="form-group row mb-4">
													<label class="col-md-4 col-form-label" for="recaptcha_v2_site_key">reCAPTCHA V2 - Site Key <i title="Please visit https://google.com/recaptcha/admin to obtain your API keys." class="tooltip text-secondary far fa-circle"></i></label>
													<div class="col-md-8">
														<input type="text" class="form-control" id="recaptcha_v2_site_key" name="recaptcha_v2_site_key" value="' ?0                  	;0
859  688   INIT_FCALL_BY_NAME/59     ?0        ?0                   577:'htmlspecialchars'	;1
860  688   FETCH_DIM_FUNC_ARG/93     $320=     16?0                 579:'recaptcha_v2_site_key'	;1
861  688   SEND_VAR_EX/66            ?80       $320                 ?1                  	;0
862  688   DO_FCALL_BY_NAME/131      $321=     ?0                   ?0                  	;0
863  688   ECHO/40                   ?0        $321                 ?0                  	;0
864  689   GOTO/253                  ?0        ?2016                ?580                	;0
865  691   ECHO/40                   ?0        581:'data-plugin="switchery" class="js-switch" data-color="#039cfd"/>
													</div>
													<label class="col-md-4 col-form-label" for="disable_enigma2">Disable Enigma2 API <i title="Enable to stop Enigma devices from connecting." class="tooltip text-secondary far fa-circle"></i></label>
													<div class="col-md-2">
														<input name="disable_enigma2" id="disable_enigma2" type="checkbox"' ?0                  	;0
866  692   FETCH_DIM_R/81            $322=     16?0                 582:'disable_enigma2'	;0
867  692   IS_EQUAL/17               #323=     $322                 583:1               	;0
868  692   BOOL_NOT/13               #324=     #323                 ?0                  	;0
869  692   JMPZ/43                   ?0        #324                 ?871                	;0	>>871
870  693   GOTO/253                  ?0        ?872                 ?584                	;0
871  695   ECHO/40                   ?0        585:' checked '      ?0                  	;0	<<869
872  697   ECHO/40                   ?0        586:'data-plugin="switchery" class="js-switch" data-color="#039cfd"/>
													</div>
                                                </div>
                                                <div class="form-group row mb-4">
													<label class="col-md-4 col-form-label" for="disable_ministra">Disable Ministra API <i title="Enable to stop MAG devices from connecting." class="tooltip text-secondary far fa-circle"></i></label>
													<div class="col-md-2">
														<input name="disable_ministra" id="disable_ministra" type="checkbox"' ?0                  	;0
873  698   GOTO/253                  ?0        ?716                 ?587                	;0
874  700   ECHO/40                   ?0        588:'data-plugin="switchery" class="js-switch" data-color="#039cfd"/>
													</div>
                                                    <label class="col-md-3 col-form-label" for="keep_errors">Keep Logs For</label>
													<div class="col-md-3">
														<select name="keep_errors" id="keep_errors" class="form-control" data-toggle="select2">
															' ?0                  	;0
875  701   FE_RESET_R/77             $325=     589:array (
  0 => 'Forever',
  3600 => '1 Hour',
  21600 => '6 Hours',
  43200 => '12 Hours',
  86400 => '1 Day',
  259200 => '3 Days',
  604800 => '7 Days',
  1209600 => '14 Days',
  16934400 => '28 Days',
  15552000 => '180 Days',
  31536000 => '365 Days',
) ?892                	;0
876  701   FE_FETCH_R/78             #326=     $325                 16?1                	;892	>>892	<<891
877  701   ASSIGN/38                 ?309      16?2                 #326                	;0
878  702   ECHO/40                   ?0        590:'															<option ' ?0                  	;0
879  703   FETCH_DIM_R/81            $328=     16?0                 591:'keep_errors'   	;0
880  703   IS_EQUAL/17               #329=     $328                 16?2                	;0
881  703   BOOL_NOT/13               #330=     #329                 ?0                  	;0
882  703   JMPZ/43                   ?0        #330                 ?885                	;0	>>885
883  704   NOP/0                     ?0        ?0                   ?0                  	;1
884  704   GOTO/253                  ?0        ?886                 ?592                	;0
885  706   ECHO/40                   ?0        593:'selected '      ?0                  	;0	<<882
886  708   ECHO/40                   ?0        594:'value="'        ?0                  	;0
887  709   ECHO/40                   ?0        16?2                 ?0                  	;0
888  710   ECHO/40                   ?0        595:'">'             ?0                  	;0
889  711   ECHO/40                   ?0        16?1                 ?0                  	;0
890  712   ECHO/40                   ?0        596:'</option>
															' ?0                  	;0
891  713   JMP/42                    ?0        ?876                 ?0                  	;0	>>876
892  713   FE_FREE/127               ?0        $325                 ?0                  	;0	<<875
893  716   ECHO/40                   ?0        597:'														</select>
													</div>
												</div>
                                                <div class="form-group row mb-4">
													<label class="col-md-3 col-form-label" for="save_restart_logs">Stream Restart Logs <i title="Activity logs are saved when an active connection is closed. This is useful information to keep and should be kept for as long as possible, however can build up if you have high throughput." class="tooltip text-secondary far fa-circle"></i></label>
                                                    <div class="col-md-3">
														<input name="save_restart_logs" id="save_restart_logs" type="checkbox"' ?0                  	;0
894  717   FETCH_DIM_R/81            $331=     16?0                 598:'save_restart_logs'	;0
895  717   IS_EQUAL/17               #332=     $331                 599:1               	;0
896  717   BOOL_NOT/13               #333=     #332                 ?0                  	;0
897  717   JMPZ/43                   ?0        #333                 ?899                	;0	>>899
898  718   GOTO/253                  ?0        ?505                 ?600                	;0
899  720   GOTO/253                  ?0        ?504                 ?601                	;0	<<897
900  722   ECHO/40                   ?0        602:'data-plugin="switchery" class="js-switch" data-color="#039cfd"/>
													</div>
												</div>
                                                <div class="form-group row mb-4">
                                                    <label class="col-md-4 col-form-label" for="restrict_playlists">Restrictions on Playlists & EPG <i title="Verify user-agent, IP restrictions, ISP and country restrictions before allowing playlist / EPG download. If disabled the playlist can be downloaded from any IP but restrictions still apply to streams themselves." class="tooltip text-secondary far fa-circle"></i></label>
													<div class="col-md-2">
														<input name="restrict_playlists" id="restrict_playlists" type="checkbox"' ?0                  	;0
901  723   FETCH_DIM_R/81            $334=     16?0                 603:'restrict_playlists'	;0
902  723   IS_EQUAL/17               #335=     $334                 604:1               	;0
903  723   BOOL_NOT/13               #336=     #335                 ?0                  	;0
904  723   JMPZ/43                   ?0        #336                 ?906                	;0	>>906
905  724   GOTO/253                  ?0        ?907                 ?605                	;0
906  726   ECHO/40                   ?0        606:' checked '      ?0                  	;0	<<904
907  728   ECHO/40                   ?0        607:'data-plugin="switchery" class="js-switch" data-color="#039cfd"/>
													</div>
                                                    <label class="col-md-4 col-form-label" for="ignore_invalid_users">Ignore Invalid Credentials <i title="Enabling this option will make authentication completely ignore a connection if the username and password are incorrect, this means the flood limit won\'t activate but will also quickly close an invalid connection much faster without loading any XUI functions or classes. If you have a lot of throughput, enabling this may save you some CPU usage." class="tooltip text-secondary far fa-circle"></i></label>
													<div class="col-md-2">
														<input name="ignore_invalid_users" id="ignore_invalid_users" type="checkbox"' ?0                  	;0
908  729   GOTO/253                  ?0        ?626                 ?608                	;0
909  731   ECHO/40                   ?0        609:' checked '      ?0                  	;0
910  733   ECHO/40                   ?0        610:'data-plugin="switchery" class="js-switch" data-color="#039cfd"/>
													</div>
                                                    <label class="col-md-4 col-form-label" for="threshold_cpu">CPU Threshold % <i title="When CPU usage is above this percentage it will show as a warning in the service status box." class="tooltip text-secondary far fa-circle"></i></label>
													<div class="col-md-2">
														<input type="text" class="form-control text-center" id="threshold_cpu" name="threshold_cpu" value="' ?0                  	;0
911  734   INIT_FCALL_BY_NAME/59     ?0        ?0                   611:'intval'        	;1
912  734   FETCH_DIM_FUNC_ARG/93     $337=     16?0                 613:'threshold_cpu' 	;1
913  734   SEND_VAR_EX/66            ?80       $337                 ?1                  	;0
914  734   DO_FCALL_BY_NAME/131      $338=     ?0                   ?0                  	;0
915  734   ECHO/40                   ?0        $338                 ?0                  	;0
916  735   ECHO/40                   ?0        614:'">
													</div>
                                                </div>
                                                <div class="form-group row mb-4">
                                                    <label class="col-md-4 col-form-label" for="threshold_mem">Memory Threshold % <i title="When memory usage is above this percentage it will show as a warning in the service status box." class="tooltip text-secondary far fa-circle"></i></label>
													<div class="col-md-2">
														<input type="text" class="form-control text-center" id="threshold_mem" name="threshold_mem" value="' ?0                  	;0
917  736   GOTO/253                  ?0        ?1772                ?615                	;0
918  738   FETCH_DIM_R/81            $339=     16?0                 616:'split_by'      	;0
919  738   IS_EQUAL/17               #340=     $339                 617:'band'          	;0
920  738   BOOL_NOT/13               #341=     #340                 ?0                  	;0
921  738   JMPZ/43                   ?0        #341                 ?923                	;0	>>923
922  739   GOTO/253                  ?0        ?924                 ?618                	;0
923  741   ECHO/40                   ?0        619:' selected'      ?0                  	;0	<<921
924  743   ECHO/40                   ?0        620:' value="band">Detected Network Speed</option>
														</select>
													</div>
                                                    <label class="col-md-4 col-form-label" for="restreamer_bypass_proxy">Restreamer Bypass Proxy <i title="Route restreamers directly to load balancers instead of through proxies where proxy service has been enabled." class="tooltip text-secondary far fa-circle"></i></label>
													<div class="col-md-2">
														<input name="restreamer_bypass_proxy" id="restreamer_bypass_proxy" type="checkbox"' ?0                  	;0
925  744   FETCH_DIM_R/81            $342=     16?0                 621:'restreamer_bypass_proxy'	;0
926  744   IS_EQUAL/17               #343=     $342                 622:1               	;0
927  744   BOOL_NOT/13               #344=     #343                 ?0                  	;0
928  744   JMPZ/43                   ?0        #344                 ?930                	;0	>>930
929  745   GOTO/253                  ?0        ?1279                ?623                	;0
930  747   GOTO/253                  ?0        ?1278                ?624                	;0	<<928
931  749   ECHO/40                   ?0        625:'data-plugin="switchery" class="js-switch" data-color="#039cfd"/>
													</div>
												</div>
                                                <div class="form-group row mb-4">
                                                    <label class="col-md-4 col-form-label" for="legacy_panel_api">Legacy Panel API <i title="Rewrite panel_api.php requests to the new XUI Player API." class="tooltip text-secondary far fa-circle"></i></label>
													<div class="col-md-2">
														<input name="legacy_panel_api" id="legacy_panel_api" type="checkbox"' ?0                  	;0
932  750   FETCH_DIM_R/81            $345=     16?0                 626:'legacy_panel_api'	;0
933  750   IS_EQUAL/17               #346=     $345                 627:1               	;0
934  750   BOOL_NOT/13               #347=     #346                 ?0                  	;0
935  750   JMPZ/43                   ?0        #347                 ?937                	;0	>>937
936  751   GOTO/253                  ?0        ?938                 ?628                	;0
937  753   ECHO/40                   ?0        629:' checked '      ?0                  	;0	<<935
938  755   ECHO/40                   ?0        630:'data-plugin="switchery" class="js-switch" data-color="#039cfd"/>
													</div>
                                                    <label class="col-md-4 col-form-label" for="show_category_duplicates">Duplicate Streams in Legacy Apps <i title="XUI was the first to add multiple categories, which means most apps don\'t support it. The default behaviour of the API is to show the item once when ALL is requested, however apps tend to request all streams then filter them into categories themself. This option will change the default behaviour to show the stream duplicated for each additional category, therefore the stream shows correctly in each category. The downside is that when searching or displaying All category, the stream will be show up multiple times." class="tooltip text-secondary far fa-circle"></i></label>
													<div class="col-md-2">
														<input name="show_category_duplicates" id="show_category_duplicates" type="checkbox"' ?0                  	;0
939  756   GOTO/253                  ?0        ?764                 ?631                	;0
940  758   INIT_FCALL_BY_NAME/59     ?0        ?0                   632:'htmlspecialchars'	;1
941  758   INIT_FCALL_BY_NAME/59     ?0        ?0                   634:'str_replace'   	;3
942  758   SEND_VAL_EX/116           ?80       636:array (
  0 => '&lt;',
  1 => '&gt;',
) ?1                  	;0
943  758   SEND_VAL_EX/116           ?96       637:array (
  0 => '<',
  1 => '>',
) ?2                  	;0
944  758   FETCH_DIM_FUNC_ARG/93     $348=     16?0                 638:'mag_message'   	;3
945  758   SEND_VAR_EX/66            ?112      $348                 ?3                  	;0
946  758   DO_FCALL_BY_NAME/131      $349=     ?0                   ?0                  	;0
947  758   SEND_VAR_NO_REF_EX/50     ?80       $349                 ?1                  	;0
948  758   DO_FCALL_BY_NAME/131      $350=     ?0                   ?0                  	;0
949  758   ECHO/40                   ?0        $350                 ?0                  	;0
950  759   ECHO/40                   ?0        639:'</textarea>
													</div>
												</div>
											</div> 
										</div> 
									</div>
                                    <div class="tab-pane" id="webplayer">
                                        <div class="row">
											<div class="col-12">
                                                <h5 class="card-title mb-4">Preferences</h5>
                                                <div class="form-group row mb-4">
													<label class="col-md-4 col-form-label" for="player_allow_playlist">Allow Playlist Download <i title="Allow clients to generate playlist URL\'s from the web player." class="tooltip text-secondary far fa-circle"></i></label>
													<div class="col-md-2">
														<input name="player_allow_playlist" id="player_allow_playlist" type="checkbox"' ?0                  	;0
951  760   FETCH_DIM_R/81            $351=     16?0                 640:'player_allow_playlist'	;0
952  760   IS_EQUAL/17               #352=     $351                 641:1               	;0
953  760   BOOL_NOT/13               #353=     #352                 ?0                  	;0
954  760   JMPZ/43                   ?0        #353                 ?956                	;0	>>956
955  761   GOTO/253                  ?0        ?957                 ?642                	;0
956  763   ECHO/40                   ?0        643:' checked '      ?0                  	;0	<<954
957  765   GOTO/253                  ?0        ?1520                ?644                	;0
958  768   ECHO/40                   ?0        645:' value="conn">Connections</option>
															<option' ?0                  	;0
959  769   FETCH_DIM_R/81            $354=     16?0                 646:'split_by'      	;0
960  769   IS_EQUAL/17               #355=     $354                 647:'maxclients'    	;0
961  769   BOOL_NOT/13               #356=     #355                 ?0                  	;0
962  769   JMPZ/43                   ?0        #356                 ?964                	;0	>>964
963  770   GOTO/253                  ?0        ?965                 ?648                	;0
964  772   ECHO/40                   ?0        649:' selected'      ?0                  	;0	<<962
965  774   GOTO/253                  ?0        ?542                 ?650                	;0
966  776   FETCH_CONSTANT/99         #357=     ?0                   651:'XUI_BETA'      	;16
967  776   JMPZ/43                   ?0        #357                 ?970                	;0	>>970
968  776   QM_ASSIGN/22              #358=     654:'Beta Release '  ?0                  	;0
969  776   JMP/42                    ?0        ?971                 ?0                  	;0	>>971
970  776   QM_ASSIGN/22              #358=     655:'Official Release ' ?0                  	;0	<<967
971  776   ECHO/40                   ?0        #358                 ?0                  	;0	<<969
972  777   ECHO/40                   ?0        656:' v'             ?0                  	;0
973  778   FETCH_DIM_R/81            $359=     16?4                 657:'version'       	;0
974  778   FETCH_DIM_R/81            $360=     16?4                 658:'revision'      	;0
975  778   JMPZ/43                   ?0        $360                 ?983                	;0	>>983
976  778   INIT_FCALL_BY_NAME/59     ?0        ?0                   659:'intval'        	;1
977  778   FETCH_DIM_FUNC_ARG/93     $361=     16?4                 661:'revision'      	;1
978  778   SEND_VAR_EX/66            ?80       $361                 ?1                  	;0
979  778   DO_FCALL_BY_NAME/131      $362=     ?0                   ?0                  	;0
980  778   CONCAT/8                  #363=     662:' R'             $362                	;0
981  778   QM_ASSIGN/22              #364=     #363                 ?0                  	;0
982  778   JMP/42                    ?0        ?984                 ?0                  	;0	>>984
983  778   QM_ASSIGN/22              #364=     663:''               ?0                  	;0	<<975
984  778   CONCAT/8                  #365=     $359                 #364                	;0	<<982
985  778   ECHO/40                   ?0        #365                 ?0                  	;0
986  779   ECHO/40                   ?0        664:' is now available to download. If you\'re interested, head over to the <a class="text-white" href="' ?0                  	;0
987  780   INIT_FCALL_BY_NAME/59     ?0        ?0                   665:'str_replace'   	;3
988  780   SEND_VAL_EX/116           ?80       667:'"'              ?1                  	;0
989  780   SEND_VAL_EX/116           ?96       668:'\\"'            ?2                  	;0
990  780   FETCH_DIM_FUNC_ARG/93     $366=     16?4                 669:'url'           	;3
991  780   SEND_VAR_EX/66            ?112      $366                 ?3                  	;0
992  780   DO_FCALL_BY_NAME/131      $367=     ?0                   ?0                  	;0
993  780   ECHO/40                   ?0        $367                 ?0                  	;0
994  781   GOTO/253                  ?0        ?101                 ?670                	;0
995  784   ECHO/40                   ?0        671:'data-plugin="switchery" class="js-switch" data-color="#039cfd"/>
													</div>
													<label class="col-md-4 col-form-label" for="hide_failures">Disable Restart Counter <i title="Removes the restart count next to stream uptime." class="tooltip text-secondary far fa-circle"></i></label>
													<div class="col-md-2">
														<input name="hide_failures" id="hide_failures" type="checkbox"' ?0                  	;0
996  785   FETCH_DIM_R/81            $368=     16?0                 672:'hide_failures' 	;0
997  785   IS_EQUAL/17               #369=     $368                 673:1               	;0
998  785   BOOL_NOT/13               #370=     #369                 ?0                  	;0
999  785   JMPZ/43                   ?0        #370                 ?1001               	;0	>>1001
1000 786   GOTO/253                  ?0        ?1002                ?674                	;0
1001 788   ECHO/40                   ?0        675:' checked '      ?0                  	;0	<<999
1002 790   GOTO/253                  ?0        ?235                 ?676                	;0
1003 792   ECHO/40                   ?0        677:' checked '      ?0                  	;0
1004 794   ECHO/40                   ?0        678:'data-plugin="switchery" class="js-switch" data-color="#039cfd"/>
													</div>
													<label class="col-md-4 col-form-label" for="disable_rtmp_allow_restream">Allow Restreamers - RTMP <i title="Override to allow restreamers to still use RTMP while it is disabled." class="tooltip text-secondary far fa-circle"></i></label>
													<div class="col-md-2">
														<input name="disable_rtmp_allow_restream" id="disable_rtmp_allow_restream" type="checkbox"' ?0                  	;0
1005 795   FETCH_DIM_R/81            $371=     16?0                 679:'disable_rtmp_allow_restream'	;0
1006 795   IS_EQUAL/17               #372=     $371                 680:1               	;0
1007 795   BOOL_NOT/13               #373=     #372                 ?0                  	;0
1008 795   JMPZ/43                   ?0        #373                 ?1010               	;0	>>1010
1009 796   GOTO/253                  ?0        ?15                  ?681                	;0
1010 798   ECHO/40                   ?0        682:' checked '      ?0                  	;0	<<1008
1011 799   GOTO/253                  ?0        ?15                  ?683                	;0
1012 801   ECHO/40                   ?0        684:'">
													</div>
												</div>
                                                <div class="form-group row mb-4">
                                                    <label class="col-md-3 col-form-label" for="probesize_ondemand">On Demand Probesize <i title="Adjustable probesize for ondemand streams. Adjust this setting if you experience issues with no audio." class="tooltip text-secondary far fa-circle"></i></label>
													<div class="col-md-3">
														<input type="text" class="form-control text-center" id="probesize_ondemand" name="probesize_ondemand" value="' ?0                  	;0
1013 802   INIT_FCALL_BY_NAME/59     ?0        ?0                   685:'intval'        	;1
1014 802   FETCH_DIM_FUNC_ARG/93     $374=     16?0                 687:'probesize_ondemand'	;1
1015 802   SEND_VAR_EX/66            ?80       $374                 ?1                  	;0
1016 802   DO_FCALL_BY_NAME/131      $375=     ?0                   ?0                  	;0
1017 802   ECHO/40                   ?0        $375                 ?0                  	;0
1018 803   ECHO/40                   ?0        688:'">
													</div>
												</div>
											</div>
										</div>
									</div>
                                    <div class="tab-pane" id="security">
                                        <div class="row">
											<div class="col-12">
                                                <h5 class="card-title mb-4">IP Security</h5>
                                                <div class="form-group row mb-4">
                                                    <label class="col-md-4 col-form-label" for="ip_subnet_match">Match Subnet of IP <i title="Some IP\'s change quite often, however usually within the same /24 subnet. Enable this if you want to keep the IP security but loosen the IP matching a little. An example being IP 159.55.26.0 will verify as being the same as 159.55.26.255 instead of failing." class="tooltip text-secondary far fa-circle"></i></label>
													<div class="col-md-2">
														<input name="ip_subnet_match" id="ip_subnet_match" type="checkbox"' ?0                  	;0
1019 804   FETCH_DIM_R/81            $376=     16?0                 689:'ip_subnet_match'	;0
1020 804   IS_EQUAL/17               #377=     $376                 690:1               	;0
1021 804   BOOL_NOT/13               #378=     #377                 ?0                  	;0
1022 804   JMPZ/43                   ?0        #378                 ?1024               	;0	>>1024
1023 805   GOTO/253                  ?0        ?227                 ?691                	;0
1024 807   ECHO/40                   ?0        692:' checked '      ?0                  	;0	<<1022
1025 808   GOTO/253                  ?0        ?227                 ?693                	;0
1026 811   ECHO/40                   ?0        694:'data-plugin="switchery" class="js-switch" data-color="#039cfd"/>
													</div>
												</div>
                                                <h5 class="card-title mb-4">Debug</h5>
                                                <div class="form-group row mb-4">
                                                    <label class="col-md-4 col-form-label" for="debug_show_errors">Debug Mode <i title="Automatically clean up redundant files in the background. Recommended." class="tooltip text-secondary far fa-circle"></i></label>
													<div class="col-md-2">
														<input name="debug_show_errors" id="debug_show_errors" type="checkbox"' ?0                  	;0
1027 812   FETCH_DIM_R/81            $379=     16?0                 695:'debug_show_errors'	;0
1028 812   IS_EQUAL/17               #380=     $379                 696:1               	;0
1029 812   BOOL_NOT/13               #381=     #380                 ?0                  	;0
1030 812   JMPZ/43                   ?0        #381                 ?1032               	;0	>>1032
1031 813   GOTO/253                  ?0        ?1033                ?697                	;0
1032 815   ECHO/40                   ?0        698:' checked '      ?0                  	;0	<<1030
1033 817   GOTO/253                  ?0        ?381                 ?699                	;0
1034 819   FETCH_DIM_R/81            $382=     16?0                 700:'disable_xmltv_restreamer'	;0
1035 819   IS_EQUAL/17               #383=     $382                 701:1               	;0
1036 819   BOOL_NOT/13               #384=     #383                 ?0                  	;0
1037 819   JMPZ/43                   ?0        #384                 ?1039               	;0	>>1039
1038 820   GOTO/253                  ?0        ?1040                ?702                	;0
1039 822   ECHO/40                   ?0        703:' checked '      ?0                  	;0	<<1037
1040 824   ECHO/40                   ?0        704:'data-plugin="switchery" class="js-switch" data-color="#039cfd"/>
													</div>
                                                </div>
                                                <div class="form-group row mb-4">
													<label class="col-md-4 col-form-label" for="disable_playlist">Disable Playlist Download - Line <i title="Enable to remove the ability for lines to download their HLS / device playlists." class="tooltip text-secondary far fa-circle"></i></label>
													<div class="col-md-2">
														<input name="disable_playlist" id="disable_playlist" type="checkbox"' ?0                  	;0
1041 825   FETCH_DIM_R/81            $385=     16?0                 705:'disable_playlist'	;0
1042 825   IS_EQUAL/17               #386=     $385                 706:1               	;0
1043 825   BOOL_NOT/13               #387=     #386                 ?0                  	;0
1044 825   JMPZ/43                   ?0        #387                 ?1046               	;0	>>1046
1045 826   GOTO/253                  ?0        ?1307                ?707                	;0
1046 828   GOTO/253                  ?0        ?1306                ?708                	;0	<<1044
1047 830   ECHO/40                   ?0        709:' checked '      ?0                  	;0
1048 832   ECHO/40                   ?0        710:'data-plugin="switchery" class="js-switch" data-color="#039cfd"/>
													</div>
												</div>
                                                <div class="form-group row mb-4">
                                                    <label class="col-md-4 col-form-label" for="player_blur">Background Blur px <i title="Blur the background images by X pixels." class="tooltip text-secondary far fa-circle"></i></label>
													<div class="col-md-2">
														<input type="text" class="form-control text-center" id="player_blur" name="player_blur" value="' ?0                  	;0
1049 833   INIT_FCALL_BY_NAME/59     ?0        ?0                   711:'intval'        	;1
1050 833   FETCH_DIM_FUNC_ARG/93     $388=     16?0                 713:'player_blur'   	;1
1051 833   SEND_VAR_EX/66            ?80       $388                 ?1                  	;0
1052 833   DO_FCALL_BY_NAME/131      $389=     ?0                   ?0                  	;0
1053 833   ECHO/40                   ?0        $389                 ?0                  	;0
1054 834   ECHO/40                   ?0        714:'">
													</div>
                                                    <label class="col-md-4 col-form-label" for="player_opacity">Background Opacity % <i title="Adjust the background image opacity. Default is 10%." class="tooltip text-secondary far fa-circle"></i></label>
													<div class="col-md-2">
														<input type="text" class="form-control text-center" id="player_opacity" name="player_opacity" value="' ?0                  	;0
1055 835   GOTO/253                  ?0        ?457                 ?715                	;0
1056 837   ECHO/40                   ?0        716:'data-plugin="switchery" class="js-switch" data-color="#039cfd"/>
													</div>
                                                </div>
                                                <div class="form-group row mb-4">
													<label class="col-md-4 col-form-label" for="ondemand_balance_equal">Balance As Live <i title="Treat on-demand servers equal to live servers when load balancing, this will mean an on-demand server will be started up to load balance even if there\'s already a server live for that stream." class="tooltip text-secondary far fa-circle"></i></label>
													<div class="col-md-2">
														<input name="ondemand_balance_equal" id="ondemand_balance_equal" type="checkbox"' ?0                  	;0
1057 838   FETCH_DIM_R/81            $390=     16?0                 717:'ondemand_balance_equal'	;0
1058 838   IS_EQUAL/17               #391=     $390                 718:1               	;0
1059 838   BOOL_NOT/13               #392=     #391                 ?0                  	;0
1060 838   JMPZ/43                   ?0        #392                 ?1062               	;0	>>1062
1061 839   GOTO/253                  ?0        ?1063                ?719                	;0
1062 841   ECHO/40                   ?0        720:' checked '      ?0                  	;0	<<1060
1063 843   ECHO/40                   ?0        721:'data-plugin="switchery" class="js-switch" data-color="#039cfd"/>
													</div>
                                                </div>
												<h5 class="card-title mb-4">On-Demand Scanner</h5>
												<div class="form-group row mb-4">
													<label class="col-md-4 col-form-label" for="on_demand_checker">Enable Scanner <i title="Periodically probe on-demand streams to check their current status, resolution, codecs and FPS, as well as response time and log any errors incurred to the database. Streams will scan one at a time, per server, to avoid any connection issues." class="tooltip text-secondary far fa-circle"></i></label>
													<div class="col-md-2">
														<input name="on_demand_checker" id="on_demand_checker" type="checkbox"' ?0                  	;0
1064 844   GOTO/253                  ?0        ?639                 ?722                	;0
1065 846   ECHO/40                   ?0        723:' checked '      ?0                  	;0
1066 848   ECHO/40                   ?0        724:'data-plugin="switchery" class="js-switch" data-color="#039cfd"/>
													</div>
                                                </div>
                                                <div class="form-group row mb-4">
                                                    <label class="col-md-4 col-form-label" for="block_streaming_servers">Block Hosting Servers <i title="Automatically block servers from server hosting providers. This won\'t affect allowed restreamers." class="tooltip text-secondary far fa-circle"></i></label>
													<div class="col-md-2">
														<input name="block_streaming_servers" id="block_streaming_servers" type="checkbox"' ?0                  	;0
1067 849   FETCH_DIM_R/81            $393=     16?0                 725:'block_streaming_servers'	;0
1068 849   IS_EQUAL/17               #394=     $393                 726:1               	;0
1069 849   BOOL_NOT/13               #395=     #394                 ?0                  	;0
1070 849   JMPZ/43                   ?0        #395                 ?1072               	;0	>>1072
1071 850   GOTO/253                  ?0        ?1635                ?727                	;0
1072 852   ECHO/40                   ?0        728:' checked '      ?0                  	;0	<<1070
1073 853   GOTO/253                  ?0        ?1635                ?729                	;0
1074 856   ECHO/40                   ?0        730:'data-plugin="switchery" class="js-switch" data-color="#039cfd"/>
													</div>
												</div>
												<div class="form-group row mb-4">
                                                    <label class="col-md-4 col-form-label" for="modal_edit">Quick Edit Modal <i title="When clicking Edit, open in a modal without navigating away from the page." class="tooltip text-secondary far fa-circle"></i></label>
													<div class="col-md-2">
														<input name="modal_edit" id="modal_edit" type="checkbox"' ?0                  	;0
1075 857   FETCH_DIM_R/81            $396=     16?0                 731:'modal_edit'    	;0
1076 857   IS_EQUAL/17               #397=     $396                 732:1               	;0
1077 857   BOOL_NOT/13               #398=     #397                 ?0                  	;0
1078 857   JMPZ/43                   ?0        #398                 ?1080               	;0	>>1080
1079 858   GOTO/253                  ?0        ?1081                ?733                	;0
1080 860   ECHO/40                   ?0        734:' checked '      ?0                  	;0	<<1078
1081 862   GOTO/253                  ?0        ?1958                ?735                	;0
1082 865   ECHO/40                   ?0        736:'														</select>
													</div>
												</div>
                                                <div class="form-group row mb-4">
													<label class="col-md-3 col-form-label" for="stream_logs_save">Stream Error Logs <i title="Activity logs are saved when an active connection is closed. This is useful information to keep and should be kept for as long as possible, however can build up if you have high throughput." class="tooltip text-secondary far fa-circle"></i></label>
                                                    <div class="col-md-3">
														<input name="stream_logs_save" id="stream_logs_save" type="checkbox"' ?0                  	;0
1083 866   FETCH_DIM_R/81            $399=     16?0                 737:'stream_logs_save'	;0
1084 866   IS_EQUAL/17               #400=     $399                 738:1               	;0
1085 866   BOOL_NOT/13               #401=     #400                 ?0                  	;0
1086 866   JMPZ/43                   ?0        #401                 ?1088               	;0	>>1088
1087 867   GOTO/253                  ?0        ?1089                ?739                	;0
1088 869   ECHO/40                   ?0        740:' checked '      ?0                  	;0	<<1086
1089 871   GOTO/253                  ?0        ?874                 ?741                	;0
1090 873   FETCH_DIM_R/81            $402=     16?0                 742:'encrypt_hls'   	;0
1091 873   IS_EQUAL/17               #403=     $402                 743:1               	;0
1092 873   BOOL_NOT/13               #404=     #403                 ?0                  	;0
1093 873   JMPZ/43                   ?0        #404                 ?1095               	;0	>>1095
1094 874   GOTO/253                  ?0        ?1096                ?744                	;0
1095 876   ECHO/40                   ?0        745:' checked '      ?0                  	;0	<<1093
1096 878   ECHO/40                   ?0        746:'data-plugin="switchery" class="js-switch" data-color="#039cfd"/>
													</div>
													<label class="col-md-4 col-form-label" for="disallow_empty_user_agents">Disallow Empty UA <i title="Don\'t allow connections from clients with no user-agent." class="tooltip text-secondary far fa-circle"></i></label>
													<div class="col-md-2">
														<input name="disallow_empty_user_agents" id="disallow_empty_user_agents" type="checkbox"' ?0                  	;0
1097 879   FETCH_DIM_R/81            $405=     16?0                 747:'disallow_empty_user_agents'	;0
1098 879   IS_EQUAL/17               #406=     $405                 748:1               	;0
1099 879   BOOL_NOT/13               #407=     #406                 ?0                  	;0
1100 879   JMPZ/43                   ?0        #407                 ?1102               	;0	>>1102
1101 880   GOTO/253                  ?0        ?1973                ?749                	;0
1102 882   GOTO/253                  ?0        ?1972                ?750                	;0	<<1100
1103 885   ECHO/40                   ?0        751:'														</select>
													</div>
												</div>
                                                <div class="form-group row mb-4">
													<label class="col-md-4 col-form-label" for="mag_default_type">Default Theme Type <i title="Whether to use Modern or Legacy theme by default for newly added devices." class="tooltip text-secondary far fa-circle"></i></label>
													<div class="col-md-2">
														<select name="mag_default_type" id="mag_default_type" class="form-control" data-toggle="select2">
															' ?0                  	;0
1104 886   FE_RESET_R/77             $408=     752:array (
  0 => 'Modern',
  1 => 'Legacy',
) ?1121               	;0
1105 886   FE_FETCH_R/78             #409=     $408                 16?1                	;1121	>>1121	<<1120
1106 886   ASSIGN/38                 ?392      16?2                 #409                	;0
1107 887   ECHO/40                   ?0        753:'															<option ' ?0                  	;0
1108 888   FETCH_DIM_R/81            $411=     16?0                 754:'mag_default_type'	;0
1109 888   IS_EQUAL/17               #412=     $411                 16?2                	;0
1110 888   BOOL_NOT/13               #413=     #412                 ?0                  	;0
1111 888   JMPZ/43                   ?0        #413                 ?1114               	;0	>>1114
1112 889   NOP/0                     ?0        ?0                   ?0                  	;1
1113 889   GOTO/253                  ?0        ?1115                ?755                	;0
1114 891   ECHO/40                   ?0        756:'selected '      ?0                  	;0	<<1111
1115 893   ECHO/40                   ?0        757:'value="'        ?0                  	;0
1116 894   ECHO/40                   ?0        16?2                 ?0                  	;0
1117 895   ECHO/40                   ?0        758:'">'             ?0                  	;0
1118 896   ECHO/40                   ?0        16?1                 ?0                  	;0
1119 897   ECHO/40                   ?0        759:'</option>
															' ?0                  	;0
1120 898   JMP/42                    ?0        ?1105                ?0                  	;0	>>1105
1121 898   FE_FREE/127               ?0        $408                 ?0                  	;0	<<1104
1122 901   ECHO/40                   ?0        760:'														</select>
													</div>
													<label class="col-md-4 col-form-label" for="stalker_theme">Legacy Theme <i title="Default Ministra theme to be used by MAG devices." class="tooltip text-secondary far fa-circle"></i></label>
													<div class="col-md-2">
														<select name="stalker_theme" id="stalker_theme" class="form-control" data-toggle="select2">
															' ?0                  	;0
1123 902   GOTO/253                  ?0        ?569                 ?761                	;0
1124 904   FETCH_IS/89               $414=     762:'_SERVER'        ?0                  	;0
1125 904   ISSET_ISEMPTY_DIM_OBJ/115 #415=     $414                 763:'HTTP_X_REQUESTED_WITH'	;16777216
1126 904   BOOL_NOT/13               #416=     #415                 ?0                  	;0
1127 904   JMPZ_EX/46                #416=     #416                 ?1135               	;0	>>1135
1128 904   INIT_FCALL_BY_NAME/59     ?0        ?0                   764:'strtolower'    	;1
1129 904   FETCH_FUNC_ARG/92         $417=     766:'_SERVER'        ?0                  	;1
1130 904   FETCH_DIM_FUNC_ARG/93     $418=     $417                 767:'HTTP_X_REQUESTED_WITH'	;1
1131 904   SEND_VAR_EX/66            ?80       $418                 ?1                  	;0
1132 904   DO_FCALL_BY_NAME/131      $419=     ?0                   ?0                  	;0
1133 904   IS_EQUAL/17               #420=     $419                 768:'xmlhttprequest'	;0
1134 904   BOOL/52                   #416=     #420                 ?0                  	;0
1135 904   BOOL_NOT/13               #421=     #416                 ?0                  	;0	<<1127
1136 904   JMPZ/43                   ?0        #421                 ?1138               	;0	>>1138
1137 905   GOTO/253                  ?0        ?1139                ?769                	;0
1138 907   ECHO/40                   ?0        770:' style="display: none;"' ?0                  	;0	<<1136
1139 909   ECHO/40                   ?0        771:'>
    <div class="container-fluid">
		<form action="#" method="POST">
            <div style="display:none;"><input type="text"><input type="password"></div> <!-- Chrome tries to autofill username / password, fool it into filling this in instead. -->
			<div class="row">
				<div class="col-12">
					<div class="page-title-box">
						<div class="page-title-right">
							<input name="submit_settings" type="submit" class="btn btn-primary" value="Save Changes" />
						</div>
						<h4 class="page-title">Settings</h4>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-xl-12">
					' ?0                  	;0
1140 910   ISSET_ISEMPTY_CV/197      #422=     16?10                ?0                  	;33554432
1141 910   JMPZ_EX/46                #422=     #422                 ?1145               	;0	>>1145
1142 910   FETCH_CONSTANT/99         #423=     ?0                   772:'STATUS_SUCCESS'	;16
1143 910   IS_EQUAL/17               #424=     16?10                #423                	;0
1144 910   BOOL/52                   #422=     #424                 ?0                  	;0
1145 910   BOOL_NOT/13               #425=     #422                 ?0                  	;0	<<1141
1146 910   JMPZ/43                   ?0        #425                 ?1148               	;0	>>1148
1147 911   GOTO/253                  ?0        ?1594                ?775                	;0
1148 913   GOTO/253                  ?0        ?1593                ?776                	;0	<<1146
1149 915   INIT_FCALL_BY_NAME/59     ?0        ?0                   777:'htmlspecialchars'	;1
1150 915   FETCH_DIM_FUNC_ARG/93     $426=     16?0                 779:'seg_delete_threshold'	;1
1151 915   SEND_VAR_EX/66            ?80       $426                 ?1                  	;0
1152 915   DO_FCALL_BY_NAME/131      $427=     ?0                   ?0                  	;0
1153 915   ECHO/40                   ?0        $427                 ?0                  	;0
1154 916   ECHO/40                   ?0        780:'">
													</div>
													<label class="col-md-4 col-form-label" for="segment_wait_time">Max Segment Wait Time <i title="Maximum amount of seconds to wait for a new segment to be created before exiting the clients connection due to having no new data that can be delivered." class="tooltip text-secondary far fa-circle"></i></label>
													<div class="col-md-2">
														<input type="text" class="form-control text-center" id="segment_wait_time" name="segment_wait_time" value="' ?0                  	;0
1155 917   INIT_FCALL_BY_NAME/59     ?0        ?0                   781:'htmlspecialchars'	;1
1156 917   FETCH_DIM_FUNC_ARG/93     $428=     16?0                 783:'segment_wait_time'	;1
1157 917   SEND_VAR_EX/66            ?80       $428                 ?1                  	;0
1158 917   DO_FCALL_BY_NAME/131      $429=     ?0                   ?0                  	;0
1159 917   ECHO/40                   ?0        $429                 ?0                  	;0
1160 918   ECHO/40                   ?0        784:'">
													</div>
												</div>
                                                <div class="form-group row mb-4">
													<label class="col-md-4 col-form-label" for="stream_max_analyze">Analysis Duration <i title="How long to analyse a stream, longer duration will increase sample accuracy. 5,000,000 microseconds = 5s." class="tooltip text-secondary far fa-circle"></i></label>
													<div class="col-md-2">
														<input type="text" class="form-control text-center" id="stream_max_analyze" name="stream_max_analyze" value="' ?0                  	;0
1161 919   INIT_FCALL_BY_NAME/59     ?0        ?0                   785:'htmlspecialchars'	;1
1162 919   FETCH_DIM_FUNC_ARG/93     $430=     16?0                 787:'stream_max_analyze'	;1
1163 919   SEND_VAR_EX/66            ?80       $430                 ?1                  	;0
1164 919   DO_FCALL_BY_NAME/131      $431=     ?0                   ?0                  	;0
1165 919   ECHO/40                   ?0        $431                 ?0                  	;0
1166 920   GOTO/253                  ?0        ?423                 ?788                	;0
1167 922   ECHO/40                   ?0        789:'">
													</div>
                                                </div>
                                                <div class="form-group row mb-4">
													<label class="col-md-4 col-form-label" for="max_simultaneous_downloads">Max Simultaneous Downloads <i title="Max number of simultaneous EPG & Playlist downloads per user (restreamers aren\'t affected). Any additional requests will be served a 429 Too Many Requests error. Set this to 0 to disable." class="tooltip text-secondary far fa-circle"></i></label>
													<div class="col-md-2">
														<input type="text" class="form-control text-center" id="max_simultaneous_downloads" name="max_simultaneous_downloads" value="' ?0                  	;0
1168 923   INIT_FCALL_BY_NAME/59     ?0        ?0                   790:'htmlspecialchars'	;1
1169 923   FETCH_DIM_FUNC_ARG/93     $432=     16?0                 792:'max_simultaneous_downloads'	;1
1170 923   SEND_VAR_EX/66            ?80       $432                 ?1                  	;0
1171 923   DO_FCALL_BY_NAME/131      $433=     ?0                   ?0                  	;0
1172 923   ECHO/40                   ?0        $433                 ?0                  	;0
1173 924   ECHO/40                   ?0        793:'">
													</div>
												</div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane" id="api">
                                        <div class="row">
											<div class="col-12">
                                                <h5 class="card-title mb-4">Preferences</h5>
                                                <div class="form-group row mb-4">
													<label class="col-md-4 col-form-label" for="tmdb_api_key">TMDb Key <i title="Get your API key at <a href=\'https://www.themoviedb.org/settings/api\'>https://www.themoviedb.org/settings/api</a>" class="tooltip text-secondary far fa-circle"></i></label>
													<div class="col-md-8">
														<input type="text" class="form-control" id="tmdb_api_key" name="tmdb_api_key" value="' ?0                  	;0
1174 925   INIT_FCALL_BY_NAME/59     ?0        ?0                   794:'htmlspecialchars'	;1
1175 925   FETCH_DIM_FUNC_ARG/93     $434=     16?0                 796:'tmdb_api_key'  	;1
1176 925   SEND_VAR_EX/66            ?80       $434                 ?1                  	;0
1177 925   DO_FCALL_BY_NAME/131      $435=     ?0                   ?0                  	;0
1178 925   ECHO/40                   ?0        $435                 ?0                  	;0
1179 926   ECHO/40                   ?0        797:'">
													</div>
												</div>
												<div class="form-group row mb-4">
													<label class="col-md-4 col-form-label" for="tmdb_language">TMDb Language <i title="Default language for TMDb requests, you can override this per movie or series." class="tooltip text-secondary far fa-circle"></i></label>
													<div class="col-md-8">
														<select name="tmdb_language" id="tmdb_language" class="form-control" data-toggle="select2">
															' ?0                  	;0
1180 927   GOTO/253                  ?0        ?1208                ?798                	;0
1181 929   ECHO/40                   ?0        799:' checked '      ?0                  	;0
1182 931   ECHO/40                   ?0        800:'data-plugin="switchery" class="js-switch" data-color="#039cfd"/>
													</div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
											<div class="col-12">
                                                <h5 class="card-title mb-4">Legacy Support</h5>
                                                <div class="form-group row mb-4">
                                                    <label class="col-md-4 col-form-label" for="legacy_get">Legacy Playlist URL <i title="Rewrite get.php requests to the new playlist URL." class="tooltip text-secondary far fa-circle"></i></label>
													<div class="col-md-2">
														<input name="legacy_get" id="legacy_get" type="checkbox"' ?0                  	;0
1183 932   FETCH_DIM_R/81            $436=     16?0                 801:'legacy_get'    	;0
1184 932   IS_EQUAL/17               #437=     $436                 802:1               	;0
1185 932   BOOL_NOT/13               #438=     #437                 ?0                  	;0
1186 932   JMPZ/43                   ?0        #438                 ?1188               	;0	>>1188
1187 933   GOTO/253                  ?0        ?534                 ?803                	;0
1188 935   ECHO/40                   ?0        804:' checked '      ?0                  	;0	<<1186
1189 936   GOTO/253                  ?0        ?534                 ?805                	;0
1190 938   ECHO/40                   ?0        806:'data-plugin="switchery" class="js-switch" data-color="#039cfd"/>
													</div>
                                                </div>
                                                <div class="form-group row mb-4">
                                                    <label class="col-md-4 col-form-label" for="restrict_same_ip">Restrict to Same IP <i title="Tie HLS connections to their IP address. Turn this off if you\'re having issues with dynamic IP\'s." class="tooltip text-secondary far fa-circle"></i></label>
													<div class="col-md-2">
														<input name="restrict_same_ip" id="restrict_same_ip" type="checkbox"' ?0                  	;0
1191 939   FETCH_DIM_R/81            $439=     16?0                 807:'restrict_same_ip'	;0
1192 939   IS_EQUAL/17               #440=     $439                 808:1               	;0
1193 939   BOOL_NOT/13               #441=     #440                 ?0                  	;0
1194 939   JMPZ/43                   ?0        #441                 ?1196               	;0	>>1196
1195 940   GOTO/253                  ?0        ?1197                ?809                	;0
1196 942   ECHO/40                   ?0        810:' checked '      ?0                  	;0	<<1194
1197 944   ECHO/40                   ?0        811:'data-plugin="switchery" class="js-switch" data-color="#039cfd"/>
													</div>
                                                    <label class="col-md-4 col-form-label" for="rtmp_random">Random RTMP IP <i title="Use a random IP for RMTP connections." class="tooltip text-secondary far fa-circle"></i></label>
													<div class="col-md-2">
														<input name="rtmp_random" id="rtmp_random" type="checkbox"' ?0                  	;0
1198 945   GOTO/253                  ?0        ?1711                ?812                	;0
1199 947   ECHO/40                   ?0        813:' checked '      ?0                  	;0
1200 949   ECHO/40                   ?0        814:'data-plugin="switchery" class="js-switch" data-color="#039cfd"/>
													</div>
													<label class="col-md-4 col-form-label" for="show_isps">Log Client ISP\'s <i title="Grab ISP information for each client that connects and store it in the database." class="tooltip text-secondary far fa-circle"></i></label>
													<div class="col-md-2">
														<input name="show_isps" id="show_isps" type="checkbox"' ?0                  	;0
1201 950   FETCH_DIM_R/81            $442=     16?0                 815:'show_isps'     	;0
1202 950   IS_EQUAL/17               #443=     $442                 816:1               	;0
1203 950   BOOL_NOT/13               #444=     #443                 ?0                  	;0
1204 950   JMPZ/43                   ?0        #444                 ?1206               	;0	>>1206
1205 951   GOTO/253                  ?0        ?1315                ?817                	;0
1206 953   ECHO/40                   ?0        818:' checked '      ?0                  	;0	<<1204
1207 954   GOTO/253                  ?0        ?1315                ?819                	;0
1208 956   FE_RESET_R/77             $445=     16?11                ?1225               	;0
1209 956   FE_FETCH_R/78             #446=     $445                 16?12               	;1225	>>1225	<<1224
1210 956   ASSIGN/38                 ?429      16?13                #446                	;0
1211 957   ECHO/40                   ?0        820:'															<option' ?0                  	;0
1212 958   FETCH_DIM_R/81            $448=     16?0                 821:'tmdb_language' 	;0
1213 958   IS_EQUAL/17               #449=     $448                 16?13               	;0
1214 958   BOOL_NOT/13               #450=     #449                 ?0                  	;0
1215 958   JMPZ/43                   ?0        #450                 ?1218               	;0	>>1218
1216 959   NOP/0                     ?0        ?0                   ?0                  	;1
1217 959   GOTO/253                  ?0        ?1219                ?822                	;0
1218 961   ECHO/40                   ?0        823:' selected'      ?0                  	;0	<<1215
1219 963   ECHO/40                   ?0        824:' value="'       ?0                  	;0
1220 964   ECHO/40                   ?0        16?13                ?0                  	;0
1221 965   ECHO/40                   ?0        825:'">'             ?0                  	;0
1222 966   ECHO/40                   ?0        16?12                ?0                  	;0
1223 967   ECHO/40                   ?0        826:'</option>
															' ?0                  	;0
1224 968   JMP/42                    ?0        ?1209                ?0                  	;0	>>1209
1225 968   FE_FREE/127               ?0        $445                 ?0                  	;0	<<1208
1226 971   ECHO/40                   ?0        827:'														</select>
													</div>
												</div>
                                                <div class="form-group row mb-4">
													<label class="col-md-4 col-form-label" for="download_images">Download Images <i title="If this option is set, images from TMDb for example will be downloaded to the main server." class="tooltip text-secondary far fa-circle"></i></label>
													<div class="col-md-2">
														<input name="download_images" id="download_images" type="checkbox"' ?0                  	;0
1227 972   FETCH_DIM_R/81            $451=     16?0                 828:'download_images'	;0
1228 972   IS_EQUAL/17               #452=     $451                 829:1               	;0
1229 972   BOOL_NOT/13               #453=     #452                 ?0                  	;0
1230 972   JMPZ/43                   ?0        #453                 ?1232               	;0	>>1232
1231 973   GOTO/253                  ?0        ?1512                ?830                	;0
1232 975   ECHO/40                   ?0        831:' checked '      ?0                  	;0	<<1230
1233 976   GOTO/253                  ?0        ?1512                ?832                	;0
1234 979   ECHO/40                   ?0        833:'data-plugin="switchery" class="js-switch" data-color="#039cfd"/>
													</div>
                                                    <label class="col-md-3 col-form-label" for="keep_client">Keep Logs For</label>
													<div class="col-md-3">
														<select name="keep_client" id="keep_client" class="form-control" data-toggle="select2">
															' ?0                  	;0
1235 980   FE_RESET_R/77             $454=     834:array (
  0 => 'Forever',
  3600 => '1 Hour',
  21600 => '6 Hours',
  43200 => '12 Hours',
  86400 => '1 Day',
  259200 => '3 Days',
  604800 => '7 Days',
  1209600 => '14 Days',
  16934400 => '28 Days',
  15552000 => '180 Days',
  31536000 => '365 Days',
) ?1252               	;0
1236 980   FE_FETCH_R/78             #455=     $454                 16?1                	;1252	>>1252	<<1251
1237 980   ASSIGN/38                 ?438      16?2                 #455                	;0
1238 981   ECHO/40                   ?0        835:'															<option ' ?0                  	;0
1239 982   FETCH_DIM_R/81            $457=     16?0                 836:'keep_client'   	;0
1240 982   IS_EQUAL/17               #458=     $457                 16?2                	;0
1241 982   BOOL_NOT/13               #459=     #458                 ?0                  	;0
1242 982   JMPZ/43                   ?0        #459                 ?1245               	;0	>>1245
1243 983   NOP/0                     ?0        ?0                   ?0                  	;1
1244 983   GOTO/253                  ?0        ?1246                ?837                	;0
1245 985   ECHO/40                   ?0        838:'selected '      ?0                  	;0	<<1242
1246 987   ECHO/40                   ?0        839:'value="'        ?0                  	;0
1247 988   ECHO/40                   ?0        16?2                 ?0                  	;0
1248 989   ECHO/40                   ?0        840:'">'             ?0                  	;0
1249 990   ECHO/40                   ?0        16?1                 ?0                  	;0
1250 991   ECHO/40                   ?0        841:'</option>
															' ?0                  	;0
1251 992   JMP/42                    ?0        ?1236                ?0                  	;0	>>1236
1252 992   FE_FREE/127               ?0        $454                 ?0                  	;0	<<1235
1253 995   ECHO/40                   ?0        842:'														</select>
													</div>
												</div>
                                                <div class="form-group row mb-4">
													<label class="col-md-3 col-form-label" for="save_login_logs">Login Logs <i title="Activity logs are saved when an active connection is closed. This is useful information to keep and should be kept for as long as possible, however can build up if you have high throughput." class="tooltip text-secondary far fa-circle"></i></label>
                                                    <div class="col-md-3">
														<input name="save_login_logs" id="save_login_logs" type="checkbox"' ?0                  	;0
1254 996   GOTO/253                  ?0        ?1643                ?843                	;0
1255 998   ECHO/40                   ?0        844:' value="bouquet">Legacy</option>
															<option' ?0                  	;0
1256 999   FETCH_DIM_R/81            $460=     16?0                 845:'channel_number_type'	;0
1257 999   IS_EQUAL/17               #461=     $460                 846:'manual'        	;0
1258 999   BOOL_NOT/13               #462=     #461                 ?0                  	;0
1259 999   JMPZ/43                   ?0        #462                 ?1261               	;0	>>1261
1260 1000  GOTO/253                  ?0        ?1262                ?847                	;0
1261 1002  ECHO/40                   ?0        848:' selected'      ?0                  	;0	<<1259
1262 1004  ECHO/40                   ?0        849:' value="manual">Manual</option>
														</select>
													</div>
                                                    <label class="col-md-4 col-form-label" for="vod_sort_newest">Sort VOD by Date <i title="Change default sorting for VOD to be by date added descending, showing newest first. This only works as expected if Channel Sorting Type is set to Bouquet, otherwise VOD order will be overwritten." class="tooltip text-secondary far fa-circle"></i></label>
													<div class="col-md-2">
														<input name="vod_sort_newest" id="vod_sort_newest" type="checkbox"' ?0                  	;0
1263 1005  GOTO/253                  ?0        ?661                 ?850                	;0
1264 1007  ECHO/40                   ?0        851:'data-plugin="switchery" class="js-switch" data-color="#039cfd"/>
													</div>
                                                </div>
                                                <h5 class="card-title mb-4">Spam Prevention</h5>
                                                <div class="form-group row mb-4">
													<label class="col-md-4 col-form-label" for="flood_limit">Flood Limit <i title="Number of attempts before IP is blocked. Enter 0 to disable flood detection." class="tooltip text-secondary far fa-circle"></i></label>
													<div class="col-md-2">
														<input type="text" class="form-control text-center" id="flood_limit" name="flood_limit" value="' ?0                  	;0
1265 1008  INIT_FCALL_BY_NAME/59     ?0        ?0                   852:'htmlspecialchars'	;1
1266 1008  FETCH_DIM_FUNC_ARG/93     $463=     16?0                 854:'flood_limit'   	;1
1267 1008  SEND_VAR_EX/66            ?80       $463                 ?1                  	;0
1268 1008  DO_FCALL_BY_NAME/131      $464=     ?0                   ?0                  	;0
1269 1008  ECHO/40                   ?0        $464                 ?0                  	;0
1270 1009  ECHO/40                   ?0        855:'">
													</div>
                                                    <label class="col-md-4 col-form-label" for="flood_seconds">Per Seconds <i title="Number of seconds between requests." class="tooltip text-secondary far fa-circle"></i></label>
													<div class="col-md-2">
														<input type="text" class="form-control text-center" id="flood_seconds" name="flood_seconds" value="' ?0                  	;0
1271 1010  INIT_FCALL_BY_NAME/59     ?0        ?0                   856:'htmlspecialchars'	;1
1272 1010  FETCH_DIM_FUNC_ARG/93     $465=     16?0                 858:'flood_seconds' 	;1
1273 1010  SEND_VAR_EX/66            ?80       $465                 ?1                  	;0
1274 1010  DO_FCALL_BY_NAME/131      $466=     ?0                   ?0                  	;0
1275 1010  ECHO/40                   ?0        $466                 ?0                  	;0
1276 1011  ECHO/40                   ?0        859:'">
													</div>
												</div>
                                                <div class="form-group row mb-4">
													<label class="col-md-4 col-form-label" for="auth_flood_limit">Auth Flood Limit <i title="Number of attempts before connections are slowed down. Enter 0 to disable authorised flood detection.<br/><br/>This is separate to the normal Flood Limit as it only affects legitimate clients with valid credentials. As an example you can set this up so that after 30 connections in 10 seconds, the requests for the next 10 seconds will sleep for 1 second first to slow them down." class="tooltip text-secondary far fa-circle"></i></label>
													<div class="col-md-2">
														<input type="text" class="form-control text-center" id="auth_flood_limit" name="auth_flood_limit" value="' ?0                  	;0
1277 1012  GOTO/253                  ?0        ?253                 ?860                	;0
1278 1014  ECHO/40                   ?0        861:' checked '      ?0                  	;0
1279 1016  ECHO/40                   ?0        862:'data-plugin="switchery" class="js-switch" data-color="#039cfd"/>
													</div>
												</div>
												<div class="form-group row mb-4">
													<label class="col-md-4 col-form-label" for="channel_number_type">Channel Sorting Type <i title="Preferred method of channel sorting in playlists and apps." class="tooltip text-secondary far fa-circle"></i></label>
													<div class="col-md-2">
														<select name="channel_number_type" id="channel_number_type" class="form-control" data-toggle="select2">
															<option' ?0                  	;0
1280 1017  FETCH_DIM_R/81            $467=     16?0                 863:'channel_number_type'	;0
1281 1017  IS_EQUAL/17               #468=     $467                 864:'bouquet_new'   	;0
1282 1017  BOOL_NOT/13               #469=     #468                 ?0                  	;0
1283 1017  JMPZ/43                   ?0        #469                 ?1285               	;0	>>1285
1284 1018  GOTO/253                  ?0        ?729                 ?865                	;0
1285 1020  ECHO/40                   ?0        866:' selected'      ?0                  	;0	<<1283
1286 1021  GOTO/253                  ?0        ?729                 ?867                	;0
1287 1023  ECHO/40                   ?0        868:'data-plugin="switchery" class="js-switch" data-color="#039cfd"/>
													</div>
                                                </div>
                                                <h5 class="card-title mb-4">Off Air Videos</h5>
												<div class="form-group row mb-4">
													<label class="col-md-4 col-form-label" for="show_not_on_air_video">Stream Down Video <i title="Show this video when a stream isn\'t on air." class="tooltip text-secondary far fa-circle"></i></label>
													<div class="col-md-2">
														<input name="show_not_on_air_video" id="show_not_on_air_video" type="checkbox"' ?0                  	;0
1288 1024  FETCH_DIM_R/81            $470=     16?0                 869:'show_not_on_air_video'	;0
1289 1024  IS_EQUAL/17               #471=     $470                 870:1               	;0
1290 1024  BOOL_NOT/13               #472=     #471                 ?0                  	;0
1291 1024  JMPZ/43                   ?0        #472                 ?1293               	;0	>>1293
1292 1025  GOTO/253                  ?0        ?1294                ?871                	;0
1293 1027  ECHO/40                   ?0        872:' checked '      ?0                  	;0	<<1291
1294 1029  ECHO/40                   ?0        873:'data-plugin="switchery" class="js-switch" data-color="#039cfd"/>
													</div>
													<div class="col-md-6">
														<input type="text" class="form-control" id="not_on_air_video_path" name="not_on_air_video_path" value="' ?0                  	;0
1295 1030  GOTO/253                  ?0        ?470                 ?874                	;0
1296 1032  ECHO/40                   ?0        875:' checked '      ?0                  	;0
1297 1034  ECHO/40                   ?0        876:'data-plugin="switchery" class="js-switch" data-color="#039cfd"/>
													</div>
                                                </div>
                                                <h5 class="card-title mb-4">Ministra</h5>
												<div class="form-group row mb-4">
													<label class="col-md-4 col-form-label" for="stream_pass">Streaming Password</label>
													<div class="col-md-8">
														<input type="text" readonly class="form-control" id="stream_pass" value="' ?0                  	;0
1298 1035  INIT_FCALL_BY_NAME/59     ?0        ?0                   877:'htmlspecialchars'	;1
1299 1035  FETCH_STATIC_PROP_FUNC_ARG/177 $473=     879:'rSettings'      880:'XUI'           	;1
1300 1035  FETCH_DIM_FUNC_ARG/93     $474=     $473                 882:'live_streaming_pass'	;1
1301 1035  SEND_VAR_EX/66            ?80       $474                 ?1                  	;0
1302 1035  DO_FCALL_BY_NAME/131      $475=     ?0                   ?0                  	;0
1303 1035  ECHO/40                   ?0        $475                 ?0                  	;0
1304 1036  ECHO/40                   ?0        883:'">
													</div>
												</div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane" id="streaming">
										<div class="row">
											<div class="col-12">
                                                <h5 class="card-title mb-4">Preferences</h5>
                                                <div class="form-group row mb-4">
													<label class="col-md-4 col-form-label" for="enable_isp_lock">Enable ISP Lock <i title="Enable / Disable ISP lock globally." class="tooltip text-secondary far fa-circle"></i></label>
													<div class="col-md-2">
														<input name="enable_isp_lock" id="enable_isp_lock" type="checkbox"' ?0                  	;0
1305 1037  GOTO/253                  ?0        ?23                  ?884                	;0
1306 1039  ECHO/40                   ?0        885:' checked '      ?0                  	;0
1307 1041  ECHO/40                   ?0        886:'data-plugin="switchery" class="js-switch" data-color="#039cfd"/>
													</div>
                                                    <label class="col-md-4 col-form-label" for="disable_playlist_restreamer">Disable Playlist Download - Restreamer <i title="Enable to remove the ability for lines to download their HLS / device playlists." class="tooltip text-secondary far fa-circle"></i></label>
													<div class="col-md-2">
														<input name="disable_playlist_restreamer" id="disable_playlist_restreamer" type="checkbox"' ?0                  	;0
1308 1042  FETCH_DIM_R/81            $476=     16?0                 887:'disable_playlist_restreamer'	;0
1309 1042  IS_EQUAL/17               #477=     $476                 888:1               	;0
1310 1042  BOOL_NOT/13               #478=     #477                 ?0                  	;0
1311 1042  JMPZ/43                   ?0        #478                 ?1313               	;0	>>1313
1312 1043  GOTO/253                  ?0        ?483                 ?889                	;0
1313 1045  ECHO/40                   ?0        890:' checked '      ?0                  	;0	<<1311
1314 1046  GOTO/253                  ?0        ?483                 ?891                	;0
1315 1049  ECHO/40                   ?0        892:'data-plugin="switchery" class="js-switch" data-color="#039cfd"/>
													</div>
												</div>
                                                <div class="form-group row mb-4">
													<label class="col-md-4 col-form-label" for="online_capacity_interval">Online Capacity Interval <i title="Interval at which to check server activity for connection limits." class="tooltip text-secondary far fa-circle"></i></label>
													<div class="col-md-2">
														<input type="text" class="form-control text-center" id="online_capacity_interval" name="online_capacity_interval" value="' ?0                  	;0
1316 1050  INIT_FCALL_BY_NAME/59     ?0        ?0                   893:'htmlspecialchars'	;1
1317 1050  FETCH_DIM_FUNC_ARG/93     $479=     16?0                 895:'online_capacity_interval'	;1
1318 1050  SEND_VAR_EX/66            ?80       $479                 ?1                  	;0
1319 1050  DO_FCALL_BY_NAME/131      $480=     ?0                   ?0                  	;0
1320 1050  ECHO/40                   ?0        $480                 ?0                  	;0
1321 1051  ECHO/40                   ?0        896:'">
													</div>
                                                    <label class="col-md-4 col-form-label" for="monitor_connection_status">Monitor Connection Status <i title="Monitor PHP\'s connection_status() return while delivering stream and VOD content. This will abort the connection correctly when CONNECTION_NORMAL is not returned." class="tooltip text-secondary far fa-circle"></i></label>
													<div class="col-md-2">
														<input name="monitor_connection_status" id="monitor_connection_status" type="checkbox"' ?0                  	;0
1322 1052  FETCH_DIM_R/81            $481=     16?0                 897:'monitor_connection_status'	;0
1323 1052  IS_EQUAL/17               #482=     $481                 898:1               	;0
1324 1052  BOOL_NOT/13               #483=     #482                 ?0                  	;0
1325 1052  JMPZ/43                   ?0        #483                 ?1327               	;0	>>1327
1326 1053  GOTO/253                  ?0        ?552                 ?899                	;0
1327 1055  GOTO/253                  ?0        ?551                 ?900                	;0	<<1325
1328 1057  ECHO/40                   ?0        901:' checked '      ?0                  	;0
1329 1059  ECHO/40                   ?0        902:'data-plugin="switchery" class="js-switch" data-color="#039cfd"/>
													</div>
													<label class="col-md-4 col-form-label" for="ignore_keyframes">Ignore Keyframes <i title="Allow segments to start on frames other than keyframes. This improves behavior on some players when the time between keyframes is inconsistent, but may make things worse on others, and can cause some oddities during startup with blank screen until video kicks in." class="tooltip text-secondary far fa-circle"></i></label>
													<div class="col-md-2">
														<input name="ignore_keyframes" id="ignore_keyframes" type="checkbox"' ?0                  	;0
1330 1060  FETCH_DIM_R/81            $484=     16?0                 903:'ignore_keyframes'	;0
1331 1060  IS_EQUAL/17               #485=     $484                 904:1               	;0
1332 1060  BOOL_NOT/13               #486=     #485                 ?0                  	;0
1333 1060  JMPZ/43                   ?0        #486                 ?1335               	;0	>>1335
1334 1061  GOTO/253                  ?0        ?1550                ?905                	;0
1335 1063  ECHO/40                   ?0        906:' checked '      ?0                  	;0	<<1333
1336 1064  GOTO/253                  ?0        ?1550                ?907                	;0
1337 1066  INIT_FCALL_BY_NAME/59     ?0        ?0                   908:'htmlspecialchars'	;1
1338 1066  FETCH_DIM_FUNC_ARG/93     $487=     16?0                 910:'allowed_ips_admin'	;1
1339 1066  SEND_VAR_EX/66            ?80       $487                 ?1                  	;0
1340 1066  DO_FCALL_BY_NAME/131      $488=     ?0                   ?0                  	;0
1341 1066  ECHO/40                   ?0        $488                 ?0                  	;0
1342 1067  ECHO/40                   ?0        911:'">
													</div>
												</div>
												<div class="form-group row mb-4">
													<label class="col-md-4 col-form-label" for="api_ips">API IP\'s <i title="Allowed IP\'s to access the XUI Admin API. Separate each IP with a comma." class="tooltip text-secondary far fa-circle"></i></label>
													<div class="col-md-8">
														<input type="text" class="form-control" id="api_ips" name="api_ips" value="' ?0                  	;0
1343 1068  INIT_FCALL_BY_NAME/59     ?0        ?0                   912:'htmlspecialchars'	;1
1344 1068  FETCH_DIM_FUNC_ARG/93     $489=     16?0                 914:'api_ips'       	;1
1345 1068  SEND_VAR_EX/66            ?80       $489                 ?1                  	;0
1346 1068  DO_FCALL_BY_NAME/131      $490=     ?0                   ?0                  	;0
1347 1068  ECHO/40                   ?0        $490                 ?0                  	;0
1348 1069  ECHO/40                   ?0        915:'">
													</div>
												</div>
                                                <div class="form-group row mb-4">
													<label class="col-md-4 col-form-label" for="api_ips">API Password <i title="Password required to access the XUI Admin API. Leave blank to use IP whitelist only." class="tooltip text-secondary far fa-circle"></i></label>
													<div class="col-md-8">
														<input type="password" class="form-control" id="api_pass" name="api_pass" value="' ?0                  	;0
1349 1070  INIT_FCALL_BY_NAME/59     ?0        ?0                   916:'htmlspecialchars'	;1
1350 1070  FETCH_DIM_FUNC_ARG/93     $491=     16?0                 918:'api_pass'      	;1
1351 1070  SEND_VAR_EX/66            ?80       $491                 ?1                  	;0
1352 1070  DO_FCALL_BY_NAME/131      $492=     ?0                   ?0                  	;0
1353 1070  ECHO/40                   ?0        $492                 ?0                  	;0
1354 1071  GOTO/253                  ?0        ?1355                ?919                	;0
1355 1073  ECHO/40                   ?0        920:'">
													</div>
												</div>
                                                <div class="form-group row mb-4">
													<label class="col-md-4 col-form-label" for="disable_xmltv">Disable EPG Download - Line <i title="Enable to disallow EPG downloads in XMLTV format." class="tooltip text-secondary far fa-circle"></i></label>
													<div class="col-md-2">
														<input name="disable_xmltv" id="disable_xmltv" type="checkbox"' ?0                  	;0
1356 1074  FETCH_DIM_R/81            $493=     16?0                 921:'disable_xmltv' 	;0
1357 1074  IS_EQUAL/17               #494=     $493                 922:1               	;0
1358 1074  BOOL_NOT/13               #495=     #494                 ?0                  	;0
1359 1074  JMPZ/43                   ?0        #495                 ?1361               	;0	>>1361
1360 1075  GOTO/253                  ?0        ?1362                ?923                	;0
1361 1077  ECHO/40                   ?0        924:' checked '      ?0                  	;0	<<1359
1362 1079  ECHO/40                   ?0        925:'data-plugin="switchery" class="js-switch" data-color="#039cfd"/>
													</div>
                                                    <label class="col-md-4 col-form-label" for="disable_xmltv_restreamer">Disable EPG Download - Restreamer <i title="Enable to disallow EPG downloads in XMLTV format." class="tooltip text-secondary far fa-circle"></i></label>
													<div class="col-md-2">
														<input name="disable_xmltv_restreamer" id="disable_xmltv_restreamer" type="checkbox"' ?0                  	;0
1363 1080  GOTO/253                  ?0        ?1034                ?926                	;0
1364 1082  ECHO/40                   ?0        927:'data-plugin="switchery" class="js-switch" data-color="#039cfd"/>
													</div>
                                                </div>
                                                <div class="form-group row mb-4">
                                                    <label class="col-md-4 col-form-label" for="create_expiration">Redirect Expiration <i title="How long in seconds before a redirect from the main server to a load balancer will expire. If you get a lot of TOKEN_EXPIRED errors in your logs, increase this." class="tooltip text-secondary far fa-circle"></i></label>
													<div class="col-md-2">
														<input type="text" class="form-control text-center" id="create_expiration" name="create_expiration" value="' ?0                  	;0
1365 1083  INIT_FCALL_BY_NAME/59     ?0        ?0                   928:'htmlspecialchars'	;1
1366 1083  FETCH_DIM_FUNC_ARG/93     $496=     16?0                 930:'create_expiration'	;1
1367 1083  SEND_VAR_EX/66            ?80       $496                 ?1                  	;0
1368 1083  DO_FCALL_BY_NAME/131      $497=     ?0                   ?0                  	;0
1369 1083  ECHO/40                   ?0        $497                 ?0                  	;0
1370 1084  ECHO/40                   ?0        931:'">
													</div>
                                                    <label class="col-md-4 col-form-label" for="read_native_hls">HLS Read Native <i title="Force Read Native on for all HLS streams. Turn this off if you\'d rather set it manually for each applicable stream." class="tooltip text-secondary far fa-circle"></i></label>
													<div class="col-md-2">
														<input name="read_native_hls" id="read_native_hls" type="checkbox"' ?0                  	;0
1371 1085  FETCH_DIM_R/81            $498=     16?0                 932:'read_native_hls'	;0
1372 1085  IS_EQUAL/17               #499=     $498                 933:1               	;0
1373 1085  BOOL_NOT/13               #500=     #499                 ?0                  	;0
1374 1085  JMPZ/43                   ?0        #500                 ?1376               	;0	>>1376
1375 1086  GOTO/253                  ?0        ?334                 ?934                	;0
1376 1088  ECHO/40                   ?0        935:' checked '      ?0                  	;0	<<1374
1377 1089  GOTO/253                  ?0        ?334                 ?936                	;0
1378 1091  FETCH_DIM_R/81            $501=     16?0                 937:'mag_load_all_channels'	;0
1379 1091  IS_EQUAL/17               #502=     $501                 938:1               	;0
1380 1091  BOOL_NOT/13               #503=     #502                 ?0                  	;0
1381 1091  JMPZ/43                   ?0        #503                 ?1383               	;0	>>1383
1382 1092  GOTO/253                  ?0        ?1384                ?939                	;0
1383 1094  ECHO/40                   ?0        940:' checked '      ?0                  	;0	<<1381
1384 1096  ECHO/40                   ?0        941:'data-plugin="switchery" class="js-switch" data-color="#039cfd"/>
													</div>
                                                </div>
                                                <div class="form-group row mb-4">
                                                    <label class="col-md-4 col-form-label" for="disable_mag_token">Disable MAG Token <i title="Disable verification of MAG token when streaming, reduces security but can have better compatibility." class="tooltip text-secondary far fa-circle"></i></label>
													<div class="col-md-2">
														<input name="disable_mag_token" id="disable_mag_token" type="checkbox"' ?0                  	;0
1385 1097  FETCH_DIM_R/81            $504=     16?0                 942:'disable_mag_token'	;0
1386 1097  IS_EQUAL/17               #505=     $504                 943:1               	;0
1387 1097  BOOL_NOT/13               #506=     #505                 ?0                  	;0
1388 1097  JMPZ/43                   ?0        #506                 ?1390               	;0	>>1390
1389 1098  GOTO/253                  ?0        ?85                  ?944                	;0
1390 1100  GOTO/253                  ?0        ?84                  ?945                	;0	<<1388
1391 1102  ECHO/40                   ?0        946:'														</select>
													</div>
                                                    <label class="col-md-4 col-form-label" for="fails_per_time">Fails Per Time <i title="How long to track stream failures for on Streams view page. Fails per X seconds." class="tooltip text-secondary far fa-circle"></i></label>
													<div class="col-md-2">
														<input type="text" class="form-control text-center" id="fails_per_time" name="fails_per_time" value="' ?0                  	;0
1392 1103  INIT_FCALL_BY_NAME/59     ?0        ?0                   947:'intval'        	;1
1393 1103  FETCH_DIM_FUNC_ARG/93     $507=     16?0                 949:'fails_per_time'	;1
1394 1103  SEND_VAR_EX/66            ?80       $507                 ?1                  	;0
1395 1103  DO_FCALL_BY_NAME/131      $508=     ?0                   ?0                  	;0
1396 1103  ECHO/40                   ?0        $508                 ?0                  	;0
1397 1104  ECHO/40                   ?0        950:'">
													</div>
                                                    <!--<label class="col-md-4 col-form-label" for="default_entries">Fingerprint Max <i title="Maximum number of concurrent fingerprint sessions. A higher limit will result in significant CPU usage during fingerprinting. Select 0 for no limit." class="tooltip text-secondary far fa-circle"></i></label>
													<div class="col-md-2">
														<select name="fingerprint_max" id="fingerprint_max" class="form-control" data-toggle="select2">
															' ?0                  	;0
1398 1105  FE_RESET_R/77             $509=     951:array (
  0 => 0,
  1 => 5,
  2 => 10,
  3 => 25,
  4 => 50,
  5 => 100,
) ?1414               	;0
1399 1105  FE_FETCH_R/78             ?0        $509                 16?9                	;1414	>>1414	<<1413
1400 1106  ECHO/40                   ?0        952:'															<option' ?0                  	;0
1401 1107  FETCH_DIM_R/81            $510=     16?0                 953:'fingerprint_max'	;0
1402 1107  IS_EQUAL/17               #511=     $510                 16?9                	;0
1403 1107  BOOL_NOT/13               #512=     #511                 ?0                  	;0
1404 1107  JMPZ/43                   ?0        #512                 ?1407               	;0	>>1407
1405 1108  NOP/0                     ?0        ?0                   ?0                  	;1
1406 1108  GOTO/253                  ?0        ?1408                ?954                	;0
1407 1110  ECHO/40                   ?0        955:' selected'      ?0                  	;0	<<1404
1408 1112  ECHO/40                   ?0        956:' value="'       ?0                  	;0
1409 1113  ECHO/40                   ?0        16?9                 ?0                  	;0
1410 1114  ECHO/40                   ?0        957:'">'             ?0                  	;0
1411 1115  ECHO/40                   ?0        16?9                 ?0                  	;0
1412 1116  ECHO/40                   ?0        958:'</option>
															' ?0                  	;0
1413 1117  JMP/42                    ?0        ?1399                ?0                  	;0	>>1399
1414 1117  FE_FREE/127               ?0        $509                 ?0                  	;0	<<1398
1415 1120  GOTO/253                  ?0        ?1882                ?959                	;0
1416 1122  FETCH_DIM_R/81            $513=     16?0                 960:'disable_hls_allow_restream'	;0
1417 1122  IS_EQUAL/17               #514=     $513                 961:1               	;0
1418 1122  BOOL_NOT/13               #515=     #514                 ?0                  	;0
1419 1122  JMPZ/43                   ?0        #515                 ?1421               	;0	>>1421
1420 1123  GOTO/253                  ?0        ?1422                ?962                	;0
1421 1125  ECHO/40                   ?0        963:' checked '      ?0                  	;0	<<1419
1422 1127  ECHO/40                   ?0        964:'data-plugin="switchery" class="js-switch" data-color="#039cfd"/>
													</div>
                                                </div>
                                                <div class="form-group row mb-4">
													<label class="col-md-4 col-form-label" for="disable_rtmp">Disable RTMP Output <i title="Disable RTMP for all clients and devices." class="tooltip text-secondary far fa-circle"></i></label>
													<div class="col-md-2">
														<input name="disable_rtmp" id="disable_rtmp" type="checkbox"' ?0                  	;0
1423 1128  FETCH_DIM_R/81            $516=     16?0                 965:'disable_rtmp'  	;0
1424 1128  IS_EQUAL/17               #517=     $516                 966:1               	;0
1425 1128  BOOL_NOT/13               #518=     #517                 ?0                  	;0
1426 1128  JMPZ/43                   ?0        #518                 ?1428               	;0	>>1428
1427 1129  GOTO/253                  ?0        ?1004                ?967                	;0
1428 1131  GOTO/253                  ?0        ?1003                ?968                	;0	<<1426
1429 1133  FETCH_DIM_R/81            $519=     16?0                 969:'show_connected_video'	;0
1430 1133  IS_EQUAL/17               #520=     $519                 970:1               	;0
1431 1133  BOOL_NOT/13               #521=     #520                 ?0                  	;0
1432 1133  JMPZ/43                   ?0        #521                 ?1434               	;0	>>1434
1433 1134  GOTO/253                  ?0        ?1435                ?971                	;0
1434 1136  ECHO/40                   ?0        972:' checked '      ?0                  	;0	<<1432
1435 1138  ECHO/40                   ?0        973:'data-plugin="switchery" class="js-switch" data-color="#039cfd"/>
													</div>
													<div class="col-md-6">
														<input type="text" class="form-control" id="connected_video_path" name="connected_video_path" value="' ?0                  	;0
1436 1139  INIT_FCALL_BY_NAME/59     ?0        ?0                   974:'htmlspecialchars'	;1
1437 1139  FETCH_DIM_FUNC_ARG/93     $522=     16?0                 976:'connected_video_path'	;1
1438 1139  SEND_VAR_EX/66            ?80       $522                 ?1                  	;0
1439 1139  DO_FCALL_BY_NAME/131      $523=     ?0                   ?0                  	;0
1440 1139  ECHO/40                   ?0        $523                 ?0                  	;0
1441 1140  GOTO/253                  ?0        ?2052                ?977                	;0
1442 1142  ECHO/40                   ?0        978:' checked '      ?0                  	;0
1443 1144  ECHO/40                   ?0        979:'data-plugin="switchery" class="js-switch" data-color="#039cfd"/>
													</div>
                                                    <label class="col-md-4 col-form-label" for="disallow_2nd_ip_max">Disallow if Connections <= <i title="Maximum amount of connections a line can have before Disallow 2nd IP is disabled. If you set this to 3, any line with 3 or less connections will be disconnected if they connect from a different IP." class="tooltip text-secondary far fa-circle"></i></label>
													<div class="col-md-2">
														<input type="text" class="form-control text-center" id="disallow_2nd_ip_max" name="disallow_2nd_ip_max" value="' ?0                  	;0
1444 1145  INIT_FCALL_BY_NAME/59     ?0        ?0                   980:'intval'        	;1
1445 1145  FETCH_DIM_FUNC_ARG/93     $524=     16?0                 982:'disallow_2nd_ip_max'	;1
1446 1145  SEND_VAR_EX/66            ?80       $524                 ?1                  	;0
1447 1145  DO_FCALL_BY_NAME/131      $525=     ?0                   ?0                  	;0
1448 1145  ECHO/40                   ?0        $525                 ?0                  	;0
1449 1146  ECHO/40                   ?0        983:'">
													</div>
                                                </div>
                                                <h5 class="card-title mb-4">Restream Prevention</h5>
                                                <div class="form-group row mb-4">
                                                    <label class="col-md-4 col-form-label" for="restream_deny_unauthorised">XUI Detect - Deny <i title="Deny connections from non-restreamers who are trying to use XUI.one to restream." class="tooltip text-secondary far fa-circle"></i></label>
													<div class="col-md-2">
														<input name="restream_deny_unauthorised" id="restream_deny_unauthorised" type="checkbox"' ?0                  	;0
1450 1147  GOTO/253                  ?0        ?2031                ?984                	;0
1451 1149  ECHO/40                   ?0        985:'														</select>
													</div>
												</div>
												<div class="form-group row mb-4">
													<label class="col-md-4 col-form-label" for="always_enabled_subtitles">Always Enabled Subtitles <i title="Force subtitles to be enabled at all times." class="tooltip text-secondary far fa-circle"></i></label>
													<div class="col-md-2">
														<input name="always_enabled_subtitles" id="always_enabled_subtitles" type="checkbox"' ?0                  	;0
1452 1150  FETCH_DIM_R/81            $526=     16?0                 986:'always_enabled_subtitles'	;0
1453 1150  IS_EQUAL/17               #527=     $526                 987:1               	;0
1454 1150  BOOL_NOT/13               #528=     #527                 ?0                  	;0
1455 1150  JMPZ/43                   ?0        #528                 ?1457               	;0	>>1457
1456 1151  GOTO/253                  ?0        ?1458                ?988                	;0
1457 1153  ECHO/40                   ?0        989:' checked '      ?0                  	;0	<<1455
1458 1155  ECHO/40                   ?0        990:'data-plugin="switchery" class="js-switch" data-color="#039cfd"/>
													</div>
													<label class="col-md-4 col-form-label" for="enable_connection_problem_indication">Connection Problem Indiciation</label>
													<div class="col-md-2">
														<input name="enable_connection_problem_indication" id="enable_connection_problem_indication" type="checkbox"' ?0                  	;0
1459 1156  GOTO/253                  ?0        ?271                 ?991                	;0
1460 1158  ECHO/40                   ?0        992:'														</select>
													</div>
												</div>
                                            </div>
                                        </div>
                                    </div>
								</div> 
							</div> 
						</div> 
					</div> 
				</div> 
			</div>
		</form>
	</div>
</div>
' ?0                  	;0
1461 1159  GOTO/253                  ?0        ?2085                ?993                	;0
1462 1161  ECHO/40                   ?0        994:' checked '      ?0                  	;0
1463 1163  ECHO/40                   ?0        995:'data-plugin="switchery" class="js-switch" data-color="#039cfd"/>
													</div>
													<label class="col-md-4 col-form-label" for="show_channel_logo_in_preview">Show Preview Channel Logos</label>
													<div class="col-md-2">
														<input name="show_channel_logo_in_preview" id="show_channel_logo_in_preview" type="checkbox"' ?0                  	;0
1464 1164  FETCH_DIM_R/81            $529=     16?0                 996:'show_channel_logo_in_preview'	;0
1465 1164  IS_EQUAL/17               #530=     $529                 997:1               	;0
1466 1164  BOOL_NOT/13               #531=     #530                 ?0                  	;0
1467 1164  JMPZ/43                   ?0        #531                 ?1469               	;0	>>1469
1468 1165  GOTO/253                  ?0        ?347                 ?998                	;0
1469 1167  ECHO/40                   ?0        999:' checked '      ?0                  	;0	<<1467
1470 1168  GOTO/253                  ?0        ?347                 ?1000               	;0
1471 1170  INIT_FCALL_BY_NAME/59     ?0        ?0                   1001:'array_udiff'  	;3
1472 1170  SEND_VAR_EX/66            ?80       16?14                ?1                  	;0
1473 1170  INIT_FCALL_BY_NAME/59     ?0        ?0                   1003:'json_decode'  	;2
1474 1170  FETCH_DIM_FUNC_ARG/93     $532=     16?0                 1005:'allowed_stb_types_for_local_recording'	;1
1475 1170  SEND_VAR_EX/66            ?80       $532                 ?1                  	;0
1476 1170  SEND_VAL_EX/116           ?96       1006:true            ?2                  	;0
1477 1170  DO_FCALL_BY_NAME/131      $533=     ?0                   ?0                  	;0
1478 1170  SEND_VAR_NO_REF_EX/50     ?96       $533                 ?2                  	;0
1479 1170  SEND_VAL_EX/116           ?112      1007:'strcasecmp'    ?3                  	;0
1480 1170  DO_FCALL_BY_NAME/131      $534=     ?0                   ?0                  	;0
1481 1170  FE_RESET_R/77             $535=     $534                 ?1489               	;0
1482 1170  FE_FETCH_R/78             ?0        $535                 16?3                	;1489	>>1489	<<1488
1483 1171  ECHO/40                   ?0        1008:'															<option value="' ?0                  	;0
1484 1172  ECHO/40                   ?0        16?3                 ?0                  	;0
1485 1173  ECHO/40                   ?0        1009:'">'            ?0                  	;0
1486 1174  ECHO/40                   ?0        16?3                 ?0                  	;0
1487 1175  ECHO/40                   ?0        1010:'</option>
															' ?0                  	;0
1488 1176  JMP/42                    ?0        ?1482                ?0                  	;0	>>1482
1489 1176  FE_FREE/127               ?0        $535                 ?0                  	;0	<<1481
1490 1179  ECHO/40                   ?0        1011:'														</select>
													</div>
												</div>
                                                <div class="form-group row mb-4">
													<label class="col-md-4 col-form-label" for="test_download_url">Speedtest URL <i title="URL to a file to download during speedtest on MAG devices." class="tooltip text-secondary far fa-circle"></i></label>
													<div class="col-md-8">
														<input type="text" class="form-control" id="test_download_url" name="test_download_url" value="' ?0                  	;0
1491 1180  INIT_FCALL_BY_NAME/59     ?0        ?0                   1012:'htmlspecialchars'	;1
1492 1180  FETCH_DIM_FUNC_ARG/93     $536=     16?0                 1014:'test_download_url'	;1
1493 1180  SEND_VAR_EX/66            ?80       $536                 ?1                  	;0
1494 1180  DO_FCALL_BY_NAME/131      $537=     ?0                   ?0                  	;0
1495 1180  ECHO/40                   ?0        $537                 ?0                  	;0
1496 1181  ECHO/40                   ?0        1015:'">
													</div>
												</div>
                                                <div class="form-group row mb-4">
													<label class="col-md-4 col-form-label" for="mag_message">Information Message <i title="Message to display when a user selects Information in My Account tab. Text entered should be in HTML format, although newlines will be converted to <br/>." class="tooltip text-secondary far fa-circle"></i></label>
													<div class="col-md-8">
														<textarea rows="6" class="form-control" id="mag_message" name="mag_message">' ?0                  	;0
1497 1182  GOTO/253                  ?0        ?940                 ?1016               	;0
1498 1184  ECHO/40                   ?0        1017:'">
													</div>
													<label class="col-md-4 col-form-label" for="restreamer_prebuffer">Restreamer Prebuffer <i title="How much data in seconds will be sent to the client when connecting to a stream. Larger values will create larger prebuffers." class="tooltip text-secondary far fa-circle"></i></label>
													<div class="col-md-2">
														<input type="text" class="form-control text-center" id="restreamer_prebuffer" name="restreamer_prebuffer" value="' ?0                  	;0
1499 1185  INIT_FCALL_BY_NAME/59     ?0        ?0                   1018:'htmlspecialchars'	;1
1500 1185  FETCH_DIM_FUNC_ARG/93     $538=     16?0                 1020:'restreamer_prebuffer'	;1
1501 1185  SEND_VAR_EX/66            ?80       $538                 ?1                  	;0
1502 1185  DO_FCALL_BY_NAME/131      $539=     ?0                   ?0                  	;0
1503 1185  ECHO/40                   ?0        $539                 ?0                  	;0
1504 1186  ECHO/40                   ?0        1021:'">
													</div>
												</div>
												<div class="form-group row mb-4">
													<label class="col-md-4 col-form-label" for="split_by">Load Balancing <i title="Preferred method of load balancing connections." class="tooltip text-secondary far fa-circle"></i></label>
													<div class="col-md-2">
														<select name="split_by" id="split_by" class="form-control" data-toggle="select2">
															<option' ?0                  	;0
1505 1187  FETCH_DIM_R/81            $540=     16?0                 1022:'split_by'     	;0
1506 1187  IS_EQUAL/17               #541=     $540                 1023:'conn'         	;0
1507 1187  BOOL_NOT/13               #542=     #541                 ?0                  	;0
1508 1187  JMPZ/43                   ?0        #542                 ?1510               	;0	>>1510
1509 1188  GOTO/253                  ?0        ?958                 ?1024               	;0
1510 1190  ECHO/40                   ?0        1025:' selected'     ?0                  	;0	<<1508
1511 1191  GOTO/253                  ?0        ?958                 ?1026               	;0
1512 1194  ECHO/40                   ?0        1027:'data-plugin="switchery" class="js-switch" data-color="#039cfd"/>
													</div>
													<label class="col-md-4 col-form-label" for="api_redirect">API Redirect <i title="Redirect API stream requests using AES encrypted tokens instead of defaulting the app to user / pass requests. This will be more widely used in the future and can remain disabled for now." class="tooltip text-secondary far fa-circle"></i></label>
													<div class="col-md-2">
														<input name="api_redirect" id="api_redirect" type="checkbox"' ?0                  	;0
1513 1195  FETCH_DIM_R/81            $543=     16?0                 1028:'api_redirect' 	;0
1514 1195  IS_EQUAL/17               #544=     $543                 1029:1              	;0
1515 1195  BOOL_NOT/13               #545=     #544                 ?0                  	;0
1516 1195  JMPZ/43                   ?0        #545                 ?1518               	;0	>>1518
1517 1196  GOTO/253                  ?0        ?1519                ?1030               	;0
1518 1198  ECHO/40                   ?0        1031:' checked '     ?0                  	;0	<<1516
1519 1200  GOTO/253                  ?0        ?1733                ?1032               	;0
1520 1202  ECHO/40                   ?0        1033:'data-plugin="switchery" class="js-switch" data-color="#039cfd"/>
													</div>
													<label class="col-md-4 col-form-label" for="player_allow_bouquet">Allow Bouquet Ordering <i title="Allow clients to reorder their bouquets from the web player." class="tooltip text-secondary far fa-circle"></i></label>
													<div class="col-md-2">
														<input name="player_allow_bouquet" id="player_allow_bouquet" type="checkbox"' ?0                  	;0
1521 1203  FETCH_DIM_R/81            $546=     16?0                 1034:'player_allow_bouquet'	;0
1522 1203  IS_EQUAL/17               #547=     $546                 1035:1              	;0
1523 1203  BOOL_NOT/13               #548=     #547                 ?0                  	;0
1524 1203  JMPZ/43                   ?0        #548                 ?1526               	;0	>>1526
1525 1204  GOTO/253                  ?0        ?1527                ?1036               	;0
1526 1206  ECHO/40                   ?0        1037:' checked '     ?0                  	;0	<<1524
1527 1208  ECHO/40                   ?0        1038:'data-plugin="switchery" class="js-switch" data-color="#039cfd"/>
													</div>
												</div>
                                                <div class="form-group row mb-4">
													<label class="col-md-4 col-form-label" for="player_hide_incompatible">Hide Incompatible Streams <i title="Hide streams that aren\'t compatible with most browsers, this will limit streams to H264 and AV1 mostly. This option will also hide streams and movies that aren\'t available." class="tooltip text-secondary far fa-circle"></i></label>
													<div class="col-md-2">
														<input name="player_hide_incompatible" id="player_hide_incompatible" type="checkbox"' ?0                  	;0
1528 1209  GOTO/253                  ?0        ?751                 ?1039               	;0
1529 1211  INIT_FCALL_BY_NAME/59     ?0        ?0                   1040:'htmlspecialchars'	;1
1530 1211  FETCH_DIM_FUNC_ARG/93     $549=     16?7                 1042:'proxy'        	;1
1531 1211  FETCH_DIM_FUNC_ARG/93     $550=     $549                 1043:'argument_default_value'	;1
1532 1211  SEND_VAR_EX/66            ?80       $550                 ?1                  	;0
1533 1211  DO_FCALL_BY_NAME/131      $551=     ?0                   ?0                  	;0
1534 1211  ECHO/40                   ?0        $551                 ?0                  	;0
1535 1212  ECHO/40                   ?0        1044:'">
													</div>
												</div>
												<div class="form-group row mb-4">
													<label class="col-md-3 col-form-label" for="cookie">Cookie <i title="Format: key=value;" class="tooltip text-secondary far fa-circle"></i></label>
													<div class="col-md-9">
														<input type="text" class="form-control" id="cookie" name="cookie" value="' ?0                  	;0
1536 1213  INIT_FCALL_BY_NAME/59     ?0        ?0                   1045:'htmlspecialchars'	;1
1537 1213  FETCH_DIM_FUNC_ARG/93     $552=     16?7                 1047:'cookie'       	;1
1538 1213  FETCH_DIM_FUNC_ARG/93     $553=     $552                 1048:'argument_default_value'	;1
1539 1213  SEND_VAR_EX/66            ?80       $553                 ?1                  	;0
1540 1213  DO_FCALL_BY_NAME/131      $554=     ?0                   ?0                  	;0
1541 1213  ECHO/40                   ?0        $554                 ?0                  	;0
1542 1214  ECHO/40                   ?0        1049:'">
													</div>
												</div>
												<div class="form-group row mb-4">
													<label class="col-md-3 col-form-label" for="headers">Headers <i title="FFmpeg -headers command." class="tooltip text-secondary far fa-circle"></i></label>
													<div class="col-md-9">
														<input type="text" class="form-control" id="headers" name="headers" value="' ?0                  	;0
1543 1215  INIT_FCALL_BY_NAME/59     ?0        ?0                   1050:'htmlspecialchars'	;1
1544 1215  FETCH_DIM_FUNC_ARG/93     $555=     16?7                 1052:'headers'      	;1
1545 1215  FETCH_DIM_FUNC_ARG/93     $556=     $555                 1053:'argument_default_value'	;1
1546 1215  SEND_VAR_EX/66            ?80       $556                 ?1                  	;0
1547 1215  DO_FCALL_BY_NAME/131      $557=     ?0                   ?0                  	;0
1548 1215  ECHO/40                   ?0        $557                 ?0                  	;0
1549 1216  GOTO/253                  ?0        ?1012                ?1054               	;0
1550 1219  ECHO/40                   ?0        1055:'data-plugin="switchery" class="js-switch" data-color="#039cfd"/>
													</div>
												</div>
												<div class="form-group row mb-4">
                                                    <label class="col-md-4 col-form-label" for="dts_legacy_ffmpeg">DTS - Use FFMPEG v4.0 <i title="Automatically switch to legacy FFMPEG v4.0 for streams with DTS audio, in some cases this has been known to fix desynchronised audio. Generate PTS needs to be turned off for this to function." class="tooltip text-secondary far fa-circle"></i></label>
													<div class="col-md-2">
														<input name="dts_legacy_ffmpeg" id="dts_legacy_ffmpeg" type="checkbox"' ?0                  	;0
1551 1220  FETCH_DIM_R/81            $558=     16?0                 1056:'dts_legacy_ffmpeg'	;0
1552 1220  IS_EQUAL/17               #559=     $558                 1057:1              	;0
1553 1220  BOOL_NOT/13               #560=     #559                 ?0                  	;0
1554 1220  JMPZ/43                   ?0        #560                 ?1556               	;0	>>1556
1555 1221  GOTO/253                  ?0        ?1557                ?1058               	;0
1556 1223  ECHO/40                   ?0        1059:' checked '     ?0                  	;0	<<1554
1557 1225  GOTO/253                  ?0        ?196                 ?1060               	;0
1558 1227  INIT_FCALL_BY_NAME/59     ?0        ?0                   1061:'array_udiff'  	;3
1559 1227  SEND_VAR_EX/66            ?80       16?14                ?1                  	;0
1560 1227  INIT_FCALL_BY_NAME/59     ?0        ?0                   1063:'json_decode'  	;2
1561 1227  FETCH_DIM_FUNC_ARG/93     $561=     16?0                 1065:'allowed_stb_types'	;1
1562 1227  SEND_VAR_EX/66            ?80       $561                 ?1                  	;0
1563 1227  SEND_VAL_EX/116           ?96       1066:true            ?2                  	;0
1564 1227  DO_FCALL_BY_NAME/131      $562=     ?0                   ?0                  	;0
1565 1227  SEND_VAR_NO_REF_EX/50     ?96       $562                 ?2                  	;0
1566 1227  SEND_VAL_EX/116           ?112      1067:'strcasecmp'    ?3                  	;0
1567 1227  DO_FCALL_BY_NAME/131      $563=     ?0                   ?0                  	;0
1568 1227  FE_RESET_R/77             $564=     $563                 ?1576               	;0
1569 1227  FE_FETCH_R/78             ?0        $564                 16?3                	;1576	>>1576	<<1575
1570 1228  ECHO/40                   ?0        1068:'															<option value="' ?0                  	;0
1571 1229  ECHO/40                   ?0        16?3                 ?0                  	;0
1572 1230  ECHO/40                   ?0        1069:'">'            ?0                  	;0
1573 1231  ECHO/40                   ?0        16?3                 ?0                  	;0
1574 1232  ECHO/40                   ?0        1070:'</option>
															' ?0                  	;0
1575 1233  JMP/42                    ?0        ?1569                ?0                  	;0	>>1569
1576 1233  FE_FREE/127               ?0        $564                 ?0                  	;0	<<1568
1577 1236  ECHO/40                   ?0        1071:'														</select>
													</div>
												</div>
												<div class="form-group row mb-4">
													<label class="col-md-4 col-form-label" for="allowed_stb_types_for_local_recording">Allowed STB Recording</label>
													<div class="col-md-8">
														<select name="allowed_stb_types_for_local_recording[]" id="allowed_stb_types_for_local_recording" class="form-control select2-multiple" data-toggle="select2" multiple="multiple" data-placeholder="Choose...">
                                                            ' ?0                  	;0
1578 1237  INIT_FCALL_BY_NAME/59     ?0        ?0                   1072:'json_decode'  	;2
1579 1237  FETCH_DIM_FUNC_ARG/93     $565=     16?0                 1074:'allowed_stb_types_for_local_recording'	;1
1580 1237  SEND_VAR_EX/66            ?80       $565                 ?1                  	;0
1581 1237  SEND_VAL_EX/116           ?96       1075:true            ?2                  	;0
1582 1237  DO_FCALL_BY_NAME/131      $566=     ?0                   ?0                  	;0
1583 1237  FE_RESET_R/77             $567=     $566                 ?1591               	;0
1584 1237  FE_FETCH_R/78             ?0        $567                 16?3                	;1591	>>1591	<<1590
1585 1238  ECHO/40                   ?0        1076:'                                                            <option selected value="' ?0                  	;0
1586 1239  ECHO/40                   ?0        16?3                 ?0                  	;0
1587 1240  ECHO/40                   ?0        1077:'">'            ?0                  	;0
1588 1241  ECHO/40                   ?0        16?3                 ?0                  	;0
1589 1242  ECHO/40                   ?0        1078:'</option>
                                                            ' ?0                  	;0
1590 1243  JMP/42                    ?0        ?1584                ?0                  	;0	>>1584
1591 1243  FE_FREE/127               ?0        $567                 ?0                  	;0	<<1583
1592 1246  GOTO/253                  ?0        ?1471                ?1079               	;0
1593 1248  ECHO/40                   ?0        1080:'					<div class="alert alert-success alert-dismissible fade show" role="alert">
						<button type="button" class="close" data-dismiss="alert" aria-label="Close">
							<span aria-hidden="true">&times;</span>
						</button>
						Settings have been updated.
					</div>
                    ' ?0                  	;0
1594 1250  ECHO/40                   ?0        1081:'					<div class="card bg-info text-white cta-box">
						' ?0                  	;0
1595 1251  INIT_FCALL_BY_NAME/59     ?0        ?0                   1082:'is_array'     	;1
1596 1251  SEND_VAR_EX/66            ?80       16?4                 ?1                  	;0
1597 1251  DO_FCALL_BY_NAME/131      $568=     ?0                   ?0                  	;0
1598 1251  JMPZ_EX/46                #569=     $568                 ?1601               	;0	>>1601
1599 1251  FETCH_DIM_R/81            $570=     16?4                 1084:'version'      	;0
1600 1251  BOOL/52                   #569=     $570                 ?0                  	;0
1601 1251  JMPZ_EX/46                #569=     #569                 ?1630               	;0	>>1630	<<1598
1602 1251  INIT_FCALL_BY_NAME/59     ?0        ?0                   1085:'version_compare'	;2
1603 1251  FETCH_DIM_FUNC_ARG/93     $571=     16?4                 1087:'version'      	;1
1604 1251  SEND_VAR_EX/66            ?80       $571                 ?1                  	;0
1605 1251  FETCH_CONSTANT/99         #572=     ?0                   1088:'XUI_VERSION'  	;16
1606 1251  SEND_VAL_EX/116           ?96       #572                 ?2                  	;0
1607 1251  DO_FCALL_BY_NAME/131      $573=     ?0                   ?0                  	;0
1608 1251  IS_SMALLER/19             #574=     1091:0               $573                	;0
1609 1251  JMPNZ_EX/47               #574=     #574                 ?1629               	;0	>>1629
1610 1251  INIT_FCALL_BY_NAME/59     ?0        ?0                   1092:'version_compare'	;2
1611 1251  FETCH_DIM_FUNC_ARG/93     $575=     16?4                 1094:'version'      	;1
1612 1251  SEND_VAR_EX/66            ?80       $575                 ?1                  	;0
1613 1251  FETCH_CONSTANT/99         #576=     ?0                   1095:'XUI_VERSION'  	;16
1614 1251  SEND_VAL_EX/116           ?96       #576                 ?2                  	;0
1615 1251  DO_FCALL_BY_NAME/131      $577=     ?0                   ?0                  	;0
1616 1251  IS_EQUAL/17               #578=     $577                 1098:0              	;0
1617 1251  JMPZ_EX/46                #578=     #578                 ?1628               	;0	>>1628
1618 1251  INIT_FCALL_BY_NAME/59     ?0        ?0                   1099:'intval'       	;1
1619 1251  FETCH_DIM_FUNC_ARG/93     $579=     16?4                 1101:'revision'     	;1
1620 1251  SEND_VAR_EX/66            ?80       $579                 ?1                  	;0
1621 1251  DO_FCALL_BY_NAME/131      $580=     ?0                   ?0                  	;0
1622 1251  INIT_FCALL_BY_NAME/59     ?0        ?0                   1102:'intval'       	;1
1623 1251  FETCH_CONSTANT/99         #581=     ?0                   1104:'XUI_REVISION' 	;16
1624 1251  SEND_VAL_EX/116           ?80       #581                 ?1                  	;0
1625 1251  DO_FCALL_BY_NAME/131      $582=     ?0                   ?0                  	;0
1626 1251  IS_SMALLER/19             #583=     $582                 $580                	;0
1627 1251  BOOL/52                   #578=     #583                 ?0                  	;0
1628 1251  BOOL/52                   #574=     #578                 ?0                  	;0	<<1617
1629 1251  BOOL/52                   #569=     #574                 ?0                  	;0	<<1609
1630 1251  BOOL_NOT/13               #584=     #569                 ?0                  	;0	<<1601
1631 1251  JMPZ/43                   ?0        #584                 ?1633               	;0	>>1633
1632 1252  GOTO/253                  ?0        ?206                 ?1107               	;0
1633 1254  ECHO/40                   ?0        1108:'						<div class="card-body" style="max-height: 250px;">
							<h5 class="card-title text-white">Update Available</h5>
							<p>' ?0                  	;0	<<1631
1634 1255  GOTO/253                  ?0        ?966                 ?1109               	;0
1635 1258  ECHO/40                   ?0        1110:'data-plugin="switchery" class="js-switch" data-color="#039cfd"/>
													</div>
                                                    <label class="col-md-4 col-form-label" for="block_proxies">Block Proxies / VPN\'s <i title="Automatically block proxies and VPN\'s based on their ASN. This won\'t affect allowed restreamers." class="tooltip text-secondary far fa-circle"></i></label>
													<div class="col-md-2">
														<input name="block_proxies" id="block_proxies" type="checkbox"' ?0                  	;0
1636 1259  FETCH_DIM_R/81            $585=     16?0                 1111:'block_proxies'	;0
1637 1259  IS_EQUAL/17               #586=     $585                 1112:1              	;0
1638 1259  BOOL_NOT/13               #587=     #586                 ?0                  	;0
1639 1259  JMPZ/43                   ?0        #587                 ?1641               	;0	>>1641
1640 1260  GOTO/253                  ?0        ?1642                ?1113               	;0
1641 1262  ECHO/40                   ?0        1114:' checked '     ?0                  	;0	<<1639
1642 1264  GOTO/253                  ?0        ?1264                ?1115               	;0
1643 1266  FETCH_DIM_R/81            $588=     16?0                 1116:'save_login_logs'	;0
1644 1266  IS_EQUAL/17               #589=     $588                 1117:1              	;0
1645 1266  BOOL_NOT/13               #590=     #589                 ?0                  	;0
1646 1266  JMPZ/43                   ?0        #590                 ?1648               	;0	>>1648
1647 1267  GOTO/253                  ?0        ?1649                ?1118               	;0
1648 1269  ECHO/40                   ?0        1119:' checked '     ?0                  	;0	<<1646
1649 1271  ECHO/40                   ?0        1120:'data-plugin="switchery" class="js-switch" data-color="#039cfd"/>
													</div>
                                                    <label class="col-md-3 col-form-label" for="keep_login">Keep Logs For</label>
													<div class="col-md-3">
														<select name="keep_login" id="keep_login" class="form-control" data-toggle="select2">
															' ?0                  	;0
1650 1272  FE_RESET_R/77             $591=     1121:array (
  0 => 'Forever',
  3600 => '1 Hour',
  21600 => '6 Hours',
  43200 => '12 Hours',
  86400 => '1 Day',
  259200 => '3 Days',
  604800 => '7 Days',
  1209600 => '14 Days',
  16934400 => '28 Days',
  15552000 => '180 Days',
  31536000 => '365 Days',
) ?1667               	;0
1651 1272  FE_FETCH_R/78             #592=     $591                 16?1                	;1667	>>1667	<<1666
1652 1272  ASSIGN/38                 ?575      16?2                 #592                	;0
1653 1273  ECHO/40                   ?0        1122:'															<option ' ?0                  	;0
1654 1274  FETCH_DIM_R/81            $594=     16?0                 1123:'keep_login'   	;0
1655 1274  IS_EQUAL/17               #595=     $594                 16?2                	;0
1656 1274  BOOL_NOT/13               #596=     #595                 ?0                  	;0
1657 1274  JMPZ/43                   ?0        #596                 ?1660               	;0	>>1660
1658 1275  NOP/0                     ?0        ?0                   ?0                  	;1
1659 1275  GOTO/253                  ?0        ?1661                ?1124               	;0
1660 1277  ECHO/40                   ?0        1125:'selected '     ?0                  	;0	<<1657
1661 1279  ECHO/40                   ?0        1126:'value="'       ?0                  	;0
1662 1280  ECHO/40                   ?0        16?2                 ?0                  	;0
1663 1281  ECHO/40                   ?0        1127:'">'            ?0                  	;0
1664 1282  ECHO/40                   ?0        16?1                 ?0                  	;0
1665 1283  ECHO/40                   ?0        1128:'</option>
															' ?0                  	;0
1666 1284  JMP/42                    ?0        ?1651                ?0                  	;0	>>1651
1667 1284  FE_FREE/127               ?0        $591                 ?0                  	;0	<<1650
1668 1286  GOTO/253                  ?0        ?1082                ?1129               	;0
1669 1288  FE_RESET_R/77             $597=     16?15                ?1686               	;0
1670 1288  FE_FETCH_R/78             #598=     $597                 16?1                	;1686	>>1686	<<1685
1671 1288  ASSIGN/38                 ?581      16?2                 #598                	;0
1672 1289  ECHO/40                   ?0        1130:'															<option ' ?0                  	;0
1673 1290  FETCH_DIM_R/81            $600=     16?0                 1131:'default_timezone'	;0
1674 1290  IS_EQUAL/17               #601=     $600                 16?2                	;0
1675 1290  BOOL_NOT/13               #602=     #601                 ?0                  	;0
1676 1290  JMPZ/43                   ?0        #602                 ?1679               	;0	>>1679
1677 1291  NOP/0                     ?0        ?0                   ?0                  	;1
1678 1291  GOTO/253                  ?0        ?1680                ?1132               	;0
1679 1293  ECHO/40                   ?0        1133:'selected '     ?0                  	;0	<<1676
1680 1295  ECHO/40                   ?0        1134:'value="'       ?0                  	;0
1681 1296  ECHO/40                   ?0        16?2                 ?0                  	;0
1682 1297  ECHO/40                   ?0        1135:'">'            ?0                  	;0
1683 1298  ECHO/40                   ?0        16?1                 ?0                  	;0
1684 1299  ECHO/40                   ?0        1136:'</option>
															' ?0                  	;0
1685 1300  JMP/42                    ?0        ?1670                ?0                  	;0	>>1670
1686 1300  FE_FREE/127               ?0        $597                 ?0                  	;0	<<1669
1687 1303  ECHO/40                   ?0        1137:'														</select>
													</div>
												</div>
                                                <!-- <div class="form-group row mb-4">
													<label class="col-md-4 col-form-label" for="language">Interface Language <i title="Default language for the Admin & Reseller Interface, this will be the default for all users unless they change their profile language." class="tooltip text-secondary far fa-circle"></i></label>
													<div class="col-md-8">
														 <select name="language" id="language" class="form-control" data-toggle="select2">
															' ?0                  	;0
1688 1304  INIT_FCALL_BY_NAME/59     ?0        ?0                   1138:'A214aEd1599664ca'	;0
1689 1304  DO_FCALL_BY_NAME/131      $603=     ?0                   ?0                  	;0
1690 1304  FE_RESET_R/77             $604=     $603                 ?1709               	;0
1691 1304  FE_FETCH_R/78             ?0        $604                 16?12               	;1709	>>1709	<<1708
1692 1305  ECHO/40                   ?0        1140:'															<option' ?0                  	;0
1693 1306  FETCH_DIM_R/81            $605=     16?0                 1141:'language'     	;0
1694 1306  FETCH_DIM_R/81            $606=     16?12                1142:'key'          	;0
1695 1306  IS_EQUAL/17               #607=     $605                 $606                	;0
1696 1306  BOOL_NOT/13               #608=     #607                 ?0                  	;0
1697 1306  JMPZ/43                   ?0        #608                 ?1700               	;0	>>1700
1698 1307  NOP/0                     ?0        ?0                   ?0                  	;1
1699 1307  GOTO/253                  ?0        ?1701                ?1143               	;0
1700 1309  ECHO/40                   ?0        1144:' selected'     ?0                  	;0	<<1697
1701 1311  ECHO/40                   ?0        1145:' value="'      ?0                  	;0
1702 1312  FETCH_DIM_R/81            $609=     16?12                1146:'key'          	;0
1703 1312  ECHO/40                   ?0        $609                 ?0                  	;0
1704 1313  ECHO/40                   ?0        1147:'">'            ?0                  	;0
1705 1314  FETCH_DIM_R/81            $610=     16?12                1148:'language'     	;0
1706 1314  ECHO/40                   ?0        $610                 ?0                  	;0
1707 1315  ECHO/40                   ?0        1149:'</option>
															' ?0                  	;0
1708 1316  JMP/42                    ?0        ?1691                ?0                  	;0	>>1691
1709 1316  FE_FREE/127               ?0        $604                 ?0                  	;0	<<1690
1710 1319  GOTO/253                  ?0        ?390                 ?1150               	;0
1711 1321  FETCH_DIM_R/81            $611=     16?0                 1151:'rtmp_random'  	;0
1712 1321  IS_EQUAL/17               #612=     $611                 1152:1              	;0
1713 1321  BOOL_NOT/13               #613=     #612                 ?0                  	;0
1714 1321  JMPZ/43                   ?0        #613                 ?1716               	;0	>>1716
1715 1322  GOTO/253                  ?0        ?1717                ?1153               	;0
1716 1324  ECHO/40                   ?0        1154:' checked '     ?0                  	;0	<<1714
1717 1326  ECHO/40                   ?0        1155:'data-plugin="switchery" class="js-switch" data-color="#039cfd"/>
													</div>
                                                </div>
                                                <div class="form-group row mb-4">
                                                    <label class="col-md-4 col-form-label" for="disallow_2nd_ip_con">Disallow 2nd IP <i title="Disallow connection from different IP when a connection is in use." class="tooltip text-secondary far fa-circle"></i></label>
													<div class="col-md-2">
														<input name="disallow_2nd_ip_con" id="disallow_2nd_ip_con" type="checkbox"' ?0                  	;0
1718 1327  FETCH_DIM_R/81            $614=     16?0                 1156:'disallow_2nd_ip_con'	;0
1719 1327  IS_EQUAL/17               #615=     $614                 1157:1              	;0
1720 1327  BOOL_NOT/13               #616=     #615                 ?0                  	;0
1721 1327  JMPZ/43                   ?0        #616                 ?1723               	;0	>>1723
1722 1328  GOTO/253                  ?0        ?1443                ?1158               	;0
1723 1330  GOTO/253                  ?0        ?1442                ?1159               	;0	<<1721
1724 1332  ECHO/40                   ?0        1160:'data-plugin="switchery" class="js-switch" data-color="#039cfd"/>
													</div>
													<label class="col-md-4 col-form-label" for="county_override_1st">Override Country with First <i title="Override country with first connected." class="tooltip text-secondary far fa-circle"></i></label>
													<div class="col-md-2">
														<input name="county_override_1st" id="county_override_1st" type="checkbox"' ?0                  	;0
1725 1333  FETCH_DIM_R/81            $617=     16?0                 1161:'county_override_1st'	;0
1726 1333  IS_EQUAL/17               #618=     $617                 1162:1              	;0
1727 1333  BOOL_NOT/13               #619=     #618                 ?0                  	;0
1728 1333  JMPZ/43                   ?0        #619                 ?1730               	;0	>>1730
1729 1334  GOTO/253                  ?0        ?1731                ?1163               	;0
1730 1336  ECHO/40                   ?0        1164:' checked '     ?0                  	;0	<<1728
1731 1338  ECHO/40                   ?0        1165:'data-plugin="switchery" class="js-switch" data-color="#039cfd"/>
													</div>
												</div>
                                                <div class="form-group row mb-4">
                                                    <label class="col-md-4 col-form-label" for="encrypt_hls">Encrypt HLS Segments <i title="Encrypt all HLS streams with AES-256 while they are being watched. This will increase CPU usage but is more secure and packets cannot be analysed." class="tooltip text-secondary far fa-circle"></i></label>
													<div class="col-md-2">
														<input name="encrypt_hls" id="encrypt_hls" type="checkbox"' ?0                  	;0
1732 1339  GOTO/253                  ?0        ?1090                ?1166               	;0
1733 1341  ECHO/40                   ?0        1167:'data-plugin="switchery" class="js-switch" data-color="#039cfd"/>
													</div>
												</div>
                                                <div class="form-group row mb-4">
													<label class="col-md-4 col-form-label" for="movie_year_append">Append Movie Year <i title="Automatically append the movie year when using TMDb or watch folder." class="tooltip text-secondary far fa-circle"></i></label>
													<div class="col-md-2">
														<select name="movie_year_append" id="movie_year_append" class="form-control" data-toggle="select2">
															' ?0                  	;0
1734 1342  FE_RESET_R/77             $620=     1168:array (
  0 => 'Brackets',
  1 => 'Hyphen',
  2 => 'Disabled',
) ?1751               	;0
1735 1342  FE_FETCH_R/78             #621=     $620                 16?2                	;1751	>>1751	<<1750
1736 1342  ASSIGN/38                 ?604      16?13                #621                	;0
1737 1343  ECHO/40                   ?0        1169:'															<option' ?0                  	;0
1738 1344  FETCH_DIM_R/81            $623=     16?0                 1170:'movie_year_append'	;0
1739 1344  IS_EQUAL/17               #624=     $623                 16?13               	;0
1740 1344  BOOL_NOT/13               #625=     #624                 ?0                  	;0
1741 1344  JMPZ/43                   ?0        #625                 ?1744               	;0	>>1744
1742 1345  NOP/0                     ?0        ?0                   ?0                  	;1
1743 1345  GOTO/253                  ?0        ?1745                ?1171               	;0
1744 1347  ECHO/40                   ?0        1172:' selected'     ?0                  	;0	<<1741
1745 1349  ECHO/40                   ?0        1173:' value="'      ?0                  	;0
1746 1350  ECHO/40                   ?0        16?13                ?0                  	;0
1747 1351  ECHO/40                   ?0        1174:'">'            ?0                  	;0
1748 1352  ECHO/40                   ?0        16?2                 ?0                  	;0
1749 1353  ECHO/40                   ?0        1175:'</option>
															' ?0                  	;0
1750 1354  JMP/42                    ?0        ?1735                ?0                  	;0	>>1735
1751 1354  FE_FREE/127               ?0        $620                 ?0                  	;0	<<1734
1752 1357  ECHO/40                   ?0        1176:'														</select>
													</div>
                                                    <label class="col-md-4 col-form-label" for="api_container">API Container <i title="Default container to use in Android / Smart TV apps." class="tooltip text-secondary far fa-circle"></i></label>
													<div class="col-md-2">
														<select name="api_container" id="api_container" class="form-control" data-toggle="select2">
															' ?0                  	;0
1753 1358  FE_RESET_R/77             $626=     1177:array (
  'ts' => 'MPEG-TS',
  'm3u8' => 'HLS',
) ?1770               	;0
1754 1358  FE_FETCH_R/78             #627=     $626                 16?2                	;1770	>>1770	<<1769
1755 1358  ASSIGN/38                 ?610      16?13                #627                	;0
1756 1359  ECHO/40                   ?0        1178:'															<option' ?0                  	;0
1757 1360  FETCH_DIM_R/81            $629=     16?0                 1179:'api_container'	;0
1758 1360  IS_EQUAL/17               #630=     $629                 16?13               	;0
1759 1360  BOOL_NOT/13               #631=     #630                 ?0                  	;0
1760 1360  JMPZ/43                   ?0        #631                 ?1763               	;0	>>1763
1761 1361  NOP/0                     ?0        ?0                   ?0                  	;1
1762 1361  GOTO/253                  ?0        ?1764                ?1180               	;0
1763 1363  ECHO/40                   ?0        1181:' selected'     ?0                  	;0	<<1760
1764 1365  ECHO/40                   ?0        1182:' value="'      ?0                  	;0
1765 1366  ECHO/40                   ?0        16?13                ?0                  	;0
1766 1367  ECHO/40                   ?0        1183:'">'            ?0                  	;0
1767 1368  ECHO/40                   ?0        16?2                 ?0                  	;0
1768 1369  ECHO/40                   ?0        1184:'</option>
															' ?0                  	;0
1769 1370  JMP/42                    ?0        ?1754                ?0                  	;0	>>1754
1770 1370  FE_FREE/127               ?0        $626                 ?0                  	;0	<<1753
1771 1372  GOTO/253                  ?0        ?790                 ?1185               	;0
1772 1374  INIT_FCALL_BY_NAME/59     ?0        ?0                   1186:'intval'       	;1
1773 1374  FETCH_DIM_FUNC_ARG/93     $632=     16?0                 1188:'threshold_mem'	;1
1774 1374  SEND_VAR_EX/66            ?80       $632                 ?1                  	;0
1775 1374  DO_FCALL_BY_NAME/131      $633=     ?0                   ?0                  	;0
1776 1374  ECHO/40                   ?0        $633                 ?0                  	;0
1777 1375  ECHO/40                   ?0        1189:'">
													</div>
                                                    <label class="col-md-4 col-form-label" for="threshold_disk">Disk Threshold % <i title="When disk usage is above this percentage it will show as a warning in the service status box." class="tooltip text-secondary far fa-circle"></i></label>
													<div class="col-md-2">
														<input type="text" class="form-control text-center" id="threshold_disk" name="threshold_disk" value="' ?0                  	;0
1778 1376  INIT_FCALL_BY_NAME/59     ?0        ?0                   1190:'intval'       	;1
1779 1376  FETCH_DIM_FUNC_ARG/93     $634=     16?0                 1192:'threshold_disk'	;1
1780 1376  SEND_VAR_EX/66            ?80       $634                 ?1                  	;0
1781 1376  DO_FCALL_BY_NAME/131      $635=     ?0                   ?0                  	;0
1782 1376  ECHO/40                   ?0        $635                 ?0                  	;0
1783 1377  ECHO/40                   ?0        1193:'">
													</div>
                                                </div>
                                                <div class="form-group row mb-4">
                                                    <label class="col-md-4 col-form-label" for="threshold_network">Network Threshold % <i title="When network usage is above this percentage it will show as a warning in the service status box." class="tooltip text-secondary far fa-circle"></i></label>
													<div class="col-md-2">
														<input type="text" class="form-control text-center" id="threshold_network" name="threshold_network" value="' ?0                  	;0
1784 1378  INIT_FCALL_BY_NAME/59     ?0        ?0                   1194:'intval'       	;1
1785 1378  FETCH_DIM_FUNC_ARG/93     $636=     16?0                 1196:'threshold_network'	;1
1786 1378  SEND_VAR_EX/66            ?80       $636                 ?1                  	;0
1787 1378  DO_FCALL_BY_NAME/131      $637=     ?0                   ?0                  	;0
1788 1378  ECHO/40                   ?0        $637                 ?0                  	;0
1789 1379  GOTO/253                  ?0        ?1790                ?1197               	;0
1790 1381  ECHO/40                   ?0        1198:'">
													</div>
                                                    <label class="col-md-4 col-form-label" for="threshold_clients">Clients Threshold % <i title="When number of clients as a percent of max server clients is above this percentage it will show as a warning in the service status box." class="tooltip text-secondary far fa-circle"></i></label>
													<div class="col-md-2">
														<input type="text" class="form-control text-center" id="threshold_clients" name="threshold_clients" value="' ?0                  	;0
1791 1382  INIT_FCALL_BY_NAME/59     ?0        ?0                   1199:'intval'       	;1
1792 1382  FETCH_DIM_FUNC_ARG/93     $638=     16?0                 1201:'threshold_clients'	;1
1793 1382  SEND_VAR_EX/66            ?80       $638                 ?1                  	;0
1794 1382  DO_FCALL_BY_NAME/131      $639=     ?0                   ?0                  	;0
1795 1382  ECHO/40                   ?0        $639                 ?0                  	;0
1796 1383  ECHO/40                   ?0        1202:'">
													</div>
                                                </div>
												<h5 class="card-title mb-4">Search</h5>
                                                <div class="form-group row mb-4">
                                                    <label class="col-md-4 col-form-label" for="enable_search">Enable Search <i title="Toggle the search box in the top right of the header and allow the cache engine to write search queries to the database." class="tooltip text-secondary far fa-circle"></i></label>
													<div class="col-md-2">
														<input name="enable_search" id="enable_search" type="checkbox"' ?0                  	;0
1797 1384  FETCH_DIM_R/81            $640=     16?0                 1203:'enable_search'	;0
1798 1384  IS_EQUAL/17               #641=     $640                 1204:1              	;0
1799 1384  BOOL_NOT/13               #642=     #641                 ?0                  	;0
1800 1384  JMPZ/43                   ?0        #642                 ?1802               	;0	>>1802
1801 1385  GOTO/253                  ?0        ?491                 ?1205               	;0
1802 1387  ECHO/40                   ?0        1206:' checked '     ?0                  	;0	<<1800
1803 1388  GOTO/253                  ?0        ?491                 ?1207               	;0
1804 1391  ECHO/40                   ?0        1208:'data-plugin="switchery" class="js-switch" data-color="#039cfd"/>
													</div>
                                                    <label class="col-md-4 col-form-label" for="encrypt_playlist_restreamer">Encrypt Restreamer Playlists <i title="Encrypt line credentials in restreamer playlist files." class="tooltip text-secondary far fa-circle"></i></label>
													<div class="col-md-2">
														<input name="encrypt_playlist_restreamer" id="encrypt_playlist_restreamer" type="checkbox"' ?0                  	;0
1805 1392  FETCH_DIM_R/81            $643=     16?0                 1209:'encrypt_playlist_restreamer'	;0
1806 1392  IS_EQUAL/17               #644=     $643                 1210:1              	;0
1807 1392  BOOL_NOT/13               #645=     #644                 ?0                  	;0
1808 1392  JMPZ/43                   ?0        #645                 ?1810               	;0	>>1810
1809 1393  GOTO/253                  ?0        ?1811                ?1211               	;0
1810 1395  ECHO/40                   ?0        1212:' checked '     ?0                  	;0	<<1808
1811 1397  GOTO/253                  ?0        ?900                 ?1213               	;0
1812 1399  ECHO/40                   ?0        1214:' checked '     ?0                  	;0
1813 1401  ECHO/40                   ?0        1215:'data-plugin="switchery" class="js-switch" data-color="#039cfd"/>
													</div>
													<div class="col-md-6">
														<input type="text" class="form-control" id="expiring_video_path" name="expiring_video_path" value="' ?0                  	;0
1814 1402  INIT_FCALL_BY_NAME/59     ?0        ?0                   1216:'htmlspecialchars'	;1
1815 1402  FETCH_DIM_FUNC_ARG/93     $646=     16?0                 1218:'expiring_video_path'	;1
1816 1402  SEND_VAR_EX/66            ?80       $646                 ?1                  	;0
1817 1402  DO_FCALL_BY_NAME/131      $647=     ?0                   ?0                  	;0
1818 1402  ECHO/40                   ?0        $647                 ?0                  	;0
1819 1403  ECHO/40                   ?0        1219:'" placeholder="Leave blank to use default XUI video.">
													</div>
												</div>
                                                <div class="form-group row mb-4">
													<label class="col-md-4 col-form-label" for="show_connected_video">2nd IP Connected Video <i title="Show this video when a client connects but gets denied to already watching on another IP." class="tooltip text-secondary far fa-circle"></i></label>
													<div class="col-md-2">
														<input name="show_connected_video" id="show_connected_video" type="checkbox"' ?0                  	;0
1820 1404  GOTO/253                  ?0        ?1429                ?1220               	;0
1821 1406  ECHO/40                   ?0        1221:'														</select>
													</div>
													<label class="col-md-4 col-form-label" for="segment_type">FFMPEG Segment Type <i title="Whether to use -f segment or -f hls when processing streams. -f hls is designed to be used with HLS streaming so should perform better. Using segment will disable delete threshold option. Segment will be used by default for on-demand streams to increase speed." class="tooltip text-secondary far fa-circle"></i></label>
													<div class="col-md-2">
														<select name="segment_type" id="segment_type" class="form-control" data-toggle="select2">
															' ?0                  	;0
1822 1407  FE_RESET_R/77             $648=     1222:array (
  0 => '-f hls',
  1 => '-f segment',
) ?1839               	;0
1823 1407  FE_FETCH_R/78             #649=     $648                 16?1                	;1839	>>1839	<<1838
1824 1407  ASSIGN/38                 ?632      16?2                 #649                	;0
1825 1408  ECHO/40                   ?0        1223:'															<option ' ?0                  	;0
1826 1409  FETCH_DIM_R/81            $651=     16?0                 1224:'segment_type' 	;0
1827 1409  IS_EQUAL/17               #652=     $651                 16?2                	;0
1828 1409  BOOL_NOT/13               #653=     #652                 ?0                  	;0
1829 1409  JMPZ/43                   ?0        #653                 ?1832               	;0	>>1832
1830 1410  NOP/0                     ?0        ?0                   ?0                  	;1
1831 1410  GOTO/253                  ?0        ?1833                ?1225               	;0
1832 1412  ECHO/40                   ?0        1226:'selected '     ?0                  	;0	<<1829
1833 1414  ECHO/40                   ?0        1227:'value="'       ?0                  	;0
1834 1415  ECHO/40                   ?0        16?2                 ?0                  	;0
1835 1416  ECHO/40                   ?0        1228:'">'            ?0                  	;0
1836 1417  ECHO/40                   ?0        16?1                 ?0                  	;0
1837 1418  ECHO/40                   ?0        1229:'</option>
															' ?0                  	;0
1838 1419  JMP/42                    ?0        ?1823                ?0                  	;0	>>1823
1839 1419  FE_FREE/127               ?0        $648                 ?0                  	;0	<<1822
1840 1422  ECHO/40                   ?0        1230:'														</select>
													</div>
												</div>
												<div class="form-group row mb-4">
                                                    <label class="col-md-4 col-form-label" for="ffmpeg_warnings">FFMPEG Show Warnings <i title="Instruct FFMPEG to save warnings to stream errors table. Turning this off will save only errors instead." class="tooltip text-secondary far fa-circle"></i></label>
													<div class="col-md-2">
														<input name="ffmpeg_warnings" id="ffmpeg_warnings" type="checkbox"' ?0                  	;0
1841 1423  FETCH_DIM_R/81            $654=     16?0                 1231:'ffmpeg_warnings'	;0
1842 1423  IS_EQUAL/17               #655=     $654                 1232:1              	;0
1843 1423  BOOL_NOT/13               #656=     #655                 ?0                  	;0
1844 1423  JMPZ/43                   ?0        #656                 ?1846               	;0	>>1846
1845 1424  GOTO/253                  ?0        ?1329                ?1233               	;0
1846 1426  GOTO/253                  ?0        ?1328                ?1234               	;0	<<1844
1847 1428  ECHO/40                   ?0        1235:'data-plugin="switchery" class="js-switch" data-color="#039cfd"/>
													</div>
                                                </div>
                                                <div class="form-group row mb-4">
													<label class="col-md-4 col-form-label" for="parse_type">VOD Parser <i title="Whether to use GuessIt or PTN to parse filenames for Watch Folder etc. GuessIt is far better but uses more resources." class="tooltip text-secondary far fa-circle"></i></label>
													<div class="col-md-2">
														<select name="parse_type" id="parse_type" class="form-control" data-toggle="select2">
															' ?0                  	;0
1848 1429  FE_RESET_R/77             $657=     1236:array (
  'guessit' => 'GuessIt',
  'ptn' => 'PTN',
) ?1865               	;0
1849 1429  FE_FETCH_R/78             #658=     $657                 16?2                	;1865	>>1865	<<1864
1850 1429  ASSIGN/38                 ?641      16?13                #658                	;0
1851 1430  ECHO/40                   ?0        1237:'															<option' ?0                  	;0
1852 1431  FETCH_DIM_R/81            $660=     16?0                 1238:'parse_type'   	;0
1853 1431  IS_EQUAL/17               #661=     $660                 16?13               	;0
1854 1431  BOOL_NOT/13               #662=     #661                 ?0                  	;0
1855 1431  JMPZ/43                   ?0        #662                 ?1858               	;0	>>1858
1856 1432  NOP/0                     ?0        ?0                   ?0                  	;1
1857 1432  GOTO/253                  ?0        ?1859                ?1239               	;0
1858 1434  ECHO/40                   ?0        1240:' selected'     ?0                  	;0	<<1855
1859 1436  ECHO/40                   ?0        1241:' value="'      ?0                  	;0
1860 1437  ECHO/40                   ?0        16?13                ?0                  	;0
1861 1438  ECHO/40                   ?0        1242:'">'            ?0                  	;0
1862 1439  ECHO/40                   ?0        16?2                 ?0                  	;0
1863 1440  ECHO/40                   ?0        1243:'</option>
															' ?0                  	;0
1864 1441  JMP/42                    ?0        ?1849                ?0                  	;0	>>1849
1865 1441  FE_FREE/127               ?0        $657                 ?0                  	;0	<<1848
1866 1444  ECHO/40                   ?0        1244:'														</select>
													</div>
                                                    <label class="col-md-4 col-form-label" for="cloudflare">Enable Cloudflare <i title="Allow Cloudflare IP\'s to connect to your service and relay the true client IP to XUI." class="tooltip text-secondary far fa-circle"></i></label>
													<div class="col-md-2">
														<input name="cloudflare" id="cloudflare" type="checkbox"' ?0                  	;0
1867 1445  FETCH_DIM_R/81            $663=     16?0                 1245:'cloudflare'   	;0
1868 1445  IS_EQUAL/17               #664=     $663                 1246:1              	;0
1869 1445  BOOL_NOT/13               #665=     #664                 ?0                  	;0
1870 1445  JMPZ/43                   ?0        #665                 ?1872               	;0	>>1872
1871 1446  GOTO/253                  ?0        ?1182                ?1247               	;0
1872 1448  GOTO/253                  ?0        ?1181                ?1248               	;0	<<1870
1873 1450  ECHO/40                   ?0        1249:'data-plugin="switchery" class="js-switch" data-color="#039cfd"/>
													</div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane" id="logs">
                                        <div class="row">
											<div class="col-12">
                                                <h5 class="card-title mb-4">Preferences</h5>
                                                <div class="form-group row mb-4">
													<label class="col-md-3 col-form-label" for="save_closed_connection">Activity Logs <i title="Activity logs are saved when an active connection is closed. This is useful information to keep and should be kept for as long as possible, however can build up if you have high throughput." class="tooltip text-secondary far fa-circle"></i></label>
                                                    <div class="col-md-3">
														<input name="save_closed_connection" id="save_closed_connection" type="checkbox"' ?0                  	;0
1874 1451  FETCH_DIM_R/81            $666=     16?0                 1250:'save_closed_connection'	;0
1875 1451  IS_EQUAL/17               #667=     $666                 1251:1              	;0
1876 1451  BOOL_NOT/13               #668=     #667                 ?0                  	;0
1877 1451  JMPZ/43                   ?0        #668                 ?1879               	;0	>>1879
1878 1452  GOTO/253                  ?0        ?1880                ?1252               	;0
1879 1454  ECHO/40                   ?0        1253:' checked '     ?0                  	;0	<<1877
1880 1456  ECHO/40                   ?0        1254:'data-plugin="switchery" class="js-switch" data-color="#039cfd"/>
													</div>
                                                    <label class="col-md-3 col-form-label" for="keep_activity">Keep Logs For</label>
													<div class="col-md-3">
														<select name="keep_activity" id="keep_activity" class="form-control" data-toggle="select2">
															' ?0                  	;0
1881 1457  GOTO/253                  ?0        ?44                  ?1255               	;0
1882 1459  ECHO/40                   ?0        1256:'														</select>
													</div>-->
												</div>
                                                <div class="form-group row mb-4">
													<label class="col-md-4 col-form-label" for="date_format">Date Format <i title="Default date format to use. Please look up PHP date formatting before changing this." class="tooltip text-secondary far fa-circle"></i></label>
													<div class="col-md-2">
														<input type="text" class="form-control text-center" id="date_format" name="date_format" value="' ?0                  	;0
1883 1460  INIT_FCALL_BY_NAME/59     ?0        ?0                   1257:'htmlspecialchars'	;1
1884 1460  FETCH_DIM_FUNC_ARG/93     $669=     16?0                 1259:'date_format'  	;1
1885 1460  SEND_VAR_EX/66            ?80       $669                 ?1                  	;0
1886 1460  DO_FCALL_BY_NAME/131      $670=     ?0                   ?0                  	;0
1887 1460  ECHO/40                   ?0        $670                 ?0                  	;0
1888 1461  ECHO/40                   ?0        1260:'">
													</div>
                                                    <label class="col-md-4 col-form-label" for="datetime_format">Datetime Format <i title="Default datetime format to use. Please look up PHP date formatting before changing this." class="tooltip text-secondary far fa-circle"></i></label>
													<div class="col-md-2">
														<input type="text" class="form-control text-center" id="datetime_format" name="datetime_format" value="' ?0                  	;0
1889 1462  INIT_FCALL_BY_NAME/59     ?0        ?0                   1261:'htmlspecialchars'	;1
1890 1462  FETCH_DIM_FUNC_ARG/93     $671=     16?0                 1263:'datetime_format'	;1
1891 1462  SEND_VAR_EX/66            ?80       $671                 ?1                  	;0
1892 1462  DO_FCALL_BY_NAME/131      $672=     ?0                   ?0                  	;0
1893 1462  ECHO/40                   ?0        $672                 ?0                  	;0
1894 1463  ECHO/40                   ?0        1264:'">
													</div>
												</div>
                                                <div class="form-group row mb-4">
													<label class="col-md-4 col-form-label" for="streams_grouped">Group Streams Table <i title="Toggle to group multiple servers per stream into a single row, this will reduce the amount of rows to display." class="tooltip text-secondary far fa-circle"></i></label>
													<div class="col-md-2">
														<input name="streams_grouped" id="streams_grouped" type="checkbox"' ?0                  	;0
1895 1464  GOTO/253                  ?0        ?674                 ?1265               	;0
1896 1466  ECHO/40                   ?0        1266:' checked '     ?0                  	;0
1897 1468  ECHO/40                   ?0        1267:'data-plugin="switchery" class="js-switch" data-color="#039cfd"/>
													</div>
                                                </div>
                                                <div class="form-group row mb-4">
                                                    <label class="col-md-4 col-form-label" for="force_epg_timezone">Force EPG to UTC Timezone <i title="Ensure all EPG is generated as UTC and times shown in API\'s are UTC. This will change the timezone in player API to UTC also to sync with apps." class="tooltip text-secondary far fa-circle"></i></label>
													<div class="col-md-2">
														<input name="force_epg_timezone" id="force_epg_timezone" type="checkbox"' ?0                  	;0
1898 1469  FETCH_DIM_R/81            $673=     16?0                 1268:'force_epg_timezone'	;0
1899 1469  IS_EQUAL/17               #674=     $673                 1269:1              	;0
1900 1469  BOOL_NOT/13               #675=     #674                 ?0                  	;0
1901 1469  JMPZ/43                   ?0        #675                 ?1903               	;0	>>1903
1902 1470  GOTO/253                  ?0        ?708                 ?1270               	;0
1903 1472  ECHO/40                   ?0        1271:' checked '     ?0                  	;0	<<1901
1904 1473  GOTO/253                  ?0        ?708                 ?1272               	;0
1905 1475  ECHO/40                   ?0        1273:'">
													</div>
                                                </div>
												<div class="form-group row mb-4">
													<label class="col-md-4 col-form-label" for="on_demand_max_probe">Max Probe Time <i title="How many seconds to probe the stream for before cancelling." class="tooltip text-secondary far fa-circle"></i></label>
													<div class="col-md-2">
														<input type="text" class="form-control text-center" id="on_demand_max_probe" name="on_demand_max_probe" value="' ?0                  	;0
1906 1476  INIT_FCALL_BY_NAME/59     ?0        ?0                   1274:'htmlspecialchars'	;1
1907 1476  FETCH_DIM_FUNC_ARG/93     $676=     16?0                 1276:'on_demand_max_probe'	;1
1908 1476  SEND_VAR_EX/66            ?80       $676                 ?1                  	;0
1909 1476  DO_FCALL_BY_NAME/131      $677=     ?0                   ?0                  	;0
1910 1476  ECHO/40                   ?0        $677                 ?0                  	;0
1911 1477  ECHO/40                   ?0        1277:'">
													</div>
													<label class="col-md-4 col-form-label" for="on_demand_scan_keep">Keep Logs For <i title="How many seconds to keep logs for. This will affect your Up and Down statistics in the logs page. Default is 604800, 1 week." class="tooltip text-secondary far fa-circle"></i></label>
													<div class="col-md-2">
														<input type="text" class="form-control text-center" id="on_demand_scan_keep" name="on_demand_scan_keep" value="' ?0                  	;0
1912 1478  INIT_FCALL_BY_NAME/59     ?0        ?0                   1278:'htmlspecialchars'	;1
1913 1478  FETCH_DIM_FUNC_ARG/93     $678=     16?0                 1280:'on_demand_scan_keep'	;1
1914 1478  SEND_VAR_EX/66            ?80       $678                 ?1                  	;0
1915 1478  DO_FCALL_BY_NAME/131      $679=     ?0                   ?0                  	;0
1916 1478  ECHO/40                   ?0        $679                 ?0                  	;0
1917 1479  ECHO/40                   ?0        1281:'">
													</div>
                                                </div>
                                                <h5 class="card-title mb-4">Encoding Queue Settings</h5>
                                                <div class="form-group row mb-4">
                                                    <label class="col-md-4 col-form-label" for="max_encode_movies">Max Movie Encodes <i title="Maximum number of movies to encode at once, per server. If all of your content is symlinked, you can set this to a higher number, otherwise set it to how many encodes your servers can realistically perform at once without overloading." class="tooltip text-secondary far fa-circle"></i></label>
													<div class="col-md-2">
														<input type="text" class="form-control text-center" id="max_encode_movies" name="max_encode_movies" value="' ?0                  	;0
1918 1480  GOTO/253                  ?0        ?1998                ?1282               	;0
1919 1482  INIT_FCALL_BY_NAME/59     ?0        ?0                   1283:'htmlspecialchars'	;1
1920 1482  FETCH_DIM_FUNC_ARG/93     $680=     16?0                 1285:'vod_limit_perc'	;1
1921 1482  SEND_VAR_EX/66            ?80       $680                 ?1                  	;0
1922 1482  DO_FCALL_BY_NAME/131      $681=     ?0                   ?0                  	;0
1923 1482  ECHO/40                   ?0        $681                 ?0                  	;0
1924 1483  ECHO/40                   ?0        1286:'">
													</div>
												</div>
                                                <div class="form-group row mb-4">
													<label class="col-md-4 col-form-label" for="user_auto_kick_hours">Auto-Kick Hours <i title="Automatically kick connections that are online for more than X hours." class="tooltip text-secondary far fa-circle"></i></label>
													<div class="col-md-2">
														<input type="text" class="form-control text-center" id="user_auto_kick_hours" name="user_auto_kick_hours" value="' ?0                  	;0
1925 1484  INIT_FCALL_BY_NAME/59     ?0        ?0                   1287:'htmlspecialchars'	;1
1926 1484  FETCH_DIM_FUNC_ARG/93     $682=     16?0                 1289:'user_auto_kick_hours'	;1
1927 1484  SEND_VAR_EX/66            ?80       $682                 ?1                  	;0
1928 1484  DO_FCALL_BY_NAME/131      $683=     ?0                   ?0                  	;0
1929 1484  ECHO/40                   ?0        $683                 ?0                  	;0
1930 1485  ECHO/40                   ?0        1290:'">
													</div>
                                                    <label class="col-md-4 col-form-label" for="use_mdomain_in_lists">Use Domain Name in API <i title="Use domain name in lists." class="tooltip text-secondary far fa-circle"></i></label>
													<div class="col-md-2">
														<input name="use_mdomain_in_lists" id="use_mdomain_in_lists" type="checkbox"' ?0                  	;0
1931 1486  FETCH_DIM_R/81            $684=     16?0                 1291:'use_mdomain_in_lists'	;0
1932 1486  IS_EQUAL/17               #685=     $684                 1292:1              	;0
1933 1486  BOOL_NOT/13               #686=     #685                 ?0                  	;0
1934 1486  JMPZ/43                   ?0        #686                 ?1936               	;0	>>1936
1935 1487  GOTO/253                  ?0        ?835                 ?1293               	;0
1936 1489  GOTO/253                  ?0        ?834                 ?1294               	;0	<<1934
1937 1491  ECHO/40                   ?0        1295:' checked '     ?0                  	;0
1938 1493  ECHO/40                   ?0        1296:'data-plugin="switchery" class="js-switch" data-color="#039cfd"/>
													</div>
                                                    <label class="col-md-3 col-form-label" for="epg_api_extended">Append Extra Data <i title="Modify the incoming EPG data with extra data such as the name of the event." class="tooltip text-secondary far fa-circle"></i></label>
													<div class="col-md-3">
														<select name="epg_api_extended" id="epg_api_extended" class="form-control" data-toggle="select2">
															' ?0                  	;0
1939 1494  FE_RESET_R/77             $687=     1297:array (
  0 => 'Default Format',
  1 => 'Extended Title',
  2 => 'Extended Description',
) ?1956               	;0
1940 1494  FE_FETCH_R/78             #688=     $687                 16?16               	;1956	>>1956	<<1955
1941 1494  ASSIGN/38                 ?671      16?2                 #688                	;0
1942 1495  ECHO/40                   ?0        1298:'															<option' ?0                  	;0
1943 1496  FETCH_DIM_R/81            $690=     16?0                 1299:'epg_api_extended'	;0
1944 1496  IS_EQUAL/17               #691=     $690                 16?2                	;0
1945 1496  BOOL_NOT/13               #692=     #691                 ?0                  	;0
1946 1496  JMPZ/43                   ?0        #692                 ?1949               	;0	>>1949
1947 1497  NOP/0                     ?0        ?0                   ?0                  	;1
1948 1497  GOTO/253                  ?0        ?1950                ?1300               	;0
1949 1499  ECHO/40                   ?0        1301:' selected'     ?0                  	;0	<<1946
1950 1501  ECHO/40                   ?0        1302:' value="'      ?0                  	;0
1951 1502  ECHO/40                   ?0        16?2                 ?0                  	;0
1952 1503  ECHO/40                   ?0        1303:'">'            ?0                  	;0
1953 1504  ECHO/40                   ?0        16?16                ?0                  	;0
1954 1505  ECHO/40                   ?0        1304:'</option>
															' ?0                  	;0
1955 1506  JMP/42                    ?0        ?1940                ?0                  	;0	>>1940
1956 1506  FE_FREE/127               ?0        $687                 ?0                  	;0	<<1939
1957 1509  GOTO/253                  ?0        ?1                   ?1305               	;0
1958 1511  ECHO/40                   ?0        1306:'data-plugin="switchery" class="js-switch" data-color="#039cfd"/>
													</div>
                                                    <label class="col-md-4 col-form-label" for="mysql_sleep_kill">MySQL Sleep Timeout <i title="How long to allow mysql connections to remain in Sleep before killing them. Set to 0 to disable." class="tooltip text-secondary far fa-circle"></i></label>
													<div class="col-md-2">
														<input type="text" class="form-control text-center" id="mysql_sleep_kill" name="mysql_sleep_kill" value="' ?0                  	;0
1959 1512  INIT_FCALL_BY_NAME/59     ?0        ?0                   1307:'intval'       	;1
1960 1512  FETCH_DIM_FUNC_ARG/93     $693=     16?0                 1309:'mysql_sleep_kill'	;1
1961 1512  SEND_VAR_EX/66            ?80       $693                 ?1                  	;0
1962 1512  DO_FCALL_BY_NAME/131      $694=     ?0                   ?0                  	;0
1963 1512  ECHO/40                   ?0        $694                 ?0                  	;0
1964 1513  ECHO/40                   ?0        1310:'">
													</div>
												</div>
                                                <h5 class="card-title mb-4">Dashboard</h5>
                                                <div class="form-group row mb-4">
                                                    <label class="col-md-4 col-form-label" for="dashboard_stats">Show Graphs <i title="Enable dashboard statistic graphs for System Resources, Network and Connections." class="tooltip text-secondary far fa-circle"></i></label>
													<div class="col-md-2">
														<input name="dashboard_stats" id="dashboard_stats" type="checkbox"' ?0                  	;0
1965 1514  FETCH_DIM_R/81            $695=     16?0                 1311:'dashboard_stats'	;0
1966 1514  IS_EQUAL/17               #696=     $695                 1312:1              	;0
1967 1514  BOOL_NOT/13               #697=     #696                 ?0                  	;0
1968 1514  JMPZ/43                   ?0        #697                 ?1970               	;0	>>1970
1969 1515  GOTO/253                  ?0        ?2044                ?1313               	;0
1970 1517  ECHO/40                   ?0        1314:' checked '     ?0                  	;0	<<1968
1971 1518  GOTO/253                  ?0        ?2044                ?1315               	;0
1972 1520  ECHO/40                   ?0        1316:' checked '     ?0                  	;0
1973 1522  ECHO/40                   ?0        1317:'data-plugin="switchery" class="js-switch" data-color="#039cfd"/>
													</div>
												</div>
                                                <div class="form-group row mb-4">
													<label class="col-md-4 col-form-label" for="vod_bitrate_plus">VOD Bitrate Buffer <i title="Additional buffer when streaming VOD." class="tooltip text-secondary far fa-circle"></i></label>
													<div class="col-md-2">
														<input type="text" class="form-control text-center" id="vod_bitrate_plus" name="vod_bitrate_plus" value="' ?0                  	;0
1974 1523  INIT_FCALL_BY_NAME/59     ?0        ?0                   1318:'htmlspecialchars'	;1
1975 1523  FETCH_DIM_FUNC_ARG/93     $698=     16?0                 1320:'vod_bitrate_plus'	;1
1976 1523  SEND_VAR_EX/66            ?80       $698                 ?1                  	;0
1977 1523  DO_FCALL_BY_NAME/131      $699=     ?0                   ?0                  	;0
1978 1523  ECHO/40                   ?0        $699                 ?0                  	;0
1979 1524  ECHO/40                   ?0        1321:'">
													</div>
													<label class="col-md-4 col-form-label" for="vod_limit_perc">VOD Limit At % <i title="Limit VOD after x% has streamed. Use 0 to limit immediately and 100 to turn off entirely." class="tooltip text-secondary far fa-circle"></i></label>
													<div class="col-md-2">
														<input type="text" class="form-control text-center" id="vod_limit_perc" name="vod_limit_perc" value="' ?0                  	;0
1980 1525  GOTO/253                  ?0        ?1919                ?1322               	;0
1981 1528  ECHO/40                   ?0        1323:'														</select>
													</div>
												</div>
                                                <div class="form-group row mb-4">
                                                    <label class="col-md-4 col-form-label" for="api_probe">Probe via API <i title="Use API calls to probe sources from XUI servers." class="tooltip text-secondary far fa-circle"></i></label>
                                                    <div class="col-md-2">
														<input name="api_probe" id="api_probe" type="checkbox"' ?0                  	;0
1982 1529  FETCH_DIM_R/81            $700=     16?0                 1324:'api_probe'    	;0
1983 1529  IS_EQUAL/17               #701=     $700                 1325:1              	;0
1984 1529  BOOL_NOT/13               #702=     #701                 ?0                  	;0
1985 1529  JMPZ/43                   ?0        #702                 ?1987               	;0	>>1987
1986 1530  GOTO/253                  ?0        ?1988                ?1326               	;0
1987 1532  ECHO/40                   ?0        1327:' checked '     ?0                  	;0	<<1985
1988 1534  GOTO/253                  ?0        ?1287                ?1328               	;0
1989 1536  ECHO/40                   ?0        1329:' checked '     ?0                  	;0
1990 1538  ECHO/40                   ?0        1330:'data-plugin="switchery" class="js-switch" data-color="#039cfd"/>
													</div>
												</div>
                                                <div class="form-group row mb-4">
                                                    <label class="col-md-4 col-form-label" for="show_tickets">Show Tickets Icon <i title="Show tickets icon in the top right of the navigation menu. Turning this off will move Tickets to the Management menu." class="tooltip text-secondary far fa-circle"></i></label>
													<div class="col-md-2">
														<input name="show_tickets" id="show_tickets" type="checkbox"' ?0                  	;0
1991 1539  FETCH_DIM_R/81            $703=     16?0                 1331:'show_tickets' 	;0
1992 1539  IS_EQUAL/17               #704=     $703                 1332:1              	;0
1993 1539  BOOL_NOT/13               #705=     #704                 ?0                  	;0
1994 1539  JMPZ/43                   ?0        #705                 ?1996               	;0	>>1996
1995 1540  GOTO/253                  ?0        ?995                 ?1333               	;0
1996 1542  ECHO/40                   ?0        1334:' checked '     ?0                  	;0	<<1994
1997 1543  GOTO/253                  ?0        ?995                 ?1335               	;0
1998 1545  INIT_FCALL_BY_NAME/59     ?0        ?0                   1336:'htmlspecialchars'	;1
1999 1545  FETCH_DIM_FUNC_ARG/93     $706=     16?0                 1338:'max_encode_movies'	;1
2000 1545  SEND_VAR_EX/66            ?80       $706                 ?1                  	;0
2001 1545  DO_FCALL_BY_NAME/131      $707=     ?0                   ?0                  	;0
2002 1545  ECHO/40                   ?0        $707                 ?0                  	;0
2003 1546  ECHO/40                   ?0        1339:'">
													</div>
                                                    <label class="col-md-4 col-form-label" for="max_encode_cc">Max Channel Encodes <i title="Maximum number of created channels to encode at once, per server. It\'s best to set this to 1 unless you\'re symlinking all created channels." class="tooltip text-secondary far fa-circle"></i></label>
													<div class="col-md-2">
														<input type="text" class="form-control text-center" id="max_encode_cc" name="max_encode_cc" value="' ?0                  	;0
2004 1547  INIT_FCALL_BY_NAME/59     ?0        ?0                   1340:'htmlspecialchars'	;1
2005 1547  FETCH_DIM_FUNC_ARG/93     $708=     16?0                 1342:'max_encode_cc'	;1
2006 1547  SEND_VAR_EX/66            ?80       $708                 ?1                  	;0
2007 1547  DO_FCALL_BY_NAME/131      $709=     ?0                   ?0                  	;0
2008 1547  ECHO/40                   ?0        $709                 ?0                  	;0
2009 1548  ECHO/40                   ?0        1343:'">
													</div>
												</div>
                                                <div class="form-group row mb-4">
                                                    <label class="col-md-4 col-form-label" for="queue_loop">Queue Loop Timer <i title="How long to wait between queue checks. If you\'re symlinking content you should set this to 1 second." class="tooltip text-secondary far fa-circle"></i></label>
													<div class="col-md-2">
														<input type="text" class="form-control text-center" id="queue_loop" name="queue_loop" value="' ?0                  	;0
2010 1549  INIT_FCALL_BY_NAME/59     ?0        ?0                   1344:'htmlspecialchars'	;1
2011 1549  FETCH_DIM_FUNC_ARG/93     $710=     16?0                 1346:'queue_loop'   	;1
2012 1549  SEND_VAR_EX/66            ?80       $710                 ?1                  	;0
2013 1549  DO_FCALL_BY_NAME/131      $711=     ?0                   ?0                  	;0
2014 1549  ECHO/40                   ?0        $711                 ?0                  	;0
2015 1550  GOTO/253                  ?0        ?70                  ?1347               	;0
2016 1552  ECHO/40                   ?0        1348:'">
													</div>
												</div>
												<div class="form-group row mb-4">
													<label class="col-md-4 col-form-label" for="recaptcha_v2_secret_key">reCAPTCHA V2 - Secret Key <i title="Please visit https://google.com/recaptcha/admin to obtain your API keys." class="tooltip text-secondary far fa-circle"></i></label>
													<div class="col-md-8">
														<input type="text" class="form-control" id="recaptcha_v2_secret_key" name="recaptcha_v2_secret_key" value="' ?0                  	;0
2017 1553  INIT_FCALL_BY_NAME/59     ?0        ?0                   1349:'htmlspecialchars'	;1
2018 1553  FETCH_DIM_FUNC_ARG/93     $712=     16?0                 1351:'recaptcha_v2_secret_key'	;1
2019 1553  SEND_VAR_EX/66            ?80       $712                 ?1                  	;0
2020 1553  DO_FCALL_BY_NAME/131      $713=     ?0                   ?0                  	;0
2021 1553  ECHO/40                   ?0        $713                 ?0                  	;0
2022 1554  ECHO/40                   ?0        1352:'">
													</div>
												</div>
                                                <h5 class="card-title mb-4">Default Arguments</h5>
                                                <div class="form-group row mb-4">
													<label class="col-md-3 col-form-label" for="user_agent">User Agent</label>
													<div class="col-md-9">
														<input type="text" class="form-control" id="user_agent" name="user_agent" value="' ?0                  	;0
2023 1555  INIT_FCALL_BY_NAME/59     ?0        ?0                   1353:'htmlspecialchars'	;1
2024 1555  FETCH_DIM_FUNC_ARG/93     $714=     16?7                 1355:'user_agent'   	;1
2025 1555  FETCH_DIM_FUNC_ARG/93     $715=     $714                 1356:'argument_default_value'	;1
2026 1555  SEND_VAR_EX/66            ?80       $715                 ?1                  	;0
2027 1555  DO_FCALL_BY_NAME/131      $716=     ?0                   ?0                  	;0
2028 1555  ECHO/40                   ?0        $716                 ?0                  	;0
2029 1556  ECHO/40                   ?0        1357:'">
													</div>
												</div>
												<div class="form-group row mb-4">
													<label class="col-md-3 col-form-label" for="http_proxy">HTTP Proxy <i title="Format: ip:port" class="tooltip text-secondary far fa-circle"></i></label>
													<div class="col-md-9">
														<input type="text" class="form-control" id="http_proxy" name="http_proxy" value="' ?0                  	;0
2030 1557  GOTO/253                  ?0        ?1529                ?1358               	;0
2031 1559  FETCH_DIM_R/81            $717=     16?0                 1359:'restream_deny_unauthorised'	;0
2032 1559  IS_EQUAL/17               #718=     $717                 1360:1              	;0
2033 1559  BOOL_NOT/13               #719=     #718                 ?0                  	;0
2034 1559  JMPZ/43                   ?0        #719                 ?2036               	;0	>>2036
2035 1560  GOTO/253                  ?0        ?2037                ?1361               	;0
2036 1562  ECHO/40                   ?0        1362:' checked '     ?0                  	;0	<<2034
2037 1564  ECHO/40                   ?0        1363:'data-plugin="switchery" class="js-switch" data-color="#039cfd"/>
													</div>
                                                    <label class="col-md-4 col-form-label" for="detect_restream_block_user">XUI Detect - Ban Lines <i title="Ban lines of non-restreamers who are trying to use XUI.one to restream." class="tooltip text-secondary far fa-circle"></i></label>
													<div class="col-md-2">
														<input name="detect_restream_block_user" id="detect_restream_block_user" type="checkbox"' ?0                  	;0
2038 1565  FETCH_DIM_R/81            $720=     16?0                 1364:'detect_restream_block_user'	;0
2039 1565  IS_EQUAL/17               #721=     $720                 1365:1              	;0
2040 1565  BOOL_NOT/13               #722=     #721                 ?0                  	;0
2041 1565  JMPZ/43                   ?0        #722                 ?2043               	;0	>>2043
2042 1566  GOTO/253                  ?0        ?1066                ?1366               	;0
2043 1568  GOTO/253                  ?0        ?1065                ?1367               	;0	<<2041
2044 1571  ECHO/40                   ?0        1368:'data-plugin="switchery" class="js-switch" data-color="#039cfd"/>
													</div>
                                                    <label class="col-md-4 col-form-label" for="dashboard_map">Show Connections Map <i title="Show connection map on the dashboard." class="tooltip text-secondary far fa-circle"></i></label>
													<div class="col-md-2">
														<input name="dashboard_map" id="dashboard_map" type="checkbox"' ?0                  	;0
2045 1572  FETCH_DIM_R/81            $723=     16?0                 1369:'dashboard_map'	;0
2046 1572  IS_EQUAL/17               #724=     $723                 1370:1              	;0
2047 1572  BOOL_NOT/13               #725=     #724                 ?0                  	;0
2048 1572  JMPZ/43                   ?0        #725                 ?2050               	;0	>>2050
2049 1573  GOTO/253                  ?0        ?2051                ?1371               	;0
2050 1575  ECHO/40                   ?0        1372:' checked '     ?0                  	;0	<<2048
2051 1577  GOTO/253                  ?0        ?244                 ?1373               	;0
2052 1579  ECHO/40                   ?0        1374:'" placeholder="Leave blank to use default XUI video.">
													</div>
												</div>
                                                <h5 class="card-title mb-4">Allowed Countries <i title="Select individual countries to allow. This is a global geo-lock, selet All Countries to allow everyone." class="tooltip text-secondary far fa-circle"></i></h5>
                                                <div class="form-group row mb-4">
                                                    <div class="col-md-12">
                                                        <select name="allow_countries[]" id="allow_countries" class="form-control select2-multiple" data-toggle="select2" multiple="multiple" data-placeholder="Choose...">
															' ?0                  	;0
2053 1580  FE_RESET_R/77             $726=     16?17                ?2077               	;0
2054 1580  FE_FETCH_R/78             #727=     $726                 16?1                	;2077	>>2077	<<2076
2055 1580  ASSIGN/38                 ?710      16?2                 #727                	;0
2056 1581  ECHO/40                   ?0        1375:'															<option ' ?0                  	;0
2057 1582  INIT_FCALL_BY_NAME/59     ?0        ?0                   1376:'in_array'     	;2
2058 1582  SEND_VAR_EX/66            ?80       16?2                 ?1                  	;0
2059 1582  INIT_FCALL_BY_NAME/59     ?0        ?0                   1378:'json_decode'  	;2
2060 1582  FETCH_DIM_FUNC_ARG/93     $729=     16?0                 1380:'allow_countries'	;1
2061 1582  SEND_VAR_EX/66            ?80       $729                 ?1                  	;0
2062 1582  SEND_VAL_EX/116           ?96       1381:true            ?2                  	;0
2063 1582  DO_FCALL_BY_NAME/131      $730=     ?0                   ?0                  	;0
2064 1582  SEND_VAR_NO_REF_EX/50     ?96       $730                 ?2                  	;0
2065 1582  DO_FCALL_BY_NAME/131      $731=     ?0                   ?0                  	;0
2066 1582  BOOL_NOT/13               #732=     $731                 ?0                  	;0
2067 1582  JMPZ/43                   ?0        #732                 ?2070               	;0	>>2070
2068 1583  NOP/0                     ?0        ?0                   ?0                  	;1
2069 1583  GOTO/253                  ?0        ?2071                ?1382               	;0
2070 1585  ECHO/40                   ?0        1383:'selected '     ?0                  	;0	<<2067
2071 1587  ECHO/40                   ?0        1384:'value="'       ?0                  	;0
2072 1588  ECHO/40                   ?0        16?2                 ?0                  	;0
2073 1589  ECHO/40                   ?0        1385:'">'            ?0                  	;0
2074 1590  ECHO/40                   ?0        16?1                 ?0                  	;0
2075 1591  ECHO/40                   ?0        1386:'</option>
															' ?0                  	;0
2076 1592  JMP/42                    ?0        ?2054                ?0                  	;0	>>2054
2077 1592  FE_FREE/127               ?0        $726                 ?0                  	;0	<<2053
2078 1595  ECHO/40                   ?0        1387:'														</select>
													</div>
                                                </div>
											</div>
										</div> 
									</div>
									<div class="tab-pane" id="mag">
										<div class="row">
											<div class="col-12">
                                                <h5 class="card-title mb-4">Preferences</h5>
												<div class="form-group row mb-4">
													<label class="col-md-4 col-form-label" for="show_all_category_mag">Show All Categories <i title="Show All category on MAG devices." class="tooltip text-secondary far fa-circle"></i></label>
													<div class="col-md-2">
														<input name="show_all_category_mag" id="show_all_category_mag" type="checkbox"' ?0                  	;0
2079 1596  FETCH_DIM_R/81            $733=     16?0                 1388:'show_all_category_mag'	;0
2080 1596  IS_EQUAL/17               #734=     $733                 1389:1              	;0
2081 1596  BOOL_NOT/13               #735=     #734                 ?0                  	;0
2082 1596  JMPZ/43                   ?0        #735                 ?2084               	;0	>>2084
2083 1597  GOTO/253                  ?0        ?154                 ?1390               	;0
2084 1599  GOTO/253                  ?0        ?153                 ?1391               	;0	<<2082
2085 1601  INCLUDE_OR_EVAL/73        ?718      1392:'footer.php'    ?0                  	;2
2086 1602  NOP/0                     ?0        1393:1               ?0                  	;4294967295
*/

?>
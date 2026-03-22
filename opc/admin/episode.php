<?php


/*
#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
0   3    JMP/42                    ?0        ?585                 ?0                  	;0	>>585
1   6    ECHO/40                   ?0        1:'" required data-parsley-trigger="change">
													</div>
												</div>
												' ?0                  	;0
2   7    ISSET_ISEMPTY_CV/197      #20=      16?0                 ?0                  	;33554432
3   7    JMPZ/43                   ?0        #20                  ?5                  	;0	>>5
4   8    GOTO/253                  ?0        ?531                 ?2                  	;0
5   10   ASSIGN/38                 ?1        16?1                 3:''                	;0	<<3
6   11   GOTO/253                  ?0        ?538                 ?4                  	;0
7   12   GOTO/253                  ?0        ?531                 ?5                  	;0
8   14   ECHO/40                   ?0        6:'										</select>
									</div>
								</div>
								<div class="form-group row mb-4">
									<label class="col-md-4 col-form-label" for="current_path">' ?0                  	;0
9   15   FETCH_DIM_R/81            $22=      16?2                 7:'current_path'    	;0
10  15   ECHO/40                   ?0        $22                  ?0                  	;0
11  16   ECHO/40                   ?0        8:'</label>
									<div class="col-md-8 input-group">
										<input type="text" id="current_path" name="current_path" class="form-control" value="/">
										<div class="input-group-append">
											<button class="btn btn-primary waves-effect waves-light" type="button" id="changeDir"><i class="mdi mdi-chevron-right"></i></button>
										</div>
									</div>
								</div>
								<div class="form-group row mb-4"' ?0                  	;0
12  17   ISSET_ISEMPTY_CV/197      #23=      16?3                 ?0                  	;33554432
13  17   BOOL_NOT/13               #24=      #23                  ?0                  	;0
14  17   JMPZ/43                   ?0        #24                  ?16                 	;0	>>16
15  18   GOTO/253                  ?0        ?225                 ?9                  	;0
16  20   ECHO/40                   ?0        10:'style=\'display:none;\'' ?0                  	;0	<<14
17  21   GOTO/253                  ?0        ?225                 ?11                 	;0
18  23   ECHO/40                   ?0        12:'data-plugin="switchery" class="js-switch" data-color="#039cfd"/>
													</div>
												</div>
                                                <div class="form-group row mb-4">
                                                    <label class="col-md-4 col-form-label" for="remove_subtitles">' ?0                  	;0
19  24   FETCH_DIM_R/81            $25=      16?2                 13:'remove_existing_subtitles'	;0
20  24   ECHO/40                   ?0        $25                  ?0                  	;0
21  25   ECHO/40                   ?0        14:' <i title="'     ?0                  	;0
22  26   FETCH_DIM_R/81            $26=      16?2                 15:'episode_tooltip_3'	;0
23  26   ECHO/40                   ?0        $26                  ?0                  	;0
24  27   ECHO/40                   ?0        16:'" class="tooltip text-secondary far fa-circle"></i></label>
													<div class="col-md-2">
														<input name="remove_subtitles" id="remove_subtitles" type="checkbox" ' ?0                  	;0
25  28   GOTO/253                  ?0        ?134                 ?17                 	;0
26  30   ISSET_ISEMPTY_CV/197      #27=      16?3                 ?0                  	;33554432
27  30   BOOL_NOT/13               #28=      #27                  ?0                  	;0
28  30   JMPZ/43                   ?0        #28                  ?30                 	;0	>>30
29  31   GOTO/253                  ?0        ?34                  ?18                 	;0
30  33   ECHO/40                   ?0        19:'								<div class="float-right">
									<input id="select_folder" type="button" class="btn btn-info" value="' ?0                  	;0	<<28
31  34   FETCH_DIM_R/81            $29=      16?2                 20:'add_this_directory'	;0
32  34   ECHO/40                   ?0        $29                  ?0                  	;0
33  35   ECHO/40                   ?0        21:'" />
								</div>
								' ?0                  	;0
34  37   GOTO/253                  ?0        ?683                 ?22                 	;0
35  39   ECHO/40                   ?0        23:'</a>
											</li>
											<li class="nextb list-inline-item float-right">
												<a href="javascript: void(0);" class="btn btn-secondary">' ?0                  	;0
36  40   FETCH_DIM_R/81            $30=      16?2                 24:'next'           	;0
37  40   ECHO/40                   ?0        $30                  ?0                  	;0
38  41   ECHO/40                   ?0        25:'</a>
											</li>
										</ul>
									</div>
									<div class="tab-pane" id="load-balancing">
										<div class="row">
											<div class="col-12">
												<div class="form-group row mb-4">
													<label class="col-md-4 col-form-label" for="servers">' ?0                  	;0
39  42   FETCH_DIM_R/81            $31=      16?2                 26:'server_tree'    	;0
40  42   ECHO/40                   ?0        $31                  ?0                  	;0
41  43   ECHO/40                   ?0        27:'</label>
													<div class="col-md-8">
														<div id="server_tree"></div>
													</div>
												</div>
												<div class="form-group row mb-4">
													<label class="col-md-4 col-form-label" for="restart_on_edit">' ?0                  	;0
42  44   GOTO/253                  ?0        ?460                 ?28                 	;0
43  46   JMPZ/43                   ?0        16?3                 ?45                 	;0	>>45
44  47   GOTO/253                  ?0        ?48                  ?29                 	;0
45  49   FETCH_DIM_R/81            $32=      16?2                 30:'add_single'     	;0	<<43
46  49   ECHO/40                   ?0        $32                  ?0                  	;0
47  50   GOTO/253                  ?0        ?307                 ?31                 	;0
48  52   FETCH_DIM_R/81            $33=      16?2                 32:'add_multiple'   	;0
49  52   ECHO/40                   ?0        $33                  ?0                  	;0
50  53   GOTO/253                  ?0        ?307                 ?33                 	;0
51  55   ECHO/40                   ?0        34:' <i title="'     ?0                  	;0
52  56   FETCH_DIM_R/81            $34=      16?2                 35:'episode_tooltip_7'	;0
53  56   ECHO/40                   ?0        $34                  ?0                  	;0
54  57   ECHO/40                   ?0        36:'" class="tooltip text-secondary far fa-circle"></i></label>
													<div class="col-md-8">
														<select name="transcode_profile_id" id="transcode_profile_id" class="form-control" data-toggle="select2">
															<option ' ?0                  	;0
55  58   ISSET_ISEMPTY_CV/197      #35=      16?0                 ?0                  	;33554432
56  58   BOOL_NOT/13               #36=      #35                  ?0                  	;0
57  58   JMPZ/43                   ?0        #36                  ?59                 	;0	>>59
58  59   GOTO/253                  ?0        ?295                 ?37                 	;0
59  61   INIT_FCALL_BY_NAME/59     ?0        ?0                   38:'intval'         	;1	<<57
60  61   FETCH_DIM_FUNC_ARG/93     $37=      16?0                 40:'transcode_profile_id'	;1
61  61   SEND_VAR_EX/66            ?80       $37                  ?1                  	;0
62  61   DO_FCALL_BY_NAME/131      $38=      ?0                   ?0                  	;0
63  61   IS_EQUAL/17               #39=      $38                  41:0                	;0
64  61   BOOL_NOT/13               #40=      #39                  ?0                  	;0
65  61   JMPZ/43                   ?0        #40                  ?67                 	;0	>>67
66  62   GOTO/253                  ?0        ?295                 ?42                 	;0
67  64   GOTO/253                  ?0        ?294                 ?43                 	;0	<<65
68  66   INIT_FCALL_BY_NAME/59     ?0        ?0                   44:'htmlspecialchars'	;1
69  66   FETCH_DIM_FUNC_ARG/93     $41=      16?0                 46:'custom_sid'     	;1
70  66   SEND_VAR_EX/66            ?80       $41                  ?1                  	;0
71  66   DO_FCALL_BY_NAME/131      $42=      ?0                   ?0                  	;0
72  66   ECHO/40                   ?0        $42                  ?0                  	;0
73  68   ECHO/40                   ?0        47:'">
													</div>
												</div>
												' ?0                  	;0
74  70   ASSIGN/38                 ?23       16?4                 48:''               	;0
75  71   GOTO/253                  ?0        ?701                 ?49                 	;0
76  73   ASSIGN/38                 ?24       16?5                 50:'Episode'        	;0
77  74   INCLUDE_OR_EVAL/73        ?25       51:'header.php'      ?0                  	;2
78  75   ECHO/40                   ?0        52:'<div class="wrapper boxed-layout"' ?0                  	;0
79  76   FETCH_IS/89               $46=      53:'_SERVER'         ?0                  	;0
80  76   ISSET_ISEMPTY_DIM_OBJ/115 #47=      $46                  54:'HTTP_X_REQUESTED_WITH'	;16777216
81  76   BOOL_NOT/13               #48=      #47                  ?0                  	;0
82  76   JMPZ_EX/46                #48=      #48                  ?90                 	;0	>>90
83  76   INIT_FCALL_BY_NAME/59     ?0        ?0                   55:'strtolower'     	;1
84  76   FETCH_FUNC_ARG/92         $49=      57:'_SERVER'         ?0                  	;1
85  76   FETCH_DIM_FUNC_ARG/93     $50=      $49                  58:'HTTP_X_REQUESTED_WITH'	;1
86  76   SEND_VAR_EX/66            ?80       $50                  ?1                  	;0
87  76   DO_FCALL_BY_NAME/131      $51=      ?0                   ?0                  	;0
88  76   IS_EQUAL/17               #52=      $51                  59:'xmlhttprequest' 	;0
89  76   BOOL/52                   #48=      #52                  ?0                  	;0
90  76   BOOL_NOT/13               #53=      #48                  ?0                  	;0	<<82
91  76   JMPZ/43                   ?0        #53                  ?93                 	;0	>>93
92  77   GOTO/253                  ?0        ?419                 ?60                 	;0
93  79   ECHO/40                   ?0        61:' style="display: none;"' ?0                  	;0	<<91
94  80   GOTO/253                  ?0        ?419                 ?62                 	;0
95  82   INIT_FCALL_BY_NAME/59     ?0        ?0                   64:'json_decode'    	;2
96  82   FETCH_DIM_FUNC_ARG/93     $55=      16?0                 66:'movie_properties'	;1
97  82   SEND_VAR_EX/66            ?80       $55                  ?1                  	;0
98  82   SEND_VAL_EX/116           ?96       67:true              ?2                  	;0
99  82   DO_FCALL_BY_NAME/131      $56=      ?0                   ?0                  	;0
100 82   ASSIGN_DIM/147            ?34       16?0                 63:'properties'     	;0
101 82   OP_DATA/137               ?0        $56                  ?0                  	;0
102 83   INIT_FCALL_BY_NAME/59     ?0        ?0                   68:'B25f6F50DfA04EB7'	;1
103 83   FETCH_STATIC_PROP_FUNC_ARG/177 $57=      70:'rRequest'        71:'XUI'            	;1
104 83   FETCH_DIM_FUNC_ARG/93     $58=      $57                  73:'id'             	;1
105 83   SEND_VAR_EX/66            ?80       $58                  ?1                  	;0
106 83   DO_FCALL_BY_NAME/131      $59=      ?0                   ?0                  	;0
107 83   ASSIGN/38                 ?40       16?6                 $59                 	;0
108 84   FE_RESET_R/77             $61=      16?7                 ?132                	;0
109 84   FE_FETCH_R/78             ?0        $61                  16?8                	;132	>>132	<<131
110 85   INIT_FCALL_BY_NAME/59     ?0        ?0                   74:'intval'         	;1
111 85   FETCH_DIM_FUNC_ARG/93     $62=      16?8                 76:'id'             	;1
112 85   SEND_VAR_EX/66            ?80       $62                  ?1                  	;0
113 85   DO_FCALL_BY_NAME/131      $63=      ?0                   ?0                  	;0
114 85   ISSET_ISEMPTY_DIM_OBJ/115 #64=      16?6                 $63                 	;33554432
115 85   JMPZ/43                   ?0        #64                  ?118                	;0	>>118
116 86   NOP/0                     ?0        ?0                   ?0                  	;1
117 86   GOTO/253                  ?0        ?121                 ?77                 	;0
118 88   ASSIGN/38                 ?45       16?9                 78:'offline'        	;0	<<115
119 89   NOP/0                     ?0        ?0                   ?0                  	;1
120 89   GOTO/253                  ?0        ?122                 ?79                 	;0
121 91   ASSIGN/38                 ?46       16?9                 80:'source'         	;0
122 93   FETCH_DIM_R/81            $68=      16?8                 81:'id'             	;0
123 93   INIT_ARRAY/71             #69=      $68                  82:'id'             	;22
124 93   ADD_ARRAY_ELEMENT/72      #69=      16?9                 83:'parent'         	;0
125 93   FETCH_DIM_R/81            $70=      16?8                 84:'server_name'    	;0
126 93   ADD_ARRAY_ELEMENT/72      #69=      $70                  85:'text'           	;0
127 93   ADD_ARRAY_ELEMENT/72      #69=      86:'mdi mdi-server-network' 87:'icon'           	;0
128 93   ADD_ARRAY_ELEMENT/72      #69=      88:array (
  'opened' => true,
) 89:'state'          	;0
129 93   ASSIGN_DIM/147            ?47       16?10                ?2670194640         	;0
130 93   OP_DATA/137               ?0        #69                  ?0                  	;0
131 94   JMP/42                    ?0        ?109                 ?0                  	;0	>>109
132 94   FE_FREE/127               ?0        $61                  ?0                  	;0	<<108
133 98   GOTO/253                  ?0        ?76                  ?90                 	;0
134 100  ISSET_ISEMPTY_CV/197      #71=      16?0                 ?0                  	;33554432
135 100  BOOL_NOT/13               #72=      #71                  ?0                  	;0
136 100  JMPZ/43                   ?0        #72                  ?138                	;0	>>138
137 101  GOTO/253                  ?0        ?144                 ?91                 	;0
138 103  FETCH_DIM_R/81            $73=      16?0                 92:'remove_subtitles'	;0	<<136
139 103  IS_EQUAL/17               #74=      $73                  93:1                	;0
140 103  BOOL_NOT/13               #75=      #74                  ?0                  	;0
141 103  JMPZ/43                   ?0        #75                  ?143                	;0	>>143
142 104  GOTO/253                  ?0        ?144                 ?94                 	;0
143 106  ECHO/40                   ?0        95:'checked '        ?0                  	;0	<<141
144 109  GOTO/253                  ?0        ?385                 ?96                 	;0
145 111  FE_RESET_R/77             $76=      16?7                 ?157                	;0
146 111  FE_FETCH_R/78             ?0        $76                  16?8                	;157	>>157	<<156
147 112  FETCH_DIM_R/81            $78=      16?8                 97:'id'             	;0
148 112  INIT_ARRAY/71             #79=      $78                  98:'id'             	;22
149 112  ADD_ARRAY_ELEMENT/72      #79=      99:'offline'         100:'parent'        	;0
150 112  FETCH_DIM_R/81            $80=      16?8                 101:'server_name'   	;0
151 112  ADD_ARRAY_ELEMENT/72      #79=      $80                  102:'text'          	;0
152 112  ADD_ARRAY_ELEMENT/72      #79=      103:'mdi mdi-server-network' 104:'icon'          	;0
153 112  ADD_ARRAY_ELEMENT/72      #79=      105:array (
  'opened' => true,
) 106:'state'         	;0
154 112  ASSIGN_DIM/147            ?57       16?10                ?2670194736         	;0
155 112  OP_DATA/137               ?0        #79                  ?0                  	;0
156 113  JMP/42                    ?0        ?146                 ?0                  	;0	>>146
157 113  FE_FREE/127               ?0        $76                  ?0                  	;0	<<145
158 116  FETCH_STATIC_PROP_IS/176  $81=      107:'rRequest'       108:'XUI'           	;0
159 116  ISSET_ISEMPTY_DIM_OBJ/115 #82=      $81                  110:'multi'         	;33554432
160 116  BOOL_NOT/13               #83=      #82                  ?0                  	;0
161 116  JMPZ/43                   ?0        #83                  ?163                	;0	>>163
162 117  GOTO/253                  ?0        ?507                 ?111                	;0
163 119  INIT_FCALL_BY_NAME/59     ?0        ?0                   112:'E589A4bf54A2DAD1'	;2	<<161
164 119  SEND_VAL_EX/116           ?80       114:'adv'            ?1                  	;0
165 119  SEND_VAL_EX/116           ?96       115:'import_episodes' ?2                  	;0
166 119  DO_FCALL_BY_NAME/131      $84=      ?0                   ?0                  	;0
167 119  JMPZ/43                   ?0        $84                  ?169                	;0	>>169
168 120  GOTO/253                  ?0        ?506                 ?116                	;0
169 122  EXIT/79                   ?0        ?0                   ?0                  	;0	<<167
170 123  GOTO/253                  ?0        ?506                 ?117                	;0
171 126  ECHO/40                   ?0        118:'</label>
													<div class="col-md-2">
														<input name="restart_on_edit" id="restart_on_edit" type="checkbox" data-plugin="switchery" class="js-switch" data-color="#039cfd"/>
													</div>
												</div>
											</div> 
										</div> 
										<ul class="list-inline wizard mb-0">
											<li class="prevb list-inline-item">
												<a href="javascript: void(0);" class="btn btn-secondary">' ?0                  	;0
172 127  FETCH_DIM_R/81            $85=      16?2                 119:'prev'          	;0
173 127  ECHO/40                   ?0        $85                  ?0                  	;0
174 128  ECHO/40                   ?0        120:'</a>
											</li>
											<li class="list-inline-item float-right">
												<input name="submit_episode" type="submit" class="btn btn-primary" value="' ?0                  	;0
175 129  ISSET_ISEMPTY_CV/197      #86=      16?0                 ?0                  	;33554432
176 129  JMPZ/43                   ?0        #86                  ?178                	;0	>>178
177 130  GOTO/253                  ?0        ?560                 ?121                	;0
178 132  GOTO/253                  ?0        ?557                 ?122                	;0	<<176
179 134  FETCH_STATIC_PROP_IS/176  $87=      123:'rRequest'       124:'XUI'           	;0
180 134  ISSET_ISEMPTY_DIM_OBJ/115 #88=      $87                  126:'sid'           	;16777216
181 134  JMPZ_EX/46                #88=      #88                  ?186                	;0	>>186
182 134  FETCH_STATIC_PROP_IS/176  $89=      127:'rRequest'       128:'XUI'           	;0
183 134  ISSET_ISEMPTY_DIM_OBJ/115 #90=      $89                  130:'id'            	;16777216
184 134  BOOL_NOT/13               #91=      #90                  ?0                  	;0
185 134  BOOL/52                   #88=      #91                  ?0                  	;0
186 134  BOOL_NOT/13               #92=      #88                  ?0                  	;0	<<181
187 134  JMPZ/43                   ?0        #92                  ?189                	;0	>>189
188 135  GOTO/253                  ?0        ?734                 ?131                	;0
189 137  INIT_METHOD_CALL/112      ?0        16?11                132:'query'         	;2	<<187
190 137  SEND_VAL_EX/116           ?80       134:'SELECT `series_id` FROM `streams_episodes` WHERE `stream_id` = ?;' ?1                  	;0
191 137  INIT_FCALL_BY_NAME/59     ?0        ?0                   135:'intval'        	;1
192 137  FETCH_STATIC_PROP_FUNC_ARG/177 $93=      137:'rRequest'       138:'XUI'           	;1
193 137  FETCH_DIM_FUNC_ARG/93     $94=      $93                  140:'id'            	;1
194 137  SEND_VAR_EX/66            ?80       $94                  ?1                  	;0
195 137  DO_FCALL_BY_NAME/131      $95=      ?0                   ?0                  	;0
196 137  SEND_VAR_NO_REF_EX/50     ?96       $95                  ?2                  	;0
197 137  DO_FCALL/60               ?76       ?0                   ?0                  	;0
198 138  INIT_METHOD_CALL/112      ?0        16?11                141:'num_rows'      	;0
199 138  DO_FCALL/60               $97=      ?0                   ?0                  	;0
200 138  IS_SMALLER/19             #98=      143:0                $97                 	;0
201 138  BOOL_NOT/13               #99=      #98                  ?0                  	;0
202 138  JMPZ/43                   ?0        #99                  ?204                	;0	>>204
203 139  GOTO/253                  ?0        ?214                 ?144                	;0
204 141  INIT_FCALL_BY_NAME/59     ?0        ?0                   149:'intval'        	;1	<<202
205 141  INIT_METHOD_CALL/112      ?0        16?11                151:'get_row'       	;0
206 141  DO_FCALL/60               $102=     ?0                   ?0                  	;0
207 141  SEPARATE/156              $102=     $102                 ?0                  	;0
208 141  FETCH_DIM_FUNC_ARG/93     $103=     $102                 153:'series_id'     	;1
209 141  SEND_VAR_EX/66            ?80       $103                 ?1                  	;0
210 141  DO_FCALL_BY_NAME/131      $104=     ?0                   ?0                  	;0
211 141  FETCH_STATIC_PROP_W/174   $100=     145:'rRequest'       146:'XUI'           	;0
212 141  ASSIGN_DIM/147            ?81       $100                 148:'sid'           	;0
213 141  OP_DATA/137               ?0        $104                 ?0                  	;0
214 143  GOTO/253                  ?0        ?734                 ?154                	;0
215 145  FETCH_DIM_R/81            $105=     16?2                 155:'details'       	;0
216 145  ECHO/40                   ?0        $105                 ?0                  	;0
217 146  ECHO/40                   ?0        156:'</span>
										</a>
									</li>
									' ?0                  	;0
218 147  ISSET_ISEMPTY_CV/197      #106=     16?3                 ?0                  	;33554432
219 147  JMPZ/43                   ?0        #106                 ?221                	;0	>>221
220 148  GOTO/253                  ?0        ?252                 ?157                	;0
221 150  ECHO/40                   ?0        158:'									<li class="nav-item">
										<a href="#episode-information" data-toggle="tab" class="nav-link rounded-0 pt-2 pb-2">
											<i class="mdi mdi-movie-outline mr-1"></i>
											<span class="d-none d-sm-inline">' ?0                  	;0	<<219
222 151  FETCH_DIM_R/81            $107=     16?2                 159:'information'   	;0
223 151  ECHO/40                   ?0        $107                 ?0                  	;0
224 152  GOTO/253                  ?0        ?251                 ?160                	;0
225 155  ECHO/40                   ?0        161:'>
									<label class="col-md-4 col-form-label" for="search">' ?0                  	;0
226 156  FETCH_DIM_R/81            $108=     16?2                 162:'search_directory'	;0
227 156  ECHO/40                   ?0        $108                 ?0                  	;0
228 157  ECHO/40                   ?0        163:'</label>
									<div class="col-md-8 input-group">
										<input type="text" id="search" name="search" class="form-control" placeholder="' ?0                  	;0
229 158  FETCH_DIM_R/81            $109=     16?2                 164:'filter_directory'	;0
230 158  ECHO/40                   ?0        $109                 ?0                  	;0
231 159  GOTO/253                  ?0        ?377                 ?165                	;0
232 161  ECHO/40                   ?0        166:'</label>
													<div class="col-md-8">
														<textarea rows="6" class="form-control" id="plot" name="plot">' ?0                  	;0
233 162  ISSET_ISEMPTY_CV/197      #110=     16?0                 ?0                  	;33554432
234 162  BOOL_NOT/13               #111=     #110                 ?0                  	;0
235 162  JMPZ/43                   ?0        #111                 ?237                	;0	>>237
236 163  GOTO/253                  ?0        ?243                 ?167                	;0
237 165  INIT_FCALL_BY_NAME/59     ?0        ?0                   168:'htmlspecialchars'	;1	<<235
238 165  FETCH_DIM_FUNC_ARG/93     $112=     16?0                 170:'properties'    	;1
239 165  FETCH_DIM_FUNC_ARG/93     $113=     $112                 171:'plot'          	;1
240 165  SEND_VAR_EX/66            ?80       $113                 ?1                  	;0
241 165  DO_FCALL_BY_NAME/131      $114=     ?0                   ?0                  	;0
242 165  ECHO/40                   ?0        $114                 ?0                  	;0
243 167  ECHO/40                   ?0        172:'</textarea>
													</div>
												</div>
												<div class="form-group row mb-4">
													<label class="col-md-4 col-form-label" for="release_date">' ?0                  	;0
244 168  GOTO/253                  ?0        ?841                 ?173                	;0
245 170  ECHO/40                   ?0        174:'</a>
											</li>
										</ul>
									</div>
									' ?0                  	;0
246 171  GOTO/253                  ?0        ?635                 ?175                	;0
247 173  ECHO/40                   ?0        176:'									<div class="tab-pane" id="stream-details">
										<div class="row">
											<div class="col-12">
												<div class="form-group row mb-4">
													<label class="col-md-4 col-form-label" for="series_name">' ?0                  	;0
248 174  FETCH_DIM_R/81            $115=     16?2                 177:'series_name'   	;0
249 174  ECHO/40                   ?0        $115                 ?0                  	;0
250 175  GOTO/253                  ?0        ?327                 ?178                	;0
251 177  ECHO/40                   ?0        179:'</span>
										</a>
									</li>
									' ?0                  	;0
252 179  ECHO/40                   ?0        180:'									<li class="nav-item">
										<a href="#advanced-details" data-toggle="tab" class="nav-link rounded-0 pt-2 pb-2">
											<i class="mdi mdi-folder-alert-outline mr-1"></i>
											<span class="d-none d-sm-inline">' ?0                  	;0
253 180  FETCH_DIM_R/81            $116=     16?2                 181:'advanced'      	;0
254 180  ECHO/40                   ?0        $116                 ?0                  	;0
255 181  ECHO/40                   ?0        182:'</span>
										</a>
									</li>
									<li class="nav-item">
										<a href="#load-balancing" data-toggle="tab" class="nav-link rounded-0 pt-2 pb-2">
											<i class="mdi mdi-server-network mr-1"></i>
											<span class="d-none d-sm-inline">' ?0                  	;0
256 182  GOTO/253                  ?0        ?685                 ?183                	;0
257 185  ECHO/40                   ?0        184:'data-plugin="switchery" class="js-switch" data-color="#039cfd"/>
													</div>
                                                    <label class="col-md-4 col-form-label" for="direct_proxy">Direct Stream <i title="When using direct source, hide the original URL by proxying the movie through your servers. This will consume bandwidth but won\'t require the movie to be saved to your servers permanently. Make sure to set the correct target container." class="tooltip text-secondary far fa-circle"></i></label>
													<div class="col-md-2">
														<input name="direct_proxy" id="direct_proxy" type="checkbox" ' ?0                  	;0
258 186  ISSET_ISEMPTY_CV/197      #117=     16?0                 ?0                  	;33554432
259 186  BOOL_NOT/13               #118=     #117                 ?0                  	;0
260 186  JMPZ/43                   ?0        #118                 ?262                	;0	>>262
261 187  GOTO/253                  ?0        ?696                 ?185                	;0
262 189  FETCH_DIM_R/81            $119=     16?0                 186:'direct_proxy'  	;0	<<260
263 189  IS_EQUAL/17               #120=     $119                 187:1               	;0
264 189  BOOL_NOT/13               #121=     #120                 ?0                  	;0
265 189  JMPZ/43                   ?0        #121                 ?267                	;0	>>267
266 190  GOTO/253                  ?0        ?696                 ?188                	;0
267 192  ECHO/40                   ?0        189:'checked '       ?0                  	;0	<<265
268 193  GOTO/253                  ?0        ?696                 ?190                	;0
269 195  ISSET_ISEMPTY_CV/197      #122=     16?0                 ?0                  	;33554432
270 195  BOOL_NOT/13               #123=     #122                 ?0                  	;0
271 195  JMPZ/43                   ?0        #123                 ?273                	;0	>>273
272 196  GOTO/253                  ?0        ?278                 ?191                	;0
273 198  INIT_FCALL_BY_NAME/59     ?0        ?0                   192:'htmlspecialchars'	;1	<<271
274 198  FETCH_DIM_FUNC_ARG/93     $124=     16?0                 194:'season'        	;1
275 198  SEND_VAR_EX/66            ?80       $124                 ?1                  	;0
276 198  DO_FCALL_BY_NAME/131      $125=     ?0                   ?0                  	;0
277 198  ECHO/40                   ?0        $125                 ?0                  	;0
278 200  ECHO/40                   ?0        195:'" required data-parsley-trigger="change">
													</div>
													<label class="col-md-4 col-form-label" for="episode">' ?0                  	;0
279 201  FETCH_DIM_R/81            $126=     16?2                 196:'episode_number'	;0
280 201  ECHO/40                   ?0        $126                 ?0                  	;0
281 202  GOTO/253                  ?0        ?805                 ?197                	;0
282 204  ASSIGN/38                 ?107      16?10                198:array (
  0 => 
  array (
    'id' => 'source',
    'parent' => '#',
    'text' => '<strong class=\'btn btn-success waves-effect waves-light btn-xs\'>Active</strong>',
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
283 205  ISSET_ISEMPTY_CV/197      #128=     16?0                 ?0                  	;33554432
284 205  JMPZ/43                   ?0        #128                 ?286                	;0	>>286
285 206  GOTO/253                  ?0        ?508                 ?199                	;0
286 208  INIT_FCALL_BY_NAME/59     ?0        ?0                   200:'e589A4bF54A2dAD1'	;2	<<284
287 208  SEND_VAL_EX/116           ?80       202:'adv'            ?1                  	;0
288 208  SEND_VAL_EX/116           ?96       203:'add_episode'    ?2                  	;0
289 208  DO_FCALL_BY_NAME/131      $129=     ?0                   ?0                  	;0
290 208  JMPZ/43                   ?0        $129                 ?292                	;0	>>292
291 209  GOTO/253                  ?0        ?293                 ?204                	;0
292 211  EXIT/79                   ?0        ?0                   ?0                  	;0	<<290
293 213  GOTO/253                  ?0        ?145                 ?205                	;0
294 215  ECHO/40                   ?0        206:'selected '      ?0                  	;0
295 218  ECHO/40                   ?0        207:'value="0">'     ?0                  	;0
296 219  FETCH_DIM_R/81            $130=     16?2                 208:'transcoding_disabled'	;0
297 219  ECHO/40                   ?0        $130                 ?0                  	;0
298 220  GOTO/253                  ?0        ?860                 ?209                	;0
299 223  ECHO/40                   ?0        210:'												'   ?0                  	;0
300 224  ISSET_ISEMPTY_CV/197      #131=     16?3                 ?0                  	;33554432
301 224  JMPZ/43                   ?0        #131                 ?303                	;0	>>303
302 225  GOTO/253                  ?0        ?856                 ?211                	;0
303 227  ECHO/40                   ?0        212:'												<div class="form-group row mb-4">
													<label class="col-md-4 col-form-label" for="movie_subtitles">' ?0                  	;0	<<301
304 228  FETCH_DIM_R/81            $132=     16?2                 213:'subtitle_location'	;0
305 228  ECHO/40                   ?0        $132                 ?0                  	;0
306 229  GOTO/253                  ?0        ?563                 ?214                	;0
307 232  GOTO/253                  ?0        ?310                 ?215                	;0
308 234  FETCH_DIM_R/81            $133=     16?0                 216:'stream_display_name'	;0
309 234  ECHO/40                   ?0        $133                 ?0                  	;0
310 236  GOTO/253                  ?0        ?594                 ?217                	;0
311 239  INIT_METHOD_CALL/112      ?0        16?11                218:'get_row'       	;0
312 239  DO_FCALL/60               $134=     ?0                   ?0                  	;0
313 239  ASSIGN/38                 ?115      16?12                $134                	;0
314 240  INIT_FCALL_BY_NAME/59     ?0        ?0                   221:'intval'        	;1
315 240  FETCH_DIM_FUNC_ARG/93     $137=     16?12                223:'episode_num'   	;1
316 240  SEND_VAR_EX/66            ?80       $137                 ?1                  	;0
317 240  DO_FCALL_BY_NAME/131      $138=     ?0                   ?0                  	;0
318 240  ASSIGN_DIM/147            ?116      16?0                 220:'episode'       	;0
319 240  OP_DATA/137               ?0        $138                 ?0                  	;0
320 241  INIT_FCALL_BY_NAME/59     ?0        ?0                   225:'intval'        	;1
321 241  FETCH_DIM_FUNC_ARG/93     $140=     16?12                227:'season_num'    	;1
322 241  SEND_VAR_EX/66            ?80       $140                 ?1                  	;0
323 241  DO_FCALL_BY_NAME/131      $141=     ?0                   ?0                  	;0
324 241  ASSIGN_DIM/147            ?119      16?0                 224:'season'        	;0
325 241  OP_DATA/137               ?0        $141                 ?0                  	;0
326 243  GOTO/253                  ?0        ?95                  ?228                	;0
327 245  ECHO/40                   ?0        229:'</label>
													<div class="col-md-8">
														<input type="text" class="form-control" id="series_name" name="series_name" value="' ?0                  	;0
328 246  FETCH_DIM_R/81            $142=     16?13                230:'title'         	;0
329 246  ECHO/40                   ?0        $142                 ?0                  	;0
330 247  ECHO/40                   ?0        231:'" readonly>
													</div>
												</div>
												<div class="form-group row mb-4">
													<label class="col-md-4 col-form-label" for="season_num">' ?0                  	;0
331 248  FETCH_DIM_R/81            $143=     16?2                 232:'season_number' 	;0
332 248  ECHO/40                   ?0        $143                 ?0                  	;0
333 249  ECHO/40                   ?0        233:'</label>
													<div class="col-md-2">
														<input type="text" class="form-control text-center" id="season_num" name="season_num" placeholder="" value="' ?0                  	;0
334 250  GOTO/253                  ?0        ?269                 ?234                	;0
335 254  ECHO/40                   ?0        235:'				<div class="card">
					<div class="card-body">
						<form action="#" method="POST" data-parsley-validate="">
							' ?0                  	;0
336 255  ISSET_ISEMPTY_CV/197      #144=     16?0                 ?0                  	;33554432
337 255  BOOL_NOT/13               #145=     #144                 ?0                  	;0
338 255  JMPZ/43                   ?0        #145                 ?340                	;0	>>340
339 256  GOTO/253                  ?0        ?489                 ?236                	;0
340 258  ECHO/40                   ?0        237:'							<input type="hidden" name="edit" value="' ?0                  	;0	<<338
341 259  GOTO/253                  ?0        ?486                 ?238                	;0
342 261  ECHO/40                   ?0        239:'" />
											</li>
										</ul>
									</div>
								</div> 
							</div> 
						</form>
						<div id="file-browser" class="mfp-hide white-popup-block">
							<div class="col-12">
								<div class="form-group row mb-4">
									<label class="col-md-4 col-form-label" for="server_id">' ?0                  	;0
343 262  FETCH_DIM_R/81            $146=     16?2                 240:'server_name'   	;0
344 262  ECHO/40                   ?0        $146                 ?0                  	;0
345 263  ECHO/40                   ?0        241:'</label>
									<div class="col-md-8">
										<select id="server_id" class="form-control" data-toggle="select2">
											' ?0                  	;0
346 264  INIT_FCALL_BY_NAME/59     ?0        ?0                   242:'C6a90bfcd425EB63'	;0
347 264  DO_FCALL_BY_NAME/131      $147=     ?0                   ?0                  	;0
348 264  FE_RESET_R/77             $148=     $147                 ?375                	;0
349 264  FE_FETCH_R/78             ?0        $148                 16?8                	;375	>>375	<<374
350 265  ECHO/40                   ?0        244:'											<option value="' ?0                  	;0
351 266  FETCH_DIM_R/81            $149=     16?8                 245:'id'            	;0
352 266  ECHO/40                   ?0        $149                 ?0                  	;0
353 267  ECHO/40                   ?0        246:'"'              ?0                  	;0
354 268  FETCH_STATIC_PROP_IS/176  $150=     247:'rRequest'       248:'XUI'           	;0
355 268  ISSET_ISEMPTY_DIM_OBJ/115 #151=     $150                 250:'server'        	;33554432
356 268  JMPZ_EX/46                #151=     #151                 ?362                	;0	>>362
357 268  FETCH_STATIC_PROP_R/173   $152=     251:'rRequest'       252:'XUI'           	;0
358 268  FETCH_DIM_R/81            $153=     $152                 254:'server'        	;0
359 268  FETCH_DIM_R/81            $154=     16?8                 255:'id'            	;0
360 268  IS_EQUAL/17               #155=     $153                 $154                	;0
361 268  BOOL/52                   #151=     #155                 ?0                  	;0
362 268  BOOL_NOT/13               #156=     #151                 ?0                  	;0	<<356
363 268  JMPZ/43                   ?0        #156                 ?366                	;0	>>366
364 269  NOP/0                     ?0        ?0                   ?0                  	;1
365 269  GOTO/253                  ?0        ?367                 ?256                	;0
366 271  ECHO/40                   ?0        257:' selected'      ?0                  	;0	<<363
367 273  ECHO/40                   ?0        258:'>'              ?0                  	;0
368 274  INIT_FCALL_BY_NAME/59     ?0        ?0                   259:'htmlspecialchars'	;1
369 274  FETCH_DIM_FUNC_ARG/93     $157=     16?8                 261:'server_name'   	;1
370 274  SEND_VAR_EX/66            ?80       $157                 ?1                  	;0
371 274  DO_FCALL_BY_NAME/131      $158=     ?0                   ?0                  	;0
372 274  ECHO/40                   ?0        $158                 ?0                  	;0
373 275  ECHO/40                   ?0        262:'</option>
											' ?0                  	;0
374 276  JMP/42                    ?0        ?349                 ?0                  	;0	>>349
375 276  FE_FREE/127               ?0        $148                 ?0                  	;0	<<348
376 279  GOTO/253                  ?0        ?8                   ?263                	;0
377 281  ECHO/40                   ?0        264:'">
										<div class="input-group-append">
											<button class="btn btn-warning waves-effect waves-light" type="button" onClick="clearSearch()"><i class="mdi mdi-close"></i></button>
											<button class="btn btn-primary waves-effect waves-light" type="button" id="doSearch"><i class="mdi mdi-magnify"></i></button>
										</div>
									</div>
								</div>
								<div class="form-group row mb-4">
									<div class="col-md-6">
										<table id="datatable" class="table">
											<thead>
												<tr>
													<th width="20px"></th>
													<th>' ?0                  	;0
378 282  FETCH_DIM_R/81            $159=     16?2                 265:'directory'     	;0
379 282  ECHO/40                   ?0        $159                 ?0                  	;0
380 283  ECHO/40                   ?0        266:'</th>
												</tr>
											</thead>
											<tbody></tbody>
										</table>
									</div>
									<div class="col-md-6">
										<table id="datatable-files" class="table">
											<thead>
												<tr>
													<th width="20px"></th>
													<th>' ?0                  	;0
381 284  FETCH_DIM_R/81            $160=     16?2                 267:'filename'      	;0
382 284  ECHO/40                   ?0        $160                 ?0                  	;0
383 285  ECHO/40                   ?0        268:'</th>
												</tr>
											</thead>
											<tbody></tbody>
										</table>
									</div>
								</div>
								' ?0                  	;0
384 286  GOTO/253                  ?0        ?26                  ?269                	;0
385 288  ECHO/40                   ?0        270:'data-plugin="switchery" class="js-switch" data-color="#039cfd"/>
													</div>
                                                </div>
												' ?0                  	;0
386 289  ISSET_ISEMPTY_CV/197      #161=     16?3                 ?0                  	;33554432
387 289  JMPZ/43                   ?0        #161                 ?389                	;0	>>389
388 290  GOTO/253                  ?0        ?74                  ?271                	;0
389 292  ECHO/40                   ?0        272:'												<div class="form-group row mb-4">
													<label class="col-md-4 col-form-label" for="target_container">' ?0                  	;0	<<387
390 293  FETCH_DIM_R/81            $162=     16?2                 273:'target_container'	;0
391 293  ECHO/40                   ?0        $162                 ?0                  	;0
392 294  ECHO/40                   ?0        274:' <i title="'    ?0                  	;0
393 295  GOTO/253                  ?0        ?648                 ?275                	;0
394 297  ISSET_ISEMPTY_CV/197      #163=     16?0                 ?0                  	;33554432
395 297  BOOL_NOT/13               #164=     #163                 ?0                  	;0
396 297  JMPZ/43                   ?0        #164                 ?398                	;0	>>398
397 298  GOTO/253                  ?0        ?404                 ?276                	;0
398 300  FETCH_DIM_R/81            $165=     16?0                 277:'read_native'   	;0	<<396
399 300  IS_EQUAL/17               #166=     $165                 278:1               	;0
400 300  BOOL_NOT/13               #167=     #166                 ?0                  	;0
401 300  JMPZ/43                   ?0        #167                 ?403                	;0	>>403
402 301  GOTO/253                  ?0        ?404                 ?279                	;0
403 303  ECHO/40                   ?0        280:'checked '       ?0                  	;0	<<401
404 306  GOTO/253                  ?0        ?542                 ?281                	;0
405 308  ECHO/40                   ?0        282:'												<div class="form-group row mb-4">
													<label class="col-md-4 col-form-label" for="stream_display_name">' ?0                  	;0
406 309  FETCH_DIM_R/81            $168=     16?2                 283:'episode_name'  	;0
407 309  ECHO/40                   ?0        $168                 ?0                  	;0
408 310  ECHO/40                   ?0        284:'</label>
													<div class="col-md-8">
														<input type="text" class="form-control" id="stream_display_name" name="stream_display_name" value="' ?0                  	;0
409 311  ISSET_ISEMPTY_CV/197      #169=     16?0                 ?0                  	;33554432
410 311  BOOL_NOT/13               #170=     #169                 ?0                  	;0
411 311  JMPZ/43                   ?0        #170                 ?413                	;0	>>413
412 312  GOTO/253                  ?0        ?1                   ?285                	;0
413 314  INIT_FCALL_BY_NAME/59     ?0        ?0                   286:'htmlspecialchars'	;1	<<411
414 314  FETCH_DIM_FUNC_ARG/93     $171=     16?0                 288:'stream_display_name'	;1
415 314  SEND_VAR_EX/66            ?80       $171                 ?1                  	;0
416 314  DO_FCALL_BY_NAME/131      $172=     ?0                   ?0                  	;0
417 314  ECHO/40                   ?0        $172                 ?0                  	;0
418 315  GOTO/253                  ?0        ?1                   ?289                	;0
419 318  ECHO/40                   ?0        290:'>
    <div class="container-fluid">
		<div class="row">
			<div class="col-12">
				<div class="page-title-box">
					<div class="page-title-right">
                        ' ?0                  	;0
420 319  INCLUDE_OR_EVAL/73        ?153      291:'topbar.php'     ?0                  	;2
421 320  ECHO/40                   ?0        292:'					</div>
					<h4 class="page-title">' ?0                  	;0
422 321  ISSET_ISEMPTY_CV/197      #174=     16?0                 ?0                  	;33554432
423 321  JMPZ/43                   ?0        #174                 ?425                	;0	>>425
424 322  GOTO/253                  ?0        ?308                 ?293                	;0
425 324  GOTO/253                  ?0        ?43                  ?294                	;0	<<423
426 326  INIT_FCALL_BY_NAME/59     ?0        ?0                   295:'htmlspecialchars'	;1
427 326  FETCH_DIM_FUNC_ARG/93     $175=     16?13                297:'tmdb_id'       	;1
428 326  SEND_VAR_EX/66            ?80       $175                 ?1                  	;0
429 326  DO_FCALL_BY_NAME/131      $176=     ?0                   ?0                  	;0
430 326  ECHO/40                   ?0        $176                 ?0                  	;0
431 327  ECHO/40                   ?0        298:'" />
							'   ?0                  	;0
432 328  GOTO/253                  ?0        ?840                 ?299                	;0
433 330  ECHO/40                   ?0        300:'							<input type="hidden" id="tmdb_id" name="tmdb_id" value="' ?0                  	;0
434 331  GOTO/253                  ?0        ?829                 ?301                	;0
435 334  ECHO/40                   ?0        302:'">
													</div>
												</div>
												<div class="form-group row mb-4">
													<label class="col-md-4 col-form-label" for="rating">' ?0                  	;0
436 335  FETCH_DIM_R/81            $177=     16?2                 303:'rating'        	;0
437 335  ECHO/40                   ?0        $177                 ?0                  	;0
438 336  ECHO/40                   ?0        304:'</label>
													<div class="col-md-3">
														<input type="text" class="form-control text-center" id="rating" name="rating" value="' ?0                  	;0
439 337  ISSET_ISEMPTY_CV/197      #178=     16?0                 ?0                  	;33554432
440 337  BOOL_NOT/13               #179=     #178                 ?0                  	;0
441 337  JMPZ/43                   ?0        #179                 ?443                	;0	>>443
442 338  GOTO/253                  ?0        ?501                 ?305                	;0
443 340  GOTO/253                  ?0        ?495                 ?306                	;0	<<441
444 342  INIT_METHOD_CALL/112      ?0        16?11                307:'query'         	;2
445 342  SEND_VAL_EX/116           ?80       309:'SELECT `season_num`, `episode_num` FROM `streams_episodes` WHERE `stream_id` = ?;' ?1                  	;0
446 342  FETCH_DIM_FUNC_ARG/93     $180=     16?0                 310:'id'            	;2
447 342  SEND_VAR_EX/66            ?96       $180                 ?2                  	;0
448 342  DO_FCALL/60               ?161      ?0                   ?0                  	;0
449 343  INIT_METHOD_CALL/112      ?0        16?11                311:'num_rows'      	;0
450 343  DO_FCALL/60               $182=     ?0                   ?0                  	;0
451 343  IS_SMALLER/19             #183=     313:0                $182                	;0
452 343  JMPZ/43                   ?0        #183                 ?454                	;0	>>454
453 344  GOTO/253                  ?0        ?311                 ?314                	;0
454 346  ASSIGN_DIM/147            ?164      16?0                 315:'episode'       	;0	<<452
455 346  OP_DATA/137               ?0        316:0                ?0                  	;0
456 347  ASSIGN_DIM/147            ?165      16?0                 317:'season'        	;0
457 347  OP_DATA/137               ?0        318:0                ?0                  	;0
458 348  GOTO/253                  ?0        ?326                 ?319                	;0
459 349  GOTO/253                  ?0        ?311                 ?320                	;0
460 351  ISSET_ISEMPTY_CV/197      #186=     16?0                 ?0                  	;33554432
461 351  JMPZ/43                   ?0        #186                 ?463                	;0	>>463
462 352  GOTO/253                  ?0        ?466                 ?321                	;0
463 354  FETCH_DIM_R/81            $187=     16?2                 322:'process_now'   	;0	<<461
464 354  ECHO/40                   ?0        $187                 ?0                  	;0
465 355  GOTO/253                  ?0        ?171                 ?323                	;0
466 357  FETCH_DIM_R/81            $188=     16?2                 324:'reprocess_on_edit'	;0
467 357  ECHO/40                   ?0        $188                 ?0                  	;0
468 358  GOTO/253                  ?0        ?171                 ?325                	;0
469 360  INIT_FCALL_BY_NAME/59     ?0        ?0                   326:'F260B7A31F021e39'	;1
470 360  FETCH_STATIC_PROP_FUNC_ARG/177 $189=     328:'rRequest'       329:'XUI'           	;1
471 360  FETCH_DIM_FUNC_ARG/93     $190=     $189                 331:'id'            	;1
472 360  SEND_VAR_EX/66            ?80       $190                 ?1                  	;0
473 360  DO_FCALL_BY_NAME/131      $191=     ?0                   ?0                  	;0
474 360  ASSIGN/38                 ?172      16?0                 $191                	;0
475 361  BOOL_NOT/13               #193=     16?0                 ?0                  	;0
476 361  JMPNZ_EX/47               #193=     #193                 ?480                	;0	>>480
477 361  FETCH_DIM_R/81            $194=     16?0                 332:'type'          	;0
478 361  IS_NOT_EQUAL/18           #195=     $194                 333:5               	;0
479 361  BOOL/52                   #193=     #195                 ?0                  	;0
480 361  BOOL_NOT/13               #196=     #193                 ?0                  	;0	<<476
481 361  JMPZ/43                   ?0        #196                 ?483                	;0	>>483
482 362  GOTO/253                  ?0        ?485                 ?334                	;0
483 364  INIT_FCALL_BY_NAME/59     ?0        ?0                   335:'E72f42a93714bA87'	;0	<<481
484 364  DO_FCALL_BY_NAME/131      ?177      ?0                   ?0                  	;0
485 367  GOTO/253                  ?0        ?282                 ?337                	;0
486 369  FETCH_DIM_R/81            $198=     16?0                 338:'id'            	;0
487 369  ECHO/40                   ?0        $198                 ?0                  	;0
488 370  ECHO/40                   ?0        339:'" />
							'   ?0                  	;0
489 372  ISSET_ISEMPTY_CV/197      #199=     16?3                 ?0                  	;33554432
490 372  BOOL_NOT/13               #200=     #199                 ?0                  	;0
491 372  JMPZ/43                   ?0        #200                 ?493                	;0	>>493
492 373  GOTO/253                  ?0        ?433                 ?340                	;0
493 375  ECHO/40                   ?0        341:'							<input type="hidden" name="multi" id="multi" value="" />
							<input type="hidden" name="server" id="server" value="" />
							<input type="hidden" id="tmdb_id" name="tmdb_id" value="' ?0                  	;0	<<491
494 376  GOTO/253                  ?0        ?426                 ?342                	;0
495 378  INIT_FCALL_BY_NAME/59     ?0        ?0                   343:'htmlspecialchars'	;1
496 378  FETCH_DIM_FUNC_ARG/93     $201=     16?0                 345:'properties'    	;1
497 378  FETCH_DIM_FUNC_ARG/93     $202=     $201                 346:'rating'        	;1
498 378  SEND_VAR_EX/66            ?80       $202                 ?1                  	;0
499 378  DO_FCALL_BY_NAME/131      $203=     ?0                   ?0                  	;0
500 378  ECHO/40                   ?0        $203                 ?0                  	;0
501 380  ECHO/40                   ?0        347:'">
													</div>
												</div>
											</div> 
										</div> 
										<ul class="list-inline wizard mb-0">
											<li class="prevb list-inline-item">
												<a href="javascript: void(0);" class="btn btn-secondary">' ?0                  	;0
502 381  FETCH_DIM_R/81            $204=     16?2                 348:'prev'          	;0
503 381  ECHO/40                   ?0        $204                 ?0                  	;0
504 382  ECHO/40                   ?0        349:'</a>
											</li>
											<li class="nextb list-inline-item float-right">
												<a href="javascript: void(0);" class="btn btn-secondary">' ?0                  	;0
505 383  GOTO/253                  ?0        ?576                 ?350                	;0
506 386  ASSIGN/38                 ?185      16?3                 351:true            	;0
507 388  GOTO/253                  ?0        ?133                 ?352                	;0
508 390  GOTO/253                  ?0        ?444                 ?353                	;0
509 392  FETCH_DIM_R/81            $206=     16?2                 354:'add_series_name'	;0
510 392  ECHO/40                   ?0        $206                 ?0                  	;0
511 393  ECHO/40                   ?0        355:'</label>
														</div>
													</div>
													<div class="col-md-6">
														<div class="custom-control custom-checkbox">
															<input type="checkbox" class="custom-control-input" id="addName2" name="addName2" checked>
															<label class="custom-control-label" for="addName2">' ?0                  	;0
512 394  FETCH_DIM_R/81            $207=     16?2                 356:'add_episode_number'	;0
513 394  ECHO/40                   ?0        $207                 ?0                  	;0
514 395  ECHO/40                   ?0        357:'</label>
														</div>
													</div>
												</div>
											</div> 
										</div> 
										<ul class="list-inline wizard mb-0">
											<li class="nextb list-inline-item float-right">
												<a href="javascript: void(0);" class="btn btn-secondary">' ?0                  	;0
515 396  FETCH_DIM_R/81            $208=     16?2                 358:'next'          	;0
516 396  ECHO/40                   ?0        $208                 ?0                  	;0
517 397  GOTO/253                  ?0        ?245                 ?359                	;0
518 399  ISSET_ISEMPTY_CV/197      #209=     16?0                 ?0                  	;33554432
519 399  BOOL_NOT/13               #210=     #209                 ?0                  	;0
520 399  JMPZ/43                   ?0        #210                 ?522                	;0	>>522
521 400  GOTO/253                  ?0        ?527                 ?360                	;0
522 402  INIT_FCALL_BY_NAME/59     ?0        ?0                   361:'htmlspecialchars'	;1	<<520
523 402  FETCH_DIM_FUNC_ARG/93     $211=     16?0                 363:'notes'         	;1
524 402  SEND_VAR_EX/66            ?80       $211                 ?1                  	;0
525 402  DO_FCALL_BY_NAME/131      $212=     ?0                   ?0                  	;0
526 402  ECHO/40                   ?0        $212                 ?0                  	;0
527 404  ECHO/40                   ?0        364:'</textarea>
													</div>
												</div>
											</div> 
										</div> 
										<ul class="list-inline wizard mb-0">
											<li class="nextb list-inline-item float-right">
												<a href="javascript: void(0);" class="btn btn-secondary">' ?0                  	;0
528 405  FETCH_DIM_R/81            $213=     16?2                 365:'next'          	;0
529 405  ECHO/40                   ?0        $213                 ?0                  	;0
530 406  GOTO/253                  ?0        ?634                 ?366                	;0
531 409  INIT_FCALL_BY_NAME/59     ?0        ?0                   367:'json_decode'   	;2
532 409  FETCH_DIM_FUNC_ARG/93     $214=     16?0                 369:'stream_source' 	;1
533 409  SEND_VAR_EX/66            ?80       $214                 ?1                  	;0
534 409  SEND_VAL_EX/116           ?96       370:true             ?2                  	;0
535 409  DO_FCALL_BY_NAME/131      $215=     ?0                   ?0                  	;0
536 409  FETCH_DIM_R/81            $216=     $215                 371:0               	;0
537 409  ASSIGN/38                 ?197      16?1                 $216                	;0
538 411  ECHO/40                   ?0        372:'												<div class="form-group row mb-4 stream-url">
													<label class="col-md-4 col-form-label" for="stream_source">' ?0                  	;0
539 412  FETCH_DIM_R/81            $218=     16?2                 373:'episode_path'  	;0
540 412  ECHO/40                   ?0        $218                 ?0                  	;0
541 413  GOTO/253                  ?0        ?550                 ?374                	;0
542 415  ECHO/40                   ?0        375:'data-plugin="switchery" class="js-switch" data-color="#039cfd"/>
													</div>
													<label class="col-md-4 col-form-label" for="movie_symlink">' ?0                  	;0
543 416  FETCH_DIM_R/81            $219=     16?2                 376:'create_symlink'	;0
544 416  ECHO/40                   ?0        $219                 ?0                  	;0
545 417  ECHO/40                   ?0        377:' <i title="'    ?0                  	;0
546 418  FETCH_DIM_R/81            $220=     16?2                 378:'episode_tooltip_2'	;0
547 418  ECHO/40                   ?0        $220                 ?0                  	;0
548 419  ECHO/40                   ?0        379:'" class="tooltip text-secondary far fa-circle"></i></label>
													<div class="col-md-2">
														<input name="movie_symlink" id="movie_symlink" type="checkbox" ' ?0                  	;0
549 420  GOTO/253                  ?0        ?723                 ?380                	;0
550 422  ECHO/40                   ?0        381:'</label>
													<div class="col-md-8 input-group">
														<input type="text" id="stream_source" name="stream_source" class="form-control" value="' ?0                  	;0
551 423  ECHO/40                   ?0        16?1                 ?0                  	;0
552 424  ECHO/40                   ?0        382:'" required data-parsley-trigger="change">
														<div class="input-group-append">
															<a href="#file-browser" id="filebrowser" class="btn btn-primary waves-effect waves-light"><i class="mdi mdi-folder-open-outline"></i></a>
														</div>
													</div>
												</div>
												<div class="form-group row mb-4">
													<label class="col-md-4 col-form-label" for="notes">' ?0                  	;0
553 425  FETCH_DIM_R/81            $221=     16?2                 383:'notes'         	;0
554 425  ECHO/40                   ?0        $221                 ?0                  	;0
555 426  ECHO/40                   ?0        384:'</label>
													<div class="col-md-8">
														<textarea id="notes" name="notes" class="form-control" rows="3" placeholder="">' ?0                  	;0
556 427  GOTO/253                  ?0        ?518                 ?385                	;0
557 429  FETCH_DIM_R/81            $222=     16?2                 386:'add'           	;0
558 429  ECHO/40                   ?0        $222                 ?0                  	;0
559 430  GOTO/253                  ?0        ?562                 ?387                	;0
560 432  FETCH_DIM_R/81            $223=     16?2                 388:'edit'          	;0
561 432  ECHO/40                   ?0        $223                 ?0                  	;0
562 434  GOTO/253                  ?0        ?342                 ?389                	;0
563 436  ECHO/40                   ?0        390:' <i title="'    ?0                  	;0
564 437  FETCH_DIM_R/81            $224=     16?2                 391:'episode_tooltip_6'	;0
565 437  ECHO/40                   ?0        $224                 ?0                  	;0
566 438  ECHO/40                   ?0        392:'" class="tooltip text-secondary far fa-circle"></i></label>
													<div class="col-md-8 input-group">
														<input type="text" id="movie_subtitles" name="movie_subtitles" class="form-control" value="' ?0                  	;0
567 439  ISSET_ISEMPTY_CV/197      #225=     16?0                 ?0                  	;33554432
568 439  BOOL_NOT/13               #226=     #225                 ?0                  	;0
569 439  JMPZ/43                   ?0        #226                 ?571                	;0	>>571
570 440  GOTO/253                  ?0        ?855                 ?393                	;0
571 442  INIT_FCALL_BY_NAME/59     ?0        ?0                   394:'htmlspecialchars'	;1	<<569
572 442  SEND_VAR_EX/66            ?80       16?4                 ?1                  	;0
573 442  DO_FCALL_BY_NAME/131      $227=     ?0                   ?0                  	;0
574 442  ECHO/40                   ?0        $227                 ?0                  	;0
575 443  GOTO/253                  ?0        ?855                 ?396                	;0
576 445  FETCH_DIM_R/81            $228=     16?2                 397:'next'          	;0
577 445  ECHO/40                   ?0        $228                 ?0                  	;0
578 446  ECHO/40                   ?0        398:'</a>
											</li>
										</ul>
									</div>
									<div class="tab-pane" id="advanced-details">
										<div class="row">
											<div class="col-12">
												<div class="form-group row mb-4">
													<label class="col-md-4 col-form-label" for="direct_source">' ?0                  	;0
579 447  FETCH_DIM_R/81            $229=     16?2                 399:'direct_source' 	;0
580 447  ECHO/40                   ?0        $229                 ?0                  	;0
581 448  ECHO/40                   ?0        400:' <i title="'    ?0                  	;0
582 449  FETCH_DIM_R/81            $230=     16?2                 401:'episode_tooltip_1'	;0
583 449  ECHO/40                   ?0        $230                 ?0                  	;0
584 450  GOTO/253                  ?0        ?817                 ?402                	;0
585 452  INCLUDE_OR_EVAL/73        ?211      403:'session.php'    ?0                  	;2	<<0
586 453  INCLUDE_OR_EVAL/73        ?212      404:'functions.php'  ?0                  	;2
587 454  INIT_FCALL_BY_NAME/59     ?0        ?0                   405:'e6d500e19634D513'	;0
588 454  DO_FCALL_BY_NAME/131      $233=     ?0                   ?0                  	;0
589 454  JMPZ/43                   ?0        $233                 ?591                	;0	>>591
590 455  GOTO/253                  ?0        ?593                 ?407                	;0
591 457  INIT_FCALL_BY_NAME/59     ?0        ?0                   408:'e72f42A93714BA87'	;0	<<589
592 457  DO_FCALL_BY_NAME/131      ?214      ?0                   ?0                  	;0
593 459  GOTO/253                  ?0        ?179                 ?410                	;0
594 461  ECHO/40                   ?0        411:'</h4>
				</div>
			</div>
		</div>     
		<div class="row">
			<div class="col-xl-12">
				' ?0                  	;0
595 462  ISSET_ISEMPTY_CV/197      #235=     16?0                 ?0                  	;33554432
596 462  BOOL_NOT/13               #236=     #235                 ?0                  	;0
597 462  JMPZ/43                   ?0        #236                 ?599                	;0	>>599
598 463  GOTO/253                  ?0        ?335                 ?412                	;0
599 465  ECHO/40                   ?0        413:'				'           ?0                  	;0	<<597
600 466  INIT_FCALL_BY_NAME/59     ?0        ?0                   414:'a6fCc34Ea39454A9'	;1
601 466  FETCH_DIM_FUNC_ARG/93     $237=     16?0                 416:'id'            	;1
602 466  SEND_VAR_EX/66            ?80       $237                 ?1                  	;0
603 466  DO_FCALL_BY_NAME/131      $238=     ?0                   ?0                  	;0
604 466  ASSIGN/38                 ?219      16?14                $238                	;0
605 467  FE_RESET_R/77             $240=     16?14                ?624                	;0
606 467  FE_FETCH_R/78             #241=     $240                 16?15               	;624	>>624	<<623
607 467  ASSIGN/38                 ?222      16?16                #241                	;0
608 468  ECHO/40                   ?0        417:'				<div class="alert alert-warning alert-dismissible fade show" role="alert">
					<button type="button" class="close" data-dismiss="alert" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
					<strong>' ?0                  	;0
609 469  FETCH_DIM_R/81            $243=     16?2                 418:'error_on_server'	;0
610 469  ECHO/40                   ?0        $243                 ?0                  	;0
611 470  ECHO/40                   ?0        419:' - '            ?0                  	;0
612 471  FETCH_DIM_R/81            $244=     16?7                 16?16               	;0
613 471  FETCH_DIM_R/81            $245=     $244                 420:'server_name'   	;0
614 471  ECHO/40                   ?0        $245                 ?0                  	;0
615 472  ECHO/40                   ?0        421:'</strong><br/>
					' ?0                  	;0
616 473  INIT_FCALL_BY_NAME/59     ?0        ?0                   422:'str_replace'   	;3
617 473  SEND_VAL_EX/116           ?80       424:'
'              ?1                  	;0
618 473  SEND_VAL_EX/116           ?96       425:'<br/>'          ?2                  	;0
619 473  SEND_VAR_EX/66            ?112      16?15                ?3                  	;0
620 473  DO_FCALL_BY_NAME/131      $246=     ?0                   ?0                  	;0
621 473  ECHO/40                   ?0        $246                 ?0                  	;0
622 474  ECHO/40                   ?0        426:'				</div>
				' ?0                  	;0
623 475  JMP/42                    ?0        ?606                 ?0                  	;0	>>606
624 475  FE_FREE/127               ?0        $240                 ?0                  	;0	<<605
625 477  GOTO/253                  ?0        ?335                 ?427                	;0
626 479  ECHO/40                   ?0        428:'							<input type="hidden" name="series" value="' ?0                  	;0
627 480  FETCH_DIM_R/81            $247=     16?13                429:'id'            	;0
628 480  ECHO/40                   ?0        $247                 ?0                  	;0
629 481  ECHO/40                   ?0        430:'" />
							<input type="hidden" name="server_tree_data" id="server_tree_data" value="" />
                            <input type="hidden" id="tmdb_language" value="' ?0                  	;0
630 482  FETCH_DIM_R/81            $248=     16?13                431:'tmdb_language' 	;0
631 482  ECHO/40                   ?0        $248                 ?0                  	;0
632 483  ECHO/40                   ?0        432:'" />
							<div id="basicwizard">
								<ul class="nav nav-pills bg-light nav-justified form-wizard-header mb-4">
									<li class="nav-item">
										<a href="#stream-details" data-toggle="tab" class="nav-link rounded-0 pt-2 pb-2"> 
											<i class="mdi mdi-account-card-details-outline mr-1"></i>
											<span class="d-none d-sm-inline">' ?0                  	;0
633 484  GOTO/253                  ?0        ?215                 ?433                	;0
634 486  ECHO/40                   ?0        434:'</a>
											</li>
										</ul>
									</div>
									' ?0                  	;0
635 488  ECHO/40                   ?0        435:'									<div class="tab-pane" id="episode-information">
										<div class="row">
											<div class="col-12">
												<div class="form-group row mb-4">
													<label class="col-md-4 col-form-label" for="movie_image">' ?0                  	;0
636 489  FETCH_DIM_R/81            $249=     16?2                 436:'image_url'     	;0
637 489  ECHO/40                   ?0        $249                 ?0                  	;0
638 490  ECHO/40                   ?0        437:'</label>
													<div class="col-md-8 input-group">
														<input type="text" class="form-control" id="movie_image" name="movie_image" value="' ?0                  	;0
639 491  GOTO/253                  ?0        ?791                 ?438                	;0
640 493  ECHO/40                   ?0        439:'</label>
													<div class="col-md-6">
														<input type="text" class="form-control" id="series_name" name="series_name" value="' ?0                  	;0
641 494  FETCH_DIM_R/81            $250=     16?13                440:'title'         	;0
642 494  ECHO/40                   ?0        $250                 ?0                  	;0
643 495  ECHO/40                   ?0        441:'" readonly>
													</div>
													<div class="col-md-2">
														<input type="text" class="form-control text-center" id="season_num" name="season_num" placeholder="Season" value="" required data-parsley-trigger="change">
													</div>
												</div>
												<div class="form-group row mb-4 stream-url">
													<label class="col-md-4 col-form-label" for="season_folder">' ?0                  	;0
644 496  FETCH_DIM_R/81            $251=     16?2                 442:'season_folder' 	;0
645 496  ECHO/40                   ?0        $251                 ?0                  	;0
646 497  ECHO/40                   ?0        443:'</label>
													<div class="col-md-8 input-group">
														<input type="text" id="season_folder" name="season_folder" readonly class="form-control" value="" required data-parsley-trigger="change">
														<div class="input-group-append">
															<a href="#file-browser" id="filebrowser" class="btn btn-primary waves-effect waves-light"><i class="mdi mdi-folder-open-outline"></i></a>
														</div>
													</div>
												</div>
												<div id="episode_add"></div>
												<div class="form-group row mb-4">
													<div class="col-md-6">
														<div class="custom-control custom-checkbox">
															<input type="checkbox" class="custom-control-input" id="addName1" name="addName1" checked>
															<label class="custom-control-label" for="addName1">' ?0                  	;0
647 498  GOTO/253                  ?0        ?509                 ?444                	;0
648 500  FETCH_DIM_R/81            $252=     16?2                 445:'episode_tooltip_4'	;0
649 500  ECHO/40                   ?0        $252                 ?0                  	;0
650 501  ECHO/40                   ?0        446:'" class="tooltip text-secondary far fa-circle"></i></label>
													<div class="col-md-2">
														<select name="target_container" id="target_container" class="form-control" data-toggle="select2">
															' ?0                  	;0
651 502  FE_RESET_R/77             $253=     447:array (
  0 => 'mp4',
  1 => 'mkv',
  2 => 'avi',
  3 => 'mpg',
  4 => 'flv',
  5 => '3gp',
  6 => 'm4v',
  7 => 'wmv',
  8 => 'mov',
  9 => 'ts',
) ?680                	;0
652 502  FE_FETCH_R/78             ?0        $253                 16?17               	;680	>>680	<<679
653 503  NOP/0                     ?0        ?0                   ?0                  	;1
654 503  GOTO/253                  ?0        ?658                 ?448                	;0
655 505  ECHO/40                   ?0        449:'</option>
															' ?0                  	;0
656 507  NOP/0                     ?0        ?0                   ?0                  	;1
657 507  GOTO/253                  ?0        ?679                 ?450                	;0
658 509  ECHO/40                   ?0        451:'															<option ' ?0                  	;0
659 510  ISSET_ISEMPTY_CV/197      #254=     16?0                 ?0                  	;33554432
660 510  BOOL_NOT/13               #255=     #254                 ?0                  	;0
661 510  JMPZ/43                   ?0        #255                 ?664                	;0	>>664
662 511  NOP/0                     ?0        ?0                   ?0                  	;1
663 511  GOTO/253                  ?0        ?673                 ?452                	;0
664 513  FETCH_DIM_R/81            $256=     16?0                 453:'target_container'	;0	<<661
665 513  IS_EQUAL/17               #257=     $256                 16?17               	;0
666 513  BOOL_NOT/13               #258=     #257                 ?0                  	;0
667 513  JMPZ/43                   ?0        #258                 ?670                	;0	>>670
668 514  NOP/0                     ?0        ?0                   ?0                  	;1
669 514  GOTO/253                  ?0        ?671                 ?454                	;0
670 516  ECHO/40                   ?0        455:'selected '      ?0                  	;0	<<667
671 518  NOP/0                     ?0        ?0                   ?0                  	;1
672 518  GOTO/253                  ?0        ?673                 ?456                	;0
673 521  ECHO/40                   ?0        457:'value="'        ?0                  	;0
674 522  ECHO/40                   ?0        16?17                ?0                  	;0
675 523  ECHO/40                   ?0        458:'">'             ?0                  	;0
676 524  ECHO/40                   ?0        16?17                ?0                  	;0
677 525  NOP/0                     ?0        ?0                   ?0                  	;1
678 525  GOTO/253                  ?0        ?655                 ?459                	;0
679 526  JMP/42                    ?0        ?652                 ?0                  	;0	>>652
680 526  FE_FREE/127               ?0        $253                 ?0                  	;0	<<651
681 529  ECHO/40                   ?0        460:'														</select>
													</div>
													<label class="col-md-4 col-form-label" for="custom_sid">' ?0                  	;0
682 530  GOTO/253                  ?0        ?780                 ?461                	;0
683 532  ECHO/40                   ?0        462:'							</div> 
						</div>
					</div> 
				</div> 
			</div> 
		</div>
	</div>
</div>
' ?0                  	;0
684 533  GOTO/253                  ?0        ?906                 ?463                	;0
685 535  FETCH_DIM_R/81            $259=     16?2                 464:'servers'       	;0
686 535  ECHO/40                   ?0        $259                 ?0                  	;0
687 536  ECHO/40                   ?0        465:'</span>
										</a>
									</li>
								</ul>
								<div class="tab-content b-0 mb-0 pt-0">
									' ?0                  	;0
688 537  ISSET_ISEMPTY_CV/197      #260=     16?3                 ?0                  	;33554432
689 537  BOOL_NOT/13               #261=     #260                 ?0                  	;0
690 537  JMPZ/43                   ?0        #261                 ?692                	;0	>>692
691 538  GOTO/253                  ?0        ?247                 ?466                	;0
692 540  ECHO/40                   ?0        467:'									<div class="tab-pane" id="stream-details">
										<div class="row">
											<div class="col-12">
												<div class="form-group row mb-4">
													<label class="col-md-4 col-form-label" for="series_name">' ?0                  	;0	<<690
693 541  FETCH_DIM_R/81            $262=     16?2                 468:'series_name'   	;0
694 541  ECHO/40                   ?0        $262                 ?0                  	;0
695 542  GOTO/253                  ?0        ?640                 ?469                	;0
696 546  ECHO/40                   ?0        470:'data-plugin="switchery" class="js-switch" data-color="#039cfd"/>
													</div>
												</div>
												<div class="form-group row mb-4">
                                                    <label class="col-md-4 col-form-label" for="read_native">' ?0                  	;0
697 547  FETCH_DIM_R/81            $263=     16?2                 471:'native_frames' 	;0
698 547  ECHO/40                   ?0        $263                 ?0                  	;0
699 548  ECHO/40                   ?0        472:'</label>
													<div class="col-md-2">
														<input name="read_native" id="read_native" type="checkbox" ' ?0                  	;0
700 549  GOTO/253                  ?0        ?394                 ?473                	;0
701 551  ISSET_ISEMPTY_CV/197      #264=     16?0                 ?0                  	;33554432
702 551  BOOL_NOT/13               #265=     #264                 ?0                  	;0
703 551  JMPZ/43                   ?0        #265                 ?705                	;0	>>705
704 552  GOTO/253                  ?0        ?299                 ?474                	;0
705 554  INIT_FCALL_BY_NAME/59     ?0        ?0                   475:'json_decode'   	;2	<<703
706 554  FETCH_DIM_FUNC_ARG/93     $266=     16?0                 477:'movie_subtitles'	;1
707 554  SEND_VAR_EX/66            ?80       $266                 ?1                  	;0
708 554  SEND_VAL_EX/116           ?96       478:true             ?2                  	;0
709 554  DO_FCALL_BY_NAME/131      $267=     ?0                   ?0                  	;0
710 554  ASSIGN/38                 ?248      16?18                $267                	;0
711 555  ISSET_ISEMPTY_DIM_OBJ/115 #269=     16?18                479:'location'      	;33554432
712 555  BOOL_NOT/13               #270=     #269                 ?0                  	;0
713 555  JMPZ/43                   ?0        #270                 ?715                	;0	>>715
714 556  GOTO/253                  ?0        ?722                 ?480                	;0
715 558  FETCH_DIM_R/81            $271=     16?18                481:'location'      	;0	<<713
716 558  CONCAT/8                  #272=     482:'s:'             $271                	;0
717 558  CONCAT/8                  #273=     #272                 483:':'             	;0
718 558  FETCH_DIM_R/81            $274=     16?18                484:'files'         	;0
719 558  FETCH_DIM_R/81            $275=     $274                 485:0               	;0
720 558  CONCAT/8                  #276=     #273                 $275                	;0
721 558  ASSIGN/38                 ?257      16?4                 #276                	;0
722 560  GOTO/253                  ?0        ?299                 ?486                	;0
723 562  ISSET_ISEMPTY_CV/197      #278=     16?0                 ?0                  	;33554432
724 562  BOOL_NOT/13               #279=     #278                 ?0                  	;0
725 562  JMPZ/43                   ?0        #279                 ?727                	;0	>>727
726 563  GOTO/253                  ?0        ?733                 ?487                	;0
727 565  FETCH_DIM_R/81            $280=     16?0                 488:'movie_symlink' 	;0	<<725
728 565  IS_EQUAL/17               #281=     $280                 489:1               	;0
729 565  BOOL_NOT/13               #282=     #281                 ?0                  	;0
730 565  JMPZ/43                   ?0        #282                 ?732                	;0	>>732
731 566  GOTO/253                  ?0        ?733                 ?490                	;0
732 568  ECHO/40                   ?0        491:'checked '       ?0                  	;0	<<730
733 571  GOTO/253                  ?0        ?18                  ?492                	;0
734 574  INIT_FCALL_BY_NAME/59     ?0        ?0                   493:'A2297542D8bD35F6'	;1
735 574  FETCH_STATIC_PROP_FUNC_ARG/177 $283=     495:'rRequest'       496:'XUI'           	;1
736 574  FETCH_DIM_FUNC_ARG/93     $284=     $283                 498:'sid'           	;1
737 574  SEND_VAR_EX/66            ?80       $284                 ?1                  	;0
738 574  DO_FCALL_BY_NAME/131      $285=     ?0                   ?0                  	;0
739 574  ASSIGN/38                 $286=     16?13                $285                	;0
740 574  JMPZ/43                   ?0        $286                 ?742                	;0	>>742
741 575  GOTO/253                  ?0        ?744                 ?499                	;0
742 577  INIT_FCALL_BY_NAME/59     ?0        ?0                   500:'E72f42A93714bA87'	;0	<<740
743 577  DO_FCALL_BY_NAME/131      ?267      ?0                   ?0                  	;0
744 579  FETCH_STATIC_PROP_IS/176  $288=     502:'rRequest'       503:'XUI'           	;0
745 579  ISSET_ISEMPTY_DIM_OBJ/115 #289=     $288                 505:'id'            	;33554432
746 579  BOOL_NOT/13               #290=     #289                 ?0                  	;0
747 579  JMPZ/43                   ?0        #290                 ?749                	;0	>>749
748 580  GOTO/253                  ?0        ?485                 ?506                	;0
749 582  GOTO/253                  ?0        ?469                 ?507                	;0	<<747
750 584  ECHO/40                   ?0        508:'">
													</div>
													<label class="col-md-2 col-form-label" for="episode_run_time">' ?0                  	;0
751 585  FETCH_DIM_R/81            $291=     16?2                 509:'runtime'       	;0
752 585  ECHO/40                   ?0        $291                 ?0                  	;0
753 586  ECHO/40                   ?0        510:'</label>
													<div class="col-md-3">
														<input type="text" class="form-control text-center" id="episode_run_time" name="episode_run_time" value="' ?0                  	;0
754 587  ISSET_ISEMPTY_CV/197      #292=     16?0                 ?0                  	;33554432
755 587  BOOL_NOT/13               #293=     #292                 ?0                  	;0
756 587  JMPZ/43                   ?0        #293                 ?758                	;0	>>758
757 588  GOTO/253                  ?0        ?435                 ?511                	;0
758 590  INIT_FCALL_BY_NAME/59     ?0        ?0                   512:'intval'        	;1	<<756
759 590  FETCH_DIM_R/81            $294=     16?0                 514:'properties'    	;0
760 590  FETCH_DIM_R/81            $295=     $294                 515:'duration_secs' 	;0
761 590  DIV/4                     #296=     $295                 516:60.0            	;0
762 590  SEND_VAL_EX/116           ?80       #296                 ?1                  	;0
763 590  DO_FCALL_BY_NAME/131      $297=     ?0                   ?0                  	;0
764 590  ECHO/40                   ?0        $297                 ?0                  	;0
765 591  GOTO/253                  ?0        ?435                 ?517                	;0
766 593  INIT_FCALL_BY_NAME/59     ?0        ?0                   518:'strlen'        	;1
767 593  FETCH_STATIC_PROP_FUNC_ARG/177 $298=     520:'rSettings'      521:'XUI'           	;1
768 593  FETCH_DIM_FUNC_ARG/93     $299=     $298                 523:'tmdb_api_key'  	;1
769 593  SEND_VAR_EX/66            ?80       $299                 ?1                  	;0
770 593  DO_FCALL_BY_NAME/131      $300=     ?0                   ?0                  	;0
771 593  IS_SMALLER/19             #301=     524:0                $300                	;0
772 593  BOOL_NOT/13               #302=     #301                 ?0                  	;0
773 593  JMPZ/43                   ?0        #302                 ?775                	;0	>>775
774 594  GOTO/253                  ?0        ?779                 ?525                	;0
775 596  ECHO/40                   ?0        526:'												<div class="form-group row mb-4">
													<label class="col-md-4 col-form-label" for="tmdb_search">' ?0                  	;0	<<773
776 597  FETCH_DIM_R/81            $303=     16?2                 527:'tmdb_results'  	;0
777 597  ECHO/40                   ?0        $303                 ?0                  	;0
778 598  ECHO/40                   ?0        528:'</label>
													<div class="col-md-8">
														<select id="tmdb_search" class="form-control" data-toggle="select2"></select>
													</div>
												</div>
												' ?0                  	;0
779 600  GOTO/253                  ?0        ?405                 ?529                	;0
780 602  FETCH_DIM_R/81            $304=     16?2                 530:'custom_channel_sid'	;0
781 602  ECHO/40                   ?0        $304                 ?0                  	;0
782 603  ECHO/40                   ?0        531:' <i title="'    ?0                  	;0
783 604  FETCH_DIM_R/81            $305=     16?2                 532:'episode_tooltip_5'	;0
784 604  ECHO/40                   ?0        $305                 ?0                  	;0
785 605  ECHO/40                   ?0        533:'" class="tooltip text-secondary far fa-circle"></i></label>
													<div class="col-md-2">
														<input type="text" class="form-control" id="custom_sid" name="custom_sid" value="' ?0                  	;0
786 606  ISSET_ISEMPTY_CV/197      #306=     16?0                 ?0                  	;33554432
787 606  BOOL_NOT/13               #307=     #306                 ?0                  	;0
788 606  JMPZ/43                   ?0        #307                 ?790                	;0	>>790
789 607  GOTO/253                  ?0        ?73                  ?534                	;0
790 609  GOTO/253                  ?0        ?68                  ?535                	;0	<<788
791 611  ISSET_ISEMPTY_CV/197      #308=     16?0                 ?0                  	;33554432
792 611  BOOL_NOT/13               #309=     #308                 ?0                  	;0
793 611  JMPZ/43                   ?0        #309                 ?795                	;0	>>795
794 612  GOTO/253                  ?0        ?801                 ?536                	;0
795 614  INIT_FCALL_BY_NAME/59     ?0        ?0                   537:'htmlspecialchars'	;1	<<793
796 614  FETCH_DIM_FUNC_ARG/93     $310=     16?0                 539:'properties'    	;1
797 614  FETCH_DIM_FUNC_ARG/93     $311=     $310                 540:'movie_image'   	;1
798 614  SEND_VAR_EX/66            ?80       $311                 ?1                  	;0
799 614  DO_FCALL_BY_NAME/131      $312=     ?0                   ?0                  	;0
800 614  ECHO/40                   ?0        $312                 ?0                  	;0
801 616  ECHO/40                   ?0        541:'">
														<div class="input-group-append">
															<a href="javascript:void(0)" onClick="openImage(this)" class="btn btn-primary waves-effect waves-light"><i class="mdi mdi-eye"></i></a>
														</div>
													</div>
												</div>
												<div class="form-group row mb-4">
													<label class="col-md-4 col-form-label" for="plot">' ?0                  	;0
802 617  FETCH_DIM_R/81            $313=     16?2                 542:'plot'          	;0
803 617  ECHO/40                   ?0        $313                 ?0                  	;0
804 618  GOTO/253                  ?0        ?232                 ?543                	;0
805 620  ECHO/40                   ?0        544:'</label>
													<div class="col-md-2">
														<input type="text" class="form-control text-center" id="episode" name="episode" placeholder="" value="' ?0                  	;0
806 621  ISSET_ISEMPTY_CV/197      #314=     16?0                 ?0                  	;33554432
807 621  BOOL_NOT/13               #315=     #314                 ?0                  	;0
808 621  JMPZ/43                   ?0        #315                 ?810                	;0	>>810
809 622  GOTO/253                  ?0        ?815                 ?545                	;0
810 624  INIT_FCALL_BY_NAME/59     ?0        ?0                   546:'htmlspecialchars'	;1	<<808
811 624  FETCH_DIM_FUNC_ARG/93     $316=     16?0                 548:'episode'       	;1
812 624  SEND_VAR_EX/66            ?80       $316                 ?1                  	;0
813 624  DO_FCALL_BY_NAME/131      $317=     ?0                   ?0                  	;0
814 624  ECHO/40                   ?0        $317                 ?0                  	;0
815 626  ECHO/40                   ?0        549:'" required data-parsley-trigger="change">
													</div>
												</div>
												' ?0                  	;0
816 627  GOTO/253                  ?0        ?766                 ?550                	;0
817 629  ECHO/40                   ?0        551:'" class="tooltip text-secondary far fa-circle"></i></label>
													<div class="col-md-2">
														<input name="direct_source" id="direct_source" type="checkbox" ' ?0                  	;0
818 630  ISSET_ISEMPTY_CV/197      #318=     16?0                 ?0                  	;33554432
819 630  BOOL_NOT/13               #319=     #318                 ?0                  	;0
820 630  JMPZ/43                   ?0        #319                 ?822                	;0	>>822
821 631  GOTO/253                  ?0        ?257                 ?552                	;0
822 633  FETCH_DIM_R/81            $320=     16?0                 553:'direct_source' 	;0	<<820
823 633  IS_EQUAL/17               #321=     $320                 554:1               	;0
824 633  BOOL_NOT/13               #322=     #321                 ?0                  	;0
825 633  JMPZ/43                   ?0        #322                 ?827                	;0	>>827
826 634  GOTO/253                  ?0        ?828                 ?555                	;0
827 636  ECHO/40                   ?0        556:'checked '       ?0                  	;0	<<825
828 638  GOTO/253                  ?0        ?257                 ?557                	;0
829 640  ISSET_ISEMPTY_CV/197      #323=     16?0                 ?0                  	;33554432
830 640  BOOL_NOT/13               #324=     #323                 ?0                  	;0
831 640  JMPZ/43                   ?0        #324                 ?833                	;0	>>833
832 641  GOTO/253                  ?0        ?839                 ?558                	;0
833 643  INIT_FCALL_BY_NAME/59     ?0        ?0                   559:'htmlspecialchars'	;1	<<831
834 643  FETCH_DIM_FUNC_ARG/93     $325=     16?0                 561:'properties'    	;1
835 643  FETCH_DIM_FUNC_ARG/93     $326=     $325                 562:'tmdb_id'       	;1
836 643  SEND_VAR_EX/66            ?80       $326                 ?1                  	;0
837 643  DO_FCALL_BY_NAME/131      $327=     ?0                   ?0                  	;0
838 643  ECHO/40                   ?0        $327                 ?0                  	;0
839 645  ECHO/40                   ?0        563:'" />
							'   ?0                  	;0
840 647  GOTO/253                  ?0        ?626                 ?564                	;0
841 649  FETCH_DIM_R/81            $328=     16?2                 565:'release_date'  	;0
842 649  ECHO/40                   ?0        $328                 ?0                  	;0
843 650  ECHO/40                   ?0        566:'</label>
													<div class="col-md-3">
														<input type="text" class="form-control text-center" id="release_date" name="release_date" value="' ?0                  	;0
844 651  ISSET_ISEMPTY_CV/197      #329=     16?0                 ?0                  	;33554432
845 651  BOOL_NOT/13               #330=     #329                 ?0                  	;0
846 651  JMPZ/43                   ?0        #330                 ?848                	;0	>>848
847 652  GOTO/253                  ?0        ?854                 ?567                	;0
848 654  INIT_FCALL_BY_NAME/59     ?0        ?0                   568:'htmlspecialchars'	;1	<<846
849 654  FETCH_DIM_FUNC_ARG/93     $331=     16?0                 570:'properties'    	;1
850 654  FETCH_DIM_FUNC_ARG/93     $332=     $331                 571:'release_date'  	;1
851 654  SEND_VAR_EX/66            ?80       $332                 ?1                  	;0
852 654  DO_FCALL_BY_NAME/131      $333=     ?0                   ?0                  	;0
853 654  ECHO/40                   ?0        $333                 ?0                  	;0
854 656  GOTO/253                  ?0        ?750                 ?572                	;0
855 659  ECHO/40                   ?0        573:'">
														<div class="input-group-append">
															<a href="#file-browser" id="filebrowser-sub" class="btn btn-primary waves-effect waves-light"><i class="mdi mdi-folder-open-outline"></i></a>
														</div>
													</div>
												</div>
												' ?0                  	;0
856 661  ECHO/40                   ?0        574:'												<div class="form-group row mb-4">
													<label class="col-md-4 col-form-label" for="transcode_profile_id">' ?0                  	;0
857 662  FETCH_DIM_R/81            $334=     16?2                 575:'transcoding_profile'	;0
858 662  ECHO/40                   ?0        $334                 ?0                  	;0
859 663  GOTO/253                  ?0        ?51                  ?576                	;0
860 665  ECHO/40                   ?0        577:'</option>
															' ?0                  	;0
861 666  INIT_FCALL_BY_NAME/59     ?0        ?0                   578:'f93e9343C3d7fd99'	;0
862 666  DO_FCALL_BY_NAME/131      $335=     ?0                   ?0                  	;0
863 666  FE_RESET_R/77             $336=     $335                 ?901                	;0
864 666  FE_FETCH_R/78             ?0        $336                 16?19               	;901	>>901	<<900
865 667  NOP/0                     ?0        ?0                   ?0                  	;1
866 667  GOTO/253                  ?0        ?867                 ?580                	;0
867 669  ECHO/40                   ?0        581:'															<option ' ?0                  	;0
868 670  ISSET_ISEMPTY_CV/197      #337=     16?0                 ?0                  	;33554432
869 670  BOOL_NOT/13               #338=     #337                 ?0                  	;0
870 670  JMPZ/43                   ?0        #338                 ?873                	;0	>>873
871 671  NOP/0                     ?0        ?0                   ?0                  	;1
872 671  GOTO/253                  ?0        ?889                 ?582                	;0
873 673  INIT_FCALL_BY_NAME/59     ?0        ?0                   583:'intval'        	;1	<<870
874 673  FETCH_DIM_FUNC_ARG/93     $339=     16?0                 585:'transcode_profile_id'	;1
875 673  SEND_VAR_EX/66            ?80       $339                 ?1                  	;0
876 673  DO_FCALL_BY_NAME/131      $340=     ?0                   ?0                  	;0
877 673  INIT_FCALL_BY_NAME/59     ?0        ?0                   586:'intval'        	;1
878 673  FETCH_DIM_FUNC_ARG/93     $341=     16?19                588:'profile_id'    	;1
879 673  SEND_VAR_EX/66            ?80       $341                 ?1                  	;0
880 673  DO_FCALL_BY_NAME/131      $342=     ?0                   ?0                  	;0
881 673  IS_EQUAL/17               #343=     $340                 $342                	;0
882 673  BOOL_NOT/13               #344=     #343                 ?0                  	;0
883 673  JMPZ/43                   ?0        #344                 ?886                	;0	>>886
884 674  NOP/0                     ?0        ?0                   ?0                  	;1
885 674  GOTO/253                  ?0        ?887                 ?589                	;0
886 676  ECHO/40                   ?0        590:'selected '      ?0                  	;0	<<883
887 678  NOP/0                     ?0        ?0                   ?0                  	;1
888 678  GOTO/253                  ?0        ?889                 ?591                	;0
889 681  ECHO/40                   ?0        592:'value="'        ?0                  	;0
890 682  FETCH_DIM_R/81            $345=     16?19                593:'profile_id'    	;0
891 682  ECHO/40                   ?0        $345                 ?0                  	;0
892 683  ECHO/40                   ?0        594:'">'             ?0                  	;0
893 684  FETCH_DIM_R/81            $346=     16?19                595:'profile_name'  	;0
894 684  ECHO/40                   ?0        $346                 ?0                  	;0
895 685  NOP/0                     ?0        ?0                   ?0                  	;1
896 685  GOTO/253                  ?0        ?897                 ?596                	;0
897 687  ECHO/40                   ?0        597:'</option>
															' ?0                  	;0
898 689  NOP/0                     ?0        ?0                   ?0                  	;1
899 689  GOTO/253                  ?0        ?900                 ?598                	;0
900 690  JMP/42                    ?0        ?864                 ?0                  	;0	>>864
901 690  FE_FREE/127               ?0        $336                 ?0                  	;0	<<863
902 693  ECHO/40                   ?0        599:'														</select>
													</div>
												</div>
											</div> 
										</div> 
										<ul class="list-inline wizard mb-0">
											<li class="prevb list-inline-item">
												<a href="javascript: void(0);" class="btn btn-secondary">' ?0                  	;0
903 694  FETCH_DIM_R/81            $347=     16?2                 600:'prev'          	;0
904 694  ECHO/40                   ?0        $347                 ?0                  	;0
905 695  GOTO/253                  ?0        ?35                  ?601                	;0
906 697  INCLUDE_OR_EVAL/73        ?328      602:'footer.php'     ?0                  	;2
907 698  NOP/0                     ?0        603:1                ?0                  	;4294967295
*/

?>
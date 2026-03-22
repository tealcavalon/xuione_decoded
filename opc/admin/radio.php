<?php


/*
#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
0   3    JMP/42                    ?0        ?640                 ?0                  	;0	>>640
1   5    FETCH_STATIC_PROP_IS/176  $18=      1:'rRequest'         2:'XUI'             	;0
2   5    ISSET_ISEMPTY_DIM_OBJ/115 #19=      $18                  4:'id'              	;33554432
3   5    BOOL_NOT/13               #20=      #19                  ?0                  	;0
4   5    JMPZ/43                   ?0        #20                  ?6                  	;0	>>6
5   6    GOTO/253                  ?0        ?497                 ?5                  	;0
6   8    INIT_FCALL_BY_NAME/59     ?0        ?0                   6:'F260b7A31F021E39'	;1	<<4
7   8    FETCH_STATIC_PROP_FUNC_ARG/177 $21=      8:'rRequest'         9:'XUI'             	;1
8   8    FETCH_DIM_FUNC_ARG/93     $22=      $21                  11:'id'             	;1
9   8    SEND_VAR_EX/66            ?80       $22                  ?1                  	;0
10  8    DO_FCALL_BY_NAME/131      $23=      ?0                   ?0                  	;0
11  8    ASSIGN/38                 ?6        16?0                 $23                 	;0
12  9    BOOL_NOT/13               #25=      16?0                 ?0                  	;0
13  9    JMPNZ_EX/47               #25=      #25                  ?17                 	;0	>>17
14  9    FETCH_DIM_R/81            $26=      16?0                 12:'type'           	;0
15  9    IS_NOT_EQUAL/18           #27=      $26                  13:4                	;0
16  9    BOOL/52                   #25=      #27                  ?0                  	;0
17  9    BOOL_NOT/13               #28=      #25                  ?0                  	;0	<<13
18  9    JMPZ/43                   ?0        #28                  ?20                 	;0	>>20
19  10   GOTO/253                  ?0        ?22                  ?14                 	;0
20  12   INIT_FCALL_BY_NAME/59     ?0        ?0                   15:'e72F42A93714BA87'	;0	<<18
21  12   DO_FCALL_BY_NAME/131      ?11       ?0                   ?0                  	;0
22  14   GOTO/253                  ?0        ?497                 ?17                 	;0
23  16   ISSET_ISEMPTY_DIM_OBJ/115 #30=      16?0                 18:'id'             	;33554432
24  16   BOOL_NOT/13               #31=      #30                  ?0                  	;0
25  16   JMPZ/43                   ?0        #31                  ?27                 	;0	>>27
26  17   GOTO/253                  ?0        ?31                  ?19                 	;0
27  19   ECHO/40                   ?0        20:'							<input type="hidden" name="edit" value="' ?0                  	;0	<<25
28  20   FETCH_DIM_R/81            $32=      16?0                 21:'id'             	;0
29  20   ECHO/40                   ?0        $32                  ?0                  	;0
30  21   ECHO/40                   ?0        22:'" />
							'    ?0                  	;0
31  23   GOTO/253                  ?0        ?435                 ?23                 	;0
32  25   ECHO/40                   ?0        24:'</label>
													<div class="col-md-8 input-group">
														<input type="text" id="stream_source" name="stream_source[]" class="form-control" value="' ?0                  	;0
33  26   ISSET_ISEMPTY_CV/197      #33=      16?0                 ?0                  	;33554432
34  26   BOOL_NOT/13               #34=      #33                  ?0                  	;0
35  26   JMPZ/43                   ?0        #34                  ?37                 	;0	>>37
36  27   GOTO/253                  ?0        ?48                  ?25                 	;0
37  29   INIT_FCALL_BY_NAME/59     ?0        ?0                   26:'htmlspecialchars'	;1	<<35
38  29   INIT_FCALL_BY_NAME/59     ?0        ?0                   28:'json_decode'    	;2
39  29   FETCH_DIM_FUNC_ARG/93     $35=      16?0                 30:'stream_source'  	;1
40  29   SEND_VAR_EX/66            ?80       $35                  ?1                  	;0
41  29   SEND_VAL_EX/116           ?96       31:true              ?2                  	;0
42  29   DO_FCALL_BY_NAME/131      $36=      ?0                   ?0                  	;0
43  29   SEPARATE/156              $36=      $36                  ?0                  	;0
44  29   FETCH_DIM_FUNC_ARG/93     $37=      $36                  32:0                	;1
45  29   SEND_VAR_EX/66            ?80       $37                  ?1                  	;0
46  29   DO_FCALL_BY_NAME/131      $38=      ?0                   ?0                  	;0
47  29   ECHO/40                   ?0        $38                  ?0                  	;0
48  31   ECHO/40                   ?0        33:'">
													</div>
												</div>
												<div class="form-group row mb-4">
													<label class="col-md-4 col-form-label" for="category_id">Categories</label>
													<div class="col-md-8">
														<select name="category_id[]" id="category_id" class="form-control select2-multiple" data-toggle="select2" multiple="multiple" data-placeholder="Choose...">
															' ?0                  	;0
49  32   GOTO/253                  ?0        ?366                 ?34                 	;0
50  34   ISSET_ISEMPTY_CV/197      #39=      16?0                 ?0                  	;33554432
51  34   BOOL_NOT/13               #40=      #39                  ?0                  	;0
52  34   JMPZ/43                   ?0        #40                  ?54                 	;0	>>54
53  35   GOTO/253                  ?0        ?59                  ?35                 	;0
54  37   INIT_FCALL_BY_NAME/59     ?0        ?0                   36:'htmlspecialchars'	;1	<<52
55  37   FETCH_DIM_FUNC_ARG/93     $41=      16?0                 38:'stream_icon'    	;1
56  37   SEND_VAR_EX/66            ?80       $41                  ?1                  	;0
57  37   DO_FCALL_BY_NAME/131      $42=      ?0                   ?0                  	;0
58  37   ECHO/40                   ?0        $42                  ?0                  	;0
59  39   ECHO/40                   ?0        39:'">
														<div class="input-group-append">
															<a href="javascript:void(0)" onclick="openImage(this)" class="btn btn-primary waves-effect waves-light"><i class="mdi mdi-eye"></i></a>
														</div>
													</div>
												</div>
												<div class="form-group row mb-4 stream-url">
													<label class="col-md-4 col-form-label" for="stream_source">' ?0                  	;0
60  40   FETCH_DIM_R/81            $43=      16?1                 40:'station_url'    	;0
61  40   ECHO/40                   ?0        $43                  ?0                  	;0
62  41   GOTO/253                  ?0        ?32                  ?41                 	;0
63  43   INCLUDE_OR_EVAL/73        ?26       42:'header.php'      ?0                  	;2
64  44   ECHO/40                   ?0        43:'<div class="wrapper boxed-layout"' ?0                  	;0
65  45   FETCH_IS/89               $45=      44:'_SERVER'         ?0                  	;0
66  45   ISSET_ISEMPTY_DIM_OBJ/115 #46=      $45                  45:'HTTP_X_REQUESTED_WITH'	;16777216
67  45   BOOL_NOT/13               #47=      #46                  ?0                  	;0
68  45   JMPZ_EX/46                #47=      #47                  ?76                 	;0	>>76
69  45   INIT_FCALL_BY_NAME/59     ?0        ?0                   46:'strtolower'     	;1
70  45   FETCH_FUNC_ARG/92         $48=      48:'_SERVER'         ?0                  	;1
71  45   FETCH_DIM_FUNC_ARG/93     $49=      $48                  49:'HTTP_X_REQUESTED_WITH'	;1
72  45   SEND_VAR_EX/66            ?80       $49                  ?1                  	;0
73  45   DO_FCALL_BY_NAME/131      $50=      ?0                   ?0                  	;0
74  45   IS_EQUAL/17               #51=      $50                  50:'xmlhttprequest' 	;0
75  45   BOOL/52                   #47=      #51                  ?0                  	;0
76  45   BOOL_NOT/13               #52=      #47                  ?0                  	;0	<<68
77  45   JMPZ/43                   ?0        #52                  ?79                 	;0	>>79
78  46   GOTO/253                  ?0        ?80                  ?51                 	;0
79  48   ECHO/40                   ?0        52:' style="display: none;"' ?0                  	;0	<<77
80  50   GOTO/253                  ?0        ?93                  ?53                 	;0
81  52   ECHO/40                   ?0        54:' <i title="In this field you can write your own custom FFmpeg command. Please note that this command will be placed after the input and before the output. If the command you will specify here is about to do changes in the output video or audio, it may require to transcode the stream. In this case, you have to use and change at least the Video/Audio Codecs using the transcoding attributes below. The custom FFmpeg command will only be used by the server(s) that take the stream from the Source." class="tooltip text-secondary far fa-circle"></i></label>
													<div class="col-md-8">
														<input type="text" class="form-control" id="custom_ffmpeg" name="custom_ffmpeg" value="' ?0                  	;0
82  53   ISSET_ISEMPTY_CV/197      #53=      16?0                 ?0                  	;33554432
83  53   BOOL_NOT/13               #54=      #53                  ?0                  	;0
84  53   JMPZ/43                   ?0        #54                  ?86                 	;0	>>86
85  54   GOTO/253                  ?0        ?91                  ?55                 	;0
86  56   INIT_FCALL_BY_NAME/59     ?0        ?0                   56:'htmlspecialchars'	;1	<<84
87  56   FETCH_DIM_FUNC_ARG/93     $55=      16?0                 58:'custom_ffmpeg'  	;1
88  56   SEND_VAR_EX/66            ?80       $55                  ?1                  	;0
89  56   DO_FCALL_BY_NAME/131      $56=      ?0                   ?0                  	;0
90  56   ECHO/40                   ?0        $56                  ?0                  	;0
91  58   ECHO/40                   ?0        59:'">
													</div>
													
												</div>
												<div class="form-group row mb-4">
													<label class="col-md-4 col-form-label" for="user_agent">' ?0                  	;0
92  59   GOTO/253                  ?0        ?518                 ?60                 	;0
93  61   ECHO/40                   ?0        61:'>
    <div class="container-fluid">
		<div class="row">
			<div class="col-12">
				<div class="page-title-box">
					<div class="page-title-right">
						<ol class="breadcrumb m-0">
							<li>
								<a href="./radios">
									<button type="button" class="btn btn-primary waves-effect waves-light btn-sm">
										' ?0                  	;0
94  62   FETCH_DIM_R/81            $57=      16?1                 62:'view_stations'  	;0
95  62   ECHO/40                   ?0        $57                  ?0                  	;0
96  63   ECHO/40                   ?0        63:'									</button>
								</a>
							</li>
						</ol>
					</div>
					<h4 class="page-title">' ?0                  	;0
97  64   ISSET_ISEMPTY_DIM_OBJ/115 #58=      16?0                 64:'id'             	;33554432
98  64   JMPZ/43                   ?0        #58                  ?100                	;0	>>100
99  65   GOTO/253                  ?0        ?418                 ?65                 	;0
100 67   FETCH_DIM_R/81            $59=      16?1                 66:'add_radio_station'	;0	<<98
101 67   ECHO/40                   ?0        $59                  ?0                  	;0
102 68   GOTO/253                  ?0        ?417                 ?67                 	;0
103 70   ECHO/40                   ?0        68:'checked '        ?0                  	;0
104 73   ECHO/40                   ?0        69:'data-plugin="switchery" class="js-switch" data-color="#039cfd"/>
													</div>
                                                    <label class="col-md-4 col-form-label" for="probesize_ondemand">' ?0                  	;0
105 74   FETCH_DIM_R/81            $60=      16?1                 70:'on_demand_probesize'	;0
106 74   ECHO/40                   ?0        $60                  ?0                  	;0
107 75   GOTO/253                  ?0        ?108                 ?71                 	;0
108 77   ECHO/40                   ?0        72:' <i title="Adjustable probesize for ondemand streams. Adjust this setting if you experience issues with no audio." class="tooltip text-secondary far fa-circle"></i></label>
													<div class="col-md-2">
														<input type="text" class="form-control" id="probesize_ondemand" name="probesize_ondemand" value="' ?0                  	;0
109 78   ISSET_ISEMPTY_CV/197      #61=      16?0                 ?0                  	;33554432
110 78   JMPZ/43                   ?0        #61                  ?112                	;0	>>112
111 79   GOTO/253                  ?0        ?114                 ?73                 	;0
112 81   ECHO/40                   ?0        74:'128000'          ?0                  	;0	<<110
113 82   GOTO/253                  ?0        ?635                 ?75                 	;0
114 84   GOTO/253                  ?0        ?630                 ?76                 	;0
115 86   GOTO/253                  ?0        ?118                 ?77                 	;0
116 88   FETCH_DIM_R/81            $62=      16?1                 78:'restart_on_edit'	;0
117 88   ECHO/40                   ?0        $62                  ?0                  	;0
118 90   ECHO/40                   ?0        79:'</label>
													<div class="col-md-2">
														<input name="restart_on_edit" id="restart_on_edit" type="checkbox" data-plugin="switchery" class="js-switch" data-color="#039cfd"/>
													</div>
												</div>
											</div> 
										</div> 
										<ul class="list-inline wizard mb-0">
											<li class="prevb list-inline-item">
												<a href="javascript: void(0);" class="btn btn-secondary">' ?0                  	;0
119 91   GOTO/253                  ?0        ?288                 ?80                 	;0
120 93   FETCH_DIM_R/81            $63=      16?1                 81:'auto_restart'   	;0
121 93   ECHO/40                   ?0        $63                  ?0                  	;0
122 94   ECHO/40                   ?0        82:'</span>
										</a>
									</li>
									<li class="nav-item">
										<a href="#load-balancing" data-toggle="tab" class="nav-link rounded-0 pt-2 pb-2">
											<i class="mdi mdi-server-network mr-1"></i>
											<span class="d-none d-sm-inline">' ?0                  	;0
123 95   FETCH_DIM_R/81            $64=      16?1                 83:'servers'        	;0
124 95   ECHO/40                   ?0        $64                  ?0                  	;0
125 96   ECHO/40                   ?0        84:'</span>
										</a>
									</li>
								</ul>
								<div class="tab-content b-0 mb-0 pt-0">
									<div class="tab-pane" id="stream-details">
										<div class="row">
											<div class="col-12">
												<div class="form-group row mb-4">
													<label class="col-md-4 col-form-label" for="stream_display_name">' ?0                  	;0
126 97   FETCH_DIM_R/81            $65=      16?1                 85:'station_name'   	;0
127 97   ECHO/40                   ?0        $65                  ?0                  	;0
128 98   GOTO/253                  ?0        ?448                 ?86                 	;0
129 100  INIT_FCALL_BY_NAME/59     ?0        ?0                   87:'htmlspecialchars'	;1
130 100  FETCH_DIM_FUNC_ARG/93     $66=      16?2                 89:2                	;1
131 100  FETCH_DIM_FUNC_ARG/93     $67=      $66                  90:'value'          	;1
132 100  SEND_VAR_EX/66            ?80       $67                  ?1                  	;0
133 100  DO_FCALL_BY_NAME/131      $68=      ?0                   ?0                  	;0
134 100  ECHO/40                   ?0        $68                  ?0                  	;0
135 102  ECHO/40                   ?0        91:'">
													</div>
												</div>
												<div class="form-group row mb-4">
													<label class="col-md-4 col-form-label" for="cookie">' ?0                  	;0
136 103  FETCH_DIM_R/81            $69=      16?1                 92:'cookie'         	;0
137 103  ECHO/40                   ?0        $69                  ?0                  	;0
138 104  ECHO/40                   ?0        93:' <i title="Format: key=value;" class="tooltip text-secondary far fa-circle"></i></label>
													<div class="col-md-8">
														<input type="text" class="form-control" id="cookie" name="cookie" value="' ?0                  	;0
139 105  GOTO/253                  ?0        ?613                 ?94                 	;0
140 108  INIT_FCALL_BY_NAME/59     ?0        ?0                   95:'htmlspecialchars'	;1
141 108  FETCH_DIM_FUNC_ARG/93     $70=      16?2                 97:1                	;1
142 108  FETCH_DIM_FUNC_ARG/93     $71=      $70                  98:'value'          	;1
143 108  SEND_VAR_EX/66            ?80       $71                  ?1                  	;0
144 108  DO_FCALL_BY_NAME/131      $72=      ?0                   ?0                  	;0
145 108  ECHO/40                   ?0        $72                  ?0                  	;0
146 110  ECHO/40                   ?0        99:'">
													</div>
												</div>
												<div class="form-group row mb-4">
													<label class="col-md-4 col-form-label" for="http_proxy">' ?0                  	;0
147 111  FETCH_DIM_R/81            $73=      16?1                 100:'http_proxy'    	;0
148 111  ECHO/40                   ?0        $73                  ?0                  	;0
149 112  GOTO/253                  ?0        ?506                 ?101                	;0
150 115  FETCH_DIM_R/81            $74=      16?1                 102:'edit'          	;0
151 115  ECHO/40                   ?0        $74                  ?0                  	;0
152 117  ECHO/40                   ?0        103:'" />
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
153 118  GOTO/253                  ?0        ?694                 ?104                	;0
154 120  ECHO/40                   ?0        105:'">
													</div>
												</div>
											</div> 
										</div> 
										<ul class="list-inline wizard mb-0">
											<li class="prevb list-inline-item">
												<a href="javascript: void(0);" class="btn btn-secondary">' ?0                  	;0
155 121  FETCH_DIM_R/81            $75=      16?1                 106:'prev'          	;0
156 121  ECHO/40                   ?0        $75                  ?0                  	;0
157 122  ECHO/40                   ?0        107:'</a>
											</li>
											<li class="nextb list-inline-item float-right">
												<a href="javascript: void(0);" class="btn btn-secondary">' ?0                  	;0
158 123  FETCH_DIM_R/81            $76=      16?1                 108:'next'          	;0
159 123  ECHO/40                   ?0        $76                  ?0                  	;0
160 124  ECHO/40                   ?0        109:'</a>
											</li>
										</ul>
									</div>
									<div class="tab-pane" id="auto-restart">
										<div class="row">
											<div class="col-12">
												<div class="form-group row mb-4">
													<label class="col-md-4 col-form-label" for="days_to_restart">' ?0                  	;0
161 125  GOTO/253                  ?0        ?678                 ?110                	;0
162 127  FE_RESET_R/77             $77=      16?3                 ?186                	;0
163 127  FE_FETCH_R/78             ?0        $77                  16?4                	;186	>>186	<<185
164 128  ECHO/40                   ?0        111:'															<option value="' ?0                  	;0
165 129  FETCH_DIM_R/81            $78=      16?4                 112:'id'            	;0
166 129  ECHO/40                   ?0        $78                  ?0                  	;0
167 130  ECHO/40                   ?0        113:'"'              ?0                  	;0
168 131  ISSET_ISEMPTY_CV/197      #79=      16?5                 ?0                  	;33554432
169 131  JMPZ_EX/46                #79=      #79                  ?176                	;0	>>176
170 131  INIT_FCALL_BY_NAME/59     ?0        ?0                   114:'in_array'      	;2
171 131  FETCH_DIM_FUNC_ARG/93     $80=      16?4                 116:'id'            	;1
172 131  SEND_VAR_EX/66            ?80       $80                  ?1                  	;0
173 131  SEND_VAR_EX/66            ?96       16?6                 ?2                  	;0
174 131  DO_FCALL_BY_NAME/131      $81=      ?0                   ?0                  	;0
175 131  BOOL/52                   #79=      $81                  ?0                  	;0
176 131  BOOL_NOT/13               #82=      #79                  ?0                  	;0	<<169
177 131  JMPZ/43                   ?0        #82                  ?180                	;0	>>180
178 132  NOP/0                     ?0        ?0                   ?0                  	;1
179 132  GOTO/253                  ?0        ?181                 ?117                	;0
180 134  ECHO/40                   ?0        118:' selected'      ?0                  	;0	<<177
181 136  ECHO/40                   ?0        119:'>'              ?0                  	;0
182 137  FETCH_DIM_R/81            $83=      16?4                 120:'server_name'   	;0
183 137  ECHO/40                   ?0        $83                  ?0                  	;0
184 138  ECHO/40                   ?0        121:'</option>
															' ?0                  	;0
185 139  JMP/42                    ?0        ?163                 ?0                  	;0	>>163
186 139  FE_FREE/127               ?0        $77                  ?0                  	;0	<<162
187 142  ECHO/40                   ?0        122:'														</select>
													</div>
												</div>
												<div class="form-group row mb-4">
													<label class="col-md-4 col-form-label" for="restart_on_edit">' ?0                  	;0
188 143  ISSET_ISEMPTY_DIM_OBJ/115 #84=      16?0                 123:'id'            	;33554432
189 143  JMPZ/43                   ?0        #84                  ?191                	;0	>>191
190 144  GOTO/253                  ?0        ?116                 ?124                	;0
191 146  FETCH_DIM_R/81            $85=      16?1                 125:'start_stream_now'	;0	<<189
192 146  ECHO/40                   ?0        $85                  ?0                  	;0
193 147  GOTO/253                  ?0        ?115                 ?126                	;0
194 150  ECHO/40                   ?0        127:'">
													</div>
												</div>
												<div class="form-group row mb-4">
													<label class="col-md-4 col-form-label" for="headers">' ?0                  	;0
195 151  FETCH_DIM_R/81            $86=      16?1                 128:'headers'       	;0
196 151  ECHO/40                   ?0        $86                  ?0                  	;0
197 152  ECHO/40                   ?0        129:' <i title="FFmpeg -headers command." class="tooltip text-secondary far fa-circle"></i></label>
													<div class="col-md-8">
														<input type="text" class="form-control" id="headers" name="headers" value="' ?0                  	;0
198 153  ISSET_ISEMPTY_DIM_OBJ/115 #87=      16?7                 130:19              	;33554432
199 153  JMPZ/43                   ?0        #87                  ?201                	;0	>>201
200 154  GOTO/253                  ?0        ?490                 ?131                	;0
201 156  GOTO/253                  ?0        ?483                 ?132                	;0	<<199
202 158  ISSET_ISEMPTY_CV/197      #88=      16?0                 ?0                  	;33554432
203 158  BOOL_NOT/13               #89=      #88                  ?0                  	;0
204 158  JMPZ/43                   ?0        #89                  ?206                	;0	>>206
205 159  GOTO/253                  ?0        ?211                 ?133                	;0
206 161  INIT_FCALL_BY_NAME/59     ?0        ?0                   134:'htmlspecialchars'	;1	<<204
207 161  FETCH_DIM_FUNC_ARG/93     $90=      16?0                 136:'custom_sid'    	;1
208 161  SEND_VAR_EX/66            ?80       $90                  ?1                  	;0
209 161  DO_FCALL_BY_NAME/131      $91=      ?0                   ?0                  	;0
210 161  ECHO/40                   ?0        $91                  ?0                  	;0
211 163  ECHO/40                   ?0        137:'">
													</div>
												</div>
												<div class="form-group row mb-4">
													<label class="col-md-4 col-form-label" for="custom_ffmpeg">' ?0                  	;0
212 164  FETCH_DIM_R/81            $92=      16?1                 138:'custom_ffmpeg_command'	;0
213 164  ECHO/40                   ?0        $92                  ?0                  	;0
214 165  GOTO/253                  ?0        ?81                  ?139                	;0
215 167  FETCH_DIM_R/81            $93=      16?1                 140:'choose'        	;0
216 167  ECHO/40                   ?0        $93                  ?0                  	;0
217 168  ECHO/40                   ?0        141:'...">
															' ?0                  	;0
218 169  FETCH_DIM_R/81            $94=      16?1                 142:'monday'        	;0
219 169  INIT_ARRAY/71             #95=      143:'Monday'         $94                 	;28
220 169  FETCH_DIM_R/81            $96=      16?1                 144:'tuesday'       	;0
221 169  ADD_ARRAY_ELEMENT/72      #95=      145:'Tuesday'        $96                 	;0
222 169  FETCH_DIM_R/81            $97=      16?1                 146:'wednesday'     	;0
223 169  ADD_ARRAY_ELEMENT/72      #95=      147:'Wednesday'      $97                 	;0
224 169  FETCH_DIM_R/81            $98=      16?1                 148:'thursday'      	;0
225 169  ADD_ARRAY_ELEMENT/72      #95=      149:'Thursday'       $98                 	;0
226 169  FETCH_DIM_R/81            $99=      16?1                 150:'friday'        	;0
227 169  ADD_ARRAY_ELEMENT/72      #95=      151:'Friday'         $99                 	;0
228 169  FETCH_DIM_R/81            $100=     16?1                 152:'saturday'      	;0
229 169  ADD_ARRAY_ELEMENT/72      #95=      153:'Saturday'       $100                	;0
230 169  FETCH_DIM_R/81            $101=     16?1                 154:'sunday'        	;0
231 169  ADD_ARRAY_ELEMENT/72      #95=      155:'Sunday'         $101                	;0
232 169  FE_RESET_R/77             $102=     #95                  ?251                	;0
233 169  FE_FETCH_R/78             ?0        $102                 16?8                	;251	>>251	<<250
234 170  ECHO/40                   ?0        156:'															<option value="' ?0                  	;0
235 171  ECHO/40                   ?0        16?8                 ?0                  	;0
236 172  ECHO/40                   ?0        157:'"'              ?0                  	;0
237 173  INIT_FCALL_BY_NAME/59     ?0        ?0                   158:'in_array'      	;2
238 173  SEND_VAR_EX/66            ?80       16?8                 ?1                  	;0
239 173  FETCH_DIM_FUNC_ARG/93     $103=     16?9                 160:'days'          	;2
240 173  SEND_VAR_EX/66            ?96       $103                 ?2                  	;0
241 173  DO_FCALL_BY_NAME/131      $104=     ?0                   ?0                  	;0
242 173  BOOL_NOT/13               #105=     $104                 ?0                  	;0
243 173  JMPZ/43                   ?0        #105                 ?246                	;0	>>246
244 174  NOP/0                     ?0        ?0                   ?0                  	;1
245 174  GOTO/253                  ?0        ?247                 ?161                	;0
246 176  ECHO/40                   ?0        162:' selected'      ?0                  	;0	<<243
247 178  ECHO/40                   ?0        163:'>'              ?0                  	;0
248 179  ECHO/40                   ?0        16?8                 ?0                  	;0
249 180  ECHO/40                   ?0        164:'</option>
															' ?0                  	;0
250 181  JMP/42                    ?0        ?233                 ?0                  	;0	>>233
251 181  FE_FREE/127               ?0        $102                 ?0                  	;0	<<232
252 184  ECHO/40                   ?0        165:'														</select>
													</div>
												</div>
												<div class="form-group row mb-4">
													<label class="col-md-4 col-form-label" for="time_to_restart">' ?0                  	;0
253 185  GOTO/253                  ?0        ?279                 ?166                	;0
254 187  ECHO/40                   ?0        167:'				<div class="alert alert-success alert-dismissible fade show" role="alert">
					<button type="button" class="close" data-dismiss="alert" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
					' ?0                  	;0
255 188  FETCH_DIM_R/81            $106=     16?1                 168:'radio_success' 	;0
256 188  ECHO/40                   ?0        $106                 ?0                  	;0
257 189  ECHO/40                   ?0        169:'				</div>
				' ?0                  	;0
258 191  ECHO/40                   ?0        170:'				<div class="card">
					<div class="card-body">
						<form action="#" method="POST" data-parsley-validate="">
							' ?0                  	;0
259 192  GOTO/253                  ?0        ?23                  ?171                	;0
260 194  INIT_FCALL_BY_NAME/59     ?0        ?0                   172:'json_decode'   	;2
261 194  FETCH_DIM_FUNC_ARG/93     $107=     16?0                 174:'auto_restart'  	;1
262 194  SEND_VAR_EX/66            ?80       $107                 ?1                  	;0
263 194  SEND_VAL_EX/116           ?96       175:true             ?2                  	;0
264 194  DO_FCALL_BY_NAME/131      $108=     ?0                   ?0                  	;0
265 194  ASSIGN/38                 ?91       16?9                 $108                	;0
266 195  ISSET_ISEMPTY_DIM_OBJ/115 #110=     16?9                 176:'days'          	;33554432
267 195  JMPZ/43                   ?0        #110                 ?269                	;0	>>269
268 196  GOTO/253                  ?0        ?271                 ?177                	;0
269 198  ASSIGN_DIM/147            ?93       16?9                 178:'days'          	;0	<<267
270 198  OP_DATA/137               ?0        179:array (
)        ?0                  	;0
271 200  ISSET_ISEMPTY_DIM_OBJ/115 #112=     16?9                 180:'at'            	;33554432
272 200  JMPZ/43                   ?0        #112                 ?274                	;0	>>274
273 201  GOTO/253                  ?0        ?300                 ?181                	;0
274 203  GOTO/253                  ?0        ?298                 ?182                	;0	<<272
275 205  ECHO/40                   ?0        183:'				</div>
				' ?0                  	;0
276 207  GOTO/253                  ?0        ?446                 ?184                	;0
277 209  ECHO/40                   ?0        185:'				<div class="alert alert-danger alert-dismissible fade show" role="alert">
					<button type="button" class="close" data-dismiss="alert" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
					' ?0                  	;0
278 210  GOTO/253                  ?0        ?443                 ?186                	;0
279 212  FETCH_DIM_R/81            $113=     16?1                 187:'time_to_restart'	;0
280 212  ECHO/40                   ?0        $113                 ?0                  	;0
281 213  ECHO/40                   ?0        188:'</label>
													<div class="col-md-8">
														<div class="input-group clockpicker" data-placement="top" data-align="top" data-autoclose="true">
															<input id="time_to_restart" name="time_to_restart" type="text" class="form-control" value="' ?0                  	;0
282 214  FETCH_DIM_R/81            $114=     16?9                 189:'at'            	;0
283 214  ECHO/40                   ?0        $114                 ?0                  	;0
284 215  ECHO/40                   ?0        190:'">
															<div class="input-group-append">
																<span class="input-group-text"><i class="mdi mdi-clock-outline"></i></span>
															</div>
														</div>
													</div>
												</div>
											</div> 
										</div> 
										<ul class="list-inline wizard mb-0">
											<li class="prevb list-inline-item">
												<a href="javascript: void(0);" class="btn btn-secondary">' ?0                  	;0
285 216  FETCH_DIM_R/81            $115=     16?1                 191:'prev'          	;0
286 216  ECHO/40                   ?0        $115                 ?0                  	;0
287 217  GOTO/253                  ?0        ?649                 ?192                	;0
288 219  FETCH_DIM_R/81            $116=     16?1                 193:'prev'          	;0
289 219  ECHO/40                   ?0        $116                 ?0                  	;0
290 220  ECHO/40                   ?0        194:'</a>
											</li>
											<li class="nextb list-inline-item float-right">
												<input name="submit_radio" type="submit" class="btn btn-primary" value="' ?0                  	;0
291 221  ISSET_ISEMPTY_DIM_OBJ/115 #117=     16?0                 195:'id'            	;33554432
292 221  JMPZ/43                   ?0        #117                 ?294                	;0	>>294
293 222  GOTO/253                  ?0        ?150                 ?196                	;0
294 224  FETCH_DIM_R/81            $118=     16?1                 197:'add'           	;0	<<292
295 224  ECHO/40                   ?0        $118                 ?0                  	;0
296 225  GOTO/253                  ?0        ?152                 ?198                	;0
297 226  GOTO/253                  ?0        ?150                 ?199                	;0
298 228  ASSIGN_DIM/147            ?101      16?9                 200:'at'            	;0
299 228  OP_DATA/137               ?0        201:'06:00'          ?0                  	;0
300 232  ECHO/40                   ?0        202:'														<select id="days_to_restart" name="days_to_restart[]" class="form-control select2-multiple" data-toggle="select2" multiple="multiple" data-placeholder="' ?0                  	;0
301 233  GOTO/253                  ?0        ?215                 ?203                	;0
302 235  INIT_FCALL_BY_NAME/59     ?0        ?0                   204:'F964B9222b35adDD'	;0
303 235  DO_FCALL_BY_NAME/131      $120=     ?0                   ?0                  	;0
304 235  FE_RESET_R/77             $121=     $120                 ?346                	;0
305 235  FE_FETCH_R/78             ?0        $121                 16?10               	;346	>>346	<<345
306 236  NOP/0                     ?0        ?0                   ?0                  	;1
307 236  GOTO/253                  ?0        ?308                 ?206                	;0
308 238  ECHO/40                   ?0        207:'															<option ' ?0                  	;0
309 239  ISSET_ISEMPTY_CV/197      #122=     16?0                 ?0                  	;33554432
310 239  BOOL_NOT/13               #123=     #122                 ?0                  	;0
311 239  JMPZ/43                   ?0        #123                 ?314                	;0	>>314
312 240  NOP/0                     ?0        ?0                   ?0                  	;1
313 240  GOTO/253                  ?0        ?331                 ?208                	;0
314 242  INIT_FCALL_BY_NAME/59     ?0        ?0                   209:'in_array'      	;2	<<311
315 242  FETCH_DIM_FUNC_ARG/93     $124=     16?0                 211:'id'            	;1
316 242  SEND_VAR_EX/66            ?80       $124                 ?1                  	;0
317 242  INIT_FCALL_BY_NAME/59     ?0        ?0                   212:'json_decode'   	;2
318 242  FETCH_DIM_FUNC_ARG/93     $125=     16?10                214:'bouquet_radios'	;1
319 242  SEND_VAR_EX/66            ?80       $125                 ?1                  	;0
320 242  SEND_VAL_EX/116           ?96       215:true             ?2                  	;0
321 242  DO_FCALL_BY_NAME/131      $126=     ?0                   ?0                  	;0
322 242  SEND_VAR_NO_REF_EX/50     ?96       $126                 ?2                  	;0
323 242  DO_FCALL_BY_NAME/131      $127=     ?0                   ?0                  	;0
324 242  BOOL_NOT/13               #128=     $127                 ?0                  	;0
325 242  JMPZ/43                   ?0        #128                 ?328                	;0	>>328
326 243  NOP/0                     ?0        ?0                   ?0                  	;1
327 243  GOTO/253                  ?0        ?329                 ?216                	;0
328 245  ECHO/40                   ?0        217:'selected '      ?0                  	;0	<<325
329 247  NOP/0                     ?0        ?0                   ?0                  	;1
330 247  GOTO/253                  ?0        ?331                 ?218                	;0
331 250  ECHO/40                   ?0        219:'value="'        ?0                  	;0
332 251  FETCH_DIM_R/81            $129=     16?10                220:'id'            	;0
333 251  ECHO/40                   ?0        $129                 ?0                  	;0
334 252  ECHO/40                   ?0        221:'">'             ?0                  	;0
335 253  INIT_FCALL_BY_NAME/59     ?0        ?0                   222:'htmlspecialchars'	;1
336 253  FETCH_DIM_FUNC_ARG/93     $130=     16?10                224:'bouquet_name'  	;1
337 253  SEND_VAR_EX/66            ?80       $130                 ?1                  	;0
338 253  DO_FCALL_BY_NAME/131      $131=     ?0                   ?0                  	;0
339 253  ECHO/40                   ?0        $131                 ?0                  	;0
340 254  NOP/0                     ?0        ?0                   ?0                  	;1
341 254  GOTO/253                  ?0        ?342                 ?225                	;0
342 256  ECHO/40                   ?0        226:'</option>
															' ?0                  	;0
343 258  NOP/0                     ?0        ?0                   ?0                  	;1
344 258  GOTO/253                  ?0        ?345                 ?227                	;0
345 259  JMP/42                    ?0        ?305                 ?0                  	;0	>>305
346 259  FE_FREE/127               ?0        $121                 ?0                  	;0	<<304
347 262  ECHO/40                   ?0        228:'														</select>
                                                        <div id="bouquet_create" class="alert bg-dark text-white border-0 mt-2 mb-0" role="alert" style="display: none;">
                                                            <strong>New Bouquets:</strong> <span id="bouquet_new"></span>
                                                        </div>
													</div>
												</div>
												<div class="form-group row mb-4">
													<label class="col-md-4 col-form-label" for="notes">' ?0                  	;0
348 263  FETCH_DIM_R/81            $132=     16?1                 229:'notes'         	;0
349 263  ECHO/40                   ?0        $132                 ?0                  	;0
350 264  ECHO/40                   ?0        230:'</label>
													<div class="col-md-8">
														<textarea id="notes" name="notes" class="form-control" rows="3" placeholder="">' ?0                  	;0
351 265  GOTO/253                  ?0        ?422                 ?231                	;0
352 267  ECHO/40                   ?0        232:'</a>
											</li>
										</ul>
									</div>
									<div class="tab-pane" id="advanced-options">
										<div class="row">
											<div class="col-12">
												<div class="form-group row mb-4">
													<label class="col-md-4 col-form-label" for="direct_source">' ?0                  	;0
353 268  FETCH_DIM_R/81            $133=     16?1                 233:'direct_source' 	;0
354 268  ECHO/40                   ?0        $133                 ?0                  	;0
355 269  ECHO/40                   ?0        234:' <i title="Don\'t run source through XUI, just redirect instead." class="tooltip text-secondary far fa-circle"></i></label>
													<div class="col-md-2">
														<input name="direct_source" id="direct_source" type="checkbox" ' ?0                  	;0
356 270  ISSET_ISEMPTY_CV/197      #134=     16?0                 ?0                  	;33554432
357 270  BOOL_NOT/13               #135=     #134                 ?0                  	;0
358 270  JMPZ/43                   ?0        #135                 ?360                	;0	>>360
359 271  GOTO/253                  ?0        ?104                 ?235                	;0
360 273  FETCH_DIM_R/81            $136=     16?0                 236:'direct_source' 	;0	<<358
361 273  IS_EQUAL/17               #137=     $136                 237:1               	;0
362 273  BOOL_NOT/13               #138=     #137                 ?0                  	;0
363 273  JMPZ/43                   ?0        #138                 ?365                	;0	>>365
364 274  GOTO/253                  ?0        ?104                 ?238                	;0
365 276  GOTO/253                  ?0        ?103                 ?239                	;0	<<363
366 278  INIT_FCALL_BY_NAME/59     ?0        ?0                   240:'F769E3F0c739d1a6'	;1
367 278  SEND_VAL_EX/116           ?80       242:'radio'          ?1                  	;0
368 278  DO_FCALL_BY_NAME/131      $139=     ?0                   ?0                  	;0
369 278  FE_RESET_R/77             $140=     $139                 ?411                	;0
370 278  FE_FETCH_R/78             ?0        $140                 16?11               	;411	>>411	<<410
371 279  NOP/0                     ?0        ?0                   ?0                  	;1
372 279  GOTO/253                  ?0        ?376                 ?243                	;0
373 281  ECHO/40                   ?0        244:'</option>
															' ?0                  	;0
374 283  NOP/0                     ?0        ?0                   ?0                  	;1
375 283  GOTO/253                  ?0        ?410                 ?245                	;0
376 285  ECHO/40                   ?0        246:'                                                            <option ' ?0                  	;0
377 286  ISSET_ISEMPTY_CV/197      #141=     16?0                 ?0                  	;33554432
378 286  BOOL_NOT/13               #142=     #141                 ?0                  	;0
379 286  JMPZ/43                   ?0        #142                 ?382                	;0	>>382
380 287  NOP/0                     ?0        ?0                   ?0                  	;1
381 287  GOTO/253                  ?0        ?402                 ?247                	;0
382 289  INIT_FCALL_BY_NAME/59     ?0        ?0                   248:'in_array'      	;2	<<379
383 289  INIT_FCALL_BY_NAME/59     ?0        ?0                   250:'intval'        	;1
384 289  FETCH_DIM_FUNC_ARG/93     $143=     16?11                252:'id'            	;1
385 289  SEND_VAR_EX/66            ?80       $143                 ?1                  	;0
386 289  DO_FCALL_BY_NAME/131      $144=     ?0                   ?0                  	;0
387 289  SEND_VAR_NO_REF_EX/50     ?80       $144                 ?1                  	;0
388 289  INIT_FCALL_BY_NAME/59     ?0        ?0                   253:'json_decode'   	;2
389 289  FETCH_DIM_FUNC_ARG/93     $145=     16?0                 255:'category_id'   	;1
390 289  SEND_VAR_EX/66            ?80       $145                 ?1                  	;0
391 289  SEND_VAL_EX/116           ?96       256:true             ?2                  	;0
392 289  DO_FCALL_BY_NAME/131      $146=     ?0                   ?0                  	;0
393 289  SEND_VAR_NO_REF_EX/50     ?96       $146                 ?2                  	;0
394 289  DO_FCALL_BY_NAME/131      $147=     ?0                   ?0                  	;0
395 289  BOOL_NOT/13               #148=     $147                 ?0                  	;0
396 289  JMPZ/43                   ?0        #148                 ?399                	;0	>>399
397 290  NOP/0                     ?0        ?0                   ?0                  	;1
398 290  GOTO/253                  ?0        ?400                 ?257                	;0
399 292  ECHO/40                   ?0        258:'selected '      ?0                  	;0	<<396
400 294  NOP/0                     ?0        ?0                   ?0                  	;1
401 294  GOTO/253                  ?0        ?402                 ?259                	;0
402 297  ECHO/40                   ?0        260:'value="'        ?0                  	;0
403 298  FETCH_DIM_R/81            $149=     16?11                261:'id'            	;0
404 298  ECHO/40                   ?0        $149                 ?0                  	;0
405 299  ECHO/40                   ?0        262:'">'             ?0                  	;0
406 300  FETCH_DIM_R/81            $150=     16?11                263:'category_name' 	;0
407 300  ECHO/40                   ?0        $150                 ?0                  	;0
408 301  NOP/0                     ?0        ?0                   ?0                  	;1
409 301  GOTO/253                  ?0        ?373                 ?264                	;0
410 302  JMP/42                    ?0        ?370                 ?0                  	;0	>>370
411 302  FE_FREE/127               ?0        $140                 ?0                  	;0	<<369
412 305  ECHO/40                   ?0        265:'														</select>
                                                        <div id="category_create" class="alert bg-dark text-white border-0 mt-2 mb-0" role="alert" style="display: none;">
                                                            <strong>New Categories:</strong> <span id="category_new"></span>
                                                        </div>
													</div>
												</div>
												<div class="form-group row mb-4">
													<label class="col-md-4 col-form-label" for="bouquets">' ?0                  	;0
413 306  FETCH_DIM_R/81            $151=     16?1                 266:'bouquets'      	;0
414 306  ECHO/40                   ?0        $151                 ?0                  	;0
415 307  ECHO/40                   ?0        267:'</label>
													<div class="col-md-8">
														<select name="bouquets[]" id="bouquets" class="form-control select2-multiple" data-toggle="select2" multiple="multiple" data-placeholder="Choose...">
															' ?0                  	;0
416 308  GOTO/253                  ?0        ?302                 ?268                	;0
417 310  GOTO/253                  ?0        ?420                 ?269                	;0
418 312  FETCH_DIM_R/81            $152=     16?0                 270:'stream_display_name'	;0
419 312  ECHO/40                   ?0        $152                 ?0                  	;0
420 314  ECHO/40                   ?0        271:'</h4>
				</div>
			</div>
		</div>     
		<div class="row">
			<div class="col-xl-12">
				' ?0                  	;0
421 315  GOTO/253                  ?0        ?460                 ?272                	;0
422 317  ISSET_ISEMPTY_CV/197      #153=     16?0                 ?0                  	;33554432
423 317  BOOL_NOT/13               #154=     #153                 ?0                  	;0
424 317  JMPZ/43                   ?0        #154                 ?426                	;0	>>426
425 318  GOTO/253                  ?0        ?431                 ?273                	;0
426 320  INIT_FCALL_BY_NAME/59     ?0        ?0                   274:'htmlspecialchars'	;1	<<424
427 320  FETCH_DIM_FUNC_ARG/93     $155=     16?0                 276:'notes'         	;1
428 320  SEND_VAR_EX/66            ?80       $155                 ?1                  	;0
429 320  DO_FCALL_BY_NAME/131      $156=     ?0                   ?0                  	;0
430 320  ECHO/40                   ?0        $156                 ?0                  	;0
431 322  ECHO/40                   ?0        277:'</textarea>
													</div>
												</div>
											</div> 
										</div> 
										<ul class="list-inline wizard mb-0">
											<li class="nextb list-inline-item float-right">
												<a href="javascript: void(0);" class="btn btn-secondary">' ?0                  	;0
432 323  FETCH_DIM_R/81            $157=     16?1                 278:'next'          	;0
433 323  ECHO/40                   ?0        $157                 ?0                  	;0
434 324  GOTO/253                  ?0        ?352                 ?279                	;0
435 326  ECHO/40                   ?0        280:'							<input type="hidden" name="server_tree_data" id="server_tree_data" value="" />
                            <input type="hidden" name="od_tree_data" id="od_tree_data" value="" />
                            <input type="hidden" name="bouquet_create_list" id="bouquet_create_list" value="" />
                            <input type="hidden" name="category_create_list" id="category_create_list" value="" />
							<div id="basicwizard">
								<ul class="nav nav-pills bg-light nav-justified form-wizard-header mb-4">
									<li class="nav-item">
										<a href="#stream-details" data-toggle="tab" class="nav-link rounded-0 pt-2 pb-2"> 
											<i class="mdi mdi-account-card-details-outline mr-1"></i>
											<span class="d-none d-sm-inline">' ?0                  	;0
436 327  FETCH_DIM_R/81            $158=     16?1                 281:'details'       	;0
437 327  ECHO/40                   ?0        $158                 ?0                  	;0
438 328  ECHO/40                   ?0        282:'</span>
										</a>
									</li>
									<li class="nav-item">
										<a href="#advanced-options" data-toggle="tab" class="nav-link rounded-0 pt-2 pb-2">
											<i class="mdi mdi-folder-alert-outline mr-1"></i>
											<span class="d-none d-sm-inline">' ?0                  	;0
439 329  FETCH_DIM_R/81            $159=     16?1                 283:'advanced'      	;0
440 329  ECHO/40                   ?0        $159                 ?0                  	;0
441 330  ECHO/40                   ?0        284:'</span>
										</a>
									</li>
									<li class="nav-item">
										<a href="#auto-restart" data-toggle="tab" class="nav-link rounded-0 pt-2 pb-2">
											<i class="mdi mdi-clock-outline mr-1"></i>
											<span class="d-none d-sm-inline">' ?0                  	;0
442 331  GOTO/253                  ?0        ?120                 ?285                	;0
443 333  FETCH_DIM_R/81            $160=     16?1                 286:'radio_info_1'  	;0
444 333  ECHO/40                   ?0        $160                 ?0                  	;0
445 334  ECHO/40                   ?0        287:'				</div>
				' ?0                  	;0
446 336  GOTO/253                  ?0        ?258                 ?288                	;0
447 338  GOTO/253                  ?0        ?254                 ?289                	;0
448 340  ECHO/40                   ?0        290:'</label>
													<div class="col-md-8">
														<input type="text" class="form-control" id="stream_display_name" name="stream_display_name" value="' ?0                  	;0
449 341  ISSET_ISEMPTY_CV/197      #161=     16?0                 ?0                  	;33554432
450 341  BOOL_NOT/13               #162=     #161                 ?0                  	;0
451 341  JMPZ/43                   ?0        #162                 ?453                	;0	>>453
452 342  GOTO/253                  ?0        ?458                 ?291                	;0
453 344  INIT_FCALL_BY_NAME/59     ?0        ?0                   292:'htmlspecialchars'	;1	<<451
454 344  FETCH_DIM_FUNC_ARG/93     $163=     16?0                 294:'stream_display_name'	;1
455 344  SEND_VAR_EX/66            ?80       $163                 ?1                  	;0
456 344  DO_FCALL_BY_NAME/131      $164=     ?0                   ?0                  	;0
457 344  ECHO/40                   ?0        $164                 ?0                  	;0
458 346  ECHO/40                   ?0        295:'" required data-parsley-trigger="change">
													</div>
												</div>
                                                <div class="form-group row mb-4">
													<label class="col-md-4 col-form-label" for="stream_icon">Station Logo</label>
                                                    <div class="col-md-8 input-group">
														<input type="text" class="form-control" id="stream_icon" name="stream_icon" value="' ?0                  	;0
459 347  GOTO/253                  ?0        ?50                  ?296                	;0
460 349  ISSET_ISEMPTY_CV/197      #165=     16?12                ?0                  	;33554432
461 349  JMPZ_EX/46                #165=     #165                 ?464                	;0	>>464
462 349  IS_EQUAL/17               #166=     16?12                297:0               	;0
463 349  BOOL/52                   #165=     #166                 ?0                  	;0
464 349  JMPZ/43                   ?0        #165                 ?466                	;0	>>466	<<461
465 350  GOTO/253                  ?0        ?447                 ?298                	;0
466 352  ISSET_ISEMPTY_CV/197      #167=     16?12                ?0                  	;33554432	<<464
467 352  JMPZ_EX/46                #167=     #167                 ?470                	;0	>>470
468 352  IS_EQUAL/17               #168=     16?12                299:1               	;0
469 352  BOOL/52                   #167=     #168                 ?0                  	;0
470 352  JMPZ/43                   ?0        #167                 ?472                	;0	>>472	<<467
471 353  GOTO/253                  ?0        ?277                 ?300                	;0
472 355  ISSET_ISEMPTY_CV/197      #169=     16?12                ?0                  	;33554432	<<470
473 355  JMPZ_EX/46                #169=     #169                 ?476                	;0	>>476
474 355  IS_EQUAL/17               #170=     16?12                301:2               	;0
475 355  BOOL/52                   #169=     #170                 ?0                  	;0
476 355  BOOL_NOT/13               #171=     #169                 ?0                  	;0	<<473
477 355  JMPZ/43                   ?0        #171                 ?479                	;0	>>479
478 356  GOTO/253                  ?0        ?276                 ?302                	;0
479 358  ECHO/40                   ?0        303:'				<div class="alert alert-danger alert-dismissible fade show" role="alert">
					<button type="button" class="close" data-dismiss="alert" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
					' ?0                  	;0	<<477
480 359  FETCH_DIM_R/81            $172=     16?1                 304:'radio_info_2'  	;0
481 359  ECHO/40                   ?0        $172                 ?0                  	;0
482 360  GOTO/253                  ?0        ?275                 ?305                	;0
483 362  INIT_FCALL_BY_NAME/59     ?0        ?0                   306:'htmlspecialchars'	;1
484 362  FETCH_DIM_FUNC_ARG/93     $173=     16?13                308:'headers'       	;1
485 362  FETCH_DIM_FUNC_ARG/93     $174=     $173                 309:'argument_default_value'	;1
486 362  SEND_VAR_EX/66            ?80       $174                 ?1                  	;0
487 362  DO_FCALL_BY_NAME/131      $175=     ?0                   ?0                  	;0
488 362  ECHO/40                   ?0        $175                 ?0                  	;0
489 363  GOTO/253                  ?0        ?496                 ?310                	;0
490 365  INIT_FCALL_BY_NAME/59     ?0        ?0                   311:'htmlspecialchars'	;1
491 365  FETCH_DIM_FUNC_ARG/93     $176=     16?7                 313:19              	;1
492 365  FETCH_DIM_FUNC_ARG/93     $177=     $176                 314:'value'         	;1
493 365  SEND_VAR_EX/66            ?80       $177                 ?1                  	;0
494 365  DO_FCALL_BY_NAME/131      $178=     ?0                   ?0                  	;0
495 365  ECHO/40                   ?0        $178                 ?0                  	;0
496 367  GOTO/253                  ?0        ?154                 ?315                	;0
497 370  ASSIGN/38                 ?161      16?6                 316:array (
)       	;0
498 371  INIT_FCALL_BY_NAME/59     ?0        ?0                   317:'b20d33B2749adFeC'	;0
499 371  DO_FCALL_BY_NAME/131      $180=     ?0                   ?0                  	;0
500 371  ASSIGN/38                 ?163      16?13                $180                	;0
501 372  ASSIGN/38                 ?164      16?14                319:array (
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
502 373  ISSET_ISEMPTY_CV/197      #183=     16?0                 ?0                  	;33554432
503 373  JMPZ/43                   ?0        #183                 ?505                	;0	>>505
504 374  GOTO/253                  ?0        ?671                 ?320                	;0
505 376  GOTO/253                  ?0        ?657                 ?321                	;0	<<503
506 378  ECHO/40                   ?0        322:' <i title="Format: ip:port" class="tooltip text-secondary far fa-circle"></i></label>
													<div class="col-md-8">
														<input type="text" class="form-control" id="http_proxy" name="http_proxy" value="' ?0                  	;0
507 379  ISSET_ISEMPTY_DIM_OBJ/115 #184=     16?2                 323:2               	;33554432
508 379  JMPZ/43                   ?0        #184                 ?510                	;0	>>510
509 380  GOTO/253                  ?0        ?517                 ?324                	;0
510 382  INIT_FCALL_BY_NAME/59     ?0        ?0                   325:'htmlspecialchars'	;1	<<508
511 382  FETCH_DIM_FUNC_ARG/93     $185=     16?13                327:'proxy'         	;1
512 382  FETCH_DIM_FUNC_ARG/93     $186=     $185                 328:'argument_default_value'	;1
513 382  SEND_VAR_EX/66            ?80       $186                 ?1                  	;0
514 382  DO_FCALL_BY_NAME/131      $187=     ?0                   ?0                  	;0
515 382  ECHO/40                   ?0        $187                 ?0                  	;0
516 383  GOTO/253                  ?0        ?135                 ?329                	;0
517 385  GOTO/253                  ?0        ?129                 ?330                	;0
518 387  FETCH_DIM_R/81            $188=     16?1                 331:'user_agent'    	;0
519 387  ECHO/40                   ?0        $188                 ?0                  	;0
520 388  ECHO/40                   ?0        332:'</label>
													<div class="col-md-8">
														<input type="text" class="form-control" id="user_agent" name="user_agent" value="' ?0                  	;0
521 389  ISSET_ISEMPTY_DIM_OBJ/115 #189=     16?2                 333:1               	;33554432
522 389  JMPZ/43                   ?0        #189                 ?524                	;0	>>524
523 390  GOTO/253                  ?0        ?140                 ?334                	;0
524 392  INIT_FCALL_BY_NAME/59     ?0        ?0                   335:'htmlspecialchars'	;1	<<522
525 392  FETCH_DIM_FUNC_ARG/93     $190=     16?13                337:'user_agent'    	;1
526 392  FETCH_DIM_FUNC_ARG/93     $191=     $190                 338:'argument_default_value'	;1
527 392  SEND_VAR_EX/66            ?80       $191                 ?1                  	;0
528 392  DO_FCALL_BY_NAME/131      $192=     ?0                   ?0                  	;0
529 392  ECHO/40                   ?0        $192                 ?0                  	;0
530 393  GOTO/253                  ?0        ?146                 ?339                	;0
531 394  GOTO/253                  ?0        ?140                 ?340                	;0
532 396  INIT_FCALL_BY_NAME/59     ?0        ?0                   341:'B25f6F50Dfa04eB7'	;1
533 396  FETCH_STATIC_PROP_FUNC_ARG/177 $193=     343:'rRequest'       344:'XUI'           	;1
534 396  FETCH_DIM_FUNC_ARG/93     $194=     $193                 346:'id'            	;1
535 396  SEND_VAR_EX/66            ?80       $194                 ?1                  	;0
536 396  DO_FCALL_BY_NAME/131      $195=     ?0                   ?0                  	;0
537 396  ASSIGN/38                 ?178      16?15                $195                	;0
538 397  FE_RESET_R/77             $197=     16?3                 ?610                	;0
539 397  FE_FETCH_R/78             ?0        $197                 16?4                	;610	>>610	<<609
540 398  NOP/0                     ?0        ?0                   ?0                  	;1
541 398  GOTO/253                  ?0        ?542                 ?347                	;0
542 400  INIT_FCALL_BY_NAME/59     ?0        ?0                   348:'intval'        	;1
543 400  FETCH_DIM_FUNC_ARG/93     $198=     16?4                 350:'id'            	;1
544 400  SEND_VAR_EX/66            ?80       $198                 ?1                  	;0
545 400  DO_FCALL_BY_NAME/131      $199=     ?0                   ?0                  	;0
546 400  ISSET_ISEMPTY_DIM_OBJ/115 #200=     16?15                $199                	;33554432
547 400  JMPZ/43                   ?0        #200                 ?550                	;0	>>550
548 401  NOP/0                     ?0        ?0                   ?0                  	;1
549 401  GOTO/253                  ?0        ?553                 ?351                	;0
550 403  ASSIGN/38                 ?183      16?16                352:'offline'       	;0	<<547
551 404  NOP/0                     ?0        ?0                   ?0                  	;1
552 404  GOTO/253                  ?0        ?598                 ?353                	;0
553 406  INIT_FCALL_BY_NAME/59     ?0        ?0                   354:'intval'        	;1
554 406  FETCH_DIM_FUNC_ARG/93     $202=     16?4                 356:'id'            	;1
555 406  SEND_VAR_EX/66            ?80       $202                 ?1                  	;0
556 406  DO_FCALL_BY_NAME/131      $203=     ?0                   ?0                  	;0
557 406  FETCH_DIM_R/81            $204=     16?15                $203                	;0
558 406  FETCH_DIM_R/81            $205=     $204                 357:'parent_id'     	;0
559 406  IS_NOT_EQUAL/18           #206=     $205                 358:0               	;0
560 406  JMPZ/43                   ?0        #206                 ?563                	;0	>>563
561 407  NOP/0                     ?0        ?0                   ?0                  	;1
562 407  GOTO/253                  ?0        ?570                 ?359                	;0
563 409  NOP/0                     ?0        ?0                   ?0                  	;1	<<560
564 409  GOTO/253                  ?0        ?567                 ?360                	;0
565 412  NOP/0                     ?0        ?0                   ?0                  	;1
566 412  GOTO/253                  ?0        ?609                 ?361                	;0
567 414  ASSIGN/38                 ?189      16?16                362:'source'        	;0
568 415  NOP/0                     ?0        ?0                   ?0                  	;1
569 415  GOTO/253                  ?0        ?580                 ?363                	;0
570 417  INIT_FCALL_BY_NAME/59     ?0        ?0                   364:'intval'        	;1
571 417  INIT_FCALL_BY_NAME/59     ?0        ?0                   366:'intval'        	;1
572 417  FETCH_DIM_FUNC_ARG/93     $208=     16?4                 368:'id'            	;1
573 417  SEND_VAR_EX/66            ?80       $208                 ?1                  	;0
574 417  DO_FCALL_BY_NAME/131      $209=     ?0                   ?0                  	;0
575 417  FETCH_DIM_FUNC_ARG/93     $210=     16?15                $209                	;1
576 417  FETCH_DIM_FUNC_ARG/93     $211=     $210                 369:'parent_id'     	;1
577 417  SEND_VAR_EX/66            ?80       $211                 ?1                  	;0
578 417  DO_FCALL_BY_NAME/131      $212=     ?0                   ?0                  	;0
579 417  ASSIGN/38                 ?195      16?16                $212                	;0
580 419  NOP/0                     ?0        ?0                   ?0                  	;1
581 419  GOTO/253                  ?0        ?582                 ?370                	;0
582 421  INIT_FCALL_BY_NAME/59     ?0        ?0                   371:'intval'        	;1
583 421  FETCH_DIM_FUNC_ARG/93     $214=     16?4                 373:'id'            	;1
584 421  SEND_VAR_EX/66            ?80       $214                 ?1                  	;0
585 421  DO_FCALL_BY_NAME/131      $215=     ?0                   ?0                  	;0
586 421  FETCH_DIM_R/81            $216=     16?15                $215                	;0
587 421  FETCH_DIM_R/81            $217=     $216                 374:'on_demand'     	;0
588 421  BOOL_NOT/13               #218=     $217                 ?0                  	;0
589 421  JMPZ/43                   ?0        #218                 ?592                	;0	>>592
590 422  NOP/0                     ?0        ?0                   ?0                  	;1
591 422  GOTO/253                  ?0        ?598                 ?375                	;0
592 424  INIT_FCALL_BY_NAME/59     ?0        ?0                   376:'intval'        	;1	<<589
593 424  FETCH_DIM_FUNC_ARG/93     $220=     16?4                 378:'id'            	;1
594 424  SEND_VAR_EX/66            ?80       $220                 ?1                  	;0
595 424  DO_FCALL_BY_NAME/131      $221=     ?0                   ?0                  	;0
596 424  ASSIGN_DIM/147            ?201      16?6                 ?4397406            	;0
597 424  OP_DATA/137               ?0        $221                 ?0                  	;0
598 427  FETCH_DIM_R/81            $223=     16?4                 379:'id'            	;0
599 427  INIT_ARRAY/71             #224=     $223                 380:'id'            	;22
600 427  ADD_ARRAY_ELEMENT/72      #224=     16?16                381:'parent'        	;0
601 427  FETCH_DIM_R/81            $225=     16?4                 382:'server_name'   	;0
602 427  ADD_ARRAY_ELEMENT/72      #224=     $225                 383:'text'          	;0
603 427  ADD_ARRAY_ELEMENT/72      #224=     384:'mdi mdi-server-network' 385:'icon'          	;0
604 427  ADD_ARRAY_ELEMENT/72      #224=     386:array (
  'opened' => true,
) 387:'state'         	;0
605 427  ASSIGN_DIM/147            ?204      16?14                ?0                  	;0
606 427  OP_DATA/137               ?0        #224                 ?0                  	;0
607 428  NOP/0                     ?0        ?0                   ?0                  	;1
608 428  GOTO/253                  ?0        ?565                 ?388                	;0
609 429  JMP/42                    ?0        ?539                 ?0                  	;0	>>539
610 429  FE_FREE/127               ?0        $197                 ?0                  	;0	<<538
611 433  ASSIGN/38                 ?208      16?17                389:'Radio Stations'	;0
612 434  GOTO/253                  ?0        ?63                  ?390                	;0
613 436  ISSET_ISEMPTY_DIM_OBJ/115 #227=     16?2                 391:17              	;33554432
614 436  JMPZ/43                   ?0        #227                 ?616                	;0	>>616
615 437  GOTO/253                  ?0        ?623                 ?392                	;0
616 439  INIT_FCALL_BY_NAME/59     ?0        ?0                   393:'htmlspecialchars'	;1	<<614
617 439  FETCH_DIM_FUNC_ARG/93     $228=     16?13                395:'cookie'        	;1
618 439  FETCH_DIM_FUNC_ARG/93     $229=     $228                 396:'argument_default_value'	;1
619 439  SEND_VAR_EX/66            ?80       $229                 ?1                  	;0
620 439  DO_FCALL_BY_NAME/131      $230=     ?0                   ?0                  	;0
621 439  ECHO/40                   ?0        $230                 ?0                  	;0
622 440  GOTO/253                  ?0        ?194                 ?397                	;0
623 442  INIT_FCALL_BY_NAME/59     ?0        ?0                   398:'htmlspecialchars'	;1
624 442  FETCH_DIM_FUNC_ARG/93     $231=     16?2                 400:17              	;1
625 442  FETCH_DIM_FUNC_ARG/93     $232=     $231                 401:'value'         	;1
626 442  SEND_VAR_EX/66            ?80       $232                 ?1                  	;0
627 442  DO_FCALL_BY_NAME/131      $233=     ?0                   ?0                  	;0
628 442  ECHO/40                   ?0        $233                 ?0                  	;0
629 443  GOTO/253                  ?0        ?194                 ?402                	;0
630 445  INIT_FCALL_BY_NAME/59     ?0        ?0                   403:'htmlspecialchars'	;1
631 445  FETCH_DIM_FUNC_ARG/93     $234=     16?0                 405:'probesize_ondemand'	;1
632 445  SEND_VAR_EX/66            ?80       $234                 ?1                  	;0
633 445  DO_FCALL_BY_NAME/131      $235=     ?0                   ?0                  	;0
634 445  ECHO/40                   ?0        $235                 ?0                  	;0
635 447  ECHO/40                   ?0        406:'">
													</div>
                                                </div>
                                                <div class="form-group row mb-4">
													<label class="col-md-4 col-form-label" for="custom_sid">' ?0                  	;0
636 448  FETCH_DIM_R/81            $236=     16?1                 407:'custom_channel_sid'	;0
637 448  ECHO/40                   ?0        $236                 ?0                  	;0
638 449  ECHO/40                   ?0        408:' <i title="Here you can specify the SID of the channel in order to work with the epg on the enigma2 devices. You have to specify the code with the \':\' but without the first number, 1 or 4097 . Example: if we have this code:  \'1:0:1:13f:157c:13e:820000:0:0:0:2097\' then you have to add on this field:  \':0:1:13f:157c:13e:820000:0:0:0:" class="tooltip text-secondary far fa-circle"></i></label>
													<div class="col-md-8">
														<input type="text" class="form-control" id="custom_sid" name="custom_sid" value="' ?0                  	;0
639 450  GOTO/253                  ?0        ?202                 ?409                	;0
640 452  INCLUDE_OR_EVAL/73        ?219      410:'session.php'    ?0                  	;2	<<0
641 453  INCLUDE_OR_EVAL/73        ?220      411:'functions.php'  ?0                  	;2
642 454  INIT_FCALL_BY_NAME/59     ?0        ?0                   412:'e6d500E19634D513'	;0
643 454  DO_FCALL_BY_NAME/131      $239=     ?0                   ?0                  	;0
644 454  JMPZ/43                   ?0        $239                 ?646                	;0	>>646
645 455  GOTO/253                  ?0        ?648                 ?414                	;0
646 457  INIT_FCALL_BY_NAME/59     ?0        ?0                   415:'E72F42a93714BA87'	;0	<<644
647 457  DO_FCALL_BY_NAME/131      ?222      ?0                   ?0                  	;0
648 459  GOTO/253                  ?0        ?1                   ?417                	;0
649 461  ECHO/40                   ?0        418:'</a>
											</li>
											<li class="nextb list-inline-item float-right">
												<a href="javascript: void(0);" class="btn btn-secondary">' ?0                  	;0
650 462  FETCH_DIM_R/81            $241=     16?1                 419:'next'          	;0
651 462  ECHO/40                   ?0        $241                 ?0                  	;0
652 463  ECHO/40                   ?0        420:'</a>
											</li>
										</ul>
									</div>
									<div class="tab-pane" id="load-balancing">
										<div class="row">
											<div class="col-12">
												<div class="form-group row mb-4">
													<label class="col-md-4 col-form-label" for="servers">' ?0                  	;0
653 464  FETCH_DIM_R/81            $242=     16?1                 421:'server_tree'   	;0
654 464  ECHO/40                   ?0        $242                 ?0                  	;0
655 465  ECHO/40                   ?0        422:'</label>
													<div class="col-md-8">
														<div id="server_tree"></div>
													</div>
												</div>
                                                <div class="form-group row mb-4">
                                                    <label class="col-md-4 col-form-label" for="on_demand">On-Demand Servers</label>
													<div class="col-md-8">
                                                        <select name="on_demand[]" id="on_demand" class="form-control select2-multiple" data-toggle="select2" multiple="multiple" data-placeholder="Choose...">
															' ?0                  	;0
656 466  GOTO/253                  ?0        ?162                 ?423                	;0
657 468  FE_RESET_R/77             $243=     16?3                 ?669                	;0
658 468  FE_FETCH_R/78             ?0        $243                 16?4                	;669	>>669	<<668
659 469  FETCH_DIM_R/81            $245=     16?4                 424:'id'            	;0
660 469  INIT_ARRAY/71             #246=     $245                 425:'id'            	;22
661 469  ADD_ARRAY_ELEMENT/72      #246=     426:'offline'        427:'parent'        	;0
662 469  FETCH_DIM_R/81            $247=     16?4                 428:'server_name'   	;0
663 469  ADD_ARRAY_ELEMENT/72      #246=     $247                 429:'text'          	;0
664 469  ADD_ARRAY_ELEMENT/72      #246=     430:'mdi mdi-server-network' 431:'icon'          	;0
665 469  ADD_ARRAY_ELEMENT/72      #246=     432:array (
  'opened' => true,
) 433:'state'         	;0
666 469  ASSIGN_DIM/147            ?226      16?14                ?4633841            	;0
667 469  OP_DATA/137               ?0        #246                 ?0                  	;0
668 470  JMP/42                    ?0        ?658                 ?0                  	;0	>>658
669 470  FE_FREE/127               ?0        $243                 ?0                  	;0	<<657
670 473  GOTO/253                  ?0        ?611                 ?434                	;0
671 475  INIT_FCALL_BY_NAME/59     ?0        ?0                   435:'B2BE0B935a31DF18'	;1
672 475  FETCH_STATIC_PROP_FUNC_ARG/177 $248=     437:'rRequest'       438:'XUI'           	;1
673 475  FETCH_DIM_FUNC_ARG/93     $249=     $248                 440:'id'            	;1
674 475  SEND_VAR_EX/66            ?80       $249                 ?1                  	;0
675 475  DO_FCALL_BY_NAME/131      $250=     ?0                   ?0                  	;0
676 475  ASSIGN/38                 ?233      16?2                 $250                	;0
677 476  GOTO/253                  ?0        ?532                 ?441                	;0
678 478  FETCH_DIM_R/81            $252=     16?1                 442:'days_to_restart'	;0
679 478  ECHO/40                   ?0        $252                 ?0                  	;0
680 479  ECHO/40                   ?0        443:'</label>
													<div class="col-md-8">
														' ?0                  	;0
681 480  ASSIGN/38                 ?235      16?9                 444:array (
  'days' => 
  array (
  ),
  'at' => '06:00',
)	;0
682 481  ISSET_ISEMPTY_CV/197      #254=     16?0                 ?0                  	;33554432
683 481  BOOL_NOT/13               #255=     #254                 ?0                  	;0
684 481  JMPZ/43                   ?0        #255                 ?686                	;0	>>686
685 482  GOTO/253                  ?0        ?300                 ?445                	;0
686 484  INIT_FCALL_BY_NAME/59     ?0        ?0                   446:'strlen'        	;1	<<684
687 484  FETCH_DIM_FUNC_ARG/93     $256=     16?0                 448:'auto_restart'  	;1
688 484  SEND_VAR_EX/66            ?80       $256                 ?1                  	;0
689 484  DO_FCALL_BY_NAME/131      $257=     ?0                   ?0                  	;0
690 484  BOOL_NOT/13               #258=     $257                 ?0                  	;0
691 484  JMPZ/43                   ?0        #258                 ?693                	;0	>>693
692 485  GOTO/253                  ?0        ?300                 ?449                	;0
693 487  GOTO/253                  ?0        ?260                 ?450                	;0	<<691
694 489  INCLUDE_OR_EVAL/73        ?241      451:'footer.php'     ?0                  	;2
695 490  NOP/0                     ?0        452:1                ?0                  	;4294967295
*/

?>
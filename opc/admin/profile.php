<?php


/*
#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
0   3    JMP/42                    ?0        ?360                 ?0                  	;0	>>360
1   5    FETCH_DIM_R/81            $19=      16?0                 1:'software_decoding'	;0
2   5    JMPZ/43                   ?0        $19                  ?4                  	;0	>>4
3   6    GOTO/253                  ?0        ?532                 ?2                  	;0
4   8    FETCH_DIM_IS/90           $20=      16?0                 3:'gpu'             	;0	<<2
5   8    ISSET_ISEMPTY_DIM_OBJ/115 #21=      $20                  4:'resize'          	;33554432
6   8    BOOL_NOT/13               #22=      #21                  ?0                  	;0
7   8    JMPZ/43                   ?0        #22                  ?9                  	;0	>>9
8   9    GOTO/253                  ?0        ?19                  ?5                  	;0
9   11   INIT_FCALL_BY_NAME/59     ?0        ?0                   8:'str_replace'     	;3	<<7
10  11   SEND_VAL_EX/116           ?80       10:'x'               ?1                  	;0
11  11   SEND_VAL_EX/116           ?96       11:':'               ?2                  	;0
12  11   FETCH_DIM_FUNC_ARG/93     $25=      16?0                 12:'gpu'            	;3
13  11   FETCH_DIM_FUNC_ARG/93     $26=      $25                  13:'resize'         	;3
14  11   SEND_VAR_EX/66            ?112      $26                  ?3                  	;0
15  11   DO_FCALL_BY_NAME/131      $27=      ?0                   ?0                  	;0
16  11   FETCH_DIM_W/84            $23=      16?0                 6:9                 	;0
17  11   ASSIGN_DIM/147            ?5        $23                  7:'val'             	;0
18  11   OP_DATA/137               ?0        $27                  ?0                  	;0
19  13   INIT_FCALL_BY_NAME/59     ?0        ?0                   16:'intval'         	;1
20  13   FETCH_DIM_FUNC_ARG/93     $30=      16?0                 18:'gpu'            	;1
21  13   FETCH_DIM_FUNC_ARG/93     $31=      $30                  19:'deint'          	;1
22  13   SEND_VAR_EX/66            ?80       $31                  ?1                  	;0
23  13   DO_FCALL_BY_NAME/131      $32=      ?0                   ?0                  	;0
24  13   IS_SMALLER/19             #33=      20:0                 $32                 	;0
25  13   FETCH_DIM_W/84            $28=      16?0                 14:17               	;0
26  13   ASSIGN_DIM/147            ?10       $28                  15:'val'            	;0
27  13   OP_DATA/137               ?0        #33                  ?0                  	;0
28  14   GOTO/253                  ?0        ?531                 ?21                 	;0
29  17   ECHO/40                   ?0        22:'">
													</div>
                                                    <div class="col-md-3">
                                                        <input type="text" class="form-control text-center" id="logo_pos" name="logo_pos" value="' ?0                  	;0
30  18   ISSET_ISEMPTY_CV/197      #34=      16?1                 ?0                  	;33554432
31  18   JMPZ/43                   ?0        #34                  ?33                 	;0	>>33
32  19   GOTO/253                  ?0        ?667                 ?23                 	;0
33  21   ECHO/40                   ?0        24:'10:10'           ?0                  	;0	<<31
34  22   GOTO/253                  ?0        ?675                 ?25                 	;0
35  23   GOTO/253                  ?0        ?667                 ?26                 	;0
36  25   ECHO/40                   ?0        27:'														</select>
													</div>
												</div>
												<div id="gpu_h264" style="display:none;">
													<div class="form-group row mb-4">
														<label class="col-md-3 col-form-label" for="preset_h264">' ?0                  	;0
37  26   FETCH_DIM_R/81            $35=      16?2                 28:'preset'         	;0
38  26   ECHO/40                   ?0        $35                  ?0                  	;0
39  27   ECHO/40                   ?0        29:' <i title="'     ?0                  	;0
40  28   FETCH_DIM_R/81            $36=      16?2                 30:'profile_tooltip_1'	;0
41  28   ECHO/40                   ?0        $36                  ?0                  	;0
42  29   ECHO/40                   ?0        31:'" class="tooltip text-secondary far fa-circle"></i></label>
														<div class="col-md-3">
															<select id="preset_h264" name="preset_h264" class="form-control" data-toggle="select2">
																' ?0                  	;0
43  30   GOTO/253                  ?0        ?180                 ?32                 	;0
44  32   ECHO/40                   ?0        33:'" class="tooltip text-secondary far fa-circle"></i></label>
													<div class="col-md-3">
														<input type="text" class="form-control" id="min_tolerance" name="min_tolerance" value="' ?0                  	;0
45  33   ISSET_ISEMPTY_CV/197      #37=      16?1                 ?0                  	;33554432
46  33   BOOL_NOT/13               #38=      #37                  ?0                  	;0
47  33   JMPZ/43                   ?0        #38                  ?49                 	;0	>>49
48  34   GOTO/253                  ?0        ?55                  ?34                 	;0
49  36   INIT_FCALL_BY_NAME/59     ?0        ?0                   35:'htmlspecialchars'	;1	<<47
50  36   FETCH_DIM_FUNC_ARG/93     $39=      16?0                 37:5                	;1
51  36   FETCH_DIM_FUNC_ARG/93     $40=      $39                  38:'val'            	;1
52  36   SEND_VAR_EX/66            ?80       $40                  ?1                  	;0
53  36   DO_FCALL_BY_NAME/131      $41=      ?0                   ?0                  	;0
54  36   ECHO/40                   ?0        $41                  ?0                  	;0
55  38   ECHO/40                   ?0        39:'">
													</div>
													<label class="col-md-3 col-form-label" for="max_tolerance">' ?0                  	;0
56  39   GOTO/253                  ?0        ?547                 ?40                 	;0
57  41   ECHO/40                   ?0        41:'" />
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
58  42   GOTO/253                  ?0        ?807                 ?42                 	;0
59  44   FE_RESET_R/77             $42=      43:array (
  '' => 'Automatic',
  'baseline -level 3.0' => 'Baseline - Level 3.0',
  'baseline -level 3.1' => 'Baseline - Level 3.1',
  'main -level 3.1' => 'Main - Level 3.1',
  'main -level 4.0' => 'Main - Level 4.0',
  'high -level 4.0' => 'High - Level 4.0',
  'high -level 4.1' => 'High - Level 4.1',
  'high -level 4.2' => 'High - Level 4.2',
  'high -level 5.0' => 'High - Level 5.0',
  'high -level 5.1' => 'High - Level 5.1',
  'high444p -level 4.0' => 'High 444p - Level 4.0',
  'high444p -level 4.1' => 'High 444p - Level 4.1',
  'high444p -level 4.2' => 'High 444p - Level 4.2',
  'high444p -level 5.0' => 'High 444p - Level 5.0',
  'high444p -level 5.1' => 'High 444p - Level 5.1',
) ?79                 	;0
60  44   FE_FETCH_R/78             #43=      $42                  16?3                	;79	>>79	<<78
61  44   ASSIGN/38                 ?25       16?4                 #43                 	;0
62  45   ECHO/40                   ?0        44:'																<option ' ?0                  	;0
63  46   ISSET_ISEMPTY_CV/197      #45=      16?1                 ?0                  	;33554432
64  46   JMPZ_EX/46                #45=      #45                  ?68                 	;0	>>68
65  46   FETCH_DIM_R/81            $46=      16?0                 45:'-profile:v'     	;0
66  46   IS_EQUAL/17               #47=      $46                  16?4                	;0
67  46   BOOL/52                   #45=      #47                  ?0                  	;0
68  46   BOOL_NOT/13               #48=      #45                  ?0                  	;0	<<64
69  46   JMPZ/43                   ?0        #48                  ?72                 	;0	>>72
70  47   NOP/0                     ?0        ?0                   ?0                  	;1
71  47   GOTO/253                  ?0        ?73                  ?46                 	;0
72  49   ECHO/40                   ?0        47:'selected '       ?0                  	;0	<<69
73  51   ECHO/40                   ?0        48:'value="'         ?0                  	;0
74  52   ECHO/40                   ?0        16?4                 ?0                  	;0
75  53   ECHO/40                   ?0        49:'">'              ?0                  	;0
76  54   ECHO/40                   ?0        16?3                 ?0                  	;0
77  55   ECHO/40                   ?0        50:'</option>
																' ?0                  	;0
78  56   JMP/42                    ?0        ?60                  ?0                  	;0	>>60
79  56   FE_FREE/127               ?0        $42                  ?0                  	;0	<<59
80  59   ECHO/40                   ?0        51:'															</select>
														</div>
													</div>
												</div>
												<div id="gpu_hevc" style="display:none;">
													<div class="form-group row mb-4">
														<label class="col-md-3 col-form-label" for="preset_hevc">' ?0                  	;0
81  60   FETCH_DIM_R/81            $49=      16?2                 52:'preset'         	;0
82  60   ECHO/40                   ?0        $49                  ?0                  	;0
83  61   ECHO/40                   ?0        53:' <i title="'     ?0                  	;0
84  62   GOTO/253                  ?0        ?279                 ?54                 	;0
85  64   FETCH_DIM_R/81            $50=      16?2                 55:'profile_tooltip_14'	;0
86  64   ECHO/40                   ?0        $50                  ?0                  	;0
87  65   ECHO/40                   ?0        56:'" class="tooltip text-secondary far fa-circle"></i></label>
													<div class="col-md-3">
														<input type="text" class="form-control" id="threads" name="threads" value="' ?0                  	;0
88  66   ISSET_ISEMPTY_CV/197      #51=      16?1                 ?0                  	;33554432
89  66   BOOL_NOT/13               #52=      #51                  ?0                  	;0
90  66   JMPZ/43                   ?0        #52                  ?92                 	;0	>>92
91  67   GOTO/253                  ?0        ?98                  ?57                 	;0
92  69   INIT_FCALL_BY_NAME/59     ?0        ?0                   58:'htmlspecialchars'	;1	<<90
93  69   FETCH_DIM_FUNC_ARG/93     $53=      16?0                 60:15               	;1
94  69   FETCH_DIM_FUNC_ARG/93     $54=      $53                  61:'val'            	;1
95  69   SEND_VAR_EX/66            ?80       $54                  ?1                  	;0
96  69   DO_FCALL_BY_NAME/131      $55=      ?0                   ?0                  	;0
97  69   ECHO/40                   ?0        $55                  ?0                  	;0
98  71   GOTO/253                  ?0        ?737                 ?62                 	;0
99  73   ISSET_ISEMPTY_CV/197      #56=      16?1                 ?0                  	;33554432
100 73   BOOL_NOT/13               #57=      #56                  ?0                  	;0
101 73   JMPZ/43                   ?0        #57                  ?103                	;0	>>103
102 74   GOTO/253                  ?0        ?109                 ?63                 	;0
103 76   INIT_FCALL_BY_NAME/59     ?0        ?0                   64:'htmlspecialchars'	;1	<<101
104 76   FETCH_DIM_FUNC_ARG/93     $58=      16?0                 66:8                	;1
105 76   FETCH_DIM_FUNC_ARG/93     $59=      $58                  67:'val'            	;1
106 76   SEND_VAR_EX/66            ?80       $59                  ?1                  	;0
107 76   DO_FCALL_BY_NAME/131      $60=      ?0                   ?0                  	;0
108 76   ECHO/40                   ?0        $60                  ?0                  	;0
109 78   ECHO/40                   ?0        68:'">
													</div>
												</div>
												<div class="form-group row mb-4">
													<label class="col-md-3 col-form-label" for="framerate">' ?0                  	;0
110 79   FETCH_DIM_R/81            $61=      16?2                 69:'target_framerate'	;0
111 79   ECHO/40                   ?0        $61                  ?0                  	;0
112 80   GOTO/253                  ?0        ?420                 ?70                 	;0
113 83   ECHO/40                   ?0        71:'" required data-parsley-trigger="change">
													</div>
												</div>
                                                <div class="form-group row mb-4">
													<label class="col-md-3 col-form-label" for="gpu_device">GPU Accelerated Transcoding</label>
													<div class="col-md-9">
														<select id="gpu_device" name="gpu_device" class="form-control" data-toggle="select2">
															' ?0                  	;0
114 84   FE_RESET_R/77             $62=      16?5                 ?135                	;0
115 84   FE_FETCH_R/78             #63=      $62                  16?6                	;135	>>135	<<134
116 84   ASSIGN/38                 ?45       16?7                 #63                 	;0
117 85   ECHO/40                   ?0        72:'															<option ' ?0                  	;0
118 86   ISSET_ISEMPTY_CV/197      #65=      16?1                 ?0                  	;33554432
119 86   JMPZ_EX/46                #65=      #65                  ?124                	;0	>>124
120 86   FETCH_DIM_R/81            $66=      16?0                 73:'gpu'            	;0
121 86   FETCH_DIM_R/81            $67=      $66                  74:'val'            	;0
122 86   IS_EQUAL/17               #68=      $67                  16?7                	;0
123 86   BOOL/52                   #65=      #68                  ?0                  	;0
124 86   BOOL_NOT/13               #69=      #65                  ?0                  	;0	<<119
125 86   JMPZ/43                   ?0        #69                  ?128                	;0	>>128
126 87   NOP/0                     ?0        ?0                   ?0                  	;1
127 87   GOTO/253                  ?0        ?129                 ?75                 	;0
128 89   ECHO/40                   ?0        76:'selected '       ?0                  	;0	<<125
129 91   ECHO/40                   ?0        77:'value="'         ?0                  	;0
130 92   ECHO/40                   ?0        16?7                 ?0                  	;0
131 93   ECHO/40                   ?0        78:'">'              ?0                  	;0
132 94   ECHO/40                   ?0        16?6                 ?0                  	;0
133 95   ECHO/40                   ?0        79:'</option>
															' ?0                  	;0
134 96   JMP/42                    ?0        ?115                 ?0                  	;0	>>115
135 96   FE_FREE/127               ?0        $62                  ?0                  	;0	<<114
136 99   ECHO/40                   ?0        80:'														</select>
													</div>
                                                </div>
												<div class="form-group row mb-4">
													<label class="col-md-3 col-form-label" for="video_codec">' ?0                  	;0
137 100  GOTO/253                  ?0        ?440                 ?81                 	;0
138 102  INIT_FCALL_BY_NAME/59     ?0        ?0                   84:'intval'         	;1
139 102  ISSET_ISEMPTY_DIM_OBJ/115 #72=      16?0                 86:17               	;33554432
140 102  SEND_VAL_EX/116           ?80       #72                  ?1                  	;0
141 102  DO_FCALL_BY_NAME/131      $73=      ?0                   ?0                  	;0
142 102  FETCH_DIM_W/84            $70=      16?0                 82:'gpu'            	;0
143 102  ASSIGN_DIM/147            ?52       $70                  83:'deint'          	;0
144 102  OP_DATA/137               ?0        $73                  ?0                  	;0
145 105  ASSIGN/38                 ?55       16?5                 87:array (
  0 => 'Off',
)	;0
146 106  FE_RESET_R/77             $75=      16?8                 ?178                	;0
147 106  FE_FETCH_R/78             ?0        $75                  16?9                	;178	>>178	<<177
148 107  INIT_FCALL_BY_NAME/59     ?0        ?0                   89:'json_decode'    	;2
149 107  FETCH_DIM_FUNC_ARG/93     $77=      16?9                 91:'gpu_info'       	;1
150 107  SEND_VAR_EX/66            ?80       $77                  ?1                  	;0
151 107  SEND_VAL_EX/116           ?96       92:true              ?2                  	;0
152 107  DO_FCALL_BY_NAME/131      $78=      ?0                   ?0                  	;0
153 107  ASSIGN_DIM/147            ?57       16?9                 88:'gpu_info'       	;0
154 107  OP_DATA/137               ?0        $78                  ?0                  	;0
155 108  FETCH_DIM_IS/90           $79=      16?9                 93:'gpu_info'       	;0
156 108  ISSET_ISEMPTY_DIM_OBJ/115 #80=      $79                  94:'gpus'           	;33554432
157 108  BOOL_NOT/13               #81=      #80                  ?0                  	;0
158 108  JMPZ/43                   ?0        #81                  ?161                	;0	>>161
159 109  NOP/0                     ?0        ?0                   ?0                  	;1
160 109  GOTO/253                  ?0        ?177                 ?95                 	;0
161 111  FETCH_DIM_R/81            $82=      16?9                 96:'gpu_info'       	;0	<<158
162 111  FETCH_DIM_R/81            $83=      $82                  97:'gpus'           	;0
163 111  FE_RESET_R/77             $84=      $83                  ?176                	;0
164 111  FE_FETCH_R/78             #85=      $84                  16?10               	;176	>>176	<<175
165 111  ASSIGN/38                 ?67       16?11                #85                 	;0
166 112  FETCH_DIM_R/81            $87=      16?9                 98:'id'             	;0
167 112  CONCAT/8                  #88=      $87                  99:'_'              	;0
168 112  CONCAT/8                  #89=      #88                  16?11               	;0
169 112  FETCH_DIM_R/81            $91=      16?9                 100:'server_name'   	;0
170 112  CONCAT/8                  #92=      $91                  101:' - '           	;0
171 112  FETCH_DIM_R/81            $93=      16?10                102:'name'          	;0
172 112  CONCAT/8                  #94=      #92                  $93                 	;0
173 112  ASSIGN_DIM/147            ?71       16?5                 #89                 	;0
174 112  OP_DATA/137               ?0        #94                  ?0                  	;0
175 113  JMP/42                    ?0        ?164                 ?0                  	;0	>>164
176 113  FE_FREE/127               ?0        $84                  ?0                  	;0	<<163
177 117  JMP/42                    ?0        ?147                 ?0                  	;0	>>147
178 117  FE_FREE/127               ?0        $75                  ?0                  	;0	<<146
179 119  GOTO/253                  ?0        ?228                 ?103                	;0
180 121  FE_RESET_R/77             $95=      104:array (
  '' => 'Default',
  'losslesshp' => 'Lossless - High Performance',
  'lossless' => 'Lossless',
  'llhp' => 'Low Latency - High Performance',
  'llhq' => 'Low Latency - High Quality',
  'll' => 'Low Latency',
  'bd' => 'Blu-Ray Disk',
  'hq' => 'High Quality',
  'hp' => 'High Performance',
  'fast' => 'Fast',
  'medium' => 'Medium',
  'slow' => 'Slow',
) ?200                	;0
181 121  FE_FETCH_R/78             #96=      $95                  16?3                	;200	>>200	<<199
182 121  ASSIGN/38                 ?78       16?4                 #96                 	;0
183 122  ECHO/40                   ?0        105:'																<option ' ?0                  	;0
184 123  ISSET_ISEMPTY_CV/197      #98=      16?1                 ?0                  	;33554432
185 123  JMPZ_EX/46                #98=      #98                  ?189                	;0	>>189
186 123  FETCH_DIM_R/81            $99=      16?0                 106:'-preset'       	;0
187 123  IS_EQUAL/17               #100=     $99                  16?4                	;0
188 123  BOOL/52                   #98=      #100                 ?0                  	;0
189 123  BOOL_NOT/13               #101=     #98                  ?0                  	;0	<<185
190 123  JMPZ/43                   ?0        #101                 ?193                	;0	>>193
191 124  NOP/0                     ?0        ?0                   ?0                  	;1
192 124  GOTO/253                  ?0        ?194                 ?107                	;0
193 126  ECHO/40                   ?0        108:'selected '      ?0                  	;0	<<190
194 128  ECHO/40                   ?0        109:'value="'        ?0                  	;0
195 129  ECHO/40                   ?0        16?4                 ?0                  	;0
196 130  ECHO/40                   ?0        110:'">'             ?0                  	;0
197 131  ECHO/40                   ?0        16?3                 ?0                  	;0
198 132  ECHO/40                   ?0        111:'</option>
																' ?0                  	;0
199 133  JMP/42                    ?0        ?181                 ?0                  	;0	>>181
200 133  FE_FREE/127               ?0        $95                  ?0                  	;0	<<180
201 136  ECHO/40                   ?0        112:'															</select>
														</div>
														<label class="col-md-3 col-form-label" for="video_profile_h264">' ?0                  	;0
202 137  FETCH_DIM_R/81            $102=     16?2                 113:'video_profile' 	;0
203 137  ECHO/40                   ?0        $102                 ?0                  	;0
204 138  ECHO/40                   ?0        114:'</label>
														<div class="col-md-3">
															<select id="video_profile_h264" name="video_profile_h264" class="form-control" data-toggle="select2">
																' ?0                  	;0
205 139  GOTO/253                  ?0        ?59                  ?115                	;0
206 141  ECHO/40                   ?0        116:'</span>
										</a>
									</li>
								</ul>
								<div class="tab-content b-0 mb-0 pt-0">
									<div class="tab-pane" id="profile-details">
										<div class="row">
											<div class="col-12">
												<div class="form-group row mb-4">
													<label class="col-md-3 col-form-label" for="profile_name">' ?0                  	;0
207 142  FETCH_DIM_R/81            $103=     16?2                 117:'profile_name'  	;0
208 142  ECHO/40                   ?0        $103                 ?0                  	;0
209 143  ECHO/40                   ?0        118:'</label>
													<div class="col-md-9">
														<input type="text" class="form-control" id="profile_name" name="profile_name" value="' ?0                  	;0
210 144  ISSET_ISEMPTY_CV/197      #104=     16?1                 ?0                  	;33554432
211 144  BOOL_NOT/13               #105=     #104                 ?0                  	;0
212 144  JMPZ/43                   ?0        #105                 ?214                	;0	>>214
213 145  GOTO/253                  ?0        ?113                 ?119                	;0
214 147  INIT_FCALL_BY_NAME/59     ?0        ?0                   120:'htmlspecialchars'	;1	<<212
215 147  FETCH_DIM_FUNC_ARG/93     $106=     16?1                 122:'profile_name'  	;1
216 147  SEND_VAR_EX/66            ?80       $106                 ?1                  	;0
217 147  DO_FCALL_BY_NAME/131      $107=     ?0                   ?0                  	;0
218 147  ECHO/40                   ?0        $107                 ?0                  	;0
219 148  GOTO/253                  ?0        ?113                 ?123                	;0
220 150  ECHO/40                   ?0        124:'				</div>
				' ?0                  	;0
221 152  ECHO/40                   ?0        125:'				<div class="card">
					<div class="card-body">
						<form action="#" method="POST" data-parsley-validate="">
							' ?0                  	;0
222 153  ISSET_ISEMPTY_CV/197      #108=     16?1                 ?0                  	;33554432
223 153  BOOL_NOT/13               #109=     #108                 ?0                  	;0
224 153  JMPZ/43                   ?0        #109                 ?226                	;0	>>226
225 154  GOTO/253                  ?0        ?471                 ?126                	;0
226 156  ECHO/40                   ?0        127:'							<input type="hidden" name="edit" value="' ?0                  	;0	<<224
227 157  GOTO/253                  ?0        ?468                 ?128                	;0
228 160  ASSIGN/38                 ?91       16?12                129:'Transcoding Profile'	;0
229 161  INCLUDE_OR_EVAL/73        ?92       130:'header.php'     ?0                  	;2
230 162  ECHO/40                   ?0        131:'<div class="wrapper boxed-layout-ext"' ?0                  	;0
231 163  FETCH_IS/89               $112=     132:'_SERVER'        ?0                  	;0
232 163  ISSET_ISEMPTY_DIM_OBJ/115 #113=     $112                 133:'HTTP_X_REQUESTED_WITH'	;16777216
233 163  BOOL_NOT/13               #114=     #113                 ?0                  	;0
234 163  JMPZ_EX/46                #114=     #114                 ?242                	;0	>>242
235 163  INIT_FCALL_BY_NAME/59     ?0        ?0                   134:'strtolower'    	;1
236 163  FETCH_FUNC_ARG/92         $115=     136:'_SERVER'        ?0                  	;1
237 163  FETCH_DIM_FUNC_ARG/93     $116=     $115                 137:'HTTP_X_REQUESTED_WITH'	;1
238 163  SEND_VAR_EX/66            ?80       $116                 ?1                  	;0
239 163  DO_FCALL_BY_NAME/131      $117=     ?0                   ?0                  	;0
240 163  IS_EQUAL/17               #118=     $117                 138:'xmlhttprequest'	;0
241 163  BOOL/52                   #114=     #118                 ?0                  	;0
242 163  BOOL_NOT/13               #119=     #114                 ?0                  	;0	<<234
243 163  JMPZ/43                   ?0        #119                 ?245                	;0	>>245
244 164  GOTO/253                  ?0        ?436                 ?139                	;0
245 166  GOTO/253                  ?0        ?435                 ?140                	;0	<<243
246 169  ECHO/40                   ?0        141:'															</select>
														</div>
													</div>
												</div>
												<div id="cpu_options">
													<div class="form-group row mb-4">
														<label class="col-md-3 col-form-label" for="preset_cpu">' ?0                  	;0
247 170  FETCH_DIM_R/81            $120=     16?2                 142:'preset'        	;0
248 170  ECHO/40                   ?0        $120                 ?0                  	;0
249 171  ECHO/40                   ?0        143:' <i title="'    ?0                  	;0
250 172  FETCH_DIM_R/81            $121=     16?2                 144:'profile_tooltip_1'	;0
251 172  ECHO/40                   ?0        $121                 ?0                  	;0
252 173  GOTO/253                  ?0        ?253                 ?145                	;0
253 175  ECHO/40                   ?0        146:'" class="tooltip text-secondary far fa-circle"></i></label>
														<div class="col-md-3">
															<select id="preset_cpu" name="preset_cpu" class="form-control" data-toggle="select2">
																' ?0                  	;0
254 176  FE_RESET_R/77             $122=     147:array (
  '' => 'Default',
  'ultrafast' => 'Ultra Fast',
  'superfast' => 'Super Fast',
  'veryfast' => 'Very Fast',
  'faster' => 'Faster',
  'fast' => 'Fast',
  'medium' => 'Medium',
  'slow' => 'Slow',
  'slower' => 'Slower',
  'veryslow' => 'Very Slow',
  'placebo' => 'Placebo',
) ?274                	;0
255 176  FE_FETCH_R/78             #123=     $122                 16?3                	;274	>>274	<<273
256 176  ASSIGN/38                 ?105      16?4                 #123                	;0
257 177  ECHO/40                   ?0        148:'																<option ' ?0                  	;0
258 178  ISSET_ISEMPTY_CV/197      #125=     16?1                 ?0                  	;33554432
259 178  JMPZ_EX/46                #125=     #125                 ?263                	;0	>>263
260 178  FETCH_DIM_R/81            $126=     16?0                 149:'-preset'       	;0
261 178  IS_EQUAL/17               #127=     $126                 16?4                	;0
262 178  BOOL/52                   #125=     #127                 ?0                  	;0
263 178  BOOL_NOT/13               #128=     #125                 ?0                  	;0	<<259
264 178  JMPZ/43                   ?0        #128                 ?267                	;0	>>267
265 179  NOP/0                     ?0        ?0                   ?0                  	;1
266 179  GOTO/253                  ?0        ?268                 ?150                	;0
267 181  ECHO/40                   ?0        151:'selected '      ?0                  	;0	<<264
268 183  ECHO/40                   ?0        152:'value="'        ?0                  	;0
269 184  ECHO/40                   ?0        16?4                 ?0                  	;0
270 185  ECHO/40                   ?0        153:'">'             ?0                  	;0
271 186  ECHO/40                   ?0        16?3                 ?0                  	;0
272 187  ECHO/40                   ?0        154:'</option>
																' ?0                  	;0
273 188  JMP/42                    ?0        ?255                 ?0                  	;0	>>255
274 188  FE_FREE/127               ?0        $122                 ?0                  	;0	<<254
275 191  ECHO/40                   ?0        155:'															</select>
														</div>
														<label class="col-md-3 col-form-label" for="video_profile_cpu">' ?0                  	;0
276 192  FETCH_DIM_R/81            $129=     16?2                 156:'video_profile' 	;0
277 192  ECHO/40                   ?0        $129                 ?0                  	;0
278 193  GOTO/253                  ?0        ?766                 ?157                	;0
279 195  FETCH_DIM_R/81            $130=     16?2                 158:'profile_tooltip_1'	;0
280 195  ECHO/40                   ?0        $130                 ?0                  	;0
281 196  ECHO/40                   ?0        159:'" class="tooltip text-secondary far fa-circle"></i></label>
														<div class="col-md-3">
															<select id="preset_hevc" name="preset_hevc" class="form-control" data-toggle="select2">
																' ?0                  	;0
282 197  FE_RESET_R/77             $131=     160:array (
  '' => 'Default',
  'losslesshp' => 'Lossless - High Performance',
  'lossless' => 'Lossless',
  'llhp' => 'Low Latency - High Performance',
  'llhq' => 'Low Latency - High Quality',
  'll' => 'Low Latency',
  'bd' => 'Blu-Ray Disk',
  'hq' => 'High Quality',
  'hp' => 'High Performance',
  'fast' => 'Fast',
  'medium' => 'Medium',
  'slow' => 'Slow',
) ?302                	;0
283 197  FE_FETCH_R/78             #132=     $131                 16?3                	;302	>>302	<<301
284 197  ASSIGN/38                 ?114      16?4                 #132                	;0
285 198  ECHO/40                   ?0        161:'																<option ' ?0                  	;0
286 199  ISSET_ISEMPTY_CV/197      #134=     16?1                 ?0                  	;33554432
287 199  JMPZ_EX/46                #134=     #134                 ?291                	;0	>>291
288 199  FETCH_DIM_R/81            $135=     16?0                 162:'-preset'       	;0
289 199  IS_EQUAL/17               #136=     $135                 16?4                	;0
290 199  BOOL/52                   #134=     #136                 ?0                  	;0
291 199  BOOL_NOT/13               #137=     #134                 ?0                  	;0	<<287
292 199  JMPZ/43                   ?0        #137                 ?295                	;0	>>295
293 200  NOP/0                     ?0        ?0                   ?0                  	;1
294 200  GOTO/253                  ?0        ?296                 ?163                	;0
295 202  ECHO/40                   ?0        164:'selected '      ?0                  	;0	<<292
296 204  ECHO/40                   ?0        165:'value="'        ?0                  	;0
297 205  ECHO/40                   ?0        16?4                 ?0                  	;0
298 206  ECHO/40                   ?0        166:'">'             ?0                  	;0
299 207  ECHO/40                   ?0        16?3                 ?0                  	;0
300 208  ECHO/40                   ?0        167:'</option>
																' ?0                  	;0
301 209  JMP/42                    ?0        ?283                 ?0                  	;0	>>283
302 209  FE_FREE/127               ?0        $131                 ?0                  	;0	<<282
303 212  ECHO/40                   ?0        168:'															</select>
														</div>
														<label class="col-md-3 col-form-label" for="video_profile_hevc">' ?0                  	;0
304 213  GOTO/253                  ?0        ?573                 ?169                	;0
305 215  ISSET_ISEMPTY_CV/197      #138=     16?1                 ?0                  	;33554432
306 215  BOOL_NOT/13               #139=     #138                 ?0                  	;0
307 215  JMPZ/43                   ?0        #139                 ?309                	;0	>>309
308 216  GOTO/253                  ?0        ?315                 ?170                	;0
309 218  INIT_FCALL_BY_NAME/59     ?0        ?0                   171:'htmlspecialchars'	;1	<<307
310 218  FETCH_DIM_FUNC_ARG/93     $140=     16?0                 173:'gpu'           	;1
311 218  FETCH_DIM_FUNC_ARG/93     $141=     $140                 174:'resize'        	;1
312 218  SEND_VAR_EX/66            ?80       $141                 ?1                  	;0
313 218  DO_FCALL_BY_NAME/131      $142=     ?0                   ?0                  	;0
314 218  ECHO/40                   ?0        $142                 ?0                  	;0
315 220  ECHO/40                   ?0        175:'">
														</div>
														<label class="col-md-3 col-form-label" for="deint">Deinterlace <i title="Set deinterlacing mode." class="tooltip text-secondary far fa-circle"></i></label>
														<div class="col-md-3">
															<select name="deint" class="form-control" data-toggle="select2">
																' ?0                  	;0
316 221  FE_RESET_R/77             $143=     176:array (
  0 => 'Weave (default)',
  1 => 'Bob',
  2 => 'Adaptive',
) ?337                	;0
317 221  FE_FETCH_R/78             #144=     $143                 16?13               	;337	>>337	<<336
318 221  ASSIGN/38                 ?126      16?14                #144                	;0
319 222  ECHO/40                   ?0        177:'																<option ' ?0                  	;0
320 223  ISSET_ISEMPTY_CV/197      #146=     16?1                 ?0                  	;33554432
321 223  JMPZ_EX/46                #146=     #146                 ?326                	;0	>>326
322 223  FETCH_DIM_R/81            $147=     16?0                 178:'gpu'           	;0
323 223  FETCH_DIM_R/81            $148=     $147                 179:'deint'         	;0
324 223  IS_EQUAL/17               #149=     $148                 16?14               	;0
325 223  BOOL/52                   #146=     #149                 ?0                  	;0
326 223  BOOL_NOT/13               #150=     #146                 ?0                  	;0	<<321
327 223  JMPZ/43                   ?0        #150                 ?330                	;0	>>330
328 224  NOP/0                     ?0        ?0                   ?0                  	;1
329 224  GOTO/253                  ?0        ?331                 ?180                	;0
330 226  ECHO/40                   ?0        181:'selected '      ?0                  	;0	<<327
331 228  ECHO/40                   ?0        182:'value="'        ?0                  	;0
332 229  ECHO/40                   ?0        16?14                ?0                  	;0
333 230  ECHO/40                   ?0        183:'">'             ?0                  	;0
334 231  ECHO/40                   ?0        16?13                ?0                  	;0
335 232  ECHO/40                   ?0        184:'</option>
																' ?0                  	;0
336 233  JMP/42                    ?0        ?317                 ?0                  	;0	>>317
337 233  FE_FREE/127               ?0        $143                 ?0                  	;0	<<316
338 235  GOTO/253                  ?0        ?246                 ?185                	;0
339 237  FETCH_DIM_R/81            $151=     16?2                 186:'profile_tooltip_7'	;0
340 237  ECHO/40                   ?0        $151                 ?0                  	;0
341 238  ECHO/40                   ?0        187:'" class="tooltip text-secondary far fa-circle"></i></label>
													<div class="col-md-3">
														<input type="text" class="form-control" id="buffer_size" name="buffer_size" value="' ?0                  	;0
342 239  ISSET_ISEMPTY_CV/197      #152=     16?1                 ?0                  	;33554432
343 239  BOOL_NOT/13               #153=     #152                 ?0                  	;0
344 239  JMPZ/43                   ?0        #153                 ?346                	;0	>>346
345 240  GOTO/253                  ?0        ?352                 ?188                	;0
346 242  INIT_FCALL_BY_NAME/59     ?0        ?0                   189:'htmlspecialchars'	;1	<<344
347 242  FETCH_DIM_FUNC_ARG/93     $154=     16?0                 191:7               	;1
348 242  FETCH_DIM_FUNC_ARG/93     $155=     $154                 192:'val'           	;1
349 242  SEND_VAR_EX/66            ?80       $155                 ?1                  	;0
350 242  DO_FCALL_BY_NAME/131      $156=     ?0                   ?0                  	;0
351 242  ECHO/40                   ?0        $156                 ?0                  	;0
352 244  GOTO/253                  ?0        ?758                 ?193                	;0
353 247  ECHO/40                   ?0        194:'">
													</div>
												</div>
												<div class="form-group row mb-4">
													<label class="col-md-3 col-form-label" for="min_tolerance">' ?0                  	;0
354 248  FETCH_DIM_R/81            $157=     16?2                 195:'minimum_bitrate_tolerance'	;0
355 248  ECHO/40                   ?0        $157                 ?0                  	;0
356 249  ECHO/40                   ?0        196:' <i title="'    ?0                  	;0
357 250  FETCH_DIM_R/81            $158=     16?2                 197:'profile_tooltip_5'	;0
358 250  ECHO/40                   ?0        $158                 ?0                  	;0
359 251  GOTO/253                  ?0        ?44                  ?198                	;0
360 253  INCLUDE_OR_EVAL/73        ?140      199:'session.php'    ?0                  	;2	<<0
361 254  INCLUDE_OR_EVAL/73        ?141      200:'functions.php'  ?0                  	;2
362 255  INIT_FCALL_BY_NAME/59     ?0        ?0                   201:'E6d500e19634d513'	;0
363 255  DO_FCALL_BY_NAME/131      $161=     ?0                   ?0                  	;0
364 255  JMPZ/43                   ?0        $161                 ?366                	;0	>>366
365 256  GOTO/253                  ?0        ?368                 ?203                	;0
366 258  INIT_FCALL_BY_NAME/59     ?0        ?0                   204:'E72F42a93714ba87'	;0	<<364
367 258  DO_FCALL_BY_NAME/131      ?143      ?0                   ?0                  	;0
368 260  GOTO/253                  ?0        ?504                 ?206                	;0
369 262  ECHO/40                   ?0        207:'" class="tooltip text-secondary far fa-circle"></i></label>
													<div class="col-md-3">
														<input type="text" class="form-control" id="samplerate" name="samplerate" value="' ?0                  	;0
370 263  ISSET_ISEMPTY_CV/197      #163=     16?1                 ?0                  	;33554432
371 263  BOOL_NOT/13               #164=     #163                 ?0                  	;0
372 263  JMPZ/43                   ?0        #164                 ?374                	;0	>>374
373 264  GOTO/253                  ?0        ?380                 ?208                	;0
374 266  INIT_FCALL_BY_NAME/59     ?0        ?0                   209:'htmlspecialchars'	;1	<<372
375 266  FETCH_DIM_FUNC_ARG/93     $165=     16?0                 211:12              	;1
376 266  FETCH_DIM_FUNC_ARG/93     $166=     $165                 212:'val'           	;1
377 266  SEND_VAR_EX/66            ?80       $166                 ?1                  	;0
378 266  DO_FCALL_BY_NAME/131      $167=     ?0                   ?0                  	;0
379 266  ECHO/40                   ?0        $167                 ?0                  	;0
380 268  ECHO/40                   ?0        213:'">
													</div>
												</div>
												<div class="form-group row mb-4">
													<label class="col-md-3 col-form-label" for="audio_channels">' ?0                  	;0
381 269  GOTO/253                  ?0        ?599                 ?214                	;0
382 271  ISSET_ISEMPTY_CV/197      #168=     16?1                 ?0                  	;33554432
383 271  JMPZ/43                   ?0        #168                 ?385                	;0	>>385
384 272  GOTO/253                  ?0        ?388                 ?215                	;0
385 274  FETCH_DIM_R/81            $169=     16?2                 216:'add_profile'   	;0	<<383
386 274  ECHO/40                   ?0        $169                 ?0                  	;0
387 275  GOTO/253                  ?0        ?745                 ?217                	;0
388 277  FETCH_DIM_R/81            $170=     16?2                 218:'edit_profile'  	;0
389 277  ECHO/40                   ?0        $170                 ?0                  	;0
390 278  GOTO/253                  ?0        ?745                 ?219                	;0
391 280  FETCH_DIM_R/81            $171=     16?2                 220:'add'           	;0
392 280  ECHO/40                   ?0        $171                 ?0                  	;0
393 281  GOTO/253                  ?0        ?396                 ?221                	;0
394 283  FETCH_DIM_R/81            $172=     16?2                 222:'edit'          	;0
395 283  ECHO/40                   ?0        $172                 ?0                  	;0
396 285  GOTO/253                  ?0        ?57                  ?223                	;0
397 287  INIT_FCALL_BY_NAME/59     ?0        ?0                   224:'htmlspecialchars'	;1
398 287  FETCH_DIM_FUNC_ARG/93     $173=     16?0                 226:13              	;1
399 287  FETCH_DIM_FUNC_ARG/93     $174=     $173                 227:'val'           	;1
400 287  SEND_VAR_EX/66            ?80       $174                 ?1                  	;0
401 287  DO_FCALL_BY_NAME/131      $175=     ?0                   ?0                  	;0
402 287  ECHO/40                   ?0        $175                 ?0                  	;0
403 289  ECHO/40                   ?0        228:'">
													</div>
													<label class="col-md-3 col-form-label" for="threads">' ?0                  	;0
404 290  FETCH_DIM_R/81            $176=     16?2                 229:'threads'       	;0
405 290  ECHO/40                   ?0        $176                 ?0                  	;0
406 291  ECHO/40                   ?0        230:' <i title="'    ?0                  	;0
407 292  GOTO/253                  ?0        ?85                  ?231                	;0
408 295  ECHO/40                   ?0        232:'">
														</div>
														<label class="col-md-3 col-form-label" for="yadif_filter">Enable Deinterlace Filter <i title="De-interlace video using yadif filter. May be incompatible with other options that occupy the video filter. For GPU transcoding you should use the NVENC deinterlacing options." class="tooltip text-secondary far fa-circle"></i></label>
														<div class="col-md-3">
															<input name="yadif_filter" id="yadif_filter" type="checkbox"' ?0                  	;0
409 296  ISSET_ISEMPTY_CV/197      #177=     16?1                 ?0                  	;33554432
410 296  JMPZ_EX/46                #177=     #177                 ?415                	;0	>>415
411 296  FETCH_DIM_R/81            $178=     16?0                 233:17              	;0
412 296  FETCH_DIM_R/81            $179=     $178                 234:'val'           	;0
413 296  IS_EQUAL/17               #180=     $179                 235:1               	;0
414 296  BOOL/52                   #177=     #180                 ?0                  	;0
415 296  BOOL_NOT/13               #181=     #177                 ?0                  	;0	<<410
416 296  JMPZ/43                   ?0        #181                 ?418                	;0	>>418
417 297  GOTO/253                  ?0        ?419                 ?236                	;0
418 299  ECHO/40                   ?0        237:' checked '      ?0                  	;0	<<416
419 301  GOTO/253                  ?0        ?799                 ?238                	;0
420 303  ECHO/40                   ?0        239:' <i title="'    ?0                  	;0
421 304  FETCH_DIM_R/81            $182=     16?2                 240:'profile_tooltip_11'	;0
422 304  ECHO/40                   ?0        $182                 ?0                  	;0
423 305  ECHO/40                   ?0        241:'" class="tooltip text-secondary far fa-circle"></i></label>
													<div class="col-md-3">
														<input type="text" class="form-control" id="framerate" name="framerate" value="' ?0                  	;0
424 306  ISSET_ISEMPTY_CV/197      #183=     16?1                 ?0                  	;33554432
425 306  BOOL_NOT/13               #184=     #183                 ?0                  	;0
426 306  JMPZ/43                   ?0        #184                 ?428                	;0	>>428
427 307  GOTO/253                  ?0        ?792                 ?242                	;0
428 309  INIT_FCALL_BY_NAME/59     ?0        ?0                   243:'htmlspecialchars'	;1	<<426
429 309  FETCH_DIM_FUNC_ARG/93     $185=     16?0                 245:11              	;1
430 309  FETCH_DIM_FUNC_ARG/93     $186=     $185                 246:'val'           	;1
431 309  SEND_VAR_EX/66            ?80       $186                 ?1                  	;0
432 309  DO_FCALL_BY_NAME/131      $187=     ?0                   ?0                  	;0
433 309  ECHO/40                   ?0        $187                 ?0                  	;0
434 310  GOTO/253                  ?0        ?792                 ?247                	;0
435 312  ECHO/40                   ?0        248:' style="display: none;"' ?0                  	;0
436 314  ECHO/40                   ?0        249:'>
    <div class="container-fluid">
		<div class="row">
			<div class="col-12">
				<div class="page-title-box">
					<div class="page-title-right">
                        ' ?0                  	;0
437 315  INCLUDE_OR_EVAL/73        ?169      250:'topbar.php'     ?0                  	;2
438 316  ECHO/40                   ?0        251:'					</div>
					<h4 class="page-title">' ?0                  	;0
439 317  GOTO/253                  ?0        ?382                 ?252                	;0
440 319  FETCH_DIM_R/81            $189=     16?2                 253:'video_codec'   	;0
441 319  ECHO/40                   ?0        $189                 ?0                  	;0
442 320  ECHO/40                   ?0        254:'</label>
													<div class="col-md-9" id="video_codec_cpu_container">
														<select id="video_codec_cpu" name="video_codec_cpu" class="form-control" data-toggle="select2">
															' ?0                  	;0
443 321  FE_RESET_R/77             $190=     255:array (
  'copy' => 'Copy Video Codec',
  'libx264' => 'H.264 / MPEG-4 AVC',
  'libx265' => 'H.265 / HEVC',
  'mpegvideo' => 'H.262 / MPEG-2',
) ?465                	;0
444 321  FE_FETCH_R/78             #191=     $190                 16?15               	;465	>>465	<<464
445 321  ASSIGN/38                 ?173      16?16                #191                	;0
446 322  ECHO/40                   ?0        256:'															<option ' ?0                  	;0
447 323  ISSET_ISEMPTY_CV/197      #193=     16?1                 ?0                  	;33554432
448 323  JMPZ_EX/46                #193=     #193                 ?452                	;0	>>452
449 323  FETCH_DIM_R/81            $194=     16?0                 257:'-vcodec'       	;0
450 323  IS_EQUAL/17               #195=     $194                 16?16               	;0
451 323  BOOL/52                   #193=     #195                 ?0                  	;0
452 323  BOOL_NOT/13               #196=     #193                 ?0                  	;0	<<448
453 323  JMPZ/43                   ?0        #196                 ?456                	;0	>>456
454 324  NOP/0                     ?0        ?0                   ?0                  	;1
455 324  GOTO/253                  ?0        ?457                 ?258                	;0
456 326  ECHO/40                   ?0        259:'selected '      ?0                  	;0	<<453
457 328  ECHO/40                   ?0        260:'value="'        ?0                  	;0
458 329  ECHO/40                   ?0        16?16                ?0                  	;0
459 330  ECHO/40                   ?0        261:'">'             ?0                  	;0
460 331  CONCAT/8                  #197=     16?16                262:' - '           	;0
461 331  CONCAT/8                  #198=     #197                 16?15               	;0
462 331  ECHO/40                   ?0        #198                 ?0                  	;0
463 332  ECHO/40                   ?0        263:'</option>
															' ?0                  	;0
464 333  JMP/42                    ?0        ?444                 ?0                  	;0	>>444
465 333  FE_FREE/127               ?0        $190                 ?0                  	;0	<<443
466 336  ECHO/40                   ?0        264:'														</select>
                                                    </div>
                                                    <div class="col-md-6" id="video_codec_gpu_container" style="display: none;">
														<select id="video_codec_gpu" name="video_codec_gpu" class="form-control" data-toggle="select2">
															' ?0                  	;0
467 337  GOTO/253                  ?0        ?691                 ?265                	;0
468 339  FETCH_DIM_R/81            $199=     16?1                 266:'profile_id'    	;0
469 339  ECHO/40                   ?0        $199                 ?0                  	;0
470 340  ECHO/40                   ?0        267:'" />
							'   ?0                  	;0
471 342  ECHO/40                   ?0        268:'							<div id="basicwizard">
								<ul class="nav nav-pills bg-light nav-justified form-wizard-header mb-4">
									<li class="nav-item">
										<a href="#profile-details" data-toggle="tab" class="nav-link rounded-0 pt-2 pb-2"> 
											<i class="mdi mdi-account-card-details-outline mr-1"></i>
											<span class="d-none d-sm-inline">' ?0                  	;0
472 343  FETCH_DIM_R/81            $200=     16?2                 269:'details'       	;0
473 343  ECHO/40                   ?0        $200                 ?0                  	;0
474 344  GOTO/253                  ?0        ?206                 ?270                	;0
475 346  ECHO/40                   ?0        271:' <i title="'    ?0                  	;0
476 347  FETCH_DIM_R/81            $201=     16?2                 272:'profile_tooltip_9'	;0
477 347  ECHO/40                   ?0        $201                 ?0                  	;0
478 348  ECHO/40                   ?0        273:'" class="tooltip text-secondary far fa-circle"></i></label>
														<div class="col-md-3">
															<input type="text" class="form-control" id="scaling" name="scaling" value="' ?0                  	;0
479 349  ISSET_ISEMPTY_CV/197      #202=     16?1                 ?0                  	;33554432
480 349  BOOL_NOT/13               #203=     #202                 ?0                  	;0
481 349  JMPZ/43                   ?0        #203                 ?483                	;0	>>483
482 350  GOTO/253                  ?0        ?408                 ?274                	;0
483 352  INIT_FCALL_BY_NAME/59     ?0        ?0                   275:'htmlspecialchars'	;1	<<481
484 352  FETCH_DIM_FUNC_ARG/93     $204=     16?0                 277:9               	;1
485 352  FETCH_DIM_FUNC_ARG/93     $205=     $204                 278:'val'           	;1
486 352  SEND_VAR_EX/66            ?80       $205                 ?1                  	;0
487 352  DO_FCALL_BY_NAME/131      $206=     ?0                   ?0                  	;0
488 352  ECHO/40                   ?0        $206                 ?0                  	;0
489 353  GOTO/253                  ?0        ?408                 ?279                	;0
490 355  ISSET_ISEMPTY_CV/197      #207=     16?1                 ?0                  	;33554432
491 355  BOOL_NOT/13               #208=     #207                 ?0                  	;0
492 355  JMPZ/43                   ?0        #208                 ?494                	;0	>>494
493 356  GOTO/253                  ?0        ?500                 ?280                	;0
494 358  INIT_FCALL_BY_NAME/59     ?0        ?0                   281:'htmlspecialchars'	;1	<<492
495 358  FETCH_DIM_FUNC_ARG/93     $209=     16?0                 283:3               	;1
496 358  FETCH_DIM_FUNC_ARG/93     $210=     $209                 284:'val'           	;1
497 358  SEND_VAR_EX/66            ?80       $210                 ?1                  	;0
498 358  DO_FCALL_BY_NAME/131      $211=     ?0                   ?0                  	;0
499 358  ECHO/40                   ?0        $211                 ?0                  	;0
500 360  ECHO/40                   ?0        285:'">
													</div>
													<label class="col-md-3 col-form-label" for="audio_bitrate">' ?0                  	;0
501 361  FETCH_DIM_R/81            $212=     16?2                 286:'average_audio_bitrate'	;0
502 361  ECHO/40                   ?0        $212                 ?0                  	;0
503 362  GOTO/253                  ?0        ?558                 ?287                	;0
504 364  FETCH_STATIC_PROP_IS/176  $213=     288:'rRequest'       289:'XUI'           	;0
505 364  ISSET_ISEMPTY_DIM_OBJ/115 #214=     $213                 291:'id'            	;33554432
506 364  JMPZ_EX/46                #214=     #214                 ?515                	;0	>>515
507 364  INIT_FCALL_BY_NAME/59     ?0        ?0                   292:'b11216Ab01AAA78C'	;1
508 364  FETCH_STATIC_PROP_FUNC_ARG/177 $215=     294:'rRequest'       295:'XUI'           	;1
509 364  FETCH_DIM_FUNC_ARG/93     $216=     $215                 297:'id'            	;1
510 364  SEND_VAR_EX/66            ?80       $216                 ?1                  	;0
511 364  DO_FCALL_BY_NAME/131      $217=     ?0                   ?0                  	;0
512 364  ASSIGN/38                 $218=     16?1                 $217                	;0
513 364  BOOL_NOT/13               #219=     $218                 ?0                  	;0
514 364  BOOL/52                   #214=     #219                 ?0                  	;0
515 364  BOOL_NOT/13               #220=     #214                 ?0                  	;0	<<506
516 364  JMPZ/43                   ?0        #220                 ?518                	;0	>>518
517 365  GOTO/253                  ?0        ?520                 ?298                	;0
518 367  INIT_FCALL_BY_NAME/59     ?0        ?0                   299:'e72F42a93714Ba87'	;0	<<516
519 367  DO_FCALL_BY_NAME/131      ?202      ?0                   ?0                  	;0
520 369  ISSET_ISEMPTY_CV/197      #222=     16?1                 ?0                  	;33554432
521 369  BOOL_NOT/13               #223=     #222                 ?0                  	;0
522 369  JMPZ/43                   ?0        #223                 ?524                	;0	>>524
523 370  GOTO/253                  ?0        ?145                 ?301                	;0
524 372  INIT_FCALL_BY_NAME/59     ?0        ?0                   302:'json_decode'   	;2	<<522
525 372  FETCH_DIM_FUNC_ARG/93     $224=     16?1                 304:'profile_options'	;1
526 372  SEND_VAR_EX/66            ?80       $224                 ?1                  	;0
527 372  SEND_VAL_EX/116           ?96       305:true             ?2                  	;0
528 372  DO_FCALL_BY_NAME/131      $225=     ?0                   ?0                  	;0
529 372  ASSIGN/38                 ?207      16?0                 $225                	;0
530 373  GOTO/253                  ?0        ?1                   ?306                	;0
531 375  GOTO/253                  ?0        ?145                 ?307                	;0
532 377  ISSET_ISEMPTY_DIM_OBJ/115 #227=     16?0                 308:9               	;33554432
533 377  BOOL_NOT/13               #228=     #227                 ?0                  	;0
534 377  JMPZ/43                   ?0        #228                 ?536                	;0	>>536
535 378  GOTO/253                  ?0        ?546                 ?309                	;0
536 380  INIT_FCALL_BY_NAME/59     ?0        ?0                   312:'str_replace'   	;3	<<534
537 380  SEND_VAL_EX/116           ?80       314:':'              ?1                  	;0
538 380  SEND_VAL_EX/116           ?96       315:'x'              ?2                  	;0
539 380  FETCH_DIM_FUNC_ARG/93     $231=     16?0                 316:9               	;3
540 380  FETCH_DIM_FUNC_ARG/93     $232=     $231                 317:'val'           	;3
541 380  SEND_VAR_EX/66            ?112      $232                 ?3                  	;0
542 380  DO_FCALL_BY_NAME/131      $233=     ?0                   ?0                  	;0
543 380  FETCH_DIM_W/84            $229=     16?0                 310:'gpu'           	;0
544 380  ASSIGN_DIM/147            ?211      $229                 311:'resize'        	;0
545 380  OP_DATA/137               ?0        $233                 ?0                  	;0
546 382  GOTO/253                  ?0        ?138                 ?318                	;0
547 384  FETCH_DIM_R/81            $234=     16?2                 319:'maximum_bitrate_tolerance'	;0
548 384  ECHO/40                   ?0        $234                 ?0                  	;0
549 385  ECHO/40                   ?0        320:' <i title="'    ?0                  	;0
550 386  FETCH_DIM_R/81            $235=     16?2                 321:'profile_tooltip_6'	;0
551 386  ECHO/40                   ?0        $235                 ?0                  	;0
552 387  ECHO/40                   ?0        322:'" class="tooltip text-secondary far fa-circle"></i></label>
													<div class="col-md-3">
														<input type="text" class="form-control" id="max_tolerance" name="max_tolerance" value="' ?0                  	;0
553 388  ISSET_ISEMPTY_CV/197      #236=     16?1                 ?0                  	;33554432
554 388  BOOL_NOT/13               #237=     #236                 ?0                  	;0
555 388  JMPZ/43                   ?0        #237                 ?557                	;0	>>557
556 389  GOTO/253                  ?0        ?686                 ?323                	;0
557 391  GOTO/253                  ?0        ?680                 ?324                	;0	<<555
558 393  ECHO/40                   ?0        325:' <i title="'    ?0                  	;0
559 394  FETCH_DIM_R/81            $238=     16?2                 326:'profile_tooltip_4'	;0
560 394  ECHO/40                   ?0        $238                 ?0                  	;0
561 395  ECHO/40                   ?0        327:'" class="tooltip text-secondary far fa-circle"></i></label>
													<div class="col-md-3">
														<input type="text" class="form-control" id="audio_bitrate" name="audio_bitrate" value="' ?0                  	;0
562 396  ISSET_ISEMPTY_CV/197      #239=     16?1                 ?0                  	;33554432
563 396  BOOL_NOT/13               #240=     #239                 ?0                  	;0
564 396  JMPZ/43                   ?0        #240                 ?566                	;0	>>566
565 397  GOTO/253                  ?0        ?353                 ?328                	;0
566 399  INIT_FCALL_BY_NAME/59     ?0        ?0                   329:'htmlspecialchars'	;1	<<564
567 399  FETCH_DIM_FUNC_ARG/93     $241=     16?0                 331:4               	;1
568 399  FETCH_DIM_FUNC_ARG/93     $242=     $241                 332:'val'           	;1
569 399  SEND_VAR_EX/66            ?80       $242                 ?1                  	;0
570 399  DO_FCALL_BY_NAME/131      $243=     ?0                   ?0                  	;0
571 399  ECHO/40                   ?0        $243                 ?0                  	;0
572 400  GOTO/253                  ?0        ?353                 ?333                	;0
573 402  FETCH_DIM_R/81            $244=     16?2                 334:'video_profile' 	;0
574 402  ECHO/40                   ?0        $244                 ?0                  	;0
575 403  ECHO/40                   ?0        335:'</label>
														<div class="col-md-3">
															<select id="video_profile_hevc" name="video_profile_hevc" class="form-control" data-toggle="select2">
																' ?0                  	;0
576 404  FE_RESET_R/77             $245=     336:array (
  '' => 'Automatic',
  'main -level 4.0' => 'Main - Level 4.0',
  'main -level 4.1' => 'Main - Level 4.1',
  'main -level 4.2' => 'Main - Level 4.2',
  'main -level 5.0' => 'Main - Level 5.0',
  'main -level 5.1' => 'Main - Level 5.1',
  'main -level 5.2' => 'Main - Level 5.2',
  'main -level 6.0' => 'Main - Level 6.0',
  'main -level 6.1' => 'Main - Level 6.1',
  'main -level 6.2' => 'Main - Level 6.2',
  'main10 -level 4.0' => 'Main 10bit - Level 4.0',
  'main10 -level 4.1' => 'Main 10bit - Level 4.1',
  'main10 -level 4.2' => 'Main 10bit - Level 4.2',
  'main10 -level 5.0' => 'Main 10bit - Level 5.0',
  'main10 -level 5.1' => 'Main 10bit - Level 5.1',
  'main10 -level 5.2' => 'Main 10bit - Level 5.2',
  'main10 -level 6.0' => 'Main 10bit - Level 6.0',
  'main10 -level 6.1' => 'Main 10bit - Level 6.1',
  'main10 -level 6.2' => 'Main 10bit - Level 6.2',
  'rext -level 4.0' => 'REXT - Level 4.0',
  'rext -level 4.1' => 'REXT - Level 4.1',
  'rext -level 4.2' => 'REXT - Level 4.2',
  'rext -level 5.0' => 'REXT - Level 5.0',
  'rext -level 5.1' => 'REXT - Level 5.1',
  'rext -level 5.2' => 'REXT - Level 5.2',
  'rext -level 6.0' => 'REXT - Level 6.0',
  'rext -level 6.1' => 'REXT - Level 6.1',
  'rext -level 6.2' => 'REXT - Level 6.2',
) ?596                	;0
577 404  FE_FETCH_R/78             #246=     $245                 16?3                	;596	>>596	<<595
578 404  ASSIGN/38                 ?228      16?4                 #246                	;0
579 405  ECHO/40                   ?0        337:'																<option ' ?0                  	;0
580 406  ISSET_ISEMPTY_CV/197      #248=     16?1                 ?0                  	;33554432
581 406  JMPZ_EX/46                #248=     #248                 ?585                	;0	>>585
582 406  FETCH_DIM_R/81            $249=     16?0                 338:'-profile:v'    	;0
583 406  IS_EQUAL/17               #250=     $249                 16?4                	;0
584 406  BOOL/52                   #248=     #250                 ?0                  	;0
585 406  BOOL_NOT/13               #251=     #248                 ?0                  	;0	<<581
586 406  JMPZ/43                   ?0        #251                 ?589                	;0	>>589
587 407  NOP/0                     ?0        ?0                   ?0                  	;1
588 407  GOTO/253                  ?0        ?590                 ?339                	;0
589 409  ECHO/40                   ?0        340:'selected '      ?0                  	;0	<<586
590 411  ECHO/40                   ?0        341:'value="'        ?0                  	;0
591 412  ECHO/40                   ?0        16?4                 ?0                  	;0
592 413  ECHO/40                   ?0        342:'">'             ?0                  	;0
593 414  ECHO/40                   ?0        16?3                 ?0                  	;0
594 415  ECHO/40                   ?0        343:'</option>
																' ?0                  	;0
595 416  JMP/42                    ?0        ?577                 ?0                  	;0	>>577
596 416  FE_FREE/127               ?0        $245                 ?0                  	;0	<<576
597 419  ECHO/40                   ?0        344:'															</select>
														</div>
													</div>
												</div>
												<div id="gpu_options" style="display:none;">
													<div class="form-group row mb-4">
														<label class="col-md-3 col-form-label" for="resize">Resize <i title="Resize command for GPU acceleration. Example: 1920x1080" class="tooltip text-secondary far fa-circle"></i></label>
														<div class="col-md-3">
															<input type="text" class="form-control" id="resize" name="resize" value="' ?0                  	;0
598 420  GOTO/253                  ?0        ?305                 ?345                	;0
599 422  FETCH_DIM_R/81            $252=     16?2                 346:'audio_channels'	;0
600 422  ECHO/40                   ?0        $252                 ?0                  	;0
601 423  ECHO/40                   ?0        347:' <i title="'    ?0                  	;0
602 424  FETCH_DIM_R/81            $253=     16?2                 348:'profile_tooltip_13'	;0
603 424  ECHO/40                   ?0        $253                 ?0                  	;0
604 425  ECHO/40                   ?0        349:'" class="tooltip text-secondary far fa-circle"></i></label>
													<div class="col-md-3">
														<input type="text" class="form-control" id="audio_channels" name="audio_channels" value="' ?0                  	;0
605 426  ISSET_ISEMPTY_CV/197      #254=     16?1                 ?0                  	;33554432
606 426  BOOL_NOT/13               #255=     #254                 ?0                  	;0
607 426  JMPZ/43                   ?0        #255                 ?609                	;0	>>609
608 427  GOTO/253                  ?0        ?403                 ?350                	;0
609 429  GOTO/253                  ?0        ?397                 ?351                	;0	<<607
610 431  ECHO/40                   ?0        352:' <i title="'    ?0                  	;0
611 432  FETCH_DIM_R/81            $256=     16?2                 353:'profile_tooltip_16'	;0
612 432  ECHO/40                   ?0        $256                 ?0                  	;0
613 433  ECHO/40                   ?0        354:'" class="tooltip text-secondary far fa-circle"></i></label>
													<div class="col-md-6">
														<input type="text" class="form-control" id="logo_path" name="logo_path" value="' ?0                  	;0
614 434  ISSET_ISEMPTY_CV/197      #257=     16?1                 ?0                  	;33554432
615 434  BOOL_NOT/13               #258=     #257                 ?0                  	;0
616 434  JMPZ/43                   ?0        #258                 ?618                	;0	>>618
617 435  GOTO/253                  ?0        ?29                  ?355                	;0
618 437  INIT_FCALL_BY_NAME/59     ?0        ?0                   356:'htmlspecialchars'	;1	<<616
619 437  FETCH_DIM_FUNC_ARG/93     $259=     16?0                 358:16              	;1
620 437  FETCH_DIM_FUNC_ARG/93     $260=     $259                 359:'val'           	;1
621 437  SEND_VAR_EX/66            ?80       $260                 ?1                  	;0
622 437  DO_FCALL_BY_NAME/131      $261=     ?0                   ?0                  	;0
623 437  ECHO/40                   ?0        $261                 ?0                  	;0
624 438  GOTO/253                  ?0        ?29                  ?360                	;0
625 440  ISSET_ISEMPTY_CV/197      #262=     16?1                 ?0                  	;33554432
626 440  BOOL_NOT/13               #263=     #262                 ?0                  	;0
627 440  JMPZ/43                   ?0        #263                 ?629                	;0	>>629
628 441  GOTO/253                  ?0        ?635                 ?361                	;0
629 443  INIT_FCALL_BY_NAME/59     ?0        ?0                   362:'htmlspecialchars'	;1	<<627
630 443  FETCH_DIM_FUNC_ARG/93     $264=     16?0                 364:10              	;1
631 443  FETCH_DIM_FUNC_ARG/93     $265=     $264                 365:'val'           	;1
632 443  SEND_VAR_EX/66            ?80       $265                 ?1                  	;0
633 443  DO_FCALL_BY_NAME/131      $266=     ?0                   ?0                  	;0
634 443  ECHO/40                   ?0        $266                 ?0                  	;0
635 445  ECHO/40                   ?0        366:'">
													</div>
												</div>
												<div class="form-group row mb-4">
													<label class="col-md-3 col-form-label" for="logo_path">' ?0                  	;0
636 446  FETCH_DIM_R/81            $267=     16?2                 367:'logo_path_url' 	;0
637 446  ECHO/40                   ?0        $267                 ?0                  	;0
638 447  GOTO/253                  ?0        ?610                 ?368                	;0
639 449  ECHO/40                   ?0        369:'														</select>
													</div>
                                                </div>
                                                <div class="form-group row mb-4">
													<label class="col-md-3 col-form-label" for="audio_codec">' ?0                  	;0
640 450  FETCH_DIM_R/81            $268=     16?2                 370:'audio_codec'   	;0
641 450  ECHO/40                   ?0        $268                 ?0                  	;0
642 451  ECHO/40                   ?0        371:'</label>
													<div class="col-md-9">
														<select id="audio_codec" name="audio_codec" class="form-control" data-toggle="select2">
															' ?0                  	;0
643 452  FE_RESET_R/77             $269=     372:array (
  'copy' => 'Copy Audio Codec',
  'aac' => 'AAC Advanced Audio Coding',
  'ac3' => 'AC3 Dolby Digital',
  'eac3' => 'E-AC3 Dolby Digital Plus',
  'mp2' => 'MP2 MPEG Audio Layer 2',
  'libmp3lame' => 'MP3 MPEG Audio Layer 2',
) ?665                	;0
644 452  FE_FETCH_R/78             #270=     $269                 16?15               	;665	>>665	<<664
645 452  ASSIGN/38                 ?252      16?16                #270                	;0
646 453  ECHO/40                   ?0        373:'															<option ' ?0                  	;0
647 454  ISSET_ISEMPTY_CV/197      #272=     16?1                 ?0                  	;33554432
648 454  JMPZ_EX/46                #272=     #272                 ?652                	;0	>>652
649 454  FETCH_DIM_R/81            $273=     16?0                 374:'-acodec'       	;0
650 454  IS_EQUAL/17               #274=     $273                 16?16               	;0
651 454  BOOL/52                   #272=     #274                 ?0                  	;0
652 454  BOOL_NOT/13               #275=     #272                 ?0                  	;0	<<648
653 454  JMPZ/43                   ?0        #275                 ?656                	;0	>>656
654 455  NOP/0                     ?0        ?0                   ?0                  	;1
655 455  GOTO/253                  ?0        ?657                 ?375                	;0
656 457  ECHO/40                   ?0        376:'selected '      ?0                  	;0	<<653
657 459  ECHO/40                   ?0        377:'value="'        ?0                  	;0
658 460  ECHO/40                   ?0        16?16                ?0                  	;0
659 461  ECHO/40                   ?0        378:'">'             ?0                  	;0
660 462  CONCAT/8                  #276=     16?16                379:' - '           	;0
661 462  CONCAT/8                  #277=     #276                 16?15               	;0
662 462  ECHO/40                   ?0        #277                 ?0                  	;0
663 463  ECHO/40                   ?0        380:'</option>
															' ?0                  	;0
664 464  JMP/42                    ?0        ?644                 ?0                  	;0	>>644
665 464  FE_FREE/127               ?0        $269                 ?0                  	;0	<<643
666 467  GOTO/253                  ?0        ?36                  ?381                	;0
667 470  INIT_FCALL_BY_NAME/59     ?0        ?0                   382:'htmlspecialchars'	;1
668 470  FETCH_DIM_R/81            $278=     16?0                 384:16              	;0
669 470  FETCH_DIM_R/81            $279=     $278                 385:'pos'           	;0
670 470  JMP_SET/152               #280=     $279                 ?672                	;0
671 470  QM_ASSIGN/22              #280=     386:'10:10'          ?0                  	;0
672 470  SEND_VAL_EX/116           ?80       #280                 ?1                  	;0
673 470  DO_FCALL_BY_NAME/131      $281=     ?0                   ?0                  	;0
674 470  ECHO/40                   ?0        $281                 ?0                  	;0
675 472  ECHO/40                   ?0        387:'" placeholder="pos x:x">
                                                    </div>
												</div>
											</div>
										</div> 
										<ul class="list-inline wizard mb-0">
											<li class="list-inline-item float-right">
												<input name="submit_profile" type="submit" class="btn btn-primary" value="' ?0                  	;0
676 473  ISSET_ISEMPTY_CV/197      #282=     16?1                 ?0                  	;33554432
677 473  JMPZ/43                   ?0        #282                 ?679                	;0	>>679
678 474  GOTO/253                  ?0        ?394                 ?388                	;0
679 476  GOTO/253                  ?0        ?391                 ?389                	;0	<<677
680 478  INIT_FCALL_BY_NAME/59     ?0        ?0                   390:'htmlspecialchars'	;1
681 478  FETCH_DIM_FUNC_ARG/93     $283=     16?0                 392:6               	;1
682 478  FETCH_DIM_FUNC_ARG/93     $284=     $283                 393:'val'           	;1
683 478  SEND_VAR_EX/66            ?80       $284                 ?1                  	;0
684 478  DO_FCALL_BY_NAME/131      $285=     ?0                   ?0                  	;0
685 478  ECHO/40                   ?0        $285                 ?0                  	;0
686 480  ECHO/40                   ?0        394:'">
													</div>
												</div>
												<div class="form-group row mb-4">
													<label class="col-md-3 col-form-label" for="buffer_size">' ?0                  	;0
687 481  FETCH_DIM_R/81            $286=     16?2                 395:'buffer_size'   	;0
688 481  ECHO/40                   ?0        $286                 ?0                  	;0
689 482  ECHO/40                   ?0        396:' <i title="'    ?0                  	;0
690 483  GOTO/253                  ?0        ?339                 ?397                	;0
691 485  FE_RESET_R/77             $287=     398:array (
  'h264_nvenc' => 'CUVID NVENC H264',
  'hevc_nvenc' => 'CUVID NVENC HEVC',
) ?713                	;0
692 485  FE_FETCH_R/78             #288=     $287                 16?15               	;713	>>713	<<712
693 485  ASSIGN/38                 ?270      16?16                #288                	;0
694 486  ECHO/40                   ?0        399:'															<option ' ?0                  	;0
695 487  ISSET_ISEMPTY_CV/197      #290=     16?1                 ?0                  	;33554432
696 487  JMPZ_EX/46                #290=     #290                 ?700                	;0	>>700
697 487  FETCH_DIM_R/81            $291=     16?0                 400:'-vcodec'       	;0
698 487  IS_EQUAL/17               #292=     $291                 16?16               	;0
699 487  BOOL/52                   #290=     #292                 ?0                  	;0
700 487  BOOL_NOT/13               #293=     #290                 ?0                  	;0	<<696
701 487  JMPZ/43                   ?0        #293                 ?704                	;0	>>704
702 488  NOP/0                     ?0        ?0                   ?0                  	;1
703 488  GOTO/253                  ?0        ?705                 ?401                	;0
704 490  ECHO/40                   ?0        402:'selected '      ?0                  	;0	<<701
705 492  ECHO/40                   ?0        403:'value="'        ?0                  	;0
706 493  ECHO/40                   ?0        16?16                ?0                  	;0
707 494  ECHO/40                   ?0        404:'">'             ?0                  	;0
708 495  CONCAT/8                  #294=     16?16                405:' - '           	;0
709 495  CONCAT/8                  #295=     #294                 16?15               	;0
710 495  ECHO/40                   ?0        #295                 ?0                  	;0
711 496  ECHO/40                   ?0        406:'</option>
															' ?0                  	;0
712 497  JMP/42                    ?0        ?692                 ?0                  	;0	>>692
713 497  FE_FREE/127               ?0        $287                 ?0                  	;0	<<691
714 500  ECHO/40                   ?0        407:'														</select>
													</div>
													<div class="col-md-3" id="video_decoding_container" style="display: none;">
														<select id="software_decoding" name="software_decoding" class="form-control" data-toggle="select2">
															' ?0                  	;0
715 501  FE_RESET_R/77             $296=     408:array (
  0 => 'Hardware Decoding',
  1 => 'Software Decoding',
) ?735                	;0
716 501  FE_FETCH_R/78             #297=     $296                 16?17               	;735	>>735	<<734
717 501  ASSIGN/38                 ?279      16?13                #297                	;0
718 502  ECHO/40                   ?0        409:'															<option ' ?0                  	;0
719 503  ISSET_ISEMPTY_CV/197      #299=     16?1                 ?0                  	;33554432
720 503  JMPZ_EX/46                #299=     #299                 ?724                	;0	>>724
721 503  FETCH_DIM_R/81            $300=     16?0                 410:'software_decoding'	;0
722 503  IS_EQUAL/17               #301=     $300                 16?13               	;0
723 503  BOOL/52                   #299=     #301                 ?0                  	;0
724 503  BOOL_NOT/13               #302=     #299                 ?0                  	;0	<<720
725 503  JMPZ/43                   ?0        #302                 ?728                	;0	>>728
726 504  NOP/0                     ?0        ?0                   ?0                  	;1
727 504  GOTO/253                  ?0        ?729                 ?411                	;0
728 506  ECHO/40                   ?0        412:'selected '      ?0                  	;0	<<725
729 508  ECHO/40                   ?0        413:'value="'        ?0                  	;0
730 509  ECHO/40                   ?0        16?13                ?0                  	;0
731 510  ECHO/40                   ?0        414:'">'             ?0                  	;0
732 511  ECHO/40                   ?0        16?17                ?0                  	;0
733 512  ECHO/40                   ?0        415:'</option>
															' ?0                  	;0
734 513  JMP/42                    ?0        ?716                 ?0                  	;0	>>716
735 513  FE_FREE/127               ?0        $296                 ?0                  	;0	<<715
736 516  GOTO/253                  ?0        ?639                 ?416                	;0
737 518  ECHO/40                   ?0        417:'">
													</div>
												</div>
												<div class="form-group row mb-4">
													<label class="col-md-3 col-form-label" for="aspect_ratio">' ?0                  	;0
738 519  FETCH_DIM_R/81            $303=     16?2                 418:'aspect_ratio'  	;0
739 519  ECHO/40                   ?0        $303                 ?0                  	;0
740 520  ECHO/40                   ?0        419:' <i title="'    ?0                  	;0
741 521  FETCH_DIM_R/81            $304=     16?2                 420:'profile_tooltip_10'	;0
742 521  ECHO/40                   ?0        $304                 ?0                  	;0
743 522  ECHO/40                   ?0        421:'" class="tooltip text-secondary far fa-circle"></i></label>
													<div class="col-md-3">
														<input type="text" class="form-control" id="aspect_ratio" name="aspect_ratio" value="' ?0                  	;0
744 523  GOTO/253                  ?0        ?625                 ?422                	;0
745 526  ECHO/40                   ?0        423:'</h4>
				</div>
			</div>
		</div>     
		<div class="row">
			<div class="col-xl-12">
				' ?0                  	;0
746 527  ISSET_ISEMPTY_CV/197      #305=     16?18                ?0                  	;33554432
747 527  JMPZ_EX/46                #305=     #305                 ?751                	;0	>>751
748 527  FETCH_CONSTANT/99         #306=     ?0                   424:'STATUS_FAILURE'	;16
749 527  IS_EQUAL/17               #307=     16?18                #306                	;0
750 527  BOOL/52                   #305=     #307                 ?0                  	;0
751 527  BOOL_NOT/13               #308=     #305                 ?0                  	;0	<<747
752 527  JMPZ/43                   ?0        #308                 ?754                	;0	>>754
753 528  GOTO/253                  ?0        ?221                 ?427                	;0
754 530  ECHO/40                   ?0        428:'				<div class="alert alert-danger alert-dismissible fade show" role="alert">
					<button type="button" class="close" data-dismiss="alert" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
					' ?0                  	;0	<<752
755 531  FETCH_DIM_R/81            $309=     16?2                 429:'generic_fail'  	;0
756 531  ECHO/40                   ?0        $309                 ?0                  	;0
757 532  GOTO/253                  ?0        ?220                 ?430                	;0
758 534  ECHO/40                   ?0        431:'">
													</div>
													<label class="col-md-3 col-form-label" for="crf_value">' ?0                  	;0
759 535  FETCH_DIM_R/81            $310=     16?2                 432:'crf_value'     	;0
760 535  ECHO/40                   ?0        $310                 ?0                  	;0
761 536  ECHO/40                   ?0        433:' <i title="'    ?0                  	;0
762 537  FETCH_DIM_R/81            $311=     16?2                 434:'profile_tooltip_8'	;0
763 537  ECHO/40                   ?0        $311                 ?0                  	;0
764 538  ECHO/40                   ?0        435:'" class="tooltip text-secondary far fa-circle"></i></label>
													<div class="col-md-3">
														<input type="text" class="form-control" id="crf_value" name="crf_value" value="' ?0                  	;0
765 539  GOTO/253                  ?0        ?99                  ?436                	;0
766 541  ECHO/40                   ?0        437:'</label>
														<div class="col-md-3">
															<select id="video_profile_cpu" name="video_profile_cpu" class="form-control" data-toggle="select2">
																' ?0                  	;0
767 542  FE_RESET_R/77             $312=     438:array (
  '' => 'Automatic',
  'baseline -level 3.0' => 'Baseline - Level 3.0',
  'baseline -level 3.1' => 'Baseline - Level 3.1',
  'main -level 3.1' => 'Main - Level 3.1',
  'main -level 4.0' => 'Main - Level 4.0',
  'high -level 4.0' => 'High - Level 4.0',
  'high -level 4.1' => 'High - Level 4.1',
  'high -level 4.2' => 'High - Level 4.2',
  'high -level 5.0' => 'High - Level 5.0',
  'high -level 5.1' => 'High - Level 5.1',
) ?787                	;0
768 542  FE_FETCH_R/78             #313=     $312                 16?3                	;787	>>787	<<786
769 542  ASSIGN/38                 ?295      16?4                 #313                	;0
770 543  ECHO/40                   ?0        439:'																<option ' ?0                  	;0
771 544  ISSET_ISEMPTY_CV/197      #315=     16?1                 ?0                  	;33554432
772 544  JMPZ_EX/46                #315=     #315                 ?776                	;0	>>776
773 544  FETCH_DIM_R/81            $316=     16?0                 440:'-profile:v'    	;0
774 544  IS_EQUAL/17               #317=     $316                 16?4                	;0
775 544  BOOL/52                   #315=     #317                 ?0                  	;0
776 544  BOOL_NOT/13               #318=     #315                 ?0                  	;0	<<772
777 544  JMPZ/43                   ?0        #318                 ?780                	;0	>>780
778 545  NOP/0                     ?0        ?0                   ?0                  	;1
779 545  GOTO/253                  ?0        ?781                 ?441                	;0
780 547  ECHO/40                   ?0        442:'selected '      ?0                  	;0	<<777
781 549  ECHO/40                   ?0        443:'value="'        ?0                  	;0
782 550  ECHO/40                   ?0        16?4                 ?0                  	;0
783 551  ECHO/40                   ?0        444:'">'             ?0                  	;0
784 552  ECHO/40                   ?0        16?3                 ?0                  	;0
785 553  ECHO/40                   ?0        445:'</option>
																' ?0                  	;0
786 554  JMP/42                    ?0        ?768                 ?0                  	;0	>>768
787 554  FE_FREE/127               ?0        $312                 ?0                  	;0	<<767
788 557  ECHO/40                   ?0        446:'															</select>
														</div>
													</div>
													<div class="form-group row mb-4">
														<label class="col-md-3 col-form-label" for="scaling">' ?0                  	;0
789 558  FETCH_DIM_R/81            $319=     16?2                 447:'scaling'       	;0
790 558  ECHO/40                   ?0        $319                 ?0                  	;0
791 559  GOTO/253                  ?0        ?475                 ?448                	;0
792 562  ECHO/40                   ?0        449:'">
													</div>
													<label class="col-md-3 col-form-label" for="samplerate">' ?0                  	;0
793 563  FETCH_DIM_R/81            $320=     16?2                 450:'audio_sample_rate'	;0
794 563  ECHO/40                   ?0        $320                 ?0                  	;0
795 564  ECHO/40                   ?0        451:' <i title="'    ?0                  	;0
796 565  FETCH_DIM_R/81            $321=     16?2                 452:'profile_tooltip_12'	;0
797 565  ECHO/40                   ?0        $321                 ?0                  	;0
798 566  GOTO/253                  ?0        ?369                 ?453                	;0
799 568  ECHO/40                   ?0        454:'data-plugin="switchery" class="js-switch" data-color="#039cfd"/>
														</div>
													</div>
												</div>
												<div class="form-group row mb-4">
													<label class="col-md-3 col-form-label" for="video_bitrate">' ?0                  	;0
800 569  FETCH_DIM_R/81            $322=     16?2                 455:'average_video_bitrate'	;0
801 569  ECHO/40                   ?0        $322                 ?0                  	;0
802 570  ECHO/40                   ?0        456:' <i title="'    ?0                  	;0
803 571  FETCH_DIM_R/81            $323=     16?2                 457:'profile_tooltip_3'	;0
804 571  ECHO/40                   ?0        $323                 ?0                  	;0
805 572  ECHO/40                   ?0        458:'" class="tooltip text-secondary far fa-circle"></i></label>
													<div class="col-md-3">
														<input type="text" class="form-control" id="video_bitrate" name="video_bitrate" value="' ?0                  	;0
806 573  GOTO/253                  ?0        ?490                 ?459                	;0
807 575  INCLUDE_OR_EVAL/73        ?305      460:'footer.php'     ?0                  	;2
808 576  NOP/0                     ?0        461:1                ?0                  	;4294967295
*/

?>
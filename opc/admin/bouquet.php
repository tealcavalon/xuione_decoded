<?php


/*
#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
0   3    JMP/42                    ?0        ?436                 ?0                  	;0	>>436
1   5    ECHO/40                   ?0        1:' style="display: none;"' ?0                  	;0
2   7    ECHO/40                   ?0        2:'>
    <div class="container-fluid">
		<div class="row">
			<div class="col-12">
				<div class="page-title-box">
					<div class="page-title-right">
						' ?0                  	;0
3   8    INCLUDE_OR_EVAL/73        ?0        3:'topbar.php'       ?0                  	;2
4   9    ECHO/40                   ?0        4:'					</div>
					<h4 class="page-title">' ?0                  	;0
5   10   GOTO/253                  ?0        ?419                 ?5                  	;0
6   12   FETCH_DIM_R/81            $15=      16?0                 6:'all_categories'  	;0
7   12   ECHO/40                   ?0        $15                  ?0                  	;0
8   13   ECHO/40                   ?0        7:'</option>
															' ?0                  	;0
9   14   INIT_FCALL_BY_NAME/59     ?0        ?0                   8:'f769E3F0c739D1a6'	;1
10  14   SEND_VAL_EX/116           ?80       10:'live'            ?1                  	;0
11  14   DO_FCALL_BY_NAME/131      $16=      ?0                   ?0                  	;0
12  14   FE_RESET_R/77             $17=      $16                  ?28                 	;0
13  14   FE_FETCH_R/78             ?0        $17                  16?1                	;28	>>28	<<27
14  15   ECHO/40                   ?0        11:'															<option value="' ?0                  	;0
15  16   INIT_FCALL_BY_NAME/59     ?0        ?0                   12:'intval'         	;1
16  16   FETCH_DIM_FUNC_ARG/93     $18=      16?1                 14:'id'             	;1
17  16   SEND_VAR_EX/66            ?80       $18                  ?1                  	;0
18  16   DO_FCALL_BY_NAME/131      $19=      ?0                   ?0                  	;0
19  16   ECHO/40                   ?0        $19                  ?0                  	;0
20  17   ECHO/40                   ?0        15:'">'              ?0                  	;0
21  18   INIT_FCALL_BY_NAME/59     ?0        ?0                   16:'htmlspecialchars'	;1
22  18   FETCH_DIM_FUNC_ARG/93     $20=      16?1                 18:'category_name'  	;1
23  18   SEND_VAR_EX/66            ?80       $20                  ?1                  	;0
24  18   DO_FCALL_BY_NAME/131      $21=      ?0                   ?0                  	;0
25  18   ECHO/40                   ?0        $21                  ?0                  	;0
26  19   ECHO/40                   ?0        19:'</option>
															' ?0                  	;0
27  20   JMP/42                    ?0        ?13                  ?0                  	;0	>>13
28  20   FE_FREE/127               ?0        $17                  ?0                  	;0	<<12
29  23   ECHO/40                   ?0        20:'														</select>
													</div>
												</div>
												<div class="form-group row mb-4">
													<label class="col-md-4 col-form-label" for="stream_search">' ?0                  	;0
30  24   GOTO/253                  ?0        ?278                 ?21                 	;0
31  26   ECHO/40                   ?0        22:'</label>
													<div class="col-md-8">
														<input type="text" class="form-control" id="radios_search" value="">
													</div>
												</div>
												<div class="form-group row mb-4">
													<table id="datatable-radios" class="table nowrap">
														<thead>
															<tr>
																<th class="text-center">' ?0                  	;0
32  27   FETCH_DIM_R/81            $22=      16?0                 23:'id'             	;0
33  27   ECHO/40                   ?0        $22                  ?0                  	;0
34  28   ECHO/40                   ?0        24:'</th>
																<th>' ?0                  	;0
35  29   FETCH_DIM_R/81            $23=      16?0                 25:'station_name'   	;0
36  29   ECHO/40                   ?0        $23                  ?0                  	;0
37  30   ECHO/40                   ?0        26:'</th>
																<th>' ?0                  	;0
38  31   GOTO/253                  ?0        ?287                 ?27                 	;0
39  33   INIT_FCALL_BY_NAME/59     ?0        ?0                   28:'count'          	;1
40  33   SEND_VAR_EX/66            ?80       16?2                 ?1                  	;0
41  33   DO_FCALL_BY_NAME/131      $24=      ?0                   ?0                  	;0
42  33   IS_SMALLER/19             #25=      30:0                 $24                 	;0
43  33   BOOL_NOT/13               #26=      #25                  ?0                  	;0
44  33   JMPZ/43                   ?0        #26                  ?46                 	;0	>>46
45  34   GOTO/253                  ?0        ?65                  ?31                 	;0
46  36   INIT_METHOD_CALL/112      ?0        16?3                 32:'query'          	;1	<<44
47  36   INIT_FCALL_BY_NAME/59     ?0        ?0                   34:'implode'        	;2
48  36   SEND_VAL_EX/116           ?80       36:','               ?1                  	;0
49  36   SEND_VAR_EX/66            ?96       16?2                 ?2                  	;0
50  36   DO_FCALL_BY_NAME/131      $27=      ?0                   ?0                  	;0
51  36   CONCAT/8                  #28=      37:'SELECT `id`, `title` FROM `streams_series` WHERE `id` IN (' $27                 	;0
52  36   CONCAT/8                  #29=      #28                  38:');'             	;0
53  36   SEND_VAL_EX/116           ?80       #29                  ?1                  	;0
54  36   DO_FCALL/60               ?16       ?0                   ?0                  	;0
55  37   INIT_METHOD_CALL/112      ?0        16?3                 39:'get_rows'       	;0
56  37   DO_FCALL/60               $31=      ?0                   ?0                  	;0
57  37   FE_RESET_R/77             $32=      $31                  ?64                 	;0
58  37   FE_FETCH_R/78             ?0        $32                  16?4                	;64	>>64	<<63
59  38   FETCH_DIM_R/81            $33=      16?4                 41:'id'             	;0
60  38   FETCH_DIM_R/81            $35=      16?4                 42:'title'          	;0
61  38   ASSIGN_DIM/147            ?20       16?5                 $33                 	;0
62  38   OP_DATA/137               ?0        $35                  ?0                  	;0
63  39   JMP/42                    ?0        ?58                  ?0                  	;0	>>58
64  39   FE_FREE/127               ?0        $32                  ?0                  	;0	<<57
65  43   GOTO/253                  ?0        ?338                 ?43                 	;0
66  45   INIT_FCALL_BY_NAME/59     ?0        ?0                   44:'f769e3F0C739D1a6'	;1
67  45   SEND_VAL_EX/116           ?80       46:'movie'           ?1                  	;0
68  45   DO_FCALL_BY_NAME/131      $36=      ?0                   ?0                  	;0
69  45   FE_RESET_R/77             $37=      $36                  ?85                 	;0
70  45   FE_FETCH_R/78             ?0        $37                  16?1                	;85	>>85	<<84
71  46   ECHO/40                   ?0        47:'															<option value="' ?0                  	;0
72  47   INIT_FCALL_BY_NAME/59     ?0        ?0                   48:'intval'         	;1
73  47   FETCH_DIM_FUNC_ARG/93     $38=      16?1                 50:'id'             	;1
74  47   SEND_VAR_EX/66            ?80       $38                  ?1                  	;0
75  47   DO_FCALL_BY_NAME/131      $39=      ?0                   ?0                  	;0
76  47   ECHO/40                   ?0        $39                  ?0                  	;0
77  48   ECHO/40                   ?0        51:'">'              ?0                  	;0
78  49   INIT_FCALL_BY_NAME/59     ?0        ?0                   52:'htmlspecialchars'	;1
79  49   FETCH_DIM_FUNC_ARG/93     $40=      16?1                 54:'category_name'  	;1
80  49   SEND_VAR_EX/66            ?80       $40                  ?1                  	;0
81  49   DO_FCALL_BY_NAME/131      $41=      ?0                   ?0                  	;0
82  49   ECHO/40                   ?0        $41                  ?0                  	;0
83  50   ECHO/40                   ?0        55:'</option>
															' ?0                  	;0
84  51   JMP/42                    ?0        ?70                  ?0                  	;0	>>70
85  51   FE_FREE/127               ?0        $37                  ?0                  	;0	<<69
86  54   ECHO/40                   ?0        56:'														</select>
													</div>
												</div>
												<div class="form-group row mb-4">
													<label class="col-md-4 col-form-label" for="vod_search">' ?0                  	;0
87  55   FETCH_DIM_R/81            $42=      16?0                 57:'search'         	;0
88  55   ECHO/40                   ?0        $42                  ?0                  	;0
89  56   ECHO/40                   ?0        58:'</label>
													<div class="col-md-8">
														<input type="text" class="form-control" id="vod_search" value="">
													</div>
												</div>
												<div class="form-group row mb-4">
													<table id="datatable-movies" class="table nowrap">
														<thead>
															<tr>
																<th class="text-center">' ?0                  	;0
90  57   GOTO/253                  ?0        ?212                 ?59                 	;0
91  59   FETCH_DIM_R/81            $43=      16?0                 60:'add'            	;0
92  59   ECHO/40                   ?0        $43                  ?0                  	;0
93  60   GOTO/253                  ?0        ?96                  ?61                 	;0
94  62   FETCH_DIM_R/81            $44=      16?0                 62:'edit'           	;0
95  62   ECHO/40                   ?0        $44                  ?0                  	;0
96  64   GOTO/253                  ?0        ?140                 ?63                 	;0
97  66   FE_RESET_R/77             $45=      16?6                 ?110                	;0
98  66   FE_FETCH_R/78             ?0        $45                  16?7                	;110	>>110	<<109
99  67   ECHO/40                   ?0        64:'                                                            <tr id="movies-' ?0                  	;0
100 68   ECHO/40                   ?0        16?7                 ?0                  	;0
101 69   ECHO/40                   ?0        65:'">
																<td class="text-center">' ?0                  	;0
102 70   ECHO/40                   ?0        16?7                 ?0                  	;0
103 71   ECHO/40                   ?0        66:'</td>
																<td>Movies</td>
																<td>' ?0                  	;0
104 72   FETCH_DIM_R/81            $46=      16?8                 16?7                	;0
105 72   ECHO/40                   ?0        $46                  ?0                  	;0
106 73   ECHO/40                   ?0        67:'</td>
																<td class="text-center">
                                                                    <button type="button" class="btn-remove btn btn-warning waves-effect waves-warning btn-xs" onClick="toggleBouquet(' ?0                  	;0
107 74   ECHO/40                   ?0        16?7                 ?0                  	;0
108 75   ECHO/40                   ?0        68:', \'movies\');"><i class="mdi mdi-minus"></i></button>
                                                                </td>
															</tr>
                                                            ' ?0                  	;0
109 76   JMP/42                    ?0        ?98                  ?0                  	;0	>>98
110 76   FE_FREE/127               ?0        $45                  ?0                  	;0	<<97
111 79   FE_RESET_R/77             $47=      16?9                 ?124                	;0
112 79   FE_FETCH_R/78             ?0        $47                  16?7                	;124	>>124	<<123
113 80   ECHO/40                   ?0        69:'                                                            <tr id="radios-' ?0                  	;0
114 81   ECHO/40                   ?0        16?7                 ?0                  	;0
115 82   ECHO/40                   ?0        70:'">
																<td class="text-center">' ?0                  	;0
116 83   ECHO/40                   ?0        16?7                 ?0                  	;0
117 84   ECHO/40                   ?0        71:'</td>
																<td>Radios</td>
																<td>' ?0                  	;0
118 85   FETCH_DIM_R/81            $48=      16?8                 16?7                	;0
119 85   ECHO/40                   ?0        $48                  ?0                  	;0
120 86   ECHO/40                   ?0        72:'</td>
																<td class="text-center">
                                                                    <button type="button" class="btn-remove btn btn-warning waves-effect waves-warning btn-xs" onClick="toggleBouquet(' ?0                  	;0
121 87   ECHO/40                   ?0        16?7                 ?0                  	;0
122 88   ECHO/40                   ?0        73:', \'radios\');"><i class="mdi mdi-minus"></i></button>
                                                                </td>
															</tr>
                                                            ' ?0                  	;0
123 89   JMP/42                    ?0        ?112                 ?0                  	;0	>>112
124 89   FE_FREE/127               ?0        $47                  ?0                  	;0	<<111
125 92   FE_RESET_R/77             $49=      16?2                 ?138                	;0
126 92   FE_FETCH_R/78             ?0        $49                  16?7                	;138	>>138	<<137
127 93   ECHO/40                   ?0        74:'                                                            <tr id="series-' ?0                  	;0
128 94   ECHO/40                   ?0        16?7                 ?0                  	;0
129 95   ECHO/40                   ?0        75:'">
																<td class="text-center">' ?0                  	;0
130 96   ECHO/40                   ?0        16?7                 ?0                  	;0
131 97   ECHO/40                   ?0        76:'</td>
																<td>Series</td>
																<td>' ?0                  	;0
132 98   FETCH_DIM_R/81            $50=      16?5                 16?7                	;0
133 98   ECHO/40                   ?0        $50                  ?0                  	;0
134 99   ECHO/40                   ?0        77:'</td>
																<td class="text-center">
                                                                    <button type="button" class="btn-remove btn btn-warning waves-effect waves-warning btn-xs" onClick="toggleBouquet(' ?0                  	;0
135 100  ECHO/40                   ?0        16?7                 ?0                  	;0
136 101  ECHO/40                   ?0        78:', \'series\');"><i class="mdi mdi-minus"></i></button>
                                                                </td>
															</tr>
                                                            ' ?0                  	;0
137 102  JMP/42                    ?0        ?126                 ?0                  	;0	>>126
138 102  FE_FREE/127               ?0        $49                  ?0                  	;0	<<125
139 104  GOTO/253                  ?0        ?189                 ?79                 	;0
140 106  ECHO/40                   ?0        80:'" />
											</li>
										</ul>
									</div>
									' ?0                  	;0
141 108  ECHO/40                   ?0        81:'								</div>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
' ?0                  	;0
142 109  GOTO/253                  ?0        ?550                 ?82                 	;0
143 111  ECHO/40                   ?0        83:'</label>
													<div class="col-md-8">
														<input type="text" class="form-control" id="bouquet_name" name="bouquet_name" value="' ?0                  	;0
144 112  ISSET_ISEMPTY_CV/197      #51=      16?10                ?0                  	;33554432
145 112  BOOL_NOT/13               #52=      #51                  ?0                  	;0
146 112  JMPZ/43                   ?0        #52                  ?148                	;0	>>148
147 113  GOTO/253                  ?0        ?153                 ?84                 	;0
148 115  INIT_FCALL_BY_NAME/59     ?0        ?0                   85:'htmlspecialchars'	;1	<<146
149 115  FETCH_DIM_FUNC_ARG/93     $53=      16?10                87:'bouquet_name'   	;1
150 115  SEND_VAR_EX/66            ?80       $53                  ?1                  	;0
151 115  DO_FCALL_BY_NAME/131      $54=      ?0                   ?0                  	;0
152 115  ECHO/40                   ?0        $54                  ?0                  	;0
153 117  ECHO/40                   ?0        88:'" required data-parsley-trigger="change">
													</div>
												</div>
											</div>
										</div>
										<ul class="list-inline wizard mb-0">
											<li class="nextb list-inline-item float-right">
												' ?0                  	;0
154 118  GOTO/253                  ?0        ?296                 ?89                 	;0
155 120  ISSET_ISEMPTY_CV/197      #55=      16?10                ?0                  	;33554432
156 120  BOOL_NOT/13               #56=      #55                  ?0                  	;0
157 120  JMPZ/43                   ?0        #56                  ?159                	;0	>>159
158 121  GOTO/253                  ?0        ?200                 ?90                 	;0
159 123  ECHO/40                   ?0        91:'									<li class="nav-item">
										<a href="#channels" data-toggle="tab" class="nav-link rounded-0 pt-2 pb-2">
											<i class="mdi mdi-play mr-1"></i>
											<span class="d-none d-sm-inline">' ?0                  	;0	<<157
160 124  FETCH_DIM_R/81            $57=      16?0                 92:'streams'        	;0
161 124  ECHO/40                   ?0        $57                  ?0                  	;0
162 125  ECHO/40                   ?0        93:'</span>
										</a>
									</li>
									<li class="nav-item">
										<a href="#movies" data-toggle="tab" class="nav-link rounded-0 pt-2 pb-2">
											<i class="mdi mdi-movie mr-1"></i>
											<span class="d-none d-sm-inline">' ?0                  	;0
163 126  FETCH_DIM_R/81            $58=      16?0                 94:'movies'         	;0
164 126  ECHO/40                   ?0        $58                  ?0                  	;0
165 127  GOTO/253                  ?0        ?487                 ?95                 	;0
166 129  FETCH_STATIC_PROP_IS/176  $59=      96:'rRequest'        97:'XUI'            	;0
167 129  ISSET_ISEMPTY_DIM_OBJ/115 #60=      $59                  99:'id'             	;33554432
168 129  BOOL_NOT/13               #61=      #60                  ?0                  	;0
169 129  JMPZ/43                   ?0        #61                  ?171                	;0	>>171
170 130  GOTO/253                  ?0        ?177                 ?100                	;0
171 132  INIT_FCALL_BY_NAME/59     ?0        ?0                   101:'b47fb5320e43F112'	;1	<<169
172 132  FETCH_STATIC_PROP_FUNC_ARG/177 $62=      103:'rRequest'       104:'XUI'           	;1
173 132  FETCH_DIM_FUNC_ARG/93     $63=      $62                  106:'id'            	;1
174 132  SEND_VAR_EX/66            ?80       $63                  ?1                  	;0
175 132  DO_FCALL_BY_NAME/131      $64=      ?0                   ?0                  	;0
176 132  ASSIGN/38                 ?51       16?10                $64                 	;0
177 134  FETCH_STATIC_PROP_IS/176  $66=      107:'rRequest'       108:'XUI'           	;0
178 134  ISSET_ISEMPTY_DIM_OBJ/115 #67=      $66                  110:'duplicate'     	;33554432
179 134  BOOL_NOT/13               #68=      #67                  ?0                  	;0
180 134  JMPZ/43                   ?0        #68                  ?182                	;0	>>182
181 135  GOTO/253                  ?0        ?224                 ?111                	;0
182 137  INIT_FCALL_BY_NAME/59     ?0        ?0                   112:'B47fb5320E43F112'	;1	<<180
183 137  FETCH_STATIC_PROP_FUNC_ARG/177 $69=      114:'rRequest'       115:'XUI'           	;1
184 137  FETCH_DIM_FUNC_ARG/93     $70=      $69                  117:'duplicate'     	;1
185 137  SEND_VAR_EX/66            ?80       $70                  ?1                  	;0
186 137  DO_FCALL_BY_NAME/131      $71=      ?0                   ?0                  	;0
187 137  ASSIGN/38                 ?58       16?10                $71                 	;0
188 138  GOTO/253                  ?0        ?221                 ?118                	;0
189 141  ECHO/40                   ?0        119:'														</tbody>
													</table>
												</div>
											</div>
										</div>
										<ul class="list-inline wizard mb-0">
											<li class="prevb list-inline-item">
												<a href="javascript: void(0);" class="btn btn-secondary">' ?0                  	;0
190 142  FETCH_DIM_R/81            $73=      16?0                 120:'prev'          	;0
191 142  ECHO/40                   ?0        $73                  ?0                  	;0
192 143  ECHO/40                   ?0        121:'</a>
											</li>
											<li class="nextb list-inline-item float-right">
												<input name="submit_bouquet" type="submit" class="btn btn-primary" value="' ?0                  	;0
193 144  ISSET_ISEMPTY_DIM_OBJ/115 #74=      16?10                122:'id'            	;33554432
194 144  JMPZ/43                   ?0        #74                  ?196                	;0	>>196
195 145  GOTO/253                  ?0        ?94                  ?123                	;0
196 147  GOTO/253                  ?0        ?91                  ?124                	;0	<<194
197 149  FETCH_DIM_R/81            $75=      16?0                 125:'review'        	;0
198 149  ECHO/40                   ?0        $75                  ?0                  	;0
199 150  ECHO/40                   ?0        126:'</span>
										</a>
									</li>
									' ?0                  	;0
200 152  ECHO/40                   ?0        127:'								</ul>
								<div class="tab-content b-0 mb-0 pt-0">
									<div class="tab-pane" id="bouquet-details">
										<div class="row">
											<div class="col-12">
												<div class="form-group row mb-4">
													<label class="col-md-4 col-form-label" for="bouquet_name">' ?0                  	;0
201 153  FETCH_DIM_R/81            $76=      16?0                 128:'bouquet_name'  	;0
202 153  ECHO/40                   ?0        $76                  ?0                  	;0
203 154  GOTO/253                  ?0        ?143                 ?129                	;0
204 156  ECHO/40                   ?0        130:'</a>
												</li>
											</span>
										</ul>
									</div>
									<div class="tab-pane" id="movies">
										<div class="row">
											<div class="col-12">
												<div class="form-group row mb-4">
													<label class="col-md-4 col-form-label" for="category_name">' ?0                  	;0
205 157  FETCH_DIM_R/81            $77=      16?0                 131:'category_name' 	;0
206 157  ECHO/40                   ?0        $77                  ?0                  	;0
207 158  ECHO/40                   ?0        132:'</label>
													<div class="col-md-8">
														<select id="category_idv" class="form-control" data-toggle="select2">
															<option value="" selected>' ?0                  	;0
208 159  FETCH_DIM_R/81            $78=      16?0                 133:'all_categories'	;0
209 159  ECHO/40                   ?0        $78                  ?0                  	;0
210 160  ECHO/40                   ?0        134:'</option>
															' ?0                  	;0
211 161  GOTO/253                  ?0        ?66                  ?135                	;0
212 163  FETCH_DIM_R/81            $79=      16?0                 136:'id'            	;0
213 163  ECHO/40                   ?0        $79                  ?0                  	;0
214 164  ECHO/40                   ?0        137:'</th>
																<th>' ?0                  	;0
215 165  FETCH_DIM_R/81            $80=      16?0                 138:'vod_name'      	;0
216 165  ECHO/40                   ?0        $80                  ?0                  	;0
217 166  ECHO/40                   ?0        139:'</th>
																<th>' ?0                  	;0
218 167  FETCH_DIM_R/81            $81=      16?0                 140:'category'      	;0
219 167  ECHO/40                   ?0        $81                  ?0                  	;0
220 168  GOTO/253                  ?0        ?313                 ?141                	;0
221 170  ASSIGN_CONCAT/30          ?68       16?10                142:'bouquet_name'  	;147
222 170  OP_DATA/137               ?0        143:' - Copy'        ?0                  	;0
223 171  UNSET_DIM/75              ?0        16?10                144:'id'            	;0
224 173  ASSIGN/38                 $83=      16?8                 145:array (
)       	;0
225 173  ASSIGN/38                 ?70       16?5                 $83                 	;0
226 174  ISSET_ISEMPTY_CV/197      #85=      16?10                ?0                  	;33554432
227 174  BOOL_NOT/13               #86=      #85                  ?0                  	;0
228 174  JMPZ/43                   ?0        #86                  ?230                	;0	>>230
229 175  GOTO/253                  ?0        ?338                 ?146                	;0
230 177  GOTO/253                  ?0        ?379                 ?147                	;0	<<228
231 180  ECHO/40                   ?0        148:'</h4>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-xl-12">
				<div class="card">
					<div class="card-body">
						<form onSubmit="return false;" action="#" method="POST" id="bouquet_form" data-parsley-validate="">
							' ?0                  	;0
232 181  ISSET_ISEMPTY_DIM_OBJ/115 #87=      16?10                149:'id'            	;33554432
233 181  BOOL_NOT/13               #88=      #87                  ?0                  	;0
234 181  JMPZ/43                   ?0        #88                  ?236                	;0	>>236
235 182  GOTO/253                  ?0        ?414                 ?150                	;0
236 184  ECHO/40                   ?0        151:'							<input type="hidden" name="edit" value="' ?0                  	;0	<<234
237 185  INIT_FCALL_BY_NAME/59     ?0        ?0                   152:'intval'        	;1
238 185  FETCH_DIM_FUNC_ARG/93     $89=      16?10                154:'id'            	;1
239 185  SEND_VAR_EX/66            ?80       $89                  ?1                  	;0
240 185  DO_FCALL_BY_NAME/131      $90=      ?0                   ?0                  	;0
241 185  ECHO/40                   ?0        $90                  ?0                  	;0
242 186  GOTO/253                  ?0        ?413                 ?155                	;0
243 188  ECHO/40                   ?0        156:'											</li>
										</ul>
									</div>
									' ?0                  	;0
244 189  ISSET_ISEMPTY_CV/197      #91=      16?10                ?0                  	;33554432
245 189  BOOL_NOT/13               #92=      #91                  ?0                  	;0
246 189  JMPZ/43                   ?0        #92                  ?248                	;0	>>248
247 190  GOTO/253                  ?0        ?141                 ?157                	;0
248 192  ECHO/40                   ?0        158:'									<div class="tab-pane" id="channels">
										<div class="row">
											<div class="col-12">
												<div class="form-group row mb-4">
													<label class="col-md-4 col-form-label" for="category_name">' ?0                  	;0	<<246
249 193  FETCH_DIM_R/81            $93=      16?0                 159:'category_name' 	;0
250 193  ECHO/40                   ?0        $93                  ?0                  	;0
251 194  ECHO/40                   ?0        160:'</label>
													<div class="col-md-8">
														<select id="category_id" class="form-control" data-toggle="select2">
															<option value="" selected>' ?0                  	;0
252 195  GOTO/253                  ?0        ?6                   ?161                	;0
253 197  ECHO/40                   ?0        162:'</option>
															' ?0                  	;0
254 198  INIT_FCALL_BY_NAME/59     ?0        ?0                   163:'f769E3F0c739d1A6'	;1
255 198  SEND_VAL_EX/116           ?80       165:'radio'          ?1                  	;0
256 198  DO_FCALL_BY_NAME/131      $94=      ?0                   ?0                  	;0
257 198  FE_RESET_R/77             $95=      $94                  ?273                	;0
258 198  FE_FETCH_R/78             ?0        $95                  16?1                	;273	>>273	<<272
259 199  ECHO/40                   ?0        166:'															<option value="' ?0                  	;0
260 200  INIT_FCALL_BY_NAME/59     ?0        ?0                   167:'intval'        	;1
261 200  FETCH_DIM_FUNC_ARG/93     $96=      16?1                 169:'id'            	;1
262 200  SEND_VAR_EX/66            ?80       $96                  ?1                  	;0
263 200  DO_FCALL_BY_NAME/131      $97=      ?0                   ?0                  	;0
264 200  ECHO/40                   ?0        $97                  ?0                  	;0
265 201  ECHO/40                   ?0        170:'">'             ?0                  	;0
266 202  INIT_FCALL_BY_NAME/59     ?0        ?0                   171:'htmlspecialchars'	;1
267 202  FETCH_DIM_FUNC_ARG/93     $98=      16?1                 173:'category_name' 	;1
268 202  SEND_VAR_EX/66            ?80       $98                  ?1                  	;0
269 202  DO_FCALL_BY_NAME/131      $99=      ?0                   ?0                  	;0
270 202  ECHO/40                   ?0        $99                  ?0                  	;0
271 203  ECHO/40                   ?0        174:'</option>
															' ?0                  	;0
272 204  JMP/42                    ?0        ?258                 ?0                  	;0	>>258
273 204  FE_FREE/127               ?0        $95                  ?0                  	;0	<<257
274 207  ECHO/40                   ?0        175:'														</select>
													</div>
												</div>
												<div class="form-group row mb-4">
													<label class="col-md-4 col-form-label" for="radios_search">' ?0                  	;0
275 208  FETCH_DIM_R/81            $100=     16?0                 176:'search'        	;0
276 208  ECHO/40                   ?0        $100                 ?0                  	;0
277 209  GOTO/253                  ?0        ?31                  ?177                	;0
278 211  FETCH_DIM_R/81            $101=     16?0                 178:'search'        	;0
279 211  ECHO/40                   ?0        $101                 ?0                  	;0
280 212  ECHO/40                   ?0        179:'</label>
													<div class="col-md-8">
														<input type="text" class="form-control" id="stream_search" value="">
													</div>
												</div>
												<div class="form-group row mb-4">
													<table id="datatable-stream" class="table nowrap">
														<thead>
															<tr>
																<th class="text-center">' ?0                  	;0
281 213  FETCH_DIM_R/81            $102=     16?0                 180:'id'            	;0
282 213  ECHO/40                   ?0        $102                 ?0                  	;0
283 214  ECHO/40                   ?0        181:'</th>
																<th>' ?0                  	;0
284 215  FETCH_DIM_R/81            $103=     16?0                 182:'stream_name'   	;0
285 215  ECHO/40                   ?0        $103                 ?0                  	;0
286 216  GOTO/253                  ?0        ?305                 ?183                	;0
287 218  FETCH_DIM_R/81            $104=     16?0                 184:'category'      	;0
288 218  ECHO/40                   ?0        $104                 ?0                  	;0
289 219  ECHO/40                   ?0        185:'</th>
																<th class="text-center">' ?0                  	;0
290 220  FETCH_DIM_R/81            $105=     16?0                 186:'actions'       	;0
291 220  ECHO/40                   ?0        $105                 ?0                  	;0
292 221  ECHO/40                   ?0        187:'</th>
															</tr>
														</thead>
														<tbody></tbody>
													</table>
												</div>
											</div>
										</div>
										<ul class="list-inline wizard mb-0">
											<li class="prevb list-inline-item">
												<a href="javascript: void(0);" class="btn btn-secondary">' ?0                  	;0
293 222  FETCH_DIM_R/81            $106=     16?0                 188:'prev'          	;0
294 222  ECHO/40                   ?0        $106                 ?0                  	;0
295 223  GOTO/253                  ?0        ?445                 ?189                	;0
296 225  ISSET_ISEMPTY_CV/197      #107=     16?10                ?0                  	;33554432
297 225  JMPZ/43                   ?0        #107                 ?299                	;0	>>299
298 226  GOTO/253                  ?0        ?365                 ?190                	;0
299 228  ECHO/40                   ?0        191:'												<input name="submit_bouquet" type="submit" class="btn btn-primary" value="' ?0                  	;0	<<297
300 229  FETCH_DIM_R/81            $108=     16?0                 192:'add'           	;0
301 229  ECHO/40                   ?0        $108                 ?0                  	;0
302 230  ECHO/40                   ?0        193:'" />
												' ?0                  	;0
303 231  GOTO/253                  ?0        ?369                 ?194                	;0
304 232  GOTO/253                  ?0        ?365                 ?195                	;0
305 234  ECHO/40                   ?0        196:'</th>
																<th>' ?0                  	;0
306 235  FETCH_DIM_R/81            $109=     16?0                 197:'category'      	;0
307 235  ECHO/40                   ?0        $109                 ?0                  	;0
308 236  ECHO/40                   ?0        198:'</th>
																<th class="text-center">' ?0                  	;0
309 237  FETCH_DIM_R/81            $110=     16?0                 199:'actions'       	;0
310 237  ECHO/40                   ?0        $110                 ?0                  	;0
311 238  ECHO/40                   ?0        200:'</th>
															</tr>
														</thead>
														<tbody></tbody>
													</table>
												</div>
											</div>
										</div>
										<ul class="list-inline wizard mb-0">
											<li class="prevb list-inline-item">
												<a href="javascript: void(0);" class="btn btn-secondary">' ?0                  	;0
312 239  GOTO/253                  ?0        ?370                 ?201                	;0
313 241  ECHO/40                   ?0        202:'</th>
																<th class="text-center">' ?0                  	;0
314 242  FETCH_DIM_R/81            $111=     16?0                 203:'actions'       	;0
315 242  ECHO/40                   ?0        $111                 ?0                  	;0
316 243  ECHO/40                   ?0        204:'</th>
															</tr>
														</thead>
														<tbody></tbody>
													</table>
												</div>
											</div>
										</div>
										<ul class="list-inline wizard mb-0">
											<li class="prevb list-inline-item">
												<a href="javascript: void(0);" class="btn btn-secondary">' ?0                  	;0
317 244  FETCH_DIM_R/81            $112=     16?0                 205:'prev'          	;0
318 244  ECHO/40                   ?0        $112                 ?0                  	;0
319 245  ECHO/40                   ?0        206:'</a>
											</li>
											<span class="float-right">
												<li class="list-inline-item">
													<a href="javascript: void(0);" onClick="toggleBouquets(\'datatable-movies\')" class="btn btn-primary">' ?0                  	;0
320 246  GOTO/253                  ?0        ?478                 ?207                	;0
321 248  FETCH_DIM_R/81            $113=     16?0                 208:'series_name'   	;0
322 248  ECHO/40                   ?0        $113                 ?0                  	;0
323 249  ECHO/40                   ?0        209:'</th>
																<th>' ?0                  	;0
324 250  FETCH_DIM_R/81            $114=     16?0                 210:'category'      	;0
325 250  ECHO/40                   ?0        $114                 ?0                  	;0
326 251  ECHO/40                   ?0        211:'</th>
																<th class="text-center">' ?0                  	;0
327 252  FETCH_DIM_R/81            $115=     16?0                 212:'actions'       	;0
328 252  ECHO/40                   ?0        $115                 ?0                  	;0
329 253  GOTO/253                  ?0        ?428                 ?213                	;0
330 255  ECHO/40                   ?0        214:'														</select>
													</div>
												</div>
												<div class="form-group row mb-4">
													<label class="col-md-4 col-form-label" for="series_search">' ?0                  	;0
331 256  FETCH_DIM_R/81            $116=     16?0                 215:'search'        	;0
332 256  ECHO/40                   ?0        $116                 ?0                  	;0
333 257  ECHO/40                   ?0        216:'</label>
													<div class="col-md-8">
														<input type="text" class="form-control" id="series_search" value="">
													</div>
												</div>
												<div class="form-group row mb-4">
													<table id="datatable-series" class="table nowrap">
														<thead>
															<tr>
																<th class="text-center">' ?0                  	;0
334 258  FETCH_DIM_R/81            $117=     16?0                 217:'id'            	;0
335 258  ECHO/40                   ?0        $117                 ?0                  	;0
336 259  ECHO/40                   ?0        218:'</th>
																<th>' ?0                  	;0
337 260  GOTO/253                  ?0        ?321                 ?219                	;0
338 263  ASSIGN/38                 ?104      16?11                220:'Bouquets'      	;0
339 264  INCLUDE_OR_EVAL/73        ?105      221:'header.php'     ?0                  	;2
340 265  ECHO/40                   ?0        222:'<div class="wrapper boxed-layout"' ?0                  	;0
341 266  FETCH_IS/89               $120=     223:'_SERVER'        ?0                  	;0
342 266  ISSET_ISEMPTY_DIM_OBJ/115 #121=     $120                 224:'HTTP_X_REQUESTED_WITH'	;16777216
343 266  BOOL_NOT/13               #122=     #121                 ?0                  	;0
344 266  JMPZ_EX/46                #122=     #122                 ?352                	;0	>>352
345 266  INIT_FCALL_BY_NAME/59     ?0        ?0                   225:'strtolower'    	;1
346 266  FETCH_FUNC_ARG/92         $123=     227:'_SERVER'        ?0                  	;1
347 266  FETCH_DIM_FUNC_ARG/93     $124=     $123                 228:'HTTP_X_REQUESTED_WITH'	;1
348 266  SEND_VAR_EX/66            ?80       $124                 ?1                  	;0
349 266  DO_FCALL_BY_NAME/131      $125=     ?0                   ?0                  	;0
350 266  IS_EQUAL/17               #126=     $125                 229:'xmlhttprequest'	;0
351 266  BOOL/52                   #122=     #126                 ?0                  	;0
352 266  BOOL_NOT/13               #127=     #122                 ?0                  	;0	<<344
353 266  JMPZ/43                   ?0        #127                 ?355                	;0	>>355
354 267  GOTO/253                  ?0        ?2                   ?230                	;0
355 269  GOTO/253                  ?0        ?1                   ?231                	;0	<<353
356 271  FETCH_DIM_R/81            $128=     16?0                 232:'next'          	;0
357 271  ECHO/40                   ?0        $128                 ?0                  	;0
358 272  ECHO/40                   ?0        233:'</a>
												</li>
											</span>
										</ul>
									</div>
									<div class="tab-pane" id="radios">
										<div class="row">
											<div class="col-12">
												<div class="form-group row mb-4">
													<label class="col-md-4 col-form-label" for="category_idr">' ?0                  	;0
359 273  FETCH_DIM_R/81            $129=     16?0                 234:'category_name' 	;0
360 273  ECHO/40                   ?0        $129                 ?0                  	;0
361 274  ECHO/40                   ?0        235:'</label>
													<div class="col-md-8">
														<select id="category_idr" class="form-control" data-toggle="select2">
															<option value="" selected>' ?0                  	;0
362 275  FETCH_DIM_R/81            $130=     16?0                 236:'all_categories'	;0
363 275  ECHO/40                   ?0        $130                 ?0                  	;0
364 276  GOTO/253                  ?0        ?253                 ?237                	;0
365 279  ECHO/40                   ?0        238:'												<a href="javascript: void(0);" class="btn btn-secondary">' ?0                  	;0
366 280  FETCH_DIM_R/81            $131=     16?0                 239:'next'          	;0
367 280  ECHO/40                   ?0        $131                 ?0                  	;0
368 281  ECHO/40                   ?0        240:'</a>
												' ?0                  	;0
369 283  GOTO/253                  ?0        ?243                 ?241                	;0
370 285  FETCH_DIM_R/81            $132=     16?0                 242:'prev'          	;0
371 285  ECHO/40                   ?0        $132                 ?0                  	;0
372 286  ECHO/40                   ?0        243:'</a>
											</li>
											<span class="float-right">
												<li class="list-inline-item">
													<a href="javascript: void(0);" onClick="toggleBouquets(\'datatable-stream\')" class="btn btn-primary">' ?0                  	;0
373 287  FETCH_DIM_R/81            $133=     16?0                 244:'toggle_page'   	;0
374 287  ECHO/40                   ?0        $133                 ?0                  	;0
375 288  ECHO/40                   ?0        245:'</a>
												</li>
												<li class="nextb list-inline-item">
													<a href="javascript: void(0);" class="btn btn-secondary">' ?0                  	;0
376 289  FETCH_DIM_R/81            $134=     16?0                 246:'next'          	;0
377 289  ECHO/40                   ?0        $134                 ?0                  	;0
378 290  GOTO/253                  ?0        ?204                 ?247                	;0
379 292  INIT_FCALL_BY_NAME/59     ?0        ?0                   248:'json_decode'   	;2
380 292  FETCH_DIM_FUNC_ARG/93     $135=     16?10                250:'bouquet_channels'	;1
381 292  SEND_VAR_EX/66            ?80       $135                 ?1                  	;0
382 292  SEND_VAL_EX/116           ?96       251:true             ?2                  	;0
383 292  DO_FCALL_BY_NAME/131      $136=     ?0                   ?0                  	;0
384 292  ASSIGN/38                 ?123      16?12                $136                	;0
385 293  INIT_FCALL_BY_NAME/59     ?0        ?0                   252:'json_decode'   	;2
386 293  FETCH_DIM_FUNC_ARG/93     $138=     16?10                254:'bouquet_movies'	;1
387 293  SEND_VAR_EX/66            ?80       $138                 ?1                  	;0
388 293  SEND_VAL_EX/116           ?96       255:true             ?2                  	;0
389 293  DO_FCALL_BY_NAME/131      $139=     ?0                   ?0                  	;0
390 293  ASSIGN/38                 ?126      16?6                 $139                	;0
391 294  INIT_FCALL_BY_NAME/59     ?0        ?0                   256:'json_decode'   	;2
392 294  FETCH_DIM_FUNC_ARG/93     $141=     16?10                258:'bouquet_radios'	;1
393 294  SEND_VAR_EX/66            ?80       $141                 ?1                  	;0
394 294  SEND_VAL_EX/116           ?96       259:true             ?2                  	;0
395 294  DO_FCALL_BY_NAME/131      $142=     ?0                   ?0                  	;0
396 294  ASSIGN/38                 ?129      16?9                 $142                	;0
397 295  INIT_FCALL_BY_NAME/59     ?0        ?0                   260:'json_decode'   	;2
398 295  FETCH_DIM_FUNC_ARG/93     $144=     16?10                262:'bouquet_series'	;1
399 295  SEND_VAR_EX/66            ?80       $144                 ?1                  	;0
400 295  SEND_VAL_EX/116           ?96       263:true             ?2                  	;0
401 295  DO_FCALL_BY_NAME/131      $145=     ?0                   ?0                  	;0
402 295  ASSIGN/38                 ?132      16?2                 $145                	;0
403 296  INIT_FCALL_BY_NAME/59     ?0        ?0                   264:'confirmIDs'    	;1
404 296  INIT_FCALL_BY_NAME/59     ?0        ?0                   266:'array_merge'   	;3
405 296  SEND_VAR_EX/66            ?80       16?12                ?1                  	;0
406 296  SEND_VAR_EX/66            ?96       16?6                 ?2                  	;0
407 296  SEND_VAR_EX/66            ?112      16?9                 ?3                  	;0
408 296  DO_FCALL_BY_NAME/131      $147=     ?0                   ?0                  	;0
409 296  SEND_VAR_NO_REF_EX/50     ?80       $147                 ?1                  	;0
410 296  DO_FCALL_BY_NAME/131      $148=     ?0                   ?0                  	;0
411 296  ASSIGN/38                 ?135      16?13                $148                	;0
412 297  GOTO/253                  ?0        ?514                 ?268                	;0
413 299  ECHO/40                   ?0        269:'" />
							'   ?0                  	;0
414 301  ECHO/40                   ?0        270:'							<input type="hidden" id="bouquet_data" name="bouquet_data" value="" />
							<div id="basicwizard">
								<ul class="nav nav-pills bg-light nav-justified form-wizard-header mb-4">
									<li class="nav-item">
										<a href="#bouquet-details" data-toggle="tab" class="nav-link rounded-0 pt-2 pb-2"> 
											<i class="mdi mdi-account-card-details-outline mr-1"></i>
											<span class="d-none d-sm-inline">' ?0                  	;0
415 302  FETCH_DIM_R/81            $150=     16?0                 271:'details'       	;0
416 302  ECHO/40                   ?0        $150                 ?0                  	;0
417 303  ECHO/40                   ?0        272:'</span>
										</a>
									</li>
									' ?0                  	;0
418 304  GOTO/253                  ?0        ?155                 ?273                	;0
419 306  ISSET_ISEMPTY_DIM_OBJ/115 #151=     16?10                274:'id'            	;33554432
420 306  JMPZ/43                   ?0        #151                 ?422                	;0	>>422
421 307  GOTO/253                  ?0        ?425                 ?275                	;0
422 309  FETCH_DIM_R/81            $152=     16?0                 276:'add_bouquet'   	;0	<<420
423 309  ECHO/40                   ?0        $152                 ?0                  	;0
424 310  GOTO/253                  ?0        ?231                 ?277                	;0
425 312  FETCH_DIM_R/81            $153=     16?0                 278:'edit_bouquet'  	;0
426 312  ECHO/40                   ?0        $153                 ?0                  	;0
427 313  GOTO/253                  ?0        ?231                 ?279                	;0
428 315  ECHO/40                   ?0        280:'</th>
															</tr>
														</thead>
														<tbody></tbody>
													</table>
												</div>
											</div>
										</div>
										<ul class="list-inline wizard mb-0">
											<li class="prevb list-inline-item">
												<a href="javascript: void(0);" class="btn btn-secondary">' ?0                  	;0
429 316  FETCH_DIM_R/81            $154=     16?0                 281:'prev'          	;0
430 316  ECHO/40                   ?0        $154                 ?0                  	;0
431 317  ECHO/40                   ?0        282:'</a>
											</li>
											<span class="float-right">
												<li class="list-inline-item">
													<a href="javascript: void(0);" onClick="toggleBouquets(\'datatable-series\')" class="btn btn-primary">' ?0                  	;0
432 318  FETCH_DIM_R/81            $155=     16?0                 283:'toggle_page'   	;0
433 318  ECHO/40                   ?0        $155                 ?0                  	;0
434 319  ECHO/40                   ?0        284:'</a>
												</li>
												<li class="nextb list-inline-item">
													<a href="javascript: void(0);" class="btn btn-secondary">' ?0                  	;0
435 320  GOTO/253                  ?0        ?356                 ?285                	;0
436 322  INCLUDE_OR_EVAL/73        ?142      286:'session.php'    ?0                  	;2	<<0
437 323  INCLUDE_OR_EVAL/73        ?143      287:'functions.php'  ?0                  	;2
438 324  INIT_FCALL_BY_NAME/59     ?0        ?0                   288:'E6D500e19634d513'	;0
439 324  DO_FCALL_BY_NAME/131      $158=     ?0                   ?0                  	;0
440 324  JMPZ/43                   ?0        $158                 ?442                	;0	>>442
441 325  GOTO/253                  ?0        ?444                 ?290                	;0
442 327  INIT_FCALL_BY_NAME/59     ?0        ?0                   291:'E72F42a93714Ba87'	;0	<<440
443 327  DO_FCALL_BY_NAME/131      ?145      ?0                   ?0                  	;0
444 329  GOTO/253                  ?0        ?166                 ?293                	;0
445 331  ECHO/40                   ?0        294:'</a>
											</li>
											<span class="float-right">
												<li class="list-inline-item">
													<a href="javascript: void(0);" onClick="toggleBouquets(\'datatable-series\')" class="btn btn-primary">' ?0                  	;0
446 332  FETCH_DIM_R/81            $160=     16?0                 295:'toggle_page'   	;0
447 332  ECHO/40                   ?0        $160                 ?0                  	;0
448 333  ECHO/40                   ?0        296:'</a>
												</li>
												<li class="nextb list-inline-item">
													<a href="javascript: void(0);" class="btn btn-secondary">' ?0                  	;0
449 334  FETCH_DIM_R/81            $161=     16?0                 297:'next'          	;0
450 334  ECHO/40                   ?0        $161                 ?0                  	;0
451 335  ECHO/40                   ?0        298:'</a>
												</li>
											</span>
										</ul>
									</div>
									<div class="tab-pane" id="review">
										<div class="row">
											<div class="col-12">
												<div class="form-group row mb-4">
													<table id="datatable-review" class="table nowrap">
														<thead>
															<tr>
																<th class="text-center">' ?0                  	;0
452 336  GOTO/253                  ?0        ?541                 ?299                	;0
453 338  ECHO/40                   ?0        300:'</label>
													<div class="col-md-8">
														<select id="category_ids" class="form-control" data-toggle="select2">
															<option value="" selected>' ?0                  	;0
454 339  FETCH_DIM_R/81            $162=     16?0                 301:'all_categories'	;0
455 339  ECHO/40                   ?0        $162                 ?0                  	;0
456 340  ECHO/40                   ?0        302:'</option>
															' ?0                  	;0
457 341  INIT_FCALL_BY_NAME/59     ?0        ?0                   303:'f769e3F0c739D1a6'	;1
458 341  SEND_VAL_EX/116           ?80       305:'series'         ?1                  	;0
459 341  DO_FCALL_BY_NAME/131      $163=     ?0                   ?0                  	;0
460 341  FE_RESET_R/77             $164=     $163                 ?476                	;0
461 341  FE_FETCH_R/78             ?0        $164                 16?1                	;476	>>476	<<475
462 342  ECHO/40                   ?0        306:'															<option value="' ?0                  	;0
463 343  INIT_FCALL_BY_NAME/59     ?0        ?0                   307:'intval'        	;1
464 343  FETCH_DIM_FUNC_ARG/93     $165=     16?1                 309:'id'            	;1
465 343  SEND_VAR_EX/66            ?80       $165                 ?1                  	;0
466 343  DO_FCALL_BY_NAME/131      $166=     ?0                   ?0                  	;0
467 343  ECHO/40                   ?0        $166                 ?0                  	;0
468 344  ECHO/40                   ?0        310:'">'             ?0                  	;0
469 345  INIT_FCALL_BY_NAME/59     ?0        ?0                   311:'htmlspecialchars'	;1
470 345  FETCH_DIM_FUNC_ARG/93     $167=     16?1                 313:'category_name' 	;1
471 345  SEND_VAR_EX/66            ?80       $167                 ?1                  	;0
472 345  DO_FCALL_BY_NAME/131      $168=     ?0                   ?0                  	;0
473 345  ECHO/40                   ?0        $168                 ?0                  	;0
474 346  ECHO/40                   ?0        314:'</option>
															' ?0                  	;0
475 347  JMP/42                    ?0        ?461                 ?0                  	;0	>>461
476 347  FE_FREE/127               ?0        $164                 ?0                  	;0	<<460
477 350  GOTO/253                  ?0        ?330                 ?315                	;0
478 352  FETCH_DIM_R/81            $169=     16?0                 316:'toggle_page'   	;0
479 352  ECHO/40                   ?0        $169                 ?0                  	;0
480 353  ECHO/40                   ?0        317:'</a>
												</li>
												<li class="nextb list-inline-item">
													<a href="javascript: void(0);" class="btn btn-secondary">' ?0                  	;0
481 354  FETCH_DIM_R/81            $170=     16?0                 318:'next'          	;0
482 354  ECHO/40                   ?0        $170                 ?0                  	;0
483 355  ECHO/40                   ?0        319:'</a>
												</li>
											</span>
										</ul>
									</div>
									<div class="tab-pane" id="series">
										<div class="row">
											<div class="col-12">
												<div class="form-group row mb-4">
													<label class="col-md-4 col-form-label" for="category_name">' ?0                  	;0
484 356  FETCH_DIM_R/81            $171=     16?0                 320:'category_name' 	;0
485 356  ECHO/40                   ?0        $171                 ?0                  	;0
486 357  GOTO/253                  ?0        ?453                 ?321                	;0
487 359  ECHO/40                   ?0        322:'</span>
										</a>
									</li>
									<li class="nav-item">
										<a href="#series" data-toggle="tab" class="nav-link rounded-0 pt-2 pb-2">
											<i class="mdi mdi-youtube-tv mr-1"></i>
											<span class="d-none d-sm-inline">' ?0                  	;0
488 360  FETCH_DIM_R/81            $172=     16?0                 323:'series'        	;0
489 360  ECHO/40                   ?0        $172                 ?0                  	;0
490 361  ECHO/40                   ?0        324:'</span>
										</a>
									</li>
									<li class="nav-item">
										<a href="#radios" data-toggle="tab" class="nav-link rounded-0 pt-2 pb-2">
											<i class="mdi mdi-radio mr-1"></i>
											<span class="d-none d-sm-inline">' ?0                  	;0
491 362  FETCH_DIM_R/81            $173=     16?0                 325:'radio'         	;0
492 362  ECHO/40                   ?0        $173                 ?0                  	;0
493 363  ECHO/40                   ?0        326:'</span>
										</a>
									</li>
									<li class="nav-item">
										<a href="#review" data-toggle="tab" class="nav-link rounded-0 pt-2 pb-2">
											<i class="mdi mdi-book-open-variant mr-1"></i>
											<span class="d-none d-sm-inline">' ?0                  	;0
494 364  GOTO/253                  ?0        ?197                 ?327                	;0
495 366  ECHO/40                   ?0        328:'</th>
																<th class="text-center">' ?0                  	;0
496 367  FETCH_DIM_R/81            $174=     16?0                 329:'actions'       	;0
497 367  ECHO/40                   ?0        $174                 ?0                  	;0
498 368  ECHO/40                   ?0        330:'</th>
															</tr>
														</thead>
														<tbody>
                                                            ' ?0                  	;0
499 369  FE_RESET_R/77             $175=     16?12                ?512                	;0
500 369  FE_FETCH_R/78             ?0        $175                 16?7                	;512	>>512	<<511
501 370  ECHO/40                   ?0        331:'                                                            <tr id="stream-' ?0                  	;0
502 371  ECHO/40                   ?0        16?7                 ?0                  	;0
503 372  ECHO/40                   ?0        332:'">
																<td class="text-center">' ?0                  	;0
504 373  ECHO/40                   ?0        16?7                 ?0                  	;0
505 374  ECHO/40                   ?0        333:'</td>
																<td>Stream</td>
																<td>' ?0                  	;0
506 375  FETCH_DIM_R/81            $176=     16?8                 16?7                	;0
507 375  ECHO/40                   ?0        $176                 ?0                  	;0
508 376  ECHO/40                   ?0        334:'</td>
																<td class="text-center">
                                                                    <button type="button" class="btn-remove btn btn-warning waves-effect waves-warning btn-xs" onClick="toggleBouquet(' ?0                  	;0
509 377  ECHO/40                   ?0        16?7                 ?0                  	;0
510 378  ECHO/40                   ?0        335:', \'stream\');"><i class="mdi mdi-minus"></i></button>
                                                                </td>
															</tr>
                                                            ' ?0                  	;0
511 379  JMP/42                    ?0        ?500                 ?0                  	;0	>>500
512 379  FE_FREE/127               ?0        $175                 ?0                  	;0	<<499
513 382  GOTO/253                  ?0        ?97                  ?336                	;0
514 384  INIT_FCALL_BY_NAME/59     ?0        ?0                   337:'count'         	;1
515 384  SEND_VAR_EX/66            ?80       16?13                ?1                  	;0
516 384  DO_FCALL_BY_NAME/131      $177=     ?0                   ?0                  	;0
517 384  IS_SMALLER/19             #178=     339:0                $177                	;0
518 384  BOOL_NOT/13               #179=     #178                 ?0                  	;0
519 384  JMPZ/43                   ?0        #179                 ?521                	;0	>>521
520 385  GOTO/253                  ?0        ?540                 ?340                	;0
521 387  INIT_METHOD_CALL/112      ?0        16?3                 341:'query'         	;1	<<519
522 387  INIT_FCALL_BY_NAME/59     ?0        ?0                   343:'implode'       	;2
523 387  SEND_VAL_EX/116           ?80       345:','              ?1                  	;0
524 387  SEND_VAR_EX/66            ?96       16?13                ?2                  	;0
525 387  DO_FCALL_BY_NAME/131      $180=     ?0                   ?0                  	;0
526 387  CONCAT/8                  #181=     346:'SELECT `id`, `stream_display_name` FROM `streams` WHERE `id` IN (' $180                	;0
527 387  CONCAT/8                  #182=     #181                 347:');'            	;0
528 387  SEND_VAL_EX/116           ?80       #182                 ?1                  	;0
529 387  DO_FCALL/60               ?169      ?0                   ?0                  	;0
530 388  INIT_METHOD_CALL/112      ?0        16?3                 348:'get_rows'      	;0
531 388  DO_FCALL/60               $184=     ?0                   ?0                  	;0
532 388  FE_RESET_R/77             $185=     $184                 ?539                	;0
533 388  FE_FETCH_R/78             ?0        $185                 16?4                	;539	>>539	<<538
534 389  FETCH_DIM_R/81            $186=     16?4                 350:'id'            	;0
535 389  FETCH_DIM_R/81            $188=     16?4                 351:'stream_display_name'	;0
536 389  ASSIGN_DIM/147            ?173      16?8                 $186                	;0
537 389  OP_DATA/137               ?0        $188                 ?0                  	;0
538 390  JMP/42                    ?0        ?533                 ?0                  	;0	>>533
539 390  FE_FREE/127               ?0        $185                 ?0                  	;0	<<532
540 394  GOTO/253                  ?0        ?39                  ?352                	;0
541 396  FETCH_DIM_R/81            $189=     16?0                 353:'id'            	;0
542 396  ECHO/40                   ?0        $189                 ?0                  	;0
543 397  ECHO/40                   ?0        354:'</th>
																<th>' ?0                  	;0
544 398  FETCH_DIM_R/81            $190=     16?0                 355:'type'          	;0
545 398  ECHO/40                   ?0        $190                 ?0                  	;0
546 399  ECHO/40                   ?0        356:'</th>
																<th>' ?0                  	;0
547 400  FETCH_DIM_R/81            $191=     16?0                 357:'display_name'  	;0
548 400  ECHO/40                   ?0        $191                 ?0                  	;0
549 401  GOTO/253                  ?0        ?495                 ?358                	;0
550 403  INCLUDE_OR_EVAL/73        ?178      359:'footer.php'     ?0                  	;2
551 404  NOP/0                     ?0        360:1                ?0                  	;4294967295
*/

?>
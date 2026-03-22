<?php


/*
#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
0   3    JMP/42                    ?0        ?1                   ?0                  	;0	>>1
1   5    INCLUDE_OR_EVAL/73        ?0        1:'session.php'      ?0                  	;2	<<0
2   6    INCLUDE_OR_EVAL/73        ?1        2:'functions.php'    ?0                  	;2
3   7    INIT_FCALL_BY_NAME/59     ?0        ?0                   3:'e6d500e19634D513'	;0
4   7    DO_FCALL_BY_NAME/131      $10=      ?0                   ?0                  	;0
5   7    JMPZ/43                   ?0        $10                  ?7                  	;0	>>7
6   8    GOTO/253                  ?0        ?9                   ?5                  	;0
7   10   INIT_FCALL_BY_NAME/59     ?0        ?0                   6:'E72F42A93714Ba87'	;0	<<5
8   10   DO_FCALL_BY_NAME/131      ?3        ?0                   ?0                  	;0
9   12   GOTO/253                  ?0        ?177                 ?8                  	;0
10  14   INCLUDE_OR_EVAL/73        ?4        9:'header.php'       ?0                  	;2
11  15   ECHO/40                   ?0        10:'<div class="wrapper boxed-layout"' ?0                  	;0
12  16   FETCH_IS/89               $13=      11:'_SERVER'         ?0                  	;0
13  16   ISSET_ISEMPTY_DIM_OBJ/115 #14=      $13                  12:'HTTP_X_REQUESTED_WITH'	;16777216
14  16   BOOL_NOT/13               #15=      #14                  ?0                  	;0
15  16   JMPZ_EX/46                #15=      #15                  ?23                 	;0	>>23
16  16   INIT_FCALL_BY_NAME/59     ?0        ?0                   13:'strtolower'     	;1
17  16   FETCH_FUNC_ARG/92         $16=      15:'_SERVER'         ?0                  	;1
18  16   FETCH_DIM_FUNC_ARG/93     $17=      $16                  16:'HTTP_X_REQUESTED_WITH'	;1
19  16   SEND_VAR_EX/66            ?80       $17                  ?1                  	;0
20  16   DO_FCALL_BY_NAME/131      $18=      ?0                   ?0                  	;0
21  16   IS_EQUAL/17               #19=      $18                  17:'xmlhttprequest' 	;0
22  16   BOOL/52                   #15=      #19                  ?0                  	;0
23  16   BOOL_NOT/13               #20=      #15                  ?0                  	;0	<<15
24  16   JMPZ/43                   ?0        #20                  ?26                 	;0	>>26
25  17   GOTO/253                  ?0        ?27                  ?18                 	;0
26  19   ECHO/40                   ?0        19:' style="display: none;"' ?0                  	;0	<<24
27  21   GOTO/253                  ?0        ?209                 ?20                 	;0
28  23   ECHO/40                   ?0        21:'													</ol>
												</div>
											</div> 
										</div> 
										<ul class="list-inline wizard mb-0 add-margin-top-20">
											<li class="list-inline-item float-right">
												<button type="submit" class="btn btn-primary waves-effect waves-light">Save Changes</button>
											</li>
										</ul>
									</form>
								</div>
								<div class="tab-pane" id="category-order-4">
									<form action="#" method="POST" id="stream_categories_form-4">
										<input type="hidden" id="categories_input-4" name="categories" value="" />
										<div class="row">
											<div class="col-12">
												<p class="sub-header">
													To re-order a category, drag it up or down the list using the <i class="mdi mdi-view-sequential"></i> icon. Click Save Changes at the bottom once finished.
												</p>
												<div class="custom-dd dd" id="category_order-4">
													<ol class="dd-list">
														' ?0                  	;0
29  24   FETCH_DIM_R/81            $21=      16?0                 22:4                	;0
30  24   FE_RESET_R/77             $22=      $21                  ?76                 	;0
31  24   FE_FETCH_R/78             ?0        $22                  16?1                	;76	>>76	<<75
32  25   NOP/0                     ?0        ?0                   ?0                  	;1
33  25   GOTO/253                  ?0        ?34                  ?23                 	;0
34  27   ECHO/40                   ?0        24:'														<li class="dd-item dd3-item category-' ?0                  	;0
35  28   FETCH_DIM_R/81            $23=      16?1                 25:'id'             	;0
36  28   ECHO/40                   ?0        $23                  ?0                  	;0
37  29   ECHO/40                   ?0        26:'" data-id="'     ?0                  	;0
38  30   FETCH_DIM_R/81            $24=      16?1                 27:'id'             	;0
39  30   ECHO/40                   ?0        $24                  ?0                  	;0
40  31   ECHO/40                   ?0        28:'">
															<div class="dd-handle dd3-handle"></div>
															<div class="dd3-content">' ?0                  	;0
41  32   NOP/0                     ?0        ?0                   ?0                  	;1
42  32   GOTO/253                  ?0        ?64                  ?29                 	;0
43  34   FETCH_DIM_R/81            $25=      16?1                 30:'id'             	;0
44  34   ECHO/40                   ?0        $25                  ?0                  	;0
45  35   ECHO/40                   ?0        31:')"><i class="mdi mdi-close"></i></button>
																	</div>
																	' ?0                  	;0
46  37   ECHO/40                   ?0        32:'																</span>
															</div>
														</li>
														' ?0                  	;0
47  39   NOP/0                     ?0        ?0                   ?0                  	;1
48  39   GOTO/253                  ?0        ?75                  ?33                 	;0
49  41   ECHO/40                   ?0        34:'																<span style="float:right;">
																	' ?0                  	;0
50  42   INIT_FCALL_BY_NAME/59     ?0        ?0                   35:'e589a4BF54A2DaD1'	;2
51  42   SEND_VAL_EX/116           ?80       37:'adv'             ?1                  	;0
52  42   SEND_VAL_EX/116           ?96       38:'edit_cat'        ?2                  	;0
53  42   DO_FCALL_BY_NAME/131      $26=      ?0                   ?0                  	;0
54  42   BOOL_NOT/13               #27=      $26                  ?0                  	;0
55  42   JMPZ/43                   ?0        #27                  ?58                 	;0	>>58
56  43   NOP/0                     ?0        ?0                   ?0                  	;1
57  43   GOTO/253                  ?0        ?46                  ?39                 	;0
58  45   ECHO/40                   ?0        40:'																	<div class="btn-group">
																		<button type="button" onClick="navigate(\'stream_category?id=' ?0                  	;0	<<55
59  46   FETCH_DIM_R/81            $28=      16?1                 41:'id'             	;0
60  46   ECHO/40                   ?0        $28                  ?0                  	;0
61  47   ECHO/40                   ?0        42:'\');" class="btn btn-light waves-effect waves-light sml-button"><i class="mdi mdi-pencil-outline"></i></button>
																		<button type="button" class="btn btn-light waves-effect waves-light sml-button" onClick="deleteCategory(' ?0                  	;0
62  48   NOP/0                     ?0        ?0                   ?0                  	;1
63  48   GOTO/253                  ?0        ?43                  ?43                 	;0
64  50   FETCH_DIM_R/81            $29=      16?1                 44:'category_name'  	;0
65  50   ECHO/40                   ?0        $29                  ?0                  	;0
66  51   ECHO/40                   ?0        45:' '               ?0                  	;0
67  52   FETCH_DIM_R/81            $30=      16?1                 46:'is_adult'       	;0
68  52   BOOL_NOT/13               #31=      $30                  ?0                  	;0
69  52   JMPZ/43                   ?0        #31                  ?72                 	;0	>>72
70  53   NOP/0                     ?0        ?0                   ?0                  	;1
71  53   GOTO/253                  ?0        ?73                  ?47                 	;0
72  55   ECHO/40                   ?0        48:'<i class=\'text-pink mdi mdi-record\'></i>' ?0                  	;0	<<69
73  57   NOP/0                     ?0        ?0                   ?0                  	;1
74  57   GOTO/253                  ?0        ?49                  ?49                 	;0
75  58   JMP/42                    ?0        ?31                  ?0                  	;0	>>31
76  58   FE_FREE/127               ?0        $22                  ?0                  	;0	<<30
77  61   ECHO/40                   ?0        50:'													</ol>
												</div>
											</div> 
										</div> 
										<ul class="list-inline wizard mb-0 add-margin-top-20">
											<li class="list-inline-item float-right">
												<button type="submit" class="btn btn-primary waves-effect waves-light">Save Changes</button>
											</li>
										</ul>
									</form>
								</div>
							</div>
						</div> 
					</div> 
				</div> 
			</div> 
		</div>
	</div>
</div>
' ?0                  	;0
78  62   GOTO/253                  ?0        ?283                 ?51                 	;0
79  64   FETCH_DIM_R/81            $32=      16?0                 52:2                	;0
80  64   FE_RESET_R/77             $33=      $32                  ?126                	;0
81  64   FE_FETCH_R/78             ?0        $33                  16?1                	;126	>>126	<<125
82  65   NOP/0                     ?0        ?0                   ?0                  	;1
83  65   GOTO/253                  ?0        ?116                 ?53                 	;0
84  67   ECHO/40                   ?0        54:'																<span style="float:right;">
																	' ?0                  	;0
85  68   INIT_FCALL_BY_NAME/59     ?0        ?0                   55:'E589A4bF54A2daD1'	;2
86  68   SEND_VAL_EX/116           ?80       57:'adv'             ?1                  	;0
87  68   SEND_VAL_EX/116           ?96       58:'edit_cat'        ?2                  	;0
88  68   DO_FCALL_BY_NAME/131      $34=      ?0                   ?0                  	;0
89  68   BOOL_NOT/13               #35=      $34                  ?0                  	;0
90  68   JMPZ/43                   ?0        #35                  ?93                 	;0	>>93
91  69   NOP/0                     ?0        ?0                   ?0                  	;1
92  69   GOTO/253                  ?0        ?113                 ?59                 	;0
93  71   ECHO/40                   ?0        60:'																	<div class="btn-group">
																		<button type="button" onClick="navigate(\'stream_category?id=' ?0                  	;0	<<90
94  72   FETCH_DIM_R/81            $36=      16?1                 61:'id'             	;0
95  72   ECHO/40                   ?0        $36                  ?0                  	;0
96  73   ECHO/40                   ?0        62:'\');" class="btn btn-light waves-effect waves-light sml-button"><i class="mdi mdi-pencil-outline"></i></button>
																		<button type="button" class="btn btn-light waves-effect waves-light sml-button" onClick="deleteCategory(' ?0                  	;0
97  74   NOP/0                     ?0        ?0                   ?0                  	;1
98  74   GOTO/253                  ?0        ?110                 ?63                 	;0
99  76   FETCH_DIM_R/81            $37=      16?1                 64:'category_name'  	;0
100 76   ECHO/40                   ?0        $37                  ?0                  	;0
101 77   ECHO/40                   ?0        65:' '               ?0                  	;0
102 78   FETCH_DIM_R/81            $38=      16?1                 66:'is_adult'       	;0
103 78   BOOL_NOT/13               #39=      $38                  ?0                  	;0
104 78   JMPZ/43                   ?0        #39                  ?107                	;0	>>107
105 79   NOP/0                     ?0        ?0                   ?0                  	;1
106 79   GOTO/253                  ?0        ?108                 ?67                 	;0
107 81   ECHO/40                   ?0        68:'<i class=\'text-pink mdi mdi-record\'></i>' ?0                  	;0	<<104
108 83   NOP/0                     ?0        ?0                   ?0                  	;1
109 83   GOTO/253                  ?0        ?84                  ?69                 	;0
110 85   FETCH_DIM_R/81            $40=      16?1                 70:'id'             	;0
111 85   ECHO/40                   ?0        $40                  ?0                  	;0
112 86   ECHO/40                   ?0        71:')"><i class="mdi mdi-close"></i></button>
																	</div>
																	' ?0                  	;0
113 88   ECHO/40                   ?0        72:'																</span>
															</div>
														</li>
														' ?0                  	;0
114 90   NOP/0                     ?0        ?0                   ?0                  	;1
115 90   GOTO/253                  ?0        ?125                 ?73                 	;0
116 92   ECHO/40                   ?0        74:'														<li class="dd-item dd3-item category-' ?0                  	;0
117 93   FETCH_DIM_R/81            $41=      16?1                 75:'id'             	;0
118 93   ECHO/40                   ?0        $41                  ?0                  	;0
119 94   ECHO/40                   ?0        76:'" data-id="'     ?0                  	;0
120 95   FETCH_DIM_R/81            $42=      16?1                 77:'id'             	;0
121 95   ECHO/40                   ?0        $42                  ?0                  	;0
122 96   ECHO/40                   ?0        78:'">
															<div class="dd-handle dd3-handle"></div>
															<div class="dd3-content">' ?0                  	;0
123 97   NOP/0                     ?0        ?0                   ?0                  	;1
124 97   GOTO/253                  ?0        ?99                  ?79                 	;0
125 98   JMP/42                    ?0        ?81                  ?0                  	;0	>>81
126 98   FE_FREE/127               ?0        $33                  ?0                  	;0	<<80
127 101  ECHO/40                   ?0        80:'													</ol>
												</div>
											</div> 
										</div> 
										<ul class="list-inline wizard mb-0 add-margin-top-20">
											<li class="list-inline-item float-right">
												<button type="submit" class="btn btn-primary waves-effect waves-light">Save Changes</button>
											</li>
										</ul>
									</form>
								</div>
								<div class="tab-pane" id="category-order-3">
									<form action="#" method="POST" id="stream_categories_form-3">
										<input type="hidden" id="categories_input-3" name="categories" value="" />
										<div class="row">
											<div class="col-12">
												<p class="sub-header">
													To re-order a category, drag it up or down the list using the <i class="mdi mdi-view-sequential"></i> icon. Click Save Changes at the bottom once finished.
												</p>
												<div class="custom-dd dd" id="category_order-3">
													<ol class="dd-list">
														' ?0                  	;0
128 102  FETCH_DIM_R/81            $43=      16?0                 81:3                	;0
129 102  FE_RESET_R/77             $44=      $43                  ?175                	;0
130 102  FE_FETCH_R/78             ?0        $44                  16?1                	;175	>>175	<<174
131 103  NOP/0                     ?0        ?0                   ?0                  	;1
132 103  GOTO/253                  ?0        ?165                 ?82                 	;0
133 105  FETCH_DIM_R/81            $45=      16?1                 83:'category_name'  	;0
134 105  ECHO/40                   ?0        $45                  ?0                  	;0
135 106  ECHO/40                   ?0        84:' '               ?0                  	;0
136 107  FETCH_DIM_R/81            $46=      16?1                 85:'is_adult'       	;0
137 107  BOOL_NOT/13               #47=      $46                  ?0                  	;0
138 107  JMPZ/43                   ?0        #47                  ?141                	;0	>>141
139 108  NOP/0                     ?0        ?0                   ?0                  	;1
140 108  GOTO/253                  ?0        ?142                 ?86                 	;0
141 110  ECHO/40                   ?0        87:'<i class=\'text-pink mdi mdi-record\'></i>' ?0                  	;0	<<138
142 112  NOP/0                     ?0        ?0                   ?0                  	;1
143 112  GOTO/253                  ?0        ?150                 ?88                 	;0
144 114  FETCH_DIM_R/81            $48=      16?1                 89:'id'             	;0
145 114  ECHO/40                   ?0        $48                  ?0                  	;0
146 115  ECHO/40                   ?0        90:')"><i class="mdi mdi-close"></i></button>
																	</div>
																	' ?0                  	;0
147 117  ECHO/40                   ?0        91:'																</span>
															</div>
														</li>
														' ?0                  	;0
148 119  NOP/0                     ?0        ?0                   ?0                  	;1
149 119  GOTO/253                  ?0        ?174                 ?92                 	;0
150 121  ECHO/40                   ?0        93:'																<span style="float:right;">
																	' ?0                  	;0
151 122  INIT_FCALL_BY_NAME/59     ?0        ?0                   94:'e589a4BF54A2Dad1'	;2
152 122  SEND_VAL_EX/116           ?80       96:'adv'             ?1                  	;0
153 122  SEND_VAL_EX/116           ?96       97:'edit_cat'        ?2                  	;0
154 122  DO_FCALL_BY_NAME/131      $49=      ?0                   ?0                  	;0
155 122  BOOL_NOT/13               #50=      $49                  ?0                  	;0
156 122  JMPZ/43                   ?0        #50                  ?159                	;0	>>159
157 123  NOP/0                     ?0        ?0                   ?0                  	;1
158 123  GOTO/253                  ?0        ?147                 ?98                 	;0
159 125  ECHO/40                   ?0        99:'																	<div class="btn-group">
																		<button type="button" onClick="navigate(\'stream_category?id=' ?0                  	;0	<<156
160 126  FETCH_DIM_R/81            $51=      16?1                 100:'id'            	;0
161 126  ECHO/40                   ?0        $51                  ?0                  	;0
162 127  ECHO/40                   ?0        101:'\');" class="btn btn-light waves-effect waves-light sml-button"><i class="mdi mdi-pencil-outline"></i></button>
																		<button type="button" class="btn btn-light waves-effect waves-light sml-button" onClick="deleteCategory(' ?0                  	;0
163 128  NOP/0                     ?0        ?0                   ?0                  	;1
164 128  GOTO/253                  ?0        ?144                 ?102                	;0
165 130  ECHO/40                   ?0        103:'														<li class="dd-item dd3-item category-' ?0                  	;0
166 131  FETCH_DIM_R/81            $52=      16?1                 104:'id'            	;0
167 131  ECHO/40                   ?0        $52                  ?0                  	;0
168 132  ECHO/40                   ?0        105:'" data-id="'    ?0                  	;0
169 133  FETCH_DIM_R/81            $53=      16?1                 106:'id'            	;0
170 133  ECHO/40                   ?0        $53                  ?0                  	;0
171 134  ECHO/40                   ?0        107:'">
															<div class="dd-handle dd3-handle"></div>
															<div class="dd3-content">' ?0                  	;0
172 135  NOP/0                     ?0        ?0                   ?0                  	;1
173 135  GOTO/253                  ?0        ?133                 ?108                	;0
174 136  JMP/42                    ?0        ?130                 ?0                  	;0	>>130
175 136  FE_FREE/127               ?0        $44                  ?0                  	;0	<<129
176 139  GOTO/253                  ?0        ?28                  ?109                	;0
177 141  INIT_FCALL_BY_NAME/59     ?0        ?0                   110:'F769e3F0C739D1A6'	;0
178 141  DO_FCALL_BY_NAME/131      $54=      ?0                   ?0                  	;0
179 141  INIT_ARRAY/71             #55=      $54                  112:1               	;16
180 141  INIT_FCALL_BY_NAME/59     ?0        ?0                   113:'f769e3F0C739D1A6'	;1
181 141  SEND_VAL_EX/116           ?80       115:'movie'          ?1                  	;0
182 141  DO_FCALL_BY_NAME/131      $56=      ?0                   ?0                  	;0
183 141  ADD_ARRAY_ELEMENT/72      #55=      $56                  116:2               	;0
184 141  INIT_FCALL_BY_NAME/59     ?0        ?0                   117:'F769e3F0c739d1a6'	;1
185 141  SEND_VAL_EX/116           ?80       119:'series'         ?1                  	;0
186 141  DO_FCALL_BY_NAME/131      $57=      ?0                   ?0                  	;0
187 141  ADD_ARRAY_ELEMENT/72      #55=      $57                  120:3               	;0
188 141  INIT_FCALL_BY_NAME/59     ?0        ?0                   121:'F769e3F0C739d1A6'	;1
189 141  SEND_VAL_EX/116           ?80       123:'radio'          ?1                  	;0
190 141  DO_FCALL_BY_NAME/131      $58=      ?0                   ?0                  	;0
191 141  ADD_ARRAY_ELEMENT/72      #55=      $58                  124:4               	;0
192 141  ASSIGN/38                 ?51       16?2                 #55                 	;0
193 142  ASSIGN/38                 ?52       16?0                 125:array (
  1 => 
  array (
  ),
  2 => 
  array (
  ),
  3 => 
  array (
  ),
)	;0
194 143  FE_RESET_R/77             $61=      126:array (
  0 => 1,
  1 => 2,
  2 => 3,
  3 => 4,
) ?206                	;0
195 143  FE_FETCH_R/78             ?0        $61                  16?3                	;206	>>206	<<205
196 144  FETCH_DIM_R/81            $62=      16?2                 16?3                	;0
197 144  FE_RESET_R/77             $63=      $62                  ?204                	;0
198 144  FE_FETCH_R/78             #64=      $63                  16?4                	;204	>>204	<<203
199 144  ASSIGN/38                 ?57       16?5                 #64                 	;0
200 145  FETCH_DIM_W/84            $66=      16?0                 16?3                	;0
201 145  ASSIGN_DIM/147            ?59       $66                  ?4410621            	;0
202 145  OP_DATA/137               ?0        16?4                 ?0                  	;0
203 146  JMP/42                    ?0        ?198                 ?0                  	;0	>>198
204 146  FE_FREE/127               ?0        $63                  ?0                  	;0	<<197
205 149  JMP/42                    ?0        ?195                 ?0                  	;0	>>195
206 149  FE_FREE/127               ?0        $61                  ?0                  	;0	<<194
207 152  ASSIGN/38                 ?60       16?6                 127:'Stream Categories'	;0
208 153  GOTO/253                  ?0        ?10                  ?128                	;0
209 155  ECHO/40                   ?0        129:'>
    <div class="container-fluid">
		<div class="row">
			<div class="col-12">
				<div class="page-title-box">
					<div class="page-title-right">
                        ' ?0                  	;0
210 156  INCLUDE_OR_EVAL/73        ?61       130:'topbar.php'     ?0                  	;2
211 157  ECHO/40                   ?0        131:'                    </div>
					<h4 class="page-title">Categories</h4>
				</div>
			</div>
		</div>     
		<div class="row">
			<div class="col-xl-12">
                ' ?0                  	;0
212 158  ISSET_ISEMPTY_CV/197      #70=      16?7                 ?0                  	;33554432
213 158  JMPZ_EX/46                #70=      #70                  ?217                	;0	>>217
214 158  FETCH_CONSTANT/99         #71=      ?0                   132:'STATUS_SUCCESS'	;16
215 158  IS_EQUAL/17               #72=      16?7                 #71                 	;0
216 158  BOOL/52                   #70=      #72                  ?0                  	;0
217 158  JMPZ/43                   ?0        #70                  ?219                	;0	>>219	<<213
218 159  GOTO/253                  ?0        ?281                 ?135                	;0
219 161  ISSET_ISEMPTY_CV/197      #73=      16?7                 ?0                  	;33554432	<<217
220 161  JMPZ_EX/46                #73=      #73                  ?224                	;0	>>224
221 161  FETCH_CONSTANT/99         #74=      ?0                   136:'STATUS_SUCCESS_MULTI'	;16
222 161  IS_EQUAL/17               #75=      16?7                 #74                 	;0
223 161  BOOL/52                   #73=      #75                  ?0                  	;0
224 161  BOOL_NOT/13               #76=      #73                  ?0                  	;0	<<220
225 161  JMPZ/43                   ?0        #76                  ?227                	;0	>>227
226 162  GOTO/253                  ?0        ?280                 ?139                	;0
227 164  GOTO/253                  ?0        ?279                 ?140                	;0	<<225
228 167  ECHO/40                   ?0        141:'				<div class="card">
					<div class="card-body">
						<div id="basicwizard">
							<ul class="nav nav-pills bg-light nav-justified form-wizard-header mb-4">
								<li class="nav-item">
									<a href="#category-order-1" data-toggle="tab" class="nav-link rounded-0 pt-2 pb-2"> 
										<i class="mdi mdi-play mr-1"></i>
										<span class="d-none d-sm-inline">Streams</span>
									</a>
								</li>
								<li class="nav-item">
									<a href="#category-order-2" data-toggle="tab" class="nav-link rounded-0 pt-2 pb-2"> 
										<i class="mdi mdi-movie mr-1"></i>
										<span class="d-none d-sm-inline">Movies</span>
									</a>
								</li>
								<li class="nav-item">
									<a href="#category-order-3" data-toggle="tab" class="nav-link rounded-0 pt-2 pb-2"> 
										<i class="mdi mdi-youtube-tv mr-1"></i>
										<span class="d-none d-sm-inline">Series</span>
									</a>
								</li>
								<li class="nav-item">
									<a href="#category-order-4" data-toggle="tab" class="nav-link rounded-0 pt-2 pb-2"> 
										<i class="mdi mdi-radio mr-1"></i>
										<span class="d-none d-sm-inline">Radio</span>
									</a>
								</li>
							</ul>
							<div class="tab-content b-0 mb-0 pt-0">
								<div class="tab-pane" id="category-order-1">
									<form action="#" method="POST" id="stream_categories_form-1">
										<input type="hidden" id="categories_input-1" name="categories" value="" />
										<div class="row">
											<div class="col-12">
												<p class="sub-header">
													To re-order a category, drag it up or down the list using the <i class="mdi mdi-view-sequential"></i> icon. Click Save Changes at the bottom once finished.
												</p>
												<div class="custom-dd dd" id="category_order-1">
													<ol class="dd-list">
														' ?0                  	;0
229 168  FETCH_DIM_R/81            $77=      16?0                 142:1               	;0
230 168  FE_RESET_R/77             $78=      $77                  ?276                	;0
231 168  FE_FETCH_R/78             ?0        $78                  16?1                	;276	>>276	<<275
232 169  NOP/0                     ?0        ?0                   ?0                  	;1
233 169  GOTO/253                  ?0        ?266                 ?143                	;0
234 171  FETCH_DIM_R/81            $79=      16?1                 144:'id'            	;0
235 171  ECHO/40                   ?0        $79                  ?0                  	;0
236 172  ECHO/40                   ?0        145:')"><i class="mdi mdi-close"></i></button>
																	</div>
																	' ?0                  	;0
237 174  ECHO/40                   ?0        146:'																</span>
															</div>
														</li>
														' ?0                  	;0
238 176  NOP/0                     ?0        ?0                   ?0                  	;1
239 176  GOTO/253                  ?0        ?275                 ?147                	;0
240 178  FETCH_DIM_R/81            $80=      16?1                 148:'category_name' 	;0
241 178  ECHO/40                   ?0        $80                  ?0                  	;0
242 179  ECHO/40                   ?0        149:' '              ?0                  	;0
243 180  FETCH_DIM_R/81            $81=      16?1                 150:'is_adult'      	;0
244 180  BOOL_NOT/13               #82=      $81                  ?0                  	;0
245 180  JMPZ/43                   ?0        #82                  ?248                	;0	>>248
246 181  NOP/0                     ?0        ?0                   ?0                  	;1
247 181  GOTO/253                  ?0        ?249                 ?151                	;0
248 183  ECHO/40                   ?0        152:'<i class=\'text-pink mdi mdi-record\'></i>' ?0                  	;0	<<245
249 185  NOP/0                     ?0        ?0                   ?0                  	;1
250 185  GOTO/253                  ?0        ?251                 ?153                	;0
251 187  ECHO/40                   ?0        154:'																<span style="float:right;">
																	' ?0                  	;0
252 188  INIT_FCALL_BY_NAME/59     ?0        ?0                   155:'e589a4bF54a2DAD1'	;2
253 188  SEND_VAL_EX/116           ?80       157:'adv'            ?1                  	;0
254 188  SEND_VAL_EX/116           ?96       158:'edit_cat'       ?2                  	;0
255 188  DO_FCALL_BY_NAME/131      $83=      ?0                   ?0                  	;0
256 188  BOOL_NOT/13               #84=      $83                  ?0                  	;0
257 188  JMPZ/43                   ?0        #84                  ?260                	;0	>>260
258 189  NOP/0                     ?0        ?0                   ?0                  	;1
259 189  GOTO/253                  ?0        ?237                 ?159                	;0
260 191  ECHO/40                   ?0        160:'																	<div class="btn-group">
																		<button type="button" onClick="navigate(\'stream_category?id=' ?0                  	;0	<<257
261 192  FETCH_DIM_R/81            $85=      16?1                 161:'id'            	;0
262 192  ECHO/40                   ?0        $85                  ?0                  	;0
263 193  ECHO/40                   ?0        162:'\');" class="btn btn-light waves-effect waves-light sml-button"><i class="mdi mdi-pencil-outline"></i></button></a>
																		<button type="button" class="btn btn-light waves-effect waves-light sml-button" onClick="deleteCategory(' ?0                  	;0
264 194  NOP/0                     ?0        ?0                   ?0                  	;1
265 194  GOTO/253                  ?0        ?234                 ?163                	;0
266 196  ECHO/40                   ?0        164:'														<li class="dd-item dd3-item category-' ?0                  	;0
267 197  FETCH_DIM_R/81            $86=      16?1                 165:'id'            	;0
268 197  ECHO/40                   ?0        $86                  ?0                  	;0
269 198  ECHO/40                   ?0        166:'" data-id="'    ?0                  	;0
270 199  FETCH_DIM_R/81            $87=      16?1                 167:'id'            	;0
271 199  ECHO/40                   ?0        $87                  ?0                  	;0
272 200  ECHO/40                   ?0        168:'">
															<div class="dd-handle dd3-handle"></div>
															<div class="dd3-content">' ?0                  	;0
273 201  NOP/0                     ?0        ?0                   ?0                  	;1
274 201  GOTO/253                  ?0        ?240                 ?169                	;0
275 202  JMP/42                    ?0        ?231                 ?0                  	;0	>>231
276 202  FE_FREE/127               ?0        $78                  ?0                  	;0	<<230
277 205  ECHO/40                   ?0        170:'													</ol>
												</div>
											</div> 
										</div> 
										<ul class="list-inline wizard mb-0 add-margin-top-20">
											<li class="list-inline-item float-right">
												<button type="submit" class="btn btn-primary waves-effect waves-light">Save Changes</button>
											</li>
										</ul>
									</form>
								</div>
								<div class="tab-pane" id="category-order-2">
									<form action="#" method="POST" id="stream_categories_form-2">
										<input type="hidden" id="categories_input-2" name="categories" value="" />
										<div class="row">
											<div class="col-12">
												<p class="sub-header">
													To re-order a category, drag it up or down the list using the <i class="mdi mdi-view-sequential"></i> icon. Click Save Changes at the bottom once finished.
												</p>
												<div class="custom-dd dd" id="category_order-2">
													<ol class="dd-list">
														' ?0                  	;0
278 206  GOTO/253                  ?0        ?79                  ?171                	;0
279 208  ECHO/40                   ?0        172:'				<div class="alert alert-success alert-dismissible fade show" role="alert">
					<button type="button" class="close" data-dismiss="alert" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
					Categories have been re-ordered.
				</div>
				' ?0                  	;0
280 210  GOTO/253                  ?0        ?228                 ?173                	;0
281 212  ECHO/40                   ?0        174:'				<div class="alert alert-success alert-dismissible fade show" role="alert">
					<button type="button" class="close" data-dismiss="alert" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
					Your new Category has been added. You can move it up the list to re-order it.
				</div>
                ' ?0                  	;0
282 213  GOTO/253                  ?0        ?228                 ?175                	;0
283 215  INCLUDE_OR_EVAL/73        ?80       176:'footer.php'     ?0                  	;2
284 216  NOP/0                     ?0        177:1                ?0                  	;4294967295
*/

?>
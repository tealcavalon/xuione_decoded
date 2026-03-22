<?php


/*
#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
0   3    JMP/42                    ?0        ?56                  ?0                  	;0	>>56
1   5    GOTO/253                  ?0        ?271                 ?1                  	;0
2   7    INIT_FCALL_BY_NAME/59     ?0        ?0                   2:'f260B7a31F021E39'	;1
3   7    FETCH_STATIC_PROP_FUNC_ARG/177 $13=      4:'rRequest'         5:'XUI'             	;1
4   7    FETCH_DIM_FUNC_ARG/93     $14=      $13                  7:'id'              	;1
5   7    SEND_VAR_EX/66            ?80       $14                  ?1                  	;0
6   7    DO_FCALL_BY_NAME/131      $15=      ?0                   ?0                  	;0
7   7    ASSIGN/38                 ?3        16?0                 $15                 	;0
8   8    INIT_STATIC_METHOD_CALL/113 ?0        8:'XUI'              10:'getProgramme'   	;2
9   8    FETCH_STATIC_PROP_FUNC_ARG/177 $17=      12:'rRequest'        13:'XUI'            	;1
10  8    FETCH_DIM_FUNC_ARG/93     $18=      $17                  15:'id'             	;1
11  8    SEND_VAR_EX/66            ?80       $18                  ?1                  	;0
12  8    FETCH_STATIC_PROP_FUNC_ARG/177 $19=      16:'rRequest'        17:'XUI'            	;2
13  8    FETCH_DIM_FUNC_ARG/93     $20=      $19                  19:'programme'      	;2
14  8    SEND_VAR_EX/66            ?96       $20                  ?2                  	;0
15  8    DO_FCALL/60               $21=      ?0                   ?0                  	;0
16  8    ASSIGN/38                 ?9        16?1                 $21                 	;0
17  9    BOOL_NOT/13               #23=      16?0                 ?0                  	;0
18  9    JMPNZ_EX/47               #23=      #23                  ?22                 	;0	>>22
19  9    FETCH_DIM_R/81            $24=      16?0                 20:'type'           	;0
20  9    IS_NOT_EQUAL/18           #25=      $24                  21:1                	;0
21  9    BOOL/52                   #23=      #25                  ?0                  	;0
22  9    JMPNZ_EX/47               #23=      #23                  ?25                 	;0	>>25	<<18
23  9    BOOL_NOT/13               #26=      16?1                 ?0                  	;0
24  9    BOOL/52                   #23=      #26                  ?0                  	;0
25  9    BOOL_NOT/13               #27=      #23                  ?0                  	;0	<<22
26  9    JMPZ/43                   ?0        #27                  ?28                 	;0	>>28
27  10   GOTO/253                  ?0        ?271                 ?22                 	;0
28  12   GOTO/253                  ?0        ?269                 ?23                 	;0	<<26
29  14   FE_RESET_R/77             $28=      16?2                 ?48                 	;0
30  14   FE_FETCH_R/78             ?0        $28                  16?3                	;48	>>48	<<47
31  15   ECHO/40                   ?0        24:'                                                                <option value="' ?0                  	;0
32  16   FETCH_STATIC_PROP_R/173   $29=      25:'rServers'        26:'XUI'            	;0
33  16   FETCH_DIM_R/81            $30=      $29                  16?3                	;0
34  16   FETCH_DIM_R/81            $31=      $30                  28:'id'             	;0
35  16   ECHO/40                   ?0        $31                  ?0                  	;0
36  17   ECHO/40                   ?0        29:'">'              ?0                  	;0
37  18   FETCH_STATIC_PROP_R/173   $32=      30:'rServers'        31:'XUI'            	;0
38  18   FETCH_DIM_R/81            $33=      $32                  16?3                	;0
39  18   FETCH_DIM_R/81            $34=      $33                  33:'server_name'    	;0
40  18   ECHO/40                   ?0        $34                  ?0                  	;0
41  19   ECHO/40                   ?0        34:' - '             ?0                  	;0
42  20   FETCH_STATIC_PROP_R/173   $35=      35:'rServers'        36:'XUI'            	;0
43  20   FETCH_DIM_R/81            $36=      $35                  16?3                	;0
44  20   FETCH_DIM_R/81            $37=      $36                  38:'server_ip'      	;0
45  20   ECHO/40                   ?0        $37                  ?0                  	;0
46  21   ECHO/40                   ?0        39:'</option>
                                                                ' ?0                  	;0
47  22   JMP/42                    ?0        ?30                  ?0                  	;0	>>30
48  22   FE_FREE/127               ?0        $28                  ?0                  	;0	<<29
49  25   GOTO/253                  ?0        ?53                  ?40                 	;0
50  27   ECHO/40                   ?0        41:'                                                                <option selected value="' ?0                  	;0
51  28   GOTO/253                  ?0        ?319                 ?42                 	;0
52  30   ECHO/40                   ?0        43:'</option>
                                                            ' ?0                  	;0
53  32   ECHO/40                   ?0        44:'														</select>
													</div>
												</div>
											</div>
										</div> 
										<ul class="list-inline wizard mb-0">
											<li class="list-inline-item float-right">
												<input type="submit" class="btn btn-primary" value="Schedule" />
											</li>
										</ul>
									</div>
								</div> 
							</div> 
						</form>
					</div> 
				</div> 
			</div> 
            ' ?0                  	;0
54  34   ECHO/40                   ?0        45:'		</div>
	</div>
</div>
' ?0                  	;0
55  35   GOTO/253                  ?0        ?434                 ?46                 	;0
56  37   INCLUDE_OR_EVAL/73        ?25       47:'session.php'     ?0                  	;2	<<0
57  38   INCLUDE_OR_EVAL/73        ?26       48:'functions.php'   ?0                  	;2
58  39   INIT_FCALL_BY_NAME/59     ?0        ?0                   49:'E6d500e19634d513'	;0
59  39   DO_FCALL_BY_NAME/131      $40=      ?0                   ?0                  	;0
60  39   JMPZ/43                   ?0        $40                  ?62                 	;0	>>62
61  40   GOTO/253                  ?0        ?64                  ?51                 	;0
62  42   INIT_FCALL_BY_NAME/59     ?0        ?0                   52:'E72f42a93714bA87'	;0	<<60
63  42   DO_FCALL_BY_NAME/131      ?28       ?0                   ?0                  	;0
64  44   GOTO/253                  ?0        ?90                  ?54                 	;0
65  46   ECHO/40                   ?0        55:'>
    <div class="container-fluid">
		<div class="row">
			<div class="col-12">
				<div class="page-title-box">
					<div class="page-title-right">
                        ' ?0                  	;0
66  47   INCLUDE_OR_EVAL/73        ?29       56:'topbar.php'      ?0                  	;2
67  48   ECHO/40                   ?0        57:'					</div>
					<h4 class="page-title">Record an Event</h4>
				</div>
			</div>
		</div>
		<div class="row">
            <div class="col-xl-12">
                <div class="card">
                    <div class="card-body">
                        ' ?0                  	;0
68  49   JMPZ/43                   ?0        16?0                 ?70                 	;0	>>70
69  50   GOTO/253                  ?0        ?242                 ?58                 	;0
70  52   ECHO/40                   ?0        59:'<form action="record" method="POST" data-parsley-validate="">' ?0                  	;0	<<68
71  53   GOTO/253                  ?0        ?242                 ?60                 	;0
72  55   ECHO/40                   ?0        61:'</td>
                                    <td class="text-center">' ?0                  	;0
73  56   INIT_FCALL_BY_NAME/59     ?0        ?0                   62:'date'           	;2
74  56   FETCH_STATIC_PROP_FUNC_ARG/177 $43=      64:'rSettings'       65:'XUI'            	;1
75  56   FETCH_DIM_FUNC_ARG/93     $44=      $43                  67:'date_format'    	;1
76  56   SEND_VAR_EX/66            ?80       $44                  ?1                  	;0
77  56   FETCH_DIM_FUNC_ARG/93     $45=      16?1                 68:'start'          	;2
78  56   SEND_VAR_EX/66            ?96       $45                  ?2                  	;0
79  56   DO_FCALL_BY_NAME/131      $46=      ?0                   ?0                  	;0
80  56   ECHO/40                   ?0        $46                  ?0                  	;0
81  57   ECHO/40                   ?0        69:'<br/>'           ?0                  	;0
82  58   INIT_FCALL_BY_NAME/59     ?0        ?0                   70:'date'           	;2
83  58   SEND_VAL_EX/116           ?80       72:'H:i'             ?1                  	;0
84  58   FETCH_DIM_FUNC_ARG/93     $47=      16?1                 73:'start'          	;2
85  58   SEND_VAR_EX/66            ?96       $47                  ?2                  	;0
86  58   DO_FCALL_BY_NAME/131      $48=      ?0                   ?0                  	;0
87  58   ECHO/40                   ?0        $48                  ?0                  	;0
88  59   ECHO/40                   ?0        74:'</td>
                                    <td class="text-center">' ?0                  	;0
89  60   GOTO/253                  ?0        ?225                 ?75                 	;0
90  62   ASSIGN/38                 $49=      16?4                 76:array (
)        	;0
91  62   ASSIGN/38                 ?37       16?2                 $49                 	;0
92  63   ASSIGN/38                 $51=      16?1                 77:NULL             	;0
93  63   ASSIGN/38                 ?39       16?0                 $51                 	;0
94  64   FETCH_STATIC_PROP_IS/176  $53=      78:'rRequest'        79:'XUI'            	;0
95  64   ISSET_ISEMPTY_DIM_OBJ/115 #54=      $53                  81:'id'             	;33554432
96  64   JMPZ/43                   ?0        #54                  ?98                 	;0	>>98
97  65   GOTO/253                  ?0        ?2                   ?82                 	;0
98  67   FETCH_STATIC_PROP_IS/176  $55=      83:'rRequest'        84:'XUI'            	;0	<<96
99  67   ISSET_ISEMPTY_DIM_OBJ/115 #56=      $55                  86:'archive'        	;33554432
100 67   JMPZ/43                   ?0        #56                  ?102                	;0	>>102
101 68   GOTO/253                  ?0        ?160                 ?87                 	;0
102 70   FETCH_STATIC_PROP_IS/176  $57=      88:'rRequest'        89:'XUI'            	;0	<<100
103 70   ISSET_ISEMPTY_DIM_OBJ/115 #58=      $57                  91:'stream_id'      	;33554432
104 70   BOOL_NOT/13               #59=      #58                  ?0                  	;0
105 70   JMPZ/43                   ?0        #59                  ?107                	;0	>>107
106 71   GOTO/253                  ?0        ?159                 ?92                 	;0
107 73   GOTO/253                  ?0        ?176                 ?93                 	;0	<<105
108 75   ECHO/40                   ?0        94:'				<div class="card">
					<div class="card-body">
						<form' ?0                  	;0
109 76   FETCH_STATIC_PROP_IS/176  $60=      95:'rRequest'        96:'XUI'            	;0
110 76   ISSET_ISEMPTY_DIM_OBJ/115 #61=      $60                  98:'import'         	;33554432
111 76   BOOL_NOT/13               #62=      #61                  ?0                  	;0
112 76   JMPZ/43                   ?0        #62                  ?114                	;0	>>114
113 77   GOTO/253                  ?0        ?115                 ?99                 	;0
114 79   ECHO/40                   ?0        100:' enctype="multipart/form-data"' ?0                  	;0	<<112
115 81   ECHO/40                   ?0        101:' action="#" method="POST" data-parsley-validate="">
							<input type="hidden" name="stream_id" value="' ?0                  	;0
116 82   GOTO/253                  ?0        ?416                 ?102                	;0
117 84   ECHO/40                   ?0        103:'" />
                            <input type="hidden" name="archive" value="' ?0                  	;0
118 85   ISSET_ISEMPTY_DIM_OBJ/115 #63=      16?1                 104:'archive'       	;33554432
119 85   JMPZ/43                   ?0        #63                  ?122                	;0	>>122
120 85   QM_ASSIGN/22              #64=      105:1                ?0                  	;0
121 85   JMP/42                    ?0        ?123                 ?0                  	;0	>>123
122 85   QM_ASSIGN/22              #64=      106:0                ?0                  	;0	<<119
123 85   ECHO/40                   ?0        #64                  ?0                  	;0	<<121
124 86   ECHO/40                   ?0        107:'" />
							<div id="basicwizard">
								<ul class="nav nav-pills bg-light nav-justified form-wizard-header mb-4">
									<li class="nav-item">
										<a href="#stream-details" data-toggle="tab" class="nav-link rounded-0 pt-2 pb-2"> 
											<i class="mdi mdi-account-card-details-outline mr-1"></i>
											<span class="d-none d-sm-inline">' ?0                  	;0
125 87   FETCH_DIM_R/81            $65=      16?5                 108:'details'       	;0
126 87   ECHO/40                   ?0        $65                  ?0                  	;0
127 88   ECHO/40                   ?0        109:'</span>
										</a>
									</li>
                                </ul>
								<div class="tab-content b-0 mb-0 pt-0">
									<div class="tab-pane" id="stream-details">
										<div class="row">
											<div class="col-12">
												<div class="form-group row mb-4">
													<label class="col-md-4 col-form-label" for="title">Event Title</label>
													<div class="col-md-8">
                                                        <input type="text" class="form-control" id="title" name="title" value="' ?0                  	;0
128 89   GOTO/253                  ?0        ?337                 ?110                	;0
129 91   FETCH_DIM_R/81            $66=      16?6                 111:'start'         	;0
130 91   INIT_ARRAY/71             #67=      $66                  112:'start'         	;22
131 91   FETCH_DIM_R/81            $68=      16?6                 113:'end'           	;0
132 91   ADD_ARRAY_ELEMENT/72      #67=      $68                  114:'end'           	;0
133 91   FETCH_DIM_R/81            $69=      16?6                 115:'title'         	;0
134 91   ADD_ARRAY_ELEMENT/72      #67=      $69                  116:'title'         	;0
135 91   FETCH_DIM_R/81            $70=      16?6                 117:'description'   	;0
136 91   ADD_ARRAY_ELEMENT/72      #67=      $70                  118:'description'   	;0
137 91   ADD_ARRAY_ELEMENT/72      #67=      119:true             120:'archive'       	;0
138 91   ASSIGN/38                 ?58       16?1                 #67                 	;0
139 92   BOOL_NOT/13               #72=      16?0                 ?0                  	;0
140 92   JMPNZ_EX/47               #72=      #72                  ?144                	;0	>>144
141 92   FETCH_DIM_R/81            $73=      16?0                 121:'type'          	;0
142 92   IS_NOT_EQUAL/18           #74=      $73                  122:1               	;0
143 92   BOOL/52                   #72=      #74                  ?0                  	;0
144 92   JMPNZ_EX/47               #72=      #72                  ?147                	;0	>>147	<<140
145 92   BOOL_NOT/13               #75=      16?1                 ?0                  	;0
146 92   BOOL/52                   #72=      #75                  ?0                  	;0
147 92   BOOL_NOT/13               #76=      #72                  ?0                  	;0	<<144
148 92   JMPZ/43                   ?0        #76                  ?150                	;0	>>150
149 93   GOTO/253                  ?0        ?152                 ?123                	;0
150 95   INIT_FCALL_BY_NAME/59     ?0        ?0                   124:'E72f42a93714ba87'	;0	<<148
151 95   DO_FCALL_BY_NAME/131      ?64       ?0                   ?0                  	;0
152 98   GOTO/253                  ?0        ?1                   ?126                	;0
153 100  ECHO/40                   ?0        127:'                                    <td><select id="stream_id" name="stream_id" class="form-control" data-toggle="select2"></select></td>
                                    <td style="max-width:120px;" class="text-center"><input type="text" class="form-control text-center date" id="start_date" name="start_date" value="" data-toggle="date-picker" data-single-date-picker="true"></td>
                                    <td style="max-width:40px;" class="text-center"><input type="text" class="form-control text-center" id="duration" name="duration" value="0"></td>
                                    ' ?0                  	;0
154 101  GOTO/253                  ?0        ?241                 ?128                	;0
155 103  ECHO/40                   ?0        129:'                                    <td>' ?0                  	;0
156 104  FETCH_DIM_R/81            $78=      16?0                 130:'stream_display_name'	;0
157 104  ECHO/40                   ?0        $78                  ?0                  	;0
158 105  GOTO/253                  ?0        ?72                  ?131                	;0
159 108  GOTO/253                  ?0        ?152                 ?132                	;0
160 110  INIT_FCALL_BY_NAME/59     ?0        ?0                   133:'json_decode'   	;2
161 110  INIT_FCALL_BY_NAME/59     ?0        ?0                   135:'base64_decode' 	;1
162 110  FETCH_STATIC_PROP_FUNC_ARG/177 $79=      137:'rRequest'       138:'XUI'           	;1
163 110  FETCH_DIM_FUNC_ARG/93     $80=      $79                  140:'archive'       	;1
164 110  SEND_VAR_EX/66            ?80       $80                  ?1                  	;0
165 110  DO_FCALL_BY_NAME/131      $81=      ?0                   ?0                  	;0
166 110  SEND_VAR_NO_REF_EX/50     ?80       $81                  ?1                  	;0
167 110  SEND_VAL_EX/116           ?96       141:true             ?2                  	;0
168 110  DO_FCALL_BY_NAME/131      $82=      ?0                   ?0                  	;0
169 110  ASSIGN/38                 ?70       16?6                 $82                 	;0
170 111  INIT_FCALL_BY_NAME/59     ?0        ?0                   142:'F260B7A31F021E39'	;1
171 111  FETCH_DIM_FUNC_ARG/93     $84=      16?6                 144:'stream_id'     	;1
172 111  SEND_VAR_EX/66            ?80       $84                  ?1                  	;0
173 111  DO_FCALL_BY_NAME/131      $85=      ?0                   ?0                  	;0
174 111  ASSIGN/38                 ?73       16?0                 $85                 	;0
175 112  GOTO/253                  ?0        ?129                 ?145                	;0
176 114  INIT_FCALL_BY_NAME/59     ?0        ?0                   146:'f260b7a31f021e39'	;1
177 114  FETCH_STATIC_PROP_FUNC_ARG/177 $87=      148:'rRequest'       149:'XUI'           	;1
178 114  FETCH_DIM_FUNC_ARG/93     $88=      $87                  151:'stream_id'     	;1
179 114  SEND_VAR_EX/66            ?80       $88                  ?1                  	;0
180 114  DO_FCALL_BY_NAME/131      $89=      ?0                   ?0                  	;0
181 114  ASSIGN/38                 ?77       16?0                 $89                 	;0
182 115  INIT_FCALL_BY_NAME/59     ?0        ?0                   152:'strtotime'     	;1
183 115  FETCH_STATIC_PROP_FUNC_ARG/177 $91=      154:'rRequest'       155:'XUI'           	;1
184 115  FETCH_DIM_FUNC_ARG/93     $92=      $91                  157:'start_date'    	;1
185 115  SEND_VAR_EX/66            ?80       $92                  ?1                  	;0
186 115  DO_FCALL_BY_NAME/131      $93=      ?0                   ?0                  	;0
187 115  INIT_ARRAY/71             #94=      $93                  158:'start'         	;18
188 115  INIT_FCALL_BY_NAME/59     ?0        ?0                   159:'strtotime'     	;1
189 115  FETCH_STATIC_PROP_FUNC_ARG/177 $95=      161:'rRequest'       162:'XUI'           	;1
190 115  FETCH_DIM_FUNC_ARG/93     $96=      $95                  164:'start_date'    	;1
191 115  SEND_VAR_EX/66            ?80       $96                  ?1                  	;0
192 115  DO_FCALL_BY_NAME/131      $97=      ?0                   ?0                  	;0
193 115  INIT_FCALL_BY_NAME/59     ?0        ?0                   165:'intval'        	;1
194 115  FETCH_STATIC_PROP_FUNC_ARG/177 $98=      167:'rRequest'       168:'XUI'           	;1
195 115  FETCH_DIM_FUNC_ARG/93     $99=      $98                  170:'duration'      	;1
196 115  SEND_VAR_EX/66            ?80       $99                  ?1                  	;0
197 115  DO_FCALL_BY_NAME/131      $100=     ?0                   ?0                  	;0
198 115  MUL/3                     #101=     $100                 171:60              	;0
199 115  ADD/1                     #102=     $97                  #101                	;0
200 115  ADD_ARRAY_ELEMENT/72      #94=      #102                 172:'end'           	;0
201 115  ADD_ARRAY_ELEMENT/72      #94=      173:''               174:'title'         	;0
202 115  ADD_ARRAY_ELEMENT/72      #94=      175:''               176:'description'   	;0
203 115  ASSIGN/38                 ?90       16?1                 #94                 	;0
204 116  BOOL_NOT/13               #104=     16?0                 ?0                  	;0
205 116  JMPNZ_EX/47               #104=     #104                 ?209                	;0	>>209
206 116  FETCH_DIM_R/81            $105=     16?0                 177:'type'          	;0
207 116  IS_NOT_EQUAL/18           #106=     $105                 178:1               	;0
208 116  BOOL/52                   #104=     #106                 ?0                  	;0
209 116  JMPNZ_EX/47               #104=     #104                 ?212                	;0	>>212	<<205
210 116  BOOL_NOT/13               #107=     16?1                 ?0                  	;0
211 116  BOOL/52                   #104=     #107                 ?0                  	;0
212 116  JMPNZ_EX/47               #104=     #104                 ?218                	;0	>>218	<<209
213 116  FETCH_DIM_R/81            $108=     16?1                 179:'end'           	;0
214 116  INIT_FCALL_BY_NAME/59     ?0        ?0                   180:'time'          	;0
215 116  DO_FCALL_BY_NAME/131      $109=     ?0                   ?0                  	;0
216 116  IS_SMALLER/19             #110=     $108                 $109                	;0
217 116  BOOL/52                   #104=     #110                 ?0                  	;0
218 116  BOOL_NOT/13               #111=     #104                 ?0                  	;0	<<212
219 116  JMPZ/43                   ?0        #111                 ?221                	;0	>>221
220 117  GOTO/253                  ?0        ?224                 ?182                	;0
221 119  INIT_FCALL_BY_NAME/59     ?0        ?0                   183:'header'        	;1	<<219
222 119  SEND_VAL_EX/116           ?80       185:'Location: record' ?1                  	;0
223 119  DO_FCALL_BY_NAME/131      ?99       ?0                   ?0                  	;0
224 121  GOTO/253                  ?0        ?159                 ?186                	;0
225 123  INIT_FCALL_BY_NAME/59     ?0        ?0                   187:'date'          	;2
226 123  FETCH_STATIC_PROP_FUNC_ARG/177 $113=     189:'rSettings'      190:'XUI'           	;1
227 123  FETCH_DIM_FUNC_ARG/93     $114=     $113                 192:'date_format'   	;1
228 123  SEND_VAR_EX/66            ?80       $114                 ?1                  	;0
229 123  FETCH_DIM_FUNC_ARG/93     $115=     16?1                 193:'end'           	;2
230 123  SEND_VAR_EX/66            ?96       $115                 ?2                  	;0
231 123  DO_FCALL_BY_NAME/131      $116=     ?0                   ?0                  	;0
232 123  ECHO/40                   ?0        $116                 ?0                  	;0
233 124  ECHO/40                   ?0        194:'<br/>'          ?0                  	;0
234 125  INIT_FCALL_BY_NAME/59     ?0        ?0                   195:'date'          	;2
235 125  SEND_VAL_EX/116           ?80       197:'H:i'            ?1                  	;0
236 125  FETCH_DIM_FUNC_ARG/93     $117=     16?1                 198:'end'           	;2
237 125  SEND_VAR_EX/66            ?96       $117                 ?2                  	;0
238 125  DO_FCALL_BY_NAME/131      $118=     ?0                   ?0                  	;0
239 125  ECHO/40                   ?0        $118                 ?0                  	;0
240 126  ECHO/40                   ?0        199:'</td>
                                    ' ?0                  	;0
241 128  GOTO/253                  ?0        ?276                 ?200                	;0
242 131  ECHO/40                   ?0        201:'                        <table class="table table-borderless mb-0">
                            <thead class="thead-light">
                                <tr>
                                    <th>Channel</th>
                                    <th class="text-center">Start</th>
                                    <th class="text-center">' ?0                  	;0
243 132  JMPZ/43                   ?0        16?0                 ?246                	;0	>>246
244 132  QM_ASSIGN/22              #119=     202:'Finish'         ?0                  	;0
245 132  JMP/42                    ?0        ?247                 ?0                  	;0	>>247
246 132  QM_ASSIGN/22              #119=     203:'Minutes'        ?0                  	;0	<<243
247 132  ECHO/40                   ?0        #119                 ?0                  	;0	<<245
248 133  ECHO/40                   ?0        204:'</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    ' ?0                  	;0
249 134  JMPZ/43                   ?0        16?0                 ?251                	;0	>>251
250 135  GOTO/253                  ?0        ?155                 ?205                	;0
251 137  GOTO/253                  ?0        ?153                 ?206                	;0	<<249
252 139  BOOL_NOT/13               #120=     16?0                 ?0                  	;0
253 139  JMPZ/43                   ?0        #120                 ?255                	;0	>>255
254 140  GOTO/253                  ?0        ?54                  ?207                	;0
255 142  ECHO/40                   ?0        208:'			<div class="col-xl-12">
                ' ?0                  	;0	<<253
256 143  FETCH_DIM_R/81            $121=     16?1                 209:'archive'       	;0
257 143  BOOL_NOT/13               #122=     $121                 ?0                  	;0
258 143  JMPZ_EX/46                #122=     #122                 ?264                	;0	>>264
259 143  FETCH_DIM_R/81            $123=     16?1                 210:'start'         	;0
260 143  INIT_FCALL_BY_NAME/59     ?0        ?0                   211:'time'          	;0
261 143  DO_FCALL_BY_NAME/131      $124=     ?0                   ?0                  	;0
262 143  IS_SMALLER_OR_EQUAL/20    #125=     $123                 $124                	;0
263 143  BOOL/52                   #122=     #125                 ?0                  	;0
264 143  BOOL_NOT/13               #126=     #122                 ?0                  	;0	<<258
265 143  JMPZ/43                   ?0        #126                 ?267                	;0	>>267
266 144  GOTO/253                  ?0        ?268                 ?213                	;0
267 146  ECHO/40                   ?0        214:'                <div class="alert alert-warning text-center" role="alert">
                    The programme you are intending to record has already started!
                </div>
                ' ?0                  	;0	<<265
268 148  GOTO/253                  ?0        ?108                 ?215                	;0
269 150  INIT_FCALL_BY_NAME/59     ?0        ?0                   216:'E72F42A93714BA87'	;0
270 150  DO_FCALL_BY_NAME/131      ?114      ?0                   ?0                  	;0
271 153  BOOL_NOT/13               #128=     16?0                 ?0                  	;0
272 153  JMPZ/43                   ?0        #128                 ?274                	;0	>>274
273 154  GOTO/253                  ?0        ?414                 ?218                	;0
274 156  ASSIGN/38                 ?116      16?7                 219:NULL            	;0	<<272
275 157  GOTO/253                  ?0        ?383                 ?220                	;0
276 159  ECHO/40                   ?0        221:'                                </tr>
                            </tbody>
                        </table>
                        ' ?0                  	;0
277 160  JMPZ/43                   ?0        16?0                 ?279                	;0	>>279
278 161  GOTO/253                  ?0        ?280                 ?222                	;0
279 163  ECHO/40                   ?0        223:'                        <ul class="list-inline wizard mb-0">
                            <li class="list-inline-item float-right">
                                <input type="submit" class="btn btn-primary" value="Continue" />
                            </li>
                        </ul>
                        </form>
                        ' ?0                  	;0	<<277
280 165  ECHO/40                   ?0        224:'                    </div>
                </div>
            </div>
            ' ?0                  	;0
281 166  GOTO/253                  ?0        ?252                 ?225                	;0
282 168  INCLUDE_OR_EVAL/73        ?117      226:'header.php'     ?0                  	;2
283 169  ECHO/40                   ?0        227:'<div class="wrapper boxed-layout"' ?0                  	;0
284 170  FETCH_IS/89               $131=     228:'_SERVER'        ?0                  	;0
285 170  ISSET_ISEMPTY_DIM_OBJ/115 #132=     $131                 229:'HTTP_X_REQUESTED_WITH'	;16777216
286 170  BOOL_NOT/13               #133=     #132                 ?0                  	;0
287 170  JMPZ_EX/46                #133=     #133                 ?295                	;0	>>295
288 170  INIT_FCALL_BY_NAME/59     ?0        ?0                   230:'strtolower'    	;1
289 170  FETCH_FUNC_ARG/92         $134=     232:'_SERVER'        ?0                  	;1
290 170  FETCH_DIM_FUNC_ARG/93     $135=     $134                 233:'HTTP_X_REQUESTED_WITH'	;1
291 170  SEND_VAR_EX/66            ?80       $135                 ?1                  	;0
292 170  DO_FCALL_BY_NAME/131      $136=     ?0                   ?0                  	;0
293 170  IS_EQUAL/17               #137=     $136                 234:'xmlhttprequest'	;0
294 170  BOOL/52                   #133=     #137                 ?0                  	;0
295 170  BOOL_NOT/13               #138=     #133                 ?0                  	;0	<<287
296 170  JMPZ/43                   ?0        #138                 ?298                	;0	>>298
297 171  GOTO/253                  ?0        ?299                 ?235                	;0
298 173  ECHO/40                   ?0        236:' style="display: none;"' ?0                  	;0	<<296
299 175  GOTO/253                  ?0        ?65                  ?237                	;0
300 177  ECHO/40                   ?0        238:'...">
															' ?0                  	;0
301 178  INIT_FCALL_BY_NAME/59     ?0        ?0                   239:'F964B9222B35AdDD'	;0
302 178  DO_FCALL_BY_NAME/131      $139=     ?0                   ?0                  	;0
303 178  FE_RESET_R/77             $140=     $139                 ?313                	;0
304 178  FE_FETCH_R/78             ?0        $140                 16?8                	;313	>>313	<<312
305 179  ECHO/40                   ?0        241:'															<option value="' ?0                  	;0
306 180  FETCH_DIM_R/81            $141=     16?8                 242:'id'            	;0
307 180  ECHO/40                   ?0        $141                 ?0                  	;0
308 181  ECHO/40                   ?0        243:'">'             ?0                  	;0
309 182  FETCH_DIM_R/81            $142=     16?8                 244:'bouquet_name'  	;0
310 182  ECHO/40                   ?0        $142                 ?0                  	;0
311 183  ECHO/40                   ?0        245:'</option>
															' ?0                  	;0
312 184  JMP/42                    ?0        ?304                 ?0                  	;0	>>304
313 184  FE_FREE/127               ?0        $140                 ?0                  	;0	<<303
314 187  ECHO/40                   ?0        246:'														</select>
													</div>
												</div>
                                                <div class="form-group row mb-4">
													<label class="col-md-4 col-form-label" for="source_id">Recording Server</label>
													<div class="col-md-8">
														<select name="source_id" id="source_id" class="form-control" data-toggle="select2">
                                                            ' ?0                  	;0
315 188  FETCH_DIM_R/81            $143=     16?1                 247:'archive'       	;0
316 188  JMPZ/43                   ?0        $143                 ?318                	;0	>>318
317 189  GOTO/253                  ?0        ?50                  ?248                	;0
318 191  GOTO/253                  ?0        ?29                  ?249                	;0	<<316
319 193  FETCH_DIM_R/81            $145=     16?0                 253:'tv_archive_server_id'	;0
320 193  FETCH_STATIC_PROP_R/173   $144=     250:'rServers'       251:'XUI'           	;0
321 193  FETCH_DIM_R/81            $146=     $144                 $145                	;0
322 193  FETCH_DIM_R/81            $147=     $146                 254:'id'            	;0
323 193  ECHO/40                   ?0        $147                 ?0                  	;0
324 194  ECHO/40                   ?0        255:'">'             ?0                  	;0
325 195  FETCH_DIM_R/81            $149=     16?0                 259:'tv_archive_server_id'	;0
326 195  FETCH_STATIC_PROP_R/173   $148=     256:'rServers'       257:'XUI'           	;0
327 195  FETCH_DIM_R/81            $150=     $148                 $149                	;0
328 195  FETCH_DIM_R/81            $151=     $150                 260:'server_name'   	;0
329 195  ECHO/40                   ?0        $151                 ?0                  	;0
330 196  ECHO/40                   ?0        261:' - '            ?0                  	;0
331 197  FETCH_DIM_R/81            $153=     16?0                 265:'tv_archive_server_id'	;0
332 197  FETCH_STATIC_PROP_R/173   $152=     262:'rServers'       263:'XUI'           	;0
333 197  FETCH_DIM_R/81            $154=     $152                 $153                	;0
334 197  FETCH_DIM_R/81            $155=     $154                 266:'server_ip'     	;0
335 197  ECHO/40                   ?0        $155                 ?0                  	;0
336 198  GOTO/253                  ?0        ?52                  ?267                	;0
337 200  INIT_FCALL_BY_NAME/59     ?0        ?0                   268:'str_replace'   	;3
338 200  SEND_VAL_EX/116           ?80       270:'"'              ?1                  	;0
339 200  SEND_VAL_EX/116           ?96       271:'&quot;'         ?2                  	;0
340 200  FETCH_DIM_FUNC_ARG/93     $156=     16?1                 272:'title'         	;3
341 200  SEND_VAR_EX/66            ?112      $156                 ?3                  	;0
342 200  DO_FCALL_BY_NAME/131      $157=     ?0                   ?0                  	;0
343 200  ECHO/40                   ?0        $157                 ?0                  	;0
344 201  ECHO/40                   ?0        273:'" required data-parsley-trigger="change">
													</div>
												</div>
                                                <div class="form-group row mb-4">
													<label class="col-md-4 col-form-label" for="description">Event Description</label>
													<div class="col-md-8">
														<textarea rows="6" class="form-control" id="description" name="description">' ?0                  	;0
345 202  INIT_FCALL_BY_NAME/59     ?0        ?0                   274:'htmlspecialchars'	;1
346 202  FETCH_DIM_FUNC_ARG/93     $158=     16?1                 276:'description'   	;1
347 202  SEND_VAR_EX/66            ?80       $158                 ?1                  	;0
348 202  DO_FCALL_BY_NAME/131      $159=     ?0                   ?0                  	;0
349 202  ECHO/40                   ?0        $159                 ?0                  	;0
350 203  ECHO/40                   ?0        277:'</textarea>
													</div>
												</div>
												<div class="form-group row mb-4">
													<label class="col-md-4 col-form-label" for="stream_icon">' ?0                  	;0
351 204  FETCH_DIM_R/81            $160=     16?5                 278:'poster_url'    	;0
352 204  ECHO/40                   ?0        $160                 ?0                  	;0
353 205  GOTO/253                  ?0        ?361                 ?279                	;0
354 207  ECHO/40                   ?0        280:'Fallback '      ?0                  	;0
355 209  FETCH_DIM_R/81            $161=     16?5                 281:'bouquets'      	;0
356 209  ECHO/40                   ?0        $161                 ?0                  	;0
357 210  ECHO/40                   ?0        282:'</label>
													<div class="col-md-8">
														<select name="bouquets[]" id="bouquets" class="form-control select2-multiple" data-toggle="select2" multiple="multiple" data-placeholder="' ?0                  	;0
358 211  FETCH_DIM_R/81            $162=     16?5                 283:'choose'        	;0
359 211  ECHO/40                   ?0        $162                 ?0                  	;0
360 212  GOTO/253                  ?0        ?300                 ?284                	;0
361 214  ECHO/40                   ?0        285:'</label>
													<div class="col-md-8 input-group">
														<input type="text" class="form-control" id="stream_icon" name="stream_icon" value="">
														<div class="input-group-append">
															<a href="javascript:void(0)" onClick="openImage(this)" class="btn btn-primary waves-effect waves-light"><i class="mdi mdi-eye"></i></a>
														</div>
													</div>
												</div>
                                                <div class="form-group row mb-4">
													<label class="col-md-4 col-form-label" for="category_id">Categories</label>
													<div class="col-md-8">
                                                        <select name="category_id[]" id="category_id" class="form-control select2-multiple" data-toggle="select2" multiple="multiple" data-placeholder="Choose...">
															' ?0                  	;0
362 215  INIT_FCALL_BY_NAME/59     ?0        ?0                   286:'f769E3f0c739D1A6'	;1
363 215  SEND_VAL_EX/116           ?80       288:'movie'          ?1                  	;0
364 215  DO_FCALL_BY_NAME/131      $163=     ?0                   ?0                  	;0
365 215  FE_RESET_R/77             $164=     $163                 ?375                	;0
366 215  FE_FETCH_R/78             ?0        $164                 16?9                	;375	>>375	<<374
367 216  ECHO/40                   ?0        289:'                                                            <option value="' ?0                  	;0
368 217  FETCH_DIM_R/81            $165=     16?9                 290:'id'            	;0
369 217  ECHO/40                   ?0        $165                 ?0                  	;0
370 218  ECHO/40                   ?0        291:'">'             ?0                  	;0
371 219  FETCH_DIM_R/81            $166=     16?9                 292:'category_name' 	;0
372 219  ECHO/40                   ?0        $166                 ?0                  	;0
373 220  ECHO/40                   ?0        293:'</option>
															' ?0                  	;0
374 221  JMP/42                    ?0        ?366                 ?0                  	;0	>>366
375 221  FE_FREE/127               ?0        $164                 ?0                  	;0	<<365
376 224  ECHO/40                   ?0        294:'														</select>
													</div>
												</div>
												<div class="form-group row mb-4">
													<label class="col-md-4 col-form-label" for="bouquets">' ?0                  	;0
377 225  FETCH_STATIC_PROP_R/173   $167=     295:'rRequest'       296:'XUI'           	;0
378 225  FETCH_DIM_R/81            $168=     $167                 298:'import'        	;0
379 225  BOOL_NOT/13               #169=     $168                 ?0                  	;0
380 225  JMPZ/43                   ?0        #169                 ?382                	;0	>>382
381 226  GOTO/253                  ?0        ?355                 ?299                	;0
382 228  GOTO/253                  ?0        ?354                 ?300                	;0	<<380
383 230  INIT_METHOD_CALL/112      ?0        16?10                301:'query'         	;2
384 230  SEND_VAL_EX/116           ?80       303:'SELECT `server_id`, `bitrate` FROM `streams_servers` WHERE `stream_id` = ?;' ?1                  	;0
385 230  FETCH_DIM_FUNC_ARG/93     $170=     16?0                 304:'id'            	;2
386 230  SEND_VAR_EX/66            ?96       $170                 ?2                  	;0
387 230  DO_FCALL/60               ?158      ?0                   ?0                  	;0
388 231  INIT_METHOD_CALL/112      ?0        16?10                305:'get_rows'      	;0
389 231  DO_FCALL/60               $172=     ?0                   ?0                  	;0
390 231  FE_RESET_R/77             $173=     $172                 ?413                	;0
391 231  FE_FETCH_R/78             ?0        $173                 16?11               	;413	>>413	<<412
392 232  FETCH_DIM_R/81            $175=     16?11                307:'server_id'     	;0
393 232  ASSIGN_DIM/147            ?161      16?2                 ?4414262            	;0
394 232  OP_DATA/137               ?0        $175                 ?0                  	;0
395 233  BOOL_NOT/13               #176=     16?7                 ?0                  	;0
396 233  JMPZ_EX/46                #176=     #176                 ?399                	;0	>>399
397 233  FETCH_DIM_R/81            $177=     16?11                308:'bitrate'       	;0
398 233  BOOL/52                   #176=     $177                 ?0                  	;0
399 233  JMPNZ_EX/47               #176=     #176                 ?406                	;0	>>406	<<396
400 233  FETCH_DIM_R/81            $178=     16?11                309:'bitrate'       	;0
401 233  JMPZ_EX/46                #179=     $178                 ?405                	;0	>>405
402 233  FETCH_DIM_R/81            $180=     16?11                310:'bitrate'       	;0
403 233  IS_SMALLER/19             #181=     16?7                 $180                	;0
404 233  BOOL/52                   #179=     #181                 ?0                  	;0
405 233  BOOL/52                   #176=     #179                 ?0                  	;0	<<401
406 233  BOOL_NOT/13               #182=     #176                 ?0                  	;0	<<399
407 233  JMPZ/43                   ?0        #182                 ?410                	;0	>>410
408 234  NOP/0                     ?0        ?0                   ?0                  	;1
409 234  GOTO/253                  ?0        ?412                 ?311                	;0
410 236  FETCH_DIM_R/81            $183=     16?11                312:'bitrate'       	;0	<<407
411 236  ASSIGN/38                 ?171      16?7                 $183                	;0
412 238  JMP/42                    ?0        ?391                 ?0                  	;0	>>391
413 238  FE_FREE/127               ?0        $173                 ?0                  	;0	<<390
414 242  ASSIGN/38                 ?172      16?12                313:'Record'        	;0
415 243  GOTO/253                  ?0        ?282                 ?314                	;0
416 245  INIT_FCALL_BY_NAME/59     ?0        ?0                   315:'intval'        	;1
417 245  FETCH_DIM_FUNC_ARG/93     $186=     16?0                 317:'id'            	;1
418 245  SEND_VAR_EX/66            ?80       $186                 ?1                  	;0
419 245  DO_FCALL_BY_NAME/131      $187=     ?0                   ?0                  	;0
420 245  ECHO/40                   ?0        $187                 ?0                  	;0
421 246  ECHO/40                   ?0        318:'" />
                            <input type="hidden" name="start" value="' ?0                  	;0
422 247  INIT_FCALL_BY_NAME/59     ?0        ?0                   319:'intval'        	;1
423 247  FETCH_DIM_FUNC_ARG/93     $188=     16?1                 321:'start'         	;1
424 247  SEND_VAR_EX/66            ?80       $188                 ?1                  	;0
425 247  DO_FCALL_BY_NAME/131      $189=     ?0                   ?0                  	;0
426 247  ECHO/40                   ?0        $189                 ?0                  	;0
427 248  ECHO/40                   ?0        322:'" />
                            <input type="hidden" name="end" value="' ?0                  	;0
428 249  INIT_FCALL_BY_NAME/59     ?0        ?0                   323:'intval'        	;1
429 249  FETCH_DIM_FUNC_ARG/93     $190=     16?1                 325:'end'           	;1
430 249  SEND_VAR_EX/66            ?80       $190                 ?1                  	;0
431 249  DO_FCALL_BY_NAME/131      $191=     ?0                   ?0                  	;0
432 249  ECHO/40                   ?0        $191                 ?0                  	;0
433 250  GOTO/253                  ?0        ?117                 ?326                	;0
434 252  INCLUDE_OR_EVAL/73        ?179      327:'footer.php'     ?0                  	;2
435 253  NOP/0                     ?0        328:1                ?0                  	;4294967295
*/

?>
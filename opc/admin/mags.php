<?php


/*
#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
0   3    JMP/42                    ?0        ?65                  ?0                  	;0	>>65
1   5    ECHO/40                   ?0        1:'</th>
									<th>' ?0                  	;0
2   6    FETCH_DIM_R/81            $7=       16?0                 2:'username'        	;0
3   6    ECHO/40                   ?0        $7                   ?0                  	;0
4   7    ECHO/40                   ?0        3:'</th>
									<th class="text-center">' ?0                  	;0
5   8    FETCH_DIM_R/81            $8=       16?0                 4:'mac_address'     	;0
6   8    ECHO/40                   ?0        $8                   ?0                  	;0
7   9    ECHO/40                   ?0        5:'</th>
                                    <th class="text-center">Device</th>
									<th>' ?0                  	;0
8   10   GOTO/253                  ?0        ?37                  ?6                  	;0
9   12   ECHO/40                   ?0        7:'>'                ?0                  	;0
10  13   FETCH_DIM_R/81            $9=       16?0                 8:'expired'         	;0
11  13   ECHO/40                   ?0        $9                   ?0                  	;0
12  14   ECHO/40                   ?0        9:'</option>
                                    <option value="5"' ?0                  	;0
13  15   FETCH_STATIC_PROP_IS/176  $10=      10:'rRequest'        11:'XUI'            	;0
14  15   ISSET_ISEMPTY_DIM_OBJ/115 #11=      $10                  13:'filter'         	;33554432
15  15   JMPZ_EX/46                #11=      #11                  ?20                 	;0	>>20
16  15   FETCH_STATIC_PROP_R/173   $12=      14:'rRequest'        15:'XUI'            	;0
17  15   FETCH_DIM_R/81            $13=      $12                  17:'filter'         	;0
18  15   IS_EQUAL/17               #14=      $13                  18:5                	;0
19  15   BOOL/52                   #11=      #14                  ?0                  	;0
20  15   BOOL_NOT/13               #15=      #11                  ?0                  	;0	<<15
21  15   JMPZ/43                   ?0        #15                  ?23                 	;0	>>23
22  16   GOTO/253                  ?0        ?238                 ?19                 	;0
23  18   ECHO/40                   ?0        20:' selected'       ?0                  	;0	<<21
24  19   GOTO/253                  ?0        ?238                 ?21                 	;0
25  21   ECHO/40                   ?0        22:'</h4>
				</div>
			</div>
		</div>     
		<div class="row">
			<div class="col-12">
                ' ?0                  	;0
26  22   ISSET_ISEMPTY_CV/197      #16=      16?1                 ?0                  	;33554432
27  22   JMPZ_EX/46                #16=      #16                  ?31                 	;0	>>31
28  22   FETCH_CONSTANT/99         #17=      ?0                   23:'STATUS_SUCCESS' 	;16
29  22   IS_EQUAL/17               #18=      16?1                 #17                 	;0
30  22   BOOL/52                   #16=      #18                  ?0                  	;0
31  22   BOOL_NOT/13               #19=      #16                  ?0                  	;0	<<27
32  22   JMPZ/43                   ?0        #19                  ?34                 	;0	>>34
33  23   GOTO/253                  ?0        ?35                  ?26                 	;0
34  25   ECHO/40                   ?0        27:'                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    Device has been added / modified.
                </div>
                ' ?0                  	;0	<<32
35  27   ECHO/40                   ?0        28:'				<div class="card">
					<div class="card-body" style="overflow-x:auto;">
                        <div id="collapse_filters" class="' ?0                  	;0
36  28   GOTO/253                  ?0        ?227                 ?29                 	;0
37  30   FETCH_DIM_R/81            $20=      16?0                 30:'owner'          	;0
38  30   ECHO/40                   ?0        $20                  ?0                  	;0
39  31   ECHO/40                   ?0        31:'</th>
									<th class="text-center">' ?0                  	;0
40  32   FETCH_DIM_R/81            $21=      16?0                 32:'status'         	;0
41  32   ECHO/40                   ?0        $21                  ?0                  	;0
42  33   ECHO/40                   ?0        33:'</th>
									<th class="text-center">' ?0                  	;0
43  34   FETCH_DIM_R/81            $22=      16?0                 34:'online'         	;0
44  34   ECHO/40                   ?0        $22                  ?0                  	;0
45  35   GOTO/253                  ?0        ?168                 ?35                 	;0
46  37   ASSIGN/38                 ?16       16?2                 36:'MAG Devices'    	;0
47  38   INCLUDE_OR_EVAL/73        ?17       37:'header.php'      ?0                  	;2
48  39   ECHO/40                   ?0        38:'<div class="wrapper"' ?0                  	;0
49  40   FETCH_IS/89               $25=      39:'_SERVER'         ?0                  	;0
50  40   ISSET_ISEMPTY_DIM_OBJ/115 #26=      $25                  40:'HTTP_X_REQUESTED_WITH'	;16777216
51  40   BOOL_NOT/13               #27=      #26                  ?0                  	;0
52  40   JMPZ_EX/46                #27=      #27                  ?60                 	;0	>>60
53  40   INIT_FCALL_BY_NAME/59     ?0        ?0                   41:'strtolower'     	;1
54  40   FETCH_FUNC_ARG/92         $28=      43:'_SERVER'         ?0                  	;1
55  40   FETCH_DIM_FUNC_ARG/93     $29=      $28                  44:'HTTP_X_REQUESTED_WITH'	;1
56  40   SEND_VAR_EX/66            ?80       $29                  ?1                  	;0
57  40   DO_FCALL_BY_NAME/131      $30=      ?0                   ?0                  	;0
58  40   IS_EQUAL/17               #31=      $30                  45:'xmlhttprequest' 	;0
59  40   BOOL/52                   #27=      #31                  ?0                  	;0
60  40   BOOL_NOT/13               #32=      #27                  ?0                  	;0	<<52
61  40   JMPZ/43                   ?0        #32                  ?63                 	;0	>>63
62  41   GOTO/253                  ?0        ?136                 ?46                 	;0
63  43   ECHO/40                   ?0        47:' style="display: none;"' ?0                  	;0	<<61
64  44   GOTO/253                  ?0        ?136                 ?48                 	;0
65  46   INCLUDE_OR_EVAL/73        ?26       49:'session.php'     ?0                  	;2	<<0
66  47   INCLUDE_OR_EVAL/73        ?27       50:'functions.php'   ?0                  	;2
67  48   INIT_FCALL_BY_NAME/59     ?0        ?0                   51:'E6d500e19634D513'	;0
68  48   DO_FCALL_BY_NAME/131      $35=      ?0                   ?0                  	;0
69  48   JMPZ/43                   ?0        $35                  ?71                 	;0	>>71
70  49   GOTO/253                  ?0        ?73                  ?53                 	;0
71  51   INIT_FCALL_BY_NAME/59     ?0        ?0                   54:'E72f42A93714BA87'	;0	<<69
72  51   DO_FCALL_BY_NAME/131      ?29       ?0                   ?0                  	;0
73  53   GOTO/253                  ?0        ?46                  ?56                 	;0
74  55   FETCH_STATIC_PROP_IS/176  $37=      57:'rRequest'        58:'XUI'            	;0
75  55   ISSET_ISEMPTY_DIM_OBJ/115 #38=      $37                  60:'filter'         	;33554432
76  55   JMPZ_EX/46                #38=      #38                  ?81                 	;0	>>81
77  55   FETCH_STATIC_PROP_R/173   $39=      61:'rRequest'        62:'XUI'            	;0
78  55   FETCH_DIM_R/81            $40=      $39                  64:'filter'         	;0
79  55   IS_EQUAL/17               #41=      $40                  65:2                	;0
80  55   BOOL/52                   #38=      #41                  ?0                  	;0
81  55   BOOL_NOT/13               #42=      #38                  ?0                  	;0	<<76
82  55   JMPZ/43                   ?0        #42                  ?84                 	;0	>>84
83  56   GOTO/253                  ?0        ?85                  ?66                 	;0
84  58   ECHO/40                   ?0        67:' selected'       ?0                  	;0	<<82
85  60   ECHO/40                   ?0        68:'>'               ?0                  	;0
86  61   FETCH_DIM_R/81            $43=      16?0                 69:'disabled'       	;0
87  61   ECHO/40                   ?0        $43                  ?0                  	;0
88  62   GOTO/253                  ?0        ?253                 ?70                 	;0
89  64   FETCH_DIM_R/81            $44=      16?0                 71:'banned'         	;0
90  64   ECHO/40                   ?0        $44                  ?0                  	;0
91  65   ECHO/40                   ?0        72:'</option>
                                    <option value="4"' ?0                  	;0
92  66   FETCH_STATIC_PROP_IS/176  $45=      73:'rRequest'        74:'XUI'            	;0
93  66   ISSET_ISEMPTY_DIM_OBJ/115 #46=      $45                  76:'filter'         	;33554432
94  66   JMPZ_EX/46                #46=      #46                  ?99                 	;0	>>99
95  66   FETCH_STATIC_PROP_R/173   $47=      77:'rRequest'        78:'XUI'            	;0
96  66   FETCH_DIM_R/81            $48=      $47                  80:'filter'         	;0
97  66   IS_EQUAL/17               #49=      $48                  81:4                	;0
98  66   BOOL/52                   #46=      #49                  ?0                  	;0
99  66   BOOL_NOT/13               #50=      #46                  ?0                  	;0	<<94
100 66   JMPZ/43                   ?0        #50                  ?102                	;0	>>102
101 67   GOTO/253                  ?0        ?103                 ?82                 	;0
102 69   ECHO/40                   ?0        83:' selected'       ?0                  	;0	<<100
103 71   GOTO/253                  ?0        ?9                   ?84                 	;0
104 73   ECHO/40                   ?0        85:' selected'       ?0                  	;0
105 75   ECHO/40                   ?0        86:'>'               ?0                  	;0
106 76   FETCH_DIM_R/81            $51=      16?0                 87:'active'         	;0
107 76   ECHO/40                   ?0        $51                  ?0                  	;0
108 77   ECHO/40                   ?0        88:'</option>
                                    <option value="2"' ?0                  	;0
109 78   GOTO/253                  ?0        ?74                  ?89                 	;0
110 80   INIT_FCALL_BY_NAME/59     ?0        ?0                   90:'htmlspecialchars'	;1
111 80   FETCH_STATIC_PROP_FUNC_ARG/177 $52=      92:'rRequest'        93:'XUI'            	;1
112 80   FETCH_DIM_FUNC_ARG/93     $53=      $52                  95:'search'         	;1
113 80   SEND_VAR_EX/66            ?80       $53                  ?1                  	;0
114 80   DO_FCALL_BY_NAME/131      $54=      ?0                   ?0                  	;0
115 80   ECHO/40                   ?0        $54                  ?0                  	;0
116 82   ECHO/40                   ?0        96:'" placeholder="' ?0                  	;0
117 83   FETCH_DIM_R/81            $55=      16?0                 97:'search_devices' 	;0
118 83   ECHO/40                   ?0        $55                  ?0                  	;0
119 84   ECHO/40                   ?0        98:'...">
                            </div>
                            <label class="col-md-2 col-form-label text-center" for="mag_reseller">Filter Results &nbsp; <button type="button" class="btn btn-light waves-effect waves-light btn-xs" onClick="clearOwner();"><i class="mdi mdi-close"></i></button></label>
                            <div class="col-md-3">
                                <select id="mag_reseller" class="form-control" data-toggle="select2">
                                    ' ?0                  	;0
120 85   GOTO/253                  ?0        ?142                 ?99                 	;0
121 88   ECHO/40                   ?0        100:'>'              ?0                  	;0
122 89   FETCH_DIM_R/81            $56=      16?0                 101:'no_filter'     	;0
123 89   ECHO/40                   ?0        $56                  ?0                  	;0
124 90   ECHO/40                   ?0        102:'</option>
                                    <option value="1"' ?0                  	;0
125 91   FETCH_STATIC_PROP_IS/176  $57=      103:'rRequest'       104:'XUI'           	;0
126 91   ISSET_ISEMPTY_DIM_OBJ/115 #58=      $57                  106:'filter'        	;33554432
127 91   JMPZ_EX/46                #58=      #58                  ?132                	;0	>>132
128 91   FETCH_STATIC_PROP_R/173   $59=      107:'rRequest'       108:'XUI'           	;0
129 91   FETCH_DIM_R/81            $60=      $59                  110:'filter'        	;0
130 91   IS_EQUAL/17               #61=      $60                  111:1               	;0
131 91   BOOL/52                   #58=      #61                  ?0                  	;0
132 91   BOOL_NOT/13               #62=      #58                  ?0                  	;0	<<127
133 91   JMPZ/43                   ?0        #62                  ?135                	;0	>>135
134 92   GOTO/253                  ?0        ?105                 ?112                	;0
135 94   GOTO/253                  ?0        ?104                 ?113                	;0	<<133
136 97   ECHO/40                   ?0        114:'>
    <div class="container-fluid">
		<div class="row">
			<div class="col-12">
				<div class="page-title-box">
					<div class="page-title-right">
                        ' ?0                  	;0
137 98   INCLUDE_OR_EVAL/73        ?56       115:'topbar.php'     ?0                  	;2
138 99   ECHO/40                   ?0        116:'					</div>
					<h4 class="page-title">' ?0                  	;0
139 100  FETCH_DIM_R/81            $64=      16?0                 117:'mag_devices'   	;0
140 100  ECHO/40                   ?0        $64                  ?0                  	;0
141 101  GOTO/253                  ?0        ?25                  ?118                	;0
142 103  FETCH_STATIC_PROP_IS/176  $65=      119:'rRequest'       120:'XUI'           	;0
143 103  ISSET_ISEMPTY_DIM_OBJ/115 #66=      $65                  122:'owner'         	;33554432
144 103  JMPZ_EX/46                #66=      #66                  ?155                	;0	>>155
145 103  INIT_FCALL_BY_NAME/59     ?0        ?0                   123:'Ba89228DC958ce05'	;1
146 103  INIT_FCALL_BY_NAME/59     ?0        ?0                   125:'intval'        	;1
147 103  FETCH_STATIC_PROP_FUNC_ARG/177 $67=      127:'rRequest'       128:'XUI'           	;1
148 103  FETCH_DIM_FUNC_ARG/93     $68=      $67                  130:'owner'         	;1
149 103  SEND_VAR_EX/66            ?80       $68                  ?1                  	;0
150 103  DO_FCALL_BY_NAME/131      $69=      ?0                   ?0                  	;0
151 103  SEND_VAR_NO_REF_EX/50     ?80       $69                  ?1                  	;0
152 103  DO_FCALL_BY_NAME/131      $70=      ?0                   ?0                  	;0
153 103  ASSIGN/38                 $71=      16?3                 $70                 	;0
154 103  BOOL/52                   #66=      $71                  ?0                  	;0
155 103  BOOL_NOT/13               #72=      #66                  ?0                  	;0	<<144
156 103  JMPZ/43                   ?0        #72                  ?158                	;0	>>158
157 104  GOTO/253                  ?0        ?246                 ?131                	;0
158 106  ECHO/40                   ?0        132:'                                    <option value="' ?0                  	;0	<<156
159 107  INIT_FCALL_BY_NAME/59     ?0        ?0                   133:'intval'        	;1
160 107  FETCH_DIM_FUNC_ARG/93     $73=      16?3                 135:'id'            	;1
161 107  SEND_VAR_EX/66            ?80       $73                  ?1                  	;0
162 107  DO_FCALL_BY_NAME/131      $74=      ?0                   ?0                  	;0
163 107  ECHO/40                   ?0        $74                  ?0                  	;0
164 108  ECHO/40                   ?0        136:'" selected="selected">' ?0                  	;0
165 109  FETCH_DIM_R/81            $75=      16?3                 137:'username'      	;0
166 109  ECHO/40                   ?0        $75                  ?0                  	;0
167 110  GOTO/253                  ?0        ?245                 ?138                	;0
168 112  ECHO/40                   ?0        139:'</th>
									<th class="text-center">' ?0                  	;0
169 113  FETCH_DIM_R/81            $76=      16?0                 140:'trial'         	;0
170 113  ECHO/40                   ?0        $76                  ?0                  	;0
171 114  ECHO/40                   ?0        141:'</th>
									<th class="text-center">' ?0                  	;0
172 115  FETCH_DIM_R/81            $77=      16?0                 142:'expiration'    	;0
173 115  ECHO/40                   ?0        $77                  ?0                  	;0
174 116  ECHO/40                   ?0        143:'</th>
                                    <th class="text-center">Last Connection</th>
									<th class="text-center">' ?0                  	;0
175 117  GOTO/253                  ?0        ?176                 ?144                	;0
176 119  FETCH_DIM_R/81            $78=      16?0                 145:'actions'       	;0
177 119  ECHO/40                   ?0        $78                  ?0                  	;0
178 120  ECHO/40                   ?0        146:'</th>
								</tr>
							</thead>
							<tbody></tbody>
						</table>

					</div> 
				</div> 
			</div>
		</div>
	</div>
</div>
' ?0                  	;0
179 121  GOTO/253                  ?0        ?267                 ?147                	;0
180 123  ECHO/40                   ?0        148:'</label>
                            <div class="col-md-1">
                                <select id="mag_show_entries" class="form-control" data-toggle="select2">
                                    ' ?0                  	;0
181 124  FE_RESET_R/77             $79=      149:array (
  0 => 10,
  1 => 25,
  2 => 50,
  3 => 250,
  4 => 500,
  5 => 1000,
) ?222                	;0
182 124  FE_FETCH_R/78             ?0        $79                  16?4                	;222	>>222	<<221
183 125  NOP/0                     ?0        ?0                   ?0                  	;1
184 125  GOTO/253                  ?0        ?191                 ?150                	;0
185 128  ECHO/40                   ?0        151:' value="'       ?0                  	;0
186 129  ECHO/40                   ?0        16?4                 ?0                  	;0
187 130  ECHO/40                   ?0        152:'">'             ?0                  	;0
188 131  ECHO/40                   ?0        16?4                 ?0                  	;0
189 132  NOP/0                     ?0        ?0                   ?0                  	;1
190 132  GOTO/253                  ?0        ?206                 ?153                	;0
191 134  ECHO/40                   ?0        154:'                                    <option' ?0                  	;0
192 135  FETCH_STATIC_PROP_IS/176  $80=      155:'rRequest'       156:'XUI'           	;0
193 135  ISSET_ISEMPTY_DIM_OBJ/115 #81=      $80                  158:'entries'       	;33554432
194 135  JMPZ/43                   ?0        #81                  ?197                	;0	>>197
195 136  NOP/0                     ?0        ?0                   ?0                  	;1
196 136  GOTO/253                  ?0        ?211                 ?159                	;0
197 138  FETCH_DIM_R/81            $82=      16?5                 160:'default_entries'	;0	<<194
198 138  IS_EQUAL/17               #83=      $82                  16?4                	;0
199 138  BOOL_NOT/13               #84=      #83                  ?0                  	;0
200 138  JMPZ/43                   ?0        #84                  ?203                	;0	>>203
201 139  NOP/0                     ?0        ?0                   ?0                  	;1
202 139  GOTO/253                  ?0        ?204                 ?161                	;0
203 141  ECHO/40                   ?0        162:' selected'      ?0                  	;0	<<200
204 143  NOP/0                     ?0        ?0                   ?0                  	;1
205 143  GOTO/253                  ?0        ?209                 ?163                	;0
206 145  ECHO/40                   ?0        164:'</option>
                                    ' ?0                  	;0
207 147  NOP/0                     ?0        ?0                   ?0                  	;1
208 147  GOTO/253                  ?0        ?221                 ?165                	;0
209 149  NOP/0                     ?0        ?0                   ?0                  	;1
210 149  GOTO/253                  ?0        ?185                 ?166                	;0
211 151  FETCH_STATIC_PROP_R/173   $85=      167:'rRequest'       168:'XUI'           	;0
212 151  FETCH_DIM_R/81            $86=      $85                  170:'entries'       	;0
213 151  IS_EQUAL/17               #87=      $86                  16?4                	;0
214 151  BOOL_NOT/13               #88=      #87                  ?0                  	;0
215 151  JMPZ/43                   ?0        #88                  ?218                	;0	>>218
216 152  NOP/0                     ?0        ?0                   ?0                  	;1
217 152  GOTO/253                  ?0        ?219                 ?171                	;0
218 154  ECHO/40                   ?0        172:' selected'      ?0                  	;0	<<215
219 156  NOP/0                     ?0        ?0                   ?0                  	;1
220 156  GOTO/253                  ?0        ?185                 ?173                	;0
221 157  JMP/42                    ?0        ?182                 ?0                  	;0	>>182
222 157  FE_FREE/127               ?0        $79                  ?0                  	;0	<<181
223 160  ECHO/40                   ?0        174:'                                </select>
                            </div>
                        </div>
						<table id="datatable-users" class="table table-striped table-borderless dt-responsive nowrap font-normal">
							<thead>
								<tr>
									<th class="text-center">' ?0                  	;0
224 161  FETCH_DIM_R/81            $89=      16?0                 175:'id'            	;0
225 161  ECHO/40                   ?0        $89                  ?0                  	;0
226 162  GOTO/253                  ?0        ?1                   ?176                	;0
227 164  BOOL_NOT/13               #90=      16?6                 ?0                  	;0
228 164  JMPZ/43                   ?0        #90                  ?230                	;0	>>230
229 165  GOTO/253                  ?0        ?231                 ?177                	;0
230 167  ECHO/40                   ?0        178:'collapse'       ?0                  	;0	<<228
231 169  ECHO/40                   ?0        179:' form-group row mb-4">
                            <div class="col-md-3">
                                <input type="text" class="form-control" id="mag_search" value="' ?0                  	;0
232 170  FETCH_STATIC_PROP_IS/176  $91=      180:'rRequest'       181:'XUI'           	;0
233 170  ISSET_ISEMPTY_DIM_OBJ/115 #92=      $91                  183:'search'        	;33554432
234 170  BOOL_NOT/13               #93=      #92                  ?0                  	;0
235 170  JMPZ/43                   ?0        #93                  ?237                	;0	>>237
236 171  GOTO/253                  ?0        ?116                 ?184                	;0
237 173  GOTO/253                  ?0        ?110                 ?185                	;0	<<235
238 176  ECHO/40                   ?0        186:'>'              ?0                  	;0
239 177  FETCH_DIM_R/81            $94=      16?0                 187:'trial'         	;0
240 177  ECHO/40                   ?0        $94                  ?0                  	;0
241 178  ECHO/40                   ?0        188:'</option>
                                </select>
                            </div>
                            <label class="col-md-1 col-form-label text-center" for="mag_show_entries">' ?0                  	;0
242 179  FETCH_DIM_R/81            $95=      16?0                 189:'show'          	;0
243 179  ECHO/40                   ?0        $95                  ?0                  	;0
244 180  GOTO/253                  ?0        ?180                 ?190                	;0
245 182  ECHO/40                   ?0        191:'</option>
                                    ' ?0                  	;0
246 184  ECHO/40                   ?0        192:'                                </select>
                            </div>
                            <div class="col-md-2">
                                <select id="mag_filter" class="form-control" data-toggle="select2">
                                    <option value=""' ?0                  	;0
247 185  FETCH_STATIC_PROP_IS/176  $96=      193:'rRequest'       194:'XUI'           	;0
248 185  ISSET_ISEMPTY_DIM_OBJ/115 #97=      $96                  196:'filter'        	;33554432
249 185  JMPZ/43                   ?0        #97                  ?251                	;0	>>251
250 186  GOTO/253                  ?0        ?121                 ?197                	;0
251 188  ECHO/40                   ?0        198:' selected'      ?0                  	;0	<<249
252 189  GOTO/253                  ?0        ?121                 ?199                	;0
253 191  ECHO/40                   ?0        200:'</option>
                                    <option value="3"' ?0                  	;0
254 192  FETCH_STATIC_PROP_IS/176  $98=      201:'rRequest'       202:'XUI'           	;0
255 192  ISSET_ISEMPTY_DIM_OBJ/115 #99=      $98                  204:'filter'        	;33554432
256 192  JMPZ_EX/46                #99=      #99                  ?261                	;0	>>261
257 192  FETCH_STATIC_PROP_R/173   $100=     205:'rRequest'       206:'XUI'           	;0
258 192  FETCH_DIM_R/81            $101=     $100                 208:'filter'        	;0
259 192  IS_EQUAL/17               #102=     $101                 209:3               	;0
260 192  BOOL/52                   #99=      #102                 ?0                  	;0
261 192  BOOL_NOT/13               #103=     #99                  ?0                  	;0	<<256
262 192  JMPZ/43                   ?0        #103                 ?264                	;0	>>264
263 193  GOTO/253                  ?0        ?265                 ?210                	;0
264 195  ECHO/40                   ?0        211:' selected'      ?0                  	;0	<<262
265 197  ECHO/40                   ?0        212:'>'              ?0                  	;0
266 198  GOTO/253                  ?0        ?89                  ?213                	;0
267 200  INCLUDE_OR_EVAL/73        ?97       214:'footer.php'     ?0                  	;2
268 201  NOP/0                     ?0        215:1                ?0                  	;4294967295
*/

?>
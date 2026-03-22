<?php


/*
#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
0   3    JMP/42                    ?0        ?47                  ?0                  	;0	>>47
1   5    FETCH_STATIC_PROP_IS/176  $10=      1:'rRequest'         2:'XUI'             	;0
2   5    ISSET_ISEMPTY_DIM_OBJ/115 #11=      $10                  4:'search'          	;33554432
3   5    BOOL_NOT/13               #12=      #11                  ?0                  	;0
4   5    JMPZ/43                   ?0        #12                  ?6                  	;0	>>6
5   6    GOTO/253                  ?0        ?12                  ?5                  	;0
6   8    INIT_FCALL_BY_NAME/59     ?0        ?0                   6:'htmlspecialchars'	;1	<<4
7   8    FETCH_STATIC_PROP_FUNC_ARG/177 $13=      8:'rRequest'         9:'XUI'             	;1
8   8    FETCH_DIM_FUNC_ARG/93     $14=      $13                  11:'search'         	;1
9   8    SEND_VAR_EX/66            ?80       $14                  ?1                  	;0
10  8    DO_FCALL_BY_NAME/131      $15=      ?0                   ?0                  	;0
11  8    ECHO/40                   ?0        $15                  ?0                  	;0
12  10   ECHO/40                   ?0        12:'" placeholder="' ?0                  	;0
13  11   FETCH_DIM_R/81            $16=      16?0                 13:'search_devices' 	;0
14  11   ECHO/40                   ?0        $16                  ?0                  	;0
15  12   GOTO/253                  ?0        ?184                 ?14                 	;0
16  14   ECHO/40                   ?0        15:'                                </select>
                            </div>
                        </div>
						<table id="datatable-users" class="table table-striped table-borderless dt-responsive nowrap font-normal">
							<thead>
								<tr>
									<th class="text-center">' ?0                  	;0
17  15   FETCH_DIM_R/81            $17=      16?0                 16:'id'             	;0
18  15   ECHO/40                   ?0        $17                  ?0                  	;0
19  16   ECHO/40                   ?0        17:'</th>
									<th>' ?0                  	;0
20  17   FETCH_DIM_R/81            $18=      16?0                 18:'username'       	;0
21  17   ECHO/40                   ?0        $18                  ?0                  	;0
22  18   ECHO/40                   ?0        19:'</th>
									<th class="text-center">' ?0                  	;0
23  19   GOTO/253                  ?0        ?321                 ?20                 	;0
24  21   ECHO/40                   ?0        21:'                                </select>
                            </div>
                            <div class="col-md-2">
                                <select id="e2_filter" class="form-control" data-toggle="select2">
                                    <option value=""' ?0                  	;0
25  22   FETCH_STATIC_PROP_IS/176  $19=      22:'rRequest'        23:'XUI'            	;0
26  22   ISSET_ISEMPTY_DIM_OBJ/115 #20=      $19                  25:'filter'         	;33554432
27  22   JMPZ/43                   ?0        #20                  ?29                 	;0	>>29
28  23   GOTO/253                  ?0        ?30                  ?26                 	;0
29  25   ECHO/40                   ?0        27:' selected'       ?0                  	;0	<<27
30  27   ECHO/40                   ?0        28:'>'               ?0                  	;0
31  28   GOTO/253                  ?0        ?169                 ?29                 	;0
32  30   FETCH_STATIC_PROP_IS/176  $21=      30:'rRequest'        31:'XUI'            	;0
33  30   ISSET_ISEMPTY_DIM_OBJ/115 #22=      $21                  33:'filter'         	;33554432
34  30   JMPZ_EX/46                #22=      #22                  ?39                 	;0	>>39
35  30   FETCH_STATIC_PROP_R/173   $23=      34:'rRequest'        35:'XUI'            	;0
36  30   FETCH_DIM_R/81            $24=      $23                  37:'filter'         	;0
37  30   IS_EQUAL/17               #25=      $24                  38:4                	;0
38  30   BOOL/52                   #22=      #25                  ?0                  	;0
39  30   BOOL_NOT/13               #26=      #22                  ?0                  	;0	<<34
40  30   JMPZ/43                   ?0        #26                  ?42                 	;0	>>42
41  31   GOTO/253                  ?0        ?43                  ?39                 	;0
42  33   ECHO/40                   ?0        40:' selected'       ?0                  	;0	<<40
43  35   ECHO/40                   ?0        41:'>'               ?0                  	;0
44  36   FETCH_DIM_R/81            $27=      16?0                 42:'trial'          	;0
45  36   ECHO/40                   ?0        $27                  ?0                  	;0
46  37   GOTO/253                  ?0        ?262                 ?43                 	;0
47  39   INCLUDE_OR_EVAL/73        ?18       44:'session.php'     ?0                  	;2	<<0
48  40   INCLUDE_OR_EVAL/73        ?19       45:'functions.php'   ?0                  	;2
49  41   INIT_FCALL_BY_NAME/59     ?0        ?0                   46:'baF6e9eF7775B5A9'	;0
50  41   DO_FCALL_BY_NAME/131      $30=      ?0                   ?0                  	;0
51  41   JMPZ/43                   ?0        $30                  ?53                 	;0	>>53
52  42   GOTO/253                  ?0        ?55                  ?48                 	;0
53  44   INIT_FCALL_BY_NAME/59     ?0        ?0                   49:'e72F42a93714BA87'	;0	<<51
54  44   DO_FCALL_BY_NAME/131      ?21       ?0                   ?0                  	;0
55  46   GOTO/253                  ?0        ?114                 ?51                 	;0
56  48   ECHO/40                   ?0        52:' selected'       ?0                  	;0
57  50   ECHO/40                   ?0        53:'>'               ?0                  	;0
58  51   FETCH_DIM_R/81            $32=      16?0                 54:'expired'        	;0
59  51   ECHO/40                   ?0        $32                  ?0                  	;0
60  52   ECHO/40                   ?0        55:'</option>
                                    <option value="5"' ?0                  	;0
61  53   GOTO/253                  ?0        ?32                  ?56                 	;0
62  55   ECHO/40                   ?0        57:'				<div class="card">
					<div class="card-body" style="overflow-x:auto;">
                        <div id="collapse_filters" class="' ?0                  	;0
63  56   BOOL_NOT/13               #33=      16?1                 ?0                  	;0
64  56   JMPZ/43                   ?0        #33                  ?66                 	;0	>>66
65  57   GOTO/253                  ?0        ?67                  ?58                 	;0
66  59   ECHO/40                   ?0        59:'collapse'        ?0                  	;0	<<64
67  61   ECHO/40                   ?0        60:' form-group row mb-4">
                            <div class="col-md-3">
                                <input type="text" class="form-control" id="e2_search" value="' ?0                  	;0
68  62   GOTO/253                  ?0        ?1                   ?61                 	;0
69  65   ECHO/40                   ?0        62:'>All Owners</option>
                                        <option value="' ?0                  	;0
70  66   FETCH_DIM_R/81            $34=      16?2                 63:'id'             	;0
71  66   ECHO/40                   ?0        $34                  ?0                  	;0
72  67   ECHO/40                   ?0        64:'"'               ?0                  	;0
73  68   FETCH_STATIC_PROP_IS/176  $35=      65:'rRequest'        66:'XUI'            	;0
74  68   ISSET_ISEMPTY_DIM_OBJ/115 #36=      $35                  68:'owner'          	;33554432
75  68   JMPZ_EX/46                #36=      #36                  ?81                 	;0	>>81
76  68   FETCH_STATIC_PROP_R/173   $37=      69:'rRequest'        70:'XUI'            	;0
77  68   FETCH_DIM_R/81            $38=      $37                  72:'owner'          	;0
78  68   FETCH_DIM_R/81            $39=      16?2                 73:'id'             	;0
79  68   IS_EQUAL/17               #40=      $38                  $39                 	;0
80  68   BOOL/52                   #36=      #40                  ?0                  	;0
81  68   BOOL_NOT/13               #41=      #36                  ?0                  	;0	<<75
82  68   JMPZ/43                   ?0        #41                  ?84                 	;0	>>84
83  69   GOTO/253                  ?0        ?310                 ?74                 	;0
84  71   GOTO/253                  ?0        ?309                 ?75                 	;0	<<82
85  73   ECHO/40                   ?0        76:'>'               ?0                  	;0
86  74   FETCH_DIM_R/81            $42=      16?0                 77:'active'         	;0
87  74   ECHO/40                   ?0        $42                  ?0                  	;0
88  75   ECHO/40                   ?0        78:'</option>
                                    <option value="2"' ?0                  	;0
89  76   FETCH_STATIC_PROP_IS/176  $43=      79:'rRequest'        80:'XUI'            	;0
90  76   ISSET_ISEMPTY_DIM_OBJ/115 #44=      $43                  82:'filter'         	;33554432
91  76   JMPZ_EX/46                #44=      #44                  ?96                 	;0	>>96
92  76   FETCH_STATIC_PROP_R/173   $45=      83:'rRequest'        84:'XUI'            	;0
93  76   FETCH_DIM_R/81            $46=      $45                  86:'filter'         	;0
94  76   IS_EQUAL/17               #47=      $46                  87:2                	;0
95  76   BOOL/52                   #44=      #47                  ?0                  	;0
96  76   BOOL_NOT/13               #48=      #44                  ?0                  	;0	<<91
97  76   JMPZ/43                   ?0        #48                  ?99                 	;0	>>99
98  77   GOTO/253                  ?0        ?201                 ?88                 	;0
99  79   ECHO/40                   ?0        89:' selected'       ?0                  	;0	<<97
100 80   GOTO/253                  ?0        ?201                 ?90                 	;0
101 82   FETCH_DIM_R/81            $49=      16?0                 91:'enigma_devices' 	;0
102 82   ECHO/40                   ?0        $49                  ?0                  	;0
103 83   ECHO/40                   ?0        92:'</h4>
				</div>
			</div>
		</div>     
		<div class="row">
			<div class="col-12">
                ' ?0                  	;0
104 84   ISSET_ISEMPTY_CV/197      #50=      16?3                 ?0                  	;33554432
105 84   JMPZ_EX/46                #50=      #50                  ?109                	;0	>>109
106 84   FETCH_CONSTANT/99         #51=      ?0                   93:'STATUS_SUCCESS' 	;16
107 84   IS_EQUAL/17               #52=      16?3                 #51                 	;0
108 84   BOOL/52                   #50=      #52                  ?0                  	;0
109 84   BOOL_NOT/13               #53=      #50                  ?0                  	;0	<<105
110 84   JMPZ/43                   ?0        #53                  ?112                	;0	>>112
111 85   GOTO/253                  ?0        ?113                 ?96                 	;0
112 87   ECHO/40                   ?0        97:'                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    Device has been added / modified.
                </div>
                ' ?0                  	;0	<<110
113 89   GOTO/253                  ?0        ?62                  ?98                 	;0
114 91   ASSIGN/38                 ?44       16?4                 99:'Enigma Devices' 	;0
115 92   INCLUDE_OR_EVAL/73        ?45       100:'header.php'     ?0                  	;2
116 93   ECHO/40                   ?0        101:'<div class="wrapper">
    <div class="container-fluid">
		<div class="row">
			<div class="col-12">
				<div class="page-title-box">
					<div class="page-title-right">
                        ' ?0                  	;0
117 94   INCLUDE_OR_EVAL/73        ?46       102:'topbar.php'     ?0                  	;2
118 95   ECHO/40                   ?0        103:'					</div>
					<h4 class="page-title">' ?0                  	;0
119 96   GOTO/253                  ?0        ?101                 ?104                	;0
120 98   FETCH_DIM_R/81            $57=      16?5                 105:'direct_reports'	;0
121 98   FE_RESET_R/77             $58=      $57                  ?154                	;0
122 98   FE_FETCH_R/78             ?0        $58                  16?6                	;154	>>154	<<153
123 99   NOP/0                     ?0        ?0                   ?0                  	;1
124 99   GOTO/253                  ?0        ?134                 ?106                	;0
125 102  NOP/0                     ?0        ?0                   ?0                  	;1
126 102  GOTO/253                  ?0        ?153                 ?107                	;0
127 104  ECHO/40                   ?0        108:' selected'      ?0                  	;0
128 106  ECHO/40                   ?0        109:'>'              ?0                  	;0
129 107  FETCH_DIM_R/81            $59=      16?7                 110:'username'      	;0
130 107  ECHO/40                   ?0        $59                  ?0                  	;0
131 108  ECHO/40                   ?0        111:'</option>
                                        ' ?0                  	;0
132 109  NOP/0                     ?0        ?0                   ?0                  	;1
133 109  GOTO/253                  ?0        ?125                 ?112                	;0
134 111  FETCH_DIM_R/81            $60=      16?5                 113:'users'         	;0
135 111  FETCH_DIM_R/81            $61=      $60                  16?6                	;0
136 111  ASSIGN/38                 ?52       16?7                 $61                 	;0
137 112  ECHO/40                   ?0        114:'                                        <option value="' ?0                  	;0
138 113  ECHO/40                   ?0        16?6                 ?0                  	;0
139 114  ECHO/40                   ?0        115:'"'              ?0                  	;0
140 115  FETCH_STATIC_PROP_IS/176  $63=      116:'rRequest'       117:'XUI'           	;0
141 115  ISSET_ISEMPTY_DIM_OBJ/115 #64=      $63                  119:'owner'         	;33554432
142 115  JMPZ_EX/46                #64=      #64                  ?147                	;0	>>147
143 115  FETCH_STATIC_PROP_R/173   $65=      120:'rRequest'       121:'XUI'           	;0
144 115  FETCH_DIM_R/81            $66=      $65                  123:'owner'         	;0
145 115  IS_EQUAL/17               #67=      $66                  16?6                	;0
146 115  BOOL/52                   #64=      #67                  ?0                  	;0
147 115  BOOL_NOT/13               #68=      #64                  ?0                  	;0	<<142
148 115  JMPZ/43                   ?0        #68                  ?151                	;0	>>151
149 116  NOP/0                     ?0        ?0                   ?0                  	;1
150 116  GOTO/253                  ?0        ?128                 ?124                	;0
151 118  NOP/0                     ?0        ?0                   ?0                  	;1	<<148
152 118  GOTO/253                  ?0        ?127                 ?125                	;0
153 119  JMP/42                    ?0        ?122                 ?0                  	;0	>>122
154 119  FE_FREE/127               ?0        $58                  ?0                  	;0	<<121
155 122  ECHO/40                   ?0        126:'                                    </optgroup>
                                    ' ?0                  	;0
156 124  INIT_FCALL_BY_NAME/59     ?0        ?0                   127:'count'         	;1
157 124  FETCH_DIM_FUNC_ARG/93     $69=      16?5                 129:'all_reports'   	;1
158 124  SEND_VAR_EX/66            ?80       $69                  ?1                  	;0
159 124  DO_FCALL_BY_NAME/131      $70=      ?0                   ?0                  	;0
160 124  INIT_FCALL_BY_NAME/59     ?0        ?0                   130:'count'         	;1
161 124  FETCH_DIM_FUNC_ARG/93     $71=      16?5                 132:'direct_reports'	;1
162 124  SEND_VAR_EX/66            ?80       $71                  ?1                  	;0
163 124  DO_FCALL_BY_NAME/131      $72=      ?0                   ?0                  	;0
164 124  IS_SMALLER/19             #73=      $72                  $70                 	;0
165 124  BOOL_NOT/13               #74=      #73                  ?0                  	;0
166 124  JMPZ/43                   ?0        #74                  ?168                	;0	>>168
167 125  GOTO/253                  ?0        ?261                 ?133                	;0
168 127  GOTO/253                  ?0        ?216                 ?134                	;0	<<166
169 129  FETCH_DIM_R/81            $75=      16?0                 135:'no_filter'     	;0
170 129  ECHO/40                   ?0        $75                  ?0                  	;0
171 130  ECHO/40                   ?0        136:'</option>
                                    <option value="1"' ?0                  	;0
172 131  FETCH_STATIC_PROP_IS/176  $76=      137:'rRequest'       138:'XUI'           	;0
173 131  ISSET_ISEMPTY_DIM_OBJ/115 #77=      $76                  140:'filter'        	;33554432
174 131  JMPZ_EX/46                #77=      #77                  ?179                	;0	>>179
175 131  FETCH_STATIC_PROP_R/173   $78=      141:'rRequest'       142:'XUI'           	;0
176 131  FETCH_DIM_R/81            $79=      $78                  144:'filter'        	;0
177 131  IS_EQUAL/17               #80=      $79                  145:1               	;0
178 131  BOOL/52                   #77=      #80                  ?0                  	;0
179 131  BOOL_NOT/13               #81=      #77                  ?0                  	;0	<<174
180 131  JMPZ/43                   ?0        #81                  ?182                	;0	>>182
181 132  GOTO/253                  ?0        ?183                 ?146                	;0
182 134  ECHO/40                   ?0        147:' selected'      ?0                  	;0	<<180
183 136  GOTO/253                  ?0        ?85                  ?148                	;0
184 138  ECHO/40                   ?0        149:'...">
                            </div>
                            <label class="col-md-2 col-form-label text-center" for="e2_reseller">' ?0                  	;0
185 139  FETCH_DIM_R/81            $82=      16?0                 150:'filter_results'	;0
186 139  ECHO/40                   ?0        $82                  ?0                  	;0
187 140  ECHO/40                   ?0        151:'</label>
                            <div class="col-md-3">
                                <select id="e2_reseller" class="form-control" data-toggle="select2">
                                    <optgroup label="Global">
                                        <option value=""' ?0                  	;0
188 141  FETCH_STATIC_PROP_IS/176  $83=      152:'rRequest'       153:'XUI'           	;0
189 141  ISSET_ISEMPTY_DIM_OBJ/115 #84=      $83                  155:'owner'         	;33554432
190 141  JMPZ/43                   ?0        #84                  ?192                	;0	>>192
191 142  GOTO/253                  ?0        ?69                  ?156                	;0
192 144  ECHO/40                   ?0        157:' selected'      ?0                  	;0	<<190
193 145  GOTO/253                  ?0        ?69                  ?158                	;0
194 147  FETCH_DIM_R/81            $85=      16?0                 159:'expiration'    	;0
195 147  ECHO/40                   ?0        $85                  ?0                  	;0
196 148  ECHO/40                   ?0        160:'</th>
									<th class="text-center">' ?0                  	;0
197 149  FETCH_DIM_R/81            $86=      16?0                 161:'actions'       	;0
198 149  ECHO/40                   ?0        $86                  ?0                  	;0
199 150  ECHO/40                   ?0        162:'</th>
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
200 151  GOTO/253                  ?0        ?338                 ?163                	;0
201 154  ECHO/40                   ?0        164:'>'              ?0                  	;0
202 155  FETCH_DIM_R/81            $87=      16?0                 165:'disabled'      	;0
203 155  ECHO/40                   ?0        $87                  ?0                  	;0
204 156  ECHO/40                   ?0        166:'</option>
                                    <option value="4"' ?0                  	;0
205 157  FETCH_STATIC_PROP_IS/176  $88=      167:'rRequest'       168:'XUI'           	;0
206 157  ISSET_ISEMPTY_DIM_OBJ/115 #89=      $88                  170:'filter'        	;33554432
207 157  JMPZ_EX/46                #89=      #89                  ?212                	;0	>>212
208 157  FETCH_STATIC_PROP_R/173   $90=      171:'rRequest'       172:'XUI'           	;0
209 157  FETCH_DIM_R/81            $91=      $90                  174:'filter'        	;0
210 157  IS_EQUAL/17               #92=      $91                  175:3               	;0
211 157  BOOL/52                   #89=      #92                  ?0                  	;0
212 157  BOOL_NOT/13               #93=      #89                  ?0                  	;0	<<207
213 157  JMPZ/43                   ?0        #93                  ?215                	;0	>>215
214 158  GOTO/253                  ?0        ?57                  ?176                	;0
215 160  GOTO/253                  ?0        ?56                  ?177                	;0	<<213
216 162  ECHO/40                   ?0        178:'                                    <optgroup label="Indirect Reports">
                                        ' ?0                  	;0
217 163  FETCH_DIM_R/81            $94=      16?5                 179:'all_reports'   	;0
218 163  FE_RESET_R/77             $95=      $94                  ?259                	;0
219 163  FE_FETCH_R/78             ?0        $95                  16?6                	;259	>>259	<<258
220 164  NOP/0                     ?0        ?0                   ?0                  	;1
221 164  GOTO/253                  ?0        ?242                 ?180                	;0
222 166  FETCH_STATIC_PROP_IS/176  $96=      181:'rRequest'       182:'XUI'           	;0
223 166  ISSET_ISEMPTY_DIM_OBJ/115 #97=      $96                  184:'owner'         	;33554432
224 166  JMPZ_EX/46                #97=      #97                  ?229                	;0	>>229
225 166  FETCH_STATIC_PROP_R/173   $98=      185:'rRequest'       186:'XUI'           	;0
226 166  FETCH_DIM_R/81            $99=      $98                  188:'owner'         	;0
227 166  IS_EQUAL/17               #100=     $99                  16?6                	;0
228 166  BOOL/52                   #97=      #100                 ?0                  	;0
229 166  BOOL_NOT/13               #101=     #97                  ?0                  	;0	<<224
230 166  JMPZ/43                   ?0        #101                 ?233                	;0	>>233
231 167  NOP/0                     ?0        ?0                   ?0                  	;1
232 167  GOTO/253                  ?0        ?234                 ?189                	;0
233 169  ECHO/40                   ?0        190:' selected'      ?0                  	;0	<<230
234 171  ECHO/40                   ?0        191:'>'              ?0                  	;0
235 172  FETCH_DIM_R/81            $102=     16?7                 192:'username'      	;0
236 172  ECHO/40                   ?0        $102                 ?0                  	;0
237 173  NOP/0                     ?0        ?0                   ?0                  	;1
238 173  GOTO/253                  ?0        ?239                 ?193                	;0
239 175  ECHO/40                   ?0        194:'</option>
                                            ' ?0                  	;0
240 178  NOP/0                     ?0        ?0                   ?0                  	;1
241 178  GOTO/253                  ?0        ?258                 ?195                	;0
242 180  INIT_FCALL_BY_NAME/59     ?0        ?0                   196:'in_array'      	;2
243 180  SEND_VAR_EX/66            ?80       16?6                 ?1                  	;0
244 180  FETCH_DIM_FUNC_ARG/93     $103=     16?5                 198:'direct_reports'	;2
245 180  SEND_VAR_EX/66            ?96       $103                 ?2                  	;0
246 180  DO_FCALL_BY_NAME/131      $104=     ?0                   ?0                  	;0
247 180  JMPZ/43                   ?0        $104                 ?250                	;0	>>250
248 181  NOP/0                     ?0        ?0                   ?0                  	;1
249 181  GOTO/253                  ?0        ?240                 ?199                	;0
250 183  FETCH_DIM_R/81            $105=     16?5                 200:'users'         	;0	<<247
251 183  FETCH_DIM_R/81            $106=     $105                 16?6                	;0
252 183  ASSIGN/38                 ?97       16?7                 $106                	;0
253 184  ECHO/40                   ?0        201:'                                            <option value="' ?0                  	;0
254 185  ECHO/40                   ?0        16?6                 ?0                  	;0
255 186  ECHO/40                   ?0        202:'"'              ?0                  	;0
256 187  NOP/0                     ?0        ?0                   ?0                  	;1
257 187  GOTO/253                  ?0        ?222                 ?203                	;0
258 188  JMP/42                    ?0        ?219                 ?0                  	;0	>>219
259 188  FE_FREE/127               ?0        $95                  ?0                  	;0	<<218
260 191  ECHO/40                   ?0        204:'                                    </optgroup>
                                    ' ?0                  	;0
261 193  GOTO/253                  ?0        ?24                  ?205                	;0
262 195  ECHO/40                   ?0        206:'</option>
                                </select>
                            </div>
                            <label class="col-md-1 col-form-label text-center" for="e2_show_entries">' ?0                  	;0
263 196  FETCH_DIM_R/81            $108=     16?0                 207:'show'          	;0
264 196  ECHO/40                   ?0        $108                 ?0                  	;0
265 197  ECHO/40                   ?0        208:'</label>
                            <div class="col-md-1">
                                <select id="e2_show_entries" class="form-control" data-toggle="select2">
                                    ' ?0                  	;0
266 198  FE_RESET_R/77             $109=     209:array (
  0 => 10,
  1 => 25,
  2 => 50,
  3 => 250,
  4 => 500,
  5 => 1000,
) ?307                	;0
267 198  FE_FETCH_R/78             ?0        $109                 16?8                	;307	>>307	<<306
268 199  NOP/0                     ?0        ?0                   ?0                  	;1
269 199  GOTO/253                  ?0        ?276                 ?210                	;0
270 202  ECHO/40                   ?0        211:' value="'       ?0                  	;0
271 203  ECHO/40                   ?0        16?8                 ?0                  	;0
272 204  ECHO/40                   ?0        212:'">'             ?0                  	;0
273 205  ECHO/40                   ?0        16?8                 ?0                  	;0
274 206  NOP/0                     ?0        ?0                   ?0                  	;1
275 206  GOTO/253                  ?0        ?291                 ?213                	;0
276 208  ECHO/40                   ?0        214:'                                    <option' ?0                  	;0
277 209  FETCH_STATIC_PROP_IS/176  $110=     215:'rRequest'       216:'XUI'           	;0
278 209  ISSET_ISEMPTY_DIM_OBJ/115 #111=     $110                 218:'entries'       	;33554432
279 209  JMPZ/43                   ?0        #111                 ?282                	;0	>>282
280 210  NOP/0                     ?0        ?0                   ?0                  	;1
281 210  GOTO/253                  ?0        ?296                 ?219                	;0
282 212  FETCH_DIM_R/81            $112=     16?9                 220:'default_entries'	;0	<<279
283 212  IS_EQUAL/17               #113=     $112                 16?8                	;0
284 212  BOOL_NOT/13               #114=     #113                 ?0                  	;0
285 212  JMPZ/43                   ?0        #114                 ?288                	;0	>>288
286 213  NOP/0                     ?0        ?0                   ?0                  	;1
287 213  GOTO/253                  ?0        ?289                 ?221                	;0
288 215  ECHO/40                   ?0        222:' selected'      ?0                  	;0	<<285
289 217  NOP/0                     ?0        ?0                   ?0                  	;1
290 217  GOTO/253                  ?0        ?294                 ?223                	;0
291 219  ECHO/40                   ?0        224:'</option>
                                    ' ?0                  	;0
292 221  NOP/0                     ?0        ?0                   ?0                  	;1
293 221  GOTO/253                  ?0        ?306                 ?225                	;0
294 223  NOP/0                     ?0        ?0                   ?0                  	;1
295 223  GOTO/253                  ?0        ?270                 ?226                	;0
296 225  FETCH_STATIC_PROP_R/173   $115=     227:'rRequest'       228:'XUI'           	;0
297 225  FETCH_DIM_R/81            $116=     $115                 230:'entries'       	;0
298 225  IS_EQUAL/17               #117=     $116                 16?8                	;0
299 225  BOOL_NOT/13               #118=     #117                 ?0                  	;0
300 225  JMPZ/43                   ?0        #118                 ?303                	;0	>>303
301 226  NOP/0                     ?0        ?0                   ?0                  	;1
302 226  GOTO/253                  ?0        ?304                 ?231                	;0
303 228  ECHO/40                   ?0        232:' selected'      ?0                  	;0	<<300
304 230  NOP/0                     ?0        ?0                   ?0                  	;1
305 230  GOTO/253                  ?0        ?270                 ?233                	;0
306 231  JMP/42                    ?0        ?267                 ?0                  	;0	>>267
307 231  FE_FREE/127               ?0        $109                 ?0                  	;0	<<266
308 234  GOTO/253                  ?0        ?16                  ?234                	;0
309 236  ECHO/40                   ?0        235:' selected'      ?0                  	;0
310 238  ECHO/40                   ?0        236:'>My Devices</option>
                                    </optgroup>
                                    ' ?0                  	;0
311 239  INIT_FCALL_BY_NAME/59     ?0        ?0                   237:'count'         	;1
312 239  FETCH_DIM_FUNC_ARG/93     $119=     16?5                 239:'direct_reports'	;1
313 239  SEND_VAR_EX/66            ?80       $119                 ?1                  	;0
314 239  DO_FCALL_BY_NAME/131      $120=     ?0                   ?0                  	;0
315 239  IS_SMALLER/19             #121=     240:0                $120                	;0
316 239  BOOL_NOT/13               #122=     #121                 ?0                  	;0
317 239  JMPZ/43                   ?0        #122                 ?319                	;0	>>319
318 240  GOTO/253                  ?0        ?156                 ?241                	;0
319 242  ECHO/40                   ?0        242:'                                    <optgroup label="Direct Reports">
                                        ' ?0                  	;0	<<317
320 243  GOTO/253                  ?0        ?120                 ?243                	;0
321 245  FETCH_DIM_R/81            $123=     16?0                 244:'mac_address'   	;0
322 245  ECHO/40                   ?0        $123                 ?0                  	;0
323 246  ECHO/40                   ?0        245:'</th>
                                    <th class="text-center">Public IP</th>
									<th>' ?0                  	;0
324 247  FETCH_DIM_R/81            $124=     16?0                 246:'owner'         	;0
325 247  ECHO/40                   ?0        $124                 ?0                  	;0
326 248  ECHO/40                   ?0        247:'</th>
									<th class="text-center">' ?0                  	;0
327 249  FETCH_DIM_R/81            $125=     16?0                 248:'status'        	;0
328 249  ECHO/40                   ?0        $125                 ?0                  	;0
329 250  GOTO/253                  ?0        ?330                 ?249                	;0
330 252  ECHO/40                   ?0        250:'</th>
									<th class="text-center">' ?0                  	;0
331 253  FETCH_DIM_R/81            $126=     16?0                 251:'online'        	;0
332 253  ECHO/40                   ?0        $126                 ?0                  	;0
333 254  ECHO/40                   ?0        252:'</th>
									<th class="text-center">' ?0                  	;0
334 255  FETCH_DIM_R/81            $127=     16?0                 253:'trial'         	;0
335 255  ECHO/40                   ?0        $127                 ?0                  	;0
336 256  ECHO/40                   ?0        254:'</th>
									<th class="text-center">' ?0                  	;0
337 257  GOTO/253                  ?0        ?194                 ?255                	;0
338 259  INCLUDE_OR_EVAL/73        ?118      256:'footer.php'     ?0                  	;2
339 260  NOP/0                     ?0        257:1                ?0                  	;4294967295
*/

?>
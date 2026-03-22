<?php


/*
#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
0   3    JMP/42                    ?0        ?47                  ?0                  	;0	>>47
1   5    ASSIGN/38                 ?0        16?0                 1:'Lines'           	;0
2   6    INCLUDE_OR_EVAL/73        ?1        2:'header.php'       ?0                  	;2
3   7    ECHO/40                   ?0        3:'<div class="wrapper"' ?0                  	;0
4   8    FETCH_IS/89               $8=       4:'_SERVER'          ?0                  	;0
5   8    ISSET_ISEMPTY_DIM_OBJ/115 #9=       $8                   5:'HTTP_X_REQUESTED_WITH'	;16777216
6   8    BOOL_NOT/13               #10=      #9                   ?0                  	;0
7   8    JMPZ_EX/46                #10=      #10                  ?15                 	;0	>>15
8   8    INIT_FCALL_BY_NAME/59     ?0        ?0                   6:'strtolower'      	;1
9   8    FETCH_FUNC_ARG/92         $11=      8:'_SERVER'          ?0                  	;1
10  8    FETCH_DIM_FUNC_ARG/93     $12=      $11                  9:'HTTP_X_REQUESTED_WITH'	;1
11  8    SEND_VAR_EX/66            ?80       $12                  ?1                  	;0
12  8    DO_FCALL_BY_NAME/131      $13=      ?0                   ?0                  	;0
13  8    IS_EQUAL/17               #14=      $13                  10:'xmlhttprequest' 	;0
14  8    BOOL/52                   #10=      #14                  ?0                  	;0
15  8    BOOL_NOT/13               #15=      #10                  ?0                  	;0	<<7
16  8    JMPZ/43                   ?0        #15                  ?18                 	;0	>>18
17  9    GOTO/253                  ?0        ?188                 ?11                 	;0
18  11   ECHO/40                   ?0        12:' style="display: none;"' ?0                  	;0	<<16
19  12   GOTO/253                  ?0        ?188                 ?13                 	;0
20  15   ECHO/40                   ?0        14:' form-group row mb-4">
                            <div class="col-md-3">
                                <input type="text" class="form-control" id="user_search" value="' ?0                  	;0
21  16   FETCH_STATIC_PROP_IS/176  $16=      15:'rRequest'        16:'XUI'            	;0
22  16   ISSET_ISEMPTY_DIM_OBJ/115 #17=      $16                  18:'search'         	;33554432
23  16   BOOL_NOT/13               #18=      #17                  ?0                  	;0
24  16   JMPZ/43                   ?0        #18                  ?26                 	;0	>>26
25  17   GOTO/253                  ?0        ?32                  ?19                 	;0
26  19   INIT_FCALL_BY_NAME/59     ?0        ?0                   20:'htmlspecialchars'	;1	<<24
27  19   FETCH_STATIC_PROP_FUNC_ARG/177 $19=      22:'rRequest'        23:'XUI'            	;1
28  19   FETCH_DIM_FUNC_ARG/93     $20=      $19                  25:'search'         	;1
29  19   SEND_VAR_EX/66            ?80       $20                  ?1                  	;0
30  19   DO_FCALL_BY_NAME/131      $21=      ?0                   ?0                  	;0
31  19   ECHO/40                   ?0        $21                  ?0                  	;0
32  21   GOTO/253                  ?0        ?65                  ?26                 	;0
33  23   ECHO/40                   ?0        27:'>Ministra</option>
                                    <option value="8"' ?0                  	;0
34  24   FETCH_STATIC_PROP_IS/176  $22=      28:'rRequest'        29:'XUI'            	;0
35  24   ISSET_ISEMPTY_DIM_OBJ/115 #23=      $22                  31:'filter'         	;33554432
36  24   JMPZ_EX/46                #23=      #23                  ?41                 	;0	>>41
37  24   FETCH_STATIC_PROP_R/173   $24=      32:'rRequest'        33:'XUI'            	;0
38  24   FETCH_DIM_R/81            $25=      $24                  35:'filter'         	;0
39  24   IS_EQUAL/17               #26=      $25                  36:8                	;0
40  24   BOOL/52                   #23=      #26                  ?0                  	;0
41  24   BOOL_NOT/13               #27=      #23                  ?0                  	;0	<<36
42  24   JMPZ/43                   ?0        #27                  ?44                 	;0	>>44
43  25   GOTO/253                  ?0        ?45                  ?37                 	;0
44  27   ECHO/40                   ?0        38:' selected'       ?0                  	;0	<<42
45  29   ECHO/40                   ?0        39:'>Expiring Soon</option>
                                    
                                </select>
                            </div>
                            <label class="col-md-1 col-form-label text-center" for="user_show_entries">Show</label>
                            <div class="col-md-1">
                                <select id="user_show_entries" class="form-control" data-toggle="select2">
                                    ' ?0                  	;0
46  30   GOTO/253                  ?0        ?200                 ?40                 	;0
47  32   INCLUDE_OR_EVAL/73        ?22       41:'session.php'     ?0                  	;2	<<0
48  33   INCLUDE_OR_EVAL/73        ?23       42:'functions.php'   ?0                  	;2
49  34   INIT_FCALL_BY_NAME/59     ?0        ?0                   43:'e6D500E19634d513'	;0
50  34   DO_FCALL_BY_NAME/131      $30=      ?0                   ?0                  	;0
51  34   JMPZ/43                   ?0        $30                  ?53                 	;0	>>53
52  35   GOTO/253                  ?0        ?55                  ?45                 	;0
53  37   INIT_FCALL_BY_NAME/59     ?0        ?0                   46:'E72F42A93714ba87'	;0	<<51
54  37   DO_FCALL_BY_NAME/131      ?25       ?0                   ?0                  	;0
55  39   GOTO/253                  ?0        ?1                   ?48                 	;0
56  41   FETCH_DIM_R/81            $32=      16?1                 49:'username'       	;0
57  41   ECHO/40                   ?0        $32                  ?0                  	;0
58  42   ECHO/40                   ?0        50:'</option>
                                    ' ?0                  	;0
59  44   ECHO/40                   ?0        51:'                                </select>
                            </div>
                            <div class="col-md-2">
                                <select id="user_filter" class="form-control" data-toggle="select2">
                                    <option value=""' ?0                  	;0
60  45   FETCH_STATIC_PROP_IS/176  $33=      52:'rRequest'        53:'XUI'            	;0
61  45   ISSET_ISEMPTY_DIM_OBJ/115 #34=      $33                  55:'filter'         	;33554432
62  45   JMPZ/43                   ?0        #34                  ?64                 	;0	>>64
63  46   GOTO/253                  ?0        ?175                 ?56                 	;0
64  48   GOTO/253                  ?0        ?174                 ?57                 	;0	<<62
65  50   ECHO/40                   ?0        58:'" placeholder="Search Lines...">
                            </div>
                            <label class="col-md-2 col-form-label text-center" for="user_reseller">Filter Results &nbsp; <button type="button" class="btn btn-light waves-effect waves-light btn-xs" onClick="clearOwner();"><i class="mdi mdi-close"></i></button></label>
                            <div class="col-md-3">
                                <select id="user_reseller" class="form-control" data-toggle="select2">
                                    ' ?0                  	;0
66  51   FETCH_STATIC_PROP_IS/176  $35=      59:'rRequest'        60:'XUI'            	;0
67  51   ISSET_ISEMPTY_DIM_OBJ/115 #36=      $35                  62:'owner'          	;33554432
68  51   JMPZ_EX/46                #36=      #36                  ?79                 	;0	>>79
69  51   INIT_FCALL_BY_NAME/59     ?0        ?0                   63:'ba89228DC958Ce05'	;1
70  51   INIT_FCALL_BY_NAME/59     ?0        ?0                   65:'intval'         	;1
71  51   FETCH_STATIC_PROP_FUNC_ARG/177 $37=      67:'rRequest'        68:'XUI'            	;1
72  51   FETCH_DIM_FUNC_ARG/93     $38=      $37                  70:'owner'          	;1
73  51   SEND_VAR_EX/66            ?80       $38                  ?1                  	;0
74  51   DO_FCALL_BY_NAME/131      $39=      ?0                   ?0                  	;0
75  51   SEND_VAR_NO_REF_EX/50     ?80       $39                  ?1                  	;0
76  51   DO_FCALL_BY_NAME/131      $40=      ?0                   ?0                  	;0
77  51   ASSIGN/38                 $41=      16?1                 $40                 	;0
78  51   BOOL/52                   #36=      $41                  ?0                  	;0
79  51   BOOL_NOT/13               #42=      #36                  ?0                  	;0	<<68
80  51   JMPZ/43                   ?0        #42                  ?82                 	;0	>>82
81  52   GOTO/253                  ?0        ?59                  ?71                 	;0
82  54   ECHO/40                   ?0        72:'                                    <option value="' ?0                  	;0	<<80
83  55   INIT_FCALL_BY_NAME/59     ?0        ?0                   73:'intval'         	;1
84  55   FETCH_DIM_FUNC_ARG/93     $43=      16?1                 75:'id'             	;1
85  55   SEND_VAR_EX/66            ?80       $43                  ?1                  	;0
86  55   DO_FCALL_BY_NAME/131      $44=      ?0                   ?0                  	;0
87  55   ECHO/40                   ?0        $44                  ?0                  	;0
88  56   ECHO/40                   ?0        76:'" selected="selected">' ?0                  	;0
89  57   GOTO/253                  ?0        ?56                  ?77                 	;0
90  59   ECHO/40                   ?0        78:'>Disabled</option>
                                    <option value="3"' ?0                  	;0
91  60   FETCH_STATIC_PROP_IS/176  $45=      79:'rRequest'        80:'XUI'            	;0
92  60   ISSET_ISEMPTY_DIM_OBJ/115 #46=      $45                  82:'filter'         	;33554432
93  60   JMPZ_EX/46                #46=      #46                  ?98                 	;0	>>98
94  60   FETCH_STATIC_PROP_R/173   $47=      83:'rRequest'        84:'XUI'            	;0
95  60   FETCH_DIM_R/81            $48=      $47                  86:'filter'         	;0
96  60   IS_EQUAL/17               #49=      $48                  87:3                	;0
97  60   BOOL/52                   #46=      #49                  ?0                  	;0
98  60   BOOL_NOT/13               #50=      #46                  ?0                  	;0	<<93
99  60   JMPZ/43                   ?0        #50                  ?101                	;0	>>101
100 61   GOTO/253                  ?0        ?102                 ?88                 	;0
101 63   ECHO/40                   ?0        89:' selected'       ?0                  	;0	<<99
102 65   ECHO/40                   ?0        90:'>Banned</option>
                                    <option value="4"' ?0                  	;0
103 66   GOTO/253                  ?0        ?151                 ?91                 	;0
104 69   ECHO/40                   ?0        92:'>Active</option>
                                    <option value="2"' ?0                  	;0
105 70   FETCH_STATIC_PROP_IS/176  $51=      93:'rRequest'        94:'XUI'            	;0
106 70   ISSET_ISEMPTY_DIM_OBJ/115 #52=      $51                  96:'filter'         	;33554432
107 70   JMPZ_EX/46                #52=      #52                  ?112                	;0	>>112
108 70   FETCH_STATIC_PROP_R/173   $53=      97:'rRequest'        98:'XUI'            	;0
109 70   FETCH_DIM_R/81            $54=      $53                  100:'filter'        	;0
110 70   IS_EQUAL/17               #55=      $54                  101:2               	;0
111 70   BOOL/52                   #52=      #55                  ?0                  	;0
112 70   BOOL_NOT/13               #56=      #52                  ?0                  	;0	<<107
113 70   JMPZ/43                   ?0        #56                  ?115                	;0	>>115
114 71   GOTO/253                  ?0        ?116                 ?102                	;0
115 73   ECHO/40                   ?0        103:' selected'      ?0                  	;0	<<113
116 75   GOTO/253                  ?0        ?90                  ?104                	;0
117 77   ECHO/40                   ?0        105:' selected'      ?0                  	;0
118 79   ECHO/40                   ?0        106:'>Trial</option>
                                    <option value="6"' ?0                  	;0
119 80   FETCH_STATIC_PROP_IS/176  $57=      107:'rRequest'       108:'XUI'           	;0
120 80   ISSET_ISEMPTY_DIM_OBJ/115 #58=      $57                  110:'filter'        	;33554432
121 80   JMPZ_EX/46                #58=      #58                  ?126                	;0	>>126
122 80   FETCH_STATIC_PROP_R/173   $59=      111:'rRequest'       112:'XUI'           	;0
123 80   FETCH_DIM_R/81            $60=      $59                  114:'filter'        	;0
124 80   IS_EQUAL/17               #61=      $60                  115:6               	;0
125 80   BOOL/52                   #58=      #61                  ?0                  	;0
126 80   BOOL_NOT/13               #62=      #58                  ?0                  	;0	<<121
127 80   JMPZ/43                   ?0        #62                  ?129                	;0	>>129
128 81   GOTO/253                  ?0        ?138                 ?116                	;0
129 83   ECHO/40                   ?0        117:' selected'      ?0                  	;0	<<127
130 84   GOTO/253                  ?0        ?138                 ?118                	;0
131 86   ECHO/40                   ?0        119:'                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    Line has been added / modified.
                </div>
                ' ?0                  	;0
132 88   ECHO/40                   ?0        120:'				<div class="card">
					<div class="card-body" style="overflow-x:auto;">
                        <div id="collapse_filters" class="' ?0                  	;0
133 89   BOOL_NOT/13               #63=      16?2                 ?0                  	;0
134 89   JMPZ/43                   ?0        #63                  ?136                	;0	>>136
135 90   GOTO/253                  ?0        ?20                  ?121                	;0
136 92   ECHO/40                   ?0        122:'collapse'       ?0                  	;0	<<134
137 93   GOTO/253                  ?0        ?20                  ?123                	;0
138 96   ECHO/40                   ?0        124:'>Restreamer</option>
                                    <option value="7"' ?0                  	;0
139 97   FETCH_STATIC_PROP_IS/176  $64=      125:'rRequest'       126:'XUI'           	;0
140 97   ISSET_ISEMPTY_DIM_OBJ/115 #65=      $64                  128:'filter'        	;33554432
141 97   JMPZ_EX/46                #65=      #65                  ?146                	;0	>>146
142 97   FETCH_STATIC_PROP_R/173   $66=      129:'rRequest'       130:'XUI'           	;0
143 97   FETCH_DIM_R/81            $67=      $66                  132:'filter'        	;0
144 97   IS_EQUAL/17               #68=      $67                  133:7               	;0
145 97   BOOL/52                   #65=      #68                  ?0                  	;0
146 97   BOOL_NOT/13               #69=      #65                  ?0                  	;0	<<141
147 97   JMPZ/43                   ?0        #69                  ?149                	;0	>>149
148 98   GOTO/253                  ?0        ?150                 ?134                	;0
149 100  ECHO/40                   ?0        135:' selected'      ?0                  	;0	<<147
150 102  GOTO/253                  ?0        ?33                  ?136                	;0
151 104  FETCH_STATIC_PROP_IS/176  $70=      137:'rRequest'       138:'XUI'           	;0
152 104  ISSET_ISEMPTY_DIM_OBJ/115 #71=      $70                  140:'filter'        	;33554432
153 104  JMPZ_EX/46                #71=      #71                  ?158                	;0	>>158
154 104  FETCH_STATIC_PROP_R/173   $72=      141:'rRequest'       142:'XUI'           	;0
155 104  FETCH_DIM_R/81            $73=      $72                  144:'filter'        	;0
156 104  IS_EQUAL/17               #74=      $73                  145:4               	;0
157 104  BOOL/52                   #71=      #74                  ?0                  	;0
158 104  BOOL_NOT/13               #75=      #71                  ?0                  	;0	<<153
159 104  JMPZ/43                   ?0        #75                  ?161                	;0	>>161
160 105  GOTO/253                  ?0        ?162                 ?146                	;0
161 107  ECHO/40                   ?0        147:' selected'      ?0                  	;0	<<159
162 109  ECHO/40                   ?0        148:'>Expired</option>
                                    <option value="5"' ?0                  	;0
163 110  FETCH_STATIC_PROP_IS/176  $76=      149:'rRequest'       150:'XUI'           	;0
164 110  ISSET_ISEMPTY_DIM_OBJ/115 #77=      $76                  152:'filter'        	;33554432
165 110  JMPZ_EX/46                #77=      #77                  ?170                	;0	>>170
166 110  FETCH_STATIC_PROP_R/173   $78=      153:'rRequest'       154:'XUI'           	;0
167 110  FETCH_DIM_R/81            $79=      $78                  156:'filter'        	;0
168 110  IS_EQUAL/17               #80=      $79                  157:5               	;0
169 110  BOOL/52                   #77=      #80                  ?0                  	;0
170 110  BOOL_NOT/13               #81=      #77                  ?0                  	;0	<<165
171 110  JMPZ/43                   ?0        #81                  ?173                	;0	>>173
172 111  GOTO/253                  ?0        ?118                 ?158                	;0
173 113  GOTO/253                  ?0        ?117                 ?159                	;0	<<171
174 115  ECHO/40                   ?0        160:' selected'      ?0                  	;0
175 117  ECHO/40                   ?0        161:'>No Filter</option>
                                    <option value="1"' ?0                  	;0
176 118  FETCH_STATIC_PROP_IS/176  $82=      162:'rRequest'       163:'XUI'           	;0
177 118  ISSET_ISEMPTY_DIM_OBJ/115 #83=      $82                  165:'filter'        	;33554432
178 118  JMPZ_EX/46                #83=      #83                  ?183                	;0	>>183
179 118  FETCH_STATIC_PROP_R/173   $84=      166:'rRequest'       167:'XUI'           	;0
180 118  FETCH_DIM_R/81            $85=      $84                  169:'filter'        	;0
181 118  IS_EQUAL/17               #86=      $85                  170:1               	;0
182 118  BOOL/52                   #83=      #86                  ?0                  	;0
183 118  BOOL_NOT/13               #87=      #83                  ?0                  	;0	<<178
184 118  JMPZ/43                   ?0        #87                  ?186                	;0	>>186
185 119  GOTO/253                  ?0        ?104                 ?171                	;0
186 121  ECHO/40                   ?0        172:' selected'      ?0                  	;0	<<184
187 122  GOTO/253                  ?0        ?104                 ?173                	;0
188 125  ECHO/40                   ?0        174:'>
    <div class="container-fluid">
		<div class="row">
			<div class="col-12">
				<div class="page-title-box">
					<div class="page-title-right">
                        ' ?0                  	;0
189 126  INCLUDE_OR_EVAL/73        ?82       175:'topbar.php'     ?0                  	;2
190 127  ECHO/40                   ?0        176:'					</div>
					<h4 class="page-title">Lines</h4>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-12">
                ' ?0                  	;0
191 128  ISSET_ISEMPTY_CV/197      #89=      16?3                 ?0                  	;33554432
192 128  JMPZ_EX/46                #89=      #89                  ?196                	;0	>>196
193 128  FETCH_CONSTANT/99         #90=      ?0                   177:'STATUS_SUCCESS'	;16
194 128  IS_EQUAL/17               #91=      16?3                 #90                 	;0
195 128  BOOL/52                   #89=      #91                  ?0                  	;0
196 128  BOOL_NOT/13               #92=      #89                  ?0                  	;0	<<192
197 128  JMPZ/43                   ?0        #92                  ?199                	;0	>>199
198 129  GOTO/253                  ?0        ?132                 ?180                	;0
199 131  GOTO/253                  ?0        ?131                 ?181                	;0	<<197
200 133  FE_RESET_R/77             $93=      182:array (
  0 => 10,
  1 => 25,
  2 => 50,
  3 => 250,
  4 => 500,
  5 => 1000,
) ?241                	;0
201 133  FE_FETCH_R/78             ?0        $93                  16?4                	;241	>>241	<<240
202 134  NOP/0                     ?0        ?0                   ?0                  	;1
203 134  GOTO/253                  ?0        ?210                 ?183                	;0
204 137  ECHO/40                   ?0        184:' value="'       ?0                  	;0
205 138  ECHO/40                   ?0        16?4                 ?0                  	;0
206 139  ECHO/40                   ?0        185:'">'             ?0                  	;0
207 140  ECHO/40                   ?0        16?4                 ?0                  	;0
208 141  NOP/0                     ?0        ?0                   ?0                  	;1
209 141  GOTO/253                  ?0        ?225                 ?186                	;0
210 143  ECHO/40                   ?0        187:'                                    <option' ?0                  	;0
211 144  FETCH_STATIC_PROP_IS/176  $94=      188:'rRequest'       189:'XUI'           	;0
212 144  ISSET_ISEMPTY_DIM_OBJ/115 #95=      $94                  191:'entries'       	;33554432
213 144  JMPZ/43                   ?0        #95                  ?216                	;0	>>216
214 145  NOP/0                     ?0        ?0                   ?0                  	;1
215 145  GOTO/253                  ?0        ?230                 ?192                	;0
216 147  FETCH_DIM_R/81            $96=      16?5                 193:'default_entries'	;0	<<213
217 147  IS_EQUAL/17               #97=      $96                  16?4                	;0
218 147  BOOL_NOT/13               #98=      #97                  ?0                  	;0
219 147  JMPZ/43                   ?0        #98                  ?222                	;0	>>222
220 148  NOP/0                     ?0        ?0                   ?0                  	;1
221 148  GOTO/253                  ?0        ?223                 ?194                	;0
222 150  ECHO/40                   ?0        195:' selected'      ?0                  	;0	<<219
223 152  NOP/0                     ?0        ?0                   ?0                  	;1
224 152  GOTO/253                  ?0        ?228                 ?196                	;0
225 154  ECHO/40                   ?0        197:'</option>
                                    ' ?0                  	;0
226 156  NOP/0                     ?0        ?0                   ?0                  	;1
227 156  GOTO/253                  ?0        ?240                 ?198                	;0
228 158  NOP/0                     ?0        ?0                   ?0                  	;1
229 158  GOTO/253                  ?0        ?204                 ?199                	;0
230 160  FETCH_STATIC_PROP_R/173   $99=      200:'rRequest'       201:'XUI'           	;0
231 160  FETCH_DIM_R/81            $100=     $99                  203:'entries'       	;0
232 160  IS_EQUAL/17               #101=     $100                 16?4                	;0
233 160  BOOL_NOT/13               #102=     #101                 ?0                  	;0
234 160  JMPZ/43                   ?0        #102                 ?237                	;0	>>237
235 161  NOP/0                     ?0        ?0                   ?0                  	;1
236 161  GOTO/253                  ?0        ?238                 ?204                	;0
237 163  ECHO/40                   ?0        205:' selected'      ?0                  	;0	<<234
238 165  NOP/0                     ?0        ?0                   ?0                  	;1
239 165  GOTO/253                  ?0        ?204                 ?206                	;0
240 166  JMP/42                    ?0        ?201                 ?0                  	;0	>>201
241 166  FE_FREE/127               ?0        $93                  ?0                  	;0	<<200
242 169  ECHO/40                   ?0        207:'                                </select>
                            </div>
                        </div>
						<table id="datatable-users" class="table table-striped table-borderless dt-responsive nowrap font-normal">
							<thead>
								<tr>
									<th class="text-center">ID</th>
									<th>Username</th>
									<th>Password</th>
									<th>Owner</th>
									<th class="text-center">Status</th>
									<th class="text-center">Online</th>
									<th class="text-center">Trial</th>
                                    <th class="text-center">Restreamer</th>
                                    <th class="text-center">Active</th>
                                    <th class="text-center">Connections</th>
									<th class="text-center">Expiration</th>
									<th class="text-center">Last Connection</th>
									<th class="text-center">Actions</th>
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
243 170  GOTO/253                  ?0        ?244                 ?208                	;0
244 172  INCLUDE_OR_EVAL/73        ?97       209:'footer.php'     ?0                  	;2
245 173  NOP/0                     ?0        210:1                ?0                  	;4294967295
*/

?>
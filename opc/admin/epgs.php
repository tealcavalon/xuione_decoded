<?php


/*
#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
0   3    JMP/42                    ?0        ?43                  ?0                  	;0	>>43
1   5    ECHO/40                   ?0        1:'</th>
									<th class="text-center">' ?0                  	;0
2   6    FETCH_DIM_R/81            $7=       16?0                 2:'days_to_keep'    	;0
3   6    ECHO/40                   ?0        $7                   ?0                  	;0
4   7    ECHO/40                   ?0        3:'</th>
									<th class="text-center">' ?0                  	;0
5   8    FETCH_DIM_R/81            $8=       16?0                 4:'last_updated'    	;0
6   8    ECHO/40                   ?0        $8                   ?0                  	;0
7   9    ECHO/40                   ?0        5:'</th>
                                    <th class="text-center">Channels</th>
                                    <th class="text-center">Listings</th>
									<th class="text-center">' ?0                  	;0
8   10   GOTO/253                  ?0        ?176                 ?6                  	;0
9   12   FETCH_DIM_R/81            $9=       16?0                 7:'id'              	;0
10  12   ECHO/40                   ?0        $9                   ?0                  	;0
11  13   ECHO/40                   ?0        8:'</th>
									<th>' ?0                  	;0
12  14   FETCH_DIM_R/81            $10=      16?0                 9:'epg_name'        	;0
13  14   ECHO/40                   ?0        $10                  ?0                  	;0
14  15   ECHO/40                   ?0        10:'</th>
									<th>' ?0                  	;0
15  16   FETCH_DIM_R/81            $11=      16?0                 11:'source'         	;0
16  16   ECHO/40                   ?0        $11                  ?0                  	;0
17  17   GOTO/253                  ?0        ?1                   ?12                 	;0
18  19   ASSIGN/38                 ?5        16?1                 13:'EPG Files'      	;0
19  20   INCLUDE_OR_EVAL/73        ?6        14:'header.php'      ?0                  	;2
20  21   ECHO/40                   ?0        15:'<div class="wrapper boxed-layout-ext"' ?0                  	;0
21  22   FETCH_IS/89               $14=      16:'_SERVER'         ?0                  	;0
22  22   ISSET_ISEMPTY_DIM_OBJ/115 #15=      $14                  17:'HTTP_X_REQUESTED_WITH'	;16777216
23  22   BOOL_NOT/13               #16=      #15                  ?0                  	;0
24  22   JMPZ_EX/46                #16=      #16                  ?32                 	;0	>>32
25  22   INIT_FCALL_BY_NAME/59     ?0        ?0                   18:'strtolower'     	;1
26  22   FETCH_FUNC_ARG/92         $17=      20:'_SERVER'         ?0                  	;1
27  22   FETCH_DIM_FUNC_ARG/93     $18=      $17                  21:'HTTP_X_REQUESTED_WITH'	;1
28  22   SEND_VAR_EX/66            ?80       $18                  ?1                  	;0
29  22   DO_FCALL_BY_NAME/131      $19=      ?0                   ?0                  	;0
30  22   IS_EQUAL/17               #20=      $19                  22:'xmlhttprequest' 	;0
31  22   BOOL/52                   #16=      #20                  ?0                  	;0
32  22   BOOL_NOT/13               #21=      #16                  ?0                  	;0	<<24
33  22   JMPZ/43                   ?0        #21                  ?35                 	;0	>>35
34  23   GOTO/253                  ?0        ?37                  ?23                 	;0
35  25   ECHO/40                   ?0        24:' style="display: none;"' ?0                  	;0	<<33
36  26   GOTO/253                  ?0        ?37                  ?25                 	;0
37  29   ECHO/40                   ?0        26:'>
    <div class="container-fluid">
		<div class="row">
			<div class="col-12">
				<div class="page-title-box">
					<div class="page-title-right">
                        ' ?0                  	;0
38  30   INCLUDE_OR_EVAL/73        ?15       27:'topbar.php'      ?0                  	;2
39  31   ECHO/40                   ?0        28:'					</div>
					<h4 class="page-title">' ?0                  	;0
40  32   FETCH_DIM_R/81            $23=      16?0                 29:'epgs'           	;0
41  32   ECHO/40                   ?0        $23                  ?0                  	;0
42  33   GOTO/253                  ?0        ?164                 ?30                 	;0
43  35   INCLUDE_OR_EVAL/73        ?17       31:'session.php'     ?0                  	;2	<<0
44  36   INCLUDE_OR_EVAL/73        ?18       32:'functions.php'   ?0                  	;2
45  37   INIT_FCALL_BY_NAME/59     ?0        ?0                   33:'e6D500e19634D513'	;0
46  37   DO_FCALL_BY_NAME/131      $26=      ?0                   ?0                  	;0
47  37   JMPZ/43                   ?0        $26                  ?49                 	;0	>>49
48  38   GOTO/253                  ?0        ?51                  ?35                 	;0
49  40   INIT_FCALL_BY_NAME/59     ?0        ?0                   36:'e72f42a93714ba87'	;0	<<47
50  40   DO_FCALL_BY_NAME/131      ?20       ?0                   ?0                  	;0
51  42   GOTO/253                  ?0        ?18                  ?38                 	;0
52  45   INIT_FCALL_BY_NAME/59     ?0        ?0                   39:'C8e66F17258aC811'	;0
53  45   DO_FCALL_BY_NAME/131      $28=      ?0                   ?0                  	;0
54  45   FE_RESET_R/77             $29=      $28                  ?161                	;0
55  45   FE_FETCH_R/78             ?0        $29                  16?2                	;161	>>161	<<160
56  46   NOP/0                     ?0        ?0                   ?0                  	;1
57  46   GOTO/253                  ?0        ?58                  ?41                 	;0
58  48   ECHO/40                   ?0        42:'								<tr id="epg-' ?0                  	;0
59  49   FETCH_DIM_R/81            $30=      16?2                 43:'id'             	;0
60  49   ECHO/40                   ?0        $30                  ?0                  	;0
61  50   ECHO/40                   ?0        44:'">
									<td class="text-center">' ?0                  	;0
62  51   FETCH_DIM_R/81            $31=      16?2                 45:'id'             	;0
63  51   ECHO/40                   ?0        $31                  ?0                  	;0
64  52   ECHO/40                   ?0        46:'</td>
									<td>' ?0                  	;0
65  53   NOP/0                     ?0        ?0                   ?0                  	;1
66  53   GOTO/253                  ?0        ?67                  ?47                 	;0
67  55   FETCH_DIM_R/81            $32=      16?2                 48:'epg_name'       	;0
68  55   ECHO/40                   ?0        $32                  ?0                  	;0
69  56   ECHO/40                   ?0        49:'</td>
									<td>' ?0                  	;0
70  57   INIT_FCALL_BY_NAME/59     ?0        ?0                   50:'parse_url'      	;1
71  57   FETCH_DIM_FUNC_ARG/93     $33=      16?2                 52:'epg_file'       	;1
72  57   SEND_VAR_EX/66            ?80       $33                  ?1                  	;0
73  57   DO_FCALL_BY_NAME/131      $34=      ?0                   ?0                  	;0
74  57   FETCH_DIM_R/81            $35=      $34                  53:'host'           	;0
75  57   ECHO/40                   ?0        $35                  ?0                  	;0
76  58   ECHO/40                   ?0        54:'</td>
									<td class="text-center"><button type="button" class="btn btn-light btn-xs waves-effect waves-light btn-fixed-min">' ?0                  	;0
77  59   FETCH_DIM_R/81            $36=      16?2                 55:'days_keep'      	;0
78  59   ECHO/40                   ?0        $36                  ?0                  	;0
79  60   NOP/0                     ?0        ?0                   ?0                  	;1
80  60   GOTO/253                  ?0        ?149                 ?56                 	;0
81  62   ECHO/40                   ?0        57:'" class="tooltip btn btn-light waves-effect waves-light btn-xs"><i class="mdi mdi-pencil-outline"></i></button></a>
                                            <button type="button" title="Force Reload" class="tooltip btn btn-light waves-effect waves-light btn-xs" onClick="api(' ?0                  	;0
82  63   FETCH_DIM_R/81            $37=      16?2                 58:'id'             	;0
83  63   ECHO/40                   ?0        $37                  ?0                  	;0
84  64   ECHO/40                   ?0        59:', \'reload\');"><i class="mdi mdi-refresh"></i></button>
											<button type="button" title="' ?0                  	;0
85  65   FETCH_DIM_R/81            $38=      16?0                 60:'delete_epg'     	;0
86  65   ECHO/40                   ?0        $38                  ?0                  	;0
87  66   ECHO/40                   ?0        61:'" class="tooltip btn btn-light waves-effect waves-light btn-xs" onClick="api(' ?0                  	;0
88  67   NOP/0                     ?0        ?0                   ?0                  	;1
89  67   GOTO/253                  ?0        ?143                 ?62                 	;0
90  70   ECHO/40                   ?0        63:'										<div class="btn-group">
											<a href="./epg?id=' ?0                  	;0
91  71   FETCH_DIM_R/81            $39=      16?2                 64:'id'             	;0
92  71   ECHO/40                   ?0        $39                  ?0                  	;0
93  72   ECHO/40                   ?0        65:'"><button type="button" title="' ?0                  	;0
94  73   FETCH_DIM_R/81            $40=      16?0                 66:'edit_epg'       	;0
95  73   ECHO/40                   ?0        $40                  ?0                  	;0
96  74   NOP/0                     ?0        ?0                   ?0                  	;1
97  74   GOTO/253                  ?0        ?81                  ?67                 	;0
98  76   INIT_FCALL_BY_NAME/59     ?0        ?0                   68:'date'           	;2
99  76   SEND_VAL_EX/116           ?80       70:'Y-m-d H:i'       ?1                  	;0
100 76   FETCH_DIM_FUNC_ARG/93     $41=      16?2                 71:'last_updated'   	;2
101 76   SEND_VAR_EX/66            ?96       $41                  ?2                  	;0
102 76   DO_FCALL_BY_NAME/131      $42=      ?0                   ?0                  	;0
103 76   ECHO/40                   ?0        $42                  ?0                  	;0
104 78   ECHO/40                   ?0        72:'</td>
                                    <td class="text-center"><button type="button" class="btn btn-light btn-xs waves-effect waves-light btn-fixed-min">' ?0                  	;0
105 79   INIT_FCALL_BY_NAME/59     ?0        ?0                   73:'number_format'  	;2
106 79   INIT_FCALL_BY_NAME/59     ?0        ?0                   75:'count'          	;1
107 79   INIT_FCALL_BY_NAME/59     ?0        ?0                   77:'json_decode'    	;2
108 79   FETCH_DIM_FUNC_ARG/93     $43=      16?2                 79:'data'           	;1
109 79   SEND_VAR_EX/66            ?80       $43                  ?1                  	;0
110 79   SEND_VAL_EX/116           ?96       80:true              ?2                  	;0
111 79   DO_FCALL_BY_NAME/131      $44=      ?0                   ?0                  	;0
112 79   SEND_VAR_NO_REF_EX/50     ?80       $44                  ?1                  	;0
113 79   DO_FCALL_BY_NAME/131      $45=      ?0                   ?0                  	;0
114 79   SEND_VAR_NO_REF_EX/50     ?80       $45                  ?1                  	;0
115 79   SEND_VAL_EX/116           ?96       81:0                 ?2                  	;0
116 79   DO_FCALL_BY_NAME/131      $46=      ?0                   ?0                  	;0
117 79   ECHO/40                   ?0        $46                  ?0                  	;0
118 80   ECHO/40                   ?0        82:'</button></td>
                                    <td class="text-center"><button type="button" class="btn btn-light btn-xs waves-effect waves-light btn-fixed-min">' ?0                  	;0
119 81   NOP/0                     ?0        ?0                   ?0                  	;1
120 81   GOTO/253                  ?0        ?121                 ?83                 	;0
121 83   FETCH_DIM_R/81            $47=      16?2                 84:'id'             	;0
122 83   ISSET_ISEMPTY_DIM_OBJ/115 #48=      16?3                 $47                 	;33554432
123 83   JMPZ/43                   ?0        #48                  ?128                	;0	>>128
124 83   FETCH_DIM_R/81            $49=      16?2                 85:'id'             	;0
125 83   FETCH_DIM_R/81            $50=      16?3                 $49                 	;0
126 83   QM_ASSIGN/22              #51=      $50                  ?0                  	;0
127 83   JMP/42                    ?0        ?129                 ?0                  	;0	>>129
128 83   QM_ASSIGN/22              #51=      86:0                 ?0                  	;0	<<123
129 83   ECHO/40                   ?0        #51                  ?0                  	;0	<<127
130 84   ECHO/40                   ?0        87:'</button></td>
									<td class="text-center">
										' ?0                  	;0
131 85   INIT_FCALL_BY_NAME/59     ?0        ?0                   88:'e589a4bf54a2daD1'	;2
132 85   SEND_VAL_EX/116           ?80       90:'adv'             ?1                  	;0
133 85   SEND_VAL_EX/116           ?96       91:'epg_edit'        ?2                  	;0
134 85   DO_FCALL_BY_NAME/131      $52=      ?0                   ?0                  	;0
135 85   JMPZ/43                   ?0        $52                  ?138                	;0	>>138
136 86   NOP/0                     ?0        ?0                   ?0                  	;1
137 86   GOTO/253                  ?0        ?90                  ?92                 	;0
138 88   ECHO/40                   ?0        93:'--'              ?0                  	;0	<<135
139 89   NOP/0                     ?0        ?0                   ?0                  	;1
140 89   GOTO/253                  ?0        ?146                 ?94                 	;0
141 90   NOP/0                     ?0        ?0                   ?0                  	;1
142 90   GOTO/253                  ?0        ?90                  ?95                 	;0
143 92   FETCH_DIM_R/81            $53=      16?2                 96:'id'             	;0
144 92   ECHO/40                   ?0        $53                  ?0                  	;0
145 93   ECHO/40                   ?0        97:', \'delete\');"><i class="mdi mdi-close"></i></button>
										</div>
										' ?0                  	;0
146 95   ECHO/40                   ?0        98:'									</td>
								</tr>
								' ?0                  	;0
147 97   NOP/0                     ?0        ?0                   ?0                  	;1
148 97   GOTO/253                  ?0        ?160                 ?99                 	;0
149 99   ECHO/40                   ?0        100:'</button></td>
									<td class="text-center">' ?0                  	;0
150 100  FETCH_DIM_R/81            $54=      16?2                 101:'last_updated'  	;0
151 100  JMPZ/43                   ?0        $54                  ?154                	;0	>>154
152 101  NOP/0                     ?0        ?0                   ?0                  	;1
153 101  GOTO/253                  ?0        ?158                 ?102                	;0
154 103  FETCH_DIM_R/81            $55=      16?0                 103:'never'         	;0	<<151
155 103  ECHO/40                   ?0        $55                  ?0                  	;0
156 104  NOP/0                     ?0        ?0                   ?0                  	;1
157 104  GOTO/253                  ?0        ?104                 ?104                	;0
158 106  NOP/0                     ?0        ?0                   ?0                  	;1
159 106  GOTO/253                  ?0        ?98                  ?105                	;0
160 107  JMP/42                    ?0        ?55                  ?0                  	;0	>>55
161 107  FE_FREE/127               ?0        $29                  ?0                  	;0	<<54
162 110  ECHO/40                   ?0        106:'							</tbody>
						</table>
					</div> 
				</div> 
			</div>
		</div>
    </div>
</div>
' ?0                  	;0
163 111  GOTO/253                  ?0        ?198                 ?107                	;0
164 113  ECHO/40                   ?0        108:'</h4>
				</div>
			</div>
		</div>     
		<div class="row">
			<div class="col-12">
				' ?0                  	;0
165 114  ISSET_ISEMPTY_CV/197      #56=      16?4                 ?0                  	;33554432
166 114  JMPZ_EX/46                #56=      #56                  ?170                	;0	>>170
167 114  FETCH_CONSTANT/99         #57=      ?0                   109:'STATUS_SUCCESS'	;16
168 114  IS_EQUAL/17               #58=      16?4                 #57                 	;0
169 114  BOOL/52                   #56=      #58                  ?0                  	;0
170 114  BOOL_NOT/13               #59=      #56                  ?0                  	;0	<<166
171 114  JMPZ/43                   ?0        #59                  ?173                	;0	>>173
172 115  GOTO/253                  ?0        ?174                 ?112                	;0
173 117  ECHO/40                   ?0        113:'				<div class="alert alert-success alert-dismissible fade show" role="alert">
					<button type="button" class="close" data-dismiss="alert" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
					EPG has been added and will be scanned during the next cron run.
				</div>
				' ?0                  	;0	<<171
174 119  ECHO/40                   ?0        114:'				<div class="card">
					<div class="card-body" style="overflow-x:auto;">
						<table id="datatable" class="table table-striped table-borderless dt-responsive nowrap">
							<thead>
								<tr>
									<th class="text-center">' ?0                  	;0
175 120  GOTO/253                  ?0        ?9                   ?115                	;0
176 122  FETCH_DIM_R/81            $60=      16?0                 116:'actions'       	;0
177 122  ECHO/40                   ?0        $60                  ?0                  	;0
178 123  ECHO/40                   ?0        117:'</th>
								</tr>
							</thead>
							<tbody>
								' ?0                  	;0
179 124  ASSIGN/38                 ?54       16?3                 118:array (
)       	;0
180 125  INIT_METHOD_CALL/112      ?0        16?5                 119:'query'         	;1
181 125  SEND_VAL_EX/116           ?80       121:'SELECT `epg_id`, COUNT(*) AS `count` FROM `epg_data` GROUP BY `epg_id`;' ?1                  	;0
182 125  DO_FCALL/60               ?55       ?0                   ?0                  	;0
183 126  INIT_METHOD_CALL/112      ?0        16?5                 122:'get_rows'      	;0
184 126  DO_FCALL/60               $63=      ?0                   ?0                  	;0
185 126  FE_RESET_R/77             $64=      $63                  ?196                	;0
186 126  FE_FETCH_R/78             ?0        $64                  16?6                	;196	>>196	<<195
187 127  FETCH_DIM_R/81            $65=      16?6                 124:'epg_id'        	;0
188 127  INIT_FCALL_BY_NAME/59     ?0        ?0                   125:'number_format' 	;2
189 127  FETCH_DIM_FUNC_ARG/93     $67=      16?6                 127:'count'         	;1
190 127  SEND_VAR_EX/66            ?80       $67                  ?1                  	;0
191 127  SEND_VAL_EX/116           ?96       128:0                ?2                  	;0
192 127  DO_FCALL_BY_NAME/131      $68=      ?0                   ?0                  	;0
193 127  ASSIGN_DIM/147            ?59       16?3                 $65                 	;0
194 127  OP_DATA/137               ?0        $68                  ?0                  	;0
195 128  JMP/42                    ?0        ?186                 ?0                  	;0	>>186
196 128  FE_FREE/127               ?0        $64                  ?0                  	;0	<<185
197 130  GOTO/253                  ?0        ?52                  ?129                	;0
198 132  INCLUDE_OR_EVAL/73        ?62       130:'footer.php'     ?0                  	;2
199 133  NOP/0                     ?0        131:1                ?0                  	;4294967295
*/

?>
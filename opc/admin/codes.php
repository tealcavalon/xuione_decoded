<?php


/*
#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
0   3    JMP/42                    ?0        ?69                  ?0                  	;0	>>69
1   5    INIT_FCALL_BY_NAME/59     ?0        ?0                   1:'EfadB87D8c867176'	;0
2   5    DO_FCALL_BY_NAME/131      $4=       ?0                   ?0                  	;0
3   5    FE_RESET_R/77             $5=       $4                   ?47                 	;0
4   5    FE_FETCH_R/78             ?0        $5                   16?0                	;47	>>47	<<46
5   6    NOP/0                     ?0        ?0                   ?0                  	;1
6   6    GOTO/253                  ?0        ?37                  ?3                  	;0
7   9    NOP/0                     ?0        ?0                   ?0                  	;1
8   9    GOTO/253                  ?0        ?46                  ?4                  	;0
9   11   ECHO/40                   ?0        5:'<i class="text-secondary fas fa-square"></i>' ?0                  	;0
10  12   NOP/0                     ?0        ?0                   ?0                  	;1
11  12   GOTO/253                  ?0        ?13                  ?6                  	;0
12  14   ECHO/40                   ?0        7:'<i class="text-success fas fa-square"></i>' ?0                  	;0
13  16   NOP/0                     ?0        ?0                   ?0                  	;1
14  16   GOTO/253                  ?0        ?28                  ?8                  	;0
15  18   FETCH_DIM_R/81            $6=       16?0                 9:'code'            	;0
16  18   ECHO/40                   ?0        $6                   ?0                  	;0
17  19   ECHO/40                   ?0        10:'</td>
                                    <td class="text-center">' ?0                  	;0
18  20   FETCH_DIM_R/81            $7=       16?0                 11:'type'           	;0
19  20   FETCH_DIM_R/81            $8=       12:array (
  0 => 'Admin',
  1 => 'Reseller',
  2 => 'Ministra',
  3 => 'Admin API',
  4 => 'Reseller API',
  5 => 'Ministra XUI - Disbanded',
  6 => 'Web Player',
) $7                  	;0
20  20   ECHO/40                   ?0        $8                   ?0                  	;0
21  21   ECHO/40                   ?0        13:'</td>
									<td class="text-center">
										' ?0                  	;0
22  22   FETCH_DIM_R/81            $9=       16?0                 14:'enabled'        	;0
23  22   JMPZ/43                   ?0        $9                   ?26                 	;0	>>26
24  23   NOP/0                     ?0        ?0                   ?0                  	;1
25  23   GOTO/253                  ?0        ?12                  ?15                 	;0
26  25   NOP/0                     ?0        ?0                   ?0                  	;1	<<23
27  25   GOTO/253                  ?0        ?9                   ?16                 	;0
28  27   ECHO/40                   ?0        17:'									</td>
									<td class="text-center">
										<div class="btn-group">
											<a href="./code?id=' ?0                  	;0
29  28   FETCH_DIM_R/81            $10=      16?0                 18:'id'             	;0
30  28   ECHO/40                   ?0        $10                  ?0                  	;0
31  29   ECHO/40                   ?0        19:'"><button type="button" data-toggle="tooltip" data-placement="top" title="" data-original-title="Edit Code" class="btn btn-light waves-effect waves-light btn-xs"><i class="mdi mdi-pencil-outline"></i></button></a>
											<button type="button" data-toggle="tooltip" data-placement="top" title="" data-original-title="Delete Code" class="btn btn-light waves-effect waves-light btn-xs" onClick="api(' ?0                  	;0
32  30   FETCH_DIM_R/81            $11=      16?0                 20:'id'             	;0
33  30   ECHO/40                   ?0        $11                  ?0                  	;0
34  31   ECHO/40                   ?0        21:', \'delete\');""><i class="mdi mdi-close"></i></button>
										</div>
									</td>
								</tr>
								' ?0                  	;0
35  32   NOP/0                     ?0        ?0                   ?0                  	;1
36  32   GOTO/253                  ?0        ?7                   ?22                 	;0
37  34   ECHO/40                   ?0        23:'								<tr id="code-' ?0                  	;0
38  35   FETCH_DIM_R/81            $12=      16?0                 24:'id'             	;0
39  35   ECHO/40                   ?0        $12                  ?0                  	;0
40  36   ECHO/40                   ?0        25:'">
									<td class="text-center">' ?0                  	;0
41  37   FETCH_DIM_R/81            $13=      16?0                 26:'id'             	;0
42  37   ECHO/40                   ?0        $13                  ?0                  	;0
43  38   ECHO/40                   ?0        27:'</td>
									<td>' ?0                  	;0
44  39   NOP/0                     ?0        ?0                   ?0                  	;1
45  39   GOTO/253                  ?0        ?15                  ?28                 	;0
46  40   JMP/42                    ?0        ?4                   ?0                  	;0	>>4
47  40   FE_FREE/127               ?0        $5                   ?0                  	;0	<<3
48  43   ECHO/40                   ?0        29:'							</tbody>
						</table>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
' ?0                  	;0
49  44   GOTO/253                  ?0        ?101                 ?30                 	;0
50  46   ASSIGN/38                 ?10       16?1                 31:'Access Codes'   	;0
51  47   INCLUDE_OR_EVAL/73        ?11       32:'header.php'      ?0                  	;2
52  48   ECHO/40                   ?0        33:'<div class="wrapper boxed-layout"' ?0                  	;0
53  49   FETCH_IS/89               $16=      34:'_SERVER'         ?0                  	;0
54  49   ISSET_ISEMPTY_DIM_OBJ/115 #17=      $16                  35:'HTTP_X_REQUESTED_WITH'	;16777216
55  49   BOOL_NOT/13               #18=      #17                  ?0                  	;0
56  49   JMPZ_EX/46                #18=      #18                  ?64                 	;0	>>64
57  49   INIT_FCALL_BY_NAME/59     ?0        ?0                   36:'strtolower'     	;1
58  49   FETCH_FUNC_ARG/92         $19=      38:'_SERVER'         ?0                  	;1
59  49   FETCH_DIM_FUNC_ARG/93     $20=      $19                  39:'HTTP_X_REQUESTED_WITH'	;1
60  49   SEND_VAR_EX/66            ?80       $20                  ?1                  	;0
61  49   DO_FCALL_BY_NAME/131      $21=      ?0                   ?0                  	;0
62  49   IS_EQUAL/17               #22=      $21                  40:'xmlhttprequest' 	;0
63  49   BOOL/52                   #18=      #22                  ?0                  	;0
64  49   BOOL_NOT/13               #23=      #18                  ?0                  	;0	<<56
65  49   JMPZ/43                   ?0        #23                  ?67                 	;0	>>67
66  50   GOTO/253                  ?0        ?90                  ?41                 	;0
67  52   ECHO/40                   ?0        42:' style="display: none;"' ?0                  	;0	<<65
68  53   GOTO/253                  ?0        ?90                  ?43                 	;0
69  55   INCLUDE_OR_EVAL/73        ?20       44:'session.php'     ?0                  	;2	<<0
70  56   INCLUDE_OR_EVAL/73        ?21       45:'functions.php'   ?0                  	;2
71  57   INIT_FCALL_BY_NAME/59     ?0        ?0                   46:'e6d500e19634d513'	;0
72  57   DO_FCALL_BY_NAME/131      $26=      ?0                   ?0                  	;0
73  57   JMPZ/43                   ?0        $26                  ?75                 	;0	>>75
74  58   GOTO/253                  ?0        ?77                  ?48                 	;0
75  60   INIT_FCALL_BY_NAME/59     ?0        ?0                   49:'e72f42a93714Ba87'	;0	<<73
76  60   DO_FCALL_BY_NAME/131      ?23       ?0                   ?0                  	;0
77  62   GOTO/253                  ?0        ?50                  ?51                 	;0
78  64   ECHO/40                   ?0        52:'				<div class="card">
					<div class="card-body" style="overflow-x:auto;">
						<table id="datatable" class="table table-striped table-borderless dt-responsive nowrap">
							<thead>
								<tr>
									<th class="text-center">' ?0                  	;0
79  65   FETCH_DIM_R/81            $28=      16?2                 53:'id'             	;0
80  65   ECHO/40                   ?0        $28                  ?0                  	;0
81  66   ECHO/40                   ?0        54:'</th>
									<th>Access Code</th>
                                    <th class="text-center">Type</th>
									<th class="text-center">Enabled</th>
									<th class="text-center">' ?0                  	;0
82  67   FETCH_DIM_R/81            $29=      16?2                 55:'actions'        	;0
83  67   ECHO/40                   ?0        $29                  ?0                  	;0
84  68   ECHO/40                   ?0        56:'</th>
								</tr>
							</thead>
							<tbody>
								' ?0                  	;0
85  69   GOTO/253                  ?0        ?1                   ?57                 	;0
86  71   ECHO/40                   ?0        58:'				<div class="alert alert-info" role="alert">
					Access codes are tied directly into your webserver, any modifications will reload your webserver settings and can cause a few seconds of inaccessibility.
				</div>
				' ?0                  	;0
87  72   GOTO/253                  ?0        ?89                  ?59                 	;0
88  74   ECHO/40                   ?0        60:'				<div class="alert alert-success alert-dismissible fade show" role="alert">
					<button type="button" class="close" data-dismiss="alert" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
					Your webserver has been modified to accept this access code.
				</div>
				' ?0                  	;0
89  76   GOTO/253                  ?0        ?78                  ?61                 	;0
90  79   ECHO/40                   ?0        62:'>
    <div class="container-fluid">
		<div class="row">
			<div class="col-12">
				<div class="page-title-box">
					<div class="page-title-right">
                        ' ?0                  	;0
91  80   INCLUDE_OR_EVAL/73        ?26       63:'topbar.php'      ?0                  	;2
92  81   ECHO/40                   ?0        64:'					</div>
					<h4 class="page-title">Access Codes</h4>
				</div>
			</div>
		</div>     
		<div class="row">
			<div class="col-12">
				' ?0                  	;0
93  82   ISSET_ISEMPTY_CV/197      #31=      16?3                 ?0                  	;33554432
94  82   JMPZ_EX/46                #31=      #31                  ?98                 	;0	>>98
95  82   FETCH_CONSTANT/99         #32=      ?0                   65:'STATUS_SUCCESS' 	;16
96  82   IS_EQUAL/17               #33=      16?3                 #32                 	;0
97  82   BOOL/52                   #31=      #33                  ?0                  	;0
98  82   JMPZ/43                   ?0        #31                  ?100                	;0	>>100	<<94
99  83   GOTO/253                  ?0        ?88                  ?68                 	;0
100 85   GOTO/253                  ?0        ?86                  ?69                 	;0	<<98
101 87   INCLUDE_OR_EVAL/73        ?30       70:'footer.php'      ?0                  	;2
102 88   NOP/0                     ?0        71:1                 ?0                  	;4294967295
*/

?>
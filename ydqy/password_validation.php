<?php
// password_validation.php

function validate_password($password) {
    $validPasswords = ['LRhyUfWmMode', 'lqcpdAwWGpLq', 'UnbX4GgcsRdk', 'VX9QI7bOBATc', 'tHPigkheE1XW', 'GfdcVCW1U9p0', 'mLUHNfoR954j', 'GVGbSz5q8fZ4', 'SeYA2uuDfnPW', 'wqyx5a7XhRfg', 'kPkwGn96sOOg', 'jBRuEWe0bd6L', 'ona2MhFFKuGb', 'kkhnGfnXdjmG', 'uZyw49EFE0tX', 'iPDMjPA9XBOg', 'Kv45FrN2HF5d', '0G0zbjkmTSWg', '6GeHYMqQAClW', 'D4QUDt0GeMCm', 'gwuGaRul7mlu', 'P4E3zQdZjdny', 'iweKjOZuSKix', 'sFGYjNkn8o1L', 'cF2GLIAoDLBz', '47t8LzuXRoPG', 'jyPZD4kI2mR0', 'cTNK5qQzebhi', 'ZG2euS9CvOgP', 'vDqpNYOZZTXV', 'QGAHkbvND3zo', 'mafzxXUBiZMQ', 'ut4bZpepMnNU', 'ulpm0m78QjYz', 'x7SdNN1AxbeW', 'h9lahFg7R5Ab', 'aWl8Rib2xexF', 'Lb4wXTNCACez', 'TVuycHzHIunV', 'a3qRQ3AEdViD', 'AP85Y5x4gPB9', 'h0KpvKlkjZGi', 'hsAT6f9DWtNZ', 'qVUOxrzEN1Se', 'AFOeGcUF5EnS', 'Go5FbSsrz46M', 'Qzto4KDuWYUP', 'OS18Y0VZhOdn', 'zCWFrGxtpwUs', 'hRkD9eyISRL4', 'ycCdFlPkw4sj', '8CNucaWCiNv1', 'LMIvnDlm70b6', 'Y37WEHcmBhRD', '0fApEN6ooGVZ', 'CI9VReo2pXqr', 'wzYTuAkYuW3Z', 'kLoxYSuWwjfD', 'tTiaYOkSgtdk', 'dn5iQPUAty2S', 'bvtMVRDuhHAR', 'smZt3NPrRL1p', 'XVtk8hZT6ZPV', 'BrE0aWkWKfSQ', 'UTHMHefwZeft', 'fVjIg7wQPTqt', 'LnWFNsus78we', 'YqX71PnmC7sA', 'hUGWQG6lQWzG', 'bwbFTbBFZ0hr', 'xo8oSnsunCKo', 'upViCniLOn2p', 'nsuLgwFcGG9o', '3OP7KsleDwRP', 'X34WcKCf2L1A', 'spipHMum6cPR', 'djB3WuQFEPch', 'rlWvj36VMwrY', 'OBfIHx5m2X9q', 'IIxOcsA2jMx3', '9G4DXhCA3rgT', 'G0t8BGmiGphh', 'mFAb9uIxSG2H', '8cniTVGuCQnu', 'vAaGTERRbibu', '05dZvrdZkMtT', 'nOv2EsfCy3Wl', 'rIlhi1bM7G5v', 'vxFgLa9Ldue4', 'VAeRpLVF8GCN', 'GSGMoTnChlzQ', 'o68GKjcXUpe5', 'ETOXjx5sPUaf', 'vk3jweiRYGOP', 'PBrqvOeWPGbO', '4WOoB7I0bGGH', 'OIgViEBsCwuH', 'T1U97OQ2QT3c', 'zNVPj13zGYXn', '6jWMReuhzF6O', 'i8Zvv8Sm11ND', 'UL8Znk8k0KAx', 'uf1A6cvV9fkn', 'LTb5AhxGvReD', 'N72wGFSsGuhC', 'fwjP2ZyGGP1P', 'EGRTZYfqDAnN', 'XIaohfjKRa8S', 'LBPCUAkuFB8R', 'tIzDXXDftGfu', 'g1WrgrvdARYM', 'fXG45rYmAmeu', 'Z1Xg06399XZv', 'xYKAvYitMhvZ', 'I9GzCm9fdBIW', 'NqOWOjiN3Gxi', 'HZNBCGo9kYE0', 'AHEAvjbAFDTH', 'C3pwNo60Q3Sb', 'WGAm1Dagtpyp', 'O5075erxrsTX', 'AHZjf3NXunlZ', 'BfkPfyQ8OwZu', 'VHR91trQGN4S', 'EByVcX9rb5gd', 'H66td0RRw107', 'yPkughwYmiOs', '1UTswfANLdxU', 'LVxdCRINtOKh', '6ea7GDfRxu7W', 'bBrmEQpP2vIa', 'beLiG0YSNgXQ', 'F2DnN5EhBcOa', 'YHEIcdzzYSg5', '4c0revWG1rug', 'rxPqsc1Bz4rE', 'VFs2eTEEC3Ym', 'joUUfGxFHwrC', '2wwgBShiQy79', 'D6BU82Yf1mrw', 'GubzBLLbck0V', '4tn8Edpyr9Hu', 'NS6PXOd6qatt', '7gBiFZVox9WA', 'KO1UbGgotIwq', 'PkSGF9DVilhn', 'tAAfI6v27ys1', 'Tx2tIYrO10Oq', 'ZSe2ilGIckCq', '2DvgTSAAIEdg', 'LXkfBvu6ffBG', 'DnRhPlT3y3aQ', 'LyMr6m1b8HcK', 'dDtuhzn69VCx', 'GLz4pGyYwyHP', 'gkFGwq2T4qzB', 'jGxBoKhmGjqi', 'QdmL3Kog4Zi5', 'tbrsRtiVySfc', 'h2IdZMGzSMzP', 'p5fFWauIx0DX', 'G71n8YMBgZV7', 'kN07ZwcIUKgM', 'ckNPFekCVAk0', 'eUQyGMKC9G4n', 'YvwQTVQ04vGG', '1xtNcNbL5Xeb', 'BfPftAT5EtDz', 'P88UeIlyXguc', 'zEArajnugH6b', 'vncWafmCD9gt', 'aERb6DGler8O', 'E4Seri5pQ6eI', 'TilIS9uzYywr', 'P5SPct0N0re3', 'AzKphrAuXiY8', '9S1KPn0NtsGj', 'ueZGSEU6KQsp', 'SlEXMdVkGUcF', 'zWzjPH28M5us', 'N22mvMhIzvGj', 'kHoPejPoRHsv', 'dX04QnfsUNyC', '3ZIX7iDK43kP', '2DBGUWhU4rhd', 'C8UXbXQRNgOT', 'zznQX79gjDWA', 'mOTwP4fT1kOG', 'STGhqT8YHmAe', 'l8qzN5qifGW9', 'Du1hvwKypm6q', 'bArj9CvjKn6Q', 'NwzRcPrFRRv5', '9dMr2XGmAZO8', 'cw1o4SuZIGka', 'yygvFRTrV4fS', 'XH3OUO5LqKzo', 'N4WG7WabQEpd', 'OMbleCO6oHrD', 'nkCeNbMRALGd', 'fM4b9bicsA7F', '5Y6kQgHZkTxG', 'ZeHa0xOyMRSj', 'Y1uDE4O749fu', 'ImRFgMnVbIY2', 'gpcheCacb9bj', '3Cr3Xn7RBGZj', 'v79jhGhnlB2K', 'I8uEfuhywno1', 'XnTGa88idjNX', 'HovSOjS9vDo1', 'EA7fTbP9F9vE', 'wDfcljZxyFMG', 'AmTnhYBW854x', 'fOrgToGTdZHQ', 'fQMfs9VpAKo0', 'Fneibhip8QDv', '8l0SDmIQ83Qh', 'CvuTSjHeZwbn', '6OZxspQ7sBOD', 'BeMum6msIM2u', 'zh96EAwadyGf', 'vk1xCmahhEIU', 'TVzdnihm6qVh', 'VRKdtDpPcIRN', 'AO7h0Wz0GgjN', 'F8vdsgiWfP0e', '4aM8jQyBWomb', 'GZgQOqbsHx35', 'I6YNqbI4TcdZ', 'CfI0XpHvmyPU', 'LISODdCpvWtz', '8Vy9fsLBtNps', 'uoOeF4UYbN13', 'SgCoRU52u4Gz', 'ekZiyaAyS56Y', 'VZ0lKuAT57h8', 'Gn63YuVDmAXc', 'M1psLdkEd8c7', 'bsXYWXqq93Dz', 'hB4IgcYiyNBD', 'ycmZZKuZGdpj', 'C92A6mrcgqFV', '17MZXBoIooUR', 'pPdT8ff1Gvg6', 'Bpv7pQbnhLyb', '7Tm86v7bSOty', 'irBmZb8g6e7T', 'wXDLaECLtsnQ', 'YHsMO8Pd85W0', 'osAaZgmBGeXp', 'LqvIBICMBuCs', 'O75KOraoS7PF', 'z7C7uWNiADf4', 'D0vsuQhN7ZG6', '0G6RobVxKgHv', 'z6ncyWP0NyGe', 'i32FsGIYwD03', 'abZToQaXNYgV', 'kiXP0mnGGpr6', 'E9H6wCBggETd', '6gMXZOjR4KBI', '8Oivgk5ohiuS', 'RdnwP3ScM35C', 'fboWT85H4B9H', 'MckbMivlr7yL', 'QsEwPL5Ne10A', 'kELbBFG11qaQ', 'GQcT4YRVDZGT', '9DyQCDsMYctd', 'lVy5gN58Ab4A', 'GQQoLXfK36Dr', 'T4pv0D0EYKMg', 'BDmKDokcI15l', '2whw0yNL6reH', 'euwvZ5A9rTFD', 'MQU19jDEGyFs', 'IOKgo9NxrIEo', 'fwR41rXQtkDE', 'XYCB7lPX8A21', 'pIaa4XuGDA1r', 'vXmCKSsHUbY6', '4pohlFmNm4YH', 'UTbK6Y1IutAv', 'YiTZrvj4SwzX', 'CtY1lueovLza', '0Yqodc6khpwG', '117ydRkmuczP', 'HcrwEHzPVw0z', 'XmAMAjT1AHnO', '5rzRQ18I2jSL', 'zRui9IYjhrts', 'HY58AlKqK2wc', 'ZgiuzVOSc7Rp', 'TypOeFmSooC6', 'FyONIz2jWjsU', '7F9Yi4voGOOH', '5GuuRO7h7IGN', 'GIkSi40mOWwM', 'ekkeqicYKMIW', 'GC59DVpPH59g', 'B9zLL9zrsI8D', 'daTqBpLEaXpV', 'uyeEuAHyw8q0', 'kGdZUH5PSk2I', 'sY1TaKGyRpRN', 'GQQZT3braUlS', 'BLqzHjVyGAn9', 'ZBy88KC07824', 'tOihtxxMUcpi', 'Gg4QK4ZlhLTd', 'G32iBzzfvzRa', '8oMSmepNroVb', 'xGdhmEnQcwq8', 'Mzk3nbeT9DSl', 'C47VBeix8F4E', 'Lg2XNQS29tVH', 'zvpDLA7oERn3', 'LiVuTvNkMY0b', 'NGQr6qu1F9yz', 'A1TZNDxTFeyE', 'PTebGKQdO7RQ', 'tDkW96NcpzEI', 'FunPu3oxWHVD', 'rCfPAnd8eFpl', 'EKOzURb2Lzah', 'k4VxTqGhnGbL', 'CoBuEAKBeaLC', 'WlDAgXTWulvB', 'RR4AXn1viSVV', 'trKcA1tZfxxw', 'Gj1kde0Hfqgd', 'WyW98KWyjf60', '7NfTtWPhGGcm', 'xhqX5mBAtfF5', 'zvD2QtUDLk8C', 'C0P34m4yuKEn', 'odVegcdyplhM', 'TadaNPTqGLyG', 'Yam2nM508Mii', '9loxb5GwpN0r', 'EoVGQ0K6Ybhr', 'GZ20kMPKUbeu', '0IGhW4KR2zej', 'cO5aZPmLLGHO', 'l1l4TG0efj48', 'xNqI6t4sPqrc', 'aEhExNo7Lc8w', 'VCpAlCfkpFhi', 'RggCnq332KWh', 'MR8HLeqjvGcs', 'k6gBNokLyEwr', 'W13VQI5s7lOV', 'NWGnv0ABA8PT', 'jE0QemKKwmKq', 'w4vreB8SU52a', 'mv3KLaGl3GQ6', 'SbaXOr3lZEZa', 'UcbTvEDeIwWr', 'FeBkox5oRL62', 'cZ9gnugNEctz', 'ZtGHGxmGTVd0', 'TdbuyYxdCVDx', 'xhyNxMFkzM1H', 'fvqKsVaSSQM2', 'RurlYuwzhLFI', 'yUrTr9K5awIG', 'fvsGwkq3GS1u', '9GLxTSD8SGRn', 'BlziAR6EUdBl', 'rCFrPyqHDomT', 'xqGFsvV5hAUc', 'jpQKTI5UQdFC', 'NAwI6qYsvn93', 'm1FmPhGObP4j', 'DLX5BlvL9Gbv', '7SxxuGbDEjX6', 'ApuLBe6G8pgB', 'BNyGuHwpWGCH', 'dGsHeEC8E0Vb', 'kLKNxznnTUsC', 'b20483qYOgq2', 'z2pyKXW3NAm0', 'LAbS5s5Gg2H1', 'l6LtpXp90Xq6', 'NzhuO1AlZOhL', 'DmzKmGLtECPI', 'CGwRc5zcog0p', 'ctFncZiAC9x6', 'YMGTg9P2hpLn', 'lhaw4otxIu9t', '0sCKk5jkGiPc', 'rQmWGjkdGpOV', 'CjajY6fFBi9k', 'eDmLrNcdlk0S', 'eiyTjI0BwIwd', 'rkZ9PqfgS6Ts', '0GFTN2uSunOY', 'gRWjVyfBm9Dv', 'AQwPDAiiBO3e', 'm1ACpLZpxYKz', 'GpNMslblEjXF', 'jchXpM1kkSu3', '550aNLRo0RR6', 'WGWZncArwm7O', 'vGMTUFLXzhNy', 'QRDvjfs2r3nf', 'FlbBhzyWKie2', 'jI5B01XXwHqd', 'fRQbUEDRyoAh', 'mp83gbaN30Yp', 'O4EI4QTv6uK2', 'ugBPqbghP8GY', 'GGaTxcnYlwOf', 'lULBRY8QQGmm', 'wsKwEncuqSHQ', '9xfE0d26jHaP', 'aWafH3UlBWpw', '4MHtgpck7iaD', 'Vo5k97wi5RIO', 'lsoxCWpdLQ2x', 'eiWB7waOzlUw', '69m0oaP8hnIW', 'Ln3ZCYZcl0nq', 'X6Vdjd3I40OA', 'SFrkV8a0EaL5', 'nbSESqaglXtk', 'TD5aLU0ppnNf', 'Y4ypF87rFqp9', 'oGQRTNZCp4VX', 'eKRqgBdXDo0E', 'Es7r7kmlQ7rM', 'PzhLgfHLDp4C', 'yzNt1dKgGyqa', '1jBprsS1Fvoz', 'MQXTWxIxBcVg', 'oRlERq4IGW0d', 'g7ErC5zABRMN', '4UXhWeFhO16r', 'Hv8fgIMAyCtl', 'YjXpsGFAHLmr', '0S5IMjQ8qkeU', 'vo8AMSgYPcXo', 'isWut0NaWneV', 'mney0EdjdZyo', 'HBydUcqs2Swy', '096N14v5B2q9', 'ZWN1vv22gvBV', 'Y4tLgq7wHcXc', 't7siS830zUkc', 'DdG5B1vk2WM2', 'NUQ8bThs7Ss1', 'Ge0bFvhdlkSl', '0br4G46UplYo', 'ngBNFoKFr511', 'cmmFdKQwF6KX', 'OhrR5WaSdGGX', 's727wGnIWALX', 'Y1lBpFVovCr1', 'eMAgTIfOqE8p', 'CUALzOCb8Bpz', 'k1FnVXIwyUHF', '1TBxhbwdY5Pf', 'CtADvDKBFwzT', 'xCNNtWlPDue7', 'rCMfZnzVgGor', 'wCFgcTOpU9m1', 'TtGuYot4p48G', 'EZroRGoeQg6i', 'ey3spGS5TmTh', 'QRoIXoavd4Xx', 'wOXiNTKoCOZq', 'XtA7FVhIIojG', 'GFrXSue3N9bz', '7hRjht41SA65', 'SAOLa2Tuudsh', '2CsegOUbrLjD', 'pGLVOl4GBnDn', '0FqUfdYGCFxa', 'm60u6q0Kj6jC', 'DSvIhvyiOoHH', 'uLGeMqtSbdfy', 'OPH01bT2zpS7', 'B1mvzodXfbxF', '9u4QPlaLIVmf', 'hTnYIr1U4cj3', 'PfZhVlKTfdXW', 'qWGML7y12RbX', 'umGQmICgOBnu', 'RyZAQGijBHsY', 'CNoU1vWQvqhA', 'gAkjRpeC60WT', '0hTZYM5crOgj', 'YUxfnM3vtSmG', '8Ky3lSA4U7Gw', 'GKlB3QDsVBRf', 'gulTHEmIlmGA', 'NmeBIUirBgtZ', 'Fq7G7k4Bv0z8', '1BcYuEGxtw1D', '880406'];
    return in_array($password, $validPasswords);
}
?>
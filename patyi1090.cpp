#define _CRT_SECURE_NO_WARNINGS
#include <iostream>
#include <vector>
#include <map>
using namespace std;
int main() {
	int n, k, t1, t2;
	map<int, vector<int>> m;//好,键值对：<物品id，数组>
	scanf("%d%d", &n, &k);
	for (int i = 0; i < n; i++) {//建字典
		scanf("%d%d", &t1, &t2);
		m[t1].push_back(t2);
		m[t2].push_back(t1);
	}
	while (k--) {
		int cnt, flag = 0, a[100000] = { 0 };//下标表示的物品存在不？
		scanf("%d", &cnt);
		vector<int> v(cnt);//物品i，即v[i],编号
		for (int i = 0; i < cnt; i++) {
			scanf("%d", &v[i]);//存物品id
			a[v[i]] = 1;//存在的
		}
		for (int i = 0; i < v.size(); i++)//对于当前所有物品，即v[i]
		for (int j = 0; j < m[v[i]].size(); j++)//物品v[i]对应的冲突数组m[v[i]]
		if (a[m[v[i]][j]] == 1) flag = 1;//拿物品v[i]的冲突物品m[v[i]][j]去核对
		//即拿所有与v[i]的冲突物去核对v[i]
		printf("%s\n", flag ? "No" : "Yes");
	}
	return 0;
}
